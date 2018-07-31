<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
  	<title>Trang danh sách sản phẩm</title>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">

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
      .bangsanpham th.ngaytao{
        width: 120px;
      }
      .noidunghienthi .anhsp{
        width: 170px;
        height: 150px;
        background: #80808047;
        border: 1px solid white;
      }
      .noidunghienthi .anhsp img{
        width: 150px;
        height: 120px;
        background-size: cover;
        border: 1px solid white;
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
        <h1 class="tieude">Danh sách sản phẩm</h1>
        <span class="thongbao"><?php echo $this->session->flashdata('message'); ?></span>
        <span class="soluong">Số lượng: <?php echo count($list); ?></span>
        <form action="<?php echo base_url() ?>admin/product/locSanPham" method="get">
          Mã số: <input type="text" name="id" value="<?php echo $this->input->get('id') ?>" style="width: 100px; margin-right: 50px;margin-bottom: 50px;">
          Tên: <input type="text" name="name" style="margin-right: 50px;">
          Thể loại: <input type="text" name="theloai">
          <input type="submit" class="btn btn-outline-success" value="Lọc" style="cursor: pointer;"></input>
          <input type="reset" onclick="window.location.href='<?php echo base_url() ?>admin/product/index ?>'" class="btn btn-outline-secondary" value="Reset" style="cursor: pointer;"></input>
         </form>
        <div class="bangsanpham">
          <table class="table table-bordered dataTable" id="table_san_pham">
            <thead>
              <tr>
                <th scope="col" class="text-xs-center xoahet"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i></th>
                <th scope="col" class="text-xs-center masp">Mã SP</th>
                <th scope="col" class="text-xs-center anhsp">Ảnh sản phẩm</th>
                <th scope="col" class="text-xs-center tensp">Tên sản phẩm</th>
                <th scope="col" class="text-xs-center gia">Giá</th>
                <th scope="col" class="text-xs-center ngaytao">Ngày tạo</th>
                <th scope="col" class="text-xs-center hanhdong">Hành động</th>
              </tr>
            </thead>
            <tbody class="noidunghienthi">
              <?php foreach ($list as $value): ?>

              <tr>
                <td scope="row" class=""><input type="checkbox" /> </td>
                <td scope="row" class="product_id"><?= $value['id']; ?></td>
                <td scope="row" class="anhsp"><img src="<?= $value['image_link']; ?>" alt=""></td>
                <td scope="row" class="tensp"><?= $value['name']; ?>
                    <span class="view">Đã xem: <?= $value['view'] ?></span>
                    <span class="buy">Đã mua: <?= $value['count_buy'] ?></span>
                </td>
                <td scope="row" class="gia">
                  <!-- kiem tra co giam gia k -->
                <?php if($value['discount'] > 0): ?>
                  <?php $price_new = $value['price'] - $value['discount']; ?>
                  <span style="color: red;"><?php echo number_format($price_new); ?></span>
                  <span style="text-decoration: line-through;display:inline-block;"><?=number_format($value['price']); ?>đ</span>
                <?php else: ?>
                  <span><?= number_format($value['price']); ?>đ</span>
              <?php endif; ?>
                </td>
                <td scope="row" class="ngaytao"><?= $value['created']; ?></td>
                <td scope="row" class="">
                  <a href="<?php echo base_url() ?>admin/product/sua/<?= $value['id']; ?>" class="btn btn-outline-secondary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="<?php echo base_url() ?>admin/product/delete/<?= $value['id']; ?>" class="btn btn-outline-danger nutxoapd"><i class="fa fa-times" aria-hidden="true"></i></a>
                </td>
              </tr>

              <?php endforeach ?>
            </tbody>
          </table>

        </div> <!--end bangsanpham-->
       <!-- </form> -->
        <div class="nutxoahet">
          <a href="" class="btn btn-outline-info xoahet" id="" style="cursor: pointer;">Xuất file <i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
     </div> <!--end container-->
   </div> <!--end content-cart-->
 </div> <!-- end container -->
</body>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#table_san_pham').DataTable();
  });
</script>

</html>