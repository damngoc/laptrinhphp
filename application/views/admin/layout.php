<!DOCTYPE html>
<html lang="en">
<head>
     <title>Trang quản trị </title>
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
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    	<a class="navbar-brand" href="<?php echo base_url() ?>admin/admin/index"> QUẢN TRỊ</a>
    	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      	<span class="navbar-toggler-icon"></span>
   		 </button>

   		 <div class="collapse navbar-collapse" id="navbarResponsive">
      		<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Dashboard">
          		<a class="nav-link" href="index.html">
           		 	<i class="fa fa-fw fa-dashboard"></i>
            		<span class="nav-link-text">Bảng tuỳ chọn</span>
         		 </a>
        		</li>

		        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Sản phẩm">
		          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
		           <i class="fa fa-fw fa-file"></i>
		            <span class="nav-link-text">Quản lý bán hàng</span>
		          </a>
		          <!-- quản lý sản phẩm -->
		          <ul class="sidenav-second-level collapse" id="collapseComponents">
		            <li>
		              <a href="<?php echo base_url() ?>admin/product/index">Danh sách sản phẩm</a>
		            </li>
		            <li>
		              <a href="<?php echo base_url() ?>admin/product/add">Thêm sản phẩm</a>
		            </li>
					<!-- quản lý danh mục sản phẩm -->
		            <li>
		              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">QL danh mục SP</a>
		              <ul class="sidenav-third-level collapse" id="collapseMulti2">
		                <li>
		                  <a href="<?php echo base_url() ?>admin/catalog/index">DS danh mục SP</a>
		                </li>
		                <li>
		                  <a href="<?php echo base_url() ?>admin/catalog/them_danhmuc">Thêm mới danh mục SP</a>
		                </li>
		              </ul>
		            </li>
		          </ul>
		        </li>

		        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tài khoản">
		          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
		            <i class="fa fa-fw fa-wrench"></i>
		            <span class="nav-link-text">Quản lý tài khoản</span>
		          </a>
		          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
		            <li>
		              <a href="<?php echo base_url() ?>admin/admin/danhsachTK">Danh sách tài khoản</a>
		            </li>
		            <li>
		              <a href="<?php echo base_url() ?>admin/admin/them_admin">Thêm tài khoản</a>
		            </li>
		            <li>
		              <a href="forgot-password.html">Quên mật khẩu</a>
		            </li>

		          </ul>
		        </li>

		        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Khác">
		          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
		            <i class="fa fa-fw fa-sitemap"></i>
		            <span class="nav-link-text">Cửa hàng và Người dùng</span>
		          </a>
		          <ul class="sidenav-second-level collapse" id="collapseMulti">
		            <li>
		              <a href="<?php echo base_url() ?>admin/slide/index">QL Slide</a>
		            </li>
		            <li>
		              <a href="#">QL thông tin KH</a>
		            </li>
		            <li>
		              <a href="#">QL Email</a>
		            </li>
		            <li>
		              <a href="<?php echo base_url() ?>admin/transaction/index">QL giao dịch</a>
		            </li>
		          </ul>
		        </li>

		        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Link">
		          <a class="nav-link" href="">
		            <i class="fa fa-fw fa-link"></i>
		            <span class="nav-link-text">Liên hệ</span>
		          </a>
		        </li>
      		</ul>

		      <ul class="navbar-nav sidenav-toggler">
		        <li class="nav-item">
		          <a class="nav-link text-center" id="sidenavToggler">
		            <i class="fa fa-fw fa-angle-left"></i>
		          </a>
		        </li>
		      </ul>
		      <ul class="navbar-nav ml-auto">
		      
		        <li class="nav-item">
		          <form class="form-inline my-2 my-lg-0 mr-lg-2" action="<?php echo base_url() ?>admin/admin/search" method="get">
		            <div class="input-group">
		              <input class="form-control" name="timkiem" type="text" placeholder="Tìm kiếm...">
		              <span class="input-group-btn">
		                <button class="btn btn-primary" style="cursor: pointer;" type="submit">
		                  <i class="fa fa-search"></i>
		                </button>
		              </span>
		            </div>
		          </form>
		        </li>
		        <!-- <li class="nav-item"> -->
		          <a href="<?php echo base_url() ?>admin/login/index" class="nav-link">
		            <i class="fa fa-fw fa-sign-in"></i>Đăng nhập</a>
		        <!-- </li> -->

		        <!-- <li class="nav-item"> -->
		          <a href="<?php echo base_url() ?>admin/admin/logout" class="nav-link">
		            <i class="fa fa-fw fa-sign-out"></i>Đăng xuất</a>
		        <!-- </li> -->
		      </ul>
    	</div>

 	 </nav> <!-- end nav -->

 	 <!-- div content-wrapper -->
	<div class="content-wrapper">
    <div class="container-fluid bangdieukhien" style="margin-top: 40px;">
      <!-- Breadcrumbs-->
      <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Tuỳ chọn</a>
        </li>
        <li class="breadcrumb-item active">Đăng nhập</li>
      </ol> -->
      <h1>Trang quản trị</h1>
      <hr>
      	
      <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
      
      <div style="height: 1000px;">

      	 <?php $this->load->view($temp,$this->data) ?>
      	 
   	  </div>
    <!--/.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- nut về đầu trang-->
    <a class="scroll-to-top rounded" href="#page-top" style="display: none;">
      <i class="fa fa-angle-up"></i>
    </a>
    
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('public/vendor')?>/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('public/vendor')?>/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('public/vendor')?>/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('public') ?>/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <!-- Toggle between fixed and static navbar-->
    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
  </div>
</body>