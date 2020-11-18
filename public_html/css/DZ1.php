<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
    <style>
      h1 {
        color: blue;
      }
      h2 {
        color: red;
        text-align: left;
      }
      .h2center {
        text-align: center;
        color: yellow;
      }
      .h2right {
        text-align: right;
        color: green;
      }
      .we-blue {
        color: blue;
      }
      .we-red {
        color: red;
      }
      p {
        font-size: 25px;
      }
      .context ol {
        color: orange;
      }
      .darkr-q, .darkr-w, .darkr-e, .darkr-r {
        color: darkred;
      }
      .sosed p+p {
        color: red;
        font-size: 15px;
      }
      .sosed p {
        font-size: 15px;
      }
      .ds p {
        font-size: 15px;
      }
      .ds>p {
        color: blue;
        font-size: 15px;
      }
      .sa p {
        font-size: 15px;
      }
      p[title="red"] {
        color: red;
      }
      p[title="blue"] {
        color: blue;
      }
      p[title="orange"] {
        color: orange;
      }
      a[href^="https"] {
        color: steelblue;
      }
      a[href$="com"] {
        color: steelblue;
      }
      a[href*="ok"] {
        color: darkred;
      }
      a[href*="vk"] {
        color: red;
      }
      #about {
        color: green;
      }
      p {
        font-size: 15px;
      }
    </style>
</head>
<body>
  <h1>Я синий</h1>
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
  </body>
</html>