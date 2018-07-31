<!DOCTYPE html>
<html lang="en">
<head>
     <title>Trang thêm dữ liệu </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <script type="text/javascript" src="<?php echo base_url('public') ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public') ?>/js/index.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url('public/vendor')?>/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/dangnhap.css">

  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('public/vendor')?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('public/vendor')?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('public/vendor')?>/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('public') ?>/css/sb-admin.css" rel="stylesheet">
  <style>
  	label{
  		color: red;
  	}
  </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				<div class="jumbotron ml-3">
				<h1 class="">Thêm mới tài khoản</h1>
				<hr>
				<form action="<?php echo base_url() ?>admin/admin/them_admin" method="POST" role="form">
		
				<div class="form-group">
					<label for="">Họ và Tên:</label>
					<input type="text" class="form-control" id="fullname" value="<?php echo set_value('fullname') ?>" name="fullname" placeholder="Nhập họ tên...">
					<div class="clear error" name="name_error"><?php echo form_error('fullname') ?> </div>

					<label for="">Tên đăng nhập:</label>
					<input type="text" class="form-control" id="username" value="<?php echo set_value('username') ?>" name="username" placeholder="Nhập tên đăng nhập...">
					<div class="clear error" name="name_error"><?php echo form_error('username') ?> </div>

					<label for="">Mật khẩu:</label>
					<input type="password" class="form-control" id="password" value="<?php echo set_value('password') ?>" name="password" placeholder="Nhập mật khẩu...">
					<div class="clear error" name="name_error"><?php echo form_error('password') ?></div>

				</div>
				<button style="cursor: pointer;" type="submit" class="btn btn-primary btn btn-outline-info btn btn-block">Thêm mới
				</button>
				
				</form>
			</div>
			
		</div>
			
	</div>
</body>