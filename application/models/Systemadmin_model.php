<?php

class Systemadmin_model extends CI_Model{


    function _construct()
    {
    	parent::_construct();
    }

    public function getuserdetails($sessionid){
        $this->db->where('user_id',$sessionid);
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function getsubjectlist($code)
    {
        $this->load->database();
        $this->db->where('subject_code',$code);
        $data = $this->db->get('subjects');
        return $data->result();
    }

    public function insertdata()
    {
    	$fields = array(
    		'subject_name' => $this->input->post('description'),
            'subject_code' => $this->input->post('code'),
    		'subject_level' => $this->input->post('level'),
    		'subject_year' => $this->input->post('year'),
    		'subject_strand' => $this->input->post('course'),
    		'coordinator' => $this->input->post('coordinator')
    	);

    	//insert process 
    	$this->db->insert('subject',$fields);

    }

    public function getsubjects(){
        $query = $this->db->get('subjects');
        return $query->result_array();
    }

    public function getfees(){
        $query = $this->db->get('fee');
        return $query->result_array();
    }

    public function addfee(){
        $fields = array(
            'fee_description' => $this->input->post('description'),
            'level' => $this->input->post('level'),
            'year' => $this->input->post('year'),
            'strand' => $this->input->post('strand'),
            'amount' => $this->input->post('amount')
        );
        //insert process
        $this->db->insert('fee',$fields);
    }

    public function getstrands(){
        $query = $this->db->get('strand');
        return $query->result_array();
    }


}