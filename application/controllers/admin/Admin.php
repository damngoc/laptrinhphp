<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('transaction_model');
		$this->load->library('session');
	}

	public function index()
	{	
		// lay tong so giao dịch
		$this->load->model('transaction_model');
		$giaodich = $this->transaction_model->get_total();
		$this->data['giaodich'] = $giaodich;
		// lay tong so thanh vien da dang ky
		$this->load->model('user_model');
		$thanhvien = $this->user_model->get_total();
		$this->data['thanhvien'] = $thanhvien;
		// lay tong so san pham
		$this->load->model('product_model');
		$sanpham = $this->product_model->get_total();
		$this->data['sanpham'] = $sanpham;
		// lay tong doanh thu (tong tien)
		$this->load->model('order_model');
		$tongtien = $this->order_model->tongtien();
		$this->data['tongtien'] = $tongtien;
		// print_r($tongtien); exit;
		// load thong tin giao dich
		$id = $this->input->get('id');
		$id = intval($id);
		$input['where'] = array();
		if($id > 0)
		{
			$input['like'] = $this->db->like('id', $id);
		}

		$list = $this->transaction_model->layDanhSachGiaoDich($input);
		$this->data['list'] = $list;
		//load view master
		$this->data['temp'] = 'admin/admin/index';
		$this->load->view('admin/layout', $this->data);

		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;
		
	}
	// ham tim kiem chung
	// public function search()
	// {
	// 	$timkiem = $this->input->get('timkiem');
	// 	$this->data['timkiem'] = trim($timkiem);
	// 	$input = array();
	// 	$input['like'] = $this->db->like('name', $search);
	// 	$list = $this->Product_model->layDanhSachSanPham($input);
	// 	$this->data['list'] = $list;	
	// }

	public function danhsachTK()
	{
		$list = $this->Admin_model->loadDanhSachTK();
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/admin/danhsach';
		$this->load->view('admin/layout', $this->data);
		
	}

	public function check_username() //ham kiem tra tai khoan ton tai chua
	{
		$username = $this->input->post('username');
		$where = array('username' => $username);
		if($this->Admin_model->check_exits($where))
		{
			$this->form_validation->set_message(__function__,'Tài khoản đã tôn tại');
			return false;
		}
		return true;
	}

	public function them_admin()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		if($this->input->post())
		{
			$this->form_validation->set_rules('fullname','Họ tên','required|min_length[8]');
			$this->form_validation->set_rules('username','Tài khoản','required|callback_check_username');
			$this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
			// $this->form_validation->set_rules('re_password','Nhập lại mật khẩu','matches['password']');

			if ($this->form_validation->run()) {
				
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$fullname = $this->input->post('fullname');
				if($password)
				{
					$password = md5($password);
				}
				
				if($this->Admin_model->insert_admin($username,$password,$fullname))
				{
					// thong bao them thanh cong
					$this->session->set_flashdata('message','Thêm thành công');				
				}
				else
				{
					$this->session->set_flashdata('message', 'Không thêm được');
				}
				redirect('admin/admin/danhsachTK');
			}		 
		}
		$this->data['temp'] = 'admin/admin/themadmin';
		$this->load->view('admin/layout', $this->data);
	}

	public function sua_admin()
	{	
		$this->load->library('form_validation');
		$this->load->helper('form');
		//lay ve id của tai khoan
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		// lay ve thong tin quan tri vien
		$list = $this->Admin_model->laymotthongtin($id);

		if(!$list)
		{
			$this->form_validation->set_message(__function__,'Tài khoản không tồn tại');
		}
		$this->data['list'] = $list;

		if($this->input->post())
		{
			$this->form_validation->set_rules('fullname','Họ tên','required|min_length[8]');
			$this->form_validation->set_rules('username','Tài khoản','required|callback_check_username');

			$password = $this->input->post('password');
			if($password)
			{
				$this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]');
			}
			if ($this->form_validation->run())
			{
				$username = $this->input->post('username');
				$fullname = $this->input->post('fullname');
				$password = $this->input->post('password');
				if($password)
				{
					$password = md5($password);
				}
				
				if($this->Admin_model->UpdateAdminById($id,$username,$password,$fullname))
				{
					// thong bao thanh cong
					$this->session->set_flashdata('message','Cập nhật thành công');
				}
				else
				{
					$this->session->set_flashdata('message', 'Không cập nhật được');	
				}
				redirect('admin/admin/danhsachTK');
			}		
		}
		$this->data['temp'] = 'admin/admin/editadmin';
		$this->load->view('admin/layout', $this->data);
	}

	
	public function xoa_admin($id)
	{
		if($this->Admin_model->xoataikhoan($id))
		{
			$this->session->set_flashdata('messager','Xoá thành công');
		}
		else{
			$this->session->set_flashdata('messager','Xoá thất bại');
		}
		redirect('admin/admin/danhsachTK');

		
	}

	public function logout()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		if($this->session->userdata('login'))
		{
			$this->session->unset_userdata('login');
		}
		$this->load->view('admin/admin/dangnhap');
	}

}

/* End of file admin */
/* Location: ./application/controllers/admin */