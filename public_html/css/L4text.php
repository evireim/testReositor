<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Работа с текстом. Шрифты. Спецсимволы</title>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Roboto&display=swap'); /* Добавляем шрифт из google fonts*/
  /*
  font-family: 'Lobster', cursive;
  font-family: 'Roboto', sans-serif;
  */
  
    body {
      font-family: Calibri; /* Calibri Helvetica Arial*/
      font-size: 10pt;
    }
    .title {
      text-align: center;/*right left justify*/
      text-transform: uppercase; /*Lowercase - рижний регистр*/
      text-decoration: underline; /*Overline Line-through - подчеркивание*/
      text-shadow: 31px -11px 6px rgba(226, 181, 150, 1);
      font-family: Tahoma;
      font-size: 14pt;
    }
    .text-one {
      text-align: justify; 
    }
    .bold, .italic {
      font-size: 25pt;
    }
    .bold {
      font-weight: bold; /*жирность*/
      text-shadow: 28px -11px 6px rgba(226, 181, 150, 1);
    }
    .italic {
      font-style: italic; /*наклон*/
    }
    .red, .green, .yellow {
      font-size: 30pt;
      font-weight: bold;
      font-family: 'Lobster', cursive;
    }
    .red{
      color: rgb(255, 50, 50); /*rgb(0-255, 0-255, 0-255) red green blue*/
    }
    .yellow {
      color: #FFFF00; /*Hex - код*/
    }
    .green {
      color: hsl(107, 95%, 70%); /*Heu Saturations Lightness*/
    }
    .title-transparparent {
      color: rgba(50, 50, 250, 0.5) /*a - альфа канал, прозрачность*/
      text-shadow: 28px -11px 6px rgba(226, 181, 150, 1);
    }
    .emoji {
      font-size: 40pt;
    }
  </style>
</head>
<body>
  <h1 class="title">Работа с текстом</h1>
  <p class="text-one">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, itaque, voluptatem sapiente amet nesciunt omnis aliquid voluptatum non sint inventore illo magnam. Porro natus neque quia! Ratione, iusto ut est dicta amet molestias rem. Ipsum, incidunt quos nihil corporis laudantium sunt qui iste illum eligendi assumenda necessitatibus placeat praesentium ipsam suscipit soluta nobis quasi recusandae facere amet accusantium fugiat explicabo accusamus commodi. Id, animi doloribus quibusdam sint optio fugiat repudiandae laborum consequatur ullam repellat. Soluta vero labore placeat eum eveniet totam fuga sed amet <span class="bold">bold</span> illo. Debitis, facilis, harum, quasi, eos asperiores eum temporibus sint at esse ducimus delectus nulla consectetur atque placeat beatae neque aspernatur blanditiis sapiente non quos necessitatibus commodi assumenda adipisci accusamus est animi fuga porro? Soluta, modi, fugiat, minus possimus dolor assumenda <span class="italic">italic</span>eius sunt at impedit veritatis exercitationem explicabo. Deleniti, molestias, molestiae, nobis ad nesciunt necessitatibus provident recusandae architecto et in exercitationem voluptatibus facere fugiat! Hic, amet reprehenderit quos corporis quasi tempora quia earum soluta dolorem iusto voluptate aspernatur aliquam saepe commodi cupiditate aut iste. Porro, fugiat, inventore, velit, distinctio doloribus laborum vel veritatis sit eum eius sequi pariatur eveniet dignissimos. Aperiam, maxime, qui, quis, officia aut dolorem quaerat atque voluptate possimus asperiores ab molestias nemo cupiditate laudantium laborum consequatur repellat nam quae nulla esse rerum in voluptatibus voluptas eaque placeat eveniet sint mollitia nesciunt vero tempore tempora ducimus odio nobis eligendi dolorum velit quo. Quidem, eius tenetur veritatis illo ducimus nemo! Provident, consequatur, autem nemo ex suscipit dolore consectetur dicta accusantium perspiciatis cupiditate ipsam necessitatibus eveniet tempora repellat quisquam neque iure vero! Tempora, unde, libero ducimus soluta sequi vitae itaque! Voluptates, quidem tempora quam quis iure ullam possimus ducimus incidunt numquam beatae enim similique est et molestiae reprehenderit neque perspiciatis illum reiciendis porro ad vero illo aut praesentium eos eveniet necessitatibus voluptate autem at quia.</p>
  <h2 class="title">Цвета</h2>
  <p>
    <span class="red">Красный</span>
    <span class="yellow">Жёлтый</span>
    <span class="green">Зелёный</span>
  </p>  
  <h3 class="title-transparparent">Прозрачный текст</h3>
  <h2 class="title">Спец символы и эмодзи</h2>
  <p>&copy;	&#8381; &times;</p>
  <p class="emoji">&#128105;&#8205;&#127891; &#128104;&#8205;&#127891;</p>
  <h2>Иконки</h2>
  <p>
    <i class="fa fa-meetup" aria-hidden="true"></i>
    <i class="fa fa-bug" aria-hidden="true"></i>
    <i class="fa fa-bomb" aria-hidden="true" style="font-size: 100px; color: red"></i>
  </p>
  <!--1. Rfr <img>, 2. Как <svg>, 3. Библиотеки иконок-->
  <script src="https://use.fontawesome.com/b5008f7a3e.js"></script>
</body>
</html>