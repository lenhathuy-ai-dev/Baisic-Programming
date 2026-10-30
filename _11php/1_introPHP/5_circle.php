<?php

echo "CHƯƠNG TRÌNH TÍNH CHU VI DIỆN TÍCH HÌNH TRÒN\n";

while(true){
    echo "Nhập bán kính hình tròn: ";
    $r = trim(fgets(STDIN));

    // Kiểm tra dữ liệu đầu vào; thông báo lỗi khi dữ liệu không hợp lệ.
    if(!is_numeric($r)){
        echo "Bạn đang nhập không phải bán kính, vui lòng nhập số dương.\n";
        continue;
    } else if($r < 0){
        echo "Bạn đang nhập số âm. Bán kính phải là số dương.\n";   
        continue;     
    }

    // Tính chu vi và diện tích hình tròn.
    $P =  2 * pi() * $r;
    $S = pi() * pow($r, 2);

    // Hiển thị kết quả với đúng hai chữ số thập phân.
    echo "Chu vi: " . number_format($P, 3) . "\n";
    echo "Diện tích: " . number_format($S, 3) . "\n";
    break;
}