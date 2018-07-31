
		<div class="slidehome">
			<div id="slidetrangchu" class="carousel slide" data-ride="carousel" data-interval="0">
				<ol class="carousel-indicators">
					<li data-target="#slidetrangchu" data-slide-to="0" class="active"></li>
					<li data-target="#slidetrangchu" data-slide-to="1"></li>
					<li data-target="#slidetrangchu" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<?php $dem = 1; ?>
					<?php foreach ($slide as $value): ?>

					<div class="carousel-item <?php if($dem == 1){echo "active"; $dem++;} ?>">
						<div class="motslide container">
							<img src="<?= $value['images_slide'] ?>" alt="" class="anhsl img-fluid" >
							<div class="container2">
								<div class="row"> 									
									<div class="col-sm-7 push-sm-5">
										<h2><?= $value['tieude'] ?></h2>
										<div class="desc"><?= $value['noidung'] ?></div>
										<a href="<?php echo base_url() ?>shop/index" class="nutslide btn btn-outline-secondary"><?= $value['ten_nut'] ?><i class="fas fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- het motslide -->
					</div>
					<?php endforeach ?>

				</div>
				<a class="left carousel-control" href="#slidetrangchu" role="button" data-slide="prev" style="background: url(<?php echo base_url() ?>public/site/images/icon-right.png) no-repeat center center;">
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#slidetrangchu" role="button" data-slide="next" style="background: url(<?php echo base_url() ?>public/site/images/icon-right.png) no-repeat center center;">
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>  <!-- HET SLIDEHOME -->

		<div class="badichvu">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="divdichvu" style="background: url(<?php echo base_url() ?>public/site/images/05nho.png) no-repeat center center;background-size: cover;background-color: #f9eeec;">
							<h2 style="text-transform: uppercase;"><a href="<?php echo base_url() ?>product/sanphamao"> Thời trang áo  </a></h2>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="divdichvu" style="background: url(<?php echo base_url() ?>public/site/images/06nho.png) no-repeat center center;background-size: cover;background-color: #f9eeec;">
							<h2 style="text-transform: uppercase;"><a href="<?php echo base_url() ?>product/sanphamquan"> Thời trang quần </a></h2>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="divdichvu" style="background: url(<?php echo base_url() ?>public/site/images/07nho.png) no-repeat center center;background-size: cover;background-color: #f9eeec;">
							<h2 style="text-transform: uppercase;"><a href="<?php echo base_url() ?>shop/index"> Bộ sưu tập chung </a></h2>
						</div>
					</div>

				</div>
			</div>
		</div>  <!-- HET BADICHVU -->

		<div class="spnoibat">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 push-sm-2 text-xs-center">
						<h2 class="kieuchuto">SẢN PHẨM GẦN ĐÂY</h2>
						<img src="<?php echo base_url() ?>public/site/images/deco.png" alt="" class="vien" style="margin-bottom: 40px;">
						<p class="mota">The Love Boat soon will be making another run the love boat promises something for everyone one two three four five
						six seven eight Sclemeel schlemazel hasenfeffer incorporated.</p>
					</div>
				</div>
				<div class="row gutter10">
					<div class="col-sm-6">
						<a href="" class="kngan" style="background: url(<?php echo base_url() ?>public/site/images/05nho.png) no-repeat center center;background-size: cover;background-color: #f9eeec;">
							<h4>BỘ SƯU TẬP NAM</h4>
							<b class="view">View More <i class="fas fa-arrow-right"></i></b>
						</a>
						<a href="" class="kngan kdai" style="background: url(<?php echo base_url() ?>public/site/images/06nho.png) no-repeat center center;background-size: cover;background-color: #f9eeec;">
							<h4>BỘ SƯU TẬP NỮ</h4>
							<b class="view">View More <i class="fas fa-arrow-right"></i></b>
						</a>

					</div>
					<div class="col-sm-6">

						<a href="" class="kngan kdai" style="background: url(<?php echo base_url() ?>public/site/images/08.jpg) no-repeat center center;background-size: cover;background-color: #f9eeec;">
							<h4>BỘ SƯU TẬP CHUNG</h4>
							<b class="view">View More <i class="fas fa-arrow-right"></i></b>
						</a>
						<a href="" class="kngan" style="background: url(<?php echo base_url() ?>public/site/images/07nho.png) no-repeat center center;background-size: cover;background-color: #f9eeec;">
							<h4>BỘ SƯU TẬP CÔNG SỞ</h4>
							<b class="view">View More <i class="fas fa-arrow-right"></i></b>
						</a>

					</div>
				</div>
			</div>
		</div> <!-- HET SAN PHAM NOI BAT  -->

		<div class="quangcao1home" style="background: url(<?php echo base_url() ?>public/site/images/08.jpg) no-repeat center center;background-size: cover;background-attachment: fixed;>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="qchome text-xs-center">
							<h2>We offer a brand new fashion</h2>
							<p>SIGN UP NOW & GRAB 30% OFF</p>
							<a href="<?php echo base_url() ?>admin/user/dangky" class="nutslide btn btn-outline-secondary"> Sign Up Now <i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div> <!--  HET QUANG CAO TRANG HOME -->



		<div class="sanphamhome">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 push-sm-2">
						<div class="text-xs-center">
							<h2 class="kieuchuto">SẢN PHẨM GẦN ĐÂY</h2>
							<p class="mota">The Love Boat soon will be making another run the love boat promises something for everyone one two three four five
							six seven eight Sclemeel schlemazel hasenfeffer incorporated.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="tabsanpham">
				<div class="tren">
					<ul class="tdtab">
						<li><b class="active"> Sản phẩm phổ biến </b></li>
						<!-- <li><b> Sản phẩm mới </b></li> -->
						<li><b> Thời trang áo </b></li>
						<li><b> Thời trang quần  </b></li>
					</ul>
				</div> <!-- HET TREN -->
				<div class="duoisp">
					<div class="container">
						<ul class="ndtab">
							<li>
								<div class="divsanpham xuathien">
									<div class="row">
										<?php foreach ($product as $value): ?>

										<div class="col-sm-4 text-xs-center">
											<div class="motsanphamchuan" title=" <?= $value['name'] ?>">
												<a href="<?php echo base_url() ?>shop_sigle/index/<?= $value['id'] ?>" class="duoi">
													<span class="anh1sp"><img src="<?= $value['image_link'] ?>" alt=""></span>
													<h3 class="tensp"> <?= $value['name'] ?></h3>
													<div class="cat"></div>
													<?php if($value['discount'] > 0): ?>
									                  <?php $price_new = $value['price'] - $value['discount']; ?>
									                  <span style="color: red;display: block;"><?php echo number_format($price_new); ?></span>
									                  <span style="text-decoration: line-through;display:inline-block;"><?=number_format($value['price']); ?>đ</span>
									                <?php else: ?>
									                  <span><?= number_format($value['price']); ?>đ</span>
									             	 <?php endif; ?>
													<!-- <div class="price"><?= $value['price'] ?></div>
													<div class="price"><?= $value['price'] ?></div> -->
												</a>
												<div class="tren">
													<a href="<?php echo base_url() ?>cart/add/<?= $value['id'] ?>"> Thêm vào giỏ hàng <i class="fas fa-arrow-right"></i> </a>
												</div>
											</div>
										</div>
										<?php endforeach ?>
									</div>  <!-- het row -->
								</div><!--  het divsanpham -->
							</li> <!-- het li -->


							<li>
								<div class="divsanpham ">
									<div class="row">
										<?php foreach ($sanphamnam as $value): ?>
		
										<div class="col-sm-4 text-xs-center">
											<div class="motsanphamchuan" title=" <?= $value['name'] ?>">
												<a href="<?php echo base_url() ?>shop_sigle/index/<?= $value['id'] ?>" class="duoi">
													<span class="anh1sp"><img src="<?= $value['image_link'] ?>" alt=""></span>
													<h3 class="tensp"> <?= $value['name'] ?></h3>
													<div class="cat"></div>
													<?php if($value['discount'] > 0): ?>
									                  <?php $price_new = $value['price'] - $value['discount']; ?>
									                  <span style="color: red;display: block;"><?php echo number_format($price_new); ?></span>
									                  <span style="text-decoration: line-through;display:inline-block;"><?=number_format($value['price']); ?>đ</span>
									                <?php else: ?>
									                  <span><?= number_format($value['price']); ?>đ</span>
									             	 <?php endif; ?>
													<!-- <div class="price"><?= $value['price'] ?></div>
													<div class="price"><?= $value['price'] ?></div> -->
												</a>
												<div class="tren">
													<a href="<?php echo base_url() ?>cart/add/<?= $value['id'] ?>"> Thêm vào giỏ hàng <i class="fas fa-arrow-right"></i> </a>
												</div>
											</div>
										</div>
										<?php endforeach ?>

									</div>  <!-- het row -->
								</div>
							</li>

							<li>
								<div class="divsanpham ">
									<div class="row">
										<?php foreach ($sanphamquan as $value): ?>

										<div class="col-sm-4 text-xs-center">
											<div class="motsanphamchuan" title=" <?= $value['name'] ?>">
												<a href="<?php echo base_url() ?>shop_sigle/index/<?= $value['id'] ?>" class="duoi">
													<span class="anh1sp"><img src="<?= $value['image_link'] ?>" alt=""></span>
													<h3 class="tensp"> <?= $value['name'] ?></h3>
													<div class="cat"></div>
													<?php if($value['discount'] > 0): ?>
									                  <?php $price_new = $value['price'] - $value['discount']; ?>
									                  <span style="color: red;display: block;"><?php echo number_format($price_new); ?></span>
									                  <span style="text-decoration: line-through;display:inline-block;"><?=number_format($value['price']); ?>đ</span>
									                <?php else: ?>
									                  <span><?= number_format($value['price']); ?>đ</span>
									             	 <?php endif; ?>
													<!-- <div class="price"><?= $value['price'] ?></div>
													<div class="price"><?= $value['price'] ?></div> -->
												</a>
												<div class="tren">
													<a href="<?php echo base_url() ?>cart/add/<?= $value['id'] ?>"> Thêm vào giỏ hàng <i class="fas fa-arrow-right"></i> </a>
												</div>
											</div>
										</div>
										
										<!-- <div class="col-sm-4 text-xs-center">
											<div class="motsanphamchuan">
												<a href="" class="duoi">
													<span class="anh1sp"><img src="<?php //echo base_url() ?>public/site/images/motsp.jpg" alt=""></span>
													<h3> Hoody Tshirt</h3>
													<span class="cat"> Áo Khoác</span>
													<div class="price">$65</div>
												</a>
												<div class="tren">
													<a href=""> Thêm vào giỏ hàng <i class="fas fa-arrow-right"></i> </a>
												</div>
											</div>
										</div> -->
										<?php endforeach ?>
									</div>  <!-- het row -->
								</div>
							</li>
						</ul>
						<div class="divnutviewall">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<a href="<?php echo base_url() ?>shop/index" class="nutslide btn btn-outline-secondary nutviewall"> Xem tất cả  <i class="fas fa-arrow-right"></i></a>
									</div>	
								</div>
							</div>
						</div>
					</div> <!-- HET CONTAINER -->
				</div> <!-- HET DUOI -->
			</div><!-- het tab san pham   -->
			<!-- <div class="divnutviewall">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<a href="<?php //echo base_url() ?>shop/index" class="nutslide btn btn-outline-secondary nutviewall"> Xem tất cả  <i class="fas fa-arrow-right"></i></a>
						</div>	
					</div>
				</div>
			</div> --><!--  het divnutviewall -->
		</div>  <!-- HET SANPHAM HOME  -->

		<div class="khoicnnguoidung">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 noidung text-xs-center">
						<h2 class="tieude">TESTIMONIALS</h2>
						<img src="<?php echo base_url() ?>public/site/images/deco.png" alt="" class="vien">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10 push-sm-1 camnhan">
						<div id="slidecamnhan" class="carousel slide" data-ride="carousel" >
							<ol class="carousel-indicators">
								<li data-target="#slidecamnhan" data-slide-to="0" class="active"></li>
								<li data-target="#slidecamnhan" data-slide-to="1"></li>
								<li data-target="#slidecamnhan" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="motslide container">
										<img src="<?php echo base_url() ?>public/site/images/01.png" alt="" class="avatar img-fluid">
										<div class="container">
											<div class="row"> 									
												<div class="col-sm-10 push-sm-1">
													<p class="noidungcamnhan">The Love Boat soon will be making another run the love boat promises something for everyone one two three four five <br>
														six seven eight Sclemeel schlemazel hasenfeffer incorporated the first mate and his skipper too will <br>
													do their very best to make the others comfortable in their tropic island nest</p>
													<h2 class="tacgia">STUART MARSH</h2>
													<span class="nghenghiep">Content Writer</span>
												</div>
											</div>
										</div>
									</div> <!-- het motslide -->
								</div>

								<div class="carousel-item">
									<div class="motslide container">
										<img src="<?php echo base_url() ?>public/site/images/02.png" alt="" class="avatar img-fluid">
										<div class="container">
											<div class="row"> 									
												<div class="col-sm-10 push-sm-1">
													<p class="noidungcamnhan">The Love Boat soon will be making another run the love boat promises something for everyone one two three four five <br>
														six seven eight Sclemeel schlemazel hasenfeffer incorporated the first mate and his skipper too will <br>
													do their very best to make the others comfortable in their tropic island nest</p>
													<h2 class="tacgia">STUART MARSH</h2>
													<span class="nghenghiep">Content Writer</span>
												</div>
											</div>
										</div>
									</div> <!-- het motslide -->
								</div>

								<div class="carousel-item">
									<div class="motslide container">
										<img src="<?php echo base_url() ?>public/site/images/03.png" alt="" class="avatar img-fluid">
										<div class="container">
											<div class="row"> 									
												<div class="col-sm-10 push-sm-1">
													<p class="noidungcamnhan">The Love Boat soon will be making another run the love boat promises something for everyone one two three four five <br>
														six seven eight Sclemeel schlemazel hasenfeffer incorporated the first mate and his skipper too will <br>
													do their very best to make the others comfortable in their tropic island nest</p>
													<h2 class="tacgia">STUART MARSH</h2>
													<span class="nghenghiep">Content Writer</span>
												</div>
											</div>
										</div>
									</div> <!-- het motslide -->
								</div>
							</div>
							<a class="left carousel-control" href="#slidecamnhan" role="button" data-slide="prev" style="background: url(<?php echo base_url() ?>public/site/images/icon-right.png) no-repeat center center;">
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#slidecamnhan" role="button" data-slide="next" style="background: url(<?php echo base_url() ?>public/site/images/icon-right.png) no-repeat center center;">
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div><!--  end row to -->
			</div> <!-- end container -->
		</div> <!-- end khoi cnnguoidung -->

		<div class="khoitintuchome">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 noidung text-xs-center">
						<h2 class="tieude">LATEST NEWS</h2>
						<img src="<?php echo base_url() ?>public/site/images/deco.png" alt="" class="vien">
						<div class="mota">The Love Boat soon will be making another run the love boat promises something for everyone one two three four five <br>
						six seven eight Sclemeel schlemazel hasenfeffer incorporated.</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 cottrai">
						<div class="anhtin">
							<img src="<?php echo base_url() ?>public/site/images/03.png" alt="" class="img-fluid">
							<span class="ngaythang">
								<b>11</b>
								<i>JAN</i>
							</span>
						</div>
						<div class="ndtin">
							<a href="" class="td">Sunday Monday Happy Days</a>
							<p>The Love Boat soon will be making another run the love boat promises something for everyone one two three four five
							six seven eight Sclemeel schlemazel hasenfeffer incorporated.</p>
							<a href="" class="rm">Read More <i class="fas fa-arrow-right"></i><!--<i class="fas fa-arrow-right"></i> --></a>
						</div>
					</div>
					<div class="col-sm-6 cottrai">
						<div class="anhtin">
							<img src="<?php echo base_url() ?>public/site/images/03.png" alt="" class="img-fluid">
							<span class="ngaythang">
								<b>11</b>
								<i>JAN</i>
							</span>
						</div>
						<div class="ndtin">
							<a href="" class="td">Sunday Monday Happy Days</a>
							<p>The Love Boat soon will be making another run the love boat promises something for everyone one two three four five
							six seven eight Sclemeel schlemazel hasenfeffer incorporated.</p>
							<a href="" class="rm">Read More <i class="fas fa-arrow-right"></i><!--<i class="fas fa-arrow-right"></i> --></a>
						</div>
					</div>

				</div>
			</div> <!-- end container -->
		</div><!--  end khoitintuchome -->
		

		<div class="khoinhanmail">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 push-sm-1 text-xs-center">
						<h2>subcribe to our letter</h2>
						<p>Be the first to known about our fresh arrivals and much more!</p>
						<form class="form">
							<input type="text" class="form-control nhanmail" placeholder="Nhập Email..">
							<input type="submit" class="form-control guimail" value="subcribe">
						</form>
					</div>
				</div>
			</div>
		</div> <!-- end khoi nhan mail -->
		
		