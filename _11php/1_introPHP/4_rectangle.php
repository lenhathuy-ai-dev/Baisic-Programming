<?php
/*
Viết chương trình PHP thực hiện các yêu cầu sau:
1. Nhập chiều dài a và chiều rộng b của hình chữ nhật, với a,b>0.
2. Tính chu vi và diện tích hình chữ nhật.
3. Hiển thị kết quả với đúng hai chữ số thập phân.
4. Kiểm tra dữ liệu đầu vào; thông báo lỗi khi dữ liệu không hợp lệ.
*/

/* LÝ THUYẾT
1. HÀM NHẬP DỮ LIỆU TỪ TERMINAL LÀ fgets(STDIN)

*/


while (true) {
    // 1. Nhập chiều dài a và chiều rộng b của hình chữ nhật, với a,b>0.
   echo "Nhập chiều dài: ";
   $a = trim(fgets(STDIN));
   echo "Nhập chiều rộng: ";
   $b = trim(fgets(STDIN));

   // 4. Kiểm tra dữ liệu đầu vào; thông báo lỗi khi dữ liệu không hợp lệ.
    if (!is_numeric ($a) || !is_numeric($b)){
        echo "Bạn đang nhập văn bản. Vui lòng nhập số dương.\n";
        continue;
    } else if ($a <0 || $b <0){
        echo "Bạn đang nhập số âm.Chiều dài và chiều rộng phải là số dương.\n";
        continue;
    }

    // 2. Tính chu vi và diện tích hình chữ nhật.
    $S = $a * $b;
    $P = 2 * ($a + $b);

    // 3. Hiển thị kết quả với đúng hai chữ số thập phân.
    echo "Chu vi hình chữ nhật là: " . number_format($P, 2) . "\n";
    echo "Diện tích hình chữ nhật là: " . number_format($S, 2) . "\n";
    break;
}