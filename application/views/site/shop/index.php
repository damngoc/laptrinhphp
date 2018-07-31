<style>
	.noidung a.tc{
		text-decoration: none;
		color: white;
	}
	.theloaisp a{
		text-decoration: none;
		color: black;
		font-size: 14px;
	}
</style>	

<?php 
	$price_from_select = isset($price_from) ? intval($price_from) : 0;
	$price_to_select = isset($price_to) ? intval($price_to) : 0;
 ?>
	<div class="banner-shop" style="background: url(<?php echo base_url() ?>public/site/images/08.jpg) no-repeat center center;">
		<div class="container">
			<div class="noidung">
				<h1>Cửa hàng</h1>
				<span><a href="<?php echo base_url() ?>home/index" class="tc">Trang chủ</a></span>&nbsp;/&nbsp;<span>Cửa hàng</span>
			</div>
		</div>
	</div> <!-- end banner-about -->

	<div class="noidung-shop">
		<div class="container">
			<div class="noidung-top-shop">
				<h1 class="tieudeshop">Tất Cả Sản Phẩm</h1>
				<div class="vien-shop"><img src="<?php echo base_url() ?>public/site/images/vienshop.png" alt="" width="100%" height="5px"></div>
				<div class="btn btn-outline-info nutgrid"><i class="fas fa-th-large"></i>Grid</div>
				<div class="btn btn-outline-danger nutlist"><i class="fas fa-list"></i>List</div>
				<span class="soluong">Hiển thị 1- <?php echo count($list); ?> của tất cả sản phẩm</span>
				<form action="<?php echo base_url() ?>product/search_price" method="GET" style="float:right;">
					<label>Giá từ:</label>
					<select class="nutsort" name="price_from"><i class="fas fa-angle-down"></i>
						<?php for($i = 0; $i <= 5000000; $i = $i+100000): ?>
							<option <?php echo ($price_from_select == $i) ? 'selected' : '' ?> value="<?php echo $i; ?>"><?php echo number_format($i); ?> đ</option>
						<?php endfor; ?>
					</select>
					<label for="">Đến:</label>
					<select class="nutsort2" name="price_to"><i class="fas fa-angle-down"></i>
						<?php for($i = 0; $i <= 5000000; $i = $i+100000): ?>
							<option <?php echo ($price_to_select == $i) ? 'selected' : '' ?> value="<?php echo $i; ?>"><?php echo number_format($i); ?> đ</option>
						<?php endfor; ?>
					</select>

					<input type="submit" class="btn btn-outline-success" value="Tìm" style="float: right;height: 25px;">
				</form>
			</div>
		</div>
		<div class="content-shop">
			<div class="container">
				<div class="row">
					<?php foreach ($list as $value): ?>
						
					<div class="col-sm-4 text-xs-center">
						<div class="motsanphamchuan">
							<a href="<?php echo base_url() ?>shop_sigle/index/<?= $value['id'] ?>" class="duoi">
								<span class="anh1sp"><img src="<?= $value['image_link'] ?>" alt=""></span>
								<a href="" class="tensp"><?= $value['name'] ?></a>
								<div class="theloaisp"><a href=""></a></div>
								<?php if($value['discount'] > 0): ?>
				                  <?php $price_new = $value['price'] - $value['discount']; ?>
				                  <span style="color: red;display: block;"><?php echo number_format($price_new); ?></span>
				                  <span style="text-decoration: line-through;display:inline-block;"><?=number_format($value['price']); ?>đ</span>
				                <?php else: ?>
				                  <span><?= number_format($value['price']); ?>đ</span>
				             	 <?php endif; ?>
								<!-- <span class="giagocsp">350.000đ</span>
								<span class="giakmsp">300.000đ</span> -->
							</a>
							<div class="tren">
								<a href="<?php echo base_url() ?>cart/add/<?= $value['id'] ?>"> Thêm vào giỏ hàng <i class="fas fa-arrow-right"></i> </a>
							</div>
						</div>
					</div><!--  end col-sm-4 -->
					<?php endforeach ?>
					
				</div><!--  end row -->
			</div>
		</div><!--  end content-shop -->
	</div> <!-- HET NOIDUNG-SHOP -->
	<!-- <div class="panigation">
		<?php  //echo $this->pagination->create_links(); ?>
	</div> -->
	<div class="phantrang">
		<div class="container">
			<div class="row">
				<ul class="phtrang">
					<li>
						<a href=""><i class="fas fa-arrow-left"></i></a>
					</li>
					<?php 
						for ($i = 0; $i <=$sotrang ; $i++) {
							?>
							<li>
								<a href="<?php echo base_url() ?>shop/phantrang/<?= $i+1 ?>"><?= $i+1 ?></a>
							</li>
							<?php
						}
					 ?>
					<li>
						<a href=""><i class="fas fa-arrow-right"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div> <!-- end phan trang -->