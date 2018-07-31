<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//lay so luong san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();

		$this->data['temp'] = 'site/blog/index';
		$this->load->view('site/layout', $this->data);
	}

	public function contact()
	{
		//lay so luong san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();

		$this->data['temp'] = 'site/contact/index';
		$this->load->view('site/layout', $this->data);
	}



}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */