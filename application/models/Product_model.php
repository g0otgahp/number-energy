<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function import_insert($input)
	{
		$this->db->insert('dmn_import_tmp',$input);
	}

	public function round_insert($import_round)
	{
		$this->db->insert('dmn_round',$import_round);
	}

	public function mobile_network_list()
	{
		$this->db->order_by('mobile_network_code','asc');
		$query = $this->db->get('dmn_mobile_network');
		return $query->result_array();
	}

	public function history_list()
	{
		$data = $this->db
		->order_by('round_datetime','desc')
		->join('dmn_agent','dmn_agent.agent_id = dmn_round.round_agent_id')
		->get('dmn_round')
		->result_array();

		if ($data !='') {
			$i=0;
			foreach ($data as $info) {
				$query = $this->db
				->where('import_round',$info['round_round'])
				->get('dmn_import_tmp')
				->num_rows();
				$data[$i]['amount'] = $query;
				$i++;
			}
		}

		// $this->debuger->prevalue($data);
		return $data;
	}

	public function mobile_network_insert($input)
	{
		$this->db->insert('dmn_mobile_network',$input);
	}
	public function mobile_network_detail($mobile_network_id)
	{
		$this->db->where('mobile_network_id',$mobile_network_id);
		$query = $this->db->get('dmn_mobile_network');
		return $query->result_array();
	}
	public function mobile_network_update($input)
	{
		$this->db->where('mobile_network_id',$input['mobile_network_id']);
		$this->db->update('dmn_mobile_network',$input);
	}
	public function mobile_network_delete($mobile_network_id)
	{
		$this->db->where('mobile_network_id',$mobile_network_id);
		$this->db->delete('dmn_mobile_network');
	}

	public function product_list()
	{
		$this->db->order_by('dmn_product.product_id','DESC');
		$this->db->where('product_status !=',2);
		$this->db->or_where('product_status',0);
		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_product.product_mobile_network');
		$this->db->join('dmn_agent','dmn_agent.agent_id = dmn_product.product_agent','left');
		$query = $this->db->get('dmn_product')->result_array();
		return $query;
	}

	public function order_list()
	{
		$this->db->order_by('dmn_order.order_id','DESC');
		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_order.order_network');
		$this->db->join('dmn_employees','dmn_employees.employees_id = dmn_order.order_employees_id');
		$query = $this->db->get('dmn_order')->result_array();
		// $this->debuger->prevalue($query);
		return $query;
	}

	public function order_by_id($order_id)
	{
		$this->db->order_by('dmn_order.order_id','DESC');
		$this->db->where('order_id',$order_id);
		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_order.order_network');
		$this->db->join('dmn_employees','dmn_employees.employees_id = dmn_order.order_employees_id');
		$query = $this->db->get('dmn_order')->result_array();
		// $this->debuger->prevalue($query);
		return $query;
	}

	public function product_list_saled()
	{
		$this->db->order_by('dmn_product.product_date_sale','DESC');
		$this->db->where('product_status',0);
		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_product.product_mobile_network');
		$this->db->join('dmn_agent','dmn_agent.agent_id = dmn_product.product_agent');
		$query = $this->db->get('dmn_product')->result_array();
		return $query;
	}

	public function product_all($input)
	{
		$this->db->where('product_status',$input);
		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_product.product_mobile_network');
		$this->db->join('dmn_agent','dmn_agent.agent_id = dmn_product.product_agent');
		$query = $this->db->get('dmn_product')->result_array();
		return $query;
	}

	public function product_trash_list()
	{
		$this->db->order_by('dmn_product.product_id','DESC');
		$this->db->where('product_status',2);
		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_product.product_mobile_network');
		$this->db->join('dmn_agent','dmn_agent.agent_id = dmn_product.product_agent');
		$query = $this->db->get('dmn_product')->result_array();
		return $query;
	}
	public function product_insert($input)
	{
		$this->db->insert('dmn_product',$input);
	}

	public function product_book($input)
	{
		$this->db->insert('dmn_log',$input);
	}
	public function product_detail($product_id)
	{
		$this->db->where('dmn_product.product_id',$product_id);
		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_product.product_mobile_network','left');
		$this->db->join('dmn_agent','dmn_agent.agent_id = dmn_product.product_agent', 'left');
		$query = $this->db->get('dmn_product')->result_array();
		return $query;
	}
	public function product_book_detail($product_id)
	{
		$this->db->order_by('log_date','DESC');
		$this->db->where('log_product_id',$product_id);
		$this->db->join('dmn_product','dmn_log.log_product_id = dmn_product.product_id');
		$this->db->join('dmn_employees','dmn_log.log_employee_id = dmn_employees.employees_id');
		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_product.product_mobile_network');
		$this->db->join('dmn_agent','dmn_agent.agent_id = dmn_product.product_agent','left');
		$query = $this->db->get('dmn_log')->result_array();
		// $this->debuger->prevalue($query);
		return $query;
	}

	public function product_log()
	{
		$this->db->order_by('log_date','DESC');
		$this->db->join('dmn_product','dmn_log.log_product_id = dmn_product.product_id');
		$this->db->join('dmn_employees','dmn_log.log_employee_id = dmn_employees.employees_id');
		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_product.product_mobile_network');
		$this->db->join('dmn_agent','dmn_agent.agent_id = dmn_product.product_agent');
		$query = $this->db->get('dmn_log',10)->result_array();
		// $this->debuger->prevalue($query);
		return $query;
	}

	public function product_log_by_id($customer_id)
	{
		$this->db->order_by('log_date','DESC');
		$this->db->where('log_customer_id',$customer_id);
		$this->db->join('dmn_product','dmn_log.log_product_id = dmn_product.product_id');
		$this->db->join('dmn_customer','dmn_log.log_customer_id = dmn_customer.customer_id');
		$this->db->join('dmn_employees','dmn_log.log_employee_id = dmn_employees.employees_id');
		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_product.product_mobile_network');
		$this->db->join('dmn_agent','dmn_agent.agent_id = dmn_product.product_agent');
		$query = $this->db->get('dmn_log')->result_array();
		// $this->debuger->prevalue($query);
		return $query;
	}

	public function product_update($input)
	{
		$this->db->where('product_id',$input['product_id']);
		$this->db->update('dmn_product',$input);
	}

	public function order_insert($input)
	{
		$this->db->insert('dmn_order',$input);
	}

	public function order_change($input)
	{
		$this->db->where('order_id',$input['order_id']);
		$this->db->update('dmn_order',$input);
	}

	public function order_update($input)
	{
		$this->db->where('order_id',$input['order_id']);
		$this->db->update('dmn_order',$input);
	}
	public function order_delete($order_id)
	{
		$this->db->where('order_id',$order_id);
		$this->db->delete('dmn_order');
	}

	public function product_delete($product_id)
	{
		$this->db->where('product_id',$product_id);
		$this->db->delete('dmn_product');
	}
	public function round_count()
	{
		$query = $this->db
		->order_by('round_round',"DESC")
		->get('dmn_round')
		->result_array();
		return @$query[0]['round_round'];
	}

	public function import_round($round)
	{
		return $this->db->where('round_round',$round)->get('dmn_round')->result_array();
	}

	public function product_type_list()
	{
		$this->db->order_by('product_type_id','desc');
		$query = $this->db->get('dmn_product_type');
		return $query->result_array();
	}

	public function product_type_insert($input)
	{
		$this->db->insert('dmn_product_type',$input);
	}
	public function product_type_detail($product_type_id)
	{
		$this->db->where('product_type_id',$product_type_id);
		$query = $this->db->get('dmn_product_type');
		return $query->result_array();
	}
	public function product_type_update($input)
	{
		$this->db->where('product_type_id',$input['product_type_id']);
		$this->db->update('dmn_product_type',$input);
	}
	public function product_change_name($input)
	{
		$this->db->where('log_id',$input['log_id']);
		$this->db->update('dmn_log',$input);
	}
	public function product_type_delete($product_type_id)
	{
		$this->db->where('product_type_id',$product_type_id);
		$this->db->delete('dmn_product_type');
	}

	public function contents_insert($input)
	{
		$this->db->insert('dmn_story',$input);
	}

	public function contents_update($input)
	{
		$this->db->where('story_id',$input['story_id']);
		$this->db->update('dmn_story',$input);
	}
	public function contents_delete($id)
	{
		$this->db->where('story_id',$id);
		$this->db->delete('dmn_story');
	}

	public function contents_delete_img($id)
	{
		$delete = array('story_img' => 0,);
		$this->db->where('story_id',$id);
		$this->db->update('dmn_story',$delete);
	}

	public function abountus_update($input)
	{
		$this->db->where('abountus_id',$input['abountus_id']);
		$this->db->update('dmn_abountus',$input);
	}

	public function import_list()
	{
		$this->db->order_by('dmn_import_tmp.import_id','asc');
		$this->db->where('import_status', 0);
		$this->db->join('dmn_mobile_network','dmn_mobile_network.mobile_network_id = dmn_import_tmp.import_network_id');
		$this->db->join('dmn_agent','dmn_agent.agent_id = dmn_import_tmp.import_agent_id');
		$query = $this->db->get('dmn_import_tmp')->result_array();
		return $query;
	}

	public function Count_number_import($data)
	{
		$count_number = 0;
		$i=0;
		foreach ($data as $row) {
			$count = str_split($row['import_number']);
			foreach ($count as $number) {
				$count_number += $number;
			}
			$data[$i]['Count_number'] = $count_number;
			$count_number = 0;
			$i++;
		}
		return $data;
	}
}
