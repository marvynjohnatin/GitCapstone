<?php

    class Login_model extends CI_Model{
        public function login($studentnumber,$password)
        {
            //validate credentials
            $this->db->where('studentnumber',$studentnumber);
            $this->db->where('password',$password);
            $result = $this->db->get('student');
            if($result->num_rows() == 1)
            {
                return $result->result_array();
            }
            else{
                return false;
            }
        }


        public function loginfaculty($facultynumber,$password)
        {
            //validate credentials
            
            $this->db->where('teacher_ID',$facultynumber);
            $this->db->where('password',$password);
            $result = $this->db->get('teacher');

            if($result->num_rows() == 1)
            {
                return $result->result_array();
            }
            else{
                return false;
            }
        }
		
		public function loginuser($username,$password)
        {
            //validate credentials
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $result = $this->db->get('users');

            //checking of account type
            if($result->num_rows() == 1)
            {
                return $result->result_array();
            }
            else{
                return false;
            }
        }

        public function updatepassword($id,$password)
        {
            $data = array(
                'password' => $password,
                'account_status' => 'Activated'
            );
            $this->db->where('Id', $id);
            return $this->db->update('student', $data);
        }


    }