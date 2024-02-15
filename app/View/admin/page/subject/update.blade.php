<!DOCTYPE html>
<html lang="en">

  <head>
    <title>ASM_PHP2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{BASE_URL.'app/View/admin/page/css/bootstrap.min.css'}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{BASE_URL.'app/View/admin/page/css/style.css'}}" rel='stylesheet' type='text/css' />
    <link href="{{BASE_URL.'app/View/admin/page/css/style-responsive.css'}}" rel="stylesheet" />
    <!-- font CSS -->
    <link
      href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
      rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{BASE_URL.'app/View/admin/page/css/font.css'}}" type="text/css" />
    <link href="{{BASE_URL.'app/View/admin/page/css/font-awesome.css'}}" rel="stylesheet">
    <link rel="stylesheet" href="{{BASE_URL.'app/View/admin/page/css/morris.css'}}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{BASE_URL.'app/View/admin/page/css/monthly.css'}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{BASE_URL.'app/View/admin/page/js/jquery2.0.3.min.js'}}"></script>
    <script src="{{BASE_URL.'app/View/admin/page/js/raphael-min.js'}}"></script>
    <script src="{{BASE_URL.'app/View/admin/page/js/morris.js'}}"></script>
  </head>

  <body>
    <section id="container">
      <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">
          <?php include "app/View/admin/page/layout/navbar.php"; ?>
          <div class="layout-page">
            <?php @include "app/View/admin/page/layout/sidebar.php"; ?>
            <section id="main-content">
              <section class="wrapper">
                <div class="form-w3layouts">
                  <!-- page start-->
                  <!-- page start-->
                  <div class="row">
                    <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading">
                          Cập nhật môn học
                        </header>
                        <div class="panel-body">
                          <div class="position-center">
                            <form action="<?=route('subject/'.$listView['id'].'/update')?>" method="POST"
                              enctype="multipart/form-data">
                              <input type="hidden" name="id"
                                value="<?php echo isset($listView['id']) ? $listView['id'] : ''; ?>">
                              <div class="form-group">
                                <label for="code_subject">Mã môn học</label>
                                <!-- Hidden input for the current value of code_subject -->
                                <input type="text" class="form-control" name="code_subject"
                                  value="<?php echo isset($listView['code_subject']) ? $listView['code_subject'] : ''; ?>"
                                  placeholder="Enter code">
                              </div>
                              <div class="form-group">
                                <label for="subject_name">Tên môn học</label>
                                <!-- Hidden input for the current value of subject_name -->
                                <input type="text" class="form-control" name="subject_name"
                                  value="<?php echo isset($listView['subject_name']) ? $listView['subject_name'] : ''; ?>"
                                  placeholder="Enter name">
                              </div>
                              <div class="form-group">
                                <label for="description">Mô tả</label>
                                <textarea class="form-control" name="description"
                                  rows="3"><?php echo isset($listView['description']) ? $listView['description'] : ''; ?></textarea>
                              </div>
                              <button type="submit" name="update" class="btn btn-info">Cập nhật</button>
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

    <script src="{{BASE_URL.'app/View/admin/page/js/bootstrap.js'}}"></script>
    <script src="{{BASE_URL.'app/View/admin/page/js/jquery.dcjqaccordion.2.7.js'}}"></script>
    <script src="{{BASE_URL.'app/View/admin/page/js/scripts.js'}}"></script>
    <script src="{{BASE_URL.'app/View/admin/page/js/jquery.slimscroll.js'}}"></script>
    <script src="{{BASE_URL.'app/View/admin/page/js/jquery.nicescroll.js'}}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="page/js/jquery.scrollTo.js"></script>
    <!-- morris JavaScript -->
    <!-- //calendar -->
  </body>



</html>