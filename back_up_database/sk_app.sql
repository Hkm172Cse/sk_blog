-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 02:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sk_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `sort_des` varchar(1000) NOT NULL,
  `button_one` varchar(255) NOT NULL,
  `button_two` varchar(255) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `title`, `sort_des`, `button_one`, `button_two`, `image`) VALUES
(2, 'asfdsaf', 'sdfsf', 'sdfasf', 'sdfadf', '1668686598-card-bg.jpg'),
(3, 'asfdsaf', 'sdfsf', 'sdfasf', 'sdfadf', '1668686726-loader.gif'),
(4, 'asfdsaf', 'sdfsf', 'sdfasf', 'sdfadf', '1668686745-Unign.png'),
(6, 'sfdsdf', 'sdfds', 'sdfs', 'sdfsdf', '1668688975-Unign.png'),
(7, 'asfdsaf', 'sdfsf', 'sdfasf', 'sdfadf', '1668689033-face.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_about_us`
--

CREATE TABLE `table_about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sort_des` varchar(1000) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img_one` varchar(255) NOT NULL,
  `img_two` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_about_us`
--

INSERT INTO `table_about_us` (`id`, `title`, `sort_des`, `des`, `img_one`, `img_two`, `link`) VALUES
(1, 'What we do', 'Service we provide', 'Quis autem vel eum iure reprenderit qui in ea voluptate velit as se ruam nihil molestiae....', '1668600442-tech.png.png', '1668600433-background-one.webp.webp', 'get started');

-- --------------------------------------------------------

--
-- Table structure for table `table_administrator`
--

CREATE TABLE `table_administrator` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_administrator`
--

INSERT INTO `table_administrator` (`id`, `user_name`, `email`, `password`) VALUES
(1, 'sk_one_user', 'skone@email.com', 'sk_one_password'),
(2, 'Azizul hakim', 'azizulhakim000111@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `table_banner`
--

CREATE TABLE `table_banner` (
  `id` int(11) NOT NULL,
  `sort_des` varchar(1000) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `image` varchar(255) DEFAULT '1',
  `btn_one` varchar(30) NOT NULL,
  `btn_two` varchar(30) NOT NULL,
  `btn_one_link` varchar(255) NOT NULL,
  `btn_two_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_banner`
--

INSERT INTO `table_banner` (`id`, `sort_des`, `des`, `image`, `btn_one`, `btn_two`, `btn_one_link`, `btn_two_link`) VALUES
(12, 'Create New Ways to Better Invest', 'Create New Ways to Better Invest', '1668579503-banner.jpg', 'Get Started', 'Learn More', 'https://www.youtube.com', 'https://www.youtube.com'),
(14, 'Create New Ways to Better Invest', 'Create New Ways to Better Invest', '1668580714-banner.svg', 'Get Started', 'Learn More', 'http://www.facebook.com', 'https://www.youtube.com'),
(15, 'Create New Ways to Better Invest', 'Create New Ways to Better Invest', '1668581354-banner.svg', 'Get Started', 'Learn More', 'http://www.facebook.com', 'https://www.youtube.com'),
(16, 'Create New Ways to Better Invest', 'Create New Ways to Better Invest', '1668581388-banner.png', 'Get Started', 'Learn More', 'https://www.youtube.com', 'https://www.youtube.com'),
(18, 'Create New Ways to Better Invest', 'Create New Ways to Better Invest', '1668581948-banner.svg', 'Get Started', 'Learn More', 'http://www.facebook.com', 'https://www.youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `table_service`
--

CREATE TABLE `table_service` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `service_btn` varchar(255) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_service`
--

INSERT INTO `table_service` (`id`, `section`, `title`, `des`, `service_btn`, `image`, `service_title`, `service_des`) VALUES
(1, 'What we doooo', 'Service we provide', 'Quis autem vel eum iure repren\r\nderit qui in ea voluptate velit as\r\nse ruam nihil molestiae....', 'get started', '1668674252-card-bg.jpg', 'Tech_legal', 'Quis autem vel eum iure reprenderit qui in ea voluptate velit asse ruam nihil molestiae....'),
(2, 'What we doooo', 'asdf', 'sfdsa', 'asdfa', '1668680832-background-three.webp', 'sdf', 'sdfds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_about_us`
--
ALTER TABLE `table_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_administrator`
--
ALTER TABLE `table_administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_banner`
--
ALTER TABLE `table_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_service`
--
ALTER TABLE `table_service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `table_about_us`
--
ALTER TABLE `table_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_administrator`
--
ALTER TABLE `table_administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_banner`
--
ALTER TABLE `table_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `table_service`
--
ALTER TABLE `table_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
