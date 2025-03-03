<?php
class Acl_con extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		/* Standard Libraries */
		$this->load->library('grocery_CRUD');
		$this->load->model('acl_model');
		$this->load->model('common_model');
		$access_level = 11;
		//$acl = $this->acl_model->acl_check($access_level);
	}
	//-------------------------------------------------------------------------------------------------------
	// CRUD output method
	//-------------------------------------------------------------------------------------------------------
	function crud_output($output = null)
	{
		$this->load->view('output.php',$output);	
	}
	//-------------------------------------------------------------------------------------------------------
	// Access Control List
	//-------------------------------------------------------------------------------------------------------
	function acl_check($get_user_id )
	{
		$access_level = 11;
		$num_row = $this->db->where('username_id',$get_user_id)->where('acl_id',$access_level)->get('member_acl_level')->num_rows();
		if($num_row > 0)
		{
			return "true";
		}
		else
		{
			return "false";
		}
		
	}
	
	function acl()
	{
		$username = $this->session->userdata('username');
		$get_user_id = $this->acl_model->get_user_id($username);
		$acl_check = $this->acl_check($get_user_id );
		
		
		$crud = new grocery_CRUD();
	 	$get_session_user_unit = $this->common_model->get_session_unit_id_name();
		/*if($get_session_user_unit != 0)
		{
			$crud->where('members.unit_name',$get_session_user_unit);
			$crud->where('id_number',$username);

		}*/
		$crud->set_table('members');
		$crud->set_subject('User');
		  
		//$crud->set_relation_n_n('ACL', 'member_acl_level', 'member_acl_list', 'username_id', 'acl_id', 'acl_name','priority');
		if($get_session_user_unit != 0)
		{
			$crud->set_relation( 'unit_name' , 'pr_units','unit_name',array('unit_id' => $get_session_user_unit) );
		}
		else
		{
			$crud->set_relation( 'unit_name' , 'pr_units','unit_name' );
		}
		
		//This code use for unset relation n-n
		if($acl_check == "false")
		{
			$crud->unset_add();
			$crud->unset_delete();
			$crud->edit_fields('id_number','password');
			$state = $crud->getState();
			if ($state != 'insert' && $state != 'update') {
			$crud->set_relation_n_n('ACL', 'member_acl_level', 'member_acl_list', 'username_id', 'acl_id', 'acl_name','priority');
			  }
			  $crud->where('members.unit_name',$get_session_user_unit);
			$crud->where('id_number',$username);
		}
		else
		{
			$crud->set_relation_n_n('ACL', 'member_acl_level', 'member_acl_list', 'username_id', 'acl_id', 'acl_name','priority');
		}
		
		$crud->set_rules('id_number','Username','required|callback_id_number_check');
		$crud->display_as('id_number','Username');
		$crud->required_fields('id_number','password','level');
		$crud->change_field_type('password','password');
		$crud->where('id_number !=','kamrul');
		$output = $crud->render();
		$this->crud_output($output);
	}

	function id_number_check($str)
	{
		$id = $this->uri->segment(4);
		if(!empty($id) && is_numeric($id))
		{
			$mem_id_old = $this->db->where("id",$id)->get('members')->row()->id_number;
			$this->db->where("id_number !=",$mem_id_old);
		}
		$num_row = $this->db->where('id_number',$str)->get('members')->num_rows();
		if ($num_row >= 1)
		{
			$this->form_validation->set_message('id_number_check', "This ID field '$str' already exists");
			return FALSE;
		}
		else
		{	
			$level 		=  $_POST['level'];
			$unit_name 	=  $_POST['unit_name'];
			if($level == "Unit")
			{
				if($unit_name == "")
				{
					$this->form_validation->set_message('id_number_check', "Please Select Unit Name.");
					return FALSE;
				}
				
				
			}
			else
			{
				if($unit_name != "")
				{
					$this->form_validation->set_message('id_number_check', "Don't Select Unit Name.");
					return FALSE;
				}
				
			}
			return TRUE;
		}
	}
}

