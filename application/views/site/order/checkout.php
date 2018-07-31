		<style>
			.noidung a{
	            color: white;
	            text-decoration: none;
        	}
        	.fg .fb{background: #4267b2;color: white;}
        	.fg .gg{background: #d9534f;color: white;}
        	.tongtien .tong{ display: block;float: right;margin-right: 210px;}
		</style>
		
		<div class="banner-contact" style="background: url(<?php echo base_url() ?>public/site/images/08.jpg) no-repeat center center;">
            <div class="container">
                <div class="noidung">
                    <h1>Checkout</h1>
                    <span><a href="<?php echo base_url() ?>home/index">Home</a></span>&nbsp;/&nbsp;<span>Checkout</span>
                </div>
            </div>
        </div> <!-- end banner-about -->

		<div class="content-thongtin">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 left">
						<h3 class="tieude">Thông tin nhận hàng</h3>
						<form action="<?php echo base_url() ?>order/check_out" method="POST" role="form">
						
							<div class="form-group">
								<label for="">Địa chỉ email</label>
								<input type="email" class="form-control" name="user_email" id="user_email" value="<?php echo set_value('user_email') ?>" placeholder="Nhập email của bạn..">
							</div>
						
							<div class="form-group">
								<label for="">Họ và Tên</label>
								<input type="text" class="form-control" name="user_name" id="name" value="<?php echo set_value('user_name') ?>" placeholder="Họ và tên..">
							</div>
						
							<div class="form-group">
								<label for="">Số điện thoại</label>
								<input type="text" class="form-control" name="user_phone" id="phone" value="<?php echo set_value('user_phone') ?>" placeholder="Nhập số điện thoại của bạn..">
							</div>
						
							<div class="form-group">
								<label for="">Ghi chú</label>
								<textarea class="form-control" name="message" id="message" value="<?php echo set_value('message') ?>" cols="30" rows="5">	
								</textarea>
							</div>

							<div class="form-group">
								<select name="payment" id="payment" value="<?php echo set_value('payment') ?>">
									<option value="">----Chọn phương thức thanh toán----</option>
									<option value="offline">Tiền mặt</option>
									<option value="nganluong">Ngân lượng</option>
									<option value="baokim">Bảo kim</option>	
								</select>
							</div>

							<div class="form-group fg">
								<span>Tạo tài khoản hoặc <a href="">đăng nhập</a> bằng</span>
								<a href=""><span class="btn btn-outline-info fb"><i class="fab fa-facebook"></i> Facebook</span></a>
								<a href=""><span class="btn btn-outline-danger gg"><i class="fab fa-google-plus-square"></i> Google+</span></a>
							</div>
							
							<button type="submit" class="btn btn-success">Thanh toán</button>
						</form>
					</div><!--  end left -->
					<div class="col-sm-6 right">
						<h3 class="tieude">Thông tin đơn hàng</h3>
						<div class="tren">
							<div class="row">
									<h4 class="hienthi">Sản phẩm</h4>
									<h4 class="hienthi" style="float: right;margin-left: 167px;">Thành tiền</h4>
								<?php foreach ($carts as $value): ?>
								
								<div class="col-sm-6 trai">
									<div class="tensp"><?= $value['name'] ?>: </div>		
								</div>
								
								<div class="col-sm-6 phai">
									<div class="giasp"><?= number_format($value['subtotal']) ?> đ</div>
								</div>
								<?php endforeach ?>
								<div class="tongtien">
									<span>Tổng:</span><span class="tong"><?php echo number_format($total_amount); ?>đ</span>
								</div>
							</div>
						</div>
						<!-- <div class="duoi">
							<form action="" class="luachon">
							  <input type="radio" name="contact" value=""> Thanh toán tại nơi nhận<br>
							  <p>Bạn chọn thanh toán bằng tiền mặt</p>
							  <input type="radio" name="contact" value=""> Thanh toán qua thẻ 
							    <a href=""><i class="fab fa-cc-paypal"></i></a>  
							    <a href=""><i class="fab fa-cc-visa"></i></a>
							    <a href=""><i class="fab fa-cc-mastercard"></i></a>
							    <a href=""><i class="fab fa-cc-visa"></i></a> 
							
							<div class="btn btn-outline-success thanhtoan">Thanh toán</div>
						</div>
						</form> -->
					</div><!--  end right -->

				</div><!--  end row -->
			</div><!--  end container -->
		</div><!--  end content -->
