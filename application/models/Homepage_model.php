<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_model extends CI_Model {

	public function Product_Network()
	{
		$data =	$this->db->get('dmn_mobile_network')->result_array();
		return $data;
	}

	public function Product_Type()
	{
		$data =	$this->db->get('dmn_product_type')->result_array();
		return $data;
	}

	public function history_list()
	{
		$this->db->order_by('history_id','DESC');
		$data =	$this->db->get('dmn_history')->result_array();
		return $data;
	}

	public function Product_List()
	{
		$data =	$this->db
		->order_by('product_date','DESC')
		->where('product_status',1)
		->where('product_disable',0)
		->where('product_requiment',1)
		->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_product.product_mobile_network')
		->get('dmn_product',30)->result_array();
		return $data;
	}

	public function Product_by_Network($id)
	{
		$data =	$this->db
		->order_by('product_date','DESC')
		->where('product_status',1)
		->where('product_disable',0)
		->where('mobile_network_id', $id)
		->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_product.product_mobile_network')
		->get('dmn_product')->result_array();
		return $data;
	}

	public function Product_Find($input)
	{
		if ($input['product_mobile_network'] != '') {
			$this->db->where('product_mobile_network',$input['product_mobile_network']);
		}

		// if ($input['product_type'] != '') {
		// 	$this->db->where('product_type LIKE',"%".$input['product_type']."%");
		// }

		if ($input['product_requiment'] != '') {
			$this->db->where('product_number LIKE',"%".$input['product_requiment']."%");
		}

		if ($input['product_sale'] != '') {
			if ($input['product_sale'] == 1) {
				$this->db->where('product_sale <=',1500);
			} elseif ($input['product_sale'] == 2) {
				$this->db->where('product_sale >=',1500);
				$this->db->where('product_sale <=',3000);
			} elseif ($input['product_sale'] == 3) {
				$this->db->where('product_sale >=',3100);
				$this->db->where('product_sale <=',5000);
			} elseif ($input['product_sale'] == 4) {
				$this->db->where('product_sale >=',5100);
				$this->db->where('product_sale <=',10000);
			} else {
				$this->db->where('product_sale >=',10000);
			}
		}

		// if ($input['product_price'] != '') {
		// 	if ($input['product_price'] == 1) {
		// 		$this->db->order_by('product_sale','ASC');
		// 	} elseif ($input['product_price'] == 2) {
		// 		$this->db->order_by('product_sale','DESC');
		// 	}
		// }
		// $order_by = $input['product_price'];

		$this->db->where('product_status',1);
		$this->db->where('product_disable',0);

		if ($input['product_price'] != '') {
			$this->db->order_by('product_sale',$input['product_price']);
		}

		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_product.product_mobile_network');
		$data = $this->db->get('dmn_product',50,$input['amount'])->result_array();

		// $this->debuger->prevalue($data);
		return $data;
	}

	public function Product_search($input)
	{
		$this->db->where('product_number LIKE',"%".$input['number']."%");
		$this->db->where('product_status',1);
		$this->db->where('product_disable',0);
		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_product.product_mobile_network');
		$data = $this->db->get('dmn_product',50)->result_array();
		return $data;
	}


	// public function true_number($data)
	// {
	// 	$Ignore_number = array(
			// '0' => 0, '1' => 11, '2' => 12, '3' => 21,
			// '4' => 13,'5' => 31, '6' => 17, '7' => 71,
			// '8' => 18, '9' => 81, '10' => 25, '11' => 52,
			// '12' => 27, '13' => 72, '14' => 33, '15' => 34,
			// '16' => 43, '17' => 37, '18' => 73, '19' => 38,
			// '20' => 83, '21' => 48, '22' => 84, '23' => 57,
			// '24' => 75, '25' => 58, '26' => 85, '27' => 67,
			// '28' => 76, '29' => 68, '30' => 86,'31' => 88,
	// 	);
	// 	$i = 0;
	// 	$n = 0;
	// 	foreach ($data as $row) {
	// 		$number = substr($row['product_number'],3);
	//
	// 		foreach ($Ignore_number as $chk => $value) {
	// 			if (preg_match("/($value)/", $number, $matches)) {
	// 				unset($data[$i]);
	// 			}
	// 			$n++;
	// 		} //inforeach
	// 		$i++;
	// 	} //outforeach
	//
	// 	//เรียงอาร์เรย์ใหม่
	// 	$result = array();
	// 	$r = 0;
	// 	foreach ($data as $row => $value) {
	// 		$result[$r] = $value;
	// 		$r++;
	// 	}
	//
	// 	return $result;
	// }
	//
	// public function trash_number($data)
	// {
	// 	$Ignore_number = array(
	// 		'0' => 0, '1' => 11, '2' => 12, '3' => 21,
	// 		'4' => 13,'5' => 31, '6' => 17, '7' => 71,
	// 		'8' => 18, '9' => 81, '10' => 25, '11' => 52,
	// 		'12' => 27, '13' => 72, '14' => 33, '15' => 34,
	// 		'16' => 43, '17' => 37, '18' => 73, '19' => 38,
	// 		'20' => 83, '21' => 48, '22' => 84, '23' => 57,
	// 		'24' => 75, '25' => 58, '26' => 85, '27' => 67,
	// 		'28' => 76, '29' => 68, '30' => 86,'31' => 88,
	// 	);
	// 	$data = $this->db->get('dmn_product')->result_array();
	// 	$i = 0;
	// 	$n = 0;
	// 	foreach ($data as $row) {
	// 		$number = substr($row['product_number'],3);
	//
	// 		foreach ($Ignore_number as $chk => $value) {
	// 			if (preg_match("/($value)/", $number, $matches)) {
	// 					if ($matches =='') {
	// 						unset($data[$i]);
	// 					}
	// 			}
	// 			$n++;
	// 		} //inforeach
	// 		$i++;
	// 	} //outforeach
	//
	// 	//เรียงอาร์เรย์ใหม่
	// 	$result = array();
	// 	$r = 0;
	// 	foreach ($data as $row => $value) {
	// 		$result[$r] = $value;
	// 		$r++;
	// 	}
	//
	// 	return $result;
	// }

	public function Count_number($data)
	{
		$count_number = 0;
		$i=0;
		foreach ($data as $row) {
			$count = str_split($row['product_number']);
			foreach ($count as $number) {
				$count_number += $number;
			}
			$data[$i]['Count_number'] = $count_number;
			$count_number = 0;
			$i++;
		}
		return $data;
	}

	public function General_config()
	{
		$data = $this->db->get('dmn_general_config')->result_array();
		return $data;
	}

	public function service()
	{
		$data = $this->db->get('dmn_service')->result_array();
		return $data;
	}

	public function service_update($input)
	{
		$this->db->where('service_id',$input['service_id']);
		$this->db->update('dmn_service',$input);
	}

	public function salary_config()
	{
		$data = $this->db->get('dmn_salary')->result_array();
		return $data;
	}

	public function General_config_update($input)
	{
		$this->db->where('general_config_id',$input['general_config_id']);
		$this->db->update('dmn_general_config',$input);
	}

	public function salary_config_update($input)
	{
		$this->db->where('dmn_salary_id',$input['dmn_salary_id']);
		$this->db->update('dmn_salary',$input);
	}


	public function Promotion_All()
	{
		$data =	$this->db
		->order_by('actipromo_id','DESC')
		->where('actipromo_type',2)
		->get('dmn_actipromo')
		->result_array();
		return $data;
	}


	public function Promotion()
	{
		$data =	$this->db
		->order_by('actipromo_id','DESC')
		->where('actipromo_type',2)
		->get('dmn_actipromo',4)
		->result_array();
		return $data;
	}

	public function PromotionTop()
	{
		$data =	$this->db
		->order_by('actipromo_id','DESC')
		->where('actipromo_type',2)
		->get('dmn_actipromo',10)
		->result_array();
		return $data;
	}

	public function Event_All()
	{
		$data =	$this->db
		->order_by('actipromo_id','DESC')
		->where('actipromo_type',1)
		->get('dmn_actipromo')
		->result_array();
		return $data;
	}

	public function Event()
	{
		$data =	$this->db
		->order_by('actipromo_id','DESC')
		->where('actipromo_type',1)
		->get('dmn_actipromo',4)
		->result_array();
		return $data;
	}

	public function EventTop()
	{
		$data =	$this->db
		->order_by('actipromo_id','DESC')
		->where('actipromo_type',1)
		->get('dmn_actipromo',10)
		->result_array();
		return $data;
	}

	public function News_By_Id($id)
	{
		$data =	$this->db
		->order_by('actipromo_id','DESC')
		->where('actipromo_code LIKE',$id)
		->get('dmn_actipromo')
		->result_array();
		return $data;
	}

	public function Story()
	{
		$data =	$this->db
		->order_by('story_id','ASC')
		->get('dmn_story',8)
		->result_array();
		return $data;
	}

	public function Story_list()
	{
		$data =	$this->db
		->order_by('story_id','ASC')
		->get('dmn_story')
		->result_array();
		return $data;
	}

	public function Story_By_Id($id)
	{
		$data =	$this->db
		->order_by('story_id','ASC')
		->where('story_id',$id)
		->get('dmn_story')
		->result_array();
		return $data;
	}

	public function Abountus()
	{
		$data =	$this->db
		->get('dmn_abountus')
		->result_array();
		return $data;
	}

	public function filter_find($input)
	{
		$data = array();
		$data['product_mobile_network'] = $input['product_mobile_network'];
		$data['product_sale'] = $input['product_sale'];
		$data['product_requiment'] = $input['product_requiment'];
		$data['product_price'] = $input['product_price'];
		$data['amount'] = $input['amount'];
		return $data;
	}
}
