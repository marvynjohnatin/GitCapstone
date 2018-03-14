<?php
class Registrars extends CI_Controller {

	public function login(){
    $this->load->view('registrar/login');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    //checking if username isset if not session comment will not be created.
        if(isset($username))
    {
        $user_id = $this->login_model->loginregistrar($username,$password);
        if($user_id){
            $user_data= array(
                'user_id' =>  $user_id[0]['user_id'],
                'fname' => $user_id[0]['fname'],
                'accounttype' => $user_id[0]['user_type'],
                'username' => $username,
                'logged_in' => true
            );
            $this->session->set_userdata($user_data);
            redirect('registrar/studentlist');
        }
        else{
            $this->session->set_flashdata('login_failed','Login Failed!');
            redirect('registrar/login');
        }
    }
    }

    public function studentlist()
    {
        $this->load->view('templates/header-basic');
        $this->load->view('templates/navbar-registrar');
        $this->load->view('registrar/studentlist');
    }

    public function sectionlist()
    {
        $this->load->view('templates/header-basic');
        $this->load->view('templates/navbar-registrar');
        $this->load->view('registrar/sectionlist');
    }

    public function yearlist()
    {
        $this->load->view('templates/header-basic');
        $this->load->view('templates/navbar-registrar');
        $this->load->view('registrar/yearlist');
    }

    public function scholarship()
    {
        $this->load->view('templates/header-basic');
        $this->load->view('templates/navbar-registrar');
        $this->load->view('registrar/scholarship');
    }

    public function logout(){
        //killing session
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('username');

        //message for logging out
        $this->session->set_flashdata('logged_out','You account has been logged out!');
        //redirect to login
        redirect('registrar/login');
    }
}
