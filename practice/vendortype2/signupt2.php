<?php
            session_start(); // Включаем глобальную переменную



            require_once 'connecting2.php'; //Подключаемся повторно






          //Создаем переменные для хранения данных

          $logint2 = $_POST['logint2'];

          $passwordt2 = $_POST['passwordt2'];

          $password_confirmt2 = $_POST['password_confirmt2'];

          $mailt2 = $_POST['mailt2'];

          $organisationt2 =$_POST['$organisationt2'];




          if ($passwordt2 === $password_confirmt2) //Проверяем правильность пароля

          {
              $path = 'upload/' . time() .$_FILES['photot2']['name']; //Обращение к фотографии для проверки

              if (!move_uploaded_file( $_FILES['photot2']['tmp_name'], '../' . $path)){

                  $_SESSION['message'] = 'Ошибка при загрузке';

                  header('Location: ../registration2.php');
              }

              $passwordt2 = md5($passwordt2);

              mysqli_query ( $connectt2 ,  "INSERT INTO `registrationfull2` 
                
                (`idt2`, `logint2`, `passt2`, `emailt2`, `filet2`, `organizationt2`) 

                VALUES (NULL, '$logint2', '$passwordt2', '$mailt2', '$organisationt2', '$path')");

              $_SESSION['message'] = 'Регистрация прошла успешно'; // Сообщение при успешной регистрации

              header('Location: ../index.php'); //Переход на index.php

          }

          else // Вывод сообщения

              {
                  $_SESSION['message'] = 'Пароли не совпадают'; //Ошибка (пароль не прошел подтверждение)

                  header('Location: ../registration2.php'); // Переход обратно на страничку

              }











          ?>


