<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop_sigle extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// lay ve id của san pham
		$id = $this->uri->segment(3);
		$id = intval($id);
		
		$this->load->model('product_model');
		$list = $this->product_model->layMotSanPham($id);		
		$this->data['list'] = $list;
		//san pham lien quan trang shop-sigle
		$product = $this->product_model->sanphamhienthishopsigle();
		$this->data['product'] = $product;
		//lay tong so san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();

		$this->data['temp'] = 'site/shop-sigle/index';
		$this->load->view('site/layout', $this->data);
	}

}

/* End of file Shop-sigle.php */
/* Location: ./application/controllers/Shop-sigle.php */