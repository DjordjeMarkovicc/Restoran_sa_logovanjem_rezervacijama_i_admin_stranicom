-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 11:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restourant`
--

-- --------------------------------------------------------

--
-- Table structure for table `fri`
--

CREATE TABLE `fri` (
  `id` int(11) NOT NULL,
  `14-16` varchar(20) NOT NULL,
  `16-18` varchar(20) NOT NULL,
  `18-20` varchar(20) NOT NULL,
  `20-22` varchar(20) NOT NULL,
  `22-24` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fri`
--

INSERT INTO `fri` (`id`, `14-16`, `16-18`, `18-20`, `20-22`, `22-24`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mon`
--

CREATE TABLE `mon` (
  `id` int(11) NOT NULL,
  `14-16` varchar(20) NOT NULL,
  `16-18` varchar(20) NOT NULL,
  `18-20` varchar(20) NOT NULL,
  `20-22` varchar(20) NOT NULL,
  `22-24` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mon`
--

INSERT INTO `mon` (`id`, `14-16`, `16-18`, `18-20`, `20-22`, `22-24`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '1/djole', ''),
(4, 'Bla', '', '', '', ''),
(5, '', '', '1/djole', '1/djole', ''),
(6, '', 'Ana', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sat`
--

CREATE TABLE `sat` (
  `id` int(11) NOT NULL,
  `14-16` varchar(20) NOT NULL,
  `16-18` varchar(20) NOT NULL,
  `18-20` varchar(20) NOT NULL,
  `20-22` varchar(20) NOT NULL,
  `22-24` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sat`
--

INSERT INTO `sat` (`id`, `14-16`, `16-18`, `18-20`, `20-22`, `22-24`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sun`
--

CREATE TABLE `sun` (
  `id` int(11) NOT NULL,
  `14-16` varchar(20) NOT NULL,
  `16-18` varchar(20) NOT NULL,
  `18-20` varchar(20) NOT NULL,
  `20-22` varchar(20) NOT NULL,
  `22-24` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sun`
--

INSERT INTO `sun` (`id`, `14-16`, `16-18`, `18-20`, `20-22`, `22-24`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `the`
--

CREATE TABLE `the` (
  `id` int(11) NOT NULL,
  `14-16` varchar(20) NOT NULL,
  `16-18` varchar(20) NOT NULL,
  `18-20` varchar(20) NOT NULL,
  `20-22` varchar(20) NOT NULL,
  `22-24` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `the`
--

INSERT INTO `the` (`id`, `14-16`, `16-18`, `18-20`, `20-22`, `22-24`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tue`
--

CREATE TABLE `tue` (
  `id` int(11) NOT NULL,
  `14-16` varchar(20) NOT NULL,
  `16-18` varchar(20) NOT NULL,
  `18-20` varchar(20) NOT NULL,
  `20-22` varchar(20) NOT NULL,
  `22-24` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tue`
--

INSERT INTO `tue` (`id`, `14-16`, `16-18`, `18-20`, `20-22`, `22-24`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `br_tel` int(20) NOT NULL,
  `admin` int(1) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ime`, `prezime`, `username`, `password`, `br_tel`, `admin`, `created_at`) VALUES
(1, 'Djordje', 'Marinkovic', 'djole', '$2y$10$egZn7FpnVsvULY.AQRCbTeLgm0Si4j1e2eSWM4O08NNLrbhX6.xOO', 60555555, 1, '2019-05-04 10:01:46'),
(2, 'Dejan', 'Miskovic', 'djole1', '$2y$10$OsstIJ.6rYuca1OKkbPgSOnVer6pPdG1Y6KU2uzkDzvse0xL8lUQW', 60888888, 2, '2019-05-04 10:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `wed`
--

CREATE TABLE `wed` (
  `id` int(11) NOT NULL,
  `14-16` varchar(20) NOT NULL,
  `16-18` varchar(20) NOT NULL,
  `18-20` varchar(20) NOT NULL,
  `20-22` varchar(20) NOT NULL,
  `22-24` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wed`
--

INSERT INTO `wed` (`id`, `14-16`, `16-18`, `18-20`, `20-22`, `22-24`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fri`
--
ALTER TABLE `fri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sat`
--
ALTER TABLE `sat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sun`
--
ALTER TABLE `sun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `the`
--
ALTER TABLE `the`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tue`
--
ALTER TABLE `tue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wed`
--
ALTER TABLE `wed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fri`
--
ALTER TABLE `fri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mon`
--
ALTER TABLE `mon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sat`
--
ALTER TABLE `sat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sun`
--
ALTER TABLE `sun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `the`
--
ALTER TABLE `the`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tue`
--
ALTER TABLE `tue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wed`
--
ALTER TABLE `wed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
