<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * 
	 */
	function __construct()
	{
		parent::__construct();
	}
	public function index() // $page = 'home'
	{
		// if (!file_exists(APPPATH.'views/shop/'.$page.'.php')) {
		// 	show_404();
		// }

		// $data['title'] = ucfirst($page);
		$data['title'] = "All Products";
		$data['products'] = $this->shop_model->get_product();

		$this->load->view('templates/default_header', $data);
		$this->load->view('shop/home', $data);
		$this->load->view('templates/default_footer', $data);
	}

	public function product()
	{
		$data['title'] = "All Products";
		$data['products'] = $this->shop_model->get_product();

		$this->load->view('templates/default_header', $data);
		$this->load->view('shop/product', $data);
		$this->load->view('templates/default_footer', $data);
	}

	public function view($slug = NULL)
	{
		$data['product_item'] = $this->shop_model->get_product($slug);

		if (empty($data['product_item'])) {
			show_404();
		}

		$data['title'] = $data['product_item']['title'];

		$this->load->view('templates/default_header', $data);
		$this->load->view('shop/view', $data);
		$this->load->view('templates/default_footer', $data);
	}

	public function about()
	{
		$data['title'] = "About Us";
		// $data['products'] = $this->shop_model->get_product();

		$this->load->view('templates/default_header', $data);
		$this->load->view('shop/about', $data);
		$this->load->view('templates/default_footer', $data);
	}

	public function contact()
	{
		$data['title'] = "Contact with Us";
		// $data['products'] = $this->shop_model->get_product();

		$this->load->view('templates/default_header', $data);
		$this->load->view('shop/contact', $data);
		$this->load->view('templates/default_footer', $data);
	}

	public function faq()
	{
		$data['title'] = "Free-Quently Asked Question";
		// $data['products'] = $this->shop_model->get_product();

		$this->load->view('templates/default_header', $data);
		$this->load->view('shop/faq', $data);
		$this->load->view('templates/default_footer', $data);
	}

	
}
