<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
	}

	public function index()
	{	
		$sotrang = $this->product_model->soTrang();
		$this->data['sotrang'] = $sotrang;

		$list = $this->product_model->layDanhSachSanPham();
		$this->data['list'] = $list;

		// lay tong so san pham
		$total_rows = $this->product_model->get_total($list);
		$this->data['total_rows'] = $total_rows;
		

		//lay so luong san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();

		$this->data['temp'] = 'site/shop/index';
		$this->load->view('site/layout', $this->data);
	}

	public function phantrang($i)
	{
		
	}

}

/* End of file Shop.php */
/* Location: ./application/controllers/Shop.php */