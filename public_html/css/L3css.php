<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>CSS, основы CSS</title>
  <link rel="stylesheet" href="style.css"><!--2. Подключаем файл CSS, самы низкий приоритет-->
  <style>/*1. С помощью тэга <style>, второй по приоритету*/
    body {
      background-color: Moccasin;
    }
    h1 { /*селектор тегов*/
      text-align: center;      
      color: firebrick;
    }
    #about { /*Селектор по ID(#). Не может быть 2х элементов с одинаковыми ID(в редких случаях)*/
      text-align: justify;
    }
    .about-small { /*Селектор по классу(.). В названияях классов часто используется Kebab-case. Элементов с одинаковыми классами может быть несколько. */
      font-size: 10px;
    }
    .h2center {
      text-align: center;
    }
    .red {
      color: red;
    }
    .yellow {
      color: yellow;
    }
    .lowercase { /*Более конткретные селектор имеют приоритет над общими */
      text-transform: lowercase !important;
    }
    p {
      text-transform: uppercase !important; /*Увеличиваем приоритетность стиля */
    }
    .dolorum {
      color: red;
    }
    .context p { /*Контекстный селектор  - найти в се р с классом context, вне зависимости о туровня вложенности. */
      color: blue;
    }
    .children>p { /*Дочерний селектор находит только детей, не трогает потомков.*/
      color: cyan;
    }
    .info-big, .info-small { /*Множественный селектор, позволяет объединять селектроры*/
      color: brown;
    }
    .siblings p+p { /*Соседний селектор - покрасит соседа р(который тоже является р) внутри элемента с классом siblings.*/
      color: orange;
    }
    p[title="Красная"] { /*Селектор атрибутов, красит только тер, у которых  атрибут title РАВЕН "Красная"*/
      color: red;
    }
    a[href^="https"] { /* ^ - Начинается с*/
      color: darkorange;
    }
    p[class$="-2"] { /*$ - заканчивается на*/
      color: green;
    }
    input[name*="password"] { /** - содержится*/
      color: pink;
    }
    </style>
</head>
<body>
  <h1>Портфолио</h1>
  <h2>Русов И.А.</h2>
  <h3 style="text-align: right;">Первая страница</h3><!--3. Использование атрибута style(имеет приоритет перед всеми остальными, редко используется)-->
  <h2 class="h2center">Обо мне</h2>
    <p id="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, ut, repellendus, obcaecati nam ab aliquam perferendis perspiciatis aperiam voluptate ea voluptates esse! Obcaecati, vitae consectetur reprehenderit porro facilis commodi dignissimos. Consectetur, ipsum, dolores aperiam perspiciatis ex possimus quis in pariatur dicta numquam ipsam excepturi? Aliquid, maxime, tempore maiores veritatis minima nihil </p>
    <p class="about-small aboutSmall about_small red lowercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, sit, fugit, est aut quibusdam provident harum labore eaque dolorum atque earum illo asperiores quaerat at blanditiis unde nemo soluta vel.</p>
    <p class="about-small yellow lowercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, sit, fugit, est aut quibusdam provident harum labore eaque <span class="dolorum">dolorum</span> atque earum illo asperiores quaerat at blanditiis unde nemo soluta vel.</p>
    <div class="selectors">
      <div class="context">
        <p>Материал1</p>
        <p>Материал2</p>
        <p>Материал3</p>
        <div class="context-inner">
          <p>Материал3.1</p>
          <p>Материал3.2</p>
          <p>Материал3.3</p>
        </div>
      </div>
    </div>
    <div class="children">
      <p>Материал1</p>
      <p>Материал2</p>
      <p>Материал3</p>
        <div class="children-inner">
          <p>Материал3.1</p>
          <p>Материал3.2</p>
          <p>Материал3.3</p>
        </div>
     </div>
     <div class="multi">
       <p class="info-big">Информация</p>
       <p class="info-small">Информация</p>
       <p class="info-big">Информация</p>
       <p class="info-small">Информация</p>
     </div>
     <div class="siblings">
       <p>Меня не красить</p>
       <p>Меня покрасить</p>
     </div>
     <div class="attr">
       <p title="Зелёная">Первая</p>
       <p title="Красная">Вторая</p>
       <p title="Синяя">Третья</p>
       <ul class="attr-links">
         <li><a href="http://evireim.beget.tech/css/L3css.php">Сайт</a></li>
         <li><a href="https://yandex.ru">Яндекс</a></li>
         <li><a href="https://twitter.com">Твиттер</a></li>
       </ul>
       <div class="ending">
         <p class="col-2">col-2</p>
         <p class="col-4">col-4</p>
         <p class="col-2">col-2</p>
       </div>
       <form action="">
         <input type="text" name="user-name" value="anonym">
         <input type="text" name="user-password" value="12345">
         <input type="text" name="password-check" value="12345">
       </form>
     </div>
</body>
</html>