<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contents extends CI_Controller {

	public function LoadPage($value){
		$data = $value['Result'];
		$this->load->view('template/header', $data);
		$this->load->view($value['View']);
		$this->load->view('template/footer');
	}

	public function index()
	{
		$Config = $this->Homepage_model->General_config();
		$Product_Network = $this->Homepage_model->Product_Network();
		$Story = $this->Homepage_model->Story();
		$Story_List = $this->Homepage_model->Story_List();
		$Abountus = $this->Homepage_model->Abountus();
		$PromotionTop = $this->Homepage_model->PromotionTop();
		$EventTop = $this->Homepage_model->EventTop();

		$value = array(
			'Result' => array(
				'Config' => $Config,
				'Product_Network' => $Product_Network,
				'Story' => $Story,
				'Story_List' => $Story_List,
				'Abountus' => $Abountus,
				'EventTop' => $EventTop,
				'PromotionTop' => $PromotionTop,

			),
			'View' => 'homepage/Contents',
		);
		$this->LoadPage($value);

	}

	public function story()
	{
		$id = $this->uri->segment(3);
		$Config = $this->Homepage_model->General_config();
		$Product_Network = $this->Homepage_model->Product_Network();
		$Story = $this->Homepage_model->Story_By_Id($id);
		$Abountus = $this->Homepage_model->Abountus();
		$PromotionTop = $this->Homepage_model->PromotionTop();
		$EventTop = $this->Homepage_model->EventTop();

		$value = array(
			'Result' => array(
				'Config' => $Config,
				'Product_Network' => $Product_Network,
				'Story' => $Story,
				'Abountus' => $Abountus,
				'EventTop' => $EventTop,
				'PromotionTop' => $PromotionTop,
			),
			'View' => 'homepage/Contents_Story',
		);
		$this->LoadPage($value);

	}
}
