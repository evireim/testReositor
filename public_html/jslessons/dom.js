"use strict"
//Вся наша страница делится на BOM и DOM
//DOM - Document object model
//BOM - Brouser object model

//Взаимодействие с  BOM
//BOM может управлять местоположением или считывать информацию о браузере и системе
console.log([navigator.userAgent, navigator.platform]);

console.log(location.href); //Получаем текущее местоположение

//Взаимодействие с DOM
//Глобальный объект document
console.log(document); //Получаем весь документ
console.log(document.documentElement); //Получаем весь документ в в иде элемента
console.log(document.body); //Получаем body

//Нахождение элементов - querySelector() querySelectorAll()
//querySelector() - наодит элемент на странице  
let blueHeader = document.querySelector("h1");
blueHeader.style.color = "blue";
let redHeader = document.querySelector(".h2center");
redHeader.style.color = "red";

let blueListItem = document.querySelector(".we-blue");
blueListItem.style.color = "blue";

//querySelectorAll() - возвращает коллекцию элементов
let redListItem = document.querySelectorAll(".we-red");
console.log(redListItem); //результат работы querySelectorAll - массив
for (let item of redListItem) { // Перебираем колекцию найденых элементов  с помощью цикла
  item.style.color = "red"; // красим элемент в красный
}

redListItem.style.color = "blue";

let orangeListItem = document.querySelectorAll(".only-1 li:nth-child(odd)");
for (let item of orangeListItem) {
  item.style.color = "orange"; 
}

// Пример с нажатием на h3 "Контекстные селекторы"
// let contextH3 = document.querySelector("h3");
// contextH3.onclick = function() {
//   let orangeListItem = document.querySelectorAll(".only-1 li:nth-child(odd)");
//   for (let item of orangeListItem) {
//     item.style.color = "orange"; 
//   }
// }

//Устаревшие способы getElementById
let yellowHeader = document.getElementById(".h2right");
yellowHeader.style.color = "yellow";

//matches - проверяем удовлитворяет ли элемент селектору
console.log(orangeListItem.matches("#orange") );

//closest - осуществляет поиск вверх - ищет по предкам
let descenant = document.querySelector(".descenants p");
console.log(descenant.closest(".children") );

//Навигация по DOM-элементам
let col1 = document.querySelector(".col-1");
//Поиск по узлам
console.log([col1.nextSibling,
            col1.previousSibling.previousSibling,
            col1.parentNode,
            col1.childNodes,
            col1.firstChild,
            col1.lastChild]);

//Поиск п оэлементам
console.log({
  nextElementSibling: col1.nextElementSibling, //Следующий сосоед
  previousElementSibling: col1.previousElementSibling, //Предыдущий сосоед
  parentElementSibling: col1.parentElementSibling, //родитель
  children: col1.children, //коллекция детей
  firstElementChild: col1.firstElementChild, //первый ребёнок
  lastElementChild: col1.lastElementChild //последний ребенок
});














