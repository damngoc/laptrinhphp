<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once ('mail/PHPMailer.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/SMTP.php';

class Order extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->library('email');
	}

	public function index()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		//lay ra danh sach gio hang
		$carts = $this->cart->contents();
		$total_items = $this->cart->total_items();
		if($total_items <= 0){
			redirect();
		}
		$this->data['carts'] = $carts;
		$total_amount = 0;
		foreach ($carts as $value) {
			$total_amount = $total_amount + $value['subtotal'];
		}
		$this->data['total_amount'] = $total_amount;

		//lay so luong san pham trong gio hang
		$this->load->library('cart');
		$this->data['total_items'] = $this->cart->total_items();
		
		$this->data['temp'] = 'site/order/checkout';
		$this->load->view('site/layout', $this->data);
	}

	public function check_out()
	{

		$this->load->library('form_validation');
		$this->load->helper('form');
		//lay ra danh sach gio hang
		$carts = $this->cart->contents();
		$total_items = $this->cart->total_items(); //tong so san pham
		if($total_items <= 0){
			redirect();
		}
		$this->data['carts'] = $carts;
		$total_amount = 0;
		foreach ($carts as $value) {
			$total_amount = $total_amount + $value['subtotal']; //tong tien thanh toan
		}
		$this->data['total_amount'] = $total_amount;
		if($this->input->post())
		{
		//tien hanh cap nhat thong tin de mua hang	
		$user_email = $this->input->post('user_email');
		$user_name = $this->input->post('user_name');
		$user_phone = $this->input->post('user_phone');
		$message = $this->input->post('message');
		$payment = $this->input->post('payment');

		$data = array(
			'user_email' => $user_email,
			'user_name' => $user_name,
			'user_phone' => $user_phone,
			'message' => $message,
			'payment' => $payment,
			'amount' => $total_amount,
			'status' => 0,   //trang thai cua don hang (chua thanh toan)
			'created' => now()
			);
		$this->load->model('transaction_model');
		$this->transaction_model->create($data);
		$transaction_id = $this->db->insert_id(); //lay ra id cua giao dich

		$this->load->model('order_model');
		foreach ($carts as $value) {
			$data = array(
				'transaction_id' => $transaction_id,
				'product_id'     => $value['id'],
				'qty'            => $value['qty'],
				'amount'		 => $value['subtotal'],
				'status'		 => 0  //trang thai cua don hang (chua giao hang cho khach)
			);
			$this->order_model->create($data);
			}
		}
		//xoa san pham trong gio hang
		$this->cart->destroy(); //xao thong tin gio hang
		if($payment == 'offline')
		{
			// gui gmail den khach hang
			// try{                      
				$mail = new PHPMailer(true); // Passing `true` enables exceptions
				$mail->CharSet = "UTF-8";
			    //Server settings
			    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
			    $mail->isSMTP();                                      // Set mailer to use SMTP
			    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth = true;                               // Enable SMTP authentication
			    $mail->Username = 'damngoc263@gmail.com';                 // SMTP username
			    $mail->Password = 'ismstiioznvbatcp';                           // SMTP password
			    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			    $mail->Port = 587; 
			                                       // TCP port to connect to
			    //Recipients
			    $mail->setFrom('damngoc03@gmail.com','Có đơn hàng mới!');
			    $mail->addAddress($user_email,'Đàm Hồng Ngọc');     // Add a recipient
			    //Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = $user_name;
			    // $mail->Body    = 'Người gửi: <p>damngoc263@gmail.com</p>,
			    // 							<br />Số điện thoại: $user_phone,
			    // 							<br /> Địa chỉ: $message ,
			    // 							<br />Tổng tiền: $total_amount';
			   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			    $mail->Body = '
						<html>
							<body>
								<p>Người gửi:damngoc263@gmail.com</p>
								
							</body>
						</html>
			    ';

			    // if (order.Email != null)
       //              {
       //                  //Generate content
       //                  string content = System.IO.File.ReadAllText(Server.MapPath("~/Content/client/NewOrder.html"));
       //                  content = content.Replace("{{OrderName}}", order.Customer);
       //                  content = content.Replace("{{Phone}}", order.Phone);
       //                  content = content.Replace("{{Email}}", order.Email);
       //                  content = content.Replace("{{Address}}", order.Address);
       //                  content = content.Replace("{{Price}}", total.ToString("N0"));

       //                  string adminMail = ConfigurationManager.AppSettings["ToMailAddress"].ToString();
       //                  //Sendmail
       //                  new MailHelper().SendMail(adminMail, "Đơn đặt hàng mới!", content);
       //                  new MailHelper().SendMail(order.Email, "Thông tin đơn hàng từ FashionShop!", content);
       //              }
			    
			    $mail->send();
			    // echo 'Thư đã được gửi';
			    $this->session->set_flashdata('message','Đặt hàng thành công');	
			// } catch (Exception $e) {
			//     echo 'Lỗi không gửi được mail. Lỗi Mail: ', $mail->ErrorInfo;
			// }	
			redirect();
		}
		elseif (is_array($payment, array('baokim','nganluong'))) {
			// load thu vien thanh toan
			$this->load->library('payment/'.$payment.'_payment');
			// chuyen sang cong thanh toan
			$this->{$payment.'_payment'}->payment($transaction_id,$total_amount);
		}
		
	}
}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */