<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {


	public function customer_list()
	{
		$this->db->order_by('dmn_customer.customer_name','desc');
		$this->db->join('dmn_customer_sex','dmn_customer_sex.customer_sex_id = dmn_customer.customer_sex');
		$query = $this->db->get('dmn_customer');
		return $query->result_array();
	}
	public function customer_detail($customer_id)
	{
		$this->db->where('dmn_customer.customer_id',$customer_id);
		$this->db->join('dmn_relate','dmn_relate.relate_id = dmn_customer.customer_relate');
		$query = $this->db->get('dmn_customer');
		return $query->result_array();
	}
	public function customer_insert($input)
	{
		$this->db->insert('dmn_customer',$input);
	}
	public function customer_update($input)
	{
		$this->db->where('customer_id',$input['customer_id']);
		$this->db->update('dmn_customer',$input);
	}
	public function customer_delete($customer_id)
	{
		$this->db->where('customer_id',$customer_id);
		$this->db->delete('dmn_customer');
	}
	public function relate_list()
	{
		$query = $this->db->get('dmn_relate');
		return $query->result_array();
	}
	public function customer_type_list()
	{
		$this->db->order_by('customer_type_id','desc');
		$query = $this->db->get('dmn_customer_type');
		return $query->result_array();
	}
	public function customer_type_insert($input)
	{
		$this->db->insert('dmn_customer_type',$input);
	}
	public function customer_type_detail($customer_type_id)
	{
		$this->db->where('customer_type_id',$customer_type_id);
		$query = $this->db->get('dmn_customer_type');
		return $query->result_array();
	}
	public function customer_type_update($input)
	{
		$this->db->where('customer_type_id',$input['customer_type_id']);
		$this->db->update('dmn_customer_type',$input);
	}
	public function customer_type_delete($customer_type_id)
	{
		$this->db->where('customer_type_id',$customer_type_id);
		$this->db->delete('dmn_customer_type');
	}

}
