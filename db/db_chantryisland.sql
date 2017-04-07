-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2017 at 06:46 PM
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
(9, 'ChantryBirds1.JPG', 'Picture by Carol Walberg', 'Bird on Chantry Island', '', 'Chantry Island photo'),
(10, 'ChantryBirds2.JPG', 'Picture by Carol Walberg', 'Bird on Chantry Island', '', 'Chantry Island photo'),
(11, 'ChantryIsland1.JPG', 'Picture by Carol Walberg', 'Photo of Chantry Island', '', 'Chantry Island photo'),
(12, 'ChantryIsland2.JPG', 'Picture by Carol Walberg', 'Photo of Chantry Island', '', 'Chantry Island photo'),
(13, 'PeerlessIITourBoat.png', 'Picture by Gale Douglass', '', '', 'Chantry Island boat tour'),
(15, 'ChantryIslandinside2.jpg', 'Picture by James Swartz', '', '', 'Chantry Island photo'),
(16, 'ChantryIslandinside3.jpg', 'Picture by James Swartz', '', '', 'Chantry Island photo'),
(17, 'ChantryIslandfromplane.jpg', 'Picture by James Swartz', '', '', 'Chantry Island photo'),
(18, 'Southampton1.jpg', 'Picture by Karen Smith', '', '', 'Chantry Island photo'),
(19, 'Southampton2.jpg', 'Picture by Karen Smith', '', '', 'Chantry Island photo'),
(20, 'ChantryIslandaerial4.jpg', 'Picture by Karen Smith', '', '', 'Chantry Island photo'),
(23, 'ChantryIslandaerial1.jpg', 'Picture by Karen Smith', '', '', 'Chantry Island photo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `setting_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site`
--

CREATE TABLE `tbl_site` (
  `page_id` smallint(5) UNSIGNED NOT NULL,
  `about_title` varchar(100) NOT NULL,
  `about_Subtitle` varchar(300) NOT NULL,
  `about_p` varchar(2500) NOT NULL,
  `restore_title` varchar(100) NOT NULL,
  `restore_Subtitle` varchar(300) NOT NULL,
  `restore_p` varchar(2000) NOT NULL,
  `lighthouse_p` varchar(2000) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_Subtitle` varchar(300) NOT NULL,
  `book_p` varchar(2000) NOT NULL,
  `meet_p` varchar(1000) NOT NULL,
  `tour_year` varchar(10) NOT NULL,
  `book_rates` varchar(500) NOT NULL,
  `gallery_p` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site`
--

INSERT INTO `tbl_site` (`page_id`, `about_title`, `about_Subtitle`, `about_p`, `restore_title`, `restore_Subtitle`, `restore_p`, `lighthouse_p`, `book_title`, `book_Subtitle`, `book_p`, `meet_p`, `tour_year`, `book_rates`, `gallery_p`) VALUES
(1, 'about chantry island', 'Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario.', 'On the island is a majestic Imperial Lighthouse built in the mid 1800s, as w ell as the Keepers quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened the island and named it after his friend and British sculptor Sir Francis Chantry.<br><br>Chantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes. There are over 50 known shipwrecks around the island and there are many accounts from the 1800s and early - mid 1900s of these disasters and lost lives. Today, buoys and modern navigational tools safely guide boats through the area.<br><br>The island varies in size depending on the level of Lake Huron. Today, with a low lake level Chantry Island is about 68 acres. In 1986 when the water level was at the highest of the century, the island was only about 10 acres, causing trees on the west, north and south sides to drown.', 'THE RESTORATION', 'For almost 100 years (1859 - 1954), light keepers lived on the island to keep the light burning for mariners on the lake. ', 'When the lighthouse lamp was converted to electricity in 1954, a light keeper was no longer needed. The buildings were left neglected and suffered at the hands of vandals. The lighthouse still stood intact, but little was left of the light keepers quarters. The roof had fallen in and the walls and floors had crumbled into a pile of rubble in the basement.  In 1997, the local Marine Heritage Society established specific goals for the islands restoration. The project was to be funded with donations and fundraising efforts, and the majority of the work was to be done by volunteers. With permission from 5 levels of government, the group of volunteers began to rebuild the light keepers cottage, using the original structure plans.  The Light Keeper''s Cottage restoration was completed in 2001. Over 250 volunteers put in more than 300,000 hours of labor to finish the restoration and ready the boat for tours. Since 2001 volunteers have restored the staircase of the lighthouse, built a boathouse on the island, constructed a replica of the original boat (which sits in the boathouse) and reconstructed the privy.  Today the tour is operated with over 125 volunteers, whose jobs include island housekeepers, gardeners, tour boat captains, crew and tour guides, and gift shop sales and service personnel. Volunteers also install the portable walkways and docks every spring and remove them every fall. To date, there have been over 12,000 visitors to the island. ', 'During the mid 1800s water traffic on the Great Lakes had substantially increased and the colonial government called for improved navigational tools for the mariners on the Lake Huron. John Brown of Thorold was contracted to build the lighthouse on Chantry Island, as well as 10 other lighthouses to help sailors navigate the Lake. Because of the expense and difficulty of building, only six were completed. The Chantry Island Lighthouse was one of these completed and it was lit on April 1, 1859.  The lighthouse stands 86 ft. above water level and is 80 ft. high from its base to the lights center. The lantern room of the lighthouse was fitted with a Fresnel lens built and transported from Paris, France. The first fuel used was sperm whale oil and the first light was a fixed light, not the familiar flashing one. Other fuels used have been colza oil, coal oil, kerosene, acetylene and electricity. Its present-day flashing light is solar powered. ', 'tour information', 'The tour is much like a medium hike and requires a degree of agility and fitness.', 'You can enjoy the tour without climbing the 106 steps in the Lighthouse tower. However, when you do reach the light room, you will always remember the view.For safety, children must be a minimum of 4 feet tall and must be accompanied by an Adult.Footwear suitable for hiking is mandatory. For safety reasons, Flip-Flops are not allowed.Also Note:The 2 hour tour must be pre-booked and prepaid.There are 9 seats on the boat. The cost is $30.00 per person (includes HST).For refunds, cancellations must be received 24 hours before the scheduled departure.Chantry Island is a Federal Migratory Bird Sanctuary and No Pets allowed on the island.Cancellation can be caused by weather conditions but light rain is fine.', 'Come to the Chantry Island Tour Base and Gift Shop located at the south side of the Saugeen River at the harbour in Southampton and arrive 15 minutes ahead of your scheduled tour. Check in and receive your ticket. You will be directed to the dock for the Peerless II. ', '2017', '- $30 per person (includes HST).<br>- Same price for children & adults.<br>- Special group rates available.<br>- Mastercard, Debit, Visa accepted. ', 'This section includes pictures of Chantry Island and the area of Lake Huron surrounding the Island. It also includes pictures of the lighthouse and keeper''s cottage inside and out, as well as photos of some of the birds and flowers native to the island.If you have photos of Chantry Island that you would like to share with us, connect with our Facebook.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `user_fname` varchar(60) NOT NULL,
  `user_lname` varchar(60) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_pass` varchar(60) NOT NULL,
  `user_level` varchar(30) NOT NULL,
  `user_ip` int(120) NOT NULL,
  `user_lastTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_attempts` int(11) NOT NULL,
  `user_firstLogin` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_name`, `user_pass`, `user_level`, `user_ip`, `user_lastTime`, `user_attempts`, `user_firstLogin`) VALUES
(1, 'Liam', '', 'lstewart2397@gmail.com', 'lstew', '1234', '1', 0, '2017-04-06 05:06:25', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `tbl_site`
--
ALTER TABLE `tbl_site`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `g_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `setting_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_site`
--
ALTER TABLE `tbl_site`
  MODIFY `page_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
