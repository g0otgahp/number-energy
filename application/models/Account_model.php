<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model {

	public function MaxDay()
	{
		date_default_timezone_set('Asia/Bangkok');
		$MaxDay = date('t');

		$array = array();
		$d = 0;
		for ($i=1; $i < $MaxDay; $i++) {
			$array[$d] = $i;
			$d++;
		}
		return $array;
	}

	public function account_count_today()
	{
		date_default_timezone_set('Asia/Bangkok');
		$date = date('Y-m-d');
		$query = $this->db
		->select_sum('account_quantity')
		->where('account_type',1)
		->where('account_date',$date)
		->get('dmn_account')
		->result_array();
		return $query[0]['account_quantity'];
	}

	public function account_count_order()
	{
		date_default_timezone_set('Asia/Bangkok');
		$date = date('Y-m-d');
		$query = $this->db->where('account_date LIKE',$date)->get('dmn_account')->num_rows();
		return $query;
	}

	public function account_count_member()
	{
		$query = $this->db->get('dmn_customer')->num_rows();
		return $query;
	}

	public function account_count_saleorder()
	{
		date_default_timezone_set('Asia/Bangkok');
		$MaxDay = date('t');
		$data = array();
		$d = 0;
		for ($i=1; $i < $MaxDay; $i++) {
			$date = date('Y-m')."-".$i;

			$query = $this->db
			->select_sum('account_quantity')
			->where('account_type',1)
			->where('account_date',$date)
			->get('dmn_account')
			->result_array();

			if (count($query) >0) {
				$data[$d] = $query[0]['account_quantity'];
			} else {
				$data[$d] = 0;
			}
			$d++;
		}

		return $data;
	}

	public function account_list()
	{
		$this->db->order_by('dmn_account.account_date','desc');
		$this->db->join('dmn_account_category','dmn_account_category.account_category_id = dmn_account.account_category');
		$this->db->join('dmn_account_type','dmn_account_type.account_type_id = dmn_account_category.account_category_type');
		$query = $this->db->get('dmn_account');
		return $query->result_array();
	}
	public function account_detail($account_id)
	{
		$this->db->where('dmn_account.account_id',$account_id);
		$this->db->join('dmn_account_category','dmn_account_category.account_category_id = dmn_account.account_category');
		$this->db->join('dmn_account_type','dmn_account_type.account_type_id = dmn_account_category.account_category_type');
		$query = $this->db->get('dmn_account');
		return $query->result_array();
	}
	public function account_insert($input)
	{
		$this->db->insert('dmn_account',$input);
	}
	public function account_update($input)
	{
		$this->db->where('account_id',$input['account_id']);
		$this->db->update('dmn_account',$input);
	}
	public function account_delete($account_id)
	{
		$this->db->where('account_id',$account_id);
		$this->db->delete('dmn_account');
	}

	public function account_category_insert($input)
	{
		$this->db->insert('dmn_account_category',$input);
	}
	public function account_category_list()
	{
		$this->db->order_by('dmn_account_category.account_category_type','asc');
		$this->db->join('dmn_account_type','dmn_account_type.account_type_id = dmn_account_category.account_category_type');
		$query = $this->db->get('dmn_account_category');
		return $query->result_array();
	}
	public function account_category_detail($account_category_id)
	{
		$this->db->where('dmn_account_category.account_category_id',$account_category_id);
		$this->db->join('dmn_account_type','dmn_account_type.account_type_id = dmn_account_category.account_category_type');
		$query = $this->db->get('dmn_account_category');
		return $query->result_array();
	}
	public function account_category_update($input)
	{
		$this->db->where('account_category_id',$input['account_category_id']);
		$this->db->update('dmn_account_category',$input);
	}
	public function account_category_delete($account_category_id)
	{
		$this->db->where('account_category_id',$account_category_id);
		$this->db->delete('dmn_account_category');
	}
	public function get_account_category($account_category_type)
	{
		$this->db->where('dmn_account_category.account_category_type',$account_category_type);
		$query = $this->db->get('dmn_account_category');
		return $query->result_array();
	}

}
