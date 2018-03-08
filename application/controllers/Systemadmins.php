<?php
class Systemadmins extends CI_Controller {

	public function _construct()
	{
		parent::_construct();

		$this->load->model(array('systemadmin_model'));
	}
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

	public function subjects()
	{
		$check= $this->input->post('description');
		if(isset($check))
		{
			$this->systemadmin_model->insertdata();
		}

		$this->load->view('templates/header-basic');
		$this->load->view('templates/navbar-systemadmin');
        $this->load->view('systemadmin/subjects');
	}


}
