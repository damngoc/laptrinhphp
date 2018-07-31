<!DOCTYPE html>
<html lang="en">
<head>
     <title>Trang đăng nhập </title>
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
<div id="form_wrapper" class="form_wrapper" style="width: 350px; height: 384px;">
     <form class="login active" action="<?php echo base_url() ?>admin/login/index" method="POST">
        <h3><cufon class="cufon cufon-canvas" alt="Login" style="width: 73px; height: 25px;"><canvas width="84" height="28" style="width: 84px; height: 28px; top: -2px; left: 0px;"></canvas><cufontext>Đăng nhập</cufontext></cufon></h3>
        <div>
            <label>Tài khoản:</label>
            <input type="text" name="username">
            <span class="error">Tài khoản không tồn tại</span>
        </div>
        <div>
            <label>Mật khẩu: <a href="forgot_password.html" rel="forgot_password" class="forgot linkform">Quên mật khẩu?</a></label>
            <input type="password" name="password">
            <span class="error">Mật khẩu không đúng</span>
        </div>
        <div class="bottom">
            <!-- <div class="remember"><input type="checkbox"><span>Chọn để duy trì đăng nhập</span></div> -->
            <div style="color: orange; text-align: center;"><!-- <?php //echo form_error('login'); ?> --></div>
            <input type="submit" value="Đăng nhập">
            <a href="register.html" rel="register" class="linkform">Bạn chưa có tài khoản? Đăng ký tại đây</a>
            <div class="clear"></div>
        </div>
    </form>
 </div> <!-- end div form -->
</body>
</html>