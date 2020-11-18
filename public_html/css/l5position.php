<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Позиционирование</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>
  body {
    font-family: Arial;
  }
    .header-image {
      height: 450px;
      background-color: rgb(255, 100, 100); /* Цвет фона*/
      background-image: url(https://www.culture.ru/storage/images/099537254f524bf99933c7bf0c4ef29e/314988c198012a63b35b0eb3bbd64a8c.png); /*Устанавливаем изображение заднего фона*/
      background-repeat: no-repeat; /*Убирает повторы заднего фона*/
      background-size: cover; /* 300px  50%   cover(полностью покрыть элемент) */
      background-position: 50% 15%; /* Или в % - 50% 50%.  Позиционирование картинки*/
      position: relative;
    }
    .header-title {
      padding: 25px;
      background-color: rgba(255, 255, 255, 0.8);
      display: inline-block;
      right: 0;
      top: 50%;
      position: fixed; /*При значениях absolute и fixed элемент вытягивается из DOM-дерева (для остальных элементов его как будто нет)*/
      transform: translateY(-50%); /*Сдыигает позицию на половину от себя вверх*/ 
      box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);;
    }
    .header-title button {
      padding: 25px;
      background-color: white;
      border: 2px solid black;
      padding: 5px;
      float: right;
      border-radius: 20px 3px 0  23px;
    }
    .navigation {
      list-style: none;
      padding-left: 0px;
    }
    .navigation li {
      display: inline-block; /* inline block flex grid inline-block*/
      border-right: 2px solid blue;
      /*background-color: lightblue;*/
      
      /*padding: 10px 15px 20px 0;  Не более 4 значений - отступы внутри блока(с левого верхнего угла, по часовой стрелке-верх, право, низ, лево)*/
      padding: 10px;
    }
    .link {
      text-decoration: none;
      text-transform: uppercase;
      font-weight: bold; 
    }
    .about {
      padding: 0 15%;
    }
    .about-header, .employee-header {
      text-align: center;
      text-transform: uppercase;
      margin: 50px 0;
      border-top: 2px solid rgba(230, 230, 230, 0.9);
      border-bottom: 2px solid rgba(230, 230, 230, 0.9);
      padding: 10px 0;
    }
    .about-text {
      text-align: justify;
    }
    .employee-image {
      display: block;
      width: 200px;
      margin: 0 auto; /**/
      border: 2px solid lightgray;
      border-radius: 50%;
      box-sizing: border-box; 
    }
    .employee-name {
      text-align: center;
    }
  </style>
</head>
<body>
  <header> <!--Шапка-->
    <div class="header-image">
      <div class="header-title">
        <h1>Event агенство "Пух"</h1>
        <button>Заказать</button>
      </div>
    </div> 
    <nav> <!-- Тэг для навигационной панели-->
      <ul class="navigation"> 
        <li><a href="#" class="link">О нас</a></li>
        <li><a href="#" class="link">Наши проекты</a></li>
        <li><a href="#" class="link">Наши сотрудники</a></li>
        <li><a href="#" class="link">Контакты</a></li>
      </ul>
    </nav>
  </header>
  <main> <!--Основная часть-->
    <section class="about">
      <h2 class="about-header">О нас</h2>
        <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, dolores, consectetur delectus iste soluta repellat aliquam. Consequuntur, quae, dicta, eius nihil quaerat eum cumque nostrum adipisci doloremque sapiente in fugit magni nesciunt repellat saepe repudiandae aliquid eaque reprehenderit autem totam voluptate cupiditate nemo inventore quia maxime. Beatae vel architecto facere. Non, ea, nam nemo facilis ratione sed dolorum tempora quia nisi repellat earum et animi doloribus commodi laboriosam. Fugit, enim, repudiandae, commodi explicabo dolorum laborum quis nihil iure libero eos autem ea. Explicabo, placeat, earum, cupiditate aut eum quos accusantium cumque blanditiis sit laborum rem commodi odio molestias eius aliquid repudiandae quaerat veniam fugit officia perspiciatis nihil laboriosam minima labore consectetur nostrum possimus id error at maiores saepe incidunt hic voluptas quas ullam quisquam ad rerum reiciendis. Dolore, deleniti ratione soluta at unde sunt vero illo maxime quasi similique. Impedit facere qui quas quaerat dolore nam neque error nihil at.</p>
    </sectiot>
    <sectiot class="employee">
      <h2 class="employee-header">Наши сотрудники</h2>
      <img class="employee-image" src="https://davydov.in/wp-content/uploads/2019/10/%D0%B2%D0%B8%D0%BD%D0%BD%D0%B8-300x175.jpg" alt="">
      <h5 class="employee-name">Пух</h5>
    </sectiot>
  </main>
  <footer> <!--Подвал-->
    
  </footer>
</body>
</html>