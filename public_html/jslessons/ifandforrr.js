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

let a = +prompt("Введите сумму вклада");
let b = +prompt("Введите годовой процент");
let c = 5;
let v = "";
for (let x = 1; x <= c; x++) {
    if (x == 1) {
      v = a * (b / 100);
      alert("Размер вклада на первый год" + " " + v);
  } else if (x == 2) {
      v = a * ((b * 2) / 100); 
      alert("Размер вклада на второй год" + " " + v);
  } else if (x == 3) {
      v = a * ((b * 3) / 100);  
      alert("Размер вклада на третий год" + " " + v);
  } else if (x == 4) {
      v = a * ((b * 4)/ 100);
      alert("Размер вклада на четвёртый год" + " " + v);
  } else if (x == 5) {
      v = a * ((b * 5) / 100);
      alert("Размер вклада на пятый год" + " " + v);
  } else {
    break;
  }
}

// let lenght = 10;
// let str = "";
// for (let i = 0; i <= lenght; i++);
// str = str + i + "\n";
// }
// alert(str);