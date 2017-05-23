<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function LoadPage($value){
		$data = $value['Result'];
		$this->load->view('template/header', $data);
		$this->load->view($value['View']);
		$this->load->view('template/footer');
	}

	public function index()
	{
		$Config = $this->Homepage_model->General_config();
		$Product_List = $this->Homepage_model->Product_List();
		$Product_Network = $this->Homepage_model->Product_Network();
		$Product_Type = $this->Homepage_model->Product_Type();
		$Story = $this->Homepage_model->Story();
		$Abountus = $this->Homepage_model->Abountus();
		$PromotionTop = $this->Homepage_model->PromotionTop();
		$EventTop = $this->Homepage_model->EventTop();


		$value = array(
			'Result' => array(
				'Config' => $Config,
				'Product_List' => $Product_List,
				'Product_Network' => $Product_Network,
				'Product_Type' => $Product_Type,
				'Story' => $Story,
				'Abountus' => $Abountus,
				'EventTop' => $EventTop,
				'PromotionTop' => $PromotionTop,

			),
			'View' => 'homepage/Home',
		);
		$this->LoadPage($value);
	}

}
