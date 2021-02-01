<?php


$connect = mysqli_connect('localhost', 'Sadovnick', '', 'bdusers');

if (!$connect) {
    die('Ошибка!!!');
}