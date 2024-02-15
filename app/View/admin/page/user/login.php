<!DOCTYPE html>

<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
  addEventListener("load", function() {
    setTimeout(hideURLbar, 0);
  }, false);

  function hideURLbar() {
    window.scrollTo(0, 1);
  }
  </script>
  <!-- bootstrap-css -->
  <link rel="stylesheet" href="view/admin/page/css/bootstrap.min.css">
  <!-- //bootstrap-css -->
  <!-- Custom CSS -->
  <link href="view/admin/page/css/style.css" rel='stylesheet' type='text/css' />
  <link href="view/admin/page/css/style-responsive.css" rel="stylesheet" />
  <!-- font CSS -->
  <link
    href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
    rel='stylesheet' type='text/css'>
  <!-- font-awesome icons -->
  <link rel="stylesheet" href="view/admin/page/css/font.css" type="text/css" />
  <link href="view/admin/page/css/font-awesome.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <script src="view/admin/page/js/jquery2.0.3.min.js"></script>
</head>

<body>
  <div class="log-w3">
    <div class="w3layouts-main">
      <h2>Đăng nhập</h2>
      <form action="index.php?url=login-admin" method="post">
        <input type="text" class="ggg" name="user_name" placeholder="user_name" required="">
        <input type="password" class="ggg" name="password" placeholder="password" required="">
        <span><input type="checkbox" />Remember Me</span>
        <h6><a href="#">Quên mật khẩu?</a></h6>
        <div class="clearfix"></div>
        <input type="submit" value="Đăng nhập" name="login-admin">
      </form>
      <p>Bạn chưa có tài khoản ?<a href="index.php?url=dangki">Đăng kí ngay</a></p>
    </div>
  </div>
  <script src="view/admin/page/js/bootstrap.js"></script>
  <script src="view/admin/page/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="view/admin/page/js/scripts.js"></script>
  <script src="view/admin/page/js/jquery.slimscroll.js"></script>
  <script src="view/admin/page/js/jquery.nicescroll.js"></script>
  <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
  <script src="view/admin/page/js/jquery.scrollTo.js"></script>
</body>

</html>