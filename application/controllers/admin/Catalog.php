<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalog extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Catalog_model');
	}
	
	// load danh sach danh muc san pham
	public function index()
	{
		$total_rows = $this->Catalog_model->get_total();
		$this->data['total_rows'] = $total_rows;
		//phân trang 
		$this->load->library('pagination');
		$config = array();
		$config['total_rows'] = $total_rows;
		$config['base_url']    = base_url('admin/catalog/index');
		$config['per_page']    = 3;
		$config['uri_segment'] = 4;
		$config['next_link']   = "Trang kế tiếp";
		$config['prev_link']   = "Trang trước";
		// khoi tao cau hinh phan trang
		$this->pagination->initialize($config);
		
		$segment = $this->uri->segment(4);
		$segment = intval($segment);
		$input = array();
		$input['limit'] = array($config['per_page'], $segment); 

		$list = $this->Catalog_model->loadDanhMucSanPham($input);
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/catalog/index';
		$this->load->view('admin/layout', $this->data);
	}

	public function them_danhmuc()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tên danh mục','required');

			if ($this->form_validation->run()) {
				
					$name = $this->input->post('name');
					$parent_id = $this->input->post('parent_id');
					$sort_order = $this->input->post('sort_order');

				$data = array(
					'name' => $name,
					'parent_id' => $parent_id,
					'sort_order' => $sort_order
					);
				
				if($this->Catalog_model->create($data))
				{
					// thong bao them thanh cong
					$this->session->set_flashdata('message','Thêm thành công');				
				}
				else
				{
					$this->session->set_flashdata('message', 'Không thêm được');
				}
				redirect('admin/catalog/index');
			}		 
		}
		$this->data['temp'] = 'admin/catalog/add';
		$this->load->view('admin/layout', $this->data);
	}

	public function edit()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		//lay ve id của tai khoan
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		// lay ve thong tin quan tri vien
		$list = $this->Catalog_model->laythongtindanhmuc($id);
		$this->data['list'] = $list;

		if(!$list)
		{
			$this->form_validation->set_message(__function__,'Danh mục không tồn tại');
		}
		
		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tên danh mục','required');
			
			if ($this->form_validation->run())
			{
				$name = $this->input->post('name');
				$parent_id = $this->input->post('parent_id');
				$sort_order = $this->input->post('sort_order');

				$data = array(
					'name' => $name,
					'parent_id' => $parent_id,
					'sort_order' => $sort_order
				);
				
				if($this->Catalog_model->update($id,$data))
				{
					// thong bao thanh cong
					$this->session->set_flashdata('message','Cập nhật thành công');
				}
				else
				{
					$this->session->set_flashdata('message', 'Không cập nhật được');	
				}
				redirect('admin/catalog/index');
			}		
		}
		$this->data['temp'] = 'admin/catalog/edit';
		$this->load->view('admin/layout', $this->data);
	}

	public function delete($id)
	{
		$info = $this->Catalog_model->get_info($id);
		if(!$info){
			$this->session->set_flashdata('message','Không tồn tại danh mục này');
			redirect('admin/catalog/index');
		}
		// kiem tra danh mục có san pham hay khong
		$this->load->model('product_model');
		$product = $this->product_model->get_info_rule(array('catalog_id' => $id),'id');
		if($product){
			$this->session->set_flashdata('message','Danh mục này có chứa sản phẩm bạn cần xoá sản phẩm trước khi xoá danh mục');
			redirect('admin/catalog/index');
		}
		
		// tiến hành xoá
		if ($this->Catalog_model->delete($id)) {
			$this->session->set_flashdata('message','Xoá thành công');	
		}
		else{
			$this->session->set_flashdata('message','Xoá thất bại');	
		}
		redirect('admin/catalog/index');
	}


}

/* End of file Catalog.php */
/* Location: ./application/controllers/Catalog.php */