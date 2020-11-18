"use strict"

//Поиск подстроки

// let bulki = "Съешь ещё этих мягких французских булок";

// console.log(bulki.indexOf("ещё")); //6 - возвращяет индекс символа с которого начинается подстрока
// console.log(bulki.indexOf("Съешь")); //0 - буква С - первая,  отсчёт начинается с 0
// console.log(bulki.indexOf("печеньки")); //-1 - при ненахождении возвращает -1
// // indexOf нецелесообразно использовать как условие

// console.log(bulki.includes("мягких")); //true - возварыщает true, если наёл подстроку и false если не нашёл
// console.log(bulki.startsWith("Съешь")); //true - начинается с 
// console.log(bulki.endsWith("печенек")); //false - заканчиваеся на 

// function checkAndGetIndex(needle, haystack) {
//   if (haystack.includes(needle)) { //Ищем в подстраке
//     return haystack.indexOf(needle); //Если есть возвращаем индекс
//   } else {
//     return false; //Если нет возвращаем false
//   }
// }

// console.log(checkAndGetIndex("этих", bulki)); //получим 10

//Получение подстроки

// let string = "Съешь ещё этих мягких французских булок";
// let result1 = string.slice(6, 9);
// console.log(result1);
// console.log(string);


// console.log(string.slice(-5, -2)); // start и end могут  быть отрицательными
// console.log(string.slice(15)); // если нет второго значения получим до конца

// console.log(string.subString(6, 9)); //"Ещё" От start до end
// console.log(string.subString(9, 6)); //"Ещё" start может быть больше end

// console.log(string.substr(6, 3)); //"Ещё" От start длины length

// Массивы

//Объект как ассоциативный массив(объект без методов)
// let user = {name: "Василий", lastname: "Петров"};
// let fruits = {one: "Яблоко", two: "Груша"}; // - Плохой пример, 

// создание массива. Получение элемента массива
// let arr = [];
// let fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
// console.log(fruits[0]);
// console.log(fruits[1]);
// console.log(fruits[3]);
// console.log(fruits[4]);
// fruits[1] = "Персик";
// console.log(fruits[1]);

// let randomArray = [42, "Булки", true, [1, 2, 3, 4, 5], {name: "Василий", lastname: "Петров"}, null, undefined];
// //Массив можно наполнять любыми данными

// //Массив может быть многомерным (в том числе в сочетании с объектами)

// let tickTackToe = [
//   ["0", "X", "X"],
//   ["0", "X", "0"],
//   ["0", "0", "X"],
//   ];
// let admins = {
//   creator: ["anonym"],
//   administrator: ["Вася123", "petya13"],
//   moderator: ["nan123"],
// };   
// let carts = [
//   {name: "Названия продукта", desc: "Описание", price: "Цена", images: ["1.jpg", "2.jpg"], existance: true, count: 2},  
//   {name: "Названия продукта", desc: "Описание", price: "Цена", images: ["1.jpg", "2.jpg"], existance: true, count: 2},
//   {name: "Названия продукта", desc: "Описание", price: "Цена", images: ["1.jpg", "2.jpg"], existance: true, count: 2},  
//   {name: "Названия продукта", desc: "Описание", price: "Цена", images: ["1.jpg", "2.jpg"], existance: true, count: 2},  
// ];  

// let fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"]; 
// console.log(fruits.length); //5 - длина массива

// let str1 = "";
// for (let i = 0; i < fruits.length; i++) { 
//   str1 += fruits[i] + "\n"; // Работает с самими элементами массива (может их менять)
// }  
// console.log(str1);


// let str2 = "";
// for (let fruit of fruits) {
//   str2 += fruit + "\n"; // Работает с "копиями" элементов массива (не меняет сам массив и элемент в нём), т.к. присутствует let fruit
// }  
// console.log(str2);


// // let str2 = "";
// // let cards = document.createElement("div");
// // document.body.append(cards);
// // cards.style.display
// // for (let fruit of fruits) {
// //   // str2 += fruit + "\n"; 
// //   let card = document.createElement("h2"); // создаём по карточке дял каждого элемента
// //   card.innerHTML = fruits;
// //   cards.append(card);
// // }  
// // console.log(str2);

//Методы работы с массивом
//pop/push shift/unshift

// let fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"]; 
// let lastFruit = fruits.pop(); //удаляет элемент из конца массива и возвращает его pop
// console.log(fruits); // ["Яблоко", "Ананас", "Банан", "Груша"]
// console.log(lastFruit); // Апельсин

// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"]; 
// let newFruit = "Персик"; 
// fruits.push(newFruit); // Добавляет элемент в конец массива
// console.log(fruits); // ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин", "Персик"]

// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"]; 
// let firstFruit = fruits.shift(); // shift - удаляет первый элемент из массива и возвращает его
// console.log(fruits); //["Ананас", "Банан", "Груша", "Апельсин"]
// console.log(firstFruit); //Яблоко

// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
// newFruit = "Персик";
// fruits.unshift(newFruit); //Добавляет элемент в начало массива
// console.log(fruits); //["Персик", "Яблоко", "Ананас", "Банан", "Груша", "Апельсин"]


// let fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"]; 

// fruits.splice(1, 1);// Удаляем 1 элемент начиная с 1
// console.log(fruits); //Удалился Ананас

// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"]; 

// fruits.splice(1, 0, "Персик", "Виноград"); // Начиная с 1 удаляем 0 и добавляем "Персик" и "Виноград"
// console.log(fruits); // ["Яблоко", "Персик", "Виноград", "Ананас", "Банан", "Груша", "Апельсин"]

// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"]; 

// fruits.splice(1, 1, "Персик"); // Начиная с 1 удаляем 1 и добавляем "Персик" 
// console.log(fruits); // ["Яблоко", "Персик", "Банан", "Груша", "Апельсин"]

// // splice изменяет исходный массив

// // slice
// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"]; 
// // slice работает с "копией" массва (не вносит изменения в сам массив)
// let fruitsCopy = fruits.slice(); //Получаем копию массива

// let shelf1 = fruits.slice(0, 3);
// console.log(shelf1);
// console.log(fruits);

//concat - объединяет массивы
let arr1 = [1, 2, 3];
let arr2 = [4, 6, 8];
let newArr = arr1.concat(arr2); //объединяем массивы arr1 и arr2, возвращает объединённый результат
console.log(newArr);

// reverse - переворачивает массив

let arr3 = [1, 3, 5, 7, 8, 9];
arr3.reverse();
console.log(arr3);

// Превращаем строки в массив
// Необходимо из фразы "Я-учу-JS" сделать "JS учу Я"

let str = "Я-учу-JS";
let array = str.split("-"); //Разделяет строку на массив (по разделителю)
console.log(array);
array.reverse();
let newStr = array.join(" "); // Делаем из массива строку - элементы  друг  от жруга разделены разделением (в намшем случае пробелом)
console.log(newStr);

// let result = Number;
// let arry = [3, 5, 7, 22, 65, 8];
// function getFive(arry) {
//     for (let arr of arry) {
//         if (arr == 5) {
//         let result = 5;
//         } 
//     }
// }
// if (result == 5) {
// alert("да");
// } else {
//   alert("нет");
// }
// getFive(arry);



let arry = [2, 53, 33, 67, 90, 9, 4];
let a = [];
function twoNumbers() {
    for (let i = 0; i <= arry.length; i++) {
        for (let j = arry[i]; j <= arry[i]; j++) {
            if (arry[i] == a) {
                return alert("да");
            } else if (arry[i] != a) {
                a = arry[i];
            } else {
                
            }
        }
    }
}
twoNumbers();



