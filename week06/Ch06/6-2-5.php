<?php
function printHeader() {
    echo "<h3>SID: C113181121</h3>";
    echo "<h3>Name: Po-Chen,Kuo</h3>";
    echo "<h3>EX04</h3>";
}

// 主程式執行
printHeader();

$test = 15;
var_dump($test); // 輸出 int(15)

unset($test);   // 銷毀變數 $test
var_dump($test); // 輸出 Warning 警告與 NULL
?>