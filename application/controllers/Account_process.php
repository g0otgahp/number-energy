<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_process extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			@session_start();
			if(@$_SESSION['dmn_user_id']==""){
				redirect('login/index');
			}
	}
	public function account_insert()
	{
		$input = array(
			'account_date' => $this->input->post('account_date_day'),
			'account_type' => $this->input->post('account_type'),
			'account_category' => $this->input->post('account_category'),
			'account_detail' => $this->input->post('account_detail'),
			'account_quantity' => $this->input->post('account_quantity'),
		);
		$this->Account_model->account_insert($input);
		redirect('Admin/account_list');
	}
	// public function account_update()
	// {
	// 	$input = array(
	// 		'account_id' => $this->input->post('account_id'),
	// 		'account_code' => $this->input->post('account_code'),
	// 		'account_name' => $this->input->post('account_name'),
	// 		'account_tel' => $this->input->post('account_tel'),
	// 		'account_email' => $this->input->post('account_email'),
	// 	);
	// 	$this->Account_model->account_update($input);
	// 	redirect('Admin/account_list');
	// }
	public function account_category_insert()
	{
		$input = array(
			'account_category_type' => $this->input->post('account_category_type'),
			'account_category_code' => $this->input->post('account_category_code'),
			'account_category_list' => $this->input->post('account_category_list'),
		);
		$this->Account_model->account_category_insert($input);
		redirect('Admin/account_category_list');
	}
	public function account_category_update()
	{
		$input = array(
			'account_category_id' => $this->input->post('account_category_id'),
			'account_category_type' => $this->input->post('account_category_type'),
			'account_category_code' => $this->input->post('account_category_code'),
			'account_category_list' => $this->input->post('account_category_list'),
		);
		$this->Account_model->account_category_update($input);
		redirect('Admin/account_category_list');
	}




}
