<?php
function printHeader() {
    echo "<h3>SID: C113181121</h3>";
    echo "<h3>Name: Po-Chen,Kuo</h3>";
    echo "<h3>EX03</h3>";
}

function printFooter() {
    echo "<hr><BR>";
    echo "(c) C113181121_Po-Chen,Kuo. All rights reserved.";
}

// 計算體積的函式（包含預設參數 $w=10, $h=15）
function volume($l, $w = 10, $h = 15) {
    return $l * $w * $h;
}

// 主程式執行
printHeader();

$func = "volume"; // 變數函式

$l = 10;
$w = 20;
$h = 30;

// 1. 傳入三個參數：10 * 20 * 30 = 6000
echo "盒子體積:" . $func($l, $w, $h) . "<br/>";

// 2. 傳入兩個參數（$h 使用預設值 15）：10 * 20 * 15 = 3000
echo "盒子體積:" . $func($l, $w) . "<br/>";

// 3. 傳入一個參數（$w 使用預設值 10、$h 使用預設值 15）：10 * 10 * 15 = 1500
echo "盒子體積:" . $func($l) . "<br/>";

printFooter();
?>