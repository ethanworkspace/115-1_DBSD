<?php
// 設定 Cookie (名稱, 內容, 過期時間, 作用路徑)
setcookie("ItemName", "white iPhone", time() + 3600, "/");
setcookie("Quantity", "10", time() + 3600, "/");

// 設定成功後自動跳轉至接收頁面
header("Location: w08_ex04.php");
exit();
?>