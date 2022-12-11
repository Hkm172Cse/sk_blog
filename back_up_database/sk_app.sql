-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 11:38 AM
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
-- Table structure for table `aboutus_meta`
--

CREATE TABLE `aboutus_meta` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus_meta`
--

INSERT INTO `aboutus_meta` (`id`, `title`, `des`, `tag`) VALUES
(1, 'about us  title', 'about page meta', 'about tag');

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
(1, '1669789401-about-us-sec-img.jpg', '1669789401-about-discussion-img.jpg', '1669789401-about-presentation-img.jpg');

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
(1, 'About us', 'We’re all About To Helping You.', 'SK-Associates began its journey from 2006, started by a team of professionals from Legal (ICS Legal) to IT (TechICS). It is our sheer \r\n\r\ndedication where we have worked collectively as a team tobring success. We have focussed on the legal and IT sectors which are the heart of our business.');

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
(1, 'About Us', 'Ruis aute irure dolor in reprehenderit in voluptate velit cillum\r\nnulla pariatur nostrud exercitation.', 'About', '1669009881-background-two.webp');

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
(2, 'Improve & Innovate\r\nBusiness Trends', 'Duis aute irure dolor in reprehenderit in voluptate velit cillum nulla pariatur\r\nnostrud exercitation.', 'Get start', 'Learn more', '1668686598-card-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `business_overview`
--

CREATE TABLE `business_overview` (
  `id` int(11) NOT NULL,
  `project` varchar(200) NOT NULL,
  `project_num` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `customer_num` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `data_num` int(11) NOT NULL,
  `class_base` varchar(255) NOT NULL,
  `class_base_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_overview`
--

INSERT INTO `business_overview` (`id`, `project`, `project_num`, `customer`, `customer_num`, `data`, `data_num`, `class_base`, `class_base_num`) VALUES
(1, 'Project', 200, 'Customer Satisfication', 100, 'Data Analyst Input', 600, 'World Class Base', 10);

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
(1, '1669783102-case-report1-img.jpg', 'Business, Finance', 'Financial Report 2019', 'link'),
(2, '1669783152-case-report2-img.jpg', 'Business, Finance', 'Financial Report 201', 'sdfafd'),
(5, '1669783177-case-report3-img.jpg', 'Financial Report 201', 'Financial Report 201', 'https://www.facebook.com'),
(6, '1669783199-case-report4-img.jpg', 'Financial Report 201', 'Financial Report 201', 'https://www.facebook.com'),
(7, '1669783220-case-report5-img.jpg', 'Financial Report 201', 'Financial Report 201', 'https://www.facebook.com'),
(8, '1669783243-case-report6-img.jpg', 'Financial Report 201', 'Financial Report 201', 'https://www.facebook.com'),
(9, '1669784415-case-report1-img.jpg', 'Financial Report 201', 'Financial Report 201', 'https://www.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `client_banner`
--

CREATE TABLE `client_banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_banner`
--

INSERT INTO `client_banner` (`id`, `name`, `title`, `button`, `image`) VALUES
(1, 'Our Clients', 'Clients make us who we are today. So we thank you for being part of this great journey.', 'Client', '1669209055-blog-icon2.png'),
(2, 'Get in Touch two', 'sfdasf', 'Send message', '1670063575-about-sec-img.jpg'),
(3, 'Clients', 'Clients make us who we are today. So we thank you for being part of this great journey.', 'Clients', '1670063825-about-discussion-img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `client_list`
--

CREATE TABLE `client_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_list`
--

INSERT INTO `client_list` (`id`, `name`, `title`, `image`) VALUES
(2, 'Ritz London', 'The world\'s greatest hotel, as conceived by the world\'s greatest hotelier.', '1669887688-blog-icon3.png'),
(3, 'Orange', 'This is our Company director', '1669887663-blog-icon1.png'),
(4, 'Deloitte LLP', 'Is the brand where dedicated independent firms throughout the world collaborate to provide audit, consulting, financial advisory, risk management and tax services to selected clients.', '1669887726-blog-icon3.png'),
(5, 'Wilson James', 'Leading providers of managed security and customer services in the UK.', '1669887844-blog-icon2.png');

-- --------------------------------------------------------

--
-- Table structure for table `client_meta`
--

CREATE TABLE `client_meta` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_meta`
--

INSERT INTO `client_meta` (`id`, `title`, `des`, `tag`) VALUES
(1, 'client Meta', 'Client Meta title', 'client description meta');

-- --------------------------------------------------------

--
-- Table structure for table `client_text`
--

CREATE TABLE `client_text` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_text`
--

INSERT INTO `client_text` (`id`, `image`, `des`) VALUES
(1, '1669886532-video-poster.jpg', 'At SK Associates, we believe that trust is an important factor in successful business relationship. This page shows some of the people we have worked with, who represents some of the worlds most successful organisations.\r\n\r\nWe have principles and rules that govern our behaviours and our qualities as individuals ensure we are here to provide the right solution to your requirements. Despite being a diverse business, our values help us create a unified image of our Group through consistent delivery of services.\r\n\r\nWith every business there is a story behind its success. At SK-Associates we still have mileage left to get to where we would like to. However, from 2006 we have been developing and engaging with our clients making sure we learn and gain experience each day. As a consultancy business our services span throughout the world.');

-- --------------------------------------------------------

--
-- Table structure for table `community_banner`
--

CREATE TABLE `community_banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community_banner`
--

INSERT INTO `community_banner` (`id`, `name`, `title`, `button`, `image`) VALUES
(1, 'Community', 'Spreading love and unity keeps us going.Read more about the projects we are involved in.', 'Community', 'sdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `community_meta`
--

CREATE TABLE `community_meta` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community_meta`
--

INSERT INTO `community_meta` (`id`, `title`, `des`, `tag`) VALUES
(1, 'Community Title', 'Community Description', 'Community Tag');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `subject` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`, `subject`) VALUES
(3, 'Get in Touch two', '01792268539', 'azizulhakim000111@gmail.com', 'get in touch', NULL),
(4, 'Get in Touch two', '01792268539', 'azizulhakim000111@gmail.com', 'get in touc', NULL),
(6, 'Abdul korim', '01792268539', 'abdulkorimseo@gmail.com', 'Contact with us', NULL),
(7, 'Azizul hakim', '01792268539', 'azizulhakim000111@gmail.com', 'welcome', NULL),
(9, 'Asif', '01792268539', 'valaacosni@gmail.com', 'New Email', NULL),
(10, 'Azizul hakim', '01792268539', 'valaacosni@gmail.com', 'new message', 'Email subject'),
(11, 'jone andry', '01792268539', 'azizulhakim000111@gmail.com', 'I am software engineer', 'Email subject');

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
(1, 'News', 'link'),
(5, 'Video', 'name 3 left'),
(6, 'Contact us', 'link'),
(7, 'Case studies', 'name 3 left');

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
(3, 'Faq\'s', 'Link one right'),
(4, 'Projects', 'name four'),
(5, 'Mon', 'Link one right'),
(6, 'Cokkie Notice', 'name four');

-- --------------------------------------------------------

--
-- Table structure for table `home_meta`
--

CREATE TABLE `home_meta` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_meta`
--

INSERT INTO `home_meta` (`id`, `title`, `des`, `tag`) VALUES
(1, 'Sk-associates home', 'description', 'tag tag');

-- --------------------------------------------------------

--
-- Table structure for table `know_aboutus_content`
--

CREATE TABLE `know_aboutus_content` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `comments` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `know_aboutus_content`
--

INSERT INTO `know_aboutus_content` (`id`, `image`, `image_title`, `date`, `comments`, `title`, `des`) VALUES
(1, '1669804371-post-featured4.jpg', 'How we are velevering', '2022-11-25', 25, 'HOW WE ARE DELIVERING', 'We always work to ensure that we can provide benefit to our clients by combining the highest standards of legal knowledge with local expertise by maintaining the depth, quality and scale of resources necessary to meet our clients’ needs...'),
(2, '1669804398-post-featured3.jpg', 'sdfds', '2022-11-23', 45, 'OUR STATEMENT', 'An ambition to be a trusted business partner to our clients underlines our business strategy. We aim to achieve this goal through sustained investment in managing knowledge and information, and by creating a working culture in...'),
(3, '1669804420-post-featured2.jpg', 'sdfds', '2022-11-22', 45454, 'WORKING ON THE SECOND DECADE', 'Since 2006 SK-Associates has combined talent and knowledge to provide consultancy services. We have established the companies below...'),
(4, '1669804449-post-featured.jpg', 'sdfds', '2022-11-22', 45454, 'Site Links', 'SK-Associates is the \"parent\" company of the following businesses. You can click on the following to view more information related to....');

