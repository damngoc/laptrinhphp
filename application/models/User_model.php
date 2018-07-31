<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends My_Model {

	public $table = 'user';

	public function __construct()
	{
		parent::__construct();
		
	}
	public function them_user($name,$email,$password,$phone)
	{
		$dl = array(
			'name' => $name,
			'email' => $email,
			'password' => $password,
			'phone' => $phone
		);
		return $this->db->insert('user', $dl);
	}

	public function check_exits($where = array()) //ham kiểm tra dữ liệu đã tôn tại chưa
	{
		$this->db->where($where);
		//truy vấn lấy dữ liệu
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			return true;
		}
		else{
			return false;
		}

	}

}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */