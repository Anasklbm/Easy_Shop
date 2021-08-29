-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 07:03 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `del`
--

CREATE TABLE IF NOT EXISTS `del` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `sid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `del`
--

INSERT INTO `del` (`id`, `nme`, `cont`, `em`, `pas`, `sid`, `st`) VALUES
(1, 'Ajay Kumar', '8795463214', 'aj@gmail.com', '123', 'fresh@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lik`
--

CREATE TABLE IF NOT EXISTS `lik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lik`
--

INSERT INTO `lik` (`id`, `tid`, `uid`, `st`) VALUES
(1, '3', 'ma@gmail.com', 0),
(2, '2', 'ma@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE IF NOT EXISTS `pro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `cate` varchar(150) NOT NULL,
  `price_dt` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `ph` varchar(150) NOT NULL,
  `sid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `nme`, `cate`, `price_dt`, `price`, `ph`, `sid`, `st`) VALUES
(1, 'Carrot', '2', '1 Kg', '40', '0.jpg', 'fresh@gmail.com', 0),
(2, 'Green Beans', '2', '1 Kg', '30', '1.jpg', 'fresh@gmail.com', 0),
(3, 'Cabbage', '2', '1 Kg', '25', '2.jpg', 'fresh@gmail.com', 0),
(4, 'Garlic', '2', '1 Kg', '50', '3.jpg', 'fresh@gmail.com', 0),
(5, 'Tomatoe', '2', '1 Kg', '40', '4.jpg', 'fresh@gmail.com', 0),
(6, 'Onion', '2', '1 kg', '80', '5.jpg', 'fresh@gmail.com', 0),
(7, 'Capsicum', '2', '1 Kg', '50', '6.jpg', 'fresh@gmail.com', 0),
(8, 'Broccoli', '2', '1 Kg', '60', '7.jpg', 'fresh@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `p_cate`
--

CREATE TABLE IF NOT EXISTS `p_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `p_cate`
--

INSERT INTO `p_cate` (`id`, `nme`, `st`) VALUES
(2, 'Vegetable', 0),
(3, 'Fruits', 0),
(4, 'Backery Items', 0);

-- --------------------------------------------------------

--
-- Table structure for table `p_order`
--

CREATE TABLE IF NOT EXISTS `p_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qnt` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `tot` varchar(150) NOT NULL,
  `nme` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `cont` varchar(150) NOT NULL,
  `pid` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `sid` varchar(150) NOT NULL,
  `dt` date NOT NULL,
  `tm` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  `did` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `p_order`
--

INSERT INTO `p_order` (`id`, `qnt`, `price`, `tot`, `nme`, `addr`, `cont`, `pid`, `uid`, `sid`, `dt`, `tm`, `st`, `did`) VALUES
(5, '1', '30', '30', 'Manu krishna', 'nalanchira TVM', '7896453214', '2', 'ma@gmail.com', 'fresh@gmail.com', '2020-02-04', '12:13:06 PM', 0, 'aj@gmail.com'),
(6, '2', '50', '100', 'Manu krishna', 'nalanchira TVM', '7896453214', '7', 'ma@gmail.com', 'fresh@gmail.com', '2020-02-04', '12:13:42 PM', 0, '0'),
(7, '1', '40', '40', 'Manu krishna', 'nalanchira TVM', '7896453214', '5', 'ma@gmail.com', 'fresh@gmail.com', '2020-02-04', '12:14:24 PM', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `shop_reg`
--

CREATE TABLE IF NOT EXISTS `shop_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `cate` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `cont` varchar(150) NOT NULL,
  `la` float NOT NULL,
  `lo` float NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shop_reg`
--

INSERT INTO `shop_reg` (`id`, `nme`, `cate`, `em`, `pass`, `addr`, `cont`, `la`, `lo`, `ph`, `st`) VALUES
(1, 'Fresh Vegitable shop', '2', 'fresh@Gmail.com', '123', 'Door No 001, QRS Mall Square, Mahathma Gandhi Rd, opposite Raymond Showroom, Thiruvananthapuram, Kerala 695001', '8975463215', 8.48717, 76.9554, '0.jpg', 1),
(2, 'Margin Free Market', '4', 'mar@gmail.com', '123', 'Aristo, Thampanoor, Thiruvananthapuram, Kerala 695014', '8975643124', 8.48948, 76.9476, '1.jpg', 1),
(3, 'Natural Fruit Shop', '3', 'na@gmail.com', '123', 'Thampanoor, Sahodara Samajam Road, Overbridge, Near, Thiruvananthapuram, Kerala 695001', '8797896543214', 8.48983, 76.9482, '2.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `s_cate`
--

CREATE TABLE IF NOT EXISTS `s_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `st` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `s_cate`
--

INSERT INTO `s_cate` (`id`, `nme`, `st`) VALUES
(2, 'Vegetable Shop', '0'),
(3, 'Fruit Shop', '0'),
(4, 'Grocery Shop', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `addr` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `la` float NOT NULL,
  `lo` float NOT NULL,
  `ph` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `nme`, `em`, `pass`, `addr`, `cont`, `la`, `lo`, `ph`, `st`) VALUES
(2, 'Manu krishna', 'ma@gmail.com', '123', 'nalanchira TVM', '7896453214', 8.49079, 76.9475, '0.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `utyp` varchar(15) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `uid`, `pwd`, `utyp`, `st`) VALUES
(5, 'admin', 'admin', 'admin', 1),
(30, 'fresh@gmail.com', '123', 'shop', 1),
(31, 'mar@gmail.com', '123', 'shop', 1),
(32, 'na@gmail.com', '123', 'shop', 1),
(33, 'ma@gmail.com', '123', 'user', 1),
(35, 'aj@gmail.com', '123', 'del', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
