<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees_model extends CI_Model {


	public function employees_list()
	{
		$this->db->order_by('dmn_employees.employees_name','desc');
		$this->db->where('employees_status',1);
		$this->db->join('dmn_user','dmn_user.dmn_user_secretcode = dmn_employees.employees_secretcode');
		$this->db->join('dmn_level','dmn_level.dmn_level_id = dmn_user.dmn_user_level');
		$query = $this->db->get('dmn_employees');
		return $query->result_array();
	}
	public function employees_detail($secretcode)
	{
		$this->db->where('dmn_employees.employees_secretcode',$secretcode);
		$this->db->where('employees_status',1);
		$this->db->join('dmn_user','dmn_user.dmn_user_secretcode = dmn_employees.employees_secretcode');
		$this->db->join('dmn_level','dmn_level.dmn_level_id = dmn_user.dmn_user_level');
		$query = $this->db->get('dmn_employees');
		return $query->result_array();
	}
	public function employees_insert($employees)
	{
		$this->db->insert('dmn_employees',$employees);
	}
	public function employees_la_insert($input)
	{
		$this->db->insert('dmn_log_la',$input);
		return $this->db->insert_id();
	}

	public function employees_la_detail($id)
	{
		$data = $this->db
		->where('log_la_id',$id)
		->get('dmn_log_la')
		->result_array();

		$employees = $this->db
		->where('employees_secretcode',$data[0]['employees_sc'])
		->get('dmn_employees')
		->result_array();

		$data[0]['employees_name'] = $employees[0]['employees_name'];
		$data[0]['employees_id'] = $employees[0]['employees_id'];

		return $data;
	}

	public function employees_la_by_id($id)
	{
		$data = $this->db
		->where('employees_secretcode',$id)
		->join('dmn_log_la','dmn_log_la.employees_sc = dmn_employees.employees_secretcode')
		->get('dmn_employees')
		->result_array();
		return $data;
	}

	public function employees_salary($input)
	{
		$date = $input['year']."-".$input['month'];

		$data = $this->db
		->where('employees_secretcode',$input['secretcode'])
		->join('dmn_user','dmn_user.dmn_user_secretcode = dmn_employees.employees_secretcode')
		->join('dmn_level','dmn_level.dmn_level_id = dmn_user.dmn_user_level')
		->get('dmn_employees')
		->result_array();

		$day_la = $this->db
		->where('employees_sc',$input['secretcode'])
		->where('log_la_date_start LIKE',$date."%")
		->select_sum('log_la_day')
		->select_sum('log_la_hour')
		->get('dmn_log_la')
		->result_array();

		$comission = $this->db
		->where('log_employee_id',$data[0]['employees_id'])
		->where('log_date LIKE',$date."%")
		->where('log_status',4)
		->get('dmn_log')
		->num_rows();

		$data[0]['comission'] = $comission;

		if ($day_la[0]['log_la_day'] == '') {
		$data[0]['day'] = 0;
		} else {
			$data[0]['day'] = $day_la[0]['log_la_day'];
		}

		if ($day_la[0]['log_la_hour'] == '') {
		$data[0]['time'] = 0;
		} else {
			$data[0]['time'] = $day_la[0]['log_la_hour'];
		}
		$data[0]['date_select'] = $date;

		return $data;

	}

	public function user_insert($user)
	{
		$this->db->insert('dmn_user',$user);
	}
	public function employees_update($employees)
	{
		$this->db->where('employees_secretcode',$employees['employees_secretcode']);
		$this->db->update('dmn_employees',$employees);
	}
	public function user_update($user)
	{
		$this->db->where('dmn_user_secretcode',$user['dmn_user_secretcode']);
		$this->db->update('dmn_user',$user);
	}
	public function employees_delete($secretcode)
	{
		$delete = array('employees_status' => 0);
		$this->db->where('employees_secretcode',$secretcode);
		$this->db->update('dmn_employees',$delete);
	}
	public function user_delete($secretcode)
	{
		$delete = array('dmn_user_status' => 0);
		$this->db->where('dmn_user_secretcode',$secretcode);
		$this->db->update('dmn_user',$delete);
	}
	public function level_list()
	{
		$this->db->order_by('dmn_level_name','asc');
		$this->db->where('dmn_level_status',1);
		$query = $this->db->get('dmn_level');
		return $query->result_array();
	}

}
