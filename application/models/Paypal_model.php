<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Paypal_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	/* This function create new Service. */

	function create($itemid,$itemname,$itemdescription,$price) {

        date_default_timezone_set("Asia/Manila");
        $datetime = date('F j, Y g:i:a  ');
        $data = array(
            'paid_status' => 'Yes',
            'paymentmode' => 'paypal',
            'payment_date' => $datetime
        );
        $this->db->where('Id',$itemid);
        $this->db->update('payment', $data);
	}

}