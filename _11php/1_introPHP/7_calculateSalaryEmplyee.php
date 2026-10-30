<?php

echo "CÔNG CỤ TÍNH LƯƠNG\n";

$luongcoban = (float)readline("Nhập lương cơ bản: ");
$songaylamviec = (int)readline("Nhập số ngày làm việc: ");
$ngaytieuchuan = (int)readline("Nhập số ngày tiêu chuẩn: ");
$thuong = (float)readline("Nhập số tiền thưởng: ");

$luong = ($luongcoban * $songaylamviec / $ngaytieuchuan) + $thuong;

echo "Lương của nhân viên là: " . number_format($luong, 2) . " VND\n";
