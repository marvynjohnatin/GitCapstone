<?php
class Admissions extends CI_Controller {

    public function viewcreatestudent()
    {
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Admission'){
            die('Please log in');
        }
        $data['account'] = $this->admission_model->getuserdetails($this->session->userdata['user_id']);
        $data['parents'] = $this->admission_model->getparents();
        $this->load->view('templates/header-basic');
        $this->load->view('admission/createstudent',$data);
    }

    public function createstudent()
    {
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Admission'){
            die('Please log in');
        }
        //Upload Image
        $config['upload_path'] = './assets/images/students';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['overwrite'] = true;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload())
        {
            $errors = array('error' => $this->upload->display_errors());
            $post_image = 'noimage.jpg';
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $post_image = $_FILES['userfile']['name'];
        }

        $this->admission_model->createstudent($post_image);
        redirect('admission/addstudent');
    }

    public function activatestudent($offset = 0)
    {
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Admission'){
            die('Please log in');
        }
            $data['account'] = $this->admission_model->getuserdetails($this->session->userdata['user_id']);
            $data['results'] = $this->admission_model->getpendingstudents();
            $this->load->view('templates/header-basic');
            $this->load->view('admission/activatestudent', $data);
    }

    public function activate($offset = 0)
    {
        if(!isset($this->session->userdata['logged_in']) && $this->session->userdata['accounttype'] != 'Admission'){
            die('Please log in');
        }
        if(!isset($this->session->userdata['studentid'])) {
            $studentid = $this->input->post('studentid');
            $user_data = array(
                'studentid' => $studentid
            );
            $this->session->set_userdata($user_data);
        }
        if(!isset($this->session->userdata['studentid']))
        {
            redirect('admission/activatestudent');
        }
        $search = $this->input->get('search');
        $config['base_url'] =base_url("admissions/activate/");
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'pagination-link');
        if(!isset($search)) {
            $config['total_rows'] = $this->admission_model->numberofparents();
            $this->pagination->initialize($config);
            $data['results'] = $this->admission_model->getparents($config['per_page'],$offset);
            $this->load->view('templates/header');
            $this->load->view('admission/activate', $data);
        }
        else{
            if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
            $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
            $config['total_rows'] = $this->admission_model->numbersearchedparent($search);
            $this->pagination->initialize($config);
            $data['results'] = $this->admission_model->getsearchedparent($search,$config['per_page'],$offset);
            $this->load->view('templates/header');
            $this->load->view('admission/activate', $data);
        }
    }

    public function activating(){
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Admission'){
            die('Please log in');
        }
        $parentid = $this->input->post('parentid');
        $studentid = $this->session->userdata['studentid'];
        if(!isset($parentid))
        {
            redirect('admission/activatestudent');
        }
        $data['parent'] = $this->admission_model->getparentactivation($parentid);
        $data['student'] = $this->admission_model->getstudentactivation($studentid);
        $ch = curl_init();
        $parameters = array(
        'apikey' => 'af1ea6834291b8b3e73494d4c5db6bbd', //Your API KEY
        'number' => $data['parent'][0]['contactno'],
        'message' => 'Your account is now activated! Credentials For your account is Username:'.$data['parent'][0]['username'].' Password:'.
                      $data['parent'][0]['password']. ' and for '. $data['student'][0]['fname'].' Username:'. $data['student'][0]['studentnumber'].
                      ' Password: '. $data['student'][0]['password']. ' Log in at localhost/Capstone1/login',
        'sendername' => 'SJACADEMY'
        );
        curl_setopt( $ch, CURLOPT_URL,'http://api.semaphore.co/api/v4/messages' );
        curl_setopt( $ch, CURLOPT_POST, 1 );

        //Send the parameters set above with the request
        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );
        // Receive response from server
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $output = curl_exec( $ch );
        curl_close ($ch);
        //Show the server response
        $obj = json_decode($output, true);
        $status = $obj[0]['status'];
        if($status = 'Pending')
        {
            $this->admission_model->activatestudentrecord($studentid);
            die('Success!');
        }
    }

}
