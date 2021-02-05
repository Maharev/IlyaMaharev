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
    <title>Авторизация и регистрация(employeer)</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <!-- Форма авторизациии -->

<form  action="vendor/signup.php" method="post" enctype="multipart/form-data">

       <p class="registrat">Регистрация</p>

    <!------------------Логин------------------------->

    <label >Ваш логин</label>

<input type="text" name="login" placeholder="Придумайте логин">

    <!-------------------Пароль---------------------->

    <label >Пароль</label>

    <input type="password" name="password" placeholder="Придумайте пароль">

    <!--------------------Подтвердить пароль---------------------->

    <label ></label>

    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">


    <?php
    if ($_SESSION['message']){

            echo '<p class="errorpass">' . $_SESSION['message'] . '</p>';}

            unset( $_SESSION['message'])    ?>

    <!---------------------Почта----------------->

    <label >Почта</label>

    <input type="email" name="mail" placeholder="Ваш логин">

    <!-------------------Роль--------------------->

    <input type="radio" class="customer" name="role" value="customer">
    <label class="choice">Я хочу работать</label><br>
    <input type="radio" class="employee" name="role" value="employee">
    <label class="choice">Я хочу нанять</label><br>

    <!-------------------Изображение--------------------->

    <label >Изображение профиля</label>

    <input type="file" name="photo" >

    <!------------------------------------------------>


    <button>Зарегистрироваться</button>


    <p>
        У вас уже есть аккаунт?<a href="index.php" class="inrega">Авторизация</a>
    </p>


</form>


</body>
</html>