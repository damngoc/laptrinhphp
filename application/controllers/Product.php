<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function index()
	{
		
	}

	public function sanphamao()
	{
		//lay san pham hien thị cho danh muc nam
		$list = $this->Product_model->laySanPhamAo();
		$this->data['list'] = $list;

		// $list = $this->Product_model->layDanhSachSanPham();
		// $this->data['list'] = $list;


		//lay so luong san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();
		
		$this->data['temp'] = 'site/product/index';
		$this->load->view('site/layout', $this->data);
	}

	public function sanphamquan()
	{
		$list = $this->Product_model->laySanPhamQuan();
		$this->data['list'] = $list; 
		//lay so luong san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();
		
		$this->data['temp'] = 'site/product/index';
		$this->load->view('site/layout', $this->data);
	}

	public function search()
	{
		$search = $this->input->get('search');
		$this->data['search'] = trim($search);
		$input = array();
		$input['like'] = $this->db->like('name', $search);
		$list = $this->Product_model->layDanhSachSanPham($input);
		$this->data['list'] = $list;

		//lay so luong san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();

		$this->data['temp'] = 'site/product/index';
		$this->load->view('site/layout', $this->data);
	}

	public function search_price()
	{
		$price_from = $this->input->get('price_from');
		$price_from = intval($price_from);
		$price_to = $this->input->get('price_to');
		$price_to = intval($price_to);

		$this->data['price_from'] = $price_from;
		$this->data['price_to'] = $price_to;

		$input = array();
		$input['where'] = $this->db->where('price >= ',$price_from, 'price <= ',$price_to);
		$list = $this->Product_model->layDanhSachSanPham($input);
	
		$this->data['list'] = $list;

		//lay so luong san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();

		$this->data['temp'] = 'site/shop/view';
		$this->load->view('site/layout', $this->data);
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */