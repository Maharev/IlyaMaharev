<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="style/menu.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <img src="<?= $_SESSION['user']['file'] ?>" width="100" alt=" ">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['login'] ?></h2>
        <p href="#"><?= $_SESSION['user']['email'] ?></p>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>