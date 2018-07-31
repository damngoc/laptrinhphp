<!DOCTYPE html>
<html lang="en">
<head>
     <title>Trang sửa dữ liệu </title>
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
				<h1 class="">Sửa danh mục</h1>
				<hr>
				<form action="" method="POST" role="form">
					<div class="form-group">
						<?php foreach ($list as $value): ?>

							<input type="hidden" name="id">
							<label for="">Tên danh mục:</label>
							<input type="text" class="form-control" id="name" value="<?= $value['name'] ?>" name="name">
							<div class="clear error" name="name_error"><?php echo form_error('name') ?> </div>

							<label for="">Thuộc danh mục:</label>
							<input type="text" class="form-control" id="parent_id" value="<?= $value['parent_id'] ?>" name="parent_id">
							<div class="clear error" name="name_error"><?php echo form_error('parent_id') ?> </div>

							<label for="">Thứ tự hiển thị:</label>
							<input type="number" class="form-control" id="sort_order" value="<?= $value['sort_order'] ?>" name="sort_order">
							<div class="clear error" name="name_error"><?php echo form_error('sort_order') ?></div>

						</div>
					<?php endforeach ?>
					<button style="cursor: pointer;" type="submit" class="btn btn-primary btn btn-outline-info btn btn-block">Cập nhật
					</button>
				</form>
			</div>
			
		</div>
			
	</div>
</body>