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

                    <form action="" method="post" enctype="multipart/form-data">
                      <!-- Topic Name -->
                      <label for="name_quiz">Quiz:</label>
                      <input type="text" name="name_quiz" id="name_quiz">
                      <br>
                      <label for="id_subject">Môn học:</label>
                      <select class="select2 form-select" name="id_subject" data-placeholder="-- Chọn môn học --">
                        <option value="">-- Chọn môn học --</option>
                        <?php foreach($listSubject as $subject) :?>
                        <option value="<?= $subject['id'] ?>"><?= $subject['subject_name']?></option>
                        <?php endforeach;?>
                      </select>
                      <br>
                      <div class="input_fields_question">
                        <!-- Question Text -->
                        <div class="question_container" style="margin: 0 0 50px 200px ;">
                          <label for="questions_name">Câu hỏi:</label>
                          <textarea name="questions_name[]" class="questions_name" rows="4" cols="50"
                            required></textarea>
                          <br>
                          <label for="point">Điểm:</label> <!-- Thêm nhãn cho trường nhập điểm -->
                          <input type="number" name="point[]">
                          <div class="input_fields_answer">
                            <button class="add_field_answer">Thêm câu trả lời</button>
                            <div>
                              <label for="answer_checkbox">Dap an 1</label>
                              <input type="checkbox" name="iscorrect[1][]" />
                              <input type="text" name="option[1][]" />
                            </div>
                            <div>
                              <label for="answer_checkbox">Dap an 2</label>
                              <input type="checkbox" name="iscorrect[1][]" />
                              <input type="text" name="option[1][]" />
                            </div>
                          </div>


                        </div>


                      </div>
                      <div><button class="add_field_question btn btn-success">Thêm câu hỏi</button></div>

                      <!-- Submit Button -->
                      <input type="submit" value="Add Question" name="add_quiz" class="btn btn-info">
                    </form>

                    <script>
                    $(document).ready(function() {
                      var max_fields = 10; // maximum input boxes allowed
                      var wrapper_question = $(".input_fields_question"); // Fields wrapper for questions
                      var add_button_question = $(".add_field_question"); // Add button ID for questions

                      var x = 1; // initial text box count for questions
                      $(add_button_question).click(function(e) { // on add input button click for questions
                        e.preventDefault();
                        if (x < max_fields) {
                          x++;
                          $(wrapper_question).append(`
                <div class="question_container" style="margin: 0 0 50px 200px ;">
                    <label for="questions_name">Câu hỏi:</label>
                    <textarea name="questions_name[]" class="questions_name" rows="4" cols="50" required></textarea><br><label for="">Điểm</label>
                     <input type="number" name="point[]" >
                    <br>
                    <div class="input_fields_answer">
                        <button class="add_field_answer">Thêm câu trả lời</button>
                        <div>
                            <label for="answer_checkbox">Dap an 1</label>
                            <input type="checkbox" name="iscorrect[${x}][]" />
                            <input type="text" name="option[${x}][]" />
                        </div>
                        <div>
                            <label for="answer_checkbox">Dap an 2</label>
                            <input type="checkbox" name="iscorrect[${x}][]" />
                            <input type="text" name="option[${x}][]" />
                        </div>
                    </div>
                    <a href="#" class="remove_field_question">Xóa câu hỏi</a>
                </div>
            `);
                        }
                      });

                      $(wrapper_question).on("click", ".remove_field_question", function(
                        e) { // user click on remove text for questions
                        e.preventDefault();
                        $(this).parent('.question_container').remove();
                        x--;
                      });

                      $(wrapper_question).on("click", ".remove_field_answer", function(
                        e) { // user click on remove text for answers
                        e.preventDefault();
                        $(this).parent('div').remove();
                      });

                      $(wrapper_question).on("click", ".add_field_answer", function(
                        e) { // on add input button click for answers
                        e.preventDefault();
                        var answer_wrapper = $(this).closest('.question_container').find(
                          '.input_fields_answer');
                        var answer_x = $(answer_wrapper).find('div').length + 1;

                        if (answer_x < max_fields) {
                          answer_x++;
                          $(answer_wrapper).append(`
                <div>
                    <label for="answer_checkbox">Dap an ${answer_x}</label>
                    <input type="checkbox" name="iscorrect[${x}][]" />
                    <input type="text" name="option[${x}][]" />
                    <a href="#" class="remove_field_answer">Xóa dap an</a>
                </div>
            `);
                        }
                      });
                    });
                    </script>
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