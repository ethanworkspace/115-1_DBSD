<?php
function printHeader() {
    echo "<h3>SID: C113181121</h3>";
    echo "<h3>Name: Po-Chen,Kuo</h3>";
    echo "<h3>EX06</h3>";
}

// 接收閉包/函式的執行函式
function callFunc1($closure) {
    $closure();
}

// 使用 callable 型態提示限定參數必須可被呼叫
function callFunc2(callable $callback) {
    $callback();
}

// 主程式執行
printHeader();

// 1. 匿名函式
$hello = function () {
    echo "Hello, World!<br/>";
};

// 2. 一般函式
function hi() {
    echo "Hi, World!<br/>";
}

// 執行呼叫
callFunc1($hello); // 輸出 Hello, World!
callFunc2("hi");    // 輸出 Hi, World!
callFunc2($hello); // 輸出 Hello, World!
?>