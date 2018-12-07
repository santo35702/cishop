<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Shop Product Model__
 */
class Categories_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get_categories()
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('categories');
		return $query->result_array();
	}

	public function create_categories()
	{
		$data = array(
			'name' => $this->input->post('name')
		);

		return $this->db->insert('categories', $data);
	}

	public function get_product_by_category($id)
	{
		$query = $this->db->get_where('categories', array('id' => $id));
		return $query->row();
	}

	
}
