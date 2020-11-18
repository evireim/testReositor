<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Батарейка</title>
  <style>
    .battery {
      display: inline-block;
      width: 300px;
      height: 100px;
      position: absolute;
      margin: 100px;
      border: 4px solid black;
    } 
    .battery::before {
      content: "";
      display: inline-block;
      width: 100px;
      height: 100px;
      background-color: red;
      position: relative;
      transition: width 1s linear, linear 1s;
      animation-direction: normal;
    }
    .battery:hover:before {
      width: 300px;
      background-color: green;
    }
    .battery::after {
      content: "";
      display: inline-block;
      width: 10px;
      height: 50px;
      background-color: black;
      position: absolute;
      left: 300px;
      top: 25px;
    }
  </style>
</head>
<body>
  <div class="battery"></div>
</body>
</html>