<?php

class Student_model extends CI_Model{
    public function get_details()
    {
        $studentid = $this->session->userdata['studentid'];
        $query = $this->db->get_where('student', array('Id' => $studentid));
        return $query->row_array();
    }

}