<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {


	public function customer_list()
	{
		$this->db->order_by('dmn_customer.customer_name','desc');
		$this->db->where('customer_status',1);
		$this->db->join('dmn_customer_sex','dmn_customer_sex.customer_sex_id = dmn_customer.customer_sex');
		$query = $this->db->get('dmn_customer');
		return $query->result_array();
	}
	public function customer_detail($customer_id)
	{
		$this->db->where('dmn_customer.customer_id',$customer_id);
		$this->db->where('customer_status',1);
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
		$delete = array('customer_status' => 0, );
		$this->db->where('customer_id',$customer_id);
		$this->db->update('dmn_customer',$delete);
	}
	public function relate_list()
	{
		$this->db->where('relate_status',1);
		$query = $this->db->get('dmn_relate');
		return $query->result_array();
	}
	public function customer_type_list()
	{
		$this->db->order_by('relate_id','desc');
		$this->db->where('relate_status',1);
		$query = $this->db->get('dmn_relate');
		return $query->result_array();
	}
	public function customer_type_insert($input)
	{
		$this->db->insert('dmn_relate',$input);
	}
	public function customer_type_detail($customer_type_id)
	{
		$this->db->where('relate_id',$customer_type_id);
		$query = $this->db->get('dmn_relate');
		return $query->result_array();
	}
	public function customer_type_update($input)
	{
		$this->db->where('relate_id',$input['relate_id']);
		$this->db->update('dmn_relate',$input);
	}
	public function customer_type_delete($customer_type_id)
	{
		$delete = array('relate_status' => 0 );
		$this->db->where('relate_id',$customer_type_id);
		$this->db->update('dmn_relate',$delete);
	}

}
