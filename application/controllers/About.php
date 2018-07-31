<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//lay so luong san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();

		$this->data['temp'] = 'site/about-us/index';
		$this->load->view('site/layout', $this->data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */