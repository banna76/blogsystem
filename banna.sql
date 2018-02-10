-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 10:00 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banna`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userid` tinyint(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `body`, `author`, `userid`, `timestamp`) VALUES
(1, 'Object-oriented programming', 'Object-oriented programming (OOP) is a programming paradigm based on the concept of Object-oriented programming (OOP) is a programming paradigm based on the concept of Object-oriented programming (OOP) is a programming paradigm based on the concept of Object-oriented programming (OOP) is a programming paradigm based on the concept of Object-oriented programming (OOP) is a programming paradigm based on the concept of Object-oriented programming (OOP) is a programming paradigm based on the concept of Object-oriented programming (OOP) is a programming paradigm based on the concept of ', 'banna', 1, '2018-02-10 18:34:52'),
(2, 'Mickey Mouse ', 'Mickey Mouse Mickey Mouse is a funny animal cartoon character and the mascot of The Walt Disney Company. He was created by Walt Disney and Ub Iwerks at the Walt Disney Studios in 1928. ', 'admin', 2, '2018-02-10 19:07:31'),
(3, 'Wikipedia', 'Tropical Depression Ten was a precursor of Hurricane Katrina during the record-breaking 2005 Atlantic hurricane season. It formed on August 13 from a tropical wave off the west coast of Africa, but the depression faced strong wind shear and remained weak. By August 14, it no longer met the criteria for a tropical cyclone, and the National Hurricane Center issued their final advisory on it. Moving westward, the storm produced occasional bursts of atmospheric convection. By August 18, only a remnant mid-level circulation persisted. This merged with a second tropical wave on August 23 to form Tropical Depression Twelve, which grew into Katrina, the third most intense tropical cyclone ever to make landfall in the United States. Katrina was the costliest US disaster until Hurricane Harvey in 2017, and one of the deadliest Atlantic hurricanes, causing severe destruction along the Gulf Coast from central Florida to Texas, much of it due to storm surge and levee failure. At least 1,245 people died in the hurricane and ', 'banna', 1, '2018-02-10 18:35:05'),
(6, 'Mickey Mouse ', 'Mickey Mouse is a funny animal cartoon character and the mascot of The Walt Disney Company. ', 'admin', 2, '2018-02-10 19:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `password`, `role`) VALUES
(1, 'banna', 'banna', 0),
(2, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
