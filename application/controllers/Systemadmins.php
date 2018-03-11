<?php
class Systemadmins extends CI_Controller {

	public function _construct()
	{
		parent::_construct();
		$this->load->library('pdf_report');
		$this->load->model(array('systemadmin_model'));
	}

	public function index()
	{
		$data = $this->systemadmin_model->getsubjectlist();
		$this->load->view('systemadmin/v_report',['data'=>$data]);

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

    public function managefees()
    {
        $data['account'] = $this->systemadmin_model->getuserdetails($this->session->userdata['user_id']);
        $data['fees'] = $this->systemadmin_model->getfees();
        $data['strands'] = $this->systemadmin_model->getstrands();
        $this->load->view('templates/header-basic');
        $this->load->view('templates/navbar-systemadmin',$data);
        $this->load->view('systemadmin/managefees',$data);
    }

    public function addfee()
    {
        $this->systemadmin_model->addfee();
        redirect('systemadmin/managefees');
    }


    public function subjects()
	{
		$check= $this->input->post('description');
		if(isset($check))
		{
			$this->systemadmin_model->insertdata();
		}
        $data['account'] = $this->systemadmin_model->getuserdetails($this->session->userdata['user_id']);
        $data['subjects'] = $this->systemadmin_model->getsubjects();
		$this->load->view('templates/header-basic');
		$this->load->view('templates/navbar-systemadmin',$data);
        $this->load->view('systemadmin/subjects',$data);
	}


}
