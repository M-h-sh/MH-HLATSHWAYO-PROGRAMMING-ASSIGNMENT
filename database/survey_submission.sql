-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 03:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_submission`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `age` varchar(3) NOT NULL,
  `food` varchar(20) NOT NULL,
  `eat_out` varchar(20) NOT NULL,
  `movies` varchar(20) NOT NULL,
  `tv` varchar(20) NOT NULL,
  `radio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `surname`, `first_name`, `contact_number`, `date`, `age`, `food`, `eat_out`, `movies`, `tv`, `radio`) VALUES
(1, 'mth', 'mh', '087-987-098', '2023-06-06', '34', 'Pizza', 'Strongly agree(1)', 'Agree(2)', 'Neutral(3)', 'Disagree(4)'),
(2, 'mhayise', 'mh', '089-097-038', '2023-06-20', '34', 'Pasta', 'Strongly disagree(5)', 'Strongly agree(1)', 'Agree(2)', 'Neutral(3)'),
(3, 'sibanyo', 'sp', '078-089-020', '2023-06-14', '45', ' Beef stir fry', 'Strongly agree(1)', 'Agree(2)', 'Neutral(3)', 'Disagree(4)'),
(4, 'skhosana', 'shy', '087-098-780', '2023-06-05', '28', 'Pasta', 'Agree(2)', 'Agree(2)', 'Agree(2)', 'Agree(2)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
