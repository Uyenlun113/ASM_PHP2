<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet">

    <style>
    body {
      background-color: #fff;
      font-family: "Quicksand", sans-serif;
    }
    </style>
  </head>

  <body>
    <div class="div-center">

      <?php

// Kiểm tra nếu có dữ liệu
if (!empty($listQ)) {
    foreach ($listQ as $item) {
        // Hiển thị câu hỏi
        echo '<p>' . $item['questions_name'] . '</p>';

        // Kiểm tra nếu có đáp án
        if ($item['answer_id'] !== null) {
            // Hiển thị đáp án
            echo '<ul>';
            echo '<li>' . $item['option'] . '</li>';
            // Nếu cần hiển thị nhiều đáp án, bạn có thể sử dụng một vòng lặp ở đây
            echo '</ul>';
        } else {
            // Nếu không có đáp án, hiển thị thông báo
            echo '<p>Không có đáp án cho câu hỏi này.</p>';
        }
    }
} else {
    echo '<p>Không có dữ liệu.</p>';
}
?>
    </div>
  </body>

</html>