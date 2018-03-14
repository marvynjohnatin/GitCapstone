<?php

class Registrar_model extends CI_Model{
        public function getstudents()
        {
            $query = $this->db->get('student');
            return $query->result_array();
        }

    public function getuserdetails($sessionid){
        $this->db->where('user_id',$sessionid);
        $query = $this->db->get('users');
        return $query->result_array();
    }

}