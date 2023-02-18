-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 04:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weddingdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupledetails`
--

CREATE TABLE `coupledetails` (
  `CoupleName` varchar(255) NOT NULL,
  `GroomName` varchar(255) NOT NULL,
  `BrideName` varchar(255) NOT NULL,
  `Day` varchar(255) NOT NULL,
  `Month` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `TextAboutGroom` varchar(500) NOT NULL,
  `TextAboutBride` varchar(500) NOT NULL,
  `FirstMet` varchar(500) NOT NULL,
  `DATE` varchar(500) NOT NULL,
  `Proposal` varchar(500) NOT NULL,
  `WeddingDestinatoin` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupledetails`
--

INSERT INTO `coupledetails` (`CoupleName`, `GroomName`, `BrideName`, `Day`, `Month`, `Year`, `TextAboutGroom`, `TextAboutBride`, `FirstMet`, `DATE`, `Proposal`, `WeddingDestinatoin`) VALUES
('Jenna & James', 'James', 'Jenna', '24', '10', '2025', 'A good couple is one that is committed to each other and works to maintain a strong and healthy relationship. They are able to communicate openly and honestly with each other, sharing their thoughts and feelings without fear of judgment or reprisal. They respect each other\'s individuality and support each other in their personal and professional endeavors. A good couple knows that a strong relationship is built on trust, empathy, and mutual understanding, and they work hard to cultivate these qu', 'A good couple also understands the importance of spending quality time together. They make an effort to schedule regular date nights or romantic getaways to keep the spark alive in their relationship. They enjoy spending time with each other, whether it\'s trying out a new restaurant, taking a walk in the park, or simply cuddling up on the couch and watching a movie. A good couple recognizes the value of these shared experiences and the positive impact they can have on their relationship.', 'The first meeting between two people can be an exciting and nerve-wracking experience. It\'s a chance to make a first impression and start building a connection. The first date is often a time for exploring each other\'s interests, values, and personalities. It\'s a time to share stories, laughter, and learn more about each other. The proposal, on the other hand, is a defining moment in any relationship. It\'s a declaration of love and commitment that can be nerve-wracking for the proposer and the p', 'The first meeting between two people can be an exciting and nerve-wracking experience. It\'s a chance to make a first impression and start building a connection. The first date is often a time for exploring each other\'s interests, values, and personalities. It\'s a time to share stories, laughter, and learn more about each other. The proposal, on the other hand, is a defining moment in any relationship. It\'s a declaration of love and commitment that can be nerve-wracking for the proposer and the p', 'The first meeting between two people can be an exciting and nerve-wracking experience. It\'s a chance to make a first impression and start building a connection. The first date is often a time for exploring each other\'s interests, values, and personalities. It\'s a time to share stories, laughter, and learn more about each other. The proposal, on the other hand, is a defining moment in any relationship. It\'s a declaration of love and commitment that can be nerve-wracking for the proposer and the p', 'Badshahi Mosque'),
('Mack & Alisa', 'Mack', 'Alisa', '25', '11', '2026', 'A good couple is one that is committed to each other and works to maintain a strong and healthy relationship. They are able to communicate openly and honestly with each other, sharing their thoughts and feelings without fear of judgment or reprisal. They respect each other\'s individuality and support each other in their personal and professional endeavors. A good couple knows that a strong relationship is built on trust, empathy, and mutual understanding, and they work hard to cultivate these qu', 'A good couple also understands the importance of spending quality time together. They make an effort to schedule regular date nights or romantic getaways to keep the spark alive in their relationship. They enjoy spending time with each other, whether it\'s trying out a new restaurant, taking a walk in the park, or simply cuddling up on the couch and watching a movie. A good couple recognizes the value of these shared experiences and the positive impact they can have on their relationship.', 'The first meeting between two people can be an exciting and nerve-wracking experience. It\'s a chance to make a first impression and start building a connection. The first date is often a time for exploring each other\'s interests, values, and personalities. It\'s a time to share stories, laughter, and learn more about each other. The proposal, on the other hand, is a defining moment in any relationship. It\'s a declaration of love and commitment that can be nerve-wracking for the proposer and the p', 'The first meeting between two people can be an exciting and nerve-wracking experience. It\'s a chance to make a first impression and start building a connection. The first date is often a time for exploring each other\'s interests, values, and personalities. It\'s a time to share stories, laughter, and learn more about each other. The proposal, on the other hand, is a defining moment in any relationship. It\'s a declaration of love and commitment that can be nerve-wracking for the proposer and the p', 'The first meeting between two people can be an exciting and nerve-wracking experience. It\'s a chance to make a first impression and start building a connection. The first date is often a time for exploring each other\'s interests, values, and personalities. It\'s a time to share stories, laughter, and learn more about each other. The proposal, on the other hand, is a defining moment in any relationship. It\'s a declaration of love and commitment that can be nerve-wracking for the proposer and the p', 'Shahjahan Palace');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `username` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number_of_guests` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`username`, `email`, `address`, `number_of_guests`) VALUES
('Momin', '19101001-021@uskt.edu.pk', 'Ali Nagar Rasool Nagar Road Wazirabad', 2),
('Hassan ashfaq', 'Tahirhamza575@gmail.com', 'MOH Munshi Ibrahim Kunja Dist Gujrat', 3),
('Momin Raza', 'hassan.ashfaq82@gmail.com', 'Ali Nagar Rasool Nagar Road Wazirabad', 2),
('Momin', 'hassan.ashfaq82@gmail.com', 'Ali Nagar Rasool Nagar Road Wazirabad', 2),
('Hassan ashfaq', '19101001-021@uskt.edu.pk', 'Ali Nagar Rasool Nagar Road Wazirabad', 3),
('Momin', 'Tahirhamza575@gmail.com', 'MOH Munshi Ibrahim Kunja Dist Gujrat', 3),
('Momin', '19101001-021@uskt.edu.pk', 'Ali Nagar Rasool Nagar Road Wazirabad', 3),
('qalb_e_momin', 'hassan.ashfaq82@gmail.com', 'MOH Munshi Ibrahim Kunja Dist Gujrat', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
