<style>
.dky{
	position: relative;
    border: 2px solid #ffffff29;
    box-shadow: 0px 2px 2px 2px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 2;
    padding: 35px;
    width: 50%;
    margin: 50px 0;
}
.nutsm{
	text-align: center;
	margin-left: 50%;
	transform: translateX(-50%);
}
.dky{background: #f8f8f8;}
.dky .dn{text-decoration: none;}
.dky span{
	display: block;
	float: right;
	font-size: 13px;
    margin-top: -30px;
}
</style>
<div class="container">
	<?php echo $this->session->flashdata('message'); ?>
	<div class="dky">
		<form action="<?php echo base_url() ?>admin/user/dangky" method="POST" role="form">
			<legend style="">Đăng ký tài khoản</legend>
			<span>Đã là thành viên?<a href="<?php echo base_url() ?>admin/user/sign_in" class="dn">Đăng nhập </a>tại đây</span>
			<div class="form-group">
				<label for="">Họ Tên:</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Nhập họ tên ...">
				<div class="clear error" name="name_error"><?php echo form_error('name') ?> </div>
			</div>
			<div class="form-group">
				<label for="">Email:</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Nhập email ...">
				<div class="clear error" name="name_error"><?php echo form_error('email') ?> </div>
			</div>
			<div class="form-group">
				<label for="">Passwpord:</label>
				<input type="Password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu...">
				<div class="clear error" name="name_error"><?php echo form_error('password') ?> </div>
			</div>
			<div class="form-group">
				<label for="">Phone:</label>
				<input type="text" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại ...">
				<div class="clear error" name="name_error"><?php echo form_error('phone') ?> </div>
			</div>

			<button type="submit" class="btn btn-primary nutsm">Đăng ký</button>
		</form>
	</div><!--  end dky -->
</div> <!-- end container -->