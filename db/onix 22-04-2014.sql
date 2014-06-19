-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2014 at 02:19 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onix`
--
CREATE DATABASE IF NOT EXISTS `onix` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `onix`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `type`, `status`, `created_at`, `update_at`) VALUES
(0000001, 'Nurhadi', 'Maulana', 'nurhadimaulana92', '7a3b9c5b2b94e767bdf525b6bb9ccaef', 'nurhadimaulana92@gmail.com', 'admin', 'active', '2014-02-18 00:00:00', '2014-02-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE IF NOT EXISTS `homepage` (
  `homepage_id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `slider_description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_address` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image_founder_1` varchar(100) NOT NULL,
  `image_founder_2` varchar(100) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`homepage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`homepage_id`, `logo`, `title`, `keywords`, `description`, `slider_title`, `slider_description`, `content`, `image_address`, `address`, `phone`, `image_founder_1`, `image_founder_2`, `facebook`, `twitter`, `latitude`, `longitude`, `updated_at`) VALUES
(0000001, 'assets/images/dental-zone.jpg', 'Dental Zone', 'klinik gigi bandung, dokter gigi bandung, dental zone bandung', 'dental zone merupakan sebuah tempat praktek klinik gigi yang berada di pusat kota bandung.', 'DENTAL ZONE', 'Croissant jujubes pudding oat cake lemon drops. ', '<p>Candy canes biscuit caramels topping gingerbread fruitcake apple pie \nicing. Powder jelly beans sugar plum halvah fruitcake. I love carrot \ncake brownie biscuit carrot cake. Chupa chups ice cream pastry soufflé \ncaramels.</p>', 'assets/uploads/slider-example-12.jpg', 'Candy canes biscuit caramels topping gingerbread fruitcake apple pie icing. Powder jelly beans sugar plum halvah fruitcake. I love carrot cake brownie biscuit carrot cake. Chupa chups ice cream pastry soufflé caramels.', '123456 - (022) 321654', 'assets/uploads/doctor-21.png', 'assets/uploads/doctor-11.png', 'http://facebook.com/kllinikgigibandung', 'http://twitter.com/klinikgigibandung', '-6.909279', '107.619977', '2014-04-22 11:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `inbox_id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'unread',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_id` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`inbox_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inbox_reply`
--

CREATE TABLE IF NOT EXISTS `inbox_reply` (
  `inbox_reply_id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `inbox_id` int(7) unsigned zerofill NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_id` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`inbox_reply_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `promo` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_id` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `keywords`, `description`, `thumbnail`, `content`, `promo`, `created_at`, `admin_id`) VALUES
(0000002, 'Testing News 1', 'testing news 1', 'testing news 1 containing news about testing 1', 'assets/uploads/news/slider-example-3.jpg', '<p>testing news 1 containing news about testing 1</p>', 0, '2014-04-21 11:42:37', 0000001),
(0000003, 'Testing News 2', 'testing news 2', 'testing news 2 containing news about testing 2', 'assets/uploads/news/slider-example-2.jpg', '<p>testing news 2 containing news about testing 2</p>', 0, '2014-04-21 11:42:40', 0000001),
(0000005, 'Testing News 3', 'testing news 3', 'testing news 3 containing news about testing 3', 'assets/uploads/news/slider-example-1.jpg', '<p>testing news 3 containing news about testing 3</p>', 0, '2014-04-21 11:42:43', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `page_id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `title`, `keywords`, `description`, `content`) VALUES
(0000001, 'News Dental Zone', 'news dental zone, news klinik gigi bandung', 'kumpulan berita atau news klinik gigi dental zone bandung', '<p>konten deskripsi berita dental zone bandung</p>'),
(0000002, 'Profile', 'profile dokter gigi bandung, daftar dokter gigi di dental zone', 'Merupakan daftar informasi atau profile dari dokter gigi yang terdapat di dental zone bandung', '<p>Candy canes biscuit caramels topping gingerbread fruitcake apple pie \nicing. Powder jelly beans sugar plum halvah fruitcake. I love carrot \ncake brownie biscuit carrot cake. Chupa chups ice cream pastry soufflé \ncaramels.</p>'),
(0000003, 'Treatment', 'treatment dokter gigi bandung, pelayanan dental zone bandung', 'Merupakan kumpulan treatment dokter gigi dental zone bandung', '<p>Candy canes biscuit caramels topping gingerbread fruitcake apple pie icing. Powder jelly beans sugar plum halvah fruitcake. I love carrot cake brownie biscuit carrot cake. Chupa chups ice cream pastry soufflé caramels.</p>'),
(0000004, 'About Us', 'tentang klinik gigi bandung, tentang dental zone bandung', 'informasi tentang klinik gigi bandung', '<p>merupakan isi dari tentang kami halaman klinik gigi bandung</p>');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `profile_id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_id` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `fullname`, `position`, `description`, `photo`, `status`, `created_at`, `admin_id`) VALUES
(0000001, 'Nurhadi Maulana', 'Owner', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>', 'assets/uploads/profile/doctor-2.png', 'Active', '2014-04-21 12:23:10', 0000001),
(0000002, 'Sastiani Gita Prasastie', 'Co Owner', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>', 'assets/uploads/profile/doctor-1.png', 'Active', '2014-04-21 12:23:31', 0000001),
(0000003, 'Mikaela Sofia Adisti', 'Manager', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam \r\nnonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat \r\nvolutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation \r\nullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>', 'assets/uploads/profile/doctor-11.png', 'Active', '2014-04-21 12:50:21', 0000001),
(0000004, 'Matthew Bellamy', 'Manager', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>', 'assets/uploads/profile/doctor-21.png', 'Active', '2014-04-21 12:24:28', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(50) NOT NULL,
  `slider_path` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_id` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_path`, `status`, `date_created`, `admin_id`) VALUES
(0000003, 'Praktik Dokter Gigi', 'assets/uploads/slider/IMG_0088.jpeg', 'Active', '2014-04-19 10:38:11', 0000001),
(0000004, 'Praktik Dokter Gigi', 'assets/uploads/slider/IMG_8775.jpeg', 'Active', '2014-04-19 10:38:29', 0000001),
(0000005, 'Slider Example 1', 'assets/uploads/slider/slider-example-31.jpg', 'Active', '2014-04-20 13:00:33', 0000001),
(0000006, 'Slider Example 2', 'assets/uploads/slider/slider-example-2.jpg', 'Active', '2014-04-20 13:00:02', 0000001),
(0000008, 'Slider Example 3', 'assets/uploads/slider/slider-example-1.jpg', 'Active', '2014-04-20 13:30:51', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE IF NOT EXISTS `treatment` (
  `treatment_id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `big_image` varchar(100) NOT NULL,
  `small_image_1` varchar(100) NOT NULL,
  `small_image_2` varchar(100) NOT NULL,
  `small_image_3` varchar(100) NOT NULL,
  `small_image_4` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_id` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`treatment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treatment_id`, `title`, `big_image`, `small_image_1`, `small_image_2`, `small_image_3`, `small_image_4`, `status`, `created_at`, `admin_id`) VALUES
(0000003, 'Pasang Implan Gigi', 'assets/uploads/treatment/slider-example-1.jpg', 'assets/uploads/treatment/slider-example-11.jpg', 'assets/uploads/treatment/slider-example-12.jpg', 'assets/uploads/treatment/slider-example-13.jpg', 'assets/uploads/treatment/slider-example-14.jpg', 'Active', '2014-04-21 12:56:31', 0000001);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
