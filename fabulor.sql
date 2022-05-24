-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 08:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fabulor`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `uname` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `dt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`uname`, `msg`, `dt`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('Yama Budha', 'hello', '22-05-11 09:30am'),
('Yama Budha', 'can you hear me?', '22-05-11 09:30am'),
('Assraya', 'hi', '22-05-11 09:43am'),
('Assraya', 'ashna', '22-05-11 09:44am'),
('', 'hii', '22-05-11 09:45am'),
('', 'ok', '22-05-11 09:46am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` longtext NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `photo`, `name`, `password`) VALUES
(28, 'new@gmail.com', '', 'newnew', '$2y$10$rl5A.4gnxkX0VgcY2mNph.XpD/OrHEbJnODiET1Csd9Zm1u129fom'),
(29, 'openeye221@gmail.com', '', 'purna thapa', '$2y$10$Dc11LHovpPBaG/ZgnDoJP.N79IvFJy8Jl2ab8fwUUbkYZoCiUr8xa'),
(31, 'omthapa781@gmail.com', '', 'test 1', '$2y$10$FPQFGTd.qx0C1tYqdcyVauvS7RWiaqoRhVwNi4tztcrQT9jCwUXmK'),
(32, 'photocheck@gmail.com', '', 'checker', '$2y$10$rgqhsQZRORlf4LPX4s9KsuYqKqwdX.n/hjT/x3CMwzij71uyBN.XG'),
(33, 'omthapa@gmail.com', '', 'damn bro', '$2y$10$hmeITxjvzmGvas683/4sUuUFKbVQcCDkkoz24t2DAc/XlY/ToDtju'),
(34, 'newne@gmail.com', '', 'TEST USER', '$2y$10$FpPq47UDk1e4BwbAQk5gwOzkVQe9MUIYIi0bUbHhIY0T.bpMEORKK'),
(35, 'nepali@gmail.com', '', 'nepali ho ni', '$2y$10$6huNYbFuxi7jM2INhO6ROOZHtQ.sE9mpJnBuPCQCV6kcBbyHmXK6e'),
(36, 'manaiho@gmail.com', '', 'realme', '$2y$10$J7CbTQRLhwiBghAakREiXeb8.xVDiYn1G.Tsi5wnBIpiG6Ch3.fvm'),
(37, 'yojana@gmail.com', '', 'yojana', '$2y$10$zfDQjZt.yeru6naHS9uWhuQbsN1DhNQ5vE1tnwtN.Tjg1MBhZIzQu'),
(38, 'samyak@gmail.com', '', 'SAMUUUUK', '$2y$10$JbA1X8xxAowKhvje9DjBHOaazJ6f5Rrt60Fkq9y7MzW92dL6kSnS.'),
(39, 'la@gmail.com', '', 'woah', '$2y$10$0bWNWzc97a3t0M/Y9CwyLOnL2POEq6PjgmQjDrasy64naNCEUiWbq'),
(40, 'sakshyam@gmail.com', '', 'SAKSHYAM', '$2y$10$nNt3KLSldBLNzKes/xQlde2rW5HGlKeVLUtanwzA7EKLkuFFlnyZW'),
(41, 'ashraya@gmail.com', '', 'ashraya', '$2y$10$RYPFNru0uunM6b2c7SsuDOaJqH7Erl1uOlHKW.d4rDdK0lbI2Sh3y'),
(42, 'ashrayakarki@gmail.com', '', 'Yama Budha', '$2y$10$ZBy27BHLV2ByzUXnIRn8u.TUGzBOjE5OwQ6NKqq529DURYnXiw1uS'),
(43, 'shreejesh@gmail.com', '', 'shreejesh', '$2y$10$r1NpZkGsvmHeTV5ngMFE/ODvO00OvpSTDGIS5qmioX5hAw4XM/zXO'),
(44, 'test@gmail.com', '', 'testuser100', '$2y$10$WaHbItISWc3A3KaGJolK8O5563Ke3vqMpnOyTMXVMIJGyS.Tj78oC'),
(45, 'test123@gmail.com', '', 'testuser120', '$2y$10$W2quNjSrgt.Uve75.4zL0.BCpzxP5Xeu/b9UO7VqIJdVYPVmmpG6O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
