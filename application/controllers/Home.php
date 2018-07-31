<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		//$data = array();
		$this->load->model('product_model');
		$input = array();
		//$input['limit'] = array(1,6);
		$product = $this->product_model->sanphamhienthi();
		$this->data['product'] = $product;
		//lay san pham theo danh muc ao
		$sanphamnam = $this->product_model->laySanPhamAo();
		$this->data['sanphamnam'] = $sanphamnam;

		$sanphamquan = $this->product_model->laySanPhamQuan();
		$this->data['sanphamquan'] = $sanphamquan;

		$this->load->model('slide_model');
		$slide = $this->slide_model->layAllSlide();
		$this->data['slide'] = $slide;

		//lay so luong san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();

		$this->data['temp'] = 'site/home/index';
		$this->load->view('site/layout', $this->data);
		//$this->load->view('site/home/index');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */