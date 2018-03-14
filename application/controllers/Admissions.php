<?php
class Admissions extends CI_Controller {

    public function viewcreatestudent()
    {
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Admission'){
            die('Please log in');
        }
        $data['account'] = $this->admission_model->getuserdetails($this->session->userdata['user_id']);
        $data['fathers'] = $this->admission_model->getparents('father');
        $data['mothers'] = $this->admission_model->getparents('mother');
        $data['guardians'] = $this->admission_model->getparents();
        $data['applicants'] = $this->admission_model->getapplicants();
        $data['strands'] = $this->systemadmin_model->getstrands();
        $this->load->view('templates/header-basic');
        $this->load->view('admission/createstudent',$data);
    }

    public function viewcreateapplicant()
    {
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Admission'){
            die('Please log in');
        }
        $data['account'] = $this->admission_model->getuserdetails($this->session->userdata['user_id']);
        $this->load->view('templates/header-basic');
        $this->load->view('admission/createapplicant',$data);
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
            $post_image = 'noimage.jpg';
        }
        else
        {
            $post_image = $_FILES['userfile']['name'];
        }
        $this->admission_model->createstudent($post_image);
        redirect('admission/addstudent');
    }

    public function createapplicant()
    {
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Admission'){
            die('Please log in');
        }
        //Upload Image
        $config['upload_path'] = './assets/images/applicant';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['overwrite'] = true;
        $this->load->library('upload',$config);
        $this->upload->do_upload('birthfile');
        $this->upload->do_upload('formonethreeseven');
        $this->upload->do_upload('formnine');
        $this->upload->do_upload('goodmoral');
        $this->upload->do_upload('baptismal');
        $this->upload->do_upload('honorfile');
        $birthcertificate = $_FILES['birthfile']['name'];
        $formone = $_FILES['formonethreeseven']['name'];
        $formnine = $_FILES['formnine']['name'];
        $goodmoral = $_FILES['goodmoral']['name'];
        $baptismal = $_FILES['baptismal']['name'];
        $honorcertificate = $_FILES['honorfile']['name'];
        if(!$this->admission_model->createapplicant($birthcertificate,$formone,$formnine,$goodmoral,$baptismal,$honorcertificate))
        {
            show_404();
        }
        else {
            redirect('admission/viewcreateapplicant');
        }
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

    public function activating(){
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Admission'){
            die('Please log in');
        }
        $studentid = $this->input->post('studentid');

        //Get Parent Id
        $this->db->select('parentaccountid');
        $this->db->where('Id',$studentid);
        $parentdetails =$this->db->get('student')->result_array();
        $parentid= $parentdetails[0]['parentaccountid'];
        $data['parent'] = $this->admission_model->getparentactivation($parentid);
        $data['student'] = $this->admission_model->getstudentactivation($studentid);
        $ch = curl_init();
        $parameters = array(
        'apikey' => 'af1ea6834291b8b3e73494d4c5db6bbd', //Your API KEY
        'number' => $data['parent'][0]['contactno'],
        'message' => 'Your account is now activated! Credentials For your account is Username:'.$data['parent'][0]['username'].' Password:'.
                      $data['parent'][0]['password']. ' and for '. $data['student'][0]['fname'].' Username:'. $data['student'][0]['studentnumber'].
                      ' Password: '. $data['student'][0]['password']. ' Log in at localhost/GitCapstone/login',
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
        }

        redirect('admission/activatestudent');
    }

    public function getparentdetails()
    {
        //AJAX converted to CI
        $id = $this->input->post('sid');
        $array = $this->admission_model->getparentdetails($id);
        $encode = json_encode($array);
        echo $encode;
    }

    public function getappdetails()
    {
        //AJAX converted to CI
        $id = $this->input->post('sid');
        $array = $this->admission_model->getapplicants($id);
        $encode = json_encode($array);
        echo $encode;
    }

}
