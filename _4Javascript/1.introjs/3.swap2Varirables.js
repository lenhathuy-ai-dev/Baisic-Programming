let a = 10
let b = 20

/// Cách 1: Dùng biến trung gian
console.log("Cách 1: Trước a = " + a + ", b = " + b);
let t = a;
a = b;
b = t;
console.log("Sau a = " + a + ", b = " + b);

// Cách 2: Dùng phép cộng trừ
a = 10, b = 20;
console.log("Cách 2: Trước a = " + a + ", b = " + b);

a = a + b; //a = 30, b = 20
b = a - b; // a = 30, b = 10
a = a - b; // a = 20, b = 10

console.log("Sau a = " + a + ", b = " + b);


// Cách 3: Dùng phép nhân chia
a = 10, b = 20;
console.log("Cách 3: Trước a = " + a + ", b = " + b);

a = a * b; //a = 200, b = 20
b = a / b; // a = 200, b = 10
a = a / b; // a = 20, b = 10

console.log("Sau a = " + a + ", b = " + b);



// Destructring







// // Cách 4: Dùng phép toán XOR
// console.log("Dùng cách 4: Dùng phép toán XOR");
// a = 10;
// b = 20;
// console.log("Before swapping: a = " + a + ", b = " + b);    
// a = a ^ b;
// b = a ^ b; // b = 10
// a = a ^ b; // a = 20
// console.log("After swapping (method 4): a = " + a + ", b = " + b);

// // Cách 5: Dùng Destructuring assignment
// console.log("Dùng cách 5: Dùng Destructuring assignment");
// a = 10;
// b = 20;
// console.log("Before swapping: a = " + a + ", b = " + b);
// [a, b] = [b, a];
// console.log("After swapping (method 5): a = " + a + ", b = " + b);

// // // Cách 6: Dùng hàm swap
// // console.log("Dùng cách 6: Dùng hàm swap");
// // a = 10;
// // b = 20;
// // console.log("Before swapping: a = " + a + ", b = " + b);

// // function swap(x, y) {
// //     return [y, x];
// // }
// // [a, b] = swap(a, b);
// // console.log("After swapping (method 6): a = " + a + ", b = " + b);

// // Cách 7: Dùng hàm swap với tham chiếu
// console.log("Dùng cách 7: Dùng hàm swap với tham chiếu");
// a = 10;
// b = 20;
// console.log("Before swapping: a = " + a + ", b = " + b);    
// a = swap(a, b)[0];
// b = swap(a, b)[1];
// console.log("After swapping (method 7): a = " + a + ", b = " + b);

// // Cách 8: Dùng hàm swap với tham chiếu và destructuring assignment
// console.log("Dùng cách 8: Dùng hàm swap với tham chiếu và destructuring assignment");
// a = 10;
// b = 20;
// console.log("Before swapping: a = " + a + ", b = " + b);
// [a, b] = swap(a, b);
// console.log("After swapping (method 8): a = " + a + ", b = " + b);  

// // Cách 9: Dùng hàm swap với tham chiếu và destructuring assignment và spread operator
// console.log("Dùng cách 9: Dùng hàm swap với tham chiếu và destructuring assignment và spread operator");
// a = 10; 
// b = 20;
// console.log("Before swapping: a = " + a + ", b = " + b);
// [a, b] = [...swap(a, b)];
// console.log("After swapping (method 9): a = " + a + ", b = " + b);

