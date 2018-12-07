<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * 
	 */
	function __construct()
	{
		parent::__construct();
	}

	public function index($id)
	{
		$data['title'] = $this->categories_model->get_product_by_category($id)->name;

		$data['products'] = $this->shop_model->get_product_by_category($id);

		$this->load->view('templates/admin_header', $data);
		$this->load->view('admin/product', $data);
		$this->load->view('templates/admin_footer', $data);
	}

	


}
