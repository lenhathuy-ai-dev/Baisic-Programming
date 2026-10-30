<?php

echo "CÔNG CỤ TÍNH BMI (Body Mass Index)\n";
$cannang = readline("Nhập cân nặng (kg): ");
$chieucao = readline("Nhập chiều cao (m): ");
$bmi = $cannang / ($chieucao * $chieucao);
echo "Chỉ số BMI của bạn là: " . round($bmi, 2) . "\n"; 