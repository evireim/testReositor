<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Квадраты</title>
  <style>
    .line-one div {
      display: inline-block;
      width: 100px;
      height: 100px;
      margin: 5px;
    }
    .line-one div:nth-child(odd) {
      background-color: black;
    }
    .line-one div:nth-child(even) {
      background-color: lightblue;
    }
    .line-one div:hover {
      background-color: orange;
    }
    .line-two div {
      display: inline-block;
      width: 100px;
      height: 100px;
      margin: 5px;
    }
    .line-two div:nth-child(even) {
      background-color: black;
    }
    .line-two div:nth-child(odd) {
      background-color: lightblue;
    }
    .line-two div:hover {
      background-color: orange;
    }
  </style>
</head>
<body>
  <div class="line-one">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>  
  <div style="margin-top: 10px"></div>  
  <div class="line-two">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</body>
</html>