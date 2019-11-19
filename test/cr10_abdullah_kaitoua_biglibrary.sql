-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 01:08 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_abdullah_kaitoua_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_abdullah_kaitoua_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_abdullah_kaitoua_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(13) NOT NULL,
  `name` varchar(29) DEFAULT NULL,
  `surname` varchar(55) DEFAULT NULL,
  `biography` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `name`, `surname`, `biography`) VALUES
(1, 'Russel', 'Deniss', 'A biography, or simply bio, is a detailed description of a person\'s life. It involves more than just the basic facts like education, work, relationships, and death; it portrays a person\'s experience of these life events.'),
(2, 'Sarah', 'Pink', 'A biography, or simply bio, is a detailed description of a person\'s life. It involves more than just the basic facts like education, work, relationships, and death; it portrays a person\'s experience of these life events.'),
(3, 'Francisco', 'Moreno', 'A biography, or simply bio, is a detailed description of a person\'s life. It involves more than just the basic facts like education, work, relationships, and death; it portrays a person\'s experience of these life events.'),
(4, 'Andy', 'Secret', 'A biography, or simply bio, is a detailed description of a person\'s life. It involves more than just the basic facts like education, work, relationships, and death; it portrays a person\'s experience of these life events.'),
(5, 'Mate', 'Green', 'A biography, or simply bio, is a detailed description of a person\'s life. It involves more than just the basic facts like education, work, relationships, and death; it portrays a person\'s experience of these life events.');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(13) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `img` varchar(180) DEFAULT NULL,
  `isbn` int(12) DEFAULT NULL,
  `short_description` varchar(500) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `genre` varchar(15) DEFAULT NULL,
  `availability` varchar(15) DEFAULT 'Available',
  `FK_publisher` int(10) DEFAULT NULL,
  `FK_author` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `title`, `img`, `isbn`, `short_description`, `publish_date`, `type`, `genre`, `availability`, `FK_publisher`, `FK_author`) VALUES
(4, 'i wish you were here', 'img/book1.png', 33790764, 'A short description is text that briefly introduces and describes a topic. ... The DITA short description is one device to achieve &quot;progressive disclosure&quot; in topic-based writing, in the sense that title expands to short description, which expands to the topic itself as a user drills into information.', '2017-06-15', 'book', 'drama', 'Available', 2, 1),
(6, 'Story of My love', 'img/book1.png', 24326644, 'Story, psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', '2019-07-03', 'book', 'romance', 'Available', 4, 2),
(9, 'The Jungle', 'img/dv.png', 4432425, 'Jungle adventures psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', '2017-02-01', 'dvd', 'adventure', 'Available', 4, 4),
(10, 'Hola, hola!', 'img/book1.png', 2345366, 'Viola psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', '1999-07-22', 'dvd', 'romance', 'Available', 4, 1),
(11, 'The Walking dead', 'img/book1.png', 25346, 'psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation,psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', '2019-07-12', 'dvd', 'horror', 'Available', 3, 1),
(12, 'The Team', 'img/book1.png', 24325646, 'A short description is text that briefly introduces and describes a topic. ... The DITA short description is one device to achieve &quot;progressive disclosure&quot; in topic-based writing, in the sense that title expands to short description, which expands to the topic itself as a user drills into information.', '2019-07-02', 'dvd', 'horror', 'Available', 3, 5),
(13, 'Melody', 'img/mu.png', 1125349, 'Melody psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation,psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .', '2017-01-19', 'cd', 'rock', 'Available', 4, 3),
(14, 'Monyball', 'img/dv.png', 4432633, 'psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation, psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', '2016-06-18', 'dvd', 'sport', 'Available', 1, 3),
(16, 'Reload', 'img/book1.png', 3432543, 'Reload, psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation, psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', '1998-03-11', 'book', 'drama', 'Available', 2, 5),
(17, 'call me david', 'img/mu.png', 24325646, 'A short description is text that briefly introduces and describes a topic. ... The DITA short description is one device to achieve \"progressive disclosure\" in topic-based writing, in the sense that title expands to short description, which expands to the topic itself as a user drills into information.', '2019-07-25', 'cd', 'romance', 'Available', 3, 3),
(20, 'the little prince', 'img/book1.png', 435435, 'A pilot, stranded in the desert, meets a little boy who is a prince on a planet. Based on the story by Antoine de Saint-Exupery, this magical musical fable begins as a pilot makes a forced landing on the barren Sahara Desert. He is befriended by a &quot;little&quot; prince from the planet Asteroid B-612.', '2005-01-05', 'book', 'adventure', 'Available', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(13) NOT NULL,
  `name` varchar(29) DEFAULT NULL,
  `addresse` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `name`, `addresse`) VALUES
(1, 'AustrianBook', 'newStreet 45, Vienna'),
(2, 'GermanyBook', 'neuenStrasse 23, Berlin'),
(3, 'AmericanBook', 'evergreenterace 122a, New York'),
(4, 'RussianBook', 'larzha 44, Moskow');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `role`) VALUES
(1, 'eilia', 'eilia@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'user'),
(2, 'Abdullah', 'abdullah@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `FK_author` (`FK_author`),
  ADD KEY `FK_publisher` (`FK_publisher`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`FK_author`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`FK_publisher`) REFERENCES `publisher` (`publisher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
