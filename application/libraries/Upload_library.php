<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_library
{
	protected $CI='';

	public function __construct()
	{
        $this->CI =& get_instance();
	}

	public function upload_file($upload_path ='', $file_name='')
    {
    	$config = $this->config($upload_path);
    	$file = $_FILES('image_list');
    	$count = count($file['name']);

    	$image_list = array();
    	for($i=0;$i<$count-1;$i++)
    	{
	    	  $_FILES['userfile']['name']     = $file['name'][$i];  //khai báo tên của file thứ i
	          $_FILES['userfile']['type']     = $file['type'][$i]; //khai báo kiểu của file thứ i
	          $_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i]; //khai báo đường dẫn tạm của file thứ i
	          $_FILES['userfile']['error']    = $file['error'][$i]; //khai báo lỗi của file thứ i
	          $_FILES['userfile']['size']     = $file['size'][$i]; //khai báo kích cỡ của file thứ i

	          $this->CI->load->library('upload',$config);
	          if($this->CI->upload->do_upload())
	          {
	          	$data = $this->CI->upload->data();
	          	$image_list[] = $data['file_name'];

	          }
    	}
    	return $image_list;
    }

}

/* End of file Upload_library.php */
/* Location: ./application/libraries/Upload_library.php */
