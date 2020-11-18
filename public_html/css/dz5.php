<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Светофор</title>
  <style>
    .box {
      display: inline-block;
      background-color: rgba(217, 208, 208, 1);
      border: 5px solid rgba(168, 165, 165, 1);
      border-radius: 15px;
      padding: 25px;
      margin: 15px;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }
    .red, .yellow, .green {
      height: 150px;
      width: 150px; 
      border: 3px solid black;
      border-radius: 50%;
      box-shadow: inset 0px 0px 17px 6px rgba(0,0,0,0.59);
    }
    .yellow, .green {
      margin-top: 15px;
    }
    .red {
      background-color: red;
    }
    .yellow {
      background-color: yellow;
    }
    .green {
      background-color: green;
    }
  </style>
</head>
<body>
  <header>
    <div class="box">
      <div class="red"></div>
      <div class="yellow"></div>
      <div class="green"></div>
    </div>
  </header>
</body>
</html>