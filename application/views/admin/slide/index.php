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
    <style>
        .nutthem{
            display: block;
            margin-bottom: 20px;
        }
        .hienthi{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="them">
            <a href="<?php echo base_url() ?>admin/slide/add" class="nutthem btn btn-outline-info float-right">Thêm Slide</a>
        </div>
        <div class="noidung">
            <h1 class="danhsach" style="width: 400px;">Danh sách slide</h1>
            <span class="hienthi"><?php echo $this->session->flashdata('message'); ?></span>
        </div>
        <table class="table table-hover danhsachslide">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Tên nút</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $value): ?>
                    
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['tieude'] ?></td>
                    <td><?= $value['noidung'] ?></td>
                    <td><?= $value['ten_nut'] ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>admin/slide/edit/<?= $value['id'] ?>"><span class="btn btn-outline-success"><i class="fa fa-pencil"></i></span></a>
                        <a href="<?php echo base_url() ?>admin/slide/delete/<?= $value['id'] ?>"><span class="btn btn-outline-danger"><i class="fa fa-remove"></i></span></a>

                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>