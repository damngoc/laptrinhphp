<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}

	public function index()
	{
		$carts = $this->cart->contents();
		$total_items = $this->cart->total_items();

		$this->data['carts'] = $carts;
		$this->data['total_items'] = $total_items;

		// $id = $this->uri->rsegment(3);
		// $id = intval($id);

		// $this->load->model('product_model');
		// $list = $this->product_model->layMotSanPham($id);
		// $this->data['list'] = $list;

		$this->data['temp'] = 'site/cart/index';
		$this->load->view('site/layout', $this->data);
	}
	public function add()
	{
		$id = $this->uri->rsegment(3);
		$id = intval($id);

		$this->load->model('product_model');
		$product = $this->product_model->layMotSanPham($id);
		$this->data['product'] = $product;	
		if(!$product){
			redirect();
		}
		//tong so san pham
		$qty = 1;
		//thong tin them vao gio hang
		foreach ($product as $value) {
			$price = $value['price'];
			if($value['discount'] > 0 )
			{
				$price =  $value['price'] - $value['discount'];
			}
			$data = array(
						'id'    => $value['id'],
                       'qty'   => $qty,
                       'price' => $value['price'],     
                       'name'  => url_title($value['name']),
                       'image_link' => $value['image_link']
					);

		}
		$this->cart->insert($data);
		//chuyen ve trang chu
		redirect(base_url('cart/index'));
	}

	public function update()
	{
		$carts = $this->cart->contents();

		foreach ($carts as $key => $value) {
		 	$total_qty = $this->input->post('qty_'.$value['id']);
		 	$data = array(
		 		'rowid' => $key,
		 		'qty' => $total_qty
		 	);
		 	 $this->cart->update($data);
		 }
		
		 //chuyen ve trang chu gio hang
		 redirect(base_url('cart/index'));
	}

	public function delete()
	{
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		if($id > 0)
		{
			$carts = $this->cart->contents();
			foreach ($carts as $key => $value)
			 {
			 	if($value['id'] == $id)
			 	{
			 		$data = array(
		 			'rowid' => $key,
		 			'qty' => 0
		 			);
			 	}
		 	 $this->cart->update($data);
		 	}
		}else{
			$this->cart->destroy();
		}
		 redirect(base_url('cart/index'));
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */