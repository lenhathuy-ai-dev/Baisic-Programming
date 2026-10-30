<?php

/*Nhập số nguyên không âm n (n >= 0) biểu diễn số giây.
Chuyển thành:
- Số ngày.
- Số giờ.
- Số phút.
- Số giây còn lại.
Ví dụ: 3665 giây được biểu diễn thành 0 ngày 1 giờ 1 phút 5 giây.
*/

echo "CHƯƠNG TRÌNH CHUYỂN ĐỔI THỜI GIAN\n";

while (true) {
    $n = (int)readline("Nhập số giây (n >= 0): ");
    if ($n < 0) {
        echo "Vui lòng nhập số nguyên không âm.\n";
        continue;
    }
    $ngay = floor ($n / 86400);
    $gio = floor(($n % 86400) / 3600);
    $phut = floor(($n % 3600) / 60);
    $giay = $n % 60;

    echo "$n giây được biểu diễn thành: $ngay ngày $gio giờ $phut phút $giay giây.\n";
    break;
}
