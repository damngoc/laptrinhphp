<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}
	// hien thi danh sach san pham
	public function index()
	{
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;
		// thuc hien phuong thuc loc hay khong
		$id = $this->input->get('id');
		$id = intval($id);
		$input['where'] = array();
		if($id > 0)
		{
			$input['where']['id'] = $id;
		}
		$name = $this->input->get('name');
		if($name){
			$input['like'] = array('name', $name);
			// redirect('admin/product/index');
		}


		$list = $this->Product_model->layDanhSachSanPham($input);
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/product/index';
		$this->load->view('admin/layout', $this->data);
	}

	public function locSanPham()
	{
		// thuc hien phuong thuc loc hay khong
		$id = $this->input->get('id');
		$id = intval($id);
		$input['where'] = array();
		if($id > 0)
		{
			$input['like'] = $this->db->like('id', $id);
		}
		$name = $this->input->get('name');
		if($name){
			$input['like'] = $this->db->like('name', $name);
		}
		$gia = $this->input->get('gia');
		if($gia)
		{
			$input['like'] = $this->db->like('price', $gia);
		}
		$list = $this->Product_model->layDanhSachSanPham($input);
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/product/view';
		$this->load->view('admin/layout', $this->data);
	}
	// gọi trang thêm sản phẩm
	public function add()
	{
		$this->data['temp'] = 'admin/product/add';
		$this->load->view('admin/layout', $this->data);
		// $this->load->view('admin/product/add');
	}
	// phuong thuc them san pham
	public function them()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		// lay ảnh san pham
		$config['upload_path'] = './uploads/product/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('image_link')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$image_link = base_url()."uploads/product/".  $this->upload->data('file_name');
		}

		// lay ảnh minh hoạ sản phẩm
		$config['upload_path'] = './uploads/product/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('image_list')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$image_list = base_url()."uploads/product/".  $this->upload->data('file_name');
		}

		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tên sản phẩm','required');

			if ($this->form_validation->run()) {
				
					$name = $this->input->post('name');
					$catalog_id = $this->input->post('catalog_id');
					$price = $this->input->post('price');
					$discount = $this->input->post('discount');
					$content = $this->input->post('content');
					$count_buy = $this->input->post('count_buy');
					$view = $this->input->post('view');

				$data = array(
					'name' => $name,
					'catalog_id' => $catalog_id,
					'price' => $price,
					'discount' => $discount,
					'image_link' => $image_link,
					// 'image_list' => $image_list,
					'content' => $content,
					'count_buy' => $count_buy,
					'view' => $view
					);
				
				if($this->Product_model->create($data))
				{
					// thong bao them thanh cong
					$this->session->set_flashdata('message','Thêm thành công');				
				}
				else
				{
					$this->session->set_flashdata('message', 'Không thêm được');
				}
				redirect('admin/product/index');
			}		 
		}
	}

	// load trang sua
	public function sua()
	{
		// lay ve id san pham
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		// truyen du lieu qua trang edit
		$list = $this->Product_model->layMotSanPham($id);
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/product/edit';
		$this->load->view('admin/layout', $this->data);
	}
	// phương thức sửa
	public function edit()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		$id = $this->uri->rsegment(3);
		$id = intval($id);
		// xu ly upload anh
		$target_dir = "uploads/product/";
		$target_file = $target_dir . basename($_FILES["image_link"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["image_link"]["tmp_name"]);
		    if($check !== false) {
		       // echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		       // echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		$image_link = basename($_FILES["image_link"]["name"]);
		if($image_link)
		{
			$image_link = base_url()."uploads/product/". basename($_FILES["image_link"]["name"]);
		}
		else{ 
			$image_link = $this->input->post('image_link_old');
		}

		// $image_link = basename($_FILES["image_link"]["name"]);
		// lay ve image_list
		$target_dir = "uploads/product/";
		$target_file = $target_dir . basename($_FILES["image_list"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["image_list"]["tmp_name"]);
		    if($check !== false) {
		       // echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		       // echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		$image_list = basename($_FILES["image_list"]["name"]);
		if($image_list)
		{
			$image_list = base_url()."uploads/product/". basename($_FILES["image_list"]["name"]);
		}
		else{
			$image_list = $this->input->post('image_list_old');
		}
		// het xu ly upload anh 
		if(!$list)
		{
			$this->form_validation->set_message(__function__,'Sản phẩm không tồn tại');
		}
		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tên sản phẩm','required');
			if ($this->form_validation->run())
			{
				$name = $this->input->post('name');
				$catalog_id = $this->input->post('catalog_id');
				$price = $this->input->post('price');
				$discount = $this->input->post('discount');
				$content = $this->input->post('content');
				$count_buy = $this->input->post('count_buy');
				$view = $this->input->post('view');

				$data = array(
					'name' => $name,
					'catalog_id' => $catalog_id,
					'price' => $price,
					'discount' => $discount,
					'image_link' => $image_link,
					'image_list' => $image_list,
					'content' => $content,
					'count_buy' => $count_buy,
					'view' => $view
					);
				
				if($this->Product_model->update($id,$data))
				{
					// thong bao thanh cong
					$this->session->set_flashdata('message','Cập nhật thành công');
				}
				else
				{
					$this->session->set_flashdata('message', 'Không cập nhật được');	
				}
				redirect('admin/product/index');
			}		
		}
	}

	// phuong thức xoá
	public function delete($id)
	{
		if ($this->Product_model->delete($id)) {
			$this->session->set_flashdata('message','Xoá thành công');	
		}
		else{
			$this->session->set_flashdata('message','Xoá thất bại');	
		}
		redirect('admin/product/index');
	}



}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */