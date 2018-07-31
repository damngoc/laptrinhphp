<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends My_Model {

	public $table = 'order';

	public function __construct()
	{
		parent::__construct();
		
	}

	public function tongtien()
	{
		$this->db->select('SUM(amount)');
		$dl = $this->db->get('order');
		// $dl = $dl->result_array();
		return $dl;
	}

}

/* End of file Order_model.php */
/* Location: ./application/models/Order_model.php */