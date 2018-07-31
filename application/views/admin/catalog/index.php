<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang danh sách catalog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <script type="text/javascript" src="<?php echo base_url('public') ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public') ?>/js/jquery-3.2.1.min.js"></script>
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
  	h1.danhsach{
  		color: gray;
  		font-size: 20px;
  		font-family: segoe ui light;
  	}
  	span.hienthi{
  		color:#f20246;
  	}
  	.panigation a,.panigation strong{
  		padding: 5px;
  		border: 1px solid gray;
  		text-decoration: none;
  	}
  </style>
</head>
<body>
	
		<div class="container">
			<h1 class="danhsach" style="width: 400px;">Danh sách danh mục sản phẩm</h1> <span class="text-xs-right" style="float: right;">Tổng: <?php echo $total_rows ?></span>
			<span class="hienthi"><?php echo $this->session->flashdata('message'); ?></span>

		</div>
	<table class="table table-hover danhsachadmin">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên danh muc</th>
				<th>Danh mục</th>
				<th>Thứ tự hiển thị</th>
				<th>Sửa</th>
				<th>Xoá</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($list as $value): ?>
			<tr>
				<td><?= $value['id'] ?></td>
				<td><?= $value['name'] ?></td>
				<td><?= $value['parent_id'] ?></td>
				<td><?= $value['sort_order'] ?></td>
				<td><a href="<?php echo base_url() ?>admin/catalog/edit/<?= $value['id'] ?>"><span class="btn btn-outline-success"><i class="fa fa-pencil"></i></span></a></td>
				<td><a href="<?php echo base_url() ?>admin/catalog/delete/<?= $value['id'] ?>" class="nutxoact"><span class="btn btn-outline-danger"><i class="fa fa-remove"></i></span></a></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	 <!-- <div class="panigation">
		<?php  //echo $this->pagination->create_links(); ?>
	</div>  -->
</body>
</html>