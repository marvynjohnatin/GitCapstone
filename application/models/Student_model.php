<?php

class Student_model extends CI_Model{
    public function get_details()
    {
        $studentid = $this->session->userdata['studentid'];
        $query = $this->db->get_where('student', array('Id' => $studentid));
        return $query->row_array();
    }

    public function getacademicsy()
    {
        $this->db->where('settingname','schoolyear');
        $query = $this->db->get('academic');
        $ret = $query->row();
        return $ret->value;
    }

    public function getacademicfulldiscount()
    {
        $this->db->where('settingname','fulldiscount');
        $query = $this->db->get('academic');
        $ret = $query->row();
        return $ret->value;
    }
    public function getstart()
    {
        $this->db->where('settingname','startingdate');
        $query = $this->db->get('academic');
        $ret = $query->row();
        return $ret->value;
    }
    public function getend()
    {
        $this->db->where('settingname','endingdate');
        $query = $this->db->get('academic');
        $ret = $query->row();
        return $ret->value;
    }

    public function get_subjects($year,$strand)
    {
        $this->db->where('subject_year',$year);
        if($strand != '')
        {
            $this->db->where('subject_strand',$strand);
        }
        $query = $this->db->get('subjects');

        return $query->result_array();
    }

    public function get_fees($year,$strand)
    {
        $this->db->where('level',$year);
        $this->db->or_where('level','General');
        $this->db->or_where('strand',$strand);
        if($year == 11 || $year == 12) {
            $this->db->or_where('strand', 'General');
        }
        $query = $this->db->get('fee');

        return $query->result_array();
    }

}