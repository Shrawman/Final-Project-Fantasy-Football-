-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2022 at 01:55 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(20) NOT NULL,
  `apass` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `apass`) VALUES
(101, 'rudra'),
(102, 'ramisa');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

DROP TABLE IF EXISTS `matches`;
CREATE TABLE IF NOT EXISTS `matches` (
  `matchid` int(20) NOT NULL AUTO_INCREMENT,
  `team1` varchar(200) NOT NULL,
  `team2` varchar(200) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`matchid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`matchid`, `team1`, `team2`, `datetime`) VALUES
(1, 'Arsenal', 'Manchester City', '2022-10-19 19:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) NOT NULL,
  `pclub` varchar(200) NOT NULL,
  `ptype` varchar(200) NOT NULL,
  `ppoints` int(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`pid`, `pname`, `pclub`, `ptype`, `ppoints`) VALUES
(1, 'David De Gea', 'Manchester United', 'Goalkepper', 0),
(2, 'Marcus Rashford', 'Manchester United', 'Midfielder', 0),
(3, 'Jadon Sancho', 'Manchester United', 'Midfielder', 0),
(4, 'Erling Halland', 'Manchester City', 'Forward', 0),
(5, 'Ederson Moses', 'Manchester City', 'Goalkepper', 0),
(6, 'John Stones', 'Manchester City', 'Defender', 0),
(7, 'Harry Maguire', 'Manchester United', 'Defender', 0),
(8, 'Kieron Tierny', 'Arsenal', 'Defender', 0),
(9, 'Gabriel Jesus', 'Arsenal', 'Forward', 0),
(10, 'Martin Odegard', 'Arsenal', 'Midfielder', 0),
(11, 'Bukayo  Saka', 'Arsenal', 'Midfielder', 0),
(12, 'Aaron Ramsdale', 'Arsenal', 'Goalkepper', 0),
(13, 'Hugo Lloris', 'Tottenham', 'Goalkepper', 0),
(14, 'Christian Romero', 'Tottenham', 'Defender', 0),
(15, 'Eric Dier', 'Tottenham', 'Defender', 0),
(16, 'Eren Tanganga', 'Tottenham', 'Defender', 0),
(17, 'Pierie Emric Hojgerib', 'Tottenham', 'Midfielder', 0),
(18, 'Son-Hyueng-Min', 'Tottenham', 'Midfielder', 0),
(23, 'Richardlison', 'Tottenham', 'Forward', 0),
(20, 'Kevin De Bruyne', 'Manchester City', 'Midfielder', 0),
(21, 'Phil Phoden', 'Manchester City', 'Midfielder', 0),
(22, 'Harry Kane', 'Tottenham', 'Forward', 0),
(35, 'Rob Holding', 'Arsenal', 'Defender', 0),
(34, 'Oleksander Zinchenko', 'Arsenal', 'Defender', 0),
(27, 'Richardlison', 'Tottenham', 'Forward', 0),
(28, 'Matt Doherty', 'Tottenham', 'Defender', 0),
(29, 'Robert Sanchez', 'Tottenham', 'Defender', 0),
(30, 'Emerson Royal', 'Tottenham', 'Defender', 0),
(31, 'Djed Spancer', 'Tottenham', 'Defender', 0),
(32, 'Yuvz Bissouma', 'Tottenham', 'Midfielder', 0),
(33, 'Harvy White', 'Tottenham', 'Midfielder', 0),
(36, 'Lino Sousa', 'Arsenal', 'Defender', 0),
(37, 'Thomas Partey', 'Arsenal', 'Midfielder', 0),
(38, 'Matthew Smith', 'Arsenal', 'Midfielder', 0),
(39, 'Emile Smith-Rowe', 'Arsenal', 'Midfielder', 0),
(40, 'Bruno Fernandez', 'Manchester United', 'Midfielder', 0),
(41, 'Christian Eriksen', 'Manchester United', 'Midfielder', 0),
(42, 'Casemiro', 'Manchester United', 'Midfielder', 0),
(43, 'Diego Dalot', 'Manchester United', 'Defender', 0),
(44, 'Rafael Varane', 'Manchester United', 'Defender', 0),
(45, 'Lisandro Martinez', 'Manchester United', 'Defender', 0),
(46, 'Ruben Dias', 'Manchester City', 'Defender', 0),
(47, 'Kyle Walker', 'Manchester City', 'Defender', 0),
(48, 'Nathan Ake', 'Manchester City', 'Defender', 0),
(49, 'Riyad Mahrez', 'Manchester City', 'Midfielder', 0),
(50, 'Jack Grelish', 'Manchester City', 'Midfielder', 0),
(51, 'Kelvin Phillips', 'Manchester City', 'Midfielder', 0);

-- --------------------------------------------------------

--
-- Table structure for table `playingplayers`
--

DROP TABLE IF EXISTS `playingplayers`;
CREATE TABLE IF NOT EXISTS `playingplayers` (
  `ppid` int(20) NOT NULL AUTO_INCREMENT,
  `playerid` int(20) NOT NULL,
  `ppname` varchar(200) NOT NULL,
  `ppclub` varchar(200) NOT NULL,
  `pptype` varchar(200) NOT NULL,
  `goal` int(20) NOT NULL,
  `assist` int(20) NOT NULL,
  `pppoints` int(20) NOT NULL,
  PRIMARY KEY (`ppid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playingplayers`
--

INSERT INTO `playingplayers` (`ppid`, `playerid`, `ppname`, `ppclub`, `pptype`, `goal`, `assist`, `pppoints`) VALUES
(1, 4, 'Erling Halland', 'Manchester City', 'Forward', 1, 5, 19),
(2, 5, 'Ederson Moses', 'Manchester City', 'Goalkepper', 0, 0, 0),
(3, 6, 'John Stones', 'Manchester City', 'Defender', 0, 0, 0),
(4, 10, 'Martin Odegard', 'Arsenal', 'Midfielder', 0, 0, 0),
(5, 35, 'Rob Holding', 'Arsenal', 'Defender', 0, 0, 0),
(6, 39, 'Emile Smith-Rowe', 'Arsenal', 'Midfielder', 0, 0, 0),
(7, 47, 'Kyle Walker', 'Manchester City', 'Defender', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `userid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `teamname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `points` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `username`, `teamname`, `email`, `password`, `points`, `rank`) VALUES
(1, 'Shrawman', 'Ole Mamar Vokto', 'shrawmanrudra@gamil.com', '12345', 319, 2),
(9, 'Nayon', 'Aussies', 'nayon@gmail.com', 'qwerty', 0, 5),
(6, 'Ashraful', 'Dynamo', 'alexdanderdas@gmail.com', '1234567890', 0, 6),
(10, 'Shaudho', 'BadSkull', 'shaudho@gmail.com', '123456', 108, 3),
(11, 'Umit', 'Team Google', 'alexdanderdas@gmail.com', 'qazwsx', 0, 7),
(12, 'Ashfaq', 'White Rose', 'ashfaq@gmail.com', 'qwerty', 0, 8),
(13, 'Shrawman', 'Black BD', 'shrawmanrudra@gamil.com', '12345678', 0, 9),
(14, 'Kala Manik', 'Black BD', 'shrawmanrudra@gamil.com', '12345678', 0, 10),
(15, 'Avik Chaki', 'White Rose', 'alexdanderdas@gmail.com', '12345', 0, 11),
(16, 'Ramisa', 'LavaLava', 'ramisa@gmail.com', 'spankyou', 362, 1),
(17, 'Sadia', 'kutta', 'sadiamahfuz80@gmail.com', 'sadia@80', 0, 12),
(18, 'Rafiul', 'Real Madrid', 'rafiul@gmail.com', '1234567', 0, 13),
(19, 'Avik Chaki', 'LoknoBoy', 'avikchaki@gmail.com', '1234qwer', 22, 4),
(20, 'Ramisa', 'Black BD', 'nayonrudra@gamil.com', '12345', 0, 14),
(21, 'shoudho', 'Black BD', 'shd@gmail.com', '12345', 19, 15);

-- --------------------------------------------------------

--
-- Table structure for table `scorecard`
--

DROP TABLE IF EXISTS `scorecard`;
CREATE TABLE IF NOT EXISTS `scorecard` (
  `sid` int(20) NOT NULL AUTO_INCREMENT,
  `id` int(20) NOT NULL,
  `matchid` int(20) NOT NULL,
  `selplay` varchar(200) NOT NULL,
  `points` int(20) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scorecard`
--

INSERT INTO `scorecard` (`sid`, `id`, `matchid`, `selplay`, `points`) VALUES
(1, 21, 1, '5, 10, 6, 4', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
