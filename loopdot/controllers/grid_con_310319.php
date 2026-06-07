<?php
class Grid_con extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		/* Standard Libraries */
		$this->load->model('grid_model');
		$this->load->model('acl_model');
		$this->load->model('common_model');
		$access_level = 5;
		$acl = $this->acl_model->acl_check($access_level);
		
	}
	
	function grid_age_estimation()
	{
		$grid_data = $this->uri->segment(3);
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
		
		//$grid_firstdate = $this->input->post('firstdate');
						
		$data["value"] = $this->grid_model->grid_age_estimation($grid_emp_id);
				
		$this->load->view('age_estimation_form',$data);
	}
	function grid_nominee()
	{
		$grid_data = $this->uri->segment(3);
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
						
		$data["value"] = $this->grid_model->grid_nominee($grid_emp_id);
				
		$this->load->view('nominee_form',$data);
	}
	function grid_requitement_form()
	{
		$grid_data = $this->uri->segment(3);
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
						
		$data["value"] = $this->grid_model->grid_requitement_form($grid_emp_id);
				
		$this->load->view('requitement_form',$data);
	}
	function grid_verification_report()
	{
		$grid_data = $this->uri->segment(3);
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
						
		$data["value"] = $this->grid_model->grid_verification_report($grid_emp_id);
				
		$this->load->view('verification_report',$data);
	}
	function grid_job_description()
	{
		$grid_data = $this->uri->segment(3);
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
						
		$data["value"] = $this->grid_model->grid_job_description($grid_emp_id);
		
		if($data["value"] != NULL)
		{
			$this->load->view('job_description',$data);
		}
		else 
		{
			echo "Dont have the selected designation's description";
		}		
		
	}
	function grid_window()
	{
		if($this->session->userdata('level')== 0 || $this->session->userdata('level')== 1)
		{
			$this->load->view('grid');
		}
		elseif($this->session->userdata('level')==2)
		{
			$this->load->view('grid_for_user');
		}
	}
	
	function grid_salary_report()
	{
		$this->load->view('grid_salary_report');
	}
	
	function grid_get_all_data()
	{
				
				//$get_session_user_unit = $this->common_model->get_session_unit_id_name();
				$unit 	= $this->uri->segment(3);
				
				$emp_cat_id = array ('0' => 1, '1' => 2, '2' => 5);
				
				$this->db->select('pr_emp_per_info.*');
				$this->db->from('pr_emp_per_info');
				$this->db->from('pr_emp_com_info');
				$this->db->where('pr_emp_per_info.emp_id = pr_emp_com_info.emp_id');
				$this->db->where('pr_emp_com_info.unit_id',$unit);
			/*	if($get_session_user_unit != 0)
				{
					$this->db->where("unit_id",$get_session_user_unit);
				}*/
				//$this->db->where_in('pr_emp_com_info.emp_cat_id',$emp_cat_id);
				$this->db->order_by("pr_emp_com_info.emp_id");
				$query = $this->db->get();
		
				$i = 0;
				foreach($query->result_array() as $row)
				{
					$responce->rows[$i]['id']=$row['emp_id'];
					$responce->rows[$i]['cell']=array($row['emp_id'],$row['emp_full_name'],$row['emp_dob']);
					$i++;
				}
				echo json_encode($responce);
		  exit;
	}
	
	function grid_all_search()
	{
		$dept 	= $this->uri->segment(3);
		$section= $this->uri->segment(4);
		$line	= $this->uri->segment(5);
		$desig	= $this->uri->segment(6);
		$sex	= $this->uri->segment(7);
		$status	= $this->uri->segment(8);
		$unit	= $this->uri->segment(9);
		$position	= $this->uri->segment(10);
		
		$this->db->select('pr_emp_per_info.*');
		$this->db->from('pr_emp_per_info');
		$this->db->from('pr_emp_com_info');
		$this->db->where('pr_emp_per_info.emp_id = pr_emp_com_info.emp_id');
		$this->db->where('pr_emp_com_info.unit_id',$unit);
		
		if($dept !="Select")
		{
			$this->db->where("pr_emp_com_info.emp_dept_id", $dept);
		}
		if($section !="Select")
		{
			$this->db->where("pr_emp_com_info.emp_sec_id", $section);
		}
		if($line !="Select")
		{
			$this->db->where("pr_emp_com_info.emp_line_id ", $line);
		}
		if($desig !="Select")
		{
			$this->db->where("pr_emp_com_info.emp_desi_id", $desig);
		}
		if($sex !="Select")
		{
			$this->db->where("pr_emp_per_info.emp_sex", $sex);
		}
		if($status !="Select")
		{
			if($status != 'ALL')
			{
				$this->db->where("pr_emp_com_info.emp_cat_id", $status);
			}
		}
		if($position !="Select")
		{
			$this->db->where("pr_emp_com_info.emp_position_id", $position);
		}
		$this->db->order_by("pr_emp_com_info.emp_id");
		$query = $this->db->get();
		//echo $this->db->last_query();
		$i = 0;
		foreach($query->result_array() as $row)
		{
			$responce->rows[$i]['id']=$row['emp_id'];
			$responce->rows[$i]['cell']=array($row['emp_id'],$row['emp_full_name'],$row['emp_dob']);
			$i++;
		}
		echo json_encode($responce);
		exit;
		
	}
	function grid_get_all_data_for_salary()
	{
		$salary_month	= $this->uri->segment(3);
		$units	= $this->uri->segment(4);
		$i = 0;
		//$salary_month = "2013-05";
		$data = $this->common_model->get_all_employee($salary_month,$units);	
		foreach($data->result_array() as $row)
		{
			$responce->rows[$i]['id']=$row['emp_id'];
			$responce->rows[$i]['cell']=array($row['emp_id'],$row['emp_full_name'],$row['emp_dob']);
			$i++;
		}
		echo json_encode($responce);
		exit;
		
	}
	
	function grid_all_search_for_salary()
	{
		$dept 			= $this->uri->segment(3);
		$section		= $this->uri->segment(4);
		$line			= $this->uri->segment(5);
		$desig			= $this->uri->segment(6);
		$sex			= $this->uri->segment(7);
		$status			= $this->uri->segment(8);
		$salary_month	= $this->uri->segment(9);
		$unit			= $this->uri->segment(10);
		$stop			= $this->uri->segment(11);
		
		//echo "$dept==$section==$line==$desig==$sex==$status===$salary_month";
		$data = $this->common_model->get_all_employee_for_selection($dept,$section,$line,$desig,$sex,$status,$salary_month,$unit,$stop);
		
		/*if($status == 1 )
		{
			$data = $this->common_model->get_regular_employee_for_selection($dept,$section,$line,$desig,$sex,$status,$salary_month,$unit);
		}
		
		if($status == 2)
		{
			$data = $this->common_model->get_new_employee_for_selection($dept,$section,$line,$desig,$sex,$status,$salary_month,$unit);
		}
		
		if($status == 3)
		{
			$data = $this->common_model->get_left_employee_for_selection($dept,$section,$line,$desig,$sex,$status,$salary_month,$unit);
		}
		
		if($status == 4)
		{
			$data = $this->common_model->get_resign_employee_for_selection($dept,$section,$line,$desig,$sex,$status,$salary_month,$unit);
		}
		
		if($status == "ALL")
		{
			$data = $this->common_model->get_all_employee_for_selection($dept,$section,$line,$desig,$sex,$status,$salary_month,$unit);
		}*/
		$i = 0;
		foreach($data->result_array() as $row)
		{
			$responce->rows[$i]['id']=$row['emp_id'];
			$responce->rows[$i]['cell']=array($row['emp_id'],$row['emp_full_name'],$row['emp_dob']);
			$i++;
		}
		echo json_encode($responce);
		exit;
		
		
	}
	function grid_daily_report()
	{
		// exit('Here');
		$grid_date = $this->input->post('firstdate');
		$unit_id = $this->input->post('unit_id');
		list($date, $month, $year) = explode('-', trim($grid_date));
		$status = $this->input->post('status');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$data["values"] = $this->grid_model->grid_daily_report($year, $month, $date, $status, $grid_emp_id);	
		// print_r($data["values"]);
		// exit('H');
		
		$data["year"]			= $year;
		$data["month"]			= $month;
		$data["date"]			= $date;
		$data["daily_status"]	= $status;
		$data["col_desig"] 		= "";
		$data["col_line"] 		= "";
		$data["col_section"] 	= "";
		$data["col_dept"] 		= "";
		$data["col_all"] 		= "";
		$data["unit_id"] 		= $unit_id;
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('daily_report',$data);
		}
	}
	
	function grid_daily_absent_report()
	{
		$grid_date = $this->input->post('firstdate');
		$unit_id = $this->input->post('unit_id');
		list($date, $month, $year) = explode('-', trim($grid_date));
		$status = $this->input->post('status');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$data["values"] = $this->grid_model->grid_daily_absent_report($year, $month, $date, $status, $grid_emp_id);	
		// print_r($data["values"]);
		// exit;
		
		$data["year"]			= $year;
		$data["month"]			= $month;
		$data["date"]			= $date;
		$data["daily_status"]	= $status;
		$data["unit_id"] 		= $unit_id;
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('daily_absent_report',$data);
		}
	}
	
	function grid_actual_present_report()
	{
		$grid_date = $this->input->post('firstdate');
		$unit_id = $this->input->post('unit_id');
		
		list($date, $month, $year) = explode('-', trim($grid_date));
		$status = $this->input->post('status');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
		$data["values"] = $this->grid_model->grid_actual_present_report($year, $month, $date, $status, $grid_emp_id);	
		
		$data["year"]			= $year;
		$data["month"]			= $month;
		$data["date"]			= $date;
		$data["daily_status"]	= $status;
		$data["col_desig"] 		= "";
		$data["col_line"] 		= "";
		$data["col_section"] 	= "";
		$data["col_dept"] 		= "";
		$data["col_all"] 		= "";
		$data["unit_id"] 		= $unit_id;
		
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('daily_report',$data);
		}
	}
	
	
	function grid_daily_costing_report()
	{
		$grid_date = $this->input->post('firstdate');
		//list($date, $month, $year) = explode('-', trim($grid_date));
		$grid_unit = $this->input->post('grid_start');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		
		$data["values"] 	= $this->grid_model->grid_daily_costing_report($grid_date,$grid_unit,$grid_emp_id);	
		$data["grid_date"]	= date("d-M-Y",strtotime($grid_date));
		$data["unit_id"]	= $grid_unit;

		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('daily_costing_report',$data);
		}
	}
	
	function grid_continuous_costing_report()
	{
		$firstdate= $this->input->post('firstdate');
		$seconddate = $this->input->post('seconddate');
		//list($date, $month, $year) = explode('-', trim($grid_date));
		$grid_unit = $this->input->post('grid_start');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		
		$data["values"] 	= $this->grid_model->grid_continuous_costing_report($firstdate,$seconddate,$grid_unit,$grid_emp_id);	
		$data["firstdate"]	= date("d-M-Y",strtotime($firstdate));
		$data["seconddate"]	= date("d-M-Y",strtotime($seconddate));
		$data["unit_id"]	= $grid_unit;

		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('continuous_costing_report',$data);
		}
	}
	
	function grid_leave_application_form()
	{
		$firstdate	= $this->input->post('firstdate');
		$seconddate = $this->input->post('seconddate');
		//list($date, $month, $year) = explode('-', trim($grid_date));
		$leave_type = $this->input->post('leave_type');
		$emp_id		= $this->input->post('emp_id');
		//$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id= $this->db->where("unit_id",1)->get('pr_emp_com_info')->row()->unit_id;
		
		$data["values"] 	= $this->grid_model->grid_leave_application_form($firstdate,$seconddate,$leave_type,$emp_id);	
		$data["firstdate"]	= date("d-m-Y",strtotime($firstdate));
		$data["seconddate"]	= date("d-m-Y",strtotime($seconddate));
		$data["leave_type"]	= $leave_type;
		$data["unit_id"]	= $unit_id;
		$data["emp_id"]		= $emp_id;

		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('leave_application',$data);
		}
	}
	
	function grid_daily_late_report()
	{
		$grid_date = $this->input->post('firstdate');
		list($date, $month, $year) = explode('-', trim($grid_date));
		$status = $this->input->post('status');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
				
		$data["values"] = $this->grid_model->grid_daily_late_report($year, $month, $date, $grid_emp_id);
		$data["year"]			= $year;
		$data["month"]			= $month;
		$data["date"]			= $date;
		$data["col_desig"] 		= "";
		$data["col_line"] 		= "";
		$data["col_section"] 	= "";
		$data["col_dept"] 		= "";
		$data["col_all"] 		= "";
		$data["unit_id"] 		= $unit_id;
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('daily_late_report',$data);
		}		
		//print_r($data);
	}
	
	function grid_daily_out_punch_miss_report()
	{
		$grid_date = $this->input->post('firstdate');
		list($date, $month, $year) = explode('-', trim($grid_date));
		$status = $this->input->post('status');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
		
				
		$data["values"] = $this->grid_model->grid_daily_out_punch_miss_report($year, $month, $date, $grid_emp_id);
		$data["year"]			= $year;
		$data["month"]			= $month;
		$data["date"]			= $date;
		$data["col_desig"] 		= "";
		$data["col_line"] 		= "";
		$data["col_section"] 	= "";
		$data["col_dept"] 		= "";
		$data["col_all"] 		= "";
		$data["unit_id"] 		= $unit_id;
		
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('out_punch_miss',$data);
		}		
		//print_r($data);
	}
	
	function grid_daily_out_in_report()
	{
		
		$grid_date = $this->input->post('firstdate');
		list($date, $month, $year) = explode('-', trim($grid_date));
		$status = $this->input->post('status');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
		$data["values"] = $this->grid_model->grid_daily_out_in_report($year, $month, $date, $status, $grid_emp_id);	
		
		$data["year"]			= $year;
		$data["month"]			= $month;
		$data["date"]			= $date;
		$data["daily_status"]	= $status;
		$data["col_desig"] 		= "";
		$data["col_line"] 		= "";
		$data["col_section"] 	= "";
		$data["col_dept"] 		= "";
		$data["col_all"] 		= "";
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('daily_out_in_report',$data);
		}
	}
	
	function grid_daily_actual_out_in_report()
	{
		//$year = "2011";
		//$month= "04";
		//$date = "18";
		//$status = "P";
		$grid_date = $this->input->post('firstdate');
		list($date, $month, $year) = explode('-', trim($grid_date));
		$status = $this->input->post('status');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		
		$unit_id = $this->input->post('unit_id');
	
		//echo "$date, $month, $year";
		$status = 'P';
		//print_r($grid_emp_id);
		$data["values"] = $this->grid_model->grid_daily_actual_out_in_report($year, $month, $date, $status, $grid_emp_id);	
		
		$data["unit_id"]			= $unit_id;
		$data["year"]			= $year;
		$data["month"]			= $month;
		$data["date"]			= $date;
		$data["daily_status"]	= $status;
		$data["col_desig"] 		= "";
		$data["col_line"] 		= "";
		$data["col_section"] 	= "";
		$data["col_dept"] 		= "";
		$data["col_all"] 		= "";
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('daily_actual_out_in_report',$data);
		}
	}
	
	
	function grid_daily_holiday_weekend_present_report()
	{
		
		$grid_date = $this->input->post('firstdate');
		list($date, $month, $year) = explode('-', trim($grid_date));
		$status = $this->input->post('status');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		
		$unit_id = $this->input->post('grid_start');
	
		//echo "$date, $month, $year";
		$status = 'P';
		//print_r($grid_emp_id);
		$data["values"] = $this->grid_model->grid_daily_holiday_weekend_present_report($year, $month, $date, $status, $grid_emp_id);	
		
		$data["year"]			= $year;
		$data["month"]			= $month;
		$data["date"]			= $date;
		$data["daily_status"]	= $status;
		$data["unit_id"]			= $unit_id;
		
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('daily_holiday_weekend_present_report',$data);
		}
	}
	
	function grid_daily_holiday_weekend_absent_report()
	{
		
		$grid_date = $this->input->post('firstdate');
		list($date, $month, $year) = explode('-', trim($grid_date));
		$status = $this->input->post('status');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		
		$unit_id = $this->input->post('grid_start');
	
		//echo "$date, $month, $year";
		$status = 'P';
		//print_r($grid_emp_id);
		$data["values"] = $this->grid_model->grid_daily_holiday_weekend_absent_report($year, $month, $date, $status, $grid_emp_id);	
		
		$data["year"]			= $year;
		$data["month"]			= $month;
		$data["date"]			= $date;
		$data["daily_status"]	= $status;
		$data["unit_id"]		= $unit_id;
		
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('daily_holiday_weekend_absent_report',$data);
		}
	}
		
	function grid_continuous_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$status = $this->input->post('status');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');		
		//$status="Present Report from date $start_date to date  $end_date";
	
		//$data["values"] = $this->grid_model->continuous_report($grid_firstdate, $grid_seconddate, $status, $grid_section, $grid_emp_id);
		
		$data["values"] = $this->grid_model->continuous_report($grid_firstdate, $grid_seconddate, $status, $grid_emp_id);
		
		if($status =="A")
		{
			$status = "Absent";
		}
		elseif($status =="P")
		{
			$status = "Present";
		}
		elseif($status =="L")
		{
			$status = "Leave";
		}
		
		$sStartDate = date("Y-m-d", strtotime($grid_firstdate)); 
		$sEndDate = date("Y-m-d", strtotime($grid_seconddate)); 
		
		$data["status"] 	= $status;
		$data["start_date"] = $sStartDate;
		$data["end_date"] 	= $sEndDate;
		$data["unit_id"] 	= $unit_id;
		//print_r($data);
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('continuous_report',$data);
		}
		
		
	}
	
	function grid_continuous_late_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
		
		$sStartDate = date("Y-m-d", strtotime($grid_firstdate)); 
		$sEndDate = date("Y-m-d", strtotime($grid_seconddate));
				
		//$status="Present Report from date $start_date to date  $end_date";
	
		$data["values"] = $this->grid_model->continuous_late_report($sStartDate, $sEndDate, $grid_emp_id);
		
		 
		
		$data["start_date"] = $sStartDate;
		$data["end_date"] 	= $sEndDate;
		$data["unit_id"] 	= $unit_id;
		//print_r($data);
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('continuous_late_report',$data);
		}
	}
	
	
	
	function grid_continuous_leave_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
		
		$sStartDate = date("Y-m-d", strtotime($grid_firstdate)); 
		$sEndDate = date("Y-m-d", strtotime($grid_seconddate));		
		//$status="Present Report from date $start_date to date  $end_date";
	
		$data["values"] = $this->grid_model->grid_continuous_leave_report($sStartDate, $sEndDate, $grid_emp_id);
		
		 
		
		$data["start_date"] = $sStartDate;
		$data["end_date"] 	= $sEndDate;
		$data["unit_id"] 	= $unit_id;
		//print_r($data);
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('continuous_leave_report',$data);
		}
	}
	
	
	
	function continuous_incre_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');

		$sStartDate = date("Y-m-d", strtotime($grid_firstdate)); 
		$sEndDate = date("Y-m-d", strtotime($grid_seconddate));
		$data["values"] = $this->grid_model->continuous_incre_report($sStartDate,$sEndDate,$grid_emp_id);
		
		$data["start_date"] = $sStartDate;
		$data["end_date"] = $sEndDate;
		$data["unit_id"] = $unit_id;
		//print_r($data);
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('continuous_increment_report',$data);
		}
		
	}
	
	function continuous_prom_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');

		$sStartDate = date("Y-m-d", strtotime($grid_firstdate)); 
		$sEndDate = date("Y-m-d", strtotime($grid_seconddate));
		
		$data["values"] = $this->grid_model->continuous_prom_report($sStartDate,$sEndDate,$grid_emp_id);
		
		$data["start_date"] = $sStartDate;
		$data["end_date"] = $sEndDate;
		$data["unit_id"] = $unit_id;
		//print_r($data);
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('continuous_promotion_report',$data);
		}
		
	}
	
	function continuous_increment_promotion_proposal()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');

		$sStartDate = date("Y-m-d", strtotime($grid_firstdate)); 
		$sEndDate = date("Y-m-d", strtotime($grid_seconddate));
		
		$data["values"] = $this->grid_model->continuous_increment_promotion_proposal($sStartDate,$sEndDate,$grid_emp_id);
		
		$data["start_date"] = $sStartDate;
		$data["end_date"] = $sEndDate;
		$data["unit_id"] = $unit_id;
		//print_r($data);
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('continuous_increment_promotion_proposal',$data);
		}
		
	}
	
	function grid_app_letter()
	{
		$grid_data = $this->input->post('spl');
		//$grid_firstdate = $this->input->post('firstdate');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
		
		//$grid_firstdate  = date("d-m-Y", strtotime($grid_firstdate));
		
		//$data['start_date']	= $grid_firstdate;
		$data['values'] 	= $this->grid_model->grid_app_letter($grid_emp_id);
		$data['unit_id']	= $unit_id;

		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('appointment_letter',$data);
		}
	}
	
	function grid_emp_job_application()
	{
		//$grid_data = $this->uri->segment(3);
		//$grid_emp_id = explode('xxx', trim($grid_data));
		
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
		
		//print_r($grid_emp_id);
		$query['unit_id'] = $this->input->post('unit_id');
		$query['values'] = $this->grid_model->grid_emp_job_application($grid_emp_id);
		if(is_string($query['values']))
		{
			echo $query['values'];
		}
		else
		{
			$this->load->view('job_application',$query);
		}
	}
	
	function grid_join_letter()
	{
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		//$grid_data = $this->uri->segment(3);
		$unit_id = $this->input->post('unit_id');
		
		
		$query['values'] = $this->grid_model->grid_join_letter($grid_emp_id);
		$query['unit_id'] = $this->input->post('unit_id');
		if(is_string($query['values']))
		{
			echo $query['values'];
		}
		else
		{
			$this->load->view('join_letter',$query);
		}
	}
	
	function grid_letter1_report()
	{
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
		$firstdate = $this->input->post('firstdate');
		
		$data['values'] 	= $this->grid_model->grid_letter1_report($grid_emp_id, $firstdate);
		$data['unit_id']	= $unit_id;
		$firstdate = date("Y-m-d", strtotime($firstdate));
		$data['firstdate']	= $firstdate;
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('letter1',$data);
		}
	}
	function grid_letter2_report()
	{
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
		$firstdate = $this->input->post('firstdate');
		
		$data['values'] 	= $this->grid_model->grid_letter2_report($grid_emp_id,$firstdate);
		$data['unit_id']	= $unit_id;
		$firstdate = date("Y-m-d", strtotime($firstdate));
		$data['firstdate']	= $firstdate;
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('letter2',$data);
		}
	}
	function grid_letter3_report()
	{
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
		$firstdate = $this->input->post('firstdate');
		
		$data['values'] 	= $this->grid_model->grid_letter3_report($grid_emp_id, $firstdate);
		$data['unit_id']	= $unit_id;
		$firstdate = date("Y-m-d", strtotime($firstdate));
		$data['firstdate']	= $firstdate;
	
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('letter3',$data);
		}
	}
	
	function grid_pay_slip()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
		
		$year_month = date("Y-m", strtotime($grid_firstdate)); 
		
		$query['values'] = $this->grid_model->grid_pay_slip($year_month, $grid_emp_id);
		$query['values'] = $unit_id;
		if(is_string($query['values']))
		{
			echo $query['values'];
		}
		else
		{
			$this->load->view('pay_slip',$query);
		}
	}
	
	function grid_id_card()
	{
		$grid_data = $this->uri->segment(3);
		$grid_unit = $this->uri->segment(4);
		$firstdate = $this->uri->segment(5);
		$grid_emp_id = explode('xxx', trim($grid_data));
		$query['unit_id'] = 	$grid_unit;
		$query['firstdate'] = 	$firstdate;
		$validity = date("Y-m-d",strtotime("+3 year",strtotime($firstdate)));
		$query['validity']= date("d-m-Y",strtotime($validity));
		$query['values'] = $this->grid_model->grid_id_card($grid_emp_id);
		if(is_string($query['values']))
		{
			echo $query['values'];
		}
		else
		{
			//$this->load->view('id_card(new_2018-11-08)',$query);
			$this->load->view('id_card',$query);
		}
	}
	/*
	function grid_id_card_english()
	{
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
			
		$query['values'] = $this->grid_model->grid_id_card_english($grid_emp_id);
		$query['unit_id'] = $unit_id;
		
		if(is_string($query['values']))
		{
			echo $query['values'];
		}
		else
		{
			$this->load->view('id_card_english',$query);
		}
	}*/
	function grid_id_card_english()
	{
		$grid_data = $this->uri->segment(3);
		$grid_unit = $this->uri->segment(4);
		$grid_emp_id = explode('xxx', trim($grid_data));
		$query['unit_id'] = 	$grid_unit;
		$query['values'] = $this->grid_model->grid_id_card_english($grid_emp_id);
		if(is_string($query['values']))
		{
			echo $query['values'];
		}
		else
		{
			$this->load->view('id_card_english',$query);
		}
	}
	
	function grid_job_card()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
			
		$query['values'] = $this->grid_model->grid_job_card($grid_firstdate, $grid_seconddate, $grid_emp_id);
		
		$query['grid_firstdate'] = $grid_firstdate;
		$query['grid_seconddate'] = $grid_seconddate;
		$query['unit_id'] = $this->input->post('unit_id');
		
		if(is_string($query['values']))
		{
			echo $query['values'];
		}
		else
		{
			$this->load->view('job_card',$query);
		}
	}
	
	function grid_pf_statement()
	{
		$year  = $this->uri->segment(3);
		$month = $this->uri->segment(4);
		
		$grid_data = $this->uri->segment(5);
		$grid_emp_id = explode('xxx', trim($grid_data));
			
		$query['values'] = $this->grid_model->grid_pf_statement($year, $month, $grid_emp_id);
		
		$query['year'] = $year;
		$query['month'] = $month;
		
		if(is_string($query['values']))
		{
			echo $query['values'];
		}
		else
		{
			$this->load->view('provident_fund_statement',$query);
		}
	}
	///////////////////////grid_monthly_att_register_ot////////////
	
	function grid_monthly_att_register_ot()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
		$year_month = date("Y-m", strtotime($grid_firstdate)); 
		
		$query=$this->grid_model->grid_monthly_att_register($year_month, $grid_emp_id);
		if(is_string($query))
		{
			echo $query;
		}
		else
		{
			$year_month = date("M-Y", strtotime($grid_firstdate)); 
			$data["value"]=$query;
			$data['unit_id'] = $unit_id ;
		
			//$data2["value2"]=$query->num_fields(); 
			$data["year_month"] = $year_month;
			$this->load->view('monthly_report_ot',$data);
		}
	}
	
	function grid_yearly_leave_register()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
		$year = date("Y", strtotime($grid_firstdate)); 
		
		$query=$this->grid_model->grid_yearly_leave_register($year, $grid_emp_id);
		if(is_string($query))
		{
			echo $query;
		}
		else
		{
			//$year_month = date("M-Y", strtotime($grid_firstdate)); 
			$data["values"]=$query;
			$data['unit_id'] = $unit_id ;
		
			//$data2["value2"]=$query->num_fields(); 
			$data["year"] = $year;
			$this->load->view('yearly_leave_register',$data);
		}
	}
	
	
	function grid_continuous_ot_eot_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$unit_id = $this->input->post('unit_id');
				
		//$status="Present Report from date $start_date to date  $end_date";
	
		$data["values"] = $this->grid_model->continuous_ot_eot_report($grid_firstdate, $grid_seconddate, $grid_emp_id);
		
		$sStartDate = date("Y-m-d", strtotime($grid_firstdate)); 
		$sEndDate = date("Y-m-d", strtotime($grid_seconddate)); 
		
		$data["start_date"] = $sStartDate;
		$data["end_date"] 	= $sEndDate;
		$data["unit_id"] 	= $unit_id;
		//print_r($data);
		if(is_string($data["values"]))
		{
			echo $data["values"];
		}
		else
		{
			$this->load->view('continuous_ot_eot_report',$data);
		}
	}
	function grid_monthly_att_register()
	{
		$grid_firstdate = $this->input->post('firstdate');		
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$data['unit_id'] = $this->input->post('unit_id');
		
		$year_month = date("Y-m", strtotime($grid_firstdate)); 
		
		$query=$this->grid_model->grid_monthly_att_register($year_month, $grid_emp_id);
		if(is_string($query))
		{
			echo $query;
		}
		else
		{
			$year_month = date("M-Y", strtotime($grid_firstdate)); 
			$data["value"]=$query;
			//$data2["value2"]=$query->num_fields(); 
			$data["year_month"] = $year_month;
			$this->load->view('monthly_report',$data);
		}
	}
	
	function grid_extra_ot()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');		
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$data['unit_id'] = $this->input->post('unit_id');
		
		$data['grid_firstdate'] = $grid_firstdate;
		$data['grid_seconddate'] = $grid_seconddate;
		
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate)); 
		$grid_seconddate = date("Y-m-d", strtotime($grid_seconddate)); 
		
		$data['values'] = $this->grid_model->grid_extra_ot($grid_firstdate, $grid_seconddate, $grid_emp_id);
		
		
		
		$this->load->view('ot_job_card',$data);
		
	}
	
	function manual_attendance_entry()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		
		$manual_time = $this->input->post('manual_time');
		
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate)); 
		$grid_seconddate = date("Y-m-d", strtotime($grid_seconddate)); 
		
		/*$grid_firstdate = "2011-07-02";
		$grid_seconddate = "2011-07-08";
		
		$manual_time = "08:00:00";
		
		$grid_data = "100005xxx100009xxx440004";
		$grid_emp_id = explode('xxx', trim($grid_data));*/
		
		$data = $this->grid_model->manual_attendance_entry($grid_firstdate, $grid_seconddate, $manual_time, $grid_emp_id);
		echo $data;
				
	}
	
	function manual_entry_Delete()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate)); 
		$grid_seconddate  = date("Y-m-d", strtotime($grid_seconddate)); 
		
		$data = $this->grid_model->manual_entry_Delete($grid_firstdate, $grid_seconddate, $grid_emp_id);
		echo $data;
				
	}
	
	function save_work_off()
	{
		$grid_firstdate = $this->input->post('firstdate');
				
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate)); 
				
		$data = $this->grid_model->save_work_off($grid_firstdate, $grid_emp_id);
		echo $data;
				
	}
	
	function save_holiday()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$holiday_description = $this->input->post('holiday_description');
		
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate));
				
		$data = $this->grid_model->save_holiday($grid_firstdate, $holiday_description);
		echo $data;
				
	}
	
	function grid_monthly_salary_sheet()
	{
		$sal_year_month = $this->input->post('sal_year_month');
		$grid_status 	= $this->input->post('grid_status');		
		$grid_data 		= $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
						
		$data["value"] = $this->grid_model->grid_monthly_salary_sheet($sal_year_month, $grid_status, $grid_emp_id);
		$data["salary_month"] = $sal_year_month;
		$data["grid_status"]  = $grid_status;
		$data['unit_id'] = $this->input->post('unit_id');
		
		$this->load->view('salary_sheet',$data);
	}
	
	function grid_current_info()
	{
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
						
		$data["values"] = $this->grid_model->grid_current_info($grid_emp_id);
		$data['unit_id'] = $this->input->post('unit_id');
				
		$this->load->view('current_info',$data);
	}
	function grid_general_info()
	{
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
						
		$data["values"] = $this->grid_model->grid_general_info($grid_emp_id);
		$data['unit_id'] = $this->input->post('unit_id');
				
		$this->load->view('general_info',$data);
	}
	
	function grid_employee_information()
	{
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
						
		$data["values"] = $this->grid_model->grid_employee_information($grid_emp_id);
		$data['unit_id'] = $this->input->post('unit_id');
				
		$this->load->view('employee_information',$data);
	}
	
	function grid_service_book()
	{
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
						
		$data["values"] = $this->grid_model->grid_employee_information($grid_emp_id);
		$data['unit_id'] = $this->input->post('unit_id');
				
		$this->load->view('service_book',$data);
	}
	
	function grid_service_book2()
	{
		$grid_data = $this->uri->segment(3);
		$grid_emp_id = explode('xxx', trim($grid_data));
		//print_r($grid_emp_id);
						
		$data["value"] = $this->grid_model->grid_service_book2($grid_emp_id);
				
		$this->load->view('service_book_full',$data);
	}
	
	function salary_summary()
	{
		$salary_month = $this->uri->segment(3);
		$data["values"] = $this->grid_model->salary_summary($salary_month);
		$data["salary_month"] = $salary_month; 
		//print_r($data);
		$this->load->view('salary_summary',$data);
	}
	
	function grid_new_join_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate));
		$grid_seconddate  = date("Y-m-d", strtotime($grid_seconddate));
			
		$data['values'] = $this->grid_model->grid_new_join_report($grid_firstdate, $grid_seconddate, $grid_emp_id);
		
		$data['start_date']= $grid_firstdate;
		$data['end_date'] 	= $grid_seconddate;
		$data['unit_id'] = $this->input->post('unit_id');
		
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('new_join_emp_report',$data);
		}
	}
	function grid_bgm_new_join_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate));
		$grid_seconddate  = date("Y-m-d", strtotime($grid_seconddate));
			
		$data['values'] = $this->grid_model->grid_bgm_new_join_report($grid_firstdate, $grid_seconddate, $grid_emp_id);
		
		$data['start_date']= $grid_firstdate;
		$data['end_date'] 	= $grid_seconddate;
		$data['unit_id'] = $this->input->post('unit_id');
		
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('new_bgm_join_emp_report',$data);
		}
	}
	
	function grid_resign_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate));
		$grid_seconddate  = date("Y-m-d", strtotime($grid_seconddate));
			
		$data['values'] = $this->grid_model->grid_resign_report($grid_firstdate, $grid_seconddate, $grid_emp_id);
		//echo count($data['values']);
		$data['start_date'] = $grid_firstdate;
		$data['end_date'] 	= $grid_seconddate;
		$data['unit_id'] = $this->input->post('grid_start');
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('resign_emp_report',$data);
		}
	}
	
	function grid_bgm_resign_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate));
		$grid_seconddate  = date("Y-m-d", strtotime($grid_seconddate));
			
		$data['values'] = $this->grid_model->grid_bgm_resign_report($grid_firstdate, $grid_seconddate, $grid_emp_id);
		
		$data['start_date']= $grid_firstdate;
		$data['end_date'] 	= $grid_seconddate;
		$data['unit_id'] = $this->input->post('grid_start');
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('resign_bgm_emp_report',$data);
		}
	}
	
	function grid_left_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		//echo "$grid_firstdate, $grid_seconddate";
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate));
		$grid_seconddate  = date("Y-m-d", strtotime($grid_seconddate));
		//echo "$grid_firstdate, $grid_seconddate";	
		$data['values'] = $this->grid_model->grid_left_report($grid_firstdate, $grid_seconddate, $grid_emp_id);
		
		$data['start_date']= $grid_firstdate;
		$data['end_date'] 	= $grid_seconddate;
		$data['unit_id'] = $this->input->post('grid_start');
		
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('left_emp_report',$data);
		}
	}
	function grid_bgm_left_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		//echo "$grid_firstdate, $grid_seconddate";
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate));
		$grid_seconddate  = date("Y-m-d", strtotime($grid_seconddate));
		//echo "$grid_firstdate, $grid_seconddate";	
		$data['values'] = $this->grid_model->grid_bgm_left_report($grid_firstdate, $grid_seconddate, $grid_emp_id);
		
		$data['start_date']= $grid_firstdate;
		$data['end_date'] 	= $grid_seconddate;
		$data['unit_id'] = $this->input->post('grid_start');
		
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('left_bgm_emp_report',$data);
		}
	}
	
	
	function grid_bgm_left_resign_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_seconddate = $this->input->post('seconddate');
		//$grid_data = $this->input->post('spl');
		//$grid_emp_id = explode('xxx', trim($grid_data));
		//echo "$grid_firstdate, $grid_seconddate";
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate));
		$grid_seconddate  = date("Y-m-d", strtotime($grid_seconddate));
		$unit_id = $this->input->post('grid_start');
		//echo "$grid_firstdate, $grid_seconddate";	
		$data['values'] = $this->grid_model->grid_bgm_left_resign_report($grid_firstdate, $grid_seconddate, $unit_id);
		
		$data['start_date']= $grid_firstdate;
		$data['end_date'] 	= $grid_seconddate;
		$data['unit_id'] = $this->input->post('grid_start');
		
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('left_resign_bgm_emp_report',$data);
		}
	}
	
	
	
	function grid_daily_eot()
	{
		$this->load->model('common_model');
		$grid_firstdate = $this->input->post('firstdate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate));
		
		$data['values'] = $this->grid_model->grid_daily_eot($grid_firstdate, $grid_emp_id);
		
		$data['start_date']= $this->input->post('firstdate');
		$data['unit_id'] = $this->input->post('unit_id');
				
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('daily_eot',$data);
		}
	}
	
	function grid_daily_ot()
	{
		$this->load->model('common_model');
		$grid_firstdate = $this->input->post('firstdate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate));
		
		$data['values'] = $this->grid_model->grid_daily_ot($grid_firstdate, $grid_emp_id);
		
		$data['start_date']= $this->input->post('firstdate');
		$data['unit_id'] = $this->input->post('unit_id');
		
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('daily_ot',$data);
		}
	}
	function grid_daily_night_allowance_report()
	{
		$this->load->model('common_model');
		$grid_firstdate = $this->input->post('firstdate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate));
		
		$data['values'] = $this->grid_model->grid_daily_night_allowance_report($grid_firstdate, $grid_emp_id);
		
		$data['start_date']= $this->input->post('firstdate');
		$data['unit_id'] = $this->input->post('unit_id');
				
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('daily_night_allowance_report',$data);
		}
	}
	function grid_daily_allowance_bills()
	{
		$this->load->model('common_model');
		$grid_firstdate = $this->input->post('firstdate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$grid_firstdate  = date("Y-m-d", strtotime($grid_firstdate));
		
		$data['values'] = $this->grid_model->grid_daily_allowance_bills($grid_firstdate, $grid_emp_id);
		
		$data['start_date']= $this->input->post('firstdate');
		$data['unit_id'] = $this->input->post('unit_id');
				
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('daily_allowance_bills',$data);
		}
	}
	function grid_monthly_ot_register()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		$grid_firstdate  = date("Y-m", strtotime($grid_firstdate));
		
		$data['values'] = $this->grid_model->grid_monthly_ot_register($grid_firstdate, $grid_emp_id);
		$data['unit_id'] = $this->input->post('unit_id');
		
		$data['start_date']= $grid_firstdate;
				
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('monthly_ot_register',$data);
		}
	}
	
	function grid_monthly_eot_register()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		
		$grid_firstdate  = date("Y-m", strtotime($grid_firstdate));
		
		$data['values'] = $this->grid_model->grid_monthly_eot_register($grid_firstdate, $grid_emp_id);
		$data['unit_id'] = $this->input->post('unit_id');
		$data['start_date']= $grid_firstdate;
				
		if($data['values'] == 'Requested list is empty' )
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('monthly_eot_register',$data);
		}
	}
	
	function grid_monthly_allowance_register()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
				
		$grid_firstdate  = date("Y-m", strtotime($grid_firstdate));
		
		$data['values'] = $this->grid_model->grid_monthly_allowance_register($grid_firstdate, $grid_emp_id);
		
		$data['start_date']= $grid_firstdate;
		$data['unit_id'] = $this->input->post('unit_id');		
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('monthly_allowance_register',$data);
		}
	}
	
	function grid_daily_move_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$unit_id= $this->input->post('unit_id');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
			
		$query['values'] = $this->grid_model->daily_move_report($grid_firstdate, $grid_emp_id);
		
		$query['grid_firstdate'] = $grid_firstdate;
		$query['unit_id'] = $unit_id;

		
		if(is_string($query['values']))
		{
			echo $query['values'];
		}
		else
		{
			$this->load->view('daily_move_report',$query);
		}
	}
	
	function grid_daily_punch_report()
	{
		$grid_firstdate = $this->input->post('firstdate');
		$grid_data = $this->input->post('spl');
		$grid_emp_id = explode('xxx', trim($grid_data));
		
		$grid_firstdate  = date("Y-m", strtotime($grid_firstdate));
		
		$data['values'] = $this->grid_model->grid_time_search_report($grid_firstdate, $grid_emp_id);
		
		$data['start_date']= $grid_firstdate;
		$data['unit_id'] = $this->input->post('unit_id');			
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('monthly_ot_register',$data);
		}
		
		$f_date = '2012-04-10';
		$s_date = '2012-04-10';
		$f_time = '17:00:00';
		$s_time = '20:00:00';
		$grid_emp_id = array('001414','001635','001744','001750','001773','002070','002090','002110','002113','002178');
		
		$this->grid_model->grid_time_search_report();
		
	}
	
	function test()
	{
		$sStartDate = '2012-04-01';
		$emp_id = '003915';
		$sEndDate = '2012-04-30';
		echo $this->grid_model->get_resign_date($emp_id, $sStartDate, $sEndDate);
	}
	
	function grid_earn_leave_report()
	{
		$grid_data = $this->uri->segment(3);
		$grid_emp_id = explode('xxx', trim($grid_data));
		$data['values'] = $this->grid_model->grid_earn_leave_report($grid_emp_id);
		if(is_string($data['values']))
		{
			echo $data['values'];
		}
		else
		{
			$this->load->view('earn_leave_report',$data);
		}
	}
	
}
?>