-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2017 at 06:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chantryisland`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `g_id` int(10) UNSIGNED NOT NULL,
  `g_img` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `g_credit` varchar(100) NOT NULL,
  `g_title` varchar(100) NOT NULL,
  `g_desc` varchar(800) NOT NULL,
  `g_alt` varchar(50) NOT NULL DEFAULT 'Chantry Island photo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`g_id`, `g_img`, `g_credit`, `g_title`, `g_desc`, `g_alt`) VALUES
(1, 'default1.jpg', 'Mark', 'Shot of bird 1', 'Some info about this bird 1', 'Chantry Island photo'),
(2, 'default2.jpg', 'Amy', 'Shot of bird 2', 'Some info about this bird 2', 'Chantry Island photo'),
(3, 'default3.jpg', 'Luke', 'Shot of bird 3', 'Some info about this bird 3', 'Chantry Island photo'),
(4, 'default4.jpg', 'John', 'Shot of bird 4', 'Some info about this bird 4', 'Chantry Island photo'),
(5, 'default2.jpg', 'Steve Photos Inc.', 'shot of bird', 'yep', 'Chantry Island photo'),
(6, 'default3.jpg', 'Ella', 'great shot!', 'lorem...', 'Chantry Island photo'),
(7, 'default1.jpg', 'Steve Photos Inc.', 'Awesome Shot!', 'Some info about this bird 1', 'Chantry Island photo'),
(8, 'default2.jpg', 'Steve Photos Inc.', 'Bird Photo by Steve Photos Inc', 'This is a great shot of a bird!', 'Chantry Island photo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `g_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
