"use strict"
// //1 найти Таблицу с id="age-table"
// let ageTable = document.querySelector("#age-table");
// console.log(ageTable);

// //2 найти Все элементы label внутри этой таблицы (их три).
// let tableLables = document.querySelectorAll("#age-list label:nth-child(n)");
// console.log(tableLables);

// //3 найти Первый td в этой таблице (со словом «Age»).
// let getFirstTd = document.querySelector("tr td:nth-child(1)");
// console.log(getFirstTd);

// //4 найти Форму form с именем name="search".
// let formSearch = document.querySelector("body form:first-child");
// console.log(formSearch);

// //5 найти Первый input в этой форме.
// let firstInput = document.querySelector("body form input");
// console.log(firstInput);

// // 6 найти Последний input в этой форме.
// let lastInput = document.getElementsByName("info[2]");
// console.log(lastInput);

// let imgOne = document.querySelector(".img-one");
// imgOne.addEventListener("click", function() {
//     let imgOneGet = imgOne.getAttribute("src");
//     alert(imgOneGet); 
// });


// alert(location.href);

// let a = location.href;
// let b = a.split('');
// let c = b.slice(9, 100);
// alert(c);

let href1 = location.href;
let target = ".php";
let pos = -1;
while ((pos = href1.lastIndexOf(target, pos + 1)) != -1) {
  alert(pos);
}

let a = "";
for (let i = 1; i <= 100; i++ ) {
    a+=i + '\n';
    
}
console.log(a);
// let str = "Ослик Иа-Иа посмотрел на виадук";
// let target = "Иа";

// let pos = -1;
// while ((pos = str.indexOf(target, pos + 1)) != -1) {
//   alert( pos );
// }


let imgOne = document.querySelector(".img-one");
imgOne.onclick = function () {
    let imgOneGet = imgOne.getAttribute("src");
    alert(imgOneGet);
};

// let buttonOne = document.querySelector(".button-one");
// console.log(buttonOne);
// let height = document.documentElement.clientHeight;
// buttonOne.onclick = function () {
//     alert(height);
// };


// let num = prompt("Введите число");
// let arry = num.split("");
// let summa = 0;
// function getDigitsSum() {
//     for (let i = 0; i < arry.length; i++) {
//         arry[i] = Math.floor(num) % 10;
//         num /= 10;
//         summa += arry[i];
//     }
//     return summa;
// }
// alert("Веc числа " + summa);

