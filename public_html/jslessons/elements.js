"use strict"
//Изменение стилей

let paragraph = document.querySelector(".text");

function changeStyle() {
  paragraph.style.color = "darkred";
  paragraph.style.textAlign = "center"; //cebab-case превращается в camelCase
  paragraph.style.backgroundColor = "magenta";
  paragraph.style.border = "2px solid darkred";
  paragraph.style.padding = "15px"; //Не забывайте про еденицы измерения
}

function getStyle() {
  let paragraph = document.querySelector(".text");
  console.log(paragraph.style.textTransform); //Мы не можем получить значение св-ва, прописанного в файле CSS или тэге style с помощью св-ва style 
  console.log(paragraph.style.padding); //Не можем получить св-ва из атрибута style или которые мы уже задали в JS
  return paragraph.style.textTransform;
}

function removeStyle() {
  paragraph.style.color = ""; // Чтобы вернуть стилям значения из CSS необходимо присвоить пустые ковычки
  paragraph.style.textAlign = "";  //Верни как было
  paragraph.style.backgroundColor = "";
  paragraph.style.border = "";
  paragraph.style.padding = "";
}

function addMargin(amount) {
  let computedStyle= getComputedStyle(paragraph); //Получаем объект с вычисленными св-ми
  let margin = computedStyle.marginTop; //Получаем значение margin-top
  margin = parseInt(margin); //Убираем еденицы измерения из значения
  paragraph.style.marginTop = margin + amount + "px"; // к примеру -    0 + 10 + "px" = 10px
}

//Внутреннее содержимое элемента
function changeText() {
let articleText = document.querySelector(".article-text");
console.log(articleText.innerHTML); //Получаем внутреннее значение элемента
articleText.innerHTML = "Привет Мир!";
}

function addComment() {
  let commentsContainer = document.querySelector(".comments");
  commentsContainer.innerHTML = "<p>Комментарий</p>"; // Можно использовать тэги внутри innerHTML или сделать commentsContainer.innerHTML += "<p>Комментарий</p>";
}

function changeText2() {
let articleText = document.querySelector(".article-text");
console.log(articleText.innerText); //Получаем внутреннее значение элемента
articleText.innerText = "<b>Привет Мир!</b>"; //Изменяем внутреннее содержимое без тэгов
}

function changeText3() {
  let articleText = document.querySelector(".article-text");
  let text = "<scrypt>location.href = 'https://yandex.ru'/</scrypt>";
  articleText.textContent = text;
}

//Работы с атрибутами
function calculate() {
  let inputArg1 = document.querySelector(".first-argument");
  let inputArg2 = document.querySelector(".second-argument");
  let resultInput = document.querySelector(".result-input");
  //Чтобы считать значение из input необходимо обратиться к его атрибуту value как св-ву
  let arg1 = +inputArg1.value; // получаем значение из input
  let arg2 = +inputArg2.value; //тип данных value - строка
  let result = arg1 + arg2;
  resultInput.value = result;
  //К атрибутам, СУЩЕСТВУЮЩИМ в HTML можно обращаться  как к св-вам. Чаще всего это атрибуты value, src, href 
}

function calculateMoney() {
  //Собственные атрибуты невозможно считать как св-ва, поэтому  для них мы используем методы работы с атрибутами getAtribute и setAtribute
  let resultInput = document.querySelector(".result-money-input"); 
  let rub100 = document.querySelector(".money img[cost='100']");
  let rub500 = document.querySelector(".money img[cost='500']");
  let rub100Cost = +rub100.getAttribute("cost"); //Значение атрибута строка
  let rub500Cost = +rub500.getAttribute("cost"); //Получаем значение атрибута
  let result = rub100Cost + rub500Cost;
  resultInput.value = result;
}
function change500RubPicture() {
  // Оригинальная ссылка https://i.ytimg.com/vi/of-OQU75lf8/hqdefault.jpg
  let rub500 = document.querySelector(".money img[cost='500']");
  console.log(rub500.src);
  console.log(rub500.getAttribute("src")); //Получаем относительную ссылку
  rub500.setAtribute("src", "https://pbs.twimg.com/media/Dpf0qcoW4AAFEvt.jpg:large");//Меняем картинку у 500 рублёвой купюры
  
}

//Работа с классами
let classParagraph = document.querySelector(".classes p");
function getClass() {
  console.log(classParagraph.classList);
  return classParagraph.className;
}

function changeClass1() {
  classParagraph.className = "text-right p-3 my-5 text-danger";
  
}
function changeClass2() {
  classParagraph.classList.add("text-primary");
  
}
function removeClass1() {
  classParagraph.className = "";
  
}
function removeClass2() {
  classParagraph.classList.remove("mt-3");
}


//Как узнать что делать с элементом
//Какой  из инструментов использовать?
//1. Изменение стилей (.style) - Изменить стили CSS. (цвета, позиционирование и расположение, отступы. 2 часть, раздел 1.8)
//2. Работа с атрибутами (.getAttribute() .setAttribute()) - src href value
// Или необходимо доп инф - ия об элементе (например ID из базы данных). В таком случае мы добавляем элементу собственные атрибуты. 2 часть раздел 1.8
//2.1 Работа с классами (.classList .ClassName)
//3. Внутреннее содержимое (.innerHTML)
//4. Изменение документа (создать/удалить/переместить элемент)








