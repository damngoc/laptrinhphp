<!DOCTYPE html>
<html lang="en">
<head>
     <title>Trang sửa dữ liệu </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <script type="text/javascript" src="<?php echo base_url('public') ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public') ?>/js/index.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('public/vendor')?>/bootstrap/css/bootstrap.css">
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
				<h1 class="">Sửa tài khoản</h1>
				<hr>
				<form action="" method="POST" role="form">
					<div class="form-group">
						<?php foreach ($list as $value): ?>

							<input type="hidden" name="id">
							<label for="">Họ và Tên:</label>
							<input type="text" class="form-control" id="fullname" value="<?= $value['fullname'] ?>" name="fullname">
							<div class="clear error" name="name_error"><?php echo form_error('fullname') ?> </div>

							<label for="">Tài khoản:</label>
							<input type="text" class="form-control" id="username" value="<?= $value['username'] ?>" name="username">
							<div class="clear error" name="name_error"><?php echo form_error('username') ?> </div>

							<label for="">Mật khẩu:</label>
							<input type="password" class="form-control" id="password" value="<?= $value['username'] ?>" name="password">
							<span>Nếu cập nhật mật khẩu mới điền dữ liệu</span>
							<div class="clear error" name="name_error"><?php echo form_error('password') ?></div>

						</div>
					<?php endforeach ?>
					<button type="submit" class="btn btn-primary btn btn-outline-info btn btn-block">Cập nhật
					</button>
				</form>
			</div>
			
		</div>
			
	</div>
</body>