-- --------------------------------------------------------

--
-- Table structure for table `know_about_commuity`
--

CREATE TABLE `know_about_commuity` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `know_about_commuity`
--

INSERT INTO `know_about_commuity` (`id`, `name`, `title`, `des`) VALUES
(1, 'Community', 'We’re all About To Helping you', 'Spreading love and unity keeps us going. Read more about the projects we are involved in. Our strength comes from our one Firm approach and our partnership ethos.\r\n\r\nThey underpin our ability to deliver excellent client service and create a working environment where talented people can succeed. We are ambitious for our clients and ourselves but we understand the importance of making a positive impact on the community at large.');

-- --------------------------------------------------------

--
-- Table structure for table `know_about_heading`
--

CREATE TABLE `know_about_heading` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `know_about_heading`
--

INSERT INTO `know_about_heading` (`id`, `title`, `des`) VALUES
(1, 'About Us', 'Know About SK-Associates');

-- --------------------------------------------------------

--
-- Table structure for table `know_community_content`
--

CREATE TABLE `know_community_content` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `know_community_content`
--

INSERT INTO `know_community_content` (`id`, `image`, `image_title`, `date`, `comments`, `title`, `des`) VALUES
(1, '1669811729-post-featured.jpg', 'How we are velevering', '2022-11-25', '25', 'Helping the environment', 'We believe changing the way you travel to work can reduce climate change effects and local air pollution...'),
(2, '1669811749-post-featured4.jpg', 'image title', '2022-11-22', '45', 'Charities', 'Some of the charities we have made our donations to and we added some information regarding the charity work..');

-- --------------------------------------------------------

--
-- Table structure for table `our_staff`
--

CREATE TABLE `our_staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_staff`
--

INSERT INTO `our_staff` (`id`, `name`, `title`, `image`) VALUES
(1, 'Rayan Collins', 'Consultant', '1669896216-rayan-img.jpg'),
(2, 'Brian Rooney', 'Advisor', '1669896252-brian-img.jpg'),
(3, 'Mike', 'Manager', '1669896281-mike-img.jpg');

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
(1, 'Our Clients', 'Trusted by World’s Best Companies');

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
(1, '1669792676-craft-logo.png'),
(2, '1669792701-haus-logo.png'),
(3, '1669792719-hype-logo.png'),
(4, '1669792737-hyper-logo.png'),
(5, '1669792756-logo.png'),
(6, '1669792774-minimum.png'),
(7, '1669792822-power-logo.png'),
(8, '1669792847-winner-logo.png');

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
-- Table structure for table `portfolio_active`
--

CREATE TABLE `portfolio_active` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_active`
--

INSERT INTO `portfolio_active` (`id`, `name`, `link`) VALUES
(1, 'ICS Legal', 'https://www.ICS Legal.com'),
(3, '321 ICS', 'https://www.321 ICS.com'),
(4, 'Tech ICS', 'https://www.Tech ICS.com'),
(5, 'Harlsden Residence', 'https://www.Harlsden Residence.com');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_banner`
--

CREATE TABLE `portfolio_banner` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `button` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_banner`
--

INSERT INTO `portfolio_banner` (`id`, `name`, `title`, `button`, `image`) VALUES
(1, 'PortFolio', 'You can take note as we have provided of our businesses.', 'Portfolio', '1669181947-blog-icon3.png');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_meta`
--

CREATE TABLE `portfolio_meta` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_meta`
--

INSERT INTO `portfolio_meta` (`id`, `title`, `des`, `tag`) VALUES
(1, 'Portfolio title', 'Portfolio Meta description', 'portfolio');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_text`
--

