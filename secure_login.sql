-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Време на генериране: 
-- Версия на сървъра: 5.5.32
-- Версия на PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `secure_login`
--
CREATE DATABASE IF NOT EXISTS `secure_login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `secure_login`;

-- --------------------------------------------------------

--
-- Структура на таблица `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(5, '1393913243');

-- --------------------------------------------------------

--
-- Структура на таблица `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `Score` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Схема на данните от таблица `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`, `Score`) VALUES
(1, 'test_user', 'test@example.com', '00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc', 'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef', 262),
(2, 'test', 'test2@gmail.com', 'f3c059b217b4632ca3bb22678d5e771989fdc098a1eacb5bf7f3ade6eeaaabb4d6de79d885c22ebf29a144c2e73178a488f0c02d26eb99f6d2597d58dff09d54', 'd533f82f79cbc4f72e9d67eaf10a4953ff00d30806492a52b71f0b484b08feea7da96e2a986479714a90eccde556993f345ca1d65e0632e6f3b4d068a590ad12', 262),
(3, 'vasko', 'vasko@vasko.com', '44540788a19387eaf963cc2024b572e4a526d49cb4a508477c830516e0230eb84bf621974529ed7abb3b78b4e2d6d0a31711082b281ebe6d7476bf86172010d3', 'e74703bdf4027aee411d93b1f868fface727c4445a972dd49a30bcbb234ecd7599c81886d8ef4e589c7fbfc10ff931c5841ff89f3c81ba226a4bb5e8083a4bb5', 262);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
