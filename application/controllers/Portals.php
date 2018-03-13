<?php
class Portals extends CI_Controller
{
    public function login($page = 'login'){
        $data['title'] = $page;
        $this->load->view('portals/'.$page,$data);
        $studentnumber = $this->input->post('studentnumber');
        $password = $this->input->post('password');
        $student_id = $this->login_model->login($studentnumber,$password);
        if(isset($studentnumber)) {
            if ($student_id) {
                $user_data = array(
                    'studentid' => $student_id[0]['Id'],
                    'fname' => $student_id[0]['fname'],
                    'accounttype' => 'Student',
                    'studentnumber' => $studentnumber,
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('login_success', 'Login Success');
                if ($student_id[0]['account_status'] == 'First') {
                    redirect('portals/accountsetupview');
                } else {
                    redirect('portals/dashboard');
                }
            } else {
                $this->session->set_flashdata('login_failed', 'Login Failed');
                redirect('login');
            }
        }
    }

    public function view(){
        //checking of login status
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Student'){
            die('Please log in');
        }
        //getting details of student
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        
        $this->load->view('templates/header-basic');
        $this->load->view('portals/dashboard', $data);  
    }

    public function accountsetupview(){
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Student'){
            die('Please log in');
        }
       $data = array('studentnumber'=>$this->session->userdata['studentnumber'] ,'id'=>$this->session->userdata['studentid']);
       $this->load->view('portals/accountsetup', $data);
    }

    public function accountsetup()
    {
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Student'){
            die('Please log in');
        }
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        if($this->form_validation->run() === FALSE)
        {
            $data = array('studentnumber'=>$this->session->userdata['studentnumber'] ,'id'=>$this->session->userdata['studentid']);
            $this->load->view('portals/accountsetup', $data);
        }
        else
        {
            $id = $this->input->post('id');
            $password = $this->input->post('password');
            $this->login_model->updatepassword($id,$password);
            //killing session
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('studentid');
            $this->session->unset_userdata('studentnumber');
            $this->session->unset_userdata('fname');
            $this->session->unset_userdata('accounttype');
            redirect('login');

        }
    }

    public function viewgrades(){
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Student'){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-basic');
        $this->load->view('portals/grade',$data);

    }

    public function viewenrollment(){
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Student'){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        $data['sy'] = array($this->student_model->getacademicsy());

        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-basic');
        $this->load->view('portals/enrollment',$data);
    }

    public function viewschedule(){
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Student'){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-basic');
        $this->load->view('portals/schedule',$data);
    }

    public function viewaccount(){
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Student'){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if ($payment = 'Monthly') {
            $startdate = $this->student_model->getstart();
            $enddate = $this->student_model->getend();
            $start = new DateTime($startdate);
            $start->modify('first day of this month');
            $end = new DateTime($enddate);
            $end->modify('first day of next month');
            $interval = DateInterval::createFromDateString('1 month');

            $period = new DatePeriod($start, $interval, $end);
            foreach ($period as $dt) {
                $data['months']['month'][] = $dt->format("F");
            }
        }
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-basic');
        $this->load->view('portals/account',$data);

    }

    public function viewpayment(){
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Student'){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        $studentnumber = $data['results']['studentnumber'];
        $schoolyear = $this->student_model->getacademicsy();
        $schoolyear = $this->student_model->getacademicsy();
        $data['sy'] = array($this->student_model->getacademicsy());
        $data['invoices'] = $this->student_model->getinvoices($studentnumber,$schoolyear);
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-basic');
        $this->load->view('portals/payment',$data);
    }

     public function viewdetails(){
         if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Student'){
             die('Please log in');
         }
        $payment = $this->input->post('payment');
        $year = $this->input->post('currentyear');
        $strand = $this->input->post('strand');
        $data['sy'] = array($this->student_model->getacademicsy());
        if($payment = 'Full')
        {
            $data['discount'] = array($this->student_model->getacademicfulldiscount());
        }
        $data['results'] = $this->student_model->get_details();
        $data['subjects'] = $this->student_model->get_subjects($year,$strand);
        $data['fees'] = $this->student_model->get_fees($year,$strand);
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-basic');
        $this->load->view('portals/details',$data);

    }

    public function viewgradeslist(){
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Student'){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-basic');
        $this->load->view('portals/gradelist',$data);
    }

    public function viewmaintenance(){
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Student'){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-basic');
        $this->load->view('templates/navbar-portal');
        $this->load->view('portals/maintenance',$data);
        $this->load->view('templates/footer');
    }

    public function logout(){
        //killing session
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('studentid');
        $this->session->unset_userdata('studentnumber');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('accounttype');
        //message for logging out
        $this->session->set_flashdata('logged_out','You account has been logged out!');
        //redirect to login
        redirect('login');
    }



    public function test(){
       $this->load->view('portals/smsbalance');
    }

    public function addinvoicerecord(){
        $payment = $this->input->post('payment');
        $studno = $this->input->post('studentnumber');
        $total = $this->input->post('totalfee');
        $sy = $this->input->post('schoolyear');
        $amount = round($total,2);
        if ($payment = 'Monthly')
        {
            $startdate = $this->student_model->getstart();
            $enddate = $this->student_model->getend();
            $start = new DateTime($startdate);
            $start->modify('first day of this month');
            $end = new DateTime($enddate);
            $end->modify('first day of next month');
            $interval = DateInterval::createFromDateString('1 month');
            $period = new DatePeriod($start, $interval, $end);
            $nummonths = 0;
            foreach ($period as $dt) {
                $data['months'][] = $dt->format("F");
                $nummonths++;
            }
            $totalamount = $amount/$nummonths;
            $totalamount = round($totalamount,2);
            foreach ($data['months'] as $month){
                $this->student_model->insertinvoicerecord($studno,$sy,$totalamount,$month);
            }
        }
        redirect('portals/payment');
    }

    public function getinvoicedetails()
    {
        //AJAX converted to CI
        $id = $this->input->post('sid');
        $array = $this->student_model->getinvoicedetails($id);
        $encode = json_encode($array);
        echo $encode;
    }

    public function paymentsuccess()
    {
        $this->load->view('portals/success');
    }

}