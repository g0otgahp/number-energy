<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_process extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			@session_start();
			if(@$_SESSION['dmn_user_id']==""){
				redirect('login/index');
			}
	}
	public function customer_insert()
	{
		$customer_birthday_day = $this->input->post('customer_birthday_day');
		if($customer_birthday_day<10){
			$customer_birthday_day_new = "0".$customer_birthday_day;
		}else{
			$customer_birthday_day_new = $customer_birthday_day;
		}
		$input = array(
			'customer_name' => $this->input->post('customer_name'),
			'customer_tel' => $this->input->post('customer_tel'),
			'customer_email' => $this->input->post('customer_email'),
			'customer_sex' => $this->input->post('customer_sex'),
			'customer_birthday' => $this->input->post('customer_birthday_year')."-".$this->input->post('customer_birthday_month')."-".$customer_birthday_day_new,
			'customer_job' => $this->input->post('customer_job'),
			'customer_relate' => $this->input->post('customer_relate'),
			'customer_link' => $this->input->post('customer_link'),
			'customer_address' => $this->input->post('customer_address'),
			'customer_note' => $this->input->post('customer_note'),

		);

		$this->Customer_model->customer_insert($input);
		redirect('Admin/customer_list');
	}
	public function customer_update()
	{
		$customer_birthday_day = $this->input->post('customer_birthday_day');
		if($customer_birthday_day<10){
			$customer_birthday_day_new = "0".$customer_birthday_day;
		}else{
			$customer_birthday_day_new = $customer_birthday_day;
		}
		$input = array(
			'customer_id' => $this->input->post('customer_id'),
			'customer_name' => $this->input->post('customer_name'),
			'customer_tel' => $this->input->post('customer_tel'),
			'customer_email' => $this->input->post('customer_email'),
			'customer_sex' => $this->input->post('customer_sex'),
			'customer_birthday' => $this->input->post('customer_birthday_year')."-".$this->input->post('customer_birthday_month')."-".$customer_birthday_day_new,
			'customer_job' => $this->input->post('customer_job'),
			'customer_relate' => $this->input->post('customer_relate'),
			'customer_link' => $this->input->post('customer_link'),
			'customer_address' => $this->input->post('customer_address'),
			'customer_note' => $this->input->post('customer_note'),
		);
		$this->Customer_model->customer_update($input);
		redirect('Admin/customer_list');
	}
	public function customer_type_insert()
	{

		$input = array(
			'relate_name' => $this->input->post('customer_type_name'),
		);
		$this->Customer_model->customer_type_insert($input);
		redirect('Admin/customer_type_list');
	}

	public function customer_type_update()
	{
		$input = array(
			'relate_id' => $this->input->post('customer_type_id'),
			'relate_name' => $this->input->post('customer_type_name'),
		);
		$this->Customer_model->customer_type_update($input);
		redirect('Admin/customer_type_list');
	}



}
