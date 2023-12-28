-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 05:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clocking`
--

-- --------------------------------------------------------

--
-- Table structure for table `cllockout`
--

CREATE TABLE `cllockout` (
  `phno` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `staffid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cllockout`
--

INSERT INTO `cllockout` (`phno`, `date`, `time`, `staffid`) VALUES
('2147483647', '08/08/2022', '04:00', '003'),
('818181818', '08/08/2022', '04:55', '002');

-- --------------------------------------------------------

--
-- Table structure for table `clockin`
--

CREATE TABLE `clockin` (
  `phno` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `staffid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clockin`
--

INSERT INTO `clockin` (`phno`, `date`, `time`, `staffid`) VALUES
('2147483647', '08/08/2022', '08:30', '003'),
('818181818', '08/08/2022', '10:55', '002');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `deptid` int(10) NOT NULL,
  `dptname` varchar(200) DEFAULT NULL,
  `staffid` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptid`, `dptname`, `staffid`) VALUES
(1, 'HR', '002'),
(2, 'SOFTWARE', '003'),
(3, 'customer care', '005'),
(5, 'Accounting', '004');

-- --------------------------------------------------------

--
-- Table structure for table `staff_record`
--

CREATE TABLE `staff_record` (
  `firstname` varchar(300) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phno` varchar(50) NOT NULL,
  `adesignation` varchar(300) NOT NULL,
  `role` varchar(300) NOT NULL,
  `staffid` varchar(200) DEFAULT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_record`
--

INSERT INTO `staff_record` (`firstname`, `lastname`, `gender`, `email`, `phno`, `adesignation`, `role`, `staffid`, `pic`) VALUES
('AYUA', 'SIMON', 'male', 'lilkumsy@gmail.com', '+2348164540549', '62 road, 6th avenue gwarinpa', 'admin', '003', ''),
('kumar', 'akash', 'male', 'lilkumsy@yahoo.com', '2382828328282', 'software', 'admin', '005', ''),
('Onumo', 'Maxwell', 'Male', 'Maxwell@gmail.com', '818181818', 'Mpape,aBUJA', 'staff', '004', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cllockout`
--
ALTER TABLE `cllockout`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `clockin`
--
ALTER TABLE `clockin`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `staff_record`
--
ALTER TABLE `staff_record`
  ADD PRIMARY KEY (`phno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
