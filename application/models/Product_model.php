<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends My_Model {

	public $table ='product';

	public function __construct()
	{
		parent::__construct();
		
	}
	public function layDanhSachSanPham()
	{
			$this->db->select('*');
			$dl = $this->db->get('product');
			// $dl = $this->db->order_by('price', 'desc');
			$dl = $dl->result_array();
			return $dl;
	}
	public function soTrang()
	{
		$sosptrong1trang = 4;

		$this->db->select('*');
		$dl = $this->db->get('product',$sosptrong1trang,0);
		$dl = $dl->result_array();

		$soluongsp = count($dl);
		$sotrang = round($soluongsp/$sosptrong1trang);
		return $sotrang;
	}

	public function sanphamhienthi()
	{
		$this->db->select('*');
		$dl = $this->db->get('product',6);
		$dl = $dl->result_array();
		return $dl;
	}

	public function sanphamhienthishopsigle()
	{
		$this->db->select('*');
		$dl = $this->db->get('product',3,3);
		$dl = $dl->result_array();
		return $dl;
	}

	public function layMotSanPham($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$ketqua = $this->db->get('product');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}

	public function laySanPhamAo()
	{
		$this->db->select('*');
		$this->db->where('product.catalog_id', 2);
		$ketqua = $this->db->get('product');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}

	public function laySanPhamQuan()
	{
		$this->db->select('*');
		$this->db->where('product.catalog_id', 1);
		$ketqua = $this->db->get('product');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}


}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */