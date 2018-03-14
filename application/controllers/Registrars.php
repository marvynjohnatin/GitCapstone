<?php
class Registrars extends CI_Controller {

	public function viewstudentlist()
	{
	    if(!isset($this->session->userdata['logged_in'])){
        die('Please log in');
         }
        if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['accounttype'] != 'Registrar'){
            die('Please log in');
        }
        $data['account'] = $this->registrar_model->getuserdetails($this->session->userdata['user_id']);
        $data['students'] = $this->registrar_model->getstudents();
		$this->load->view('templates/header-basic');
        $this->load->view('registrar/studentlist', $data);
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
