    <style>
        .nutcapnhat .thanhtoan,.nutcapnhat .xoahet{
            color: black;
            display: inline-block;
            float: right;
            border-radius: 0;
        }
        .nutcapnhat .xoahet{
            margin-left: 5px;
        }
        button.capnhat{
            color: black;
            display: block;
            border-radius: 0;
            width: 100px;
            border: 1px solid black;
            margin-left: 5px;
            float: right;
        }
        button.capnhat:hover{
            background: black;
            color:white;
        }
        .noidung a{
            color: white;
            text-decoration: none;
        }
        span.soluong{
            color: red;
            font-size: 15px;
        }
        .tongsp{
            border: 1px solid #80808052;
            width: 20%;
            display: block;
            margin-bottom: 10px;
            text-align: center;
            float: right;
        }
    </style>

        <div class="banner-shop" style="background: url(<?php echo base_url() ?>public/site/images/08.jpg) no-repeat center center;">
            <div class="container">
                <div class="noidung">
                    <h1>Chi tiết giỏ hàng</h1>
                    <span><a href="<?php echo base_url() ?>home/index">Trang chủ</a></span>&nbsp;/&nbsp;<span>Giỏ hàng</span>
                </div>
            </div>
        </div> <!-- end banner-about -->

        <div class="content-cart">
            <div class="container">
                <h1 class="tieude">Chi tiết giỏ hàng</h1>
                <div class="tongsp">Có tất cả: <span class="soluong"><?php echo $total_items; ?></span> sản phẩm</div>
                <div class="bangsanpham">
                   <!--  <?php //if ($total_items > 0): ?> -->
                        
                    <form action="<?php echo base_url() ?>cart/update" method="post">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col"class="text-xs-center hienthi">Ảnh sản phẩm</th>
                            <th scope="col"class="text-xs-center hienthi">Tên sản phẩm</th>
                            <th scope="col"class="text-xs-center hienthi">Giá</th>
                            <th scope="col"class="text-xs-center hienthi">Số lượng</th>
                            <th scope="col"class="text-xs-center hienthi">Thành tiền</th>
                            <th scope="col"class="text-xs-center hienthi">Xoá</th>
                          </tr>
                        </thead>
                        <tbody class="noidunghienthi">
                            <?php $total_amount = 0; ?>
                            <?php foreach ($carts as $value): ?>
                            <?php $total_amount = $total_amount + $value['subtotal'] ;?>
                          <tr>
                            <td scope="row" class="image"><img src="<?= $value['image_link'] ?>" alt=""></td>
                            <td scope="row" class="tensp"><?= $value['name'] ?></td>
                            <td scope="row" class="tensp"><?= $value['price'] ?> đ</td>
                            <td scope="row" class="tensp">
                                <!-- <form action="" class="cart"> -->
                                    <div class="quantity">
                                        <input type="button" class="minus" value="-">
                                        <input type="number" id="giatri" name="qty_<?php echo $value['id'] ?>" value="<?= $value['qty'] ?>" class="qty">
                                        <input type="button" class="plus" value="+">
                                    </div>
                                <!-- </form> -->
                            </td>
                            <td scope="row" class="tensp"><?= $value['subtotal'] ?></td>
                            <td scope="row" class="tensp"><a href="<?php echo base_url() ?>cart/delete/<?= $value['id'] ?>"><b class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></b></a></td>
                          </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                       <button type="submit" class="btn btn-outline-info capnhat">Cập nhật</button>
                  </form><!--  end form -->
                  <!-- <?php //else: ?>
                        <h4>Không có sản phẩm nào trong giỏ hàng</h4>
                    <?php //endif ?> -->
                </div> <!--end bangsanpham-->
                <div class="nutcapnhat">
                   
                    <a href="<?php echo base_url() ?>shop/index" class="btn btn-success muahang">Tiếp tục mua hàng <i class="fas fa-arrow-right"></i></a>
                    <a href="<?php echo base_url() ?>cart/delete" class="btn btn-outline-danger xoahet">Xoá hết</a>
                    <a href="<?php echo base_url() ?>order/index" class="btn btn-outline-info thanhtoan">Mua hàng</a>
                </div>
                <div class="row">
                    <div class="col-sm-4 push-sm-5 text-xs-right thongke">
                       <h3 class="cart-total">Giỏ hàng</h3>
                       <div class="dongia">Tổng tiền :<span><?= number_format($total_amount); ?></span></div> 
                       <!-- <div class="shipping">Shipping : <span>5%</span></div>
                       <div class="total">Total : <span></span></div> -->
                    </div>
                </div>
            </div> <!--end container-->
        </div> <!--end content-cart-->