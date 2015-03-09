-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2012 at 07:48 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dekma`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `isbn` int(10) unsigned NOT NULL,
  `title` varchar(45) NOT NULL,
  `author` varchar(45) NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `adddate` datetime DEFAULT NULL,
  `category` varchar(45) NOT NULL,
  `originalqty` int(10) unsigned NOT NULL,
  `qty` int(10) unsigned NOT NULL,
  `desc` varchar(200) DEFAULT NULL,
  `publisher` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `title`, `author`, `price`, `adddate`, `category`, `originalqty`, `qty`, `desc`, `publisher`) VALUES
(1, 'The Other War', 'R.K Suriyakumara', 1111, NULL, 'horror', 6, 5, '4564564', 'Wasana Publishers'),
(2, 'Beyond Bawa', 'H.A Sugathapala', 1000, NULL, 'comedy', 5, 4, '4564564', 'Wasana Publishers'),
(3, 'Senaka', 'K.W Hettitewa', 1600, NULL, 'horror', 5, 5, '4534534', 'Wasana Publishers'),
(4, 'The Wrath Of the Gods', 'S.W.K.S Ariyarathna', 1700, NULL, 'horror', 5, 4, '4456456', 'Wasana Publishers'),
(5, 'Shishtacharaye', 'J.R.P Suriyapperuma', 1264, NULL, 'horror', 5, 4, 'vxcvx', 'Wasana Publishers'),
(6, 'Serpents Shadow', 'B.S.C Hnsaperuma', 11000, NULL, 'horror', 8, 7, 'Very Good Book.', 'Wasana Publishers'),
(7, 'Click Millions', 'A.B.C Pranavtharana', 12000, NULL, 'comedy', 9, 7, 'This is the book Comes to the place and read it like a mad Hoo hoo', 'Wasana Publishers'),
(8, 'Underworld', 'S.R.D.Punchihewa', 18000, NULL, 'comedy', 10, 9, 'This is the book Comes to the place and read it like a mad Hoo hoo', 'Wasana Publishers'),
(9, 'Art Of Inteligence', 'F.C.K. Athukorala', 1900, NULL, 'horror', 12, 3, 'This is the book Comes to the place and read it like a mad Hoo hoo', 'Wasana Publishers'),
(11, 'My life', 'P.L.Karunarathna', 1200, NULL, 'comedy', 100, 98, 'This is the book Comes to the place and read it like a mad Hoo hoo', 'Wasana Publishers'),
(12, 'Apple Experience', 'D.K Solomans', 1200, NULL, 'comedy', 250, 250, 'The Begining Of Apple Corparation', 'Muthukuda Publishers.'),
(13, 'Death Of Kings', 'Bernard Cornwell', 800, NULL, 'comedy', 100, 97, 'How King Arthur Faced the death', 'J. Hill Publishers'),
(14, 'The Song of achiles', 'K.M Punchi Banda', 500, NULL, 'comedy', 100, 10, 'THis book keep you laughing laughing laughing laughing laughing laughing laughing laughing laughing laughing laughing laughing laughing laughing laughing  and laughing', 'Wasana Publishers'),
(15, 'Michael', 'Chris White', 4500, NULL, 'horror', 150, 124, 'Biography of a great artist', 'Nkill Publishers'),
(16, 'The Intention Economy', 'J. Thompson', 7500, NULL, 'horror', 780, 100, 'Overview of the economy', 'J. Hill publishers'),
(17, 'To heaven and back', 'C. Bernard', 3700, NULL, 'comedy', 100, 27, 'Path to Heaven', 'J. Hill publishers'),
(18, 'the Charge', 'unknown', 5600, NULL, 'comedy', 100, 100, 'This book describes How to charge a mobile phone', 'J. Hill publishers'),
(19, 'Gota''s War', 'C. Subramaniyam', 2200, NULL, 'comedy', 100, 24, 'How gota managed the war', 'J. Hill publishers');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cusid` int(10) unsigned NOT NULL,
  `issued` varchar(45) NOT NULL,
  PRIMARY KEY (`cartid`),
  KEY `cusid` (`cusid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `cusid`, `issued`) VALUES
(1, 1, 'yes'),
(2, 1, 'yes'),
(3, 1, 'yes'),
(11, 1, 'yes'),
(12, 1, 'yes'),
(13, 1, 'yes'),
(14, 1, 'yes'),
(16, 1, 'yes'),
(17, 1, 'yes'),
(18, 1, 'yes'),
(19, 1, 'yes'),
(20, 1, 'yes'),
(21, 1, 'no'),
(22, 1, 'no'),
(23, 1, 'no'),
(25, 1, 'no'),
(26, 1, 'no'),
(27, 1, 'no'),
(28, 1, 'no'),
(29, 1, 'no'),
(30, 1, 'no'),
(31, 1, 'no'),
(32, 1, 'no'),
(33, 1, 'no'),
(34, 1, 'no'),
(35, 1, 'no'),
(36, 1, 'yes'),
(37, 1, 'yes'),
(38, 1, 'yes'),
(39, 1, 'yes'),
(40, 1, 'yes'),
(41, 1, 'yes'),
(42, 8, 'no'),
(43, 8, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `cartbook`
--

CREATE TABLE IF NOT EXISTS `cartbook` (
  `cartbookid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cartid` int(10) unsigned NOT NULL,
  `isbn` int(10) unsigned NOT NULL,
  `qty` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`cartbookid`),
  KEY `cartid` (`cartid`),
  KEY `isbn` (`isbn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `cartbook`
--

INSERT INTO `cartbook` (`cartbookid`, `cartid`, `isbn`, `qty`) VALUES
(3, 1, 1, 1),
(4, 3, 1, 1),
(5, 11, 2, 1),
(6, 12, 2, 1),
(7, 13, 2, 1),
(8, 14, 2, 1),
(9, 14, 3, 1),
(12, 16, 2, 3),
(13, 16, 3, 2),
(14, 17, 3, 1),
(15, 17, 1, 1),
(16, 18, 3, 1),
(17, 19, 3, 1),
(18, 20, 2, 2),
(19, 20, 1, 1),
(20, 21, 2, 1),
(21, 22, 1, 1),
(22, 23, 2, 1),
(23, 25, 1, 1),
(24, 26, 1, 1),
(25, 27, 5, 1),
(26, 28, 14, 1),
(27, 28, 1, 1),
(28, 29, 2, 1),
(29, 30, 4, 1),
(30, 31, 2, 1),
(31, 32, 1, 2),
(32, 33, 6, 1),
(33, 34, 1, 1),
(34, 35, 7, 1),
(35, 36, 6, 1),
(36, 37, 14, 1),
(37, 38, 8, 1),
(38, 39, 7, 1),
(39, 40, 7, 2),
(40, 41, 11, 1),
(41, 42, 2, 1),
(42, 43, 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `cmntid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(800) NOT NULL,
  `date` datetime DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `isbn` int(10) unsigned NOT NULL,
  `cusid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cmntid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cmntid`, `value`, `date`, `time`, `isbn`, `cusid`) VALUES
(2, 'Very Good Book!\n', NULL, NULL, 2, 1),
(6, 'Nice One.', NULL, NULL, 3, 1),
(9, 'A must Read!', NULL, NULL, 3, 2),
(12, 'Honda Pothak.', NULL, NULL, 3, 1),
(13, 'patta potha oi', NULL, NULL, 14, 1),
(14, 'Just a crap!!\n', NULL, NULL, 4, 1),
(15, 'Excellent Book', NULL, NULL, 11, 1),
(16, 'Awesome....', NULL, NULL, 4, 1),
(17, 'I.O Salli!!!', NULL, NULL, 3, 1),
(18, 'Anee Shooi potha', NULL, NULL, 3, 5),
(19, 'Old Book...', NULL, NULL, 4, 5),
(20, 'podi kale kiyawapu ewane...:-)', NULL, NULL, 4, 7),
(21, 'Complex Theory Described simply....', NULL, NULL, 3, 7),
(22, 'Mun apple kanne nethuwa poth liyano pixuda manda :D', NULL, NULL, 12, 7),
(24, 'Ela potha bn loweth ganin', NULL, NULL, 3, 1),
(28, 'Good book for a geek', NULL, NULL, 12, 1),
(29, ':D', NULL, NULL, 3, 1),
(30, ':D', NULL, NULL, 3, 1),
(31, ':P', NULL, NULL, 3, 1),
(32, 'I.O Salli', NULL, NULL, 3, 1),
(33, 'Dont buy this just a waste of money', NULL, NULL, 6, 1),
(34, 'Ela potha bn loweth ganin', NULL, NULL, 9, 1),
(36, 'Chora Pothak', NULL, NULL, 1, 5),
(37, 'Chora pohak', NULL, NULL, 2, 5),
(38, 'kkk', NULL, NULL, 7, 7),
(39, 'nkan', NULL, NULL, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cusid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `phoneno` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `zipcode` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  PRIMARY KEY (`cusid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusid`, `username`, `password`, `phoneno`, `email`, `name`, `address`, `zipcode`, `country`) VALUES
(1, 'hetti', 'hetti', '0716866386', 'hett@gmail.com', 'heshitha', 'sf;lsdflsdf;l', '84500', ''),
(2, 'heshitha', 'heshitha', '4564564', 'sgsd', 'gsdgs', 'sgsdg', '456456', ''),
(4, 'kanishka', 'kanishka', '0715555445', 'kanishka@gmail.com', 'Kanishka', 'aaa', '81700', ''),
(5, 'akila', 'akila', '23253453', 'akila@dekma.com', 'akila', 'dfgdfg', '81455', 'lanka'),
(7, 'Sandun', 'Sandun', '0711119118', 'wksharshana@gmail.com', 'Sandun', 'Sandun', '81700', ''),
(8, 'admin', 'admin', '278786786', 'admin@dekma.com', 'admin', 'asdas', '81700', 'srilanka');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cusid` FOREIGN KEY (`cusid`) REFERENCES `customer` (`cusid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cartbook`
--
ALTER TABLE `cartbook`
  ADD CONSTRAINT `cartid` FOREIGN KEY (`cartid`) REFERENCES `cart` (`cartid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `isbn` FOREIGN KEY (`isbn`) REFERENCES `book` (`isbn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
