<?php

/*
Nhập tên sản phẩm, đơn giá, số lượng, tỷ lệ giảm giá và thuế suất.

Chương trình tính:
- Tổng tiền hàng trước giảm giá.
- Số tiền được giảm.
- Thành tiền sau giảm.
- Tiền thuế.
- Tổng tiền khách phải trả.
Hiển thị hóa đơn có định dạng tiền tệ và kiểm tra số lượng, đơn giá, tỷ lệ giảm giá hợp lệ.
*/

echo "CHƯƠNG TRÌNH TÍNH HÓA ĐƠN MUA HÀNG\n";
$tenSP = readline("Nhập tên sản phẩm: ");
$donGia = (float)readline("Nhập đơn giá (VNĐ): ");
$sls = (int)readline("Nhập số lượng: ");
$tyleGiamGia = (float)readline("Nhập tỷ lệ giảm giá (%): ");
$thueSuat = (float)readline("Nhập thuế suất (%): ");

$tongSoTienHang = $donGia * $sls;
$soTienGiam = $tongSoTienHang * ($tyleGiamGia / 100);
$thanhTienSauGiam = $tongSoTienHang - $soTienGiam;
$tienThue = $thanhTienSauGiam * ($thueSuat / 100);
$tongTienKhachPhaiTra = $thanhTienSauGiam + $tienThue;

echo "\nHÓA ĐƠN MUA HÀNG\n";
echo "Tên sản phẩm: $tenSP\n";
echo "Đơn giá: " . number_format($donGia, 0, ',', '.') . " VNĐ\n";
echo "Số lượng: $sls\n";
echo "Tổng tiền hàng trước giảm giá: " . number_format($tongSoTienHang
, 0, ',', '.') . " VNĐ\n";
echo "Số tiền được giảm: " . number_format($soTienGiam, 0, ',', '.') . " VNĐ\n";
echo "Thành tiền sau giảm: " . number_format($thanhTienSauGiam, 0, ',', '.') . " VNĐ\n";
echo "Tiền thuế: " . number_format($tienThue, 0, ',', '.') . " VNĐ\n";
echo "Tổng tiền khách phải trả: " . number_format($tongTienKhachPhaiTra, 0, ',', '.') . " VNĐ\n";   
