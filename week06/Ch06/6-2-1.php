<?php
// 定義印出頁首的函式
function printHeader() {
    echo "<h3>SID: C113181121</h3>";
    echo "<h3>Name: Po-Chen,Kuo</h3>";
    echo "<h3>EX01</h3>";
}

// 定義印出頁尾的函式
function printFooter() {
    echo "<hr><BR>";
    echo "(c) C113181121_Po-Chen,Kuo. All rights reserved.";
}

// 主程式執行
printHeader();
echo "<p>This is a simple PHP page.</p>";
printFooter();
?>