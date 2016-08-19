<?php

class Admin_Model extends CI_Model {

    function __construct() {

        parent::__construct();
    }
	
	
		function insert_user()
		{
			
			$name=$_POST['name'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$dob=$_POST['dob'];
			$country=$_POST['country'];
			$about=$_POST['about'];
			
			$data = array('name'=>$name,
						  'email'=>$email,
						  'mobile_number'=>$mobile,
						  'birth_date'=>$dob,
						  'country'=>$country,
						  'about_you'=>$about
						  );
			$this->db->insert('guest_info', $data);
			return $this->db->affected_rows();
			
		}
		
		function get_all_user()
		{
             $this->db->select('*');
             $this->db->from('guest_info');
             $query = $this->db->get();
                if($query->num_rows() == 0)
                {
                return '';   
                }
                else
                {
                return $query->result(); 			
                }
		}
		
		
}

?>
