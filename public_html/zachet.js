"use strict"

//Задача 1. Создайте переменную str и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'b', символ 'e'.
function task1() {
  let str =  'abcde';
  let str1 = str.split('');
  alert(str1[0] + str1[1] + str1[4]);
}
task1();

// 2. Задача. Дан массив с элементами 'Привет, ', 'мир' и '!'. Необходимо вывести на экран фразу 'Привет, мир!'.
function task2() {
  let arry = ['Привет, ', 'мир', '!'];
  alert(arry[0] + arry[1] + arry[2]);
}
task2();

// 3. Задача. Если переменная a равна 10, то выведите 'Верно', иначе выведите 'Неверно'.
function task3() {
  let a = +prompt("Введите число");
  if (a == 10) {
    alert("Верно");
  } else {
    alert("Неверно");
  }
}
task3();

// 4. Задача. Выведите столбец чисел от 1 до 50.
function task4() {
  let a = "";
  for (let i = 1; i <= 50; i++) {
    a += i + '\n';
  }
  console.log(a);
}
task4();

// 5. Задача. Даны переменные a = 10 и b = 3. Найдите остаток от деления a на b.
function task5() {
  let a = 10;
  let b = 3;
  let result = a % b;
  alert(result);
}
task5();

// 6. Задача. Дана строка 'aaa@bbb@ccc'. Замените все @ на '!' с помощью глобального поиска и замены.
function task6() {
  let str = "aaa@bbb@ccc";
  alert(str.replace(/@/g,"!"));
}
task6();

// 7. Задача. Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Объедините их вместе.
function task7() {
  let arry1 = ['a', 'b', 'c'];
  let arry2 = [1, 2, 3];
  arry1.push(arry2);
  alert(arry1);
}
task7();

// 8. Задача. Дана строка. Сделайте заглавным первый символ этой строки не используя цикл. Найдите два решения.
// Вариант 1
function task81() {
  let str = "первый заглавый символ";
  let arry = str.split("");
  arry[0] = "П";
  alert(arry);
}
task81();
// Вариант 2
function task82() {
  let str = "первый заглавый символ";
  let arry = str.split("");
  arry.splice(0, 1, "П");
  alert(arry);
}
task82();

// 9. Задача. Сделайте функцию, которая возвращает куб числа. Число передается параметром.
function task9() {
  let a = 4;
  let b = a * a;
  alert(b);
}
task9();

// 10. Задача. Дан массив с числами. Проверьте, что в этом массиве есть число 5. Если есть - выведите 'да', а если нет - выведите 'нет'.
function task10() {
let arry = [3, 5, 7, 22, 65, 8];
let elem = 5;
    for (let arr of arry) {
    if (arr == elem) {
      return alert("да");
    }  
  }
  return alert("нет");
}  
task10();

// 11. Задача. Сделайте функцию, которая параметрами принимает 2 числа. Если эти числа равны - пусть функция вернет true, а если не равны - false.
function task11() {
  let a = +prompt("Введите число");
  let b = +prompt("Введите число");
  if (a == b) {
    return alert(true);
  }
  return alert(false);
}
task11();

// 12. Задача. С помощью цикла for сформируйте строку '123456789' и запишите ее в переменную str.
function task12() {
  let str = "";
  for (let i = 1; i <= 9; i++) {
    str += i;
  }
  alert(str);
}
task12();

// 13. Задача. Заполните массив следующим образом: в первый элемент запишите 'x', во второй 'xx', в третий 'xxx' и так далее
function task13() {
  let arry = [];
  let str = "x";
  for (let i = 0; i <= 6; i++) {
      arry.push(str);
    str = str + "x";
  }
  alert(arry);
}
task13();

// 14. Задача. Дан массив с числами. Создайте из него новый массив, где останутся лежатьтолько положительные числа. Создайте  для этого вспомогательную функцию isPositive(),которая параметром будет принимать число и возвращать true, если число положительное, и false - если отрицательное.
function task14() {
  let arry = [4, 23, -6, 5, -22];
  let arry2 = [];
  for (let i = 0; i <= arry.length; i++) {
    if (arry[i] > 0) {
        arry2.push(arry[i]);
    }
  }
  alert(arry2);
}
task14();

