<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news extends CI_Controller {

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

		$PromotionTop = $this->Homepage_model->PromotionTop();
		$EventTop = $this->Homepage_model->EventTop();
		$Story = $this->Homepage_model->Story();
		$Abountus = $this->Homepage_model->Abountus();

		$value = array(
			'Result' => array(
				'Config' => $Config,
				'Product_Network' => $Product_Network,
				'PromotionTop' => $PromotionTop,
				'EventTop' => $EventTop,
				'Story' => $Story,
				'Abountus' => $Abountus,
			),
			'View' => 'homepage/News',
		);
		$this->LoadPage($value);
	}

	// public function promotion()
	// {
	// 	$Config = $this->Homepage_model->General_config();
	// 	$Product_Network = $this->Homepage_model->Product_Network();
	// 	$Promotion = $this->Homepage_model->Promotion();
	// 	$PromotionTop = $this->Homepage_model->PromotionTop();
	// 	$EventTop = $this->Homepage_model->EventTop();
	// 	$Story = $this->Homepage_model->Story();
	// 	$Abountus = $this->Homepage_model->Abountus();
	//
	// 	$value = array(
	// 		'Result' => array(
	// 			'Config' => $Config,
	// 			'Product_Network' => $Product_Network,
	// 			'Promotion' => $Promotion,
	// 			'PromotionTop' => $PromotionTop,
	// 			'EventTop' => $EventTop,
	// 			'Story' => $Story,
	// 			'Abountus' => $Abountus,
	// 		),
	// 		'View' => 'homepage/News_Promotion',
	// 	);
	// 	$this->LoadPage($value);
	// }
	//
	// public function promotion_list()
	// {
	// 	$Config = $this->Homepage_model->General_config();
	// 	$Product_Network = $this->Homepage_model->Product_Network();
	// 	$Promotion = $this->Homepage_model->Promotion_All();
	// 	$PromotionTop = $this->Homepage_model->PromotionTop();
	// 	$EventTop = $this->Homepage_model->EventTop();
	// 	$Story = $this->Homepage_model->Story();
	// 	$Abountus = $this->Homepage_model->Abountus();
	// 	$PromotionList = 1;
	//
	// 	$value = array(
	// 		'Result' => array(
	// 			'Config' => $Config,
	// 			'Product_Network' => $Product_Network,
	// 			'Promotion' => $Promotion,
	// 			'PromotionTop' => $PromotionTop,
	// 			'EventTop' => $EventTop,
	// 			'PromotionList' => $PromotionList,
	// 			'Story' => $Story,
	// 			'Abountus' => $Abountus,
	//
	// 		),
	// 		'View' => 'homepage/News_Promotion',
	// 	);
	// 	$this->LoadPage($value);
	// }
	//
	// public function event()
	// {
	// 	$Config = $this->Homepage_model->General_config();
	// 	$Product_Network = $this->Homepage_model->Product_Network();
	// 	$Event = $this->Homepage_model->Event();
	// 	$PromotionTop = $this->Homepage_model->PromotionTop();
	// 	$EventTop = $this->Homepage_model->EventTop();
	// 	$Story = $this->Homepage_model->Story();
	// 	$Abountus = $this->Homepage_model->Abountus();
	// 	$EventList = 0;
	//
	//
	// 	$value = array(
	// 		'Result' => array(
	// 			'Config' => $Config,
	// 			'Product_Network' => $Product_Network,
	// 			'Event' => $Event,
	// 			'PromotionTop' => $PromotionTop,
	// 			'EventTop' => $EventTop,
	// 			'EventList' => $EventList,
	// 			'Story' => $Story,
	// 			'Abountus' => $Abountus,
	// 			'News_type' => 1,
	// 		),
	// 		'View' => 'homepage/News_Event',
	// 	);
	// 	$this->LoadPage($value);
	// }
	//
	// public function event_list()
	// {
	// 	$Config = $this->Homepage_model->General_config();
	// 	$Product_Network = $this->Homepage_model->Product_Network();
	// 	$Event = $this->Homepage_model->Event_All();
	// 	$PromotionTop = $this->Homepage_model->PromotionTop();
	// 	$EventTop = $this->Homepage_model->EventTop();
	// 	$Story = $this->Homepage_model->Story();
	// 	$Abountus = $this->Homepage_model->Abountus();
	// 	$EventList = 1;
	//
	//
	// 	$value = array(
	// 		'Result' => array(
	// 			'Config' => $Config,
	// 			'Product_Network' => $Product_Network,
	// 			'Event' => $Event,
	// 			'PromotionTop' => $PromotionTop,
	// 			'EventTop' => $EventTop,
	// 			'EventList' => $EventList,
	// 			'Story' => $Story,
	// 			'Abountus' => $Abountus,
	//
	// 		),
	// 		'View' => 'homepage/News_Event',
	// 	);
	// 	$this->LoadPage($value);
	// }

	public function detail()
	{
		$id = $this->uri->segment(3);
		$Config = $this->Homepage_model->General_config();
		$Product_Network = $this->Homepage_model->Product_Network();
		$News = $this->Homepage_model->News_By_Id($id);
		$EventTop = $this->Homepage_model->EventTop();
		$PromotionTop = $this->Homepage_model->PromotionTop();
		$Story = $this->Homepage_model->Story();
		$Abountus = $this->Homepage_model->Abountus();


		$value = array(
			'Result' => array(
				'Config' => $Config,
				'Product_Network' => $Product_Network,
				'News' => $News,
				'EventTop' => $EventTop,
				'PromotionTop' => $PromotionTop,
				'Story' => $Story,
				'Abountus' => $Abountus,

			),
			'View' => 'homepage/News_Detail',
		);
		$this->LoadPage($value);
	}
}
