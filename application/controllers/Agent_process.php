<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_process extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			@session_start();
			if(@$_SESSION['dmn_user_id']==""){
				redirect('login/index');
			}
	}
	public function agent_insert()
	{
		$input = array(
			'agent_code' => $this->input->post('agent_code'),
			'agent_name' => $this->input->post('agent_name'),
			'agent_tel' => $this->input->post('agent_tel'),
			'agent_email' => $this->input->post('agent_email'),
		);
		$this->Agent_model->agent_insert($input);
		redirect('Admin/agent_list');
	}
	public function agent_update()
	{
		$input = array(
			'agent_id' => $this->input->post('agent_id'),
			'agent_code' => $this->input->post('agent_code'),
			'agent_name' => $this->input->post('agent_name'),
			'agent_tel' => $this->input->post('agent_tel'),
			'agent_email' => $this->input->post('agent_email'),
		);
		$this->Agent_model->agent_update($input);
		redirect('Admin/agent_list');
	}



}
