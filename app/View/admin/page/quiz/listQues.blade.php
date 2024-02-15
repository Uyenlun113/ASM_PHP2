<!DOCTYPE html>
<html lang="en">

  <head>
    <title>ASM_PHP2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <?php include "app/View/admin/page/layout/navbar.php"; ?>
          <div class="layout-page">
            <?php @include "app/View/admin/page/layout/sidebar.php"; ?>
            <section id="main-content">
              <section class="wrapper">
                <div class="table-agile-info">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      Danh sách câu hỏi <?php echo $list['name_quiz']; ?>
                    </div>
                    <div>
                      <table class="table" ui-jq="footable" ui-options='{
                    "paging": {
                        "enabled": true
                    },
                    "filtering": {
                        "enabled": true
                    },
                    "sorting": {
                        "enabled": true
                    }}'>
                        <thead>
                          <tr>
                            <th data-breakpoints="xs">ID</th>
                            <th>Tên Quizz</th>
                            <th>Tên môn học</th>
                            <th>Danh sách câu hỏi</th>
                            <th data-breakpoints="xs sm md" data-title="DOB">Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($list as $index=>$item): ?>

                          <tr>
                            <td><?php echo $index+1; ?></td>
                            <td><?php echo $item['name_quiz']; ?></td>
                            <td><?php echo $item['subject_name']; ?></td>
                            <td><a href="">Xem chi tiết</a></td>
                            <td>
                              <!-- Edit button -->
                              <a href="{{ route('subject/'.$item['id'].'/update') }}"
                                class="btn btn-sm btn-warning">Sửa</a>

                              <!-- Delete button -->
                              <a href="delete/{{$item['id']}}" class="btn btn-sm btn-danger"
                                onclick="return confirm('Bạn cóa muốn xóa không?')">Xóa</a>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
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