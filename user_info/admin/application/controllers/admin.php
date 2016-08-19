<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
error_reporting(E_ALL);
class Admin extends CI_Controller {

public function __construct()
   {
	parent::__construct();
	
	$this->load->model('Admin_Model');
	
	}

	
		function index($val='')
	{
			redirect('admin/admin_dashboard','refresh');
	}
	
 function admin_dashboard()
	{
	
			$this->load->view('index');
		
	}
	
function add_user()
		{
		
				$this->load->view('user/add_user');	
			
		}
		
		
		
	function view_all_user()
		{
			
			$data["user_data"]=$this->Admin_Model->get_all_user();
			$this->load->view('user/list_user',$data);	
			
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
		
		function insert_user()
		{
				$res=$this->Admin_Model->insert_user();
				if($res>0)
				{
					$msg="added succesfully";
				}
				$this->session->set_flashdata('msg', $msg);
             redirect('admin/view_all_user','refresh');
			
		}
	
	
	
 }
?>
