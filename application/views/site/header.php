<style>
	.menutop ul li a{
		text-transform: uppercase;
	}
	.menutop ul li a:hover{
		
	}
	.menutop .navbar-light .navbar-nav li a.nav-link:hover{
		color: orange;
		transition: 0.5s;
		border-bottom: 2px solid orange;
		padding-bottom: 18px;
	}
	.search{
		width: 35px;
	    color: white;
	    height: 49px;
	    text-align: center;
	    border: 2px solid #f2f2f2;
	    cursor: pointer;
	    margin-left: -5px;
	    padding-bottom: 16px;
	}
</style>

<div class="thanhcc text-xs-center text-sm-left">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<?php if(isset($user_info)): ?>
					<a href="<?php echo base_url() ?>admin/user/index" class="cctop register">
						<i class="fas fa-sign-in-alt"></i>
						Xin chào: <?php echo $user_info['name']; ?>
					</a>
					<a href="<?php echo base_url() ?>admin/user/dangxuat" class="cctop register">
					<i class="fas fa-sign-in-alt"></i>
					Đăng xuất
				</a>
				<?php else:?>
					<a href="<?php echo base_url() ?>admin/user/dangky" class="cctop register">
					<i class="fas fa-sign-in-alt"></i>
					Đăng ký
				</a>
				<a href="<?php echo base_url() ?>admin/user/sign_in" class="cctop myaccount"> 
					Đăng nhập <i class="fas fa-angle-down"></i>
				</a>
				<?php endif; ?>
				
			
				<a href="<?php echo base_url() ?>cart/index" class="cctop">
					<i class="fa fa-shopping-cart"></i>
					<?php echo $total_items; ?> items
				</a>
			</div>
			<div class="col-sm-6 ">
				<div class="float-sm-right text-xs-center text-sm-left">
					<form action="<?php echo base_url() ?>product/search" method="get">
						<input type="text" name="search" class="form-control tim" placeholder="Tìm kiếm" value="<?php echo isset($search) ? $search: '' ?>">
						<input type="submit" name="nuttim" style="background: url('<?php echo public_url() ?>/site/images/iconsearch.png') no-repeat 92% center;" value="" class="search">
					</form>
				</div>  
			</div>
		</div>
	</div>
</div>  <!-- HẾT THANH CÔNG CỤ -->

<div class="menutop">
	<nav class="navbar navbar-light ">
		<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">

		</button>
		<div class="collapse navbar-toggleable-md" id="exCollapsingNavbar2">
			<a class="navbar-brand" href="<?php echo base_url() ?>home/index"><img src="<?php echo public_url() ?>/site/images/logo.png" alt="Logo cho website"></a>
			<ul class="nav navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url() ?>home/index">Trang chủ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url() ?>shop/index">Cửa hàng <!-- <i class="fas fa-angle-down"></i> --></a>
					<!-- <ul>
						<li><a href=""> Shop Men</a></li>
						<li><a href=""> Shop Women</a></li>
						<li><a href=""> Shop Accessories</a></li>
					</ul> -->
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url() ?>blog/index">Giới thiệu</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url() ?>about/index">Với chúng tôi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url() ?>blog/contact">Liên hệ</a>
				</li>

			</ul>
		</div>
	</nav>
</div>   <!-- END MENUTOP -->
