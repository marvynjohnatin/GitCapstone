<?php

class Faculty_model extends CI_Model{
    public function get_details()
    {
        $facultyid = $this->session->userdata['facultyid'];
        $query = $this->db->get_where('teacher', array('Id' => $facultyid));
        return $query->row_array();
    }

}