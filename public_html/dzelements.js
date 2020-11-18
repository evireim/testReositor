"use strict"

// Задание 1 Напишите функцию, которая бы считывала значение из левого input'a и переносила бы это значение как внутренний HTML элемента .input-result
function getInput() {
  let inpText1 = document.querySelector(".task1-input");
  let resultInp = document.querySelector(".input-result");
  let text1 = inpText1.value;
  resultInp.innerHTML = text1;
}

// Задание 2  Напишите функцию, которая параметром принимает цвет (color), а затем применяет этот цвет к квадрату
let cub = document.querySelector(".box");
function changeStyle() {
  cub.style.backgroundColor = "blue";
}

//Задание 3 Напишите функцию, которая считывает атрибут src левой картинки и записывает это значение в атрибут src правой картинки
    //Вариант 1
function imgChange() {
  let imgRight = document.querySelector(".right-fruit");
  imgRight.setAttribute("src", "https://images.immediate.co.uk/production/volatile/sites/30/2017/01/Bananas-218094b-scaled.jpg?quality=45&resize=960,872");
}

    //Вариант 2
function imgChange2() {
  let imgRight = document.querySelector(".right-fruit");
  let imgLeft = document.querySelector(".left-fruit");
  let imgLeftGet = imgLeft.getAttribute("src");
  imgRight.src = imgLeftGet;
}


 // Задание 4 Напишите функцию, которая удалит класс d-none у квадрата ниже (он невидим) 

function deleteDnone() {
  let displayNone = document.querySelector(".task-4 .box");
  displayNone.classList.remove("d-none");
}

// Задание 4**    Напишите "переключатель" - при первом вызове функции квадрат показывается, при втором - прячется и т.д.
function deleteOnDnone() {
  let displayNoneOff = document.querySelector(".task-4 .box");
  displayNoneOff.classList.toggle("d-none");
}

//Вариант 2
function deleteOnDnone2() {
  let displayNoneOff = document.querySelector(".task-4 .box");
  console.log(displayNoneOff);
  for (let i = 0; i < displayNoneOff.length; i++) {
    if (displayNoneOff[i] == displayNoneOff) {
      displayNoneOff.className = "";
    } else {
      displayNoneOff.className = "box d-none";
    }
  }
}
