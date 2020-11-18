<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Формы</title>
</head>
<body>
  <h1>Оставить заявку</h1>
    <form action="#" method="">
      <div>
        <input type="text" name="name" value="Иван">
      </div>
      <div>
        <input type="e-mail" name="e-mail" placeholder="Введите e-mail">
      </div>
      <div>
        <label>
          <input type="radio" name="question">
          <span>Статический</span>        
        </label>
        <label>
          <input type="radio" name="question">
          <span>Адаптивный</span>
        </label>
      </div>
      <div>
        <label>
          <input type="checkbox" name="help">
          <span>Поддержка</span>
        </label>  
        <label>  
          <input type="checkbox" name="dizign">
          <span>Дизайн</span>
        </label>
        <label>  
          <input type="checkbox" name="seo">
          <span>SEO</span>
        </label>
      </div>
      <p>Загрузить ваш макет</p>
      <div>
        <input type="file" name="project">
      </div>
      <div>
        <textarea name="comments" id="" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
      </div>
      <div>
        <input type="submit" value="Отправить">
        <input type="reset" value="Очистить">
      </div>
    </form>
</body>
</html>