-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2018 at 03:44 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ottoscouting`
--

-- --------------------------------------------------------

--
-- Table structure for table `matchdata`
--

CREATE TABLE `matchdata` (
  `scout_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `auto_in_switch` int(11) NOT NULL DEFAULT '0',
  `auto_on_scale` int(11) NOT NULL DEFAULT '0',
  `auto_time_for_switch` int(11) NOT NULL,
  `auto_time_for_scale` int(11) NOT NULL,
  `switch_side` enum('L','R') NOT NULL,
  `scale_side` enum('L','R') NOT NULL,
  `enemy_switch_side` enum('L','R') NOT NULL,
  `teleop_on_switch` int(11) NOT NULL DEFAULT '0',
  `teleop_on_scale` int(11) NOT NULL DEFAULT '0',
  `teleop_on_enemy_switch` int(11) NOT NULL DEFAULT '0',
  `scored_in_vault` int(11) NOT NULL DEFAULT '0',
  `taken_from_portal` int(11) NOT NULL DEFAULT '0',
  `taken_from_power_cube_zone` int(11) NOT NULL DEFAULT '0',
  `taken_from_platform_zone` int(11) NOT NULL DEFAULT '0',
  `taken_from_enemy_side` int(11) NOT NULL DEFAULT '0',
  `taken_from_random_area` int(11) NOT NULL DEFAULT '0',
  `park_on_platform` enum('yes','no') NOT NULL DEFAULT 'no',
  `climbs_responsible_for` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `scale_low` enum('yes','failed','not_attempted') NOT NULL DEFAULT 'not_attempted',
  `scale_medium` enum('yes','failed','not_attempted') NOT NULL DEFAULT 'not_attempted',
  `scale_high` enum('yes','failed','not_attempted') NOT NULL DEFAULT 'not_attempted',
  `notes` varchar(1024) NOT NULL,
  `climb_mech_discription` varchar(1024) NOT NULL,
  `auto_cross` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matchdata`
--

INSERT INTO `matchdata` (`scout_id`, `team_id`, `match_id`, `auto_in_switch`, `auto_on_scale`, `auto_time_for_switch`, `auto_time_for_scale`, `switch_side`, `scale_side`, `enemy_switch_side`, `teleop_on_switch`, `teleop_on_scale`, `teleop_on_enemy_switch`, `scored_in_vault`, `taken_from_portal`, `taken_from_power_cube_zone`, `taken_from_platform_zone`, `taken_from_enemy_side`, `taken_from_random_area`, `park_on_platform`, `climbs_responsible_for`, `scale_low`, `scale_medium`, `scale_high`, `notes`, `climb_mech_discription`, `auto_cross`) VALUES
(0, 12, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', '', '', 'no'),
(0, 1746, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', '', '', 'no'),
(1, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', '', '', 'no'),
(1, 3, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', '', '', 'no'),
(1, 3, 1, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', '', '', 'no'),
(1, 3, 1, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', '', '', 'yes'),
(1, 21, 1, 0, 0, 0, 0, 'L', 'L', 'L', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', '', '', 'yes'),
(1, 21, 1, 33, 32, 2, 12, 'L', 'L', 'L', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', '', '', 'yes'),
(1, 21, 1, 33, 32, 2, 12, 'L', 'L', 'L', 3, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', '', '', 'yes'),
(1, 21, 1, 33, 32, 2, 12, 'L', 'L', 'L', 3, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', '', '', 'yes'),
(1, 21, 1, 33, 32, 2, 12, 'L', 'L', 'L', 3, 2, 3, 2, 0, 1, 2, 3, 2, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', '', '', 'yes'),
(0, 0, 0, 0, 0, 0, 0, 'L', 'L', 'L', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'yes', '0', 'yes', 'yes', 'not_attempted', '', '', 'yes'),
(0, 0, 0, 0, 0, 0, 0, 'L', 'L', 'L', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'yes', '0', 'yes', 'yes', 'not_attempted', '', '', 'yes'),
(0, 0, 0, 0, 0, 0, 0, 'L', 'L', 'L', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'yes', '0', 'yes', 'yes', 'yes', '', '', 'yes'),
(0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', 'trsgfdgfs', 'fgddfsfg', 'no'),
(0, 0, 0, 0, 0, 0, 0, 'L', 'L', 'L', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', 'hello', 'world', ''),
(0, 0, 0, 0, 0, 0, 0, 'L', 'L', 'L', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', 'hello', 'world', ''),
(0, 0, 0, 0, 0, 0, 0, 'L', 'L', 'L', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', 'hello', 'world', ''),
(0, 0, 0, 0, 0, 0, 0, 'L', 'L', 'L', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no', '0', 'not_attempted', 'not_attempted', 'not_attempted', 'hello', 'world', ''),
(0, 0, 0, 0, 0, 0, 0, 'L', 'L', 'L', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'yes', '0', 'yes', 'yes', 'yes', 'asdffdsa', '', 'yes'),
(0, 0, 0, 0, 0, 0, 0, 'L', 'L', 'L', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'yes', '0', 'yes', 'yes', 'yes', 'asdffdsa', 'asdfasfd', 'yes'),
(1, 1746, 3, 1, 2, 1, 2, 'R', 'R', 'L', 2, 7, 3, 0, 0, 6, 2, 4, 1, '', '1', 'yes', '', '', 'This was great robot', 'Awesome!', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `scouts`
--

CREATE TABLE `scouts` (
  `Full Name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scouts`
--

INSERT INTO `scouts` (`Full Name`) VALUES
('Andrew Morris'),
('Thomas Priego'),
('Cooper Meitz'),
('Christian Scanlon'),
('Trent Callan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
