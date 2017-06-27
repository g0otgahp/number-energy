<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_model extends CI_Model {


	public function agent_list()
	{
		$this->db->order_by('agent_code','asc');
		$this->db->where('agent_status',1);
		$query = $this->db->get('dmn_agent');
		return $query->result_array();
	}
	public function agent_detail($agent_id)
	{
		$this->db->where('agent_id',$agent_id);
		$this->db->order_by('dmn_agent.agent_code','asc');
		$query = $this->db->get('dmn_agent');
		return $query->result_array();
	}
	public function agent_insert($input)
	{
		$this->db->insert('dmn_agent',$input);
	}
	public function agent_update($input)
	{
		$this->db->where('agent_id',$input['agent_id']);
		$this->db->update('dmn_agent',$input);
	}
	public function agent_delete($agent_id)
	{
		$delete = array('agent_status' => 0 );
		$this->db->where('agent_id',$agent_id);
		$this->db->update('dmn_agent',$delete);
	}

}
