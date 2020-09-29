<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GeneralModel extends CI_Model
{

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function get_selected($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function add_data($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function update_data($table, $data, $where)
	{
		$this->db->where($where);
		return $this->db->update($table, $data);
	}

	public function delete_data($where, $table)
	{
		$this->db->where($where);
		return $this->db->delete($table);
	}
}
