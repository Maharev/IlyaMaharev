<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <!-- Форма авторизациии -->
<form  action="vendor/signin.php" method="post">
       <p class="voyti">Авторизация</p>
    <!------------------------------------------------>
    <label >Логин</label>

<input type="text" placeholder="Ваш логин" name="login">
    <!------------------------------------------------>
    <label >Пароль</label>

<input type="password" placeholder="Ваш пароль" name="pass">
    <!------------------------------------------------>
    <a href="">Забыли пароль?</a>

    <button type="submit">Войти</button>

    <p>
            Нет аккаунта? <a href="choice.php" class="inreg">Быстрая регистрация</a>
    </p>
<p class="noproblem">
    <?php
    if ($_SESSION['message']){

        echo '<p class="noproblem">' . $_SESSION['message'] . '</p>';}

    unset( $_SESSION['message'])    ?>
</p>
</form>


</body>
</html>