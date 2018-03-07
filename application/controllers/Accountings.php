<?php
class Accountings extends CI_Controller {

	public function studentlist()
	{
		$this->load->view('templates/header-2');
        $this->load->view('accounting/studentlist');
	}

	public function account()
	{
		$this->load->view('templates/header-2');
        $this->load->view('accounting/account');
	}

	public function payment()
	{
		$this->load->view('templates/header-2');
        $this->load->view('accounting/payment');
	}
}
