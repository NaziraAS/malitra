<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	private $_session = "";
	public function __construct()
	{
		parent::__construct();
		$this->_session = $this->session->userdata('current_user');
		$this->load->model('gallery_model');
		$this->load->model('partner_model');
		$this->load->model('principal_model');
		$this->load->model('product_model');
		$this->load->model('product_information_model');
		$this->load->model('jumbotron_model');
	}
	public function index()
	{
		$data['script'] = "menu/gallery/script";
		$data['partners'] = $this->partner_model->load();
		$data['principals'] = $this->principal_model->load();
		$data['products'] = $this->product_model->load();
		$data['products_information'] = $this->product_information_model->load();
		$data['jumbotron'] = $this->jumbotron_model->load();
		$data['galleries'] = $this->gallery_model->load();
		$this->load->view('menu/home/index', $data);
	}
	public function admin()
	{
		redirect('authentication/auth');
	}
	public function dashboard()
	{
		if ($this->_session) {
			$data['script'] = "menu/gallery/script";
			$this->template->view('dashboard/dashboard', $data);
		} else {
			$this->index();
		}
	}
	public function gallery()
	{
		if ($this->_session) {
			$data['script'] = "menu/gallery/script";
			$this->template->view('menu/gallery/gallery', $data);
		} else {
			$this->index();
		}
	}
	public function principal()
	{
		if ($this->_session) {
			$data['script'] = "menu/principal/script";
			$this->template->view('menu/principal/principal', $data);
		} else {
			$this->index();
		}
	}
	public function product()
	{
		if ($this->_session) {
			$data['script'] = "menu/product/script";
			$this->template->view('menu/product/product', $data);
		} else {
			$this->index();
		}
	}
	public function editproduct($id)
	{
		if ($this->_session) {
			$data['product'] = $this->product_model->getById($id);
			$data['script'] = "menu/product/script";
			$this->template->view('menu/product/edit', $data);
		} else {
			$this->index();
		}
	}

	// PRODUCT DETAIL
	public function detail()
	{
		if ($this->_session) {
			$data['script'] = "menu/product/script";
			$this->template->view('menu/product/product', $data);
		} else {
			$this->index();
		}
	}

	public function jumbotron()
	{
		if ($this->_session) {
			$data['script'] = "menu/jumbotron/script";
			$this->template->view('menu/jumbotron/jumbotron', $data);
		} else {
			$this->index();
		}
	}

	public function partner()
	{
		if ($this->_session) {
			$data['script'] = "menu/partner/script";
			$this->template->view('menu/partner/partner', $data);
		} else {
			$this->index();
		}
	}
	public function information()
	{
		if ($this->_session) {
			$data['script'] = "menu/product_information/script";
			$this->template->view('menu/product_information/product_information', $data);
		} else {
			$this->index();
		}
	}
	// MENU FRONTEND
	public function menu_product()
	{
		$this->load->view('home/index');
	}
	public function menu_news()
	{
		$this->load->view('news/index');
	}
	public function menu_gallery()
	{
		$this->load->view('gallery/index');
	}
	public function menu_testimonial()
	{
		$this->load->view('testimonial/index');
	}
	public function menu_about()
	{
		$this->load->view('about/index');
	}
	public function menu_contactus()
	{
		$this->load->view('contact_us/index');
	}
}
