<?php

/*

Bài 1. Chương trình Hello World
Viết chương trình PHP thực hiện các yêu cầu:
- Hiển thị dòng chữ Hello World!.
- Hiển thị họ tên, năm sinh và quê quán của một sinh viên.
- Sử dụng lần lượt echo và print.
- Phân biệt cách nối chuỗi bằng toán tử . và nội suy biến trong chuỗi.

*/

echo "Hello world!" . PHP_EOL;

$fullName = "Lê Nhật Huy";
$age = 26;
$homeTown = "Lâm Đồng";

echo "== PERSONAL INFORMATION ==" . PHP_EOL;
print "Full Name: " . $fullName . PHP_EOL; // Nối chuỗi bằng toán tử . + dùng print
echo "Age: " . $age . PHP_EOL; // Nối chuỗi bằng toán tử .
print "Hometown: " . $homeTown . PHP_EOL; // Nội suy biến trong chuỗi + print có 1 đối số

