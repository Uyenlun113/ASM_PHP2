<!--sidebar start-->
<aside>
  <div id="sidebar" class="nav-collapse">
    <!-- sidebar menu start-->
    <div class="leftside-navigation">
      <ul class="sidebar-menu" id="nav-accordion">
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-book"></i>
            <span>Môn học</span>
          </a>
          <ul class="sub">
            <li><a href="<?php echo route('/add-subject'); ?>">Thêm môn học</a></li>
            <li><a href="<?php echo route('/list'); ?>">Danh sách môn học</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-book"></i>
            <span>Bài Quiz</span>
          </a>
          <ul class="sub">
            <li><a href="<?php echo route('/add-quiz'); ?>">Thêm bài quiz</a></li>
            <li><a href="<?php route('/list') ?>">Danh sách quizz</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->