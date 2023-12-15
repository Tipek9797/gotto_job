-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 10:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gottojob`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `image` varchar(45) NOT NULL,
  `urldetails` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `posted` varchar(45) NOT NULL,
  `pay` varchar(45) NOT NULL,
  `jobposition` varchar(45) NOT NULL,
  `jobtype` varchar(45) NOT NULL,
  `urllistings` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `image`, `urldetails`, `name`, `location`, `posted`, `pay`, `jobposition`, `jobtype`, `urllistings`) VALUES
(1, 'images/logos/google.png', 'job-details.php', 'Technical Lead', 'Kuala, Malaysia', '10 hours ago', '$20k', 'Internship', 'Freelance', 'job-listings.php'),
(2, 'images/logos/apple.png', 'job-details.php', 'Business Director', 'California, USA', '1 day ago', '$90k', 'Senior', 'Full Time', 'job-listings.php'),
(3, 'images/logos/meta.png', 'job-details.php', 'HR Manager', 'Tower, Paris', '22 hours ago', '$50k', 'Junior', 'Contract', 'job-listings.php'),
(4, 'images/logos/slack.png', 'job-details.php', 'Dev Ops', 'Bangkok, Thailand', '40 minutes ago', '$75k - 80k', 'Senior', 'Part Time', 'job-listings.php'),
(5, 'images/logos/creative-market.png', 'job-details.php', 'UX Designer', 'Bangkok, Thailand', '2 hours ago', '$100k', 'Entry', 'Remote', 'job-listings.php');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `meno` varchar(45) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `meno`, `url`) VALUES
(1, 'Homepage', 'index.php'),
(2, 'About Gotto', 'about.php'),
(3, 'Job Listings', 'job-listings.php'),
(4, 'Job Details', 'job-details.php'),
(5, 'Contact', 'contact.php'),
(6, 'Register', 'index.php'),
(7, 'Login', 'admin/login.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
