<?php
function printHeader() {
    echo "<h3>SID: C113181121</h3>";
    echo "<h3>Name: Po-Chen,Kuo</h3>";
    echo "<h3>EX05</h3>";
}

// 主程式執行
printHeader();

$weight = 75;

// 匿名函式：透過 use 引用外部變數 $weight
$bmi = function ($height) use ($weight) {
    $height = $height / 100.0; // 將身高由公分轉換為公尺
    return $weight / $height / $height;
};

$h = 175;
echo "BMI = " . $bmi($h) . "<br/>";
?>