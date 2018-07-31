<!DOCTYPE html>
<html lang="en">
<head>
     <title>Trang thêm danh mục </title>
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
			<div class="col-sm-6 push-sm-3 ml-5">
				<div class="jumbotron ml-3">
				<h1 class="">Thêm mới slide</h1>
				<hr>
				<form action="<?php echo base_url() ?>admin/slide/them_slide" method="POST" role="form" enctype ="multipart/form-data">
		
				<div class="form-group">
					<label for="">Tiêu đề slide:</label>
					<input type="text" class="form-control" id="tieude" value="<?php echo set_value('title') ?>" name="tieude" placeholder="Nhập tiêu đề...">
					<div class="clear error" name="name_error"><?php echo form_error('tieude') ?> </div>

					<label for="">Nội dung slide:</label>
					<input type="text" class="form-control" id="noidung" value="<?php echo set_value('noidung') ?>" name="noidung" placeholder="Nhập nội dung...">
					<div class="clear error" name="name_error"><?php echo form_error('noidung') ?> </div>

					<label for="">Link slide:</label>
					<input type="text" class="form-control" id="link_slide" value="<?php echo set_value('link_slide') ?>" name="link_slide" placeholder="Nhập link nút...">
					<div class="clear error" name="name_error"><?php echo form_error('link_slide') ?> </div>

					<label for="">Tên button:</label>
					<input type="text" class="form-control" id="ten_nut" value="<?php echo set_value('tennut') ?>" name="ten_nut" placeholder="Nhập tên nút...">
					<div class="clear error" name="name_error"><?php echo form_error('ten_nut') ?> </div>

					<label for="">Ảnh slide:</label>
					<input type="file" class="form-control" id="images_slide" value="<?php echo set_value('images_slide') ?>" name="images_slide">
					<div class="clear error" name="name_error"><?php echo form_error('images_slide') ?> </div>
					
				</div>
				<input style="cursor: pointer;" type="submit" class="btn btn-primary btn btn-outline-info btn btn-block" value="Thêm mới">
				
				</form>
			</div>
		</div>		
	</div>
</body>