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

}
