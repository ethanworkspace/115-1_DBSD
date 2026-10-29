<?php
// 當按下 Receive Cookie 按鈕時寫入 Cookie 頁面
if (isset($_POST['receive_cookie'])) {
    setcookie("ItemName", "white iPhone", time() + 3600, "/");
    setcookie("Quantity", "10", time() + 3600, "/");
    header("Location: " . $_SERVER['PHP_SELF'] . "?received=1");
    exit();
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>W08-EX04</title>
</head>
<body>
    <h2>W08-EX04</h2>

    <?php
    // 取得並顯示 Cookie 數值
    $itemName = $_COOKIE['ItemName'] ?? (isset($_GET['received']) ? 'white iPhone' : '');
    $quantity = $_COOKIE['Quantity'] ?? (isset($_GET['received']) ? '10' : '');

    if (!empty($itemName) && !empty($quantity)) {
        echo "<p>取得ItemName的Cookie值:" . htmlspecialchars($itemName) . "</p>";
        echo "<p>取得Quantity的Cookie值:" . htmlspecialchars($quantity) . "</p>";
    }
    ?>

    <form method="post" action="">
        <input type="submit" name="receive_cookie" value="Receive Cookie">
    </form>
</body>
</html>