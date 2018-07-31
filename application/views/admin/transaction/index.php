<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
  	<title>Trang danh sách giao dịch</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <script type="text/javascript" src="<?php echo base_url('public') ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public') ?>/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public') ?>/js/index.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('public/vendor')?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url('public/vendor')?>/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url('public') ?>/css/dangnhap.css">
    <!-- load file bootstrap-->
    <link href="<?php echo base_url('public/vendor')?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- load fontawesome cho trang-->
    <link href="<?php echo base_url('public/vendor')?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('public/vendor')?>/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?php echo base_url('public') ?>/css/sb-admin.css" rel="stylesheet">

  <style>
    .table-sanpham .tieude{
        color: gray;
        width: 400px;
        font-family: Time new romant;
    }
     .table-sanpham .soluong{
        color: black;
        float: right;
     }
      .bangsanpham .xoahet,.bangsanpham .masp{
        width: 50px;
        text-align: center;
      }
      .table-sanpham .thongbao{
        width: 160px;
        display: block;
        color: red;
        display: block;
        margin-bottom: 20px;
      }
      .noidunghienthi .view,.noidunghienthi .buy{
        display: block;
        color: #777;
        font-size: 13px;
        font-weight: 400;
      }
      .noidunghienthi .buy{
        float: right;
        margin-top: -19px;
        margin-right: 33px;
        border-left: 1px solid gray;
        padding-left: 3px;
      }
      .noidunghienthi .tensp{
        color: #222;
        font-size: 15px;
        font-weight: 500;
      }
  </style>
</head>
<body>
  <div class="container">
    <div class="table-sanpham">
      <div class="container">
        <h1 class="tieude">Danh sách giao dịch</h1>
        <span class="thongbao"><?php echo $this->session->flashdata('message'); ?></span>
        <span class="soluong">Số lượng: <?php echo count($list); ?></span>
        <form action="<?php echo base_url() ?>admin/transaction/index" method="get">
          Mã số: <input type="text" name="id" value="<?php echo $this->input->get('id') ?>" style="width: 100px; margin-right: 50px;margin-bottom: 50px;">
          <input type="submit" class="btn btn-outline-success" value="Lọc" style="cursor: pointer;"></input>
         </form>
        <div class="bangsanpham">
          <table class="table table-bordered">
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
        <div class="nutxoahet">
          <a href="" class="btn btn-outline-info xoahet" id="" style="cursor: pointer;">Xoá hết <i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
     </div> <!--end container-->
   </div> <!--end content-cart-->
 </div> <!-- end container -->
</body>
</html>