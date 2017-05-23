<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actipromo_model extends CI_Model {


	public function actipromo_list()
	{
		$this->db->order_by('dmn_actipromo.actipromo_id','desc');
		$this->db->join('dmn_actipromo_type','dmn_actipromo_type.actipromo_type_id = dmn_actipromo.actipromo_type');
		$query = $this->db->get('dmn_actipromo');
		return $query->result_array();
	}
	public function actipromo_detail($actipromo_id)
	{
		$this->db->where('actipromo_id',$actipromo_id);
		$query = $this->db->get('dmn_actipromo');
		return $query->result_array();
	}
	public function actipromo_insert($input)
	{
		$this->db->insert('dmn_actipromo',$input);
	}
	public function actipromo_update($input)
	{
		$this->db->where('actipromo_id',$input['actipromo_id']);
		$this->db->update('dmn_actipromo',$input);
	}
	public function actipromo_delete($actipromo_id)
	{
		$this->db->where('actipromo_id',$actipromo_id);
		$this->db->delete('dmn_actipromo');
	}

}
