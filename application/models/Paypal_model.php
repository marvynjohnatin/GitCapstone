<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Paypal_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	/* This function create new Service. */

	function create($itemid,$itemname,$itemdescription,$price,$transid) {

        date_default_timezone_set("Asia/Manila");
        $datetime = date('F j, Y g:i:a  ');
        $data = array(
                'paid_status' => 'Yes',
                'paymentmode' => 'Paypal',
                'transid' => $transid,
                'payment_date' => $datetime
        );
        if($itemdescription == 'Initial' || 'Upon Enrollment') {
            $update = array(
                'status_enrolled' => 'Enrolled'
            );
        $this->db->where('studentnumber',$this->session->userdata['studentnumber']);
        $this->db->update('student', $update);
        }

        $this->db->where('Id',$itemid);
        $this->db->update('payment', $data);
	}

}