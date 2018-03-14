<?php

class Admission_model extends CI_Model
{
    public function getuserdetails($sessionid){
        $this->db->where('user_id',$sessionid);
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function createapplicant($birthcertificate,$formone,$formnine,$goodmoral,$baptismal,$honorcertificate)
    {
        $array = array(
        'fname' => $this->input->post('fname'),
        'mname' => $this->input->post('mname'),
        'lname' => $this->input->post('lname'),
        'age' => $this->input->post('age'),
        'dateofbirth' => $this->input->post('birthday'),
        'gender' => $this->input->post('gender'),
        'address' => $this->input->post('address'),
        'placeofbirth' => $this->input->post('birthplace'),
        'contactno' => $this->input->post('contactno'),
        'email' => $this->input->post('email'),
        'honorcertificate'=>$honorcertificate,
        'birthcertificate'=>$birthcertificate,
        'form137'=>$formone,
        'form9'=>$formnine,
        'goodmoral'=>$goodmoral,
        'baptismal'=>$baptismal,
        'admit_status'=>'Applicant'
    );
        $this->db->insert('student',$array);
        return true;
    }

    public function createstudent($post_image)
    {
        date_default_timezone_set('Asia/Manila');
        $admissionyear = date('Y');
        $applicantid = $this->input->post('appid');
        $primaryrole = $this->input->post('primaryrole');
        $fatherid= $this->input->post('fatherid');
        $motherid= $this->input->post('motherid');
        $guardianid= $this->input->post('guardianid');
        $studentnumber = str_pad($admissionyear.$applicantid, 8, "0");
        $studentpassword = $this->generateRandomString();
        $data = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'mname' => $this->input->post('mname'),
            'age' => $this->input->post('age'),
            'dateofbirth' => $this->input->post('birthday'),
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('address'),
            'placeofbirth' => $this->input->post('birthplace'),
            'contactno' => $this->input->post('contactno'),
            'email' => $this->input->post('email'),
            'current_level' => $this->input->post('level'),
            'current_year' => $this->input->post('grade'),
            'current_strand' => $this->input->post('strand'),
            'status_enrolled' => 'No',
            'studentnumber' =>$studentnumber ,
            'password' => $studentpassword,
            'account_status' => 'Pending',
            'stud_pic' => $post_image,
            'examgrade' => $this->input->post('examgrade'),
            'examremark' => $this->input->post('examremark'),
            'examdate' => $this->input->post('examdate'),
            'fatherfname' => $this->input->post('fatherfname'),
            'fathermname' => $this->input->post('fathermname'),
            'fatherlname' => $this->input->post('fatherlname'),
            'fathercontactno' => $this->input->post('fathercontactno'),
            'fatheremail' => $this->input->post('fatheremail'),
            'fatheroccupation' => $this->input->post('fatheroccupation'),
            'motherfname' => $this->input->post('motherfname'),
            'mothermname' => $this->input->post('mothermname'),
            'motherlname' => $this->input->post('motherlname'),
            'mothercontactno' => $this->input->post('mothercontactno'),
            'motheremail' => $this->input->post('motheremail'),
            'motheroccupation' => $this->input->post('motheroccupation'),
            'guardianfname' => $this->input->post('guardianfname'),
            'guardianmname' => $this->input->post('guardianmname'),
            'guardianlname' => $this->input->post('guardianlname'),
            'guardiancontactno' => $this->input->post('guardiancontactno'),
            'guardianemail' => $this->input->post('guardianemail'),
            'guardianoccupation' => $this->input->post('guardianoccupation')
        );
        $this->db->where('Id',$applicantid);
        $this->db->update('student', $data);

        if($fatherid == '') {
            $fatherusername = $this->usernamechecker($this->input->post('fatherfname'), $this->input->post('fatherlname'));
            $fatherpassword = $this->generateRandomstring();
            $fatherarr = array(
                'parentrole' => 'father',
                'fname' => $this->input->post('fatherfname'),
                'mname' => $this->input->post('fathermname'),
                'lname' => $this->input->post('fatherlname'),
                'address' => $this->input->post('fatheraddress'),
                'contactno' => $this->input->post('fathercontactno'),
                'email' => $this->input->post('fatheremail'),
                'occupation' => $this->input->post('fatheroccupation'),
                'username' => $fatherusername,
                'password' => $fatherpassword
                );
            if($primaryrole == 'father') {
                $this->db->insert('parent', $fatherarr);
                $fatherid = $this->db->insert_id();
            }
        }

        if($motherid == '') {
            $motherusername = $this->usernamechecker($this->input->post('motherfname'), $this->input->post('motherlname'));
            $motherpassword = $this->generateRandomstring();
            $motherarr = array(
                'parentrole' => 'mother',
                'fname' => $this->input->post('motherfname'),
                'mname' => $this->input->post('mothermname'),
                'lname' => $this->input->post('motherlname'),
                'address' => $this->input->post('motheraddress'),
                'contactno' => $this->input->post('mothercontactno'),
                'email' => $this->input->post('motheremail'),
                'occupation' => $this->input->post('motheroccupation'),
                'username' => $motherusername,
                'password' => $motherpassword
                );
            if($primaryrole == 'mother') {
                $this->db->insert('parent', $motherarr);
                $motherid = $this->db->insert_id();
            }
        }

        if($guardianid == '') {
            $guardianusername = $this->usernamechecker($this->input->post('guardianfname'), $this->input->post('guardianlname'));
            $guardianpassword = $this->generateRandomstring();
            $guardianarr = array(
                'parentrole' => 'guardian',
                'fname' => $this->input->post('guardianfname'),
                'mname' => $this->input->post('guardianmname'),
                'lname' => $this->input->post('guardianlname'),
                'address' => $this->input->post('guardianaddress'),
                'contactno' => $this->input->post('guardiancontactno'),
                'email' => $this->input->post('guardianemail'),
                'occupation' => $this->input->post('guardianoccupation'),
                'username' => $guardianusername,
                'password' => $guardianpassword
                );
            if($primaryrole == 'guardian')
            {
            $this->db->insert('parent', $guardianarr);
            $guardianid = $this->db->insert_id();
            }
        }

        $parentid = '';
        if($primaryrole == 'father')
        {
            $parentid = $fatherid;
        }
        elseif($primaryrole == 'mother')
        {
            $parentid = $motherid;
        }
        elseif($primaryrole == 'guardian')
        {
            $parentid = $guardianid;
        }
        $parentarr = array(
            'parentaccountid' => $parentid,
            'admit_status' => 'Admitted'
        );
        $this->db->where('Id',$applicantid);
        $this->db->update('student', $parentarr);
    }

