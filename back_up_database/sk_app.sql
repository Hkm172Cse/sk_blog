-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 07:54 AM
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
-- Table structure for table `about_aboutus_img`
--

CREATE TABLE `about_aboutus_img` (
  `id` int(11) NOT NULL,
  `image_one` varchar(255) NOT NULL,
  `image_two` varchar(255) NOT NULL,
  `image_three` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_aboutus_img`
--

INSERT INTO `about_aboutus_img` (`id`, `image_one`, `image_two`, `image_three`) VALUES
(1, '1669036183-loader.gif', '1669036235-logo-mini.svg', '1669035689-logo-mini.svg');

-- --------------------------------------------------------

--
-- Table structure for table `about_aboutus_text`
--

CREATE TABLE `about_aboutus_text` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_aboutus_text`
--

INSERT INTO `about_aboutus_text` (`id`, `name`, `title`, `des`) VALUES
(1, 'About us', 'We’re all About To Helping You', 'SK-Associates began its journey from 2006, started by a team of professionals from Legal (ICS Legal) to IT (TechICS).It is our sheer dedication where we have worked collectively as a team to bring success. We have focussed on the legal and IT sectors which are the heart of our business.');

-- --------------------------------------------------------

--
-- Table structure for table `about_banner`
--

CREATE TABLE `about_banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_banner`
--

INSERT INTO `about_banner` (`id`, `name`, `title`, `button`, `image`) VALUES
(1, 'about banner page', 'this banner page title', 'more link link', '1669009881-background-two.webp'),
(2, 'new about banner', 'this about banner title', 'see - more', '1669010705-loader.gif');

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
(6, 'sfdsdf', 'sdfds', 'sdfs', 'sdfsdf', '1668831031-favicon.ico'),
(7, 'asfdsaf', 'sdfsf', 'sdfasf', 'sdfadf', '1668689033-face.jpg'),
(8, 'asfdsaf', 'sdfsf', 'sdfasf', 'sdfadf', '1668830646-background-one.webp'),
(9, 'asfdsaf', 'sdfsf', 'sdfasf', 'sdfadf', '1668830673-logo-mini.svg');

-- --------------------------------------------------------

--
-- Table structure for table `business_overview`
--

CREATE TABLE `business_overview` (
  `id` int(11) NOT NULL,
  `project` varchar(255) NOT NULL,
  `project_num` varchar(255) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `customer_num` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `data_num` varchar(255) NOT NULL,
  `class_base` varchar(255) NOT NULL,
  `class_base_num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_overview`
--

INSERT INTO `business_overview` (`id`, `project`, `project_num`, `customer`, `customer_num`, `data`, `data_num`, `class_base`, `class_base_num`) VALUES
(1, 'project Done', '200', 'Customer Satisfication', '100%', 'Data Analyst Input', '600', 'World Class Base', '10+');

-- --------------------------------------------------------

--
-- Table structure for table `case_content`
--

CREATE TABLE `case_content` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sort_title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_content`
--

INSERT INTO `case_content` (`id`, `image`, `title`, `sort_title`, `link`) VALUES
(1, '1668834663-loader.gif', 'business study', 'finance', 'link'),
(2, '1668836624-techics-logo.png', 'case study one', 'two', 'sdfafd'),
(5, '1668837149-logo-mini.svg', 'case one', 'case one title', 'https://www.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `footer_left`
--

CREATE TABLE `footer_left` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_left`
--

INSERT INTO `footer_left` (`id`, `name`, `link`) VALUES
(1, 'Name One left', 'link'),
(5, 'name 3', 'name 3 left');

-- --------------------------------------------------------

--
-- Table structure for table `footer_right`
--

CREATE TABLE `footer_right` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_right`
--

INSERT INTO `footer_right` (`id`, `name`, `link`) VALUES
(3, 'name two right', 'Link one right'),
(4, 'name four', 'name four');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `title`, `des`) VALUES
(1, 'Our Partner team', 'Trusted by World’s Best Companies');

-- --------------------------------------------------------

--
-- Table structure for table `partner_logo`
--

CREATE TABLE `partner_logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_logo`
--

INSERT INTO `partner_logo` (`id`, `logo`) VALUES
(1, '1669014625-loader.gif'),
(2, '1669015370-card-bg.jpg');

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
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `image`, `review`, `client_name`, `designation`) VALUES
(2, '1668849843-tech.png', 'zsa', 'sfdsd', 'sdfsdf');

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
(16, 'Create New Ways to Better Invest', 'Create New Ways to Better Invest', '1668830772-banner.gif', 'Get Started', 'Learn More', 'https://www.youtube.com', 'https://www.youtube.com'),
(18, 'Create New Ways to Better Invest', 'Create New Ways to Better Invest', '1668581948-banner.svg', 'Get Started', 'Learn More', 'http://www.facebook.com', 'https://www.youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `table_check`
--

CREATE TABLE `table_check` (
  `id` int(11) NOT NULL,
  `img_one` varchar(1000) NOT NULL,
  `img_two` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_check`
--

INSERT INTO `table_check` (`id`, `img_one`, `img_two`) VALUES
(1, 'C:\\xampp\\tmp\\php8BF.tmp', 'C:\\xampp\\tmp\\php8C0.tmp'),
(2, 'C:\\xampp\\tmp\\php5320.tmp', 'C:\\xampp\\tmp\\php5321.tmp'),
(3, 'C:\\xampp\\tmp\\php2DA.tmp', 'C:\\xampp\\tmp\\php2EA.tmp'),
(4, 'C:\\xampp\\tmp\\phpB218.tmp', NULL),
(5, 'C:\\xampp\\tmp\\phpEF25.tmp', 'C:\\xampp\\tmp\\phpEF26.tmp'),
(6, 'C:\\xampp\\tmp\\php9412.tmp', 'C:\\xampp\\tmp\\php9413.tmp'),
(7, 'C:\\xampp\\tmp\\php8DAB.tmp', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_get_in_touch`
--

CREATE TABLE `table_get_in_touch` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_get_in_touch`
--

INSERT INTO `table_get_in_touch` (`id`, `name`, `title`, `button`, `status`) VALUES
(1, 'Get in Touch', 'Send as a Message', 'Send message', 'inactive'),
(2, 'Get in Touch', 'Sent us a Message', 'send me', 'inactive'),
(3, 'Get in Touch two', 'contact with us', 'Send message', 'inactive'),
(4, 'Get in Touch three', 'contact with us', 'Send message', 'inactive'),
(5, 'get in touch 4', 'contact with us', 'send me message', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `table_news`
--

CREATE TABLE `table_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `news` varchar(1000) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_news`
--

INSERT INTO `table_news` (`id`, `title`, `date`, `news`, `tag`, `image`) VALUES
(1, 'title', '2022-11-20', 'news soooooooooooooooooooooooooooooooooooon', 'tag', '1668942557-favicon.ico'),
(2, 'tilte', '2022-11-20', 'news', 'tag', '1668942531-logo-mini.svg');

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
(1, 'What we doooo', 'Service we provide', 'Quis autem vel eum iure repren\r\nderit qui in ea voluptate velit as\r\nse ruam nihil molestiae....', 'get started', '1668830748-logo.svg', 'Tech_legal', 'Quis autem vel eum iure reprenderit qui in ea voluptate velit asse ruam nihil molestiae....'),
(2, 'What we doooo', 'asdf', 'sfdsa', 'asdfa', '1668680832-background-three.webp', 'sdf', 'sdfds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_aboutus_img`
--
ALTER TABLE `about_aboutus_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_aboutus_text`
--
ALTER TABLE `about_aboutus_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_banner`
--
ALTER TABLE `about_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_overview`
--
ALTER TABLE `business_overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_content`
--
ALTER TABLE `case_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_left`
--
ALTER TABLE `footer_left`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_right`
--
ALTER TABLE `footer_right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_logo`
--
ALTER TABLE `partner_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
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
-- Indexes for table `table_check`
--
ALTER TABLE `table_check`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_get_in_touch`
--
ALTER TABLE `table_get_in_touch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_news`
--
ALTER TABLE `table_news`
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
-- AUTO_INCREMENT for table `about_aboutus_img`
--
ALTER TABLE `about_aboutus_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_aboutus_text`
--
ALTER TABLE `about_aboutus_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_banner`
--
ALTER TABLE `about_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `business_overview`
--
ALTER TABLE `business_overview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `case_content`
--
ALTER TABLE `case_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_left`
--
ALTER TABLE `footer_left`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_right`
--
ALTER TABLE `footer_right`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partner_logo`
--
ALTER TABLE `partner_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `table_check`
--
ALTER TABLE `table_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_get_in_touch`
--
ALTER TABLE `table_get_in_touch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_news`
--
ALTER TABLE `table_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_service`
--
ALTER TABLE `table_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
