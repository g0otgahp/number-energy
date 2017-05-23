<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


	public function admin_login_check($input)
	{
		$this->db->where('dmn_user.dmn_user_username',$input['dmn_user_username']);
		$this->db->where('dmn_user.dmn_user_password',$input['dmn_user_password']);
		$this->db->where('dmn_user.dmn_user_status',1);
		$this->db->join('dmn_level','dmn_level.dmn_level_id = dmn_user.dmn_user_level');
		//$this->db->join('dmn_employees','dmn_employees.employees_secretcode = dmn_user.dmn_user_secretcode');
		$query = $this->db->get('dmn_user');
		return $query->result_array();
	}
}
