-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2019 at 09:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Penpal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name_id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_id`, `city`, `description`, `image`, `date`) VALUES
(1, 1, 'Tokyo', 'This is a wide with supporting text below as a natural lead-in to additional content.', 'Tokyo.jpg', '2019-05-29'),
(13, 1, 'city', 'desc', 'image.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `message`) VALUES
(194, 'Mathieu', 'Test'),
(195, 'Mathieu', 'salut');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mail`, `password`) VALUES
(1, 'maksym', 'maksym.yankivskyypro@gmail.com', '123'),
(5, 'hugues', 'hugues@gmail.com', '1234'),
(6, 'Peter', 'peteryazbeck@gmail.com', '0'),
(7, 'Peter', 'peteryazbeck@gmail.com', '0'),
(8, 'Raph', 'peteryazbeck@gmail.com', '0'),
(9, 'Loris', 'peteryazbeck@gmail.com', '1234'),
(10, 'Peter', 'ra@gmail.com', '1234'),
(11, 'Peter', 'ra@gmail.com', '1234'),
(12, 'Peter', 'caca@gmail.com', '1234'),
(13, 'COUCOU', 'ra@gmail.com', '12'),
(14, 'Raooa', 'gaga@gaga.gaga', '12'),
(15, 'Jolie', 'jolie@jolie.fr', '0'),
(16, 'Aymeric', 'prout@prout.fr', 'aq1f01fd8b0e38254f7d235839cff4217be7fb0b61f25'),
(17, 'prout', 'caca@caca.fr', 'aq14e456eee618189c987f7338eaceaa0bd90831bd125'),
(18, 'test', 'test@test.fr', 'aq100b917fdf09ce34585403a78b2d70fc671b873dc25'),
(19, 'Mathieu', 'mat@mat.fr', 'aq10e760c4252d61809695aafc8b82e05eb3d2ad6cc25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_id` (`name_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`name_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