// 15. Задача. Дана строка. Сделайте заглавным первый символ каждого слова этой строки. Для этого сделайте вспомогательную функцию ucfirst, которая будет получать строку, делать первый символ этой строки заглавным и возвращать обратно строку с заглавной первой буквой.
function ucfirst() {
  let str = "сделайте заглавным";
  let splitStr = str.split('');
  splitStr[0] = str.charAt(0).toUpperCase();
  splitStr[9] = str.charAt(9).toUpperCase();
  alert(splitStr);
}
ucfirst();

let str = "сделайте заглавным каждый первый символ";
let arry = str.split(" "); //Разделяем каждую букву в глобальной переменной
let arry4 = []; //Создаём новую переменную
for (let i = 0; i < arry.length; i++) { //Делаем количество циклов столько сколько слов
  let arry3 = arry[i]; //Присваиваем первому полученному слову новую переменную
  let fuon = ucFirst(arry3); //Делаем новую перменную для вызова функции по созданию слова с заглавной буквой из сдова с маленькой, полученной из цикла
  arry4[i] = fuon; //Полученным словом из функции, заменяем слово полученное из цикла
}
let fJoin = arry4.join(" "); //Соединяем полученные слова в строку в новой переменной
alert(fJoin);

function ucFirst(arry3) { //Берём слово(строку) по порядку
    let arry1 = arry3.split(""); //Отделяем каждую букву
    let arry2 = arry1[0].toUpperCase(); //Берём первую букву из первой переменной, делаем заглавной и копируем её в новую переменную
    arry1.shift(); //Удаляем первую букву из первой переменной
    arry1.unshift(arry2[0]); //Присоединяем заглавную букву из второй переменной к первой переменной
    str = arry1.join(""); //Соединяем буквы в полученном слове с заглавной первой буквой и помещаем в глобальную переменную
    return str; //Возвращаем в глобальую переменную
}
    return str = arry1.join(""); //Так тоже работает, но почему то ругается
    
// 16. Задача. Дан массив с числами. Выведите последовательно его элементы используя рекурсию и не используя цикл.
let arry = [7, 23, 6, 5, 22];
function pow(x, n) {
  if (n == 1) {
    return x;
  } else {
    return x;
  }
}
alert(pow(arry, arry.length));

// 17. Задача. Выведите с помощью цикла столбец чисел от 1 до 100.
function task17() {
  let a = "";
  for (let i = 1; i <= 100; i++) {
    a += i + '\n';
  }
  console.log(a);
}
task17();

// 18. Задача. Выведите на экран текущие день, месяц и год в формате 'год-месяц-день'.
function task17() {
  let a = "2020";
  let b = "-11-";
  let c = "18";
  alert(a + b + c);
}
task17();

// 19. Задача. Даны картинки. Привяжите к каждой картинке событие, чтобы по клику на картинку алертом выводился ее src.

<!doctype html>
<html lang="ru">
<head>
  <title>Document</title>
</head>
<body>
  
  <div class="img p-3 mt-3">
    <img src="https://i2.wp.com/static.neolove.ru/images/_img/c/670/390/images/son/10e256c1647ba1e98e59dfdab3a9a2c4c6c73f6f.png" alt="" class="img-one">
  </div>
  <div class="img p-3 mt-3">
    <img src="https://avatars.mds.yandex.net/get-pdb/1579627/4cb76dd2-f273-4cce-a710-87a630a2fbdf/s1200?webp=false" alt="" class="img-two">
  </div>
  
  <script>
    let imgOne = document.querySelector(".img-one");
    imgOne.onclick = function () {
        let imgOneGet = imgOne.getAttribute("src");
        alert(imgOneGet);
    };
    let imgTwo = document.querySelector(".img-two");
    imgTwo.onclick = function () {
        let imgTwoGet = imgTwo.getAttribute("src");
        alert(imgTwoGet);
    };
  </script>
</body>
</html>



// 20. Задача. Дан див. Внутри него вначале находится просто текст, а затем span:<div> text <span>span</span></div>
// Получите первого потомка нашего дива с помощью firstChild и с помощью firstElementChild. Сравните результаты.

<!doctype html>
<html lang="ru">
<head>
  <title>Document</title>
</head>
<body>
  
  <div> text 
    <span>span</span>
  </div>
  
  <script>
    let first1 = document.querySelector("div");
    console.log([
      first1.firstChild]);
    let first2 = document.querySelector("div");
    console.log({
      firstElementChild: first2.firstElementChild});
  </script>
</body>
</html>










