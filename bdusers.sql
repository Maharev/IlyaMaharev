-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 01 2021 г., 15:19
-- Версия сервера: 8.0.18
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bdusers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `registrationfull`
--

CREATE TABLE `registrationfull` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pass` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `registrationfull`
--

INSERT INTO `registrationfull` (`id`, `login`, `pass`, `email`, `file`) VALUES
(29, 'Sadovnich', '202cb962ac59075b964b07152d234b70', '123@mail.ru', 'upload/1611064313'),
(30, 'test', '202cb962ac59075b964b07152d234b70', 'tata@mail.ru', 'upload/1611078839'),
(31, 'Sadovnich1', '698d51a19d8a121ce581499d7b701668', 'tutu@mail.ru', 'upload/1611253197'),
(32, '123r', '202cb962ac59075b964b07152d234b70', '1234@mail.ru', 'upload/1611253684'),
(33, 'Gotrans', '202cb962ac59075b964b07152d234b70', 'tutu22@mail.ru', 'upload/1611254679VVXISig-u74.jpg'),
(34, 'gatot', '202cb962ac59075b964b07152d234b70', 'tutu22231@mail.ru', 'upload/1612183573');

-- --------------------------------------------------------

--
-- Структура таблицы `registrationfull2`
--

CREATE TABLE `registrationfull2` (
  `id` int(11) NOT NULL,
  `login` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pass` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `organization` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `registrationfull`
--
ALTER TABLE `registrationfull`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `registrationfull2`
--
ALTER TABLE `registrationfull2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `registrationfull`
--
ALTER TABLE `registrationfull`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `registrationfull2`
--
ALTER TABLE `registrationfull2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
