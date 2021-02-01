<?php

    session_start();
            include 'connecting.php';

$login = $_POST ['login']; //Проверка логина

$password = md5($_POST ['pass']); //Проверка пароля

    $check_user = mysqli_query  ($connect, "SELECT * FROM `registrationfull` WHERE `login` ='$login' AND `pass` = '$password'"); //Обращение к базе данных

               // echo mysqli_num_rows($check_user);

$otvet = mysqli_num_rows($check_user);





                 if ($otvet > 0)
            {
                $user = mysqli_fetch_assoc($check_user) ;
                $_SESSION['user'] = [
                    "id" => $user ['id'],
                   "login" => $user ['login'],
                    "file" => $user['file'],
                    "email" => $user['email']
                ];

                header('Location: ../profile.php');
            }

            else {
                $_SESSION['message'] = 'Не верный логин или пароль'; //Вывод сообщение об неправильно введенной информации

                header('Location: ../index.php');
            }
?>


