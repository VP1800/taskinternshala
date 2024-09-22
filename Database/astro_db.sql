-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2024 at 06:03 PM
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
-- Database: `astro_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cards`
--

CREATE TABLE `tbl_cards` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sprice` decimal(10,0) NOT NULL,
  `lprice` decimal(10,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cards`
--

INSERT INTO `tbl_cards` (`id`, `image`, `title`, `description`, `sprice`, `lprice`, `created_at`, `updated_at`) VALUES
(1, './asset/dbimg/image1.png', 'Sindhurmani Rati Kamdev puja', 'This is the description of card 1.', 130, 140, '2024-09-22 14:52:49', '2024-09-22 14:52:49'),
(2, './asset/dbimg/image2.png', 'Sindhurmani Rati manmadha puja', 'This is the description of card 2.', 110, 120, '2024-09-22 14:52:49', '2024-09-22 14:52:49'),
(3, './asset/dbimg/image3.png', 'Sindhurmani Rati Kamdev puja', 'This is the description of card 3.', 130, 140, '2024-09-22 14:52:49', '2024-09-22 14:52:49'),
(4, './asset/dbimg/image4.png', 'Gauri Shankar puja', 'This is the description of card 4.', 130, 140, '2024-09-22 14:52:49', '2024-09-22 14:52:49'),
(5, './asset/dbimg/image5.png', 'Mangal dosh nivaran puja', 'This is the description of card 5.', 110, 120, '2024-09-22 14:52:49', '2024-09-22 14:52:49'),
(6, './asset/dbimg/image6.png', 'Gayatri puja for family', 'This is the description of card 6.', 130, 140, '2024-09-22 14:52:49', '2024-09-22 14:52:49'),
(7, './asset/dbimg/image7.png', 'Sarvashtak Shanti puja', 'This is the description of card 7.', 130, 140, '2024-09-22 14:52:49', '2024-09-22 14:52:49'),
(8, './asset/dbimg/image8.png', 'Rahu Mantra puja for family', 'This is the description of card 8.', 130, 140, '2024-09-22 14:52:49', '2024-09-22 14:52:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cards`
--
ALTER TABLE `tbl_cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cards`
--
ALTER TABLE `tbl_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
