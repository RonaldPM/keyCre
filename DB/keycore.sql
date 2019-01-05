-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2019 at 05:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keycore`
--

-- --------------------------------------------------------

--
-- Table structure for table `keybase`
--

CREATE TABLE `keybase` (
  `id` int(12) NOT NULL,
  `key_hash` longtext NOT NULL,
  `key_slice` longtext NOT NULL,
  `metadata` longtext,
  `use_stat` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keybase`
--

INSERT INTO `keybase` (`id`, `key_hash`, `key_slice`, `metadata`, `use_stat`) VALUES
(25, '$2y$11$vH6dheLZyvniWmHGIj7Fi.T61W/qSI1lqYF.6eI/hjHWkZ5QTg9ZC', 'RVN3', NULL, 0),
(26, '$2y$11$SjIbd6fdTlRo.qsaETki9urO1y903EmN3gK/XbM8sRlfGebYyM1lC', 'F5YD', NULL, 0),
(27, '$2y$11$mxO9n9qkYiUovU87/fZpK.hKP90nDGhWH9fEg4Nh19sASRxTcGqma', 'U1QX', NULL, 0),
(28, '$2y$11$3L4l59r04.EvzvC58cSk8uWVWPIQpWjDgEwOTuj4e3m5Cq/lwK5f6', 'VZEC', NULL, 0),
(29, '$2y$11$l8ZCLFsvEJCewaS/SGtk2.OxHeRarUxJWVbyuDms1dN.KLFrd6a4q', '2QG4', NULL, 0),
(30, '$2y$11$A4qyE8qjTH67.0EqlOB/6O48MkeljmAHIGE9h4kfV9JnnKmL9Fw2K', 'J0KG', NULL, 0),
(31, '$2y$11$EfqujM/0cqqRFw2Fg9IR3uOf3kr5HcIaMYLwGtHE04OrkUPyfJYRy', 'ORGLG', NULL, 0),
(32, '$2y$11$FR1sst01LL0zBOXb9/luNexUKreAXOpgjlcHjlq3Lwc9IujyVi0qy', '1ECSZ', NULL, 0),
(33, '$2y$11$7EpGkxc1LqWb4.4o4lcH0ufAgC8jFdd23u5jAQFABC.4Xd/RHQwAC', 'QCEKR', NULL, 0),
(34, '$2y$11$/io5VX06C6RPTqbb0TidguIaxUssDRgji6E8NXg.on8GjKwLgf3F6', 'Y4DYJ', NULL, 0),
(35, '$2y$11$npHBwGDJJEpEGKuFWqUz5unX.4wMnz26qivBIas0RkBXX7mxUEne2', 'YSEBR', NULL, 0),
(36, '$2y$11$CqaY18O.pQ69j1zHk/ctTe0gcARkii6Y4SBrvwn4xsJMuy7NvJCG.', 'BOV9S', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keybase`
--
ALTER TABLE `keybase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keybase`
--
ALTER TABLE `keybase`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
