<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

		if (!file_exists(APPPATH.'views/users/'.$page.'.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page);
		$data['category'] = $this->categories_model->get_categories();
		
		// $data['title'] = "All Products";
		// $data['products'] = $this->shop_model->get_product();

		$this->load->view('templates/users_header', $data);
		$this->load->view('users/'.$page, $data);
		$this->load->view('templates/users_footer', $data);
	}

	


}
