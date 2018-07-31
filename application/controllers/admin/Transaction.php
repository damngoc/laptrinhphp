<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaction extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaction_model');
	}

	public function index()
	{
		$id = $this->input->get('id');
		$id = intval($id);
		$input['where'] = array();
		if($id > 0)
		{
			$input['like'] = $this->db->like('id', $id);
		}

		$list = $this->transaction_model->layDanhSachGiaoDich($input);
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/transaction/index';
		$this->load->view('admin/layout', $this->data);
	}

	// phuong thức xoá
	public function delete($id)
	{
		if ($this->transaction_model->delete($id)) {
			$this->session->set_flashdata('message','Xoá thành công');	
		}
		else{
			$this->session->set_flashdata('message','Xoá thất bại');	
		}
		redirect('admin/transaction/index');
	}


}

/* End of file Transaction.php */
/* Location: ./application/controllers/Transaction.php */