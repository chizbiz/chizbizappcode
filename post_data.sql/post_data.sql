-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2016 at 07:04 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `post_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(40) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` int(13) NOT NULL,
  `local` varchar(60) NOT NULL,
  `delevery` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `country`, `city`, `state`, `zip_code`, `local`, `delevery`) VALUES
(1, 'Nepal', 'kathmandu', 'chabahil', 123456, 'ganeshthan mandir', '2016-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
  `id` int(11) NOT NULL DEFAULT '0',
  `Feed` text NOT NULL,
  `date_ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `Feed`, `date_ins`) VALUES
(1, 'i m feeling happy today :)', '2016-01-02 17:42:39'),
(1, 'i need one perfect computer....if anyone is interested...........please contact me:....my mail is below ...', '2016-01-02 18:58:19'),
(1, 'i need more friends so, .....if someone interested ...please contact me...at 9843550501 or inbox me... ', '2016-01-02 18:00:59'),
(1, 'i m feeling happy because my jigree is here...', '2016-01-02 18:12:00'),
(2, 'Now i m in social site of bishwas....yes ....hahaha....', '2016-01-02 19:01:46'),
(2, 'i m excited....', '2016-01-03 09:59:29'),
(2, 'yes we have good friends.... ', '2016-01-03 16:52:40'),
(2, '&#2332;&#2375; &#2325;&#2369;&#2352;&#2366; &#2361;&#2369;&#2344;&#2381;&#2331; &#2360;&#2348;&#2376; &#2352;&#2366;&#2350;&#2381;&#2352;&#2379;&#2325;&#2379; &#2354;&#2366;&#2327;&#2367; &#2344;&#2376; &#2361;&#2369;&#2344;&#2375;&#2352;&#2376;&#2331; &#2404;&#2325;&#2369;&#2344;&#2376; &#2348;&#2375;&#2354;&#2366; &#2346;&#2360;&#2381;&#2330;&#2340;&#2366;&#2346; &#2354;&#2366;&#2327;&#2375;&#2325;&#2366;, &#2330;&#2367;&#2340;&#2366;&#2319;&#2325;&#2379; &#2344;&#2346;&#2369;&#2327;&#2375;&#2325;&#2366; &#2352; &#2344;&#2352;&#2366;&#2350;&#2381;&#2352;&#2379; &#2354;&#2366;&#2327;&#2375;&#2325;&#2366; &#2325;&#2369;&#2352;&#2366;&#2361;&#2352;&#2369; &#2309;&#2361;&#2367;&#2354;&#2375; &#2310;&#2319;&#2352; &#2319;&#2325;&#2342;&#2350; &#2336;&#2368;&#2325; &#2349;&#2319;&#2331;&#2344; &#2349;&#2344;&#2381;&#2344;&#2375; &#2354;&#2366;&#2327;&#2375;&#2325;&#2379; &#2331;&#2404;&#2352; &#2309;&#2361;&#2367;&#2354;&#2375; &#2346;&#2344;&#2367; &#2332;&#2375; &#2325;&#2369;&#2352;&#2366; &#2344;&#2346;&#2366;&#2319;&#2352; &#2342;&#2369;&#2326; &#2354;&#2366;&#2327;&#2381;&#2331; ,&#2340;&#2368; &#2325;&#2369;&#2352;&#2366;&#2361;&#2352;&#2369; &#2349;&#2348;&#2367;&#2360;&#2381;&#2351;&#2350;&#2366; &#2352;&#2366;&#2350;&#2381;&#2352;&#2379;&#2325;&#2379; &#2354;&#2366;&#2327;&#2367; &#2361;&#2369;&#2344;&#2381;&#2331; &#2349;&#2344;&#2381;&#2344;&#2375; &#2357;&#2367;&#2358;&#2381;&#2357;&#2366;&#2360; &#2354;&#2366;&#2327;&#2375;&#2325;&#2379; &#2331;&#2404; &#8234;#&#8206;2015flash&#8236; &#8234;#&#8206;2016newlifeahead&#8236;', '2016-01-03 19:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE IF NOT EXISTS `password` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(40) NOT NULL,
  `pass` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`id`, `u_name`, `pass`) VALUES
(1, 'bishwas', 'kumar'),
(2, 'pragyan', 'pg123');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(14) NOT NULL,
  `dob` varchar(45) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `conpassword` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first`, `last`, `email`, `phone`, `dob`, `gender`, `password`, `conpassword`) VALUES
(1, 'bishwas', 'niraula', 'bishwas.niraula@gmail.com', 9843550501, '17-feb-1994', 'male', '1234', '1234'),
(2, 'pragyan', 'thapaliya', 'pragyan.thapaliya@yahoo.com', 9860688198, '14-feb-1993', 'male', '123456', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
