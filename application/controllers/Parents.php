<?php
class Parents extends CI_Controller {

	public function dashboard()
	{
		$this->load->view('templates/header-2');
        $this->load->view('templates/navbar-parent');
        $this->load->view('parent/dashboard');
        $this->load->view('templates/footer');
	}
	public function maintenance()
	{
		$this->load->view('templates/header-2');
        $this->load->view('templates/navbar-parent');
        $this->load->view('parent/maintenance');
        $this->load->view('templates/footer');
	}

	public function sample()
	{

		$data['students'] = $this->db->get('student')->result();
		$this->load->view('parent/sample',$data);

    
	}
}
