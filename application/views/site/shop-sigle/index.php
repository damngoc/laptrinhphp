	<style>
	
	.theloaisp a{
		text-decoration: none;
		color: black;
		font-size: 14px;
	}
</style>

	<div class="banner-shop" style="background: url(<?php echo base_url() ?>public/site/images/08.jpg) no-repeat center center;">
		<div class="container">
			<div class="noidung">
				<h1>Chi Tiết Sản Phẩm</h1>
				<span>Trang chủ</span>&nbsp;/&nbsp;<span>Chi tiết sản phẩm</span>
			</div>
		</div>
	</div> <!-- end banner-about -->

	<div class="sanpham">
		<div class="container">
			<div class="row">
				<div class="anhsp col-sm-6">
					<?php foreach ($list as $value): ?>
						
					<a href="" class="bigimage"><img id="zoom_01" src="<?= $value['image_link'] ?>" alt="" data-zoom-image="images/bigimage.png"></a>
					<div class="thumbnails">

						<a href="" class="anhnho"><img src="<?= $value['image_list'] ?>" alt=""></a>
						<!-- <a href="" class="anhnho"><img src="<?php //echo base_url() ?>public/site/images/anhnho2.png" alt=""></a>
						<a href="" class="anhnho"><img src="<?php //echo base_url() ?>public/site/images/anhnho3.png" alt=""></a>
						<a href="" class="anhnho"><img src="<?php //echo base_url() ?>public/site/images/anhnho4.png" alt=""></a> -->	
					</div>
					<?php endforeach ?>
				</div>
				<div class="tomtatsp col-sm-6">
					<h3 class="tieude"><?= $value['name'] ?> </h3>
					<?php if($value['discount'] > 0): ?>
	                  <?php $price_new = $value['price'] - $value['discount']; ?>
	                  <span style="color: red;"><?php echo number_format($price_new); ?></span>
	                  <span style="text-decoration: line-through;display:inline-block;"><?=number_format($value['price']); ?>đ</span>
	                <?php else: ?>
	                  <span><?= number_format($value['price']); ?>đ</span>
	              <?php endif; ?>

					<!-- <span class="gia">300$</span> -->
					<div class="mota">Chúng tôi chuyên cung cấp các sản phẩm đẹp, chất lượng nhất đến tay người tiêu dùng.</div>
					<div class="soluongton">Còn: <!-- <?php //echo count($tongsanpham); ?> --> sản phẩm trong kho</div>
					<form action="" class="cart">
						<div class="quantity">
							<span class="label">QTY:</span>
							<input type="button" class="minus" value="-">
							<input type="number" value="1" class="qty">
							<input type="button" class="plus" value="+">
						</div>
						<button class="btn btn-outline-primary"><a href="<?php echo base_url() ?>cart/add/<?= $value['id'] ?>"> Thêm vào giỏ hàng <i class="fas fa-arrow-right"></i> </a></button>
					</form>
				</div>
				<div class="tabchitietsp col-sm-12">
			        <div class="tab-wrapper">
					    <ul class="tab">
					        <li>
					            <a href="#tab-main-info">Thông tin chính</a>
					        </li>
					        <li>
					            <a href="#tab-image">Hình ảnh</a>
					        </li>
					        <li>
					            <a href="#tab-seo">Phản hồi của khách hàng</a>
					        </li>
					    </ul>
					    <div class="tab-content">
					        <div class="tab-item" id="tab-main-info">
					            <?= $value['content'] ?>

					        </div>
					        <div class="tab-item" id="tab-image">
					            <img style="width: 223px;" src="<?= $value['image_link'] ?>" alt="">
					            <img style="width: 223px;" src="<?= $value['image_list'] ?>" alt="">
					        </div>
					        <div class="tab-item" id="tab-seo">
					            <div id="fb-root"></div>
					            <div class="fb-comments" data-href="https://www.facebook.com/lukyboy263/" data-numposts="5">
					            	
					            </div>
									<script>
										(function(d, s, id) {
									  		var js, fjs = d.getElementsByTagName(s)[0];
									  		if (d.getElementById(id)) return;
									  		js = d.createElement(s); js.id = id;
									  		js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
									  		fjs.parentNode.insertBefore(js, fjs);
										}
										(document, 'script', 'facebook-jssdk'));
									</script>
					        </div>
					    </div>
					</div>
				</div><!--  HET TABS SPCHITIET -->
				<div class="vienduoi"></div>
				<div class="splienquan col-sm-12">
					<h1 class="tieude">Sản phẩm liên quan</h1>
					<div class="vien"><img src="<?php echo base_url() ?>public/site/images/deco.png" alt=""></div>
					<div class="row">
						<?php foreach ($product as $value): ?>
							
						<div class="col-sm-4 text-xs-center">
							<div class="motsanphamchuan">
								<a href="<?php echo base_url() ?>shop_sigle/index/<?= $value['id'] ?>" class="duoi">
									<span class="anh1sp"><img src="<?= $value['image_link'] ?>" alt=""></span>
									<a href="" class="tensp"><?= $value['name'] ?></a>
									<div class="theloaisp"><a href="">Nam</a></div>
									<?php if($value['discount'] > 0): ?>
					                  <?php $price_new = $value['price'] - $value['discount']; ?>
					                  <span style="color: red;"><?php echo number_format($price_new); ?></span>
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
						</div> <!-- end 1 cot -->
						<?php endforeach ?>
					</div> <!-- end row nho -->
				</div> <!-- end splienquan -->
			</div> <!-- end row to -->
		</div> <!-- HET CONTAINER -->
	</div> <!-- HET KHOI SAN PHAM -->