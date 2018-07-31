<style>
	.login{
		background: #eff0f5;
		padding-top: 50px;
		padding-bottom: 50px;
	}
	.dnhap{
		position: relative;
	    border: 2px solid #ffffff29;
	    box-shadow: 0px 2px 2px 2px;
	    left: 50%;
	    transform: translateX(-50%);
	    z-index: 2;
	    padding: 35px;
	    width: 70%;
	    margin: 50px 0;
	    background: white;
	}
	.dnhap .email,.dnhap .password{
		width: 50%;
		border-radius: 0px;
	}
	.dnhap .nutdn{
		width: 26%;
	    border-radius: 0px;
	    position: absolute;
	    bottom: 140px;
	    right: 80px;
	    background-color: orange;
	    border: transparent;
	}
	.dnhap .gg,.dnhap .fbmang{
		width: 26%;
	    border-radius: 0px;
	    position: absolute;
	    bottom: 70px;
	    right: 80px;
	    background-color: #3b5998;
	    border: transparent;
	    color: white;
	    font-size: 15px;
	    height: 29px;
	}
	.dnhap .gg{
	    bottom: 23px;
	    right: 80px;
	    background-color: #d34836;
	    border: transparent;
	}
	.dnhap p{
		width: 30%;
	    position: absolute;
	    bottom: 97px;
	    right: 46px;
	    font-size: 12px;
	}
	.login span{
		display: block;
		float: right;
		margin-right: 167px;
		font-size: 15px;
    	color: #777;
	}
	a.dn{
		text-decoration: none;
	}
</style>

<div class="login">
	<div class="container">
		<legend style="text-align: center;font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">Chào mừng bạn đến với website VOLTA. Đăng nhập ngay!</legend>
		<span>Thành viên mới? <a href="<?php echo base_url() ?>admin/user/dangky" class="dn">Đăng ký </a>tại đây</span>
		<!-- <?php //echo $this->session->flashdata('message'); ?> -->
		<div class="dnhap">
			<p class="tb" style="color: red;position: absolute;left: 16%;top: 84%;">
				<?php echo $this->session->flashdata('message'); ?>
			</p>
			<form action="<?php echo base_url() ?>admin/user/sign_in" method="POST" role="form">
				
				<div class="form-group">
					<label for="">Email:</label>
					<input type="email" class="form-control email" name="email" id="email" placeholder="Nhập email ...">
					<div class="clear error" name="name_error"><?php echo form_error('email') ?> </div>
				</div>
				<div class="form-group">
					<label for="">Passwpord:</label>
					<input type="Password" class="form-control password" name="password" id="password" placeholder="Nhập mật khẩu...">
					<div class="clear error" name="name_error"><?php echo form_error('password') ?> </div>
				</div>
		
				<button type="submit" class="btn btn-primary nutdn">Đăng nhập</button>
			</form>
			<p>Hoặc kết nối với tài khoản mạng xã hội</p>
			<div class="fbmang">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=595814544116367&autoLogAppEvents=1';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

			<div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
			</div>
			<!-- <a href=""><button class="btn btn-outline-info fb"><i class="fab fa-facebook-f"></i>  Facebook</button></a> -->
			<a href=""><button class="btn btn-outline-danger gg"><i class="fab fa-google-plus-g"></i>  Google</button></a>

		</div><!--  end dnhap -->
	</div> <!-- end container -->
</div><!--  end login -->