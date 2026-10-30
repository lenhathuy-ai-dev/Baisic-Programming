<?php

/*
Bài 2. Khai báo biến và kiểu dữ liệu
Khai báo các biến lưu trữ thông tin sinh viên gồm:
- Họ tên, tuổi, chiều cao, điểm trung bình.
- Trạng thái đã tốt nghiệp (true hoặc false).
- Một danh sách gồm ba môn học.
Yêu cầu hiển thị giá trị và kiểu dữ liệu bằng gettype(), var_dump().
*/


$hoTen = "Lê Nhật Huy";
$tuoi = 26;
$chieuCao = 1.75;
$diemTrungBinh = 8.5;
$daTotNghiep = true;
$monHoc = ["Toán", "Lý", "Hóa", 5];

echo "== THÔNG TIN SINH VIÊN ==" . PHP_EOL;
echo "Họ tên: " . $hoTen . PHP_EOL;
print "Tuổi: $tuoi" . PHP_EOL;
echo "Chiều cao: " . $chieuCao . PHP_EOL;   
print "Điểm trung bình: $diemTrungBinh" . PHP_EOL;
// Toán tử 3 ngôi (ternary operator) để hiển thị trạng thái tốt nghiệp
echo "Trạng thái tốt nghiệp: " . ($daTotNghiep ? "Đã tốt nghiệp" : "Chưa tốt nghiệp") . PHP_EOL;
// Hàm implode() để chuyển mảng thành chuỗi
echo "Danh sách môn học: " ,implode(", ", $monHoc) . PHP_EOL;

// Các hàm quan trọng kiểm tra kiểu dữ liệu
echo "== KIỂM TRA KIỂU DỮ LIỆU ==" . PHP_EOL;
echo "Kiểu dữ liệu của biến hoTen: " . gettype($hoTen) . PHP_EOL;
echo "Kiểu dữ liệu của biến tuoi: " . gettype($tuoi) . PHP_EOL;
echo "Kiểu dữ liệu của biến chieuCao: " . gettype($chieuCao) . PHP_EOL;
echo "Kiểu dữ liệu của biến diemTrungBinh: " . gettype($diemTrungBinh) . PHP_EOL;
echo "Kiểu dữ liệu của biến daTotNghiep: " . gettype($daTotNghiep) . PHP_EOL;
echo "Kiểu dữ liệu của biến monHoc: " . gettype($monHoc) . PHP_EOL;

var_dump($hoTen);
var_dump($tuoi);
var_dump($chieuCao);    
var_dump($diemTrungBinh);
var_dump($daTotNghiep);
var_dump($monHoc);