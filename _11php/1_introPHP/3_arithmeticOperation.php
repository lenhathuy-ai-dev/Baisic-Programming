<?php

/*
Nhập hai số thực \(a,b\). Tính và hiển thị:
- Tổng, hiệu, tích, thương.
- Phần dư nếu hai số là số nguyên.
- Lũy thừa \(a^b\).
- Giá trị trung bình cộng.
Xử lý trường hợp phép chia cho 0.
*/

$a = 2998;
$b = 19;

echo "Số a: $a" . PHP_EOL;
echo "Số b: $b" . PHP_EOL;
echo "== KẾT QUẢ ==" . PHP_EOL;
// Tổng
echo "Tổng: $a + $b = ($a + $b)" . PHP_EOL;
// Hiệu
echo "Hiệu: $a - $b = ($a - $b)" . PHP_EOL; 
// Tích
echo "Tích: $a * $b = ($a * $b)" . PHP_EOL;
// Thương
if ($b != 0) {
    echo "Thương: $a / $b = ($a / $b)" . PHP_EOL;
} else {
    echo "Không thể thực hiện phép chia cho 0!" . PHP_EOL;
}   

// Phép chia lấy dư (chỉ thực hiện nếu cả hai số là số nguyên)
if (is_int($a) && is_int($b)) {
    if ($b != 0) {
        echo "Phần dư: $a % $b = ($a % $b)" . PHP_EOL;
    } else {
        echo "Không thể thực hiện phép chia lấy dư cho 0!" . PHP_EOL;
    }
} else {
    echo "Cả hai số phải là số nguyên để thực hiện phép chia lấy dư!" . PHP_EOL;
}

// Lũy thừa
echo "Lũy thừa: $a ^ $b = (" . pow($a, $b) . ")" . PHP_EOL;
// Giá trị trung bình cộng  
$average = ($a + $b) / 2;
echo "Giá trị trung bình cộng: ($a + $b) / 2 = $average" . PHP_EOL;