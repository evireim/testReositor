"use strict"

// greedAllUsers(); /*Вызов функции. Функцию можно вызвать до их обьявления*/

// function greedAllUsers() { /*Обьявление функции*/
//   alert("Привет, всем!");
// }


// //Перевенные внутри функции
// // Переменные объявленные внутри функции с помощью let - локальны для этой функции
// function showMessage() {
//   let message = "Привет, Мир"; /*Переменную можно использовать только внутри цункции*/
//   alert(message);
// } 

// // message = "Пока!"; - вызовет ошибку, обращение к локальной переменной
// showMessage();
// // Обращение к глобальной переменной
// let username = "Василий"; /* Глобальная переменная - можно к ней обратиться из люьой части кода*/
// function greetUser() {
//   let message = "Привет, " + username + "!";
//   alert(message);
// }
// // Те же самые правила локальной  и глобальной переменных  распространяются на условия и циклы
// for (let i = 0; i <= 1; i++) {
//   let message = "Отобразить цикл";  //message - локальна для цикла
//   console.log(message);
// }
// if (true) {
//   let message = "Отработало условие"; //message - локальна для условия  
//   console.log(message);
// }
// // Переменная, объявленная через let внутри {} - локальна для этих {}
// // function checkAge() {
// //   let age = +prompt("Сколько Вам лет?", 18);
// //     if (age >= 18) {
// //     let message = "Вам можно на сайт";
// //     alert(message);
// //   } else {
// //     let message = "Вам нельзя на сайт";
// //     alert(message);
// //   } 
// // }


// function checkAge() {
//   let age = +prompt("Сколько Вам лет?", 18);
//   let message = "";
//     if (age >= 18) {
//     message = "Вам можно на сайт";
//   } else {
//     message = "Вам нельзя на сайт";
//   } 
//   alert(message);
// }
// checkAge();

// let state = "idle";
// function changeState() {
//   let state = "ready";
//   //Если глобальная и локальная переменные имеют одинаковые названия, используются локальная
//   console.log(state); //"ready"
// }
// changeState();
// console.log(state); //"idle"

// Параметры

// function addChatMessage (from, text) { /*Говорим функции, что она принимает параметры*/
//   console.log(`from = ${text}`);
//   console.log(`text = ${from}`);
//   /*Параментры - локальные переменные для функции*/
//   // let message = `${from}: ${text}`;
//   // alert(message);
//   alert(`${from}: ${text}`);
// }
// addChatMessage("Василий", "Всмем привет"); // Передаём параметры
// addChatMessage("Сергей", "Привет, Вася");
// addChatMessage("Пётр", "Здоров");

// let username = "anonym";
// let message = "hello";
// addChatMessage(username, message);

// // Параметря по умолчанию(необязательные параметры)
// function addChatMessage(from, text, role = "guest") { //По умолчанию параметр roll = guest
//   let message = `[${role}]${from}: ${text}`;
//   alert(message);
// }
// addChatMessage("Василий", "Всем, Привет"); // [guest]василий: Привет, всем
// addChatMessage("Сергей", "Приветствую", "admin"); //[admin]Пётр: Приветствую

//Возврат значения
function checkAge(age) {
  if (age >= 18) {
    return true; //return - возвращает значение
  } else {
    return false;
  }  
}

/* Вариант написания нижнего примера*/
// let age = +prompt("Введите возраст");   
// let checked = checkAge(age); 
// console.log(checked);
// if (checked === true) { 
//   alert("Вам можно на сайт");
// } else {
//   alert("Вам нельзя на сайт");
// }


// let checked = checkAge( +prompt("Введите возраст")); //Результат из return мы можем записывать в переменные
// console.log(checked);
// if (checked === true) { //Можно записать if (checked) - то же верно
//   alert("Вам можно на сайт");
// } else {
//   alert("Вам нельзя на сайт");
// }

function func() {
  return; //Результат работы любой функции, если с помощью 
}

let state = "idle";
function cookCoffee() {
  if (state != "idle") {
    return; /*return - завершает выполнение функции*/
  } 
  console.log("Ваш кофе готовится");
  state = "cooking";
}
cookCoffee();
cookCoffee();

function takeCoffee() {
  if (state != "cooking") {
    return;
  }
  console.log("Вы забрали свой кофе");
  state = "idle";
}

takeCoffee();




