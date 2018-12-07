<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * 
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('categories_model');
	}
	public function index($page = 'index')
	{
		if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page);
		// $data['title'] = "All Products";
		// $data['products'] = $this->shop_model->get_product();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('admin/'.$page, $data);
		$this->load->view('templates/admin_footer', $data);
	}

	public function product()
	{
		$data['title'] = "View All Product";
		$data['products'] = $this->shop_model->get_product();
		
		$this->load->view('templates/admin_header', $data);
		$this->load->view('admin/product', $data);
		$this->load->view('templates/admin_footer', $data);
	}

	public function create_product()
	{
		$data['title'] = "Create a new Product";

		$data['categories'] = $this->admin_model->get_categories();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/admin_header', $data);
			$this->load->view('admin/create_product', $data);
			$this->load->view('templates/admin_footer', $data);
		} else {
			// Uploads Images__
			$config['upload_path'] = './uploads/products/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '4096';
			$config['max_width'] = '5000';
			$config['max_height'] = '3000';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload()) {
				$errors = array('error' => $this->upload->display_errors());
				$images = 'avatar2.png';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$images = $_FILES['userfile']['name'];
			}
			
			$this->admin_model->create_product($images);
			redirect ('admin/product');
		}
		
	}

	public function view_product($slug = NULL)
	{
		$data['product_item'] = $this->shop_model->get_product($slug);

		if (empty($data['product_item'])) {
			show_404();
		}

		$data['title'] = $data['product_item']['title'];

		$this->load->view('templates/admin_header', $data);
		$this->load->view('admin/view_product', $data);
		$this->load->view('templates/admin_footer', $data);
	}

	public function delete_product($id)
	{
		$this->admin_model->delete_product($id);
		redirect ('admin/product');
	}

	public function edit_product($slug)
	{
		$data['product_item'] = $this->shop_model->get_product($slug);

		$data['categories'] = $this->categories_model->get_categories();

		if (empty($data['product_item'])) {
			show_404();
		}

		$data['title'] = "Edit this Item";

		$this->load->view('templates/admin_header', $data);
		$this->load->view('admin/edit_product', $data);
		$this->load->view('templates/admin_footer', $data);
	}

	public function update_product()
	{
		$this->admin_model->update_product();
		redirect ('admin/product');
	}

	public function category()
	{
		$data['title'] = "View All Category";
		$data['category'] = $this->categories_model->get_categories();
		
		$this->load->view('templates/admin_header', $data);
		$this->load->view('admin/category', $data);
		$this->load->view('templates/admin_footer', $data);
	}

	public function create_category()
	{
		$data['title'] = "Create Category";
		// $data['products'] = $this->shop_model->get_product();

		$this->form_validation->set_rules('name', 'Categories Name', 'required');
		
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/admin_header', $data);
			$this->load->view('admin/create_category', $data);
			$this->load->view('templates/admin_footer', $data);
		} else {
			$this->categories_model->create_categories();
			redirect ('admin/category');
		}
	}


}
