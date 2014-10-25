<?php

class Site_model extends CI_Model {

	function get_records()
	{
		$query = $this->db->get('categories');
		return $query->result();
	}

	function add_record($data)
	{
		$this->db->insert('categories', $data);
		return;
	}

	function update_record($data)
	{
		$this->db->where('cat_id',1);
		$this->db->update('categories', $data);
	}

	function delete_row()
	{
		$this->db->where('cat_id', $this->uri->segment(3));
		$this->db->delete('categories');
	}

}