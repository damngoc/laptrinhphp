<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slide_model extends My_Model {

	public $table ='slide';

	public function __construct()
	{
		parent::__construct();
		
	}

	public function layAllSlide()
	{
		$this->db->select('*');
		$dl = $this->db->get('slide');
		$dl = $dl->result_array();
		return $dl;
	}

	public function laythongtinslide($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$ketqua = $this->db->get('slide');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}

}

/* End of file Slide_model.php */
/* Location: ./application/models/Slide_model.php */