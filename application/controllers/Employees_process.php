<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees_process extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			@session_start();
			if(@$_SESSION['dmn_user_id']==""){
				redirect('login/index');
			}
	}
	public function employees_insert()
	{
		$secretcode = MD5(date('YdmHis'));
		$user = array(
			'dmn_user_secretcode' => $secretcode,
			'dmn_user_username' => $this->input->post('dmn_user_username'),
			'dmn_user_password' => md5($this->input->post('dmn_user_password')),
			'dmn_user_level' => $this->input->post('dmn_user_level'),
		);
		$employees = array(
			'employees_name' => $this->input->post('employees_name'),
			'employees_tel' => $this->input->post('employees_tel'),
			'employees_secretcode' => $secretcode
		);
		$this->Employees_model->user_insert($user);
		$this->Employees_model->employees_insert($employees);
		redirect('Admin/employees_list');
	}
	public function employees_update()
	{
		$dmn_user_password = $this->input->post('dmn_user_password');
		if($dmn_user_password==""){
			$user = array(
				'dmn_user_username' => $this->input->post('dmn_user_username'),
				'dmn_user_secretcode' => $this->input->post('secretcode'),
				'dmn_user_username' => $this->input->post('dmn_user_username'),
				'dmn_user_level' => $this->input->post('dmn_user_level'),
			);
		}else{
			$user = array(
				'dmn_user_username' => $this->input->post('dmn_user_username'),
				'dmn_user_secretcode' => $this->input->post('secretcode'),
				'dmn_user_username' => $this->input->post('dmn_user_username'),
				'dmn_user_password' => md5($this->input->post('dmn_user_password')),
				'dmn_user_level' => $this->input->post('dmn_user_level'),
			);
		}
		$employees = array(
			'employees_name' => $this->input->post('employees_name'),
			'employees_tel' => $this->input->post('employees_tel'),
			'employees_secretcode' => $this->input->post('secretcode'),
		);
		$this->Employees_model->employees_update($employees);
		$this->Employees_model->user_update($user);
		redirect('Admin/employees_list');
	}



}
