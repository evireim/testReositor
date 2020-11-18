<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Работа с элементами</title>
      <style>
        .text {
          text-transform: uppercase;
        }
        img {
          height: 200px;
        }
        
      </style>
  </head>
  <body class="p-3">
    <h1>Hello, world!</h1>
    
      <div class="styles">
        <h2>Изменение стилей</h2>
        <p class="text">Lorem ipsum dolor sit amet.</p>
      </div>
      
      <div class="article">
        <h2>Изменение внутреннего содержимого</h2>
        <p class="article-text">Lorem ipsum dolor sit amet.</p>
        <div class="comments"></div>
      </div>
      
      <div class="calculator">
        <h2>Изменение атрибутов</h2>
        <h4>Атрибуты как сво-ва. На примере калькулятора</h4>
        <input type="text" class="first-argument" value="0">
        <span>+</span>
        <input type="text" class="second-argument" value="0">
        <span>=</span>
        <input type="text" class="result-input" disabled>
      </div>
      <div class="money">
        <h4>Методы работы с атрибутами</h4>
        <img src="https://media2.24aul.ru/imgs/400x800/5b35eaf8406b170001ce8fe2/100-rubley-seriya-uo-zameschenka-serii-u-1-11732188.jpg" alt="" cost="100">
        <span>+</span>
        <img src="https://i.ytimg.com/vi/of-OQU75lf8/hqdefault.jpg" alt="" cost="500">
        <span>=</span>
        <input type="text" class="result-money-input" disabled>
      </div>
      
      <div class="classes">
        <h2>Работа с классами</h2>
        <p class="text-justify" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, consequuntur, facere, amet libero quisquam reiciendis odio ratione suscipit repellendus nobis dicta eveniet incidunt deleniti. Esse, inventore quas totam amet aliquam debitis consequatur ullam ab aperiam! Dolores qui voluptatum quisquam delectus optio sunt sapiente animi necessitatibus soluta quas! Id, velit, eaque.</p>
      </div>
      
      
      <script src="elements.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>