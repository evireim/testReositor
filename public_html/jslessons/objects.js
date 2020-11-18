"use strict"
/*Описываем кружку в виде объекта*/
// let cup = {}; //Создание нового объекта(пустого)
// cup = {
//   color: "white", /*свойство - созданы для описания объекта*/
//   filled: false, /*ключ: значение*/
//   handle: 1, /*ключ - название свойства*/
//   material: "ceramic",
//   cleanliness: 0.75,
//   spoon: {material: "metall", cleanless: 0.75}, /*Объект может содержать другие объекты*/ 
  
//   fill: function(liquidType) { /*Метод - действие, в котором учавствет объект*/
//     if (!cup.filled) {
//       console.log("В кружку налили " + liquidType);
//       cup.filled = "true";
//       cup.liqid = liquidType;
//     } else {
//       console.log("Кружка уже наполнена");
//     }  
//   },
//   /*Упрощённый синтаксис*/
//   drink() { 
//     /*this внутри метода возвращает объект к которому обращён метод*/
//     // В данном примере this === cup
// //         if (this.filled) {
// //       console.log("Вы випили " + this.liquid);
// //       this.filled = false;
// //       this.liquid = null;
// //     } else {
// //       console.log("Нечего пить");
// //     }
// //   },
// // }
//     if (cup.filled) {
//       console.log("Вы випили " + cup.liquid);
//       cup.filled = false;
//       cup.liquid = null;
//     } else {
//       console.log("Нечего пить");
//     }
//   },
// }
// console.log( cup.color ); /*считываем свойства*/
// cup.color = "black"; /*Перезависываем значение св-ва*/
// console.log( cup.color );

// /*Вызов метода*/
// cup.fill("Чай");

// Методы примитивов

//Числа 

// Округление с помощью библиотеки Math

// let a = 3.57458745
// let floor = Math.floor(a); /*floor - пол - округление вниз*/
// console.log(floor);
// let round = Math.round(a); /*round - Округление по математическим правилам*/
// console.log(round);
// let ceil = Math.ceil(a); /*cail - потолок - Округление вверх*/
// console.log(ceil);

// let fixed = a.toFixed(1); /*Округляетд до количества знаков после запятой, указанных в параметре, по математическим правилам*/
// // Используйте toFixed, когдаскладываете нецелые числа
// console.log(a);

// // Получение числа из строки
// let width = "100px";
// width = parseInt(width); //Для целых чисел
// console.log(width); // 100
// let fontSize = "1.5em";
// fontSize = parseFloat(fontSize); //Для дробных чисел
// console.log(fontSize);

// // Получение сучайного числа
// console.log(Math.random()); //Получаем члучайное дробное число в диапазоне [0.1)
// // Получение случайного целого числа от 0 до 10
// let random = Math.floor(Math.random() * 10); // 10 + Math.floor(Math.random() * 10); - означает от 10 до 20
// console.log(random);

//Функции для генератора случайных чисел

// Строки. Методы строк

let string = "Что-то, что можно написать в одну строку кода";
let user = {name: "Василий", role: "Модератор"};
let badge = `
  <div>
    <h2>Имя: ${user.name}</h2>
    <h5>Роль: ${user.role}</h5>
  </div> 
`;/* `` - Позволяют ставить абзацы внутри строки и также с помощью синтаксиса ${} позволяют вписывать переменные*/

// В строки можно  длбавлять спецсимволы используя  Unicode
console.log("\u{1f605}");

// Длина строки и доступ к символам

let str = "foobar";
console.log(str.length); //6 символов
console.log( str[0] ); // "f" - отсчет начинается с 0
console.log( str[1] ); // "o" 
console.log( str[3] ); // "b"

let num = 52134;
num = String(num); //Превращаяем число в строку
console.log(num.length);
console.log( num[0] ); 
console.log( num[1] ); 
console.log( num[2] ); 

// num[0] = 4; - не сработает, изменять строку посивмлоьно нельзя

let result = "";
for (let i = 0; i < num.length; i++) {
  result = result + num[i]*10 + " ";
}
console.log(result); // "30 20 50"

// Изменение регистра
let str1 = "Съешь ещё этих мягких французских булок";
let newStr1 = str1.toUpperCase();
console.log(newStr1);
let str2 = "Съешь Ещё Этих Мягких Французских Булок";
let newStr2 = str2.toLowerCase();
console.log(newStr2);


let a = +prompt("Введите число");
a = String(a);
for (let i = 0; i < a.length; i++) {
    let result = `${a[i] + a[i]}`;
}
alert(result);

let a = prompt("Введите число");
let result = "";
for (let i = 0; i < a.length; i++) {
    result = result + a[i] + "+" + a[i];
}
alert(result);


