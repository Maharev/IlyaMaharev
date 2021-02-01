<?php

            session_start();
            include 'connecting.php'; /* Подключение переменной, которая содержит подключение*/


    //Отдельные переменные

    $login = $_POST ['login'];

    $password = $_POST ['password'];

    $password_confirm = $_POST ['password_confirm'];

    $mail = $_POST ['mail'];

    if($password === $password_confirm) //Создаем условие правильности пароля
    {
        $path = 'upload/' . time() .$_FILES['photo']['name'];

        if(!move_uploaded_file($_FILES['photo']['tmp_name'], '../' . $path)) //Создаем условия для проверки целосности и подлености файла
        {
            $_SESSION['message'] = 'Ошибка при загрузке'; //Вывод сообщение об ошибке загрузки файла

            header('Location: ../registration.php'); //Переход обратно на страницу с выводом сообщения
        }

        $password = md5($password);



        mysqli_query ( $connect ,  "INSERT INTO `registrationfull` 
            
            (`id`, `login`, `pass`, `email`, `file`) 
            
            VALUES (NULL, '$login', '$password', '$mail', '$path')");
        $_SESSION['message'] = 'Регистрация прошла успешно';

        header('Location: ../index.php');

    }

    else {
          $_SESSION['message'] = 'Пароли не совпадают'; //Вывод сообщения о неправильном пароле

          header('Location: ../registration.php'); // Переход обратно на страницу с выводом сообщения
    }

    ?>


