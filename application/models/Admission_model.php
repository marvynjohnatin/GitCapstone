<?php

class Admission_model extends CI_Model
{
    public function getuserdetails($sessionid){
        $this->db->where('user_id',$sessionid);
        $query = $this->db->get('users');
        return $query->result_array();
    }



    public function createstudent($post_image)
    {

                $fname = $this->input->post('fname');
                $mname = $this->input->post('mname');
                $lname = $this->input->post('lname');
                $admission = $this->input->post('admission');
                $age = $this->input->post('age');
                $birthday = $this->input->post('birthday');
                $gender = $this->input->post('gender');
                $address = $this->input->post('address');
                $birthplace = $this->input->post('birthplace');
                $contactno = $this->input->post('contactno');
                $email = $this->input->post('email');
                $level = $this->input->post('level');
                $year = $this->input->post('admission');
                $examgrade = $this->input->post('examgrade');
                $examremark = $this->input->post('examremark');
                $fatherfname = $this->input->post('fatherfname');
                $fathermname = $this->input->post('fathermname');
                $fatherlname = $this->input->post('fatherlname');
                $fathercontactno = $this->input->post('fathercontactno');
                $fatheremail = $this->input->post('fatheremail');
                $fatheroccupation = $this->input->post('fatheroccupation');
                $motherfname = $this->input->post('motherfname');
                $mothermname = $this->input->post('mothermname');
                $motherlname = $this->input->post('motherlname');
                $mothercontactno = $this->input->post('mothercontactno');
                $motheremail = $this->input->post('motheremail');
                $motheroccupation = $this->input->post('motheroccupation');
                $guardianfname = $this->input->post('guardianfname');
                $guardianmname = $this->input->post('guardianmname');
                $guardianlname = $this->input->post('guardianlname');
                $guardiancontactno = $this->input->post('guardiancontactno');
                $guardianemail = $this->input->post('guardianemail');
                $guardianoccupation = $this->input->post('guardianoccupation');
                $parentid = $this->input->post('accountid');
                $accountfname = $this->input->post('accountfname');
                $accountmname = $this->input->post('accountmname');
                $accountlname = $this->input->post('accountlname');
                $accountcontactno = $this->input->post('accountcontactno');
                $accountemail = $this->input->post('accountemail');

                if($parentid == '') {
                    //Generate UserName
                    $user = strtolower($accountfname . $accountlname);
                    $username = str_replace(' ', '', $user);
                   //Checking of existing username
                    $this->db->where('username',$username);
                    $query = $this->db->get('parent');
                    $count = $query->num_rows();
                    //if there is existing username
                    if($count > 0 )
                    {
                        $count+1;
                        $username = $username.$count;
                    }
                    $account = array(
                        'fname' => $accountfname,
                        'lname' => $accountlname,
                        'mname' => $accountmname,
                        'contactno' => $accountcontactno,
                        'email' => $accountemail,
                        'username' => $username,
                        'password' => 'itsmorefunatsja'
                    );
                    //Creating Query For adding Parent
                    $this->db->insert('parent', $account);
                    //Assigning of ID to variable to use in record of student
                    $parentid = $this->db->insert_id();
                }
                
                $data = array(
                    'fname' => $fname,
                    'lname' => $lname,
                    'mname' => $mname,
                    'age' => $age,
                    'dateofbirth' => $birthday,
                    'gender' => $gender,
                    'address' => $address,
                    'placeofbirth' => $birthplace,
                    'parentid' => $parentid,
                    'contactno' => $contactno,
                    'email' => $email,
                    'current_level' => $level,
                    'current_year' => $year,
                    'status_enrolled' => 'No',
                    'password' => 'itsmorefunatsja',
                    'account_status' => 'Pending',
                    'stud_pic' => $post_image,
                    'examgrade' => 'Pending',
                    'examremark' => $examremark,
                    'fatherfname' => $fatherfname,
                    'fathermname' => $fathermname,
                    'fatherlname' => $fatherlname,
                    'fathercontactno' => $fathercontactno,
                    'fatheremail' => $fatheremail,
                    'fatheroccupation' => $fatheroccupation,
                    'motherfname' => $motherfname,
                    'mothermname' => $mothermname,
                    'motherlname' => $motherlname,
                    'mothercontactno' => $mothercontactno,
                    'motheremail' => $motheremail,
                    'motheroccupation' => $motheroccupation,
                    'guardianfname' => $guardianfname,
                    'guardianmname' => $guardianmname,
                    'guardianlname' => $guardianlname,
                    'guardiancontactno' => $guardiancontactno,
                    'guardianemail' => $guardianemail,
                    'guardianoccupation' => $guardianoccupation
                );
                $query = $this->db->insert('student', $data);
                $lastid = $this->db->insert_id();
                $formedid = $admission . $lastid;
                $data = array(
                    'studentnumber' => str_pad($formedid, 8, "0")
                );
                $this->db->where('id', $lastid);
                $this->db->update('student', $data);
    }

    public function getparents(){
        $query = $this->db->get('parent');
        return $query->result_array();
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
}