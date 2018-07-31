<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalog_model extends My_Model {

	public $table = 'catalog';

	public function __construct()
	{
		parent::__construct();
		
	}
	// hàm lấy danh sách danh muc
	public function loadDanhMucSanPham()
	{
		$this->db->select('*');
		$dl = $this->db->get('catalog');
		$dl = $dl->result_array();
		return $dl;
	}

	public function laythongtindanhmuc($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$ketqua = $this->db->get('catalog');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}


}

/* End of file Catalog_model.php */
/* Location: ./application/models/Catalog_model.php */