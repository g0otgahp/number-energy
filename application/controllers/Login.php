<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/login');
	}
	public function admin_login_check()
	{
		$input = array(
			'dmn_user_username' => $this->input->post('dmn_user_username'),
			'dmn_user_password' => MD5($this->input->post('dmn_user_password')),
		);
		$dmn_user = $this->Login_model->admin_login_check($input);
		if(count($dmn_user)){
			session_start();
			$_SESSION['dmn_user_id'] = $dmn_user[0]['dmn_user_id'];
			$_SESSION['dmn_user_username'] = $dmn_user[0]['dmn_user_fullname'];
			$_SESSION['employees_name'] = $dmn_user[0]['employees_name'];
			redirect('admin/index');
		}else{
			redirect('Login/index/login_disallow');
		}
	}
	public function logout()
	{
		session_start();
		session_destroy();
		redirect('Login/index');
	}
}
