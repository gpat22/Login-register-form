-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 06:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login-register-form`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `password`, `cpassword`) VALUES
('gayatri_p', 'gpatkar0122@gmail.co', '5cb313e0163cccde2555', ''),
('gayatri_p', 'gpatkar0122@gmail.co', '5cb313e0163cccde2555', ''),
('gayatri_p', 'gpatkar0122@gmail.co', '5cb313e0163cccde2555', ''),
('gayatri_p', 'gpatkar0122@gmail.co', '5cb313e0163cccde2555', ''),
('gayatri_p', 'gpatkar0122@gmail.co', '34eace700b79730481c1', ''),
('gayatri_p', 'gpatkar0122@gmail.co', '34eace700b79730481c1', ''),
('yash', 'yash222@gmail.com', 'c296539f3286a899d8b3', 'c296539f3286a899d8b3'),
('yash', 'yash222@gmail.com', 'c296539f3286a899d8b3', 'c296539f3286a899d8b3'),
('yash', 'yash222@gmail.com', 'c296539f3286a899d8b3', 'c296539f3286a899d8b3'),
('hina', 'hina04@gmail.com', 'hina', 'hina'),
('usha', 'usha04@gmail.com', 'usha', 'usha'),
('usha', 'gpatkar0122@gmail.co', 'usha', 'usha'),
('jack', 'jacksparrow@gmail.co', 'jack', 'jack'),
('mona', 'monali123@gmail.com', 'mona', 'mona'),
('mona', 'monali123@gmail.com', 'mona', 'mona'),
('mona', 'monali123@gmail.com', 'mona', 'mona');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(9682, 'jack', 'jacksparrow'),
(2147483647, 'devika', 'devika'),
(2147483647, 'klea', 'harvest');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
