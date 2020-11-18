<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Таблицы и формы</title>
</head>
<body>
  <table border="1">
    <thead><!--Шапка-->
      <tr><!--Table row - строка таблицы-->
        <th>№ п\п</th><!--Table header - ячейка заголовков-->
        <th>Тип проэкта</th>
        <th>Количество</th>
      </tr>
    </thead>
    <tbody><!--Тело таблицы-->
      <tr>
        <td width="75" height="75" valign="top">1</td><!--Table data - ячейка таблицы-->
        <td>Сайт (статичный)</td>
        <td>10</td>
      </tr>
      <tr>
        <td>2</td><!--Table data - ячейка таблицы-->
        <td>Сайт (адаптивный)</td>
        <td>15</td>
      </tr>
      <tr>
        <td>3</td><!--Table data - ячейка таблицы-->
        <td>Веб приложение</td>
        <td>2</td>
      </tr>
    </tbody>
  </table>
  <!--Таблица без tbody и thead-->
  <table border="1">
    <tr>
      <th>Заголовок 1</th>
      <th>Заголовок 2</th>
      <th>Заголовок 3</th>
    </tr>
    <tr>
      <td>Значение 1</td>
      <td>Значение 1.2</td>
      <td>Значение 2.3</td>
    </tr>
    <tr>
      <td>Значение 2</td>
      <td>Значение 2.1</td>
      <td>Значение 2.2</td>
    </tr>
    <tr>
      <td>Значение 3</td>
      <td>Значение 3.1</td>
      <td>Значение 3.2</td>
    </tr>
  </table>
  <table>
    <tr>
      <th>Заголовок 1</th>
      <th>Заголовок 2</th>
      <th>Заголовок 3</th>
    </tr>
  </table>
   <table border="1">
    <tr>
      <th colspan="3">Заголовок 1</th>
    </tr>
    <tr>
      <td>Значение 1</td>
      <td>Значение 1.2</td>
      <td>Значение 2.3</td>
    </tr>
    <tr>
      <td>Значение 2</td>
      <td colspan="2">Значение 2.2</td>
    </tr>
    <tr>
      <td>Значение 3</td>
      <td>Значение 3.1</td>
      <td rowspan="2">Значение 3.2</td>
    </tr>
    <tr>
      <td>Значение 4</td>
      <td>Значение 4.1</td>
    </tr>
    <tr>
      <td colspan="2">Итого:</td>
      <td>Итоговое значение</td>
    </tr>
  </table>
      </tr>
  </table>
  <p></p>
  <!--Формы-->
  
  <form action="#" method="">
    <!--action - файл обработчик, куда будет отправлена форма-->
    <!--method - метод отправки формы по протоколу http(GET-получить информацию, сделать публикацию,пароли не отправляются, POST-закрытая передача информации-->
    <!--# - заглушка-->
    <h3>Регистрация</h3>
    <div>
      <p>Введите логин</p>
      <span>Логин:</span>
      <input type="text" placeholder="Введите логин" name="login" value="xxxNeaAnonyMxxx">
    </div>
    <div>
      <input type="password" name="password" placeholder="Введите пароль">
    </div>
    <div>
      <input type="passcheck" name="password" placeholder="Повторите пароль">
    </div>
    <div>
      <p>Выберите языки которые знаете</p>
      <input type="checkbox" name="html" id="html-input">
      <label for="html-input">HTML</label>
      <label>
        <input type="checkbox" name="css">
        <span>CSS</span>
      </label>
      <label>
        <input type="checkbox" name="js">
        <span>JavaScript</span>
      </label>
    </div>
    <div>
      <p>Выберите фреймворк\библиотеку</p>
      <label>
        <input type="radio" name="framework" value="vue" checked>
        <span>Vue</span>
      </label>
      <label>
        <input type="radio" name="framework" value="react">
        <span>React</span>
      </label>
      <label>
        <input type="radio" name="framework" value="angular">
        <span>Angular</span>
      </label>
    </div>
    <div>
      <textarea name="about" id="" cols="30" rows="10" placeholder="Напишите немного о себе"></textarea>
      <!--value у taxtarea  содержится в теле тэга-->
    </div>
    <div>
      <input type="file" name="project">
    </div>
    <div>
      <p>Выберите способ оплаты</p>
      <select name="payment">
        <option value="cash">Наличными</option>
        <option value="card">Банковской картой</option>
        <option value="coupon">Купоном</option>
      </select>
    </div>
    <div>
      <input type="button" value="Ненужная кнопка"><!--Не будет отправлять данные-->
      <button>Ещё одна кнопка</button><!--Будет отправлять даные-->
    </div>
    <div>
      <input type="reset" value="Очистить">
    </div>
    <div>
      <input type="submit" value="Зарегестрироваться">
      <!--Отправляет данне формы на файл, прописанный в action  с перезагрузкой страницы(или переходом на другую страницу)-->
    </div>
  </form>
</body>
</html>