CREATE TABLE `portfolio_text` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_text`
--

INSERT INTO `portfolio_text` (`id`, `title`, `des`) VALUES
(1, 'Portfolio Text', 'You can take note as we have provided of our businesses. Copy the link and paste in to your URL field and find out more about our services. SK Associates is committed to its growing brand and our delivery to success. We continue to grow our group of businesses to support our core delivery.\r\n\r\nHere you will find more information on the services we provide and how we can support both individuals and organisations through Legal, HR Management and IT. On the right hand side, there are links to our websites, which will have detailed information of the services provided. Should you require specific support, please visit the appropriate website and get in contact with us or alternatively please use our support form to contact us.\r\n\r\nShould you require further information, please use our support form..');

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
(2, '1669784456-slider-left2-img.png', 'Eiusmod tempor incididunt ut labore et dolore magna aliqua rue znim aeu minim veniam, quis\r\n                     nostrud exercitation ullamco laboris nisi ut alirui commodo conseruat aute irure dolor\r\n                     reprehenderit.', 'Kevin Andrew', 'Co-Founder'),
(4, '1669721628-slider-left1-img.png', 'Eiusmod tempor incididunt ut labore et dolore magna aliqua rue znim  aeu minim veniam, quis\r\n                     nostrud exercitation ullamco laboris nisi ut alirui  commodo conseruat aute irure dolor\r\n                     reprehenderit.', 'Jone Endry', 'Co-Founder');

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
(1, 'About us', 'We have focussed on the legal and IT sectors which are the heart of our business.', 'We have grown to become one of the leading professionals in consultancy services and managing business operations.\r\n\r\nIn such a short space of time we have grasped on to the high level of demand in both industries and have led to become instinctive in decision making, professional on the advice we provide to our clients.', '1670141807-about-sec-img.jpg.jpg', '1670141807-video-poster.jpg.jpg', 'get_started');

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
(12, 'Create New Ways to Better Invest', 'Duis aute irure dolor in reprehenderit in voluptate velit cillum\r\nnulla pariatur nostrud exercitation.', '1668579503-banner.jpg', 'Get Started', 'Learn More', 'https://www.youtube.com', 'https://www.youtube.com');

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
  `status` varchar(60) NOT NULL,
  `subject` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_get_in_touch`
--

INSERT INTO `table_get_in_touch` (`id`, `name`, `title`, `button`, `status`, `subject`) VALUES
(1, 'Get in Touch', 'Send as a Message', 'Send message', 'inactive', 'Email subject'),
(2, 'Get in Touch', 'Sent us a Message', 'send me', 'inactive', NULL),
(3, 'Get in Touch two', 'contact with us', 'Send message', 'inactive', NULL),
(4, 'Get in Touch', 'Send us a Message', 'Send Now', 'inactive', 'Email subject'),
(5, 'get in touch 4', 'contact with us', 'send me message', 'inactive', NULL),
(6, 'Get in Touch two', 'title', 'Send message', 'active', 'Email subject');

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
(1, 'Law Firm Legal Case Management System introduced by Tech ICS', '2022-11-20', 'Law Firm Legal Case Management System introduced by Tech ICS', 'Jone Williwam', '1669725032-business-growth.jpg'),
(4, 'Law Firm Legal Case Management System introduced by Tech ICS', '2022-11-20', 'Law Firm Legal Case Management System introduced by Tech ICS', 'David William', '1669725090-blog-img2.jpg'),
(5, 'Law Firm Legal Case Management System introduced by Tech ICS', '2022-11-20', 'Law Firm Legal Case Management System introduced by Tech ICS', 'David William', '1669725109-blog-img3.jpg');

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
(1, 'What we do', 'Service we provide', 'Quis autem vel eum iure repren\r\nderit qui in ea voluptate velit as\r\nse ruam nihil molestiae....', 'get started', '1668830748-logo.svg', 'Tech_legal', 'Quis autem vel eum iure reprenderit qui in ea voluptate velit asse ruam nihil molestiae....');

-- --------------------------------------------------------

--
-- Table structure for table `table_service_right`
--

