<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends My_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		if($this->input->post())
		{
			$this->form_validation->set_rules('login','login','callback_check_login');
			if($this->form_validation->run())
			{
				$this->session->set_userdata('login', true);
			}
			redirect('admin/admin/index');
		}
		$this->load->view('admin/admin/dangnhap');
	}

	public function check_login()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = md5($password);
		
		$this->load->model('admin_model');
		$where = array('username' => $username, 'password' => $password);
		if($this->admin_model->check_exits($where))
		{
			
			return true;
		}
		$this->form_validation->set_message(__function__,'Đăng nhập không thành công');
		return false;
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */