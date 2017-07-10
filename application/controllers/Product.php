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
		$input['id'] = $this->uri->segment(3);
		$input['amount'] = $this->uri->segment(4);

		$Config = $this->Homepage_model->General_config();
		$Product_List = $this->Homepage_model->Product_by_Network($input);
		$Product_total = $this->Homepage_model->Product_by_Network_total($input);
		$Product_Network = $this->Homepage_model->Product_Network();
		$Product_Type = $this->Homepage_model->Product_Type();
		$Story = $this->Homepage_model->Story();
		$Abountus = $this->Homepage_model->Abountus();
		$PromotionTop = $this->Homepage_model->PromotionTop();
		$EventTop = $this->Homepage_model->EventTop();

		$filter_list = $this->Homepage_model->filter_list($input);


		$value = array(
			'Result' => array(
				'Config' => $Config,
				'Product_List' => $Product_List,
				'Product_Total' => $Product_total,
				'Product_Network' => $Product_Network,
				'Product_Type' => $Product_Type,
				'filter' => $filter_list,
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

		if (!isset($input['product_mobile_network'])) {
			echo "<script>alert('เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง')</script>";
			echo "<meta http-equiv='refresh' content='0; url=../../home' />";
			exit();
		}

		if (!isset($input['product_sale'])) {
			echo "<script>alert('เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง')</script>";
			echo "<meta http-equiv='refresh' content='0; url=../../home' />";
			exit();
		}

		if (!isset($input['product_requiment'])) {
			echo "<script>alert('เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง')</script>";
			echo "<meta http-equiv='refresh' content='0; url=../../home' />";
			exit();
		}

		if (!isset($input['product_price'])) {
			echo "<script>alert('เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง')</script>";
			echo "<meta http-equiv='refresh' content='0; url=../../home' />";
			exit();
		}

		$input['amount'] = $this->uri->segment(3);
		// $this->debuger->prevalue($input);

		$Config = $this->Homepage_model->General_config();
		$Product_List = $this->Homepage_model->Product_Find($input);
		$Product_Total = $this->Homepage_model->Product_Find_Total($input);
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
				'Product_Total' => $Product_Total,
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

	public function product_search()
	{
		$input = $this->input->post();

		if (!isset($input['number'])) {
			echo "<script>alert('เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง')</script>";
			echo "<meta http-equiv='refresh' content='0; url=../../home' />";
			exit();
		}

		$input['amount'] = $this->uri->segment(3);
		// $this->debuger->prevalue($input);
		$Config = $this->Homepage_model->General_config();
		$Product_List = $this->Homepage_model->Product_search($input);
		$Product_Total = $this->Homepage_model->Product_search_total($input);
		$Product_Network = $this->Homepage_model->Product_Network();
		$Product_Type = $this->Homepage_model->Product_Type();
		$Story = $this->Homepage_model->Story();
		$Abountus = $this->Homepage_model->Abountus();
		$PromotionTop = $this->Homepage_model->PromotionTop();
		$EventTop = $this->Homepage_model->EventTop();

		$filter_search = $this->Homepage_model->filter_search($input);

		$value = array(
			'Result' => array(
				'Config' => $Config,
				'Product_List' => $Product_List,
				'Product_Total' => $Product_Total,
				'Product_Network' => $Product_Network,
				'Product_Type' => $Product_Type,
				'filter' => $filter_search,
				'Story' => $Story,
				'Abountus' => $Abountus,
				'EventTop' => $EventTop,
				'PromotionTop' => $PromotionTop,

			),
			'View' => 'homepage/Product_search',
		);
		$this->LoadPage($value);
	}
}
