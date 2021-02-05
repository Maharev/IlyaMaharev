<?php
    include('global.php');
    session_start();
            require_once 'connecting.php';


  //_______________________________________________________________________________________________________________________________________________________//
 //                                                                   Блок для первой аутентификации                                                      //
//-------------------------------------------------------------------------------------------------------------------------------------------------------//





                $login = $_POST ['login']; //Проверка логина

                $password = md5($_POST ['pass']); //Проверка пароля

                $check_user = mysqli_query($connect, "SELECT * FROM `registrationfull` WHERE `login` ='$login' AND `pass` = '$password'"); //Обращение к базе данных



                $otvet = mysqli_num_rows($check_user);





                 if ($otvet > 0) { //Проверка на кол-во строк с похожими данными из таблицы registrationfull
                     $user = mysqli_fetch_assoc($check_user) ;
                     $_SESSION['user'] = [
                    "id" => $user ['id'],
                   "login" => $user ['login'],
                    "file" => $user['file'],
                    "email" => $user['email']
                ];
                     if ($user['role'] == USER_TYPE_CUSTOMER) {
                         header('Location: ../profile.php');
                     } elseif ($user['role'] == USER_TYPE_EMPLOYEE) {
                         header('Location: ../profile2.php');
                     }
                 } else {
                     $_SESSION['message1'] = 'Не верный логин или пароль'; //Вывод сообщение об неправильно введенной информации

                     header('Location: ../index.php');
                 }
