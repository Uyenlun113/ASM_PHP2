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
      background-color: #161616;
      font-family: "Quicksand", sans-serif;
    }

    .div-center {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .input-quizz {
      width: 500px;
      height: 55px;
      border-radius: 12px;
      padding: 0 20px;
      outline: none;
      font-size: 18px;
      font-weight: 700;
      color: #888;
    }

    .button-quizz {
      color: #fafafa;
      background-color: #00c985;
      border: none;
      border-radius: 8px;
      padding: 0px 30px;
      height: 53px;
      font-size: 18px;
      font-weight: 700;
      transition: all .2s;
      box-shadow: 0 4px #00a06a;
    }
    </style>
  </head>

  <body>
    <div class="div-center">
      <input type="text" placeholder="Nhập mã quizz" class="input-quizz">
      <button class="button-quizz">Bắt đầu</button>
    </div>
  </body>

</html>