<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Своя страница</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <style>
    * { 
      margin: 0; 
      padding: 0; 
      font-family: 'Rubik', sans-serif;
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
    .navigation {
      background-color: #955f31;
      display: flex;
      justify-content: flex-end;
      padding: 10px;
      text-transform: uppercase;
      font-size: 20px;
    }
    .navigation li {
      margin: 0 10px;
    }
    .section1 {
      display: flex;
      background-color: #204d48;
    }
    .box-text1, .box-text2 {
      flex-basis: 200px;
      min-height: 300px;
      padding: 15px;
      color: white;
    }
    .box-text1 {
      text-align: left;
    }
    .box-image {
      flex-grow: 1;
      background-image: url("http://drivenews.com.ua/wp-content/uploads/2011/08/McLarenModels.jpg");
      background-position: 50% 100%; 
    }
    .box-text2 {
      text-align: right;
    }
    h2 {
      text-align: center;
      padding: 30px;
    }
    .section2 {
      display: flex;
      min-height: 250px;
      flex-flow: row wrap;
      justify-content: space-around;
      align-items: center;
      padding: 20px;
      background-color: #204d48;
    }
    .section2-image {
      width: 250px;
      height: 200px;
      box-sizing: border-box;
      margin: 0 auto;
    }
    .section2-image:nth-child(2) {
      transform: scale(-1, 1)
    }
    .section3 {
      display: flex;
      min-height: 350px;
      flex-flow: row wrap;
      justify-content: space-evenly;
      align-items: center;
    }
    .section3-image {
      width: 350px;
      border-radius: 50%;
      transition-duration: 1s;
    }
    .section3-image:nth-child(1) {
      transform: scale(-1, 1)
    }
    .section3-image:hover {
      width: 450px;
    }
    h5 {
      background-color: #3b555d;
      text-align: center;
      padding: 10px;  
    }
  </style>
</head>
<body>
  <nav>
    <ul class="navigation">
      <li><a href="#">Главная</a></li>
      <li><a href="#">О нас</a></li>
      <li><a href="#">Галлерея</a></li>
      <li><a href="#">Заказать</a></li>
    </ul>
  </nav>
  <div class="section1">
    <div class="box-text1">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, omnis cumque eius asperiores obcaecati non. Ipsum, voluptatum sunt magnam corrupti recusandae?</p>
    </div> 
    <div class="box-image"></div>
    <div class="box-text2">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, omnis cumque eius asperiores obcaecati non. Ipsum, voluptatum, earum, nihil qui dicta quia quae suscipit aspernatur enim accusamus ratione quo repellendus numquam velit id officiis eveniet quod architecto.</p>
      <button style="background-color: #3b555d; border-radius: 45%; padding: 3px; margin: 20px;">Заказать</button>
    </div>  
  </div>
  <h2>ГАЛЛЕРЕЯ</h2>
  <div class="section2">
    <img class="section2-image" src="http://sportbolid.ru/upload/content/57fb78b6e08ef.jpg" alt="">
    <img class="section2-image" src="https://www.scstyling.com/pub_images/original/H-R_Stallbart_Chassi_Ferrari_Testarossa_13293.jpg" alt="">
    <img class="section2-image" src="https://webrelax.com/uploads/posts/2017-05/lamborghini-countach-s-zolotym-salonom-ocenili-v-575-000-evro_1.jpeg" alt="">
    <img class="section2-image" src="https://avatars.mds.yandex.net/get-zen_doc/1904579/pub_5e1096479c944600ad960564_5e1098bbdf944400b1210a8c/scale_1200" alt="">
  </div>
  <div class="section3">
    <img class="section3-image" src="https://get.wallhere.com/photo/1600x1200-px-1990aei2001-Honda-na1-nsx-supercar-supercars-1893841.jpg" alt="">
    <img class="section3-image" src="https://cdn.fishki.net/upload/post/201603/20/1890052/resized_itempics17-089.jpg" alt="">
    <img class="section3-image" src="https://www.wallpaperup.com/uploads/wallpapers/2014/11/10/512371/9d9fcd3f5a5201c30b5c3ed226f8a3da-1400.jpg" alt="">
  </div>
</body>
  <footer>
    <h5>©FlexBox</h5>
  </footer>
</html>