CREATE TABLE `table_service_right` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_service_right`
--

INSERT INTO `table_service_right` (`id`, `name`, `title`, `link`) VALUES
(1, 'Tech ICS', 'Rostrud exercitation alia consequatur auor...', 'legal.com'),
(2, 'ICS Legal', 'Nostrud exercitation alia\r\nconsequatur auor...', 'legal.com'),
(3, 'ICS Legal', 'Nostrud exercitation alia\r\nconsequatur auor...', 'legal.com'),
(4, 'ICS Legal', 'Nostrud exercitation alia\r\nconsequatur auor...', 'legal.com');

-- --------------------------------------------------------

--
-- Table structure for table `team_banner`
--

CREATE TABLE `team_banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_banner`
--

INSERT INTO `team_banner` (`id`, `name`, `title`, `image`, `button`) VALUES
(1, 'our teams', 'Ruis aute irure dolor in reprehenderit in voluptate velit cillumnulla pariatur nostrud exercitation.', '1669891912-about-discussion-img.jpg', 'team');

-- --------------------------------------------------------

--
-- Table structure for table `team_meta`
--

CREATE TABLE `team_meta` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_meta`
--

INSERT INTO `team_meta` (`id`, `title`, `des`, `tag`) VALUES
(1, 'team tag tit', 'team  tag description', 'team tag');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_portfolio`
--

CREATE TABLE `upcoming_portfolio` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming_portfolio`
--

INSERT INTO `upcoming_portfolio` (`id`, `name`, `link`) VALUES
(1, 'Hamilton Webb', 'www.Hamiltonwebb'),
(2, 'Jobs Library', 'www.jobslibrary'),
(3, 'Jobs Library', 'www.jobslibrary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus_meta`
--
ALTER TABLE `aboutus_meta`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `client_banner`
--
ALTER TABLE `client_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_list`
--
ALTER TABLE `client_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_meta`
--
ALTER TABLE `client_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_text`
--
ALTER TABLE `client_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_banner`
--
ALTER TABLE `community_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_meta`
--
ALTER TABLE `community_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
-- Indexes for table `home_meta`
--
ALTER TABLE `home_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `know_aboutus_content`
--
ALTER TABLE `know_aboutus_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `know_about_commuity`
--
ALTER TABLE `know_about_commuity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `know_about_heading`
--
ALTER TABLE `know_about_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `know_community_content`
--
ALTER TABLE `know_community_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_staff`
--
ALTER TABLE `our_staff`
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
-- Indexes for table `portfolio_active`
--
ALTER TABLE `portfolio_active`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_banner`
--
ALTER TABLE `portfolio_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_meta`
--
ALTER TABLE `portfolio_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_text`
--
ALTER TABLE `portfolio_text`
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
-- Indexes for table `table_service_right`
--
ALTER TABLE `table_service_right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_banner`
--
ALTER TABLE `team_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_meta`
--
ALTER TABLE `team_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_portfolio`
--
ALTER TABLE `upcoming_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus_meta`
--
ALTER TABLE `aboutus_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client_banner`
--
ALTER TABLE `client_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_list`
--
ALTER TABLE `client_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client_meta`
--
ALTER TABLE `client_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_text`
--
ALTER TABLE `client_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `community_banner`
--
ALTER TABLE `community_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `community_meta`
--
ALTER TABLE `community_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `footer_left`
--
ALTER TABLE `footer_left`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `footer_right`
--
ALTER TABLE `footer_right`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_meta`
--
ALTER TABLE `home_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `know_aboutus_content`
--
ALTER TABLE `know_aboutus_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `know_about_commuity`
--
ALTER TABLE `know_about_commuity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `know_about_heading`
--
ALTER TABLE `know_about_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `know_community_content`
--
ALTER TABLE `know_community_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_staff`
--
ALTER TABLE `our_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partner_logo`
--
ALTER TABLE `partner_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `portfolio_active`
--
ALTER TABLE `portfolio_active`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio_banner`
--
ALTER TABLE `portfolio_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio_meta`
--
ALTER TABLE `portfolio_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio_text`
--
ALTER TABLE `portfolio_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_news`
--
ALTER TABLE `table_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_service`
--
ALTER TABLE `table_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_service_right`
--
ALTER TABLE `table_service_right`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team_banner`
--
ALTER TABLE `team_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_meta`
--
ALTER TABLE `team_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upcoming_portfolio`
--
ALTER TABLE `upcoming_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
