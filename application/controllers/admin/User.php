<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('session');
	}

	public function index()
	{
		if(!$this->session->userdata('user_id_login'))
		{
			redirect();
		}
		$user_id = $this->session->userdata('user_id_login');
		$user = $this->User_model->get_info($user_id);
		if(!$user)
		{
			redirect();
		}
		$this->data['user'] = $user;
		$this->data['temp'] = 'site/user/index';
		$this->load->view('site/layout', $this->data);
	}

	public function check_email() //ham kiem tra tai khoan ton tai chua
	{
		$email = $this->input->post('email');
		$where = array('email' => $email);
		if($this->User_model->check_exits($where))
		{
			$this->form_validation->set_message(__function__,'Email đã tôn tại');
			return false;
		}
		return true;
	}

	public function dangky()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		if($this->input->post())
		{
			$this->form_validation->set_rules('name', 'Họ và tên', 'required|min_length[8]');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email');
			$this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
			$this->form_validation->set_rules('phone', 'Số điện thoại', 'required|min_length[8]');

			if ($this->form_validation->run()) {
				
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$phone = $this->input->post('phone');
				if($password){
					$password = md5($password);
				}
				
				if($this->User_model->them_user($name,$email,$password,$phone))
				{	
			//echo 'thong bao them thanh cong';
					$this->session->set_flashdata('message','Đăng ký thành viên thành công');				
				}
				else
				{	
			//echo 'thong bao them that bai';
					$this->session->set_flashdata('message', 'Không đăng ký được');
				}
				redirect('home/index');
			}
		}

		//lay so luong san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();

		$this->data['temp'] = 'site/user/register';
		$this->load->view('site/layout', $this->data);
	}

	public function sign_in()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		if($this->input->post())
		{
			
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
			$this->form_validation->set_rules('login','login','callback_dangnhap');
			if($this->form_validation->run())
			{
				$user = $this->_get_user_info();
				$this->session->set_userdata('user_id_login', $user->id);

				//kiem tra dang nhap thanh cong hay chưa
				$user_id_login = $this->session->set_userdata('user_id_login');
				$this->data['user_id_login'] = $user_id_login;
				if($user_id_login)
				{
					$this->load->model('User_model');
					$user_info = $this->User_model->get_info($user_id_login);
					
					$this->data['user_info'] = $user_info;
				}
				redirect('home/index',$this->data);
			}
			
		}

		//lay so luong san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();
		
		$this->data['temp'] = 'site/user/sign-in';
		$this->load->view('site/layout', $this->data);
	}

	public function dangnhap()
	{
		$user = $this->_get_user_info();
		if($user)
		{
			return true;
		}
		$this->form_validation->set_message(__function__,'Không đăng nhập thành công');
		return false;

		// $email = $this->input->post('email');
		// $password = $this->input->post('password');
		// $password = md5($password);

		// $where = array('email' => $email,'password' => $password);
		// if($this->User_model->check_exits($where))
		// {
		// 	$this->session->set_flashdata('message','Đăng nhập thành công');
		// 	return true;
		// }
		// 	$this->session->set_flashdata('message','Đăng nhập không thành công');
		// return false;
	}
	//lay thong tin cua thanh vien
	public function _get_user_info()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password = md5($password);

		$where = array('email' => $email,'password' => $password);
		$user = $this->User_model->get_info_rule($where);
		return $user; 
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */