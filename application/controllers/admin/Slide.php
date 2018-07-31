<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slide extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Slide_model');
	}

	public function index()
	{
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$list = $this->Slide_model->layAllSlide();
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/slide/index';
		$this->load->view('admin/layout', $this->data);
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		$this->data['temp'] = 'admin/slide/add';
		$this->load->view('admin/layout', $this->data);
	}
	public function them_slide()
	{

		$this->load->library('form_validation');
		$this->load->helper('form');

		// lay ảnh slide
		$config['upload_path'] = './uploads/news/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('images_slide')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$images_slide = base_url()."/uploads/news/". $this->upload->data('file_name');
			
		}

		if($this->input->post())
		{
			$this->form_validation->set_rules('tieude','Tiêu đề slide','required');
			$this->form_validation->set_rules('noidung','Nội dung slide','required');

			if ($this->form_validation->run()) {
				
					$tieude = $this->input->post('tieude');
					$noidung = $this->input->post('noidung');
					$link_slide = $this->input->post('link_slide');
					$ten_nut = $this->input->post('ten_nut');
					

				$data = array(
					'tieude' => $tieude,
					'noidung' => $noidung,
					'link_slide' => $link_slide,
					'ten_nut' => $ten_nut,
					'images_slide' => $images_slide
					);
				
				if($this->Slide_model->create($data))
				{
					// thong bao them thanh cong
					$this->session->set_flashdata('message','Thêm thành công');			
				}
				else
				{
					$this->session->set_flashdata('message', 'Không thêm được');
				}
				redirect('admin/slide/index');
			}		 
		}
	}
	public function edit()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		$id = $this->uri->rsegment(3);
		$id = intval($id);
		// truyen du lieu qua trang edit
		$list = $this->Slide_model->laythongtinslide($id);
		$this->data['list'] = $list;

		$this->data['temp'] = 'admin/slide/edit';
		$this->load->view('admin/layout', $this->data);
	}
	public function sua()
	{
		$id = $this->uri->rsegment(3);
		$id = intval($id);
		// xu ly upload anh
		$target_dir = "uploads/news/";
		$target_file = $target_dir . basename($_FILES["images_slide"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["images_slide"]["tmp_name"]);
		    if($check !== false) {
		       // echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		       // echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		$images_slide = basename($_FILES["images_slide"]["name"]);
		if($images_slide)
		{
			$images_slide = base_url()."uploads/news/". basename($_FILES["images_slide"]["name"]);
		}
		else{
			$images_slide = $this->input->post('image_slide_old');
		}

			$tieude = $this->input->post('tieude');
			$noidung = $this->input->post('noidung');
			$link_slide = $this->input->post('link_slide');
			$ten_nut = $this->input->post('ten_nut');

			$data = array(
				'tieude' => $tieude,
				'noidung' => $noidung,
				'link_slide' => $link_slide,
				'ten_nut' => $ten_nut,
				'images_slide' => $images_slide
				);
			
			if($this->Slide_model->update($id,$data))
			{
				// thong bao thanh cong
				$this->session->set_flashdata('message','Cập nhật thành công');
			}
			else
			{
				$this->session->set_flashdata('message', 'Không cập nhật được');	
			}
			redirect('admin/slide/index');
	}

	public function delete($id)
	{
		if ($this->Slide_model->delete($id)) {
			$this->session->set_flashdata('message','Xoá thành công');	
		}
		else{
			$this->session->set_flashdata('message','Xoá thất bại');	
		}
		redirect('admin/slide/index');
	}

}

/* End of file Slide.php */
/* Location: ./application/controllers/Slide.php */
