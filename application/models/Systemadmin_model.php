<?php

class Systemadmin_model extends CI_Model{
    
    protected $table = 'subjects';

    function _construct()
    {
    	parent::_construct();
    }

    public function insertdata()
    {
    	$fields = array(
    		'subject_name' => $this->input->post('description'),
    		'subject_level' => $this->input->post('level'),
    		'subject_year' => $this->input->post('year'),
    		'subject_course' => $this->input->post('course'),
    		'coordinator' => $this->input->post('coordinator')
    	);

    	//insert process 
    	$this->db->insert($this->table,$fields);

    }

}