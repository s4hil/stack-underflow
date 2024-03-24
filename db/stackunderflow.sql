-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 09:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stack_underflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `_comments`
--

CREATE TABLE `_comments` (
  `c_id` int(11) NOT NULL,
  `comment` varchar(512) COLLATE utf8mb4_bin NOT NULL,
  `d_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `_comments`
--

INSERT INTO `_comments` (`c_id`, `comment`, `d_id`, `user_id`, `timestamp`) VALUES
(30, 'Even I had the same doubt, pls someone post an explanation', 67, 17, '2024-03-15 00:12:08'),
(33, 'TCP meaning Transmission Control Protocol, is a communications standard for delivering data and messages through networks. TCP is a basic standard that defines the rules of the internet and is a common protocol used to deliver data in digital network communications.', 67, 16, '2024-03-24 19:21:52'),
(35, 'In server side you can read original file name and other info which is automatically included to request by browser in filename formData parameter.', 68, 19, '2024-03-24 19:24:27'),
(36, 'In server side you can read original file name and other info which is automatically included to request by browser in filename formData parameter.', 70, 19, '2024-03-24 19:25:59'),
(37, 'Optionally you can use jquery', 70, 19, '2024-03-24 19:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `_discussions`
--

CREATE TABLE `_discussions` (
  `d_id` int(11) NOT NULL,
  `topic` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `details` varchar(512) COLLATE utf8mb4_bin NOT NULL,
  `code_img` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `_discussions`
--

INSERT INTO `_discussions` (`d_id`, `topic`, `details`, `code_img`, `user_id`, `timestamp`) VALUES
(67, 'TCP in Computer Networks', 'How does TCP actually work?', 'image.9330.2992523.jpg', 18, '2024-03-15 00:11:12'),
(68, 'Preview an image before it is uploaded - javascript', 'I want to be able to preview a file (image) before it is uploaded. The preview action should be executed all in the browser without using Ajax to upload the image.\r\n\r\nHow can I do this?', 'Screenshot 205.png', 15, '2024-03-24 19:11:21'),
(70, 'javaScript - Upload file', 'This will create a button that allows the users of the web page to select a file via an OS File open... dialog in the browser.', 'Screenshot 206.png', 16, '2024-03-24 19:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `_likes`
--

CREATE TABLE `_likes` (
  `like_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `_likes`
--

INSERT INTO `_likes` (`like_id`, `d_id`, `user_id`, `timestamp`) VALUES
(19, 67, 19, '2024-03-24 14:26:44'),
(20, 67, 19, '2024-03-24 14:26:46'),
(21, 67, 19, '2024-03-24 14:26:48'),
(25, 68, 16, '2024-03-24 19:21:22'),
(26, 68, 16, '2024-03-24 19:21:23'),
(27, 68, 16, '2024-03-24 19:21:24'),
(28, 70, 16, '2024-03-24 19:21:26'),
(29, 70, 16, '2024-03-24 19:21:26'),
(30, 68, 19, '2024-03-24 19:24:34'),
(31, 68, 19, '2024-03-24 19:24:34'),
(32, 68, 19, '2024-03-24 19:24:35'),
(33, 68, 19, '2024-03-24 19:24:36'),
(34, 68, 19, '2024-03-24 19:24:37'),
(35, 68, 19, '2024-03-24 19:24:37'),
(36, 67, 19, '2024-03-24 19:24:40'),
(37, 67, 19, '2024-03-24 19:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `_students`
--

CREATE TABLE `_students` (
  `id` int(11) NOT NULL,
  `content` varchar(512) COLLATE utf8mb4_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `_students`
--

INSERT INTO `_students` (`id`, `content`, `user_id`, `username`) VALUES
(85, 'Stack Underflow boasts a massive community of developers, ensuring that questions get answered quickly and accurately.', 16, 'Sahil Parray'),
(89, 'The website is clean and user-friendly interface makes it easy to navigate and find relevant information', 15, 'Preyushi Abrol'),
(91, 'Moderators actively maintain the site is quality, keeping it free from spam, irrelevant content, and low-quality answers.', 19, 'Mohin Khan');

-- --------------------------------------------------------

--
-- Table structure for table `_users`
--

CREATE TABLE `_users` (
  `user_id` int(11) NOT NULL,
  `roll_no` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `full_name` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `user_img` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `_users`
--

INSERT INTO `_users` (`user_id`, `roll_no`, `full_name`, `email`, `password`, `user_img`, `timestamp`) VALUES
(15, '1dt21cs116', 'Preyushi Abrol', 'p@g.com', '202cb962ac59075b964b07152d234b70', '1.jpg', '2024-03-02 18:39:18'),
(16, '1dt21cs126', 'Sahil Parray', 'sahil@gmail.com', '202cb962ac59075b964b07152d234b70', '2.jpg', '2024-03-02 18:46:55'),
(17, '1dt21cs119', 'Rakshith', 'rakshithhegde25@gmail.com', '202cb962ac59075b964b07152d234b70', '3.jpg', '2024-03-14 01:33:24'),
(18, '1dt21cs105', 'Sohan', 'sohanpati@gmail.com', '202cb962ac59075b964b07152d234b70', '4.jpg', '2024-03-15 00:09:59'),
(19, '1dt21cs089', 'Mohin Khan', 'mohin@gmail.com', '202cb962ac59075b964b07152d234b70', '5.jpg', '2024-03-24 14:25:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_comments`
--
ALTER TABLE `_comments`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `_discussions`
--
ALTER TABLE `_discussions`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `_likes`
--
ALTER TABLE `_likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `_likes_ibfk_1` (`user_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `_students`
--
ALTER TABLE `_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_users`
--
ALTER TABLE `_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_comments`
--
ALTER TABLE `_comments`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `_discussions`
--
ALTER TABLE `_discussions`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `_likes`
--
ALTER TABLE `_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `_students`
--
ALTER TABLE `_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `_users`
--
ALTER TABLE `_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `_comments`
--
ALTER TABLE `_comments`
  ADD CONSTRAINT `_comments_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `_discussions` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `_comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `_discussions`
--
ALTER TABLE `_discussions`
  ADD CONSTRAINT `_discussions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `_users` (`user_id`);

--
-- Constraints for table `_likes`
--
ALTER TABLE `_likes`
  ADD CONSTRAINT `_likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `_likes_ibfk_2` FOREIGN KEY (`d_id`) REFERENCES `_discussions` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
