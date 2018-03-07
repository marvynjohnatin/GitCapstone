<?php

class Registrar_model extends CI_Model{
        public function getstudents()
        {
            $query = $this->db->get('student');
            return $query->result_array();
        }
    public function createstudent()
    {
        $number = $this->input->post('number');
        if ($number <= 0) {
            redirect('registrar/addstudent');
        } else {
            for ($count = 1; $count <= $number; $count++) {
                $fname = $this->input->post('fname-' . $count);
                $mname = $this->input->post('mname-' . $count);
                $lname = $this->input->post('lname-' . $count);
                $admission = $this->input->post('admission-' . $count);
                $data = array(
                    'fname' => $fname,
                    'lname' => $lname,
                    'middlename' => $mname,
                    'account_status' => 'Pending'
                );
                $query = $this->db->insert('student', $data);
                $lastid = $this->db->insert_id();
                $formedid = $admission . $lastid;
                $data = array(
                    'student_ID' => str_pad($formedid, 8, "0")
                );
                $this->db->where('id', $lastid);
                $this->db->update('student', $data);
            }
        }
        return true;
    }
}