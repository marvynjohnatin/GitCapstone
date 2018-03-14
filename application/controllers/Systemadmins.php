<?php
class Systemadmins extends CI_Controller {

	public function _construct()
	{
		parent::_construct();
		$this->load->library('pdf_report');
		$this->load->model(array('systemadmin_model'));
	}

    public function viewsendtextmessage()
    {
        $data['account'] = $this->systemadmin_model->getuserdetails($this->session->userdata['user_id']);
        $this->load->view('templates/header-basic');
        $this->load->view('templates/navbar-systemadmin');
        $this->load->view('systemadmin/sendtextmessage');
    }

    public function viewcreateschedule()
    {
        $data['account'] = $this->systemadmin_model->getuserdetails($this->session->userdata['user_id']);
        $data['sections'] = $this->systemadmin_model->getsections();
        $this->load->view('templates/header-basic');
        $this->load->view('templates/navbar-systemadmin');
        $this->load->view('systemadmin/createschedule',$data);
    }

    public function sectionscheduleview($id = false)
    {
        $data['account'] = $this->systemadmin_model->getuserdetails($this->session->userdata['user_id']);
        $data['sections'] = $this->systemadmin_model->getsections($id);

        $this->load->view('templates/header-basic');
        $this->load->view('templates/navbar-systemadmin');
        $this->load->view('systemadmin/scheduling',$data);
    }

	public function index()
	{
		$code = $this->input->get('code');
		$this->load->model('systemadmin_model');
		$data['data'] = $this->systemadmin_model->getsubjectlist($code);
		$this->load->view('systemadmin/v_report',$data);

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

    public function sending()
    {
        $level = $this->input->post('level');
        $data['contact'] = array();
        if($level == 'all') {
            $data['contact'] = $this->systemadmin_model->getstudentstosend('All');
        }
        if($level == 'elem') {
            $data['contact'] = $this->systemadmin_model->getstudentstosend('Elementary');
        }
        if($level == 'hs') {
            $data['contact'] = $this->systemadmin_model->getstudentstosend('Highschool');
        }
        if($level == 'shs') {
            $data['contact'] = $this->systemadmin_model->getstudentstosend('Senior Highschool');
        }
        foreach($data['contact'] as $contact) {


            $ch = curl_init();
            $parameters = array(
                'apikey' => 'af1ea6834291b8b3e73494d4c5db6bbd', //Your API KEY
                'number' => $contact['contactno'],
                'message' => $this->input->post('text')
            );
            curl_setopt($ch, CURLOPT_URL, 'http://api.semaphore.co/api/v4/messages');
            curl_setopt($ch, CURLOPT_POST, 1);

            //Send the parameters set above with the request
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));
            // Receive response from server
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $output = curl_exec($ch);
            curl_close($ch);
            //Show the server response
            $obj = json_decode($output, true);

        }
        redirect('systemadmin/sendtextmessage');
















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
