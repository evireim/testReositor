<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    </style>
  </head>
  <body>
    <h1>Hello, world!</h1>  
    <h2>Я красный и слева</h2>
          <h2 class="h2center">Я жёлтый и по центру</h2>
          <h2 class="h2right">Я зелёный и справа</h2>
            <ul>
              <li class="we-blue">Мы синие элементы</li>
              <li class="we-red">А мы красные</li>
              <li class="we-blue">Мы синие элементы</li>
              <li class="we-red">А мы красные</li>
            </ul>
            <p>Контекстный селектор</p>
              <div class="context">
                <ol class="only-1">
                  <li>Мы должны быть  оранжевые</li>
                  <li>Но у нас нет ни класса ни id</li>
                  <li>Найти нас придётся по другому</li>
                  <li>Понадобится контекстный селектор</li>
                  <li>И не покрасьте второй <ol></li>
                </ol>
              </div>  
            <p>Множественный селектор</p> 
            <div class="multi">
              <ol>
                <li class="darkr-q">Мы все хотим быть тёмно-красными</li>
                <li class="darkr-w">Но у нас разные классы</li>
                <li class="darkr-e">Не находя родительский ol сделайте нас такими</li>
                <li class="darkr-r">Воспоьзуйтесь множественным селектором</li>
              </ol>
            </div>  
            <p>Соседний селектор</p>
              <div class="sosed">
                <p>Найдите нас внутри родительского div(используя контекстный селектор), и, используя соседный селектор,</p>
                <p>Покрасьте только меня в красный(объедените 2 селектора)</p>
              </div>
            <p>Дочерний селектор</p>
              <div class="ds">
                <p>Нас надо покрасить в синий</p>
                <p>Но внутри есть еще div и в нем тоже есть p</p>
                  <div>
                    <p>Нас красить не надо</p>
                    <p>Нас красить не надо</p>
                    <p>Нас красить не надо</p>
                  </div>
                <p>А меня снова надо, воспользуйтесь дочерним селектором</p>
              </div>
            <p>Селектор атрибутов</p>  
              <div class="sa">
                <p>Какой-то текст</p>
                <p title="red">Еще немного какого-то текста, но красного</p>
                <p title="blue">Нас надо покрасить в синий</p>
                <p>Но внутри есть еще div и в нем тоже есть p</p>
                  <div>
                    <p>Нас красить не надо</p>
                    <p>Нас красить не надо</p>
                    <p>Нас красить не надо</p>
                  </div>
                <p title="orange">А меня снова надо, воспользуйтесь дочерним селектором</p>
              </div>
              <div>
                <a href="https://yandex.ru/">Яндекс</a>
                <a href="https://www.facebook.com/">Фейсбук</a>
                <a href="https://ok.ru/">Однокласники</a>
                <a href="https://vk.com/">Вконтакте</a>
              </div>
              <p></p>
              <div>
                <form action="">
                  <input text="text" name="user-name" value="Василий">
                  <input text="text" name="user-sname" value="Петров">
                  <input text="text" name="user-password" value="34p$1dd">
                </form>   
                <p id="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, architecto, dolor a fugit odit ea quidem. Illo, consectetur voluptatem error soluta laboriosam laudantium autem incidunt eaque illum quibusdam. Qui, dicta placeat vero repellendus.</p>  
              </div>
      <script src="dom.js"></script>
        
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