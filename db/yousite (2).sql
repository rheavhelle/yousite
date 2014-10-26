-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2014 at 10:03 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yousite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `department`, `isactive`) VALUES
(1, 'admin', 'admin123', 'IT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `district_id` int(11) NOT NULL,
  `district` varchar(30) NOT NULL,
  `district_code` tinyint(4) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE IF NOT EXISTS `listings` (
`listing_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `ranking` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL,
  `map_latitude` float(11,9) NOT NULL,
  `map_longitude` float(11,9) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `mobile_num` int(11) NOT NULL,
  `fax_num` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `promo_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `pinterest_act` varchar(50) NOT NULL,
  `twitter_act` varchar(50) NOT NULL,
  `facebook_act` varchar(50) NOT NULL,
  `google_act` varchar(50) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`menu_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE IF NOT EXISTS `promos` (
`promo_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `promo` varchar(50) NOT NULL,
  `promo_desc` text NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` date NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
`subcat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
 ADD PRIMARY KEY (`district_id`), ADD KEY `cat_id` (`cat_id`), ADD KEY `listing_id` (`listing_id`), ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
 ADD PRIMARY KEY (`listing_id`), ADD UNIQUE KEY `subcat_id` (`cat_id`), ADD UNIQUE KEY `promo_id` (`promo_id`), ADD UNIQUE KEY `menu_id` (`menu_id`), ADD UNIQUE KEY `listing_id` (`listing_id`), ADD KEY `cat_id` (`cat_id`), ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`menu_id`), ADD KEY `listing_id` (`listing_id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
 ADD PRIMARY KEY (`promo_id`), ADD KEY `listing_id` (`listing_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
 ADD PRIMARY KEY (`subcat_id`), ADD KEY `subcat_id` (`subcat_id`), ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
MODIFY `listing_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
MODIFY `promo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `districts_ibfk_2` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`listing_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
ADD CONSTRAINT `listings_ibfk_4` FOREIGN KEY (`promo_id`) REFERENCES `promos` (`promo_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `listings_ibfk_5` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `listings_ibfk_6` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `listings_ibfk_7` FOREIGN KEY (`district_id`) REFERENCES `districts` (`district_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `listings` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`listing_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promos`
--
ALTER TABLE `promos`
ADD CONSTRAINT `promos_ibfk_1` FOREIGN KEY (`promo_id`) REFERENCES `listings` (`promo_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `promos_ibfk_2` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`listing_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
