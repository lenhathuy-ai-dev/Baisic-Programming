<?php
/*

1. Đề bài hoàn chỉnh
Viết chương trình PHP chuyển đổi nhiệt độ giữa ba đơn vị:
- Celsius (°C)
- Fahrenheit (°F)
- Kelvin (K)
Yêu cầu chương trình:
1. Nhập một giá trị nhiệt độ thực \(t\) từ bàn phím.
2. Hiển thị menu cho phép chọn đơn vị nhiệt độ đầu vào.
3. Hiển thị menu cho phép chọn đơn vị nhiệt độ đầu ra.
4. Kiểm tra giá trị nhiệt độ có hợp lệ hay không, đặc biệt không được thấp hơn độ không tuyệt đối.
5. Thực hiện phép chuyển đổi giữa các đơn vị đã chọn.
6. Hiển thị kết quả với đúng hai chữ số thập phân.
7. Thông báo lỗi nếu nhập sai giá trị hoặc chọn đơn vị không hợp lệ.

*/

echo "CÔNG CỤ CHUYỂN ĐỔI NHIỆT ĐỘ\n";

// 1. Nhập giá trị nhiệt độ từ bàn phím
while(true){
    $nhietDo = (float)(readline("Nhập giá trị nhiệt độ: "));
    if (!is_numeric($nhietDo)) {
        echo "Giá trị nhập vào không hợp lệ. Vui lòng nhập một số thực.\n";
        continue;
    }

   if (!is_finite($nhietDo)) {
        echo "Giá trị nhập vào không hợp lệ. Vui lòng nhập một số thực hữu hạn.\n";
        continue;
    }

    /// 3. Chọn đơn vị đầu vào
    echo "Chọn đơn vị nhiệt độ đầu vào:\n";
    echo "1. Celsius (°C)\n";
    echo "2. Fahrenheit (°F)\n";
    echo "3. Kelvin (K)\n";
    $donViDauVao = (int)(readline("Nhập lựa chọn (1-3): "));

    echo "Chọn đơn vị nhiệt độ đầu ra:\n";
    echo "1. Celsius (°C)\n";
    echo "2. Fahrenheit (°F)\n";
    echo "3. Kelvin (K)\n";

    $donViDauRa = (int)(readline("Nhập lựa chọn (1-3): "));
     /// Kiểm tra lựa chọn
    if ($donViDauVao < 1 || $donViDauVao > 3 || $donViDauRa < 1 || $donViDauRa > 3) {
        echo "Lựa chọn đơn vị không hợp lệ. Vui lòng chọn lại.\n";
        continue;
    }   

    /// Kiểm tra tính hợp lệ nhiệt độ
    if ($donViDauVao == 1 && $nhietDo < -273.15) {
        echo "Nhiệt độ không hợp lệ. Nhiệt độ Celsius không thể thấp hơn -273.15°C.\n";
        continue;
    } elseif ($donViDauVao == 2 && $nhietDo < -459.67) {
        echo "Nhiệt độ không hợp lệ. Nhiệt độ Fahrenheit không thể thấp hơn -459.67°F.\n";
        continue;
    } elseif ($donViDauVao == 3 && $nhietDo < 0) {
        echo "Nhiệt độ không hợp lệ. Nhiệt độ Kelvin không thể thấp hơn 0K.\n";
        continue;
    }

    /// Thực hiện chuyển đổi nhiệt độ
    $ketQua = 0;
    switch ($donViDauVao) {
        case 1: // Celsius
            if ($donViDauRa == 1) {
                $ketQua = $nhietDo; // Celsius to Celsius
            } elseif ($donViDauRa == 2) {
                $ketQua = ($nhietDo * 9/5) + 32; // Celsius to Fahrenheit
            } elseif ($donViDauRa == 3) {
                $ketQua = $nhietDo + 273.15; // Celsius to Kelvin
            }
            break;
        case 2: // Fahrenheit
            if ($donViDauRa == 1) {
                $ketQua = ($nhietDo - 32) * 5/9; // Fahrenheit to Celsius
            } elseif ($donViDauRa == 2) {
                $ketQua = $nhietDo; // Fahrenheit to Fahrenheit
            } elseif ($donViDauRa == 3) {
                $ketQua = ($nhietDo - 32) * 5/9 + 273.15; // Fahrenheit to Kelvin
            }
            break;
        case 3: // Kelvin
            if ($donViDauRa == 1) {
                $ketQua = $nhietDo - 273.15; // Kelvin to Celsius
            } elseif ($donViDauRa == 2) {
                $ketQua = ($nhietDo - 273.15) * 9/5 + 32; // Kelvin to Fahrenheit
            } elseif ($donViDauRa == 3) {
                $ketQua = $nhietDo; // Kelvin to Kelvin
            }
            break;
    }
    echo "Kết quả chuyển đổi: $ketQua\n";
    break;
    
}