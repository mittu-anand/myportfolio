-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2014 at 06:52 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moviefolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `celebrity`
--

CREATE TABLE IF NOT EXISTS `celebrity` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `dob` varchar(60) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `images` varchar(120) NOT NULL,
  `type` varchar(40) NOT NULL,
  `location` varchar(60) NOT NULL,
  `aboutme` text NOT NULL,
  `contact` varchar(60) NOT NULL,
  `facebook` varchar(70) NOT NULL,
  `twitter` varchar(70) NOT NULL,
  `google` varchar(70) NOT NULL,
  `date_joined` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `user_activation` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `celebrity`
--

INSERT INTO `celebrity` (`cid`, `name`, `email`, `password`, `dob`, `gender`, `images`, `type`, `location`, `aboutme`, `contact`, `facebook`, `twitter`, `google`, `date_joined`, `status`, `user_activation`) VALUES
(1, 'Dulquer Salman', 'dulq@gmail.com', 'dulq123', '', 'M', '', 'Actor', '', '', '', '', '', '', '2014-11-02 00:00:00', '1', '0'),
(2, 'Fahad Fasil', 'fahad@gmail.com', 'fahad123', '', 'M', '', 'Actor', '', '', '', '', '', '', '2014-11-02 04:12:17', '1', '0'),
(3, 'Nivin Pauly', 'nivin@gmail.com', 'nivin123', '', 'M', '', 'Actor', '', '', '', '', '', '', '2014-11-10 00:28:33', '1', '0'),
(4, 'Anwar Rasheed', 'anwar@gmail.com', 'anwar123', '', 'M', '', 'Director', '', '', '', '', '', '', '2014-11-10 00:00:00', '1', '0'),
(5, 'Milan Jaleel', 'milan@gmail.com', 'milan123', '', 'M', '', 'Producer', '', '', '', '', '', '', '0000-00-00 00:00:00', '1', '0'),
(6, 'Ashiq Abu', 'ashiq@gmail.com', 'ashiq123', '', 'M', '', 'Director', '', '', '', '', '', '', '2014-11-03 00:00:00', '1', '0'),
(7, 'Sameer Tahir', 'sameer@gmail.com', 'sameer123', '', 'M', '', 'Cinematographer', '', '', '', '', '', '', '0000-00-00 00:00:00', '1', '0'),
(8, 'Khader Hassan', 'khader@gmail.com', 'khader', '', 'M', '', 'Producer', '', '', '', '', '', '', '2014-11-01 00:00:00', '1', '0'),
(9, 'xyz banner', 'xyzbanner@gmail.com', 'xyz123', '', 'M', '', 'Banner', '', '', '', '', '', '', '2014-11-14 00:00:00', '1', '0'),
(10, 'Friday Movies', 'fridaym@gmail.com', 'friday123', '', 'M', '', 'Distributors', '', '', '', '', '', '', '0000-00-00 00:00:00', '1', '0'),
(11, 'TA Razzak', 'razak@gmail.com', 'razak123', '', 'M', '', 'Writer', '', '', '', '', '', '', '2014-11-11 00:00:00', '1', '0'),
(12, 'Kiran Dev', 'kirandev@gmail.com', 'kiran123', '', 'M', '', 'Editor', '', '', '', '', '', '', '2014-11-04 00:00:00', '1', '0'),
(13, 'Ranjan Abraham', 'ranjan@gmail.com', 'ranjan123', '', 'M', '', 'Editor', '', '', '', '', '', '', '0000-00-00 00:00:00', '1', '0'),
(14, 'Boban', 'bob@gmail.com', 'bob123', '', 'M', '', 'Art Director', '', '', '', '', '', '', '0000-00-00 00:00:00', '1', '0'),
(15, 'Ranjith Ambady', 'ranjithamb@gmail.com', 'ranjith123', '', 'M', '', 'Make Up', '', '', '', '', '', '', '0000-00-00 00:00:00', '1', '0'),
(16, 'Sameera Hari', 'sameera@gmail.com', 'sameera123', '', 'F', '', 'Costume Designer', '', '', '', '', '', '', '0000-00-00 00:00:00', '1', '0'),
(17, 'Aroma Mohan', 'aroma@gmail.com', 'aroma123', '', 'M', '', 'Production Controller', '', '', '', '', '', '', '0000-00-00 00:00:00', '1', '0'),
(18, 'Dev Warma', 'dev@gmail.com', 'dev123', '', 'M', '', 'Associate Director', '', '', '', '', '', '', '2014-11-13 00:00:00', '1', '0'),
(19, 'Vayalar Sarath', 'vs@gmail.com', 'vs123', '', 'M', '', 'Lyrics', '', '', '', '', '', '', '2014-11-26 00:00:00', '1', '0'),
(20, 'M.Jayachandran', 'jya@gmail.com', 'jya123', '', 'M', '', 'Music Director', '', '', '', '', '', '', '2014-11-11 00:00:00', '1', '0'),
(21, 'Deepak Dev', 'deepak@gmail.com', 'deepak123', '', 'M', '', 'Music Director', '', '', '', '', '', '', '2014-11-27 00:28:30', '1', '0'),
(22, 'Mahendran Thambi', 'mah@gmail.com', 'mah123', '', 'M', '', 'Stills', '', '', '', '', '', '', '0000-00-00 00:00:00', '1', '0'),
(23, 'Papaya Media', 'pap@gmail.com', 'pap123', '', 'M', '', 'Design', '', '', '', '', '', '', '0000-00-00 00:00:00', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `classifieds`
--

CREATE TABLE IF NOT EXISTS `classifieds` (
  `classifiedid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `postedby` int(11) NOT NULL,
  `type` enum('M','A','P') NOT NULL,
  `postedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`classifiedid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `classifieds`
--

INSERT INTO `classifieds` (`classifiedid`, `title`, `description`, `postedby`, `type`, `postedon`, `status`) VALUES
(1, 'dasd', 'asdasdasdasd', 6, 'M', '2014-11-21 16:06:52', '1'),
(2, 'sdfsdfsdf', 'sdfsdfsdfsdfsdfsdfsdf', 6, 'M', '2014-11-21 16:07:02', '1'),
(3, 'sdfsdf', 'sdfsdfsdfsdfsdf', 6, 'M', '2014-11-21 16:17:15', '1'),
(4, 'new', 'sdfsf', 6, 'M', '2014-11-21 16:17:28', '1'),
(5, 'tests', 'dfsdf sdfsfs', 6, 'M', '2014-11-21 17:40:06', '1'),
(6, 'ffffsd', 'fffffsd', 6, 'M', '2014-11-21 17:49:39', '1');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE IF NOT EXISTS `industry` (
  `ind_id` int(11) NOT NULL AUTO_INCREMENT,
  `industry` varchar(60) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`ind_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`ind_id`, `industry`, `status`) VALUES
(1, 'Malayalam', '1'),
(2, 'Tamil', '1'),
(3, 'Telugu', '1'),
(4, 'Kannada', '1'),
(5, 'Hindi', '1'),
(6, 'English', '1');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_type` varchar(60) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loops`
--

CREATE TABLE IF NOT EXISTS `loops` (
  `loopid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `friendid` int(11) NOT NULL,
  `accepted` enum('0','1','2') NOT NULL DEFAULT '0',
  `date_send` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_accepted` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_req_removed` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `notification_update` enum('1','0') NOT NULL DEFAULT '1',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`loopid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `loops`
--

INSERT INTO `loops` (`loopid`, `userid`, `friendid`, `accepted`, `date_send`, `date_accepted`, `date_req_removed`, `notification_update`, `status`) VALUES
(14, 3, 4, '2', '2014-11-17 09:36:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1'),
(20, 8, 3, '2', '2014-11-19 10:23:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '1'),
(21, 3, 9, '2', '2014-11-19 10:16:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1'),
(24, 10, 3, '2', '2014-11-19 13:52:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '1'),
(26, 3, 5, '2', '2014-11-19 14:23:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '1'),
(27, 5, 10, '1', '2014-11-19 14:31:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `language` varchar(60) NOT NULL,
  `genres` varchar(60) NOT NULL,
  `plot` text NOT NULL,
  `trailor` varchar(500) NOT NULL,
  `moviestatus` varchar(60) NOT NULL,
  `expected_release` date NOT NULL,
  `director` varchar(60) NOT NULL,
  `producer` varchar(100) NOT NULL,
  `maincaste` varchar(100) NOT NULL,
  `music` varchar(100) NOT NULL,
  `image` varchar(120) NOT NULL,
  `banner_img` varchar(120) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `name`, `email`, `password`, `language`, `genres`, `plot`, `trailor`, `moviestatus`, `expected_release`, `director`, `producer`, `maincaste`, `music`, `image`, `banner_img`, `status`) VALUES
(1, 'Kathi', 'kathi@gmail.com', 'kathi123', 'Tamil', 'Action', 'xyz', '', 'upcoming', '2014-11-05', '12', '14', '23~43~15~10', '34', '9236KaththiMovieFirstLookPosters1.jpg', '', '1'),
(2, 'Peruchazhi', 'peruch@gmail.com', 'peruchazhi123', 'Malayalam', 'Comedy', 'tyz', '', 'upcoming', '2014-11-03', '34', '67', '12', '67', 'dddd.jpg', '', '1'),
(3, 'English', 'english@gmail.com', 'english123', 'Malayalam', 'Class', 'nmnmn', '', 'upcoming', '2014-11-09', '56', '76', '23', '16', 'english malayalam movie.jpg', '', '1'),
(4, 'Amen', 'amen@gmail.com', 'amen123', 'Malayalam', 'Comedy', 'ghj', '', 'nowrunning', '2014-11-24', '11', '34', '52', '94', 's.jpg', '', '1'),
(5, 'Punyalan Agarbathis', 'punyalan@gmail.com', 'punyalan123', 'Malayalam', 'Comedy', 'fdgdfgd', '', 'nowrunning', '2014-11-25', '57', '48', '85', '50', 'imagesv.jpg', '', '1'),
(6, 'Bangalore Days', 'banglore@gmail.com', 'bang123', 'Malayalam', 'Family', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '&lt;iframe width="640" height="360" src="//www.youtube.com/embed/uVpHL5g4buY?feature=player_detailpage" frameborder="0" allowfullscreen&gt;&lt;/iframe>', 'upcoming', '2014-01-02', 'Anjali Menons', 'Anwar Rasheed', 'Dulquer Salman,Fahad Fazil, Nivin Pauly', 'M. Jayachandran', 'imgsize.php_.jpg', 'bg1.jpg', '1'),
(7, 'London Bridge', 'london@gmail.com', 'london123', 'Malayalam', 'Thriller', 'fgdfgdfgdg', '', 'nowrunning', '2014-11-09', '754', '345', '234', '123', 'London Bridge Malayalam Movie Poster.jpg', '', '1'),
(8, 'Ayirathiloruvar', 'ayirath@gmail.com', 'ayirath123', 'Tamil', 'Thriller', 'dfsdfs sdfsdf', '', 'nowrunning', '2014-11-26', '34', '46', '73', '71', '0bf1AyirathilIruvarMovieFirstLookPoster.jpg', '', '1'),
(9, 'Hotel California', 'hotelc@gmail.com', 'hotel123', 'Malayalam', 'Thriller', 'sdfsdfsdf', '', 'upcoming', '2014-11-12', '46', '76', '67', '57', 'ff.jpg', '', '1'),
(10, 'Koothara', 'koothara@gmail.com', 'koothara123', 'Malayalam', 'Comedy', 'asdasdasd', '', 'nowrunnig', '2014-11-02', '34', '56', '45', '12', 'fff.jpg', '', '1'),
(11, 'Yohan', 'yohan@gmail.com', 'yohan123', 'Tamil', 'Action', 'sdfsdf', '', 'upcoming', '2014-11-26', '16', '37', '79', '93', 'gautham290711_01.jpg', '', '1'),
(12, 'Red Wine', 'red@gmail.com', 'red123', 'Malayalam', 'Malayalam', 'sdafsfsdf', '', 'nowrunnig', '2014-11-26', '35', '65', '12', '35', 'images.jpg', '', '1'),
(13, 'Spirit', 'spirit@gmail.com', 'spirit123', 'Malayalam', 'Comedy', 'sddsfsdf', '', 'upcoming', '2014-11-23', '66', '38', '83', '57', 'mohanlal-spirit-malayalam-movie-wallpapers00.jpg', '', '1'),
(14, 'Thira', 'thira@gmail.com', 'thira123', 'Malayalam', 'Thriller', 'sdfsdf', '', 'upcoming', '2014-11-26', '34', '43', '44', '54', 'poster cut thira movie..jpg', '', '1'),
(15, 'Hero', 'hero@gmail.com', 'hero123', 'Tamil', 'Action', 'sdfsdf', '', 'nowrunning', '2014-11-12', '122', '100', '111', '40', 'poster_1409631279.jpg', '', '1'),
(16, 'Trivandrum Lodge', 'tvm@gmail.com', 'tvm123', 'Malayalam', 'Thriller', 'sdfsdff', '', 'upcoming', '2014-11-02', '33', '44', '55', '66', 'rrtg.jpg', '', '1'),
(17, 'Ring Master', 'ring@gmail.com', 'ring123', 'Malayalam', 'Comedy', 'asdasdf', '', 'nowrunning', '2014-11-25', '23', '45', '66', '12', 'thumb_Ring-Master-movie-new-pics)-(3)9328.jpg', '', '1'),
(18, 'Prenathe walli gali', 'pranthe@gmail.com', 'pranthe123', 'Hindi', 'Romance', 'asddsfsdf', '', 'nowrunning', '2014-11-29', '57', '65', '28', '6', 'crop_480x480_149309.jpg', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `moviestatus`
--

CREATE TABLE IF NOT EXISTS `moviestatus` (
  `mstatusid` int(11) NOT NULL AUTO_INCREMENT,
  `statuscode` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`mstatusid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `moviestatus`
--

INSERT INTO `moviestatus` (`mstatusid`, `statuscode`, `name`, `status`) VALUES
(1, 'inshoot', 'In Shoot', '1'),
(2, 'upcoming', 'Up Coming', '1'),
(3, 'nowrunning', 'Now Running', '1');

-- --------------------------------------------------------

--
-- Table structure for table `movie_cast`
--

CREATE TABLE IF NOT EXISTS `movie_cast` (
  `mcid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cast` varchar(80) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`mcid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `movie_cast`
--

INSERT INTO `movie_cast` (`mcid`, `mid`, `cid`, `cast`, `status`) VALUES
(8, 6, 1, 'Dulquer Salman', '1'),
(9, 6, 2, 'Fahad Fasil', '1');

-- --------------------------------------------------------

--
-- Table structure for table `movie_crew`
--

CREATE TABLE IF NOT EXISTS `movie_crew` (
  `mcrewid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `crew` varchar(80) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`mcrewid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `movie_crew`
--

INSERT INTO `movie_crew` (`mcrewid`, `mid`, `cid`, `crew`, `status`) VALUES
(2, 6, 12, 'Kiran Dev', '1'),
(6, 6, 8, 'Khader Hassan', '1'),
(7, 6, 21, 'Deepak Dev', '1'),
(8, 6, 7, 'Sameer Tahir', '1'),
(10, 6, 16, 'Sameera Hari', '1');

-- --------------------------------------------------------

--
-- Table structure for table `movie_images`
--

CREATE TABLE IF NOT EXISTS `movie_images` (
  `m_img_id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `image` varchar(120) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`m_img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `movie_images`
--

INSERT INTO `movie_images` (`m_img_id`, `mid`, `image`, `status`) VALUES
(4, 6, 'dddd1.jpg', '1'),
(5, 6, '0bf1AyirathilIruvarMovieFirstLookPoster1.jpg', '1'),
(6, 6, '9236KaththiMovieFirstLookPosters11.jpg', '1'),
(7, 6, 'images1.jpg', '1'),
(8, 6, 'imagesv1.jpg', '1'),
(9, 6, 'London_Bridge_Malayalam_Movie_Poster1.jpg', '1'),
(10, 6, 'mohanlal-spirit-malayalam-movie-wallpapers001.jpg', '1'),
(11, 6, 'poster_cut_thira_movie._1.jpg', '1'),
(12, 6, '246408_325694807518704_1494180737_n1.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `movie_post`
--

CREATE TABLE IF NOT EXISTS `movie_post` (
  `mpid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `post_title` varchar(120) NOT NULL,
  `post_text` text NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `post_video` varchar(150) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`mpid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `movie_post`
--

INSERT INTO `movie_post` (`mpid`, `mid`, `post_title`, `post_text`, `post_image`, `post_video`, `postdate`, `status`) VALUES
(1, 6, 'Nevin, Nasriya and Parvathy!', 'Bangalore days which is expected to be released by december of 2014,is a movie directed by Anjali Menon. A photo of the stars in during the shoot.', 'Nivin-Pauly-Nazriya-Nazim-Parvathi-Menon37201440221AM.jpg', '', '0000-00-00 00:00:00', '1'),
(2, 6, 'who is your favourite star?? every one uhh???', 'the stunning stars of bangalore days', 'images.jpg', '', '0000-00-00 00:00:00', '1'),
(3, 6, 'Bangalore days on its way!', 'ssdfsdfsdfsdfsdf', '', '', '2014-11-11 07:40:38', '1'),
(4, 6, 'Here Comes the new trailor!', '', '', '<iframe width="640" height="360" src="//www.youtube.com/embed/uVpHL5g4buY?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>', '2014-11-11 08:39:51', '1'),
(6, 6, 'sdfsdfsfsfd', 'sdfsdfsdf', '199519_1812112178439_1109044552_32006305_6621440_n1.jpg', '', '2014-11-20 05:12:08', '1'),
(7, 6, 'gsgsdg', 'sgdsdgdsgsdgsdg', '246408_325694807518704_1494180737_n.jpg', '', '2014-11-20 05:12:53', '1'),
(8, 6, 'sdfdfsdf', 'sdfsfsfsf', '993909_vb.jpg', '', '2014-11-20 05:15:11', '1'),
(9, 18, 'xvccccccccv', 'xcvxv', '251997_134738173284311_100002443872200_225346_3661095_n.jpg', '', '2014-11-20 05:20:24', '1');

-- --------------------------------------------------------

--
-- Table structure for table `movie_videos`
--

CREATE TABLE IF NOT EXISTS `movie_videos` (
  `mv_id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `video` varchar(500) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`mv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `movie_videos`
--

INSERT INTO `movie_videos` (`mv_id`, `mid`, `video`, `status`) VALUES
(2, 6, '&lt;iframe width="640" height="360" src="//www.youtube.com/embed/uVpHL5g4buY?feature=player_detailpage" frameborder="0" allowfullscreen&gt;&lt;/iframe>', '1'),
(3, 6, '&lt;iframe width="640" height="360" src="//www.youtube.com/embed/uVpHL5g4buY?feature=player_detailpage" frameborder="0" allowfullscreen&gt;&lt;/iframe>', '1'),
(4, 6, '&lt;iframe width="640" height="360" src="//www.youtube.com/embed/uVpHL5g4buY?feature=player_detailpage" frameborder="0" allowfullscreen&gt;&lt;/iframe>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_types`
--

CREATE TABLE IF NOT EXISTS `portfolio_types` (
  `pt_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`pt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `portfolio_types`
--

INSERT INTO `portfolio_types` (`pt_id`, `type`, `status`) VALUES
(1, 'Actor', '1'),
(2, 'Director', '1'),
(3, 'Cinematographer', '1'),
(4, 'Writer', '1'),
(5, 'Editor', '1'),
(6, 'Art Director', '1'),
(7, 'Costume Designer', '1'),
(8, 'Lyrics', '1'),
(9, 'Music Director', '1'),
(10, 'Singer', '1'),
(11, 'Fighter', '1'),
(12, 'Dancer', '1');

-- --------------------------------------------------------

--
-- Table structure for table `profilepic`
--

CREATE TABLE IF NOT EXISTS `profilepic` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `image` varchar(80) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userlikes`
--

CREATE TABLE IF NOT EXISTS `userlikes` (
  `likeid` int(11) NOT NULL AUTO_INCREMENT,
  `liked` int(11) NOT NULL,
  `likedby` int(11) NOT NULL,
  `date_liked` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`likeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `userlikes`
--

INSERT INTO `userlikes` (`likeid`, `liked`, `likedby`, `date_liked`, `status`) VALUES
(26, 7, 3, '2014-11-19 09:10:53', '1'),
(27, 9, 3, '2014-11-19 10:25:28', '1'),
(28, 9, 10, '2014-11-19 12:17:24', '1'),
(29, 10, 3, '2014-11-19 16:34:43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `userloves`
--

CREATE TABLE IF NOT EXISTS `userloves` (
  `loveid` int(11) NOT NULL AUTO_INCREMENT,
  `loved` int(11) NOT NULL,
  `lovedby` int(11) NOT NULL,
  `date_loved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`loveid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `userloves`
--

INSERT INTO `userloves` (`loveid`, `loved`, `lovedby`, `date_loved`, `status`) VALUES
(7, 7, 3, '2014-11-19 09:11:03', '1'),
(8, 9, 10, '2014-11-19 12:17:31', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `dob` varchar(60) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `industry` varchar(60) NOT NULL,
  `profile_img` varchar(100) NOT NULL,
  `current_job` varchar(100) NOT NULL,
  `type` varchar(40) NOT NULL,
  `desig` varchar(100) NOT NULL DEFAULT 'General',
  `location` varchar(60) NOT NULL,
  `aboutme` text NOT NULL,
  `contact` varchar(60) NOT NULL,
  `facebook` varchar(70) NOT NULL,
  `twitter` varchar(70) NOT NULL,
  `google` varchar(70) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `date_joined` datetime NOT NULL,
  `points` int(30) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `user_activation` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `dob`, `gender`, `industry`, `profile_img`, `current_job`, `type`, `desig`, `location`, `aboutme`, `contact`, `facebook`, `twitter`, `google`, `linkedin`, `date_joined`, `points`, `status`, `user_activation`) VALUES
(1, 'Anand', 'anand@gmail.com', 'anand123', '', 'M', '', '', '', 'P', 'Editor', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 0, '1', '0'),
(3, 'Beena Anand', 'beena@gmail.com', 'beena1234', '1992-11-01', 'M', 'Tamil', '199519_1812112178439_1109044552_32006305_6621440_n.jpg', 'Software Engineer', 'P', 'Writer', 'Kochi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', 'https://www.facebook.com/mittu.anand.1', 'www.twitter.com/thinkal', 'www.twitter.com/thinkal', 'www.twitter.com/thinkal', '0000-00-00 00:00:00', 1, '1', '0'),
(4, 'Kiran', 'kiran@gmail.com', 'kiran123', '1989-02-15', 'M', '', '', '', 'N', 'General', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 0, '1', '0'),
(5, 'Thinkal Tharakan', 'thinkal_4u@yahoo.co.in', 'thinkal123', '1990-06-07', 'M', '', '', '', 'P', 'Actor', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 4, '1', '0'),
(6, 'Visal Varghese', 'visal@gmail.com', 'visal123', '1990-01-24', 'M', '', '', '', 'N', 'General', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 0, '1', '0'),
(7, 'Manu Pradeepan', 'manu@gmail.com', 'manu123', '1990-11-01', 'M', '', '', '', 'N', 'General', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 0, '1', '0'),
(8, 'Kannan Prasannan', 'kannan@gmail.com', 'kannan123', '1990-11-05', 'M', '', '200884_123928201015793_100001958427383_167778_4975720_o.jpg', '', 'P', 'Costume Designer', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 0, '1', '0'),
(9, 'Dev', 'dev@gmail.com', 'dav123', '1989-06-16', 'M', 'Malayalam', '251997_134738173284311_100002443872200_225346_3661095_n.jpg', 'Engineer', 'P', 'Director', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 0, '1', '0'),
(10, 'Aswany Roy', 'aswany@gmail.com', 'aswany123', '1991-11-01', 'M', '', '', '', 'P', 'Cinematographer', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 0, '1', '0'),
(11, 'Ravi Shankar', 'ravi@gmail.com', 'ravi123', '1990-11-04', 'M', '', '', '', 'P', 'Art Director', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 0, '1', '0'),
(12, 'Bhavitha', 'bhavi@gmail.com', 'bhavi123', '1993-05-01', 'F', '', '', '', 'P', 'Lyrics', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 0, '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE IF NOT EXISTS `user_posts` (
  `upid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `post_title` varchar(120) NOT NULL,
  `post_text` text NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `post_video` varchar(150) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`upid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`upid`, `uid`, `post_title`, `post_text`, `post_image`, `post_video`, `post_date`, `status`) VALUES
(1, 3, 'How''s my new look?', 'A change over is always the best way to get things done in cinema!', '175279_200062153339528_100000072354120_788657_6920266_o.jpg', '', '2014-11-14 13:21:15', '1'),
(2, 3, 'fsfsdfsdfsdfsdfsdf', 'sdfsdfsdfsdfsfd', '', '', '2014-11-14 13:22:55', '1'),
(3, 3, 'sdfsdfs', 'sdfsdf', '183550_199686600043750_100000072354120_786168_508381_n.jpg', '', '2014-11-14 13:23:14', '1'),
(4, 3, 'sdadasd', 'asdasdad', '04_suriya_six_0107_615xx.jpg', '', '2014-11-14 13:25:42', '1'),
(5, 3, 'sdfsdfsfsfd', '', '305377_181650388586583_100002248683885_389195_404899169_n.jpg', '', '2014-11-14 13:41:44', '1'),
(6, 3, 'xcxvxvxvxv', '', 'beach2.jpg', '', '2014-11-15 13:51:34', '1'),
(7, 3, 'dfdsfsdf', '', '199519_1812112178439_1109044552_32006305_6621440_n.jpg', '', '2014-11-16 10:52:08', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
