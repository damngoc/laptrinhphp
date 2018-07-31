<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaction_model extends My_Model {

	public $table ='transaction';

	public function __construct()
	{
		parent::__construct();
		
	}

	public function layDanhSachGiaoDich()
	{
		$this->db->select('*');
		$dl = $this->db->get('transaction');
		$dl = $dl->result_array();
		return $dl;
	}


}

/* End of file Transaction_model.php */
/* Location: ./application/models/Transaction_model.php */