<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>W08-EX03</title>
</head>
<body>
    <h2>W08-EX03</h2>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <!-- 送出表單後顯示的結果頁面 -->
        <?php
            $id = $_POST['id'];
            $name = $_POST['name'];
        ?>
        <p>SID: <?php echo htmlspecialchars($id); ?></p>
        <p>Name: <?php echo htmlspecialchars($name); ?></p>
        <p>Password: <?php echo htmlspecialchars($_POST['password']); ?></p>

    <?php else: ?>
        <!-- 初始顯示的註冊表單 -->
        <form method="post" action="">
            <p>Name: <br><input type="text" name="name"></p>
            <p>ID: <br><input type="text" name="id"></p>
            <p>Password: <br><input type="password" name="password"></p>
            <p>Password-again: <br><input type="password" name="password_again"></p>
            <p><input type="submit" value="Register User"></p>
        </form>
    <?php endif; ?>
</body>
</html>