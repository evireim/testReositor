"use strict"
// let a = 1;
// while (a <= 50) {
//     console.log(a);
//     a++;
// }   

// let i = 1;
// while(i <= 10) {
// console.log(i);
// i++;
// }

// let a = +prompt("Введите сумму вклада");
// let b = +prompt("Введите годовой процент");
// let c = 5;
// for (let x = 1; x <= c; x++) {
//     if (x == 1); 
//       let v = ((a / 100) * b) + a;
//       alert("Размер вклада на первый год" + " " + v);
//     if (x == 2); 
//       let s = ((v / 100) * b) + v; 
//       alert("Размер вклада на второй год" + " " + s);
//     if (x == 3); 
//       let z = ((s / 100) * b) + s;  
//       alert("Размер вклада на третий год" + " " + z);
//     if (x == 4); 
//       let q = ((z / 100) * b) + z;
//       alert("Размер вклада на четвёртый год" + " " + q);
//     if (x == 5);  
//       let n = ((q / 100) * b) + q;
//       alert("Размер вклада на пятый год" + " " + n);
//       break;
// }

let a = +prompt("Введите сумму вклада");
let b = +prompt("Введите годовой процент");
let c = +prompt("Введите количество лет");
for (let x = 1; x <= c; x++) {
    while (x <= c); 
       let v = ((a / 100) * b) + a;
       alert("Размер вклада через" + x + " лет " + v);
}

// let a = +prompt("Введите сумму вклада");
// let b = +prompt("Введите годовой процент");
// let c = +prompt("Введите количество лет");
// for (let x = 1; x <= c; x++) {
//     x++;
//     let b = ((a / 100) * b) + a;
//     alert(b);
// }    

// let a = +prompt("Введите число");
// if (a >= 10 && a <= 99) {
//     let b = a % 10;
//     let c = a - b;
//     let d = c + b;
//     alert(+d);
// } 



// let lenght = 10;
// let str = "";
// for (let i = 0; i <= lenght; i++) {
//   str = str + i + "\n";
// }
// alert(str);