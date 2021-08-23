-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 02:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `image`, `description`, `price`, `location`, `date`, `user_id`) VALUES
(1, 'https://www.afrizap.com/en/wp-content/uploads/sites/2/2015/01/snow10.jpg', 'hery', 45, 'Kam Pot', '2021-08-25 07:24:00', 1),
(48, 'korean.jpg', 'South Korea, an East Asian nation on the southern half of the Korean Peninsula, shares one of the world’s most heavily militarized borders with North Korea. It’s equally known for its green, hilly countryside dotted with cherry trees and centuries-old Buddhist temples, plus its coastal fishing villages, sub-tropical islands and high-tech cities such as Seoul.', 100, 'Korean', '2021-08-22 14:16:50', 1),
(49, 'temple.jpg', 'Angkor Wat, located in northwest Cambodia, is the largest religious structure in the world by land area, measuring 162.6 hectares. At the centre of the temple stands a quincunx of four towers surrounding a central spire that rises to a height of 65 m above the ground.', 200, 'Cambodia', '2021-08-22 20:46:17', 1),
(50, 'japan.jpg', 'Osaka Castle is a Japanese castle in Chūō-ku, Osaka, Japan. The castle is one of Japans most famous landmarks and it played a major role in the unification of Japan during the sixteenth century of the Azuchi-Momoyama period.', 50, 'Japan', '2021-08-22 20:48:57', 1),
(51, 'building.jpg', 'I like there so much', 10, 'France', '2021-08-22 20:52:17', 1),
(56, 'paris.jpg', 'sdfghjhgfdsasvbn', 20, 'France', '2021-08-22 23:50:26', 1),
(57, 'download.jng', 'asdfghjwertjk', 12, 'Korean', '2021-08-22 23:54:52', 1),
(60, 'sea.jpg', 'I like', 30, 'Cambodia', '2021-08-23 17:54:24', 1),
(61, 'paris.jpg', 'I like to visit there', 20, 'France', '2021-08-23 18:03:52', 1),
(62, 'temple.jpg', 'temple', 23, 'Cambodia', '2021-08-23 18:07:30', 1),
(63, 'japan.jpg', 'It so cute', 30, 'Cambodia', '2021-08-23 18:42:26', 1),
(64, 'panda.jpg', 'It so cute', 10, 'Korean', '2021-08-23 18:44:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'Molika', '123'),
(2, 'Molika', '123');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `visitor_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `post` (`post_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
