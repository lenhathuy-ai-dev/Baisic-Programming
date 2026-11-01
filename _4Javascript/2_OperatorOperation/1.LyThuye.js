// Kiểu dl số và nhập xuất
let a = 10;
let b = 3.5;

// 1. Kiểu dl số và nhập xuất
console.log(a) // 10
console.log(b) // 3.5
console.log(typeof a) // number

//2. Nhập dl từ người dùng
//let c = prompt("Nhập c: ");

// 2. Đối tượng Math

console.log(Math.PI); // 3.1416...
console.log(Math.abs(-1000)); // 1000
console.log(Math.pow(2, 5)); // 32
console.log(Math.sqrt(9)); // 3
console.log(Math.floor(9.9999999)); // 9
console.log(Math.ceil(1.0000000002)); //2
console.log(Math.round(2.445)); // 2 (Làm tròn về số nguyên)
console.log(Math.round((2.445+Number.EPSILON)*100)/100); // làm tròn đến chữ số thập phân thứ 2
console.log(Math.round((2.445*10))/10); // làm tròn đến chữ số thập phân thứ nhất

console.log(Math.trunc(3.999999999)); // 3
console.log(Math.max(-1, 90, 76, 45, 66, )); // 90
console.log(Math.min(-1, 2, 3, 4)); // -1
console.log(Math.random()); // Số ngẫu nhiên trong đoạn [0, 1]

