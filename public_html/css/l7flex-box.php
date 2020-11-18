<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Флекс-бокс</title>
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <style>
    * { /* *-каждый элемент на стрнице */
      margin: 0; /*Нормализация*/
      padding: 0; /*Нормализация*/
    }
    li {
      list-style-type: none;
    }
    a {
      text-decoration: none;
      color: white;
    }
    a:visited {
      color: white;
    }
    .flex-container {
      display: flex; /*Говорим родительскому элементу, что он flex контейнер*/
      flex-direction: row; /*row в строку(по умолчанию), column в колонку*/
      flex-wrap: wrap; /*Включаем перенос строк*/
      justify-content: space-evenly;
    }
    .box, .box2, .box3 {
      background-color: #4285f4;
      height: 250px;
      border: 5px solid blue;
      box-sizing: border-box;
    }
    .box {
      width: 500px;
    }
    .navigation {
      background-color: #4285f4;
      display: flex;
      justify-content: center; /*Горизонтальное распределение*/
      padding: 10px;
    }
    .navigation li {
      margin: 0 10px;
    }
    .flex-conteiner2 {
      display: flex;
      border: 4px solid red;
      height: 500px;
      align-items: center;
      justify-content: space-between;
    }
    .box2 {
      width: 250px;
    }
    .box2:nth-child(2) {
      align-self: flex-start;
    }
    .box2:nth-child(3) {
      align-self: flex-end;
    }
    .flex-conteiner3 {
      display: flex;
      border: 4px solid red;
      height: 600px;
      align-items: center;
      justify-content: space-between;
      flex-direction: column; 
      /*Если flex-direction: column; св-ва align-items и justify-content по своему значению меняются местами*/
    } 
    .box3 {
      width: 100px;
      height: 100px;
    }
    .flex-conteiner4 {
      display: flex;
    }
    .main, .aside {
      height: 250px;
      color: white;
      padding: 25px;
    }
    .main {
      background-color: #FBBC05;
      width: 300px;
      /*flex-grow: 1;*/ /*Разрешаем элементу заполнять всё свободное пространство*/
      flex-grow: 2;
      order: 2; /*Порядок элементов*/
    }
    .aside {
      background-color: #34A853;
      flex-basis: 250px;        /*Вместо - width: 250px; - лучше исп flex-basis*/
      /*flex-grow: 1;*/
      order: 1; /*aside встанет раньше .main */
    }
  </style>
</head>
<body>
  <div class="flex-container">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>  
  <nav>
    <ul class="navigation">
      <li><a href="#">Главная</a></li>
      <li><a href="#">О компании</a></li>
      <li><a href="#">Прайс-лист</a></li>
      <li><a href="#">Контакты</a></li>
    </ul>
  </nav>
  <div class="flex-conteiner2">
    <div class="box2"></div>
    <div class="box2"></div>
    <div class="box2"></div>
    <div class="box2"></div>
  </div>
  <div class="flex-conteiner3">
    <div class="box3"></div>
    <div class="box3"></div>
    <div class="box3"></div>
    <div class="box3"></div>
  </div>
  <div class="flex-conteiner4">
    <div class="main">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quae, sequi, impedit autem voluptate sit quia doloribus vitae animi molestias saepe ratione reiciendis perspiciatis nam quam quibusdam soluta architecto illum dolor omnis earum est placeat molestiae eligendi accusamus aspernatur aut sunt id tempora praesentium. Perspiciatis, similique voluptatibus accusamus provident repellat!</div>
    <div class="aside">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, provident, neque, qui voluptatibus laborum iste sint voluptatem odit nostrum esse iure accusamus consequuntur accusantium est quod non commodi error voluptate ipsam tenetur eveniet. Dolorem, corrupti, quasi, ab consequatur sit iure culpa nesciunt in cupiditate atque quia tenetur et impedit incidunt!</div>
  </div>
</body>
</html>