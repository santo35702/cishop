<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Shop Product Model__
 */
class Shop_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get_product($slug = FALSE)
	{
		if ($slug === FALSE) {
			$this->db->order_by('products.id', 'DESC');
			$this->db->join('categories', 'categories.id = products.category_id');
			$query = $this->db->get('products');
			return $query->result_array();
		}

		$query = $this->db->get_where('products', array('slug' => $slug));
			return $query->row_array();
	}

	public function get_product_by_category($category_id)
	{
		$this->db->order_by('products.id', 'DESC');
		$this->db->join('categories', 'categories.id = products.category_id');
		$query = $this->db->get_where('products', array('category_id' => $category_id));
		return $query->result_array();
	}

	
}