    public function getparents($roles=false){
        if($roles !== false) {
            $this->db->where('parentrole',$roles);
            $query = $this->db->get('parent');
            return $query->result_array();
        }
        else
        {
            $query = $this->db->get('parent');
            return $query->result_array();
        }
    }

    public function getapplicants($id=false){
        $this->db->where('admit_status', 'Applicant');
        if($id === false) {
            $query = $this->db->get('student');
            return $query->result_array();
        }
        else{
            $this->db->where('Id', $id);
            $query = $this->db->get('student');
            return $query->result_array();
        }
    }

    public function getparentdetails($id){
        $this->db->where('Id',$id);
        $query = $this->db->get('parent');
        return $query->result_array();
    }

    public function getpendingstudents()
    {
        $this->db->where('account_status', 'Pending');
        $query = $this->db->get('student');
        return $query->result_array();
    }

    public function getparentactivation($parentid){
        $this->db->where('Id',$parentid);
        $query = $this->db->get('parent');
        return $query->result_array();
    }

    public function getstudentactivation($studentid){
        $this->db->where('Id',$studentid);
        $query = $this->db->get('student');
        return $query->result_array();
    }

    public function activatestudentrecord($studentid){
        $data = array(
            'account_status' => 'First'
        );
        $this->db->where('Id', $studentid);
        $this->db->update('student', $data);
    }

    public function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function usernamechecker($fname,$lname) {
        $user = strtolower($fname . $lname);
        $username = str_replace(' ', '', $user);
        //Checking of existing username
        $this->db->where('username',$username);
        $query = $this->db->get('parent');
        $count = $query->num_rows();
        //if there is existing username
        if($count > 0 )
        {
            $count+1;
        }
        else
        {
            $count = '';
        }
        $username = $username.$count;
        return $username;
    }
}