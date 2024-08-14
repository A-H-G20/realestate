-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 03:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jana2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`admin_id`, `admin_username`, `admin_password`, `email`, `phone number`) VALUES
(1, 'admin', 'admin123', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `agencyid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `rent` varchar(255) NOT NULL,
  `selling` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `realtorid` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `propertyID` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realtor`
--

CREATE TABLE `realtor` (
  `realtorid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact info` varchar(255) NOT NULL,
  `agencyid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationID` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `check in date` int(11) NOT NULL,
  `check out date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `akkar` varchar(255) NOT NULL,
  `saadnayel` varchar(255) NOT NULL,
  `taalabaya` varchar(255) NOT NULL,
  `jbeil` varchar(255) NOT NULL,
  `baalbek` varchar(255) NOT NULL,
  `hermel` varchar(255) NOT NULL,
  `qarouan` varchar(255) NOT NULL,
  `nabatieh` varchar(255) NOT NULL,
  `zahle` varchar(255) NOT NULL,
  `saida` varchar(255) NOT NULL,
  `tripoli` varchar(255) NOT NULL,
  `baabda` varchar(255) NOT NULL,
  `mount lebanon` varchar(255) NOT NULL,
  `beirut` varchar(255) NOT NULL,
  `ksara` varchar(255) NOT NULL,
  `jounieh` varchar(255) NOT NULL,
  `batroun` varchar(255) NOT NULL,
  `maalaqa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search1`
--

CREATE TABLE `search1` (
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `search1`
--

INSERT INTO `search1` (`country`) VALUES
('saida'),
('saadnayel'),
('baalbek'),
('jbeil'),
('beirut'),
('mount lebanon'),
('tripoli'),
('nabatieh'),
('akkar'),
('jounieh'),
('zahle'),
('nabatieh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `role` varchar(55) NOT NULL DEFAULT 'user',
  `verification_code` text NOT NULL,
  `email_verified_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `phone_number`, `role`, `verification_code`, `email_verified_at`) VALUES
(13, 'ahmad', '$2y$10$R6EWSqKn.8fmo3Ze3q/8suZrvmubpydUjQxG8XFOX/sYsxM6nz/5S', 'ahmadghosen20@gmail.com', '76976048', 'user', '', '0000-00-00'),
(14, 'ahmad', '$2y$10$RI2.w2kfsJv4sj3ueUo0AO.wo7gZ0upl3CVA5/KTg4xolWKYi989S', '22130479@students.liu.edu.lb', '76976048', 'admin', '', '0000-00-00'),
(15, 'ahmad', '$2y$10$HSTaOwKHXYeqbbZH7468hOrUMNnfIc.hiMtXbfrMGhSC6bkZNAK6u', 'ahmadghosen281@gmail.com', '70123456', 'user', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
