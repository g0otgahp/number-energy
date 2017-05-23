<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees_model extends CI_Model {


	public function employees_list()
	{
		$this->db->order_by('dmn_employees.employees_name','desc');
		$this->db->join('dmn_user','dmn_user.dmn_user_secretcode = dmn_employees.employees_secretcode');
		$this->db->join('dmn_level','dmn_level.dmn_level_id = dmn_user.dmn_user_level');
		$query = $this->db->get('dmn_employees');
		return $query->result_array();
	}
	public function employees_detail($secretcode)
	{
		$this->db->where('dmn_employees.employees_secretcode',$secretcode);
		$this->db->join('dmn_user','dmn_user.dmn_user_secretcode = dmn_employees.employees_secretcode');
		$this->db->join('dmn_level','dmn_level.dmn_level_id = dmn_user.dmn_user_level');
		$query = $this->db->get('dmn_employees');
		return $query->result_array();
	}
	public function employees_insert($employees)
	{
		$this->db->insert('dmn_employees',$employees);
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
		$this->db->where('employees_secretcode',$secretcode);
		$this->db->delete('dmn_employees');
	}
	public function user_delete($secretcode)
	{
		$this->db->where('dmn_user_secretcode',$secretcode);
		$this->db->delete('dmn_user');
	}
	public function level_list()
	{
		$this->db->order_by('dmn_level_name','asc');
		$query = $this->db->get('dmn_level');
		return $query->result_array();
	}

}
