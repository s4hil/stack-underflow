-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 04:20 PM
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
-- Database: `icsc_stackoverflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `_comments`
--

CREATE TABLE `_comments` (
  `c_id` int(11) NOT NULL,
  `comment` varchar(512) COLLATE utf8mb4_bin NOT NULL,
  `d_id` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `user_id` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `_comments`
--

INSERT INTO `_comments` (`c_id`, `comment`, `d_id`, `user_id`, `timestamp`) VALUES
(20, 'hi', '60', '13', '2023-07-04 17:12:22'),
(21, 'how is it going', '60', '13', '2023-07-04 17:12:30'),
(22, 'hi', '61', '13', '2023-07-04 17:14:07'),
(23, 'ok', '60', '13', '2023-12-13 13:46:11'),
(24, 'ok', '62', '15', '2024-03-02 18:40:12'),
(25, 'alright', '62', '16', '2024-03-02 18:47:23'),
(26, 'ok', '60', '16', '2024-03-02 18:47:44'),
(27, 'oka', '62', '15', '2024-03-13 13:48:51'),
(28, '..as', '60', '15', '2024-03-13 13:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `_discussions`
--

CREATE TABLE `_discussions` (
  `d_id` int(11) NOT NULL,
  `topic` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `details` varchar(512) COLLATE utf8mb4_bin NOT NULL,
  `code_img` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `user_id` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `_discussions`
--

INSERT INTO `_discussions` (`d_id`, `topic`, `details`, `code_img`, `user_id`, `timestamp`) VALUES
(60, 'funs in py', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.', '1860.png', '13', '2023-07-04 17:12:05'),
(61, 'sahil', 'sahil', '9.jpg', '13', '2023-07-04 17:13:44'),
(62, 'test', 'test details', '1.jpg', '15', '2024-03-02 18:39:57'),
(64, 'test', 'test details', '1.jpg', '15', '2024-03-02 18:39:57'),
(65, 'test', 'test details', '1.jpg', '15', '2024-03-02 18:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `_likes`
--

CREATE TABLE `_likes` (
  `like_id` int(11) NOT NULL,
  `d_id` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `user_id` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `_likes`
--

INSERT INTO `_likes` (`like_id`, `d_id`, `user_id`, `timestamp`) VALUES
(6, '60', '15', '2024-03-13 14:28:08'),
(7, '61', '15', '2024-03-13 14:28:14'),
(8, '62', '15', '2024-03-13 14:28:34'),
(9, '61', '15', '2024-03-13 14:28:48'),
(10, '62', '15', '2024-03-13 14:28:52'),
(11, '62', '15', '2024-03-13 14:29:13'),
(12, '62', '15', '2024-03-13 14:29:38'),
(13, '62', '15', '2024-03-13 14:30:05'),
(14, '65', '15', '2024-03-13 14:57:49'),
(15, '65', '15', '2024-03-13 14:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `_students`
--

CREATE TABLE `_students` (
  `id` int(11) NOT NULL,
  `course` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `student_name` varchar(128) COLLATE utf8mb4_bin DEFAULT NULL,
  `roll_no` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `_students`
--

INSERT INTO `_students` (`id`, `course`, `student_name`, `roll_no`) VALUES
(1, 'BCA', 'AFNAN NAZIR DHAR', 21550001),
(2, 'BCA', 'MUNEEB SHOWKAT', 21550002),
(3, 'BCA', 'MIDHAT ZAHOOR', 21550003),
(4, 'BCA', 'WASIL AYOUB KASHKARIE', 21550004),
(5, 'BCA', 'MOHAMMAD HASEEB KHAN', 21550005),
(6, 'BCA', 'Sabiya Gul', 21550006),
(7, 'BCA', 'MOOMIN ASHIQ HAKAK', 21550007),
(8, 'BCA', 'SAHIL ZAHOOR', 21550008),
(9, 'BCA', 'NUMAAN JAN', 21550009),
(10, 'BCA', 'FAIZAN FAROOQ', 21550010),
(11, 'BCA', 'FARZAN AHMAD MIR', 21550011),
(12, 'BCA', 'REHMAT KHURSHID', 21550012),
(13, 'BCA', 'TOWQEER ALTAF', 21550013),
(14, 'BCA', 'SAJID NABI', 21550014),
(15, 'BCA', 'FAISAL YAQOOB WANI', 21550015),
(16, 'BCA', 'SEHAR', 21550016),
(17, 'BCA', 'FILZA', 21550017),
(18, 'BCA', 'HUZAIF KHURSHID JAN', 21550018),
(19, 'BCA', 'SHEEBA HILAL', 21550019),
(20, 'BCA', 'TASKEEN RIYAZ', 21550020),
(21, 'BCA', 'Rukaya Nabi', 21550021),
(22, 'BCA', 'HANNAN AFZAL BABA', 21550022),
(23, 'BCA', 'ZIYA ROUF', 21550023),
(24, 'BCA', 'MOHAMMAD IRFAN RATHER', 21550024),
(25, 'BCA', 'ZUBAIR AHMAD', 21550025),
(26, 'BCA', 'WASIM AKRAM MIR', 21550026),
(27, 'BCA', 'FARMAAN MANTOO', 21550027),
(28, 'BCA', 'AAMIR HASSAN', 21550028),
(29, 'BCA', 'SAHIL SHOWKAT', 21550029),
(30, 'BCA', 'MOHAMMAD ARHAAN', 21550030),
(31, 'BCA', 'TAWQEER MANZOOR BUTT', 21550031),
(32, 'BCA', 'ARAZOO', 21550032),
(33, 'BCA', 'ADNAN YAMIN', 21550033),
(34, 'BCA', 'TEHLEEL BILAL', 21550034),
(35, 'BCA', 'BURHAN MUNEER', 21550035),
(36, 'BCA', 'TARSEEL', 21550036),
(37, 'BCA', 'AIMAN FAYAZ KATOO', 21550037),
(38, 'BCA', 'ZEESHAN JAN', 21550038),
(39, 'BCA', 'SHIFA ZAHID', 21550039),
(40, 'BCA', 'SEHRA', 21550040),
(41, 'BCA', 'SHEIKH HAAZIYAH ASHRAF', 21550041),
(42, 'BCA', 'SUHAIL RASOOL', 21550042),
(43, 'BCA', 'SHEIKH UMER FAROOQ', 21550043),
(44, 'BCA', 'DANISH MANZOOR HAJAM', 21550044),
(45, 'BCA', 'MINZA JAVEED', 21550045),
(46, 'BCA', 'SAQIB MUSHTAQ', 21550046),
(47, 'BCA', 'SEHRISH SHAFI SHAH', 21550047),
(48, 'BCA', 'IQRA FARID', 21550048),
(49, 'BCA', 'TAHIR MUSHTAQ', 21550049),
(50, 'BCA', 'PIRZADA SHADAB AHMAD', 21550050),
(51, 'BCA', 'QURAT UL AIN', 21550051),
(52, 'BCA', 'FAQIRA BATOOL BABA', 21550052),
(53, 'BCA', 'MOHAMMAD AMIN LONE', 21550053),
(54, 'BCA', 'BEENISH FAYAZ', 21550054),
(55, 'BCA', 'FAJAR', 21550055),
(56, 'BCA', 'MARIYAH BHAT', 21550056),
(57, 'BCA', 'UZMA HAMID', 21550057),
(58, 'BCA', 'DILADAN MIHEENGAR', 21550058),
(59, 'BCA', 'SHOAIB HASSAN', 21550059),
(60, 'BCA', 'AADIL SHOWKAT BHAT', 21550060),
(61, 'BCA', 'UZAIR MAJEED', 21550061),
(62, 'BCA', 'ZAHIRA BANO', 21550062),
(63, 'BCA', 'ABID HUSSAIN KHAN', 21550063),
(64, 'BCA', 'OWAIS AYOUB', 21550064),
(65, 'BCA', 'HILAL AHMAD KHAN', 21550065),
(66, 'BCA', 'TAHID RASOOL', 21550066),
(67, 'BCA', 'SYED SEHRISH MUSHTAQ', 21550067),
(68, 'BCA', 'SEHREEN JAN', 21550068),
(69, 'BCA', 'MAROOF YASEEN SHEIKH', 21550069),
(70, 'BCA', 'ATEEB SHOWKAT SHAH', 21550070),
(71, 'BCA', 'SUHAIL AHMAD MIR', 21550071),
(72, 'BCA', 'MUNTAZIR SALEEM', 21550072),
(73, 'BCA', 'SAALIM MUZAFFAR', 21550073),
(74, 'BCA', 'AKHTER ALI', 21550074),
(75, 'BCA', 'SHOAIB ARIF', 21550075),
(76, 'BCA', 'ABID AMEEN', 21550076),
(77, 'BCA', 'Waseem Parvaiz', 21550077),
(78, 'BCA', 'MEHVISH FAYAZ', 21550078),
(79, 'BCA', 'MOHAMMAD SHAFI WANI', 21550079);

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
(15, '1dt21cs116', 'pre', 'p@g.com', '6bf9e70a1f928aba143ef1eebe2720b5', '8221.jpg', '2024-03-02 18:39:18'),
(16, '1dt21cs126', 'sahil parray', 'sahil@gmail.com', '1006f0ae5a7ece19828a67ac62288e05', '3316.jpg', '2024-03-02 18:46:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_comments`
--
ALTER TABLE `_comments`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `_discussions`
--
ALTER TABLE `_discussions`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `_likes`
--
ALTER TABLE `_likes`
  ADD PRIMARY KEY (`like_id`);

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
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `_discussions`
--
ALTER TABLE `_discussions`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `_likes`
--
ALTER TABLE `_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `_students`
--
ALTER TABLE `_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `_users`
--
ALTER TABLE `_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
