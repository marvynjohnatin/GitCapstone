<?php
class Systemadmins extends CI_Controller {

	public function studentlist()
	{
		$this->load->view('templates/header-basic');
		$this->load->view('templates/navbar-systemadmin');
        $this->load->view('systemadmin/studentlist');
	}

	public function yearlist()
	{
		$this->load->view('templates/header-basic');
		$this->load->view('templates/navbar-systemadmin');
        $this->load->view('systemadmin/yearlist');
	}

	public function sectionlist()
	{
		$this->load->view('templates/header-basic');
		$this->load->view('templates/navbar-systemadmin');
        $this->load->view('systemadmin/sectionlist');
	}


}
