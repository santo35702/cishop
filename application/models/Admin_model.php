<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Shop Product Model__
 */
class Admin_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function create_product($images)
	{
		$slug = url_title($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'description' => $this->input->post('desc'),
			'category_id' => $this->input->post('categories'),
			'images' => $images,
		);

		return $this->db->insert('products', $data);
		// redirect ('admin/product');
	}

	public function delete_product($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('products');
		return true;
	}

	public function update_product()
	{
		$slug = url_title($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'description' => $this->input->post('desc'),
			'category_id' => $this->input->post('categories'),
		);

		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('products', $data);
	}

	// public function get_categories()
	// {
	// 	$this->db->order_by('name');
	// 	$query = $this->db->get('categories');
	// 	return $query->result_array();
	// }
}
