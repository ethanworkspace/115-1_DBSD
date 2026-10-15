<?php
function printHeader() {
    echo "<h3>SID: C113181121</h3>";
    echo "<h3>Name: Po-Chen,Kuo</h3>";
    echo "<h3>EX02</h3>";
}

function printFooter() {
    echo "<hr><BR>";
    echo "(c) C113181121_Po-Chen,Kuo. All rights reserved.";
}

// 匯率計算函式
function rateExchange($amount, $rate) {
    $result = $amount * $rate;
    return $result;
}

// 主程式執行
printHeader();

$rate = rateExchange(1000, 32.5);
echo "Money: " . $rate;

printFooter();
?>