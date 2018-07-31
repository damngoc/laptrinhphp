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
				<h1 class="">Thêm mới danh mục sản phẩm</h1>
				<hr>
				<form action="<?php echo base_url() ?>admin/catalog/them_danhmuc" method="POST" role="form">
		
				<div class="form-group">
					<label for="">Tên danh mục:</label>
					<input type="text" class="form-control" id="name" value="<?php echo set_value('name') ?>" name="name" placeholder="Nhập tên danh mục...">
					<div class="clear error" name="name_error"><?php echo form_error('name') ?> </div>

					<label for="">Danh mục cha:</label>
					<input type="number" class="form-control" id="parent_id" value="0" name="parent_id" style="width: 150px; float: right;margin-right: 100px;">
					<div class="clear error" name="name_error"><?php echo form_error('parent_id') ?> </div>

					<label for="">Thứ tự hiển thị:</label>
					<input type="number" class="form-control" id="sort_order" value="0" name="sort_order" style="width: 150px; float: right;margin-right: 100px;">
					<div class="clear error" name="name_error"><?php echo form_error('sort_order') ?> </div>
					
				</div>
				<button style="cursor: pointer;" type="submit" class="btn btn-primary btn btn-outline-info btn btn-block">Thêm mới
				</button>
				
				</form>
			</div>
		</div>		
	</div>
</body>