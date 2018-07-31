<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang quản trị</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
    
	<style>
		h1.loichao{
			color: orange;
		}
		h3.tieude{
			font-size: 25px;
			color: #777;
			font-family: Myriad pro;
		}
		.table .doanhthu,.table .dtthang,.table .dttuan,.table .dtngay{
			border-bottom: 1px solid #80808059;
			padding-bottom: 10px;
			padding-top:5px;
			width: 285px;
		}
		.table span{
			float: right;
			color: red;
		}
		.table .gd,.table .thanhvien,.table .baiviet,.table .sanpham{
			border-bottom: 1px solid #80808059;
			padding-bottom: 10px;
			padding-top:5px;
			width: 285px;
		}
		.table span{
			float: right;
			color: red;
		}

	</style>

</head>
<body>
	<marquee behavior="" direction=""><h1 class="loichao">Chào mừng bạn ghé thăm cửa hàng của chúng tôi !!</h1></marquee>
	<hr>
	<div class="noidungquantri" style="display: block;border-bottom: 1px solid #80808038;padding-bottom: 156px;">
		<div class="col-sm-6 trai float-sm-left">
			<h3 class="tieude text-sm-center">Doanh thu</h3>
			<div class="table">
				 <div class="doanhthu">Tổng doanh thu: <span> đ</span></div>
				 <!-- <div class="dtthang">Doanh thu theo tháng: <span> đ</span></div>
				 <div class="dttuan">Doanh thu theo tuần: <span> đ</span></div>
				 <div class="dtngay">Doanh thu theo ngày: <span> đ</span></div> -->
			</div>
		</div>
		<div class="col-sm-6 phai float-sm-right">
			<h3 class="tieude text-sm-center">Giao dịch</h3>
			<div class="table">
				<div class="gd">Tổng số giao dịch: <span><?php echo $giaodich; ?></span></div>
				 <div class="thanhvien">Tổng số thành viên: <span><?php echo $thanhvien; ?></span></div>
				<!--  <div class="baiviet">Tổng số bài viết: <span>100</span></div> -->
				 <div class="sanpham">Tổng số sản phẩm: <span><?php echo $sanpham ?></span></div>
			</div>
		</div>
	</div>

	<div class="giaodich">
		<div class="col-sm-6 push-sm-3">
			<h3 class="tieude">Danh sách giao dịch</h3>
		</div>
		<table class="table table-bordered">
		  <span class="thongbao"><?php echo $this->session->flashdata('message'); ?></span>
        <!-- <span class="soluong" style="display: block;float: right;margin-right: 30px;">Số lượng: <?php //echo count($list); ?></span> -->
        <form action="<?php echo base_url() ?>admin/transaction/index" method="get">
          Mã số: <input type="text" name="id" value="<?php echo $this->input->get('id') ?>" style="width: 100px; margin-right: 50px;margin-bottom: 50px;">
          <input type="submit" class="btn btn-outline-success" value="Lọc" style="cursor: pointer;"></input>
         </form>
        <div class="bangsanpham">
          <table class="table table-bordered dataTable" id="table_san_pham">
            <thead>
              <tr>
                <th scope="col" class="text-xs-center xoahet"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i></th>
                <th scope="col" class="text-xs-center masp">Mã GD</th>
                <th scope="col" class="text-xs-center anhsp">Tổng tiền</th>
                <th scope="col" class="text-xs-center tensp">Email khách</th>
                <th scope="col" class="text-xs-center tensp">Cổng thanh toán</th>
                <th scope="col" class="text-xs-center gia">Trạng thái</th>
                <th scope="col" class="text-xs-center ngaytao">Ngày giao dịch</th>
                <th scope="col" class="text-xs-center hanhdong">Hành động</th>
              </tr>
            </thead>
            <tbody class="noidunghienthi">
              <?php foreach ($list as $value): ?>

              <tr>
                <td scope="row" class=""><input type="checkbox" /></td>
                <td scope="row" class="product_id"><?= $value['id'] ?></td>
                <td scope="row" class="gia"><?= $value['amount'] ?></td>
                <td scope="row" class="anhsp"><?= $value['user_email'] ?></td>
                <td scope="row" class="anhsp"><?= $value['payment'] ?></td>
                <td scope="row" class="tensp">
                  <?php 
                      if($value['status'] == 0)
                      {
                        echo "Chưa thanh toán";
                      }
                      elseif($value['status'] == 1)
                      {
                        echo "Đã thanh toán";
                      }
                      else{
                      echo "Huỷ đơn hàng";
                    }
                   ?>
                </td>
                <td scope="row" class="ngaytao"><?= date('d-m-Y',$value['created']); ?></td>
                <td scope="row" class="">
                  <a href="<?php echo base_url() ?>admin/transaction/sua/<?= $value['id']; ?>" class="btn btn-outline-secondary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="<?php echo base_url() ?>admin/transaction/delete/<?= $value['id']; ?>" class="btn btn-outline-danger nutxoapd"><i class="fa fa-times" aria-hidden="true"></i></a>
                </td>
              </tr>

              <?php endforeach ?>
            </tbody>
          </table>
        </div> <!--end bangsanpham-->
       <!-- </form> -->
        <!-- <div class="nutxoahet">
          <a href="" class="btn btn-outline-info xoahet" id="" style="cursor: pointer;">Xoá hết <i class="fa fa-times" aria-hidden="true"></i></a>
        </div> -->
		</table>
	</div>
	<!-- <audio src="<?php //echo base_url('public/audio') ?>/nhacnen.mp3" autoplay></audio> -->
</body>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#table_san_pham').DataTable();
  });
</script>
</html>
