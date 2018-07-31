<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trang thêm sản phẩm </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<script type="text/javascript" src="<?php echo base_url('public') ?>/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url('public') ?>/js/index.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>/ckeditor/ckeditor.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>/ckeditor/ckfinder/ckfinder.js"></script>
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
		input.dodai{
			width: 400px;
		}
		input.number{
			width: 150px;
		}
		button.nutthem{
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 push-sm-1">
				<div class="jumbotron ml-3" style="width: 100%;">
					<h1 class="">Thêm mới sản phẩm</h1>
					<hr>
					<form action="them" method="POST" enctype="multipart/form-data">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dữ liệu</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Nội dung & ảnh</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Số lượng</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								
								<label for="" style="color: black;margin-top: 10px;">Tên sản phẩm:</label>
								<input type="text" class="form-control dodai" id="name" value="<?php //echo set_value('name') ?>" name="name" placeholder="Nhập tên sản phẩm...">
								<div class="clear error" name="name_error"><?php //echo form_error('name') ?> </div>

								<label for="" style="color: black;margin-top: 10px;">Thuộc danh mục:</label>
								<input type="number" class="form-control number" id="catalog_id" value="<?php //echo set_value('catalog_id') ?>" name="catalog_id"">
								<div class="clear error" name="name_error"><?php //echo form_error('catalog_id') ?> </div>

								<label for="" style="color: black;margin-top: 10px;">Giá sản phẩm:</label>
								<input type="number" class="form-control number" id="price" value="<?php //echo set_value('price') ?>" name="price"">
								<div class="clear error" name="name_error"><?php //echo form_error('price') ?> </div>

								<label for="" style="color: black;margin-top: 10px;">Giá khuyến mại:</label>
								<input type="number" class="form-control number" id="discount" value="<?php //echo set_value('discount') ?>" name="discount"">
								<div class="clear error" name="name_error"><?php //echo form_error('discount') ?> </div>

							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<label for="" style="color: black;margin-top: 10px;">Ảnh sản phẩm:</label>
								<input type="file" class="form-control" name="image_link" id="image_link">

								<label for="" style="color: black;margin-top: 10px;">Ảnh liên quan:</label>
								<input type="file" class="form-control" name="image_list" id="image_list">
								
								<label for="" style="color: black;margin-top: 10px;">Nội dung:</label>
								<textarea name="content" class="content" id="content" cols="30" rows="10">
								</textarea>
							</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

								<label for="" style="color: black;margin-top: 10px;">Số lượng mua:</label>
								<input type="number" class="form-control number" id="count_buy" value="<?php //echo set_value('count_buy') ?>" name="count_buy"">
								<div class="clear error" name="name_error"><?php //echo form_error('count_buy') ?> </div>

								<label for="" style="color: black;margin-top: 10px;">Số lượt xem:</label>
								<input type="number" class="form-control number" id="view" value="<?php //echo set_value('view') ?>" name="view"">
								<div class="clear error" name="name_error"><?php //echo form_error('view') ?> </div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary nutthem">Thêm mới</button>
					</form>
				</div>
			</div>	
		</div>
	</div>
	<script>
		CKEDITOR.replace( 'content',{
		    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
	    	filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images'
	 
		});
	</script>
</body>
</html>