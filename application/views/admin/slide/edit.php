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
				<h1 class="">Sửa slide</h1>
				<hr>
				<?php foreach ($list as $value): ?>
					
				<form action="<?php echo base_url() ?>admin/slide/sua/<?= $value['id'] ?>" method="POST" role="form" enctype ="multipart/form-data">
		
				<div class="form-group">
					<label for="">Tiêu đề slide:</label>
					<input type="text" class="form-control" id="tieude" value="<?= $value['tieude'] ?>" name="tieude">

					<label for="">Nội dung slide:</label>
					<input type="text" class="form-control" id="noidung" value="<?= $value['noidung'] ?>" name="noidung">

					<label for="">Link slide:</label>
					<input type="text" class="form-control" id="link_slide" value="<?= $value['link_slide'] ?>" name="link_slide">

					<label for="">Tên button:</label>
					<input type="text" class="form-control" id="ten_nut" value="<?= $value['ten_nut'] ?>" name="ten_nut">

					<label for="">Ảnh slide:</label>
					<input type="file" class="form-control" id="images_slide" value="<?= $value['images_slide'] ?>" name="images_slide">
					<input type="hidden" class="form-control" id="images_slide_old" value="<?= $value['images_slide'] ?>" name="images_slide_old">
					
				</div>
				<input style="cursor: pointer;" type="submit" class="btn btn-primary btn btn-outline-info btn btn-block" value="Cập nhật">
				
				</form>
				<?php endforeach ?>
			</div>
		</div>		
	</div>
</body>