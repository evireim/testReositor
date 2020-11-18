<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Песевдоклассы, псевдоэлементы, переходы</title>
  <style>
    .box {
      display: inline-block;
      width: 200px;
      height: 200px;
      background-color: rgb(50, 50, 250);
    }
    .two {
      margin-left: 15px;
      box-shadow: 10px -23px 49px 0px rgba(0,0,0,0.75);
    }
    .one:hover { /* Изменение при наведении*/
      background-color: red;
    }
    .two:active { /*Изменение при нажатии на элемент*/
      background-color: green;
      box-shadow: none;
    }
    .link:visited {
      color: red;
    }
    .input {
      border: 2px solid grey;
    }
    .input:focus { /*Для инпутов в фокусе*/
      border: 2px solid red;
      outline: none;
    }
    .pseudo-ul li {
      background-color: pink;
    }
    .pseudo-ul li:first-child { /*Первый ребёнок*/
      background-color: lime;
    }
    .pseudo-ul li:last-child { /*Последний ребёнок*/
      background-color: #8b1a91;
    }
    .pseudo-ul-2 li:nth-child(3) { /*n-ный - ребёнок*/
      background-color: tomato;
    }
    .pseudo-ul-3 li:nth-child(odd) { /*odd - нечётный элемент, even-чётный элемент*/
      background-color: Royalblue;
    }
    .pseudo-ul-4 li:nth-child(3n) { /*3n - каждый третий элемент*/
      background-color: Indigo;
    }
    .pseudo-ul-5 li:nth-child(3n+1) { /*3n+1 - каждый третий со смещением*/
      background-color: Chocolate;
    }
    /* Псевдоэлементы*/
    .taxi-logo {
      display: inline-block;
      width: 230px;
      height: calc(230px / 2); /*Высчитываем размер, так же можно склыдывать % и пиксели, делить не делимое*/
      background-color: #FCDB00;
      border-radius: 25px 25px 0 0;
      position: relative;
    }
    .taxi-logo::before {
      content: ""; /*Обязательное свойство псевдоэлементов*/
      background-color: #C7D0CC; 
      display: inline-block;
      height: calc(230px / 2);
      width: calc(230px / 2);
      position: absolute;
      border-radius: 0 0 0 25px;
      top: 100%;
    }    
    .taxi-logo::after {
      content: ""; /*Обязательное свойство псевдоэлементов*/
      background-color: #323029; 
      display: inline-block;
      height: calc(230px / 2);
      width: calc(230px / 2);
      position: absolute;
      border-radius: 0 0 25px 0;
      top: 100%;
      left: 50%;
      transition: left 0.5s;
    } 
    .taxi-logo::hover:after {
      left: 65%;
    }
    .three {
      /*transition: all 1s linear 3s;*/ /* 500ms 0.5s*/
      transition: width 2s ease-in-out, background-color 1s linear 2s;
    }
    .three:hover {
      width: 300px;
      background-color: orange;
    }
    .text-conteiner {
      width: 100px;
      overflow: hidden;
      border: 2px solid blue;
    }
    .text-running {
      white-space: nowrap;
      display: inline-block;
      position: relative;
      left: -200%;
      transition: left 3s;
    }
    .text-conteiner:hover .text-running {
      left: 200%;
    }
  </style>
</head>
<body>
  <div class="box one"></div>
  <div class="box two"></div>
  <div style="margin-top: 20px">
    <a href="https://yandex.ru">Ссылочка</a>
    <input class="input" type="text" placeholder="Введите имя">
  </div>
  <h2>:first-child :last-child</h2>
  <ul class="pseudo-ul">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
  </ul>
  <h3>:nth-child</h3>
  <ul class="pseudo-ul-2">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
    <li>Пять</li>
    <li>Шесть</li>
  </ul>
  <ul class="pseudo-ul-3">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
    <li>Пять</li>
    <li>Шесть</li>
  </ul>
  <ul class="pseudo-ul-4">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
    <li>Пять</li>
    <li>Шесть</li>
  </ul>
  <ul class="pseudo-ul-5">
    <li>Один</li>
    <li>Два</li>
    <li>Три</li>
    <li>Четыре</li>
    <li>Пять</li>
    <li>Шесть</li>
    <li>Семь</li>
  </ul>
  <h2>Псевдоэлементы</h2>
    <p>Текст до<i class="taxi-logo"></i>Текст после</p>
    <p>Текст под элементом</p>
    <h2 style="margin-top: 150px">Транзиции</h2>
    <div class="box three"></div>
    
  <div class="text-conteiner">Lorem ipsum dolor sit amet.</div>
</body>
</html>