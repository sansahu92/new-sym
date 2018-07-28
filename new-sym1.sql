-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2018 at 01:40 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new-sym1`
--

-- --------------------------------------------------------

--
-- Table structure for table `configurator_items`
--

CREATE TABLE `configurator_items` (
  `id` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `function` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurator_items`
--

INSERT INTO `configurator_items` (`id`, `sequence`, `name`, `type`, `function`) VALUES
(1, 1, 'Profile', 'select', ''),
(2, 2, 'Colour', 'select', 'setFrameExteriorColour'),
(3, 3, 'Glass', 'select', ''),
(4, 4, 'Glass Spacer Bar', 'select hidden', '');

-- --------------------------------------------------------

--
-- Table structure for table `configurator_other_items_options`
--

CREATE TABLE `configurator_other_items_options` (
  `id` int(11) NOT NULL,
  `configurator_item_id` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conditions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurator_other_items_options`
--

INSERT INTO `configurator_other_items_options` (`id`, `configurator_item_id`, `sequence`, `name`, `colour`, `conditions`) VALUES
(1, 1, 1, 'alupast IDEAL 4000', '', ''),
(2, 1, 2, 'alupast IDEAL 5000', '', ''),
(3, 1, 3, 'VEKA Softline 70 AD', '', ''),
(4, 2, 1, 'white', '#fff', ''),
(5, 2, 2, 'golden oak (2178001)', '#713013', '1:2'),
(6, 2, 3, 'silver (715505_083)', '#989795', '3'),
(7, 3, 1, 'standard double glazing', '', ''),
(8, 3, 2, 'custom double glazing', '', ''),
(9, 3, 3, 'custom triple glazing', '', ''),
(10, 4, 1, 'aluminium (standard)', '', ''),
(11, 4, 2, 'Swisspacer Ultimate', '', '1:1,2&&3:2'),
(12, 4, 3, 'TGI', '', '1:3&&3:2'),
(13, 4, 4, '2x Swisspacer Ultimate', '', '1:1,2&&3:3');

-- --------------------------------------------------------

--
-- Table structure for table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20180727124342');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configurator_items`
--
ALTER TABLE `configurator_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configurator_other_items_options`
--
ALTER TABLE `configurator_other_items_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configurator_items`
--
ALTER TABLE `configurator_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `configurator_other_items_options`
--
ALTER TABLE `configurator_other_items_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
