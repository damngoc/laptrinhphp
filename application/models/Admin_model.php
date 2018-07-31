<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends My_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		//var $table = 'admin';
		
	}

	public function insert_admin($username,$password,$fullname)
	{
		$dl = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname
		);
		return $this->db->insert('admin', $dl);
	}

	 function get_info($id)
    {
        if (!$id)
        {
            return FALSE;
        }
        $where = array();
        $where['id'] = $id;
        return $this->get_info_rule($where);
    }
    
	function get_info_rule($where = array())
    {
        $this->db->where($where);
        $query = $this->db->get($this->table);
        if ($query->num_rows())
        {
            return $query->row();
        }
        return FALSE;
    }

	public function check_exits($where = array()) //ham kiểm tra dữ liệu đã tôn tại chưa
	{
		$this->db->where($where);
		//truy vấn lấy dữ liệu
		$query = $this->db->get('admin');
		if($query->num_rows()>0)
		{
			return true;
		}
		else{
			return false;
		}

	}


	public function loadDanhSachTK()
	{
		$this->db->select('*');
		$dl = $this->db->get('admin');
		$dl = $dl->result_array();
		return $dl;
	}

	public function laymotthongtin($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$ketqua = $this->db->get('admin');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}

	public function UpdateAdminById($id,$username,$password,$fullname)
	{
		$dulieusua = array(
			'id' => $id,
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname
		);
		$this->db->where('id', $id);
		$dl = $this->db->update('admin', $dulieusua);
		return $dl;
	}

	public function xoataikhoan($id)
	{
		$this->db->where('id', $id);
		$dl = $this->db->delete('admin');
		return $dl;
	}

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */