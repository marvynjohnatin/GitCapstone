<?php
class Logins extends CI_Controller {

    public function login(){
        $this->session->unset_userdata('logged_in');
        $this->load->view('login/login');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //checking if username isset if not session comment will not be created.
        if(isset($username))
        {
            $user_id = $this->login_model->loginuser($username,$password);
            if($user_id){
                $user_data= array(
                    'user_id' =>  $user_id[0]['user_id'],
                    'fname' => $user_id[0]['fname'],
                    'accounttype' => $user_id[0]['user_type'],
                    'username' => $username,
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);
                if($user_id[0]['user_type'] == 'Registrar') {
                    redirect('registrar/studentlist');
                }
                if($user_id[0]['user_type'] == 'Admission') {
                    redirect('admission/activatestudent');
                }
                if($user_id[0]['user_type'] == 'SystemAdmin') {
                    redirect('systemadmin/subjects');
                }
            }
            else{

                $this->session->set_flashdata('login_failed','Login Failed!');
                redirect('logins/login');
            }
        }
    }

    public function logout(){
        //killing session
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('accounttype');
        $this->session->unset_userdata('fname');

        //message for logging out
        $this->session->set_flashdata('logged_out','You account has been logged out!');
        //redirect to login
        redirect('loginuser');
    }
}
