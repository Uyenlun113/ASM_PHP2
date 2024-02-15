<!DOCTYPE html>
<html lang="en">

  <head>
    <title>ASM_PHP2</title>
    <meta name="app/Viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="app/View/admin/page/css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="app/View/admin/page/css/style.css" rel='stylesheet' type='text/css' />
    <link href="app/View/admin/page/css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link
      href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
      rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="app/View/admin/page/css/font.css" type="text/css" />
    <link href="app/View/admin/page/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="app/View/admin/page/css/morris.css" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="app/View/admin/page/css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="app/View/admin/page/js/jquery2.0.3.min.js"></script>
    <script src="app/View/admin/page/js/raphael-min.js"></script>
    <script src="app/View/admin/page/js/morris.js"></script>
  </head>

  <body>
    <section id="container">
      <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">
          <?php include "app/View/admin/page/layout/navbar.php";?>
          <div class="layout-page">
            <?php @include "app/View/admin/page/layout/sidebar.php";?>
            <section id="main-content">
              <section class="panel">
                <header class="panel-heading">
                  Thêm môn học
                </header>
                <div class="panel-body">
                  <div class="position-center">
                    <form action="add" method="POST" enctype="multipart/form-data">

                      <section class="wrapper">
                        <div class="form-w3layouts">
                          <!-- page start-->
                          <!-- page start-->
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label for="">Mã môn học</label>
                                <input type="text" class="form-control" name="code_subject" placeholder="Enter email">
                                <?php echo (!empty($_SESSION['error_mess']['code_subject']['required'])) ? '<span style="color:red" >' . $_SESSION['error_mess']['code_subject']['required'] . '</span>' : false ?>
                                <?php echo (!empty($_SESSION['error_mess']['code_subject']['length'])) ? '<span style="color:red" >' . $_SESSION['error_mess']['code_subject']['length'] . '</span>' : false ?>
                              </div>
                              <div class="form-group">
                                <label for="">Tên môn học</label>
                                <input type="text" class="form-control" name="subject_name" placeholder="">
                                <?php echo (!empty($_SESSION['error_mess']['subject_name']['required'])) ? '<span style="color:red" >' . $_SESSION['error_mess']['subject_name']['required'] . '</span>' : false ?>
                                <?php echo (!empty($_SESSION['error_mess']['subject_name']['length'])) ? '<span style="color:red" >' . $_SESSION['error_mess']['subject_name']['length'] . '</span>' : false ?>
                              </div>
                              <div class="form-group">
                                <label for="">Hình ảnh</label>
                                <input type="file" class="form-control" name="image" placeholder="">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mô tả</label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                              </div>
                              <button type="submit" name="add-subject" class="btn btn-info">Thêm mới</button>
                    </form>
                  </div>

                </div>
              </section>

          </div>
        </div>
      </div>
    </section>
    </section>
    </div>
    </div>
    </div>
    </section>

    <script src="app/View/admin/page/js/bootstrap.js"></script>
    <script src="app/View/admin/page/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="app/View/admin/page/js/scripts.js"></script>
    <script src="app/View/admin/page/js/jquery.slimscroll.js"></script>
    <script src="app/View/admin/page/js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="page/js/jquery.scrollTo.js"></script>
    <!-- morris JavaScript -->
    <!-- //calendar -->
  </body>


</html>