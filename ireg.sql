-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 09:04 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ireg`
--

-- --------------------------------------------------------

--
-- Table structure for table `condolences`
--

CREATE TABLE IF NOT EXISTS `condolences` (
`id_poster` bigint(60) unsigned NOT NULL,
  `name_poster` varchar(60) NOT NULL,
  `message` varchar(400) NOT NULL,
  `phone` int(11) NOT NULL,
  `picture` varchar(80) NOT NULL,
  `death_person` varchar(60) NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `condolences`
--

INSERT INTO `condolences` (`id_poster`, `name_poster`, `message`, `phone`, `picture`, `death_person`, `date_posted`) VALUES
(1, 'M ferguson', 'sorry ooo', 2147483647, '1479237438.png', '12', '2016-11-15 20:17:18'),
(2, 'Alfa romeo', 'Kpele oo', 2147483647, '1479240200.png', '12', '2016-11-15 21:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `deadpeople`
--

CREATE TABLE IF NOT EXISTS `deadpeople` (
`id` bigint(60) unsigned NOT NULL,
  `name` varchar(60) NOT NULL,
  `bio` varchar(250) NOT NULL,
  `image` varchar(80) NOT NULL,
  `upload_date` datetime NOT NULL,
  `death_date` date NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `deadpeople`
--

INSERT INTO `deadpeople` (`id`, `name`, `bio`, `image`, `upload_date`, `death_date`, `slug`) VALUES
(12, 'Masood Abiola BBBBBBBBBBB', 'good not so good BBBBBBBBBBBBB', '1479225930.png', '2016-11-15 17:05:30', '2019-12-09', 'masood-abiola-bbbbbbbbbbb'),
(13, 'Dele Giwa', 'The one and only proficient journalist, killed by a letter bomb. RIP man.', '1479227490.png', '2016-11-15 17:31:30', '1995-08-20', 'dele-giwa'),
(14, 'Ken Saro wiwa', 'He want justice, equity and good governance, so he fell foul of the cabal the big, wicked and merciless cabal. RIP Man. ', '1479227936.png', '2016-11-15 17:38:56', '1989-11-02', 'ken-saro-wiwa'),
(15, 'Funmi Ransom Kuti', 'First woman to drive a car in Nigeria? no problem, the first man was killed by death too.', '1479228756.jpg', '2016-11-15 17:52:36', '1996-03-23', 'funmi-ransom-kuti'),
(16, 'Fela Kuti.', 'Ordinary men are scared of a mad man but death doesn''t give a damn. Man you could have done bera.', '1479228959.png', '2016-11-15 17:55:59', '1987-02-11', 'fela-kuti.'),
(17, 'Umaru Yaradua', 'Talked about vision 2020, was envied by death, so death killed him. RIP man.', '1479229154.JPG', '2016-11-15 17:59:14', '2008-09-22', 'umaru-yaradua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `condolences`
--
ALTER TABLE `condolences`
 ADD PRIMARY KEY (`id_poster`);

--
-- Indexes for table `deadpeople`
--
ALTER TABLE `deadpeople`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `condolences`
--
ALTER TABLE `condolences`
MODIFY `id_poster` bigint(60) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `deadpeople`
--
ALTER TABLE `deadpeople`
MODIFY `id` bigint(60) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
