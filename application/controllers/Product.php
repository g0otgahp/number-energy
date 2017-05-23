<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

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
			'View' => 'homepage/ProductList',
		);
		$this->LoadPage($value);
	}

	public function product_list()
	{
		$id = $this->uri->segment(3);

		$Config = $this->Homepage_model->General_config();
		$Product_List = $this->Homepage_model->Product_by_Network($id);
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
			'View' => 'homepage/Product',
		);
		$this->LoadPage($value);
	}

	public function product_find()
	{
		$input = $this->input->post();
		$Config = $this->Homepage_model->General_config();
		$Product_List = $this->Homepage_model->Product_Find($input);
		$Product_Network = $this->Homepage_model->Product_Network();
		$Product_Type = $this->Homepage_model->Product_Type();
		$Story = $this->Homepage_model->Story();
		$Abountus = $this->Homepage_model->Abountus();
		$PromotionTop = $this->Homepage_model->PromotionTop();
		$EventTop = $this->Homepage_model->EventTop();

		$filter = $this->Homepage_model->filter_find($input);

		$value = array(
			'Result' => array(
				'Config' => $Config,
				'Product_List' => $Product_List,
				'Product_Network' => $Product_Network,
				'Product_Type' => $Product_Type,
				'filter' => $filter,
				'Story' => $Story,
				'Abountus' => $Abountus,
				'EventTop' => $EventTop,
				'PromotionTop' => $PromotionTop,

			),
			'View' => 'homepage/Product_Find',
		);
		$this->LoadPage($value);
	}
}
