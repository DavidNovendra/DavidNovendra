-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 01:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zenflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `tittles` varchar(100) DEFAULT NULL,
  `typef` varchar(100) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `director` varchar(200) DEFAULT NULL,
  `stars` varchar(200) DEFAULT NULL,
  `tahun` char(4) DEFAULT NULL,
  `cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `tittles`, `typef`, `genre`, `director`, `stars`, `tahun`, `cover`) VALUES
(1, 'Red Notice', 'Film', 'Action, Comedy, Crime, Thriller', 'Rawson Marshall Thurber', 'Dwayne Johnson, Gal Gadot, Ryan Reynolds', '2021', 'red1.jpeg'),
(2, 'Army of Thieves', 'Film', 'Action, Adventure, Crime, Horror,', 'Matthias Schweighöfer', 'Matthias Schweighöfer, Nathalie Emmanuel, Ruby O. Fee', '2021', 'army.jpeg'),
(5, 'Free Guy', 'Film', 'Action, Adventure, Comedy, Science Fiction, Slider', 'Josh McLaglen', 'Jodie Comer, Ryan Reynolds, Taika Waititi', '2021', 'guy.jpeg'),
(6, 'Victoria', 'Tv Shows', 'Comedy, Family', 'Ural Safin', 'Dmitriy Miller, Maksim Shchyogolev, Vitaliya Kornienko', '2020', 'vict.jpeg'),
(7, 'Monster Family', 'Tv Shows', 'Adventure, Animation, Comedy, Family, Fantasy, Science Fiction', 'Holger Tappe', 'Emily Watson, Jason Isaacs, Nick Frost', '2017', 'hpfl.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'bizer', 'bhizer@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(9, 'dave', 'dave@gmail.com', '8eb9fb06867d1240fef7a8cb8af4079a'),
(10, 'dave', 'dave1@gmail.com', '479a7c6866f00e1c35c97272e18b3739');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
