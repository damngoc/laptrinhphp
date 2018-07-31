<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$controller = $this->uri->segment(1);
		
		switch ($controller) {
			case '':
				{
					//xu ly trang admin
					//$this->load->helper('admin');
					$this->_check_login();

					break;
				}

			default:
			{   //xu ly trang ngoai
				//kiem tra dang nhap thanh cong hay chưa
				$user_id_login = $this->session->set_userdata('user_id_login');
				$this->data['user_id_login'] = $user_id_login;
				if($user_id_login)
				{
					$this->load->model('User_model');
					$user_info = $this->User_model->get_info($user_id_login);
					
					$this->data['user_info'] = $user_info;
				}
				//lay so luong san pham trong gio hang
				$this->load->library('cart');
				$this->data['total_items'] = $this->cart->total_items();
				break;
			}
				
		}
	}

	private function _check_login()
	{
		// $this->load->library('form_validation');
		// $this->load->helper('form');
		
		$controller = $this->uri->rsegment(1);
		$controller = strtolower($controller);
		$login = $this->session->userdata('login');
		if(!$login && $controller != 'login')
		{
			$this->load->view('admin/admin/dangnhap');
		}
		if($login && $controller = 'login')
		{
			$this->data['temp'] = 'admin/admin/index';
			$this->load->view('admin/layout', $this->data);
		}
	}

	
}

/* End of file My_Controller.php */
/* Location: ./application/controllers/My_Controller.php */