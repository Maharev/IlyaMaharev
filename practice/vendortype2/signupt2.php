<?php

session_start();
include 'connecting.php'; /* Подключение переменной, которая содержит подключение*/


//Отдельные переменные

$logint2 = $_POST ['login'];

$passwordt2 = $_POST ['password'];

$password_confirmt2 = $_POST ['password_confirm'];

$mailt2 = $_POST ['mail'];

$organizationt2 = $_POST ['organization'];

if($passwordt2 === $password_confirmt2) //Создаем условие правильности пароля
{
    $patht2 = 'upload/' . time() .$_FILES['photo']['name'];

    if(!move_uploaded_file($_FILES['photo']['tmp_name'], '../' . $patht2)) //Создаем условия для проверки целосности и подлености файла
    {
        $_SESSION['message'] = 'Ошибка при загрузке'; //Вывод сообщение об ошибке загрузки файла

        header('Location: ../registration.php'); //Переход обратно на страницу с выводом сообщения
    }

    $passwordt2 = md5($passwordt2);



    mysqli_query ( $connect ,  "INSERT INTO `registrationfull2` 
            
            (`id`, `login`, `pass`, `email`, `file`, `organization`) 
            
            VALUES (NULL, '$logint2', '$passwordt2', '$mailt2', '$patht2', '$organizationt2')");
    $_SESSION['message'] = 'Регистрация прошла успешно';

    header('Location: ../index.php');

}

else {
    $_SESSION['message'] = 'Пароли не совпадают'; //Вывод сообщения о неправильном пароле

    header('Location: ../registration2.php'); // Переход обратно на страницу с выводом сообщения
}

?>
