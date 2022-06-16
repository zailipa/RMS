-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 11:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `consents`
--

CREATE TABLE `consents` (
  `cons_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consents`
--

INSERT INTO `consents` (`cons_id`, `c_id`, `u_id`, `message`, `status`) VALUES
(6, 6, 13, 'Can i please have this course? I need an HSS and I am running out of options.', 1),
(7, 9, 23, 'Please give it to me, Kendall :)', 2),
(8, 28, 40, 'Ey yo Mr. White I need this course ', 1),
(9, 29, 40, 'Ey yo Mr. White I need this course ', 1),
(10, 21, 40, 'I need this course mam please', 0),
(11, 6, 35, 'Can i get the course please sit', 1),
(12, 27, 13, 'Coscari University in Venice came out for me for Erasmus Exchange program. It goes without saying that I need to improve my Italian, can i please get it sir?', 0),
(13, 21, 34, 'I want to learn Turkish please give', 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `c_description` varchar(250) NOT NULL,
  `c_quota` int(11) NOT NULL,
  `c_final_date` date NOT NULL,
  `c_credits` int(11) NOT NULL,
  `inst_id` int(11) NOT NULL,
  `consent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_name`, `c_description`, `c_quota`, `c_final_date`, `c_credits`, `inst_id`, `consent`) VALUES
(6, 'PHIL131', 'LOGIC I', 200, '2022-02-15', 4, 18, 1),
(7, 'MIS111', 'ECONOMICS I', 120, '2022-02-11', 3, 20, 0),
(8, 'MIS233', 'WEB DEVELOPMENT', 120, '2022-02-15', 4, 21, 0),
(9, 'MIS115', 'MANAGEMENT', 20, '2022-05-12', 3, 22, 1),
(10, 'MIS223', 'MANAGERIAL ACCOUNTING', 120, '2022-02-23', 3, 20, 0),
(11, 'MIS116', 'MARKETING PRINCIPLES', 130, '2022-03-12', 3, 19, 0),
(12, 'MIS112', 'ECONOMICS II', 120, '2022-03-20', 3, 20, 0),
(13, 'MIS143', 'BUSINESS MATHEMATICS II', 130, '2022-02-15', 3, 26, 0),
(14, 'MIS144', 'BUSINESS MATHEMATICS I', 120, '2022-02-02', 3, 26, 0),
(15, 'MIS133', 'OBJECT ORIENTED PROGRAMMING', 130, '2022-02-03', 4, 25, 0),
(16, 'MIS131', 'INTRODUCTION TO ALGORITHMS & PROGRAMMING', 130, '2022-02-03', 4, 27, 0),
(17, 'MIS251', 'INFORMATION TECHNOLOGY INFRASTRUCTURES', 120, '2022-01-14', 3, 28, 0),
(18, 'MIS252', 'DATA COMMUNICATION', 120, '2022-01-15', 3, 28, 0),
(19, 'MIS228', 'MANAGERIAL COMMUNICATION', 120, '2022-02-12', 3, 29, 0),
(20, 'SOC101', 'SOCIOLOGY I', 100, '2022-02-13', 3, 30, 1),
(21, 'TK221.01', 'TURKISH FOR NATIVE SPEAKERS I', 30, '2022-01-07', 2, 31, 1),
(22, 'TK221.02', 'TURKISH FOR NATIVE SPEAKERS I', 30, '2022-01-07', 2, 32, 1),
(23, 'TK222.01', 'TURKISH FOR NATIVE SPEAKERS II', 30, '2022-06-08', 2, 31, 1),
(24, 'TK222.02', 'TURKISH FOR NATIVE SPEAKERS II', 30, '2022-05-14', 2, 32, 1),
(25, 'ITA101.01', 'ITALIAN I', 20, '2022-02-10', 3, 24, 1),
(26, 'ITA102.01', 'ITALIAN II', 15, '2022-02-02', 3, 24, 1),
(27, 'ITA202.01', 'ITALIAN IV', 5, '2022-02-02', 3, 24, 1),
(28, 'CHEM101', 'CHEMISTRY I', 20, '2022-02-10', 4, 39, 1),
(29, 'CHEM102', 'CHEM II', 20, '2022-02-20', 4, 39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `st_course`
--

CREATE TABLE `st_course` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `grade` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_course`
--

INSERT INTO `st_course` (`id`, `c_id`, `u_id`, `grade`) VALUES
(19, 6, 13, 'P'),
(20, 7, 13, ''),
(21, 8, 13, ''),
(22, 7, 23, ''),
(23, 8, 23, ''),
(24, 10, 23, ''),
(25, 7, 40, ''),
(26, 8, 40, ''),
(27, 11, 40, ''),
(28, 15, 40, ''),
(29, 7, 35, ''),
(30, 16, 35, ''),
(31, 12, 35, ''),
(32, 13, 35, ''),
(33, 10, 13, ''),
(34, 19, 13, ''),
(35, 10, 34, ''),
(36, 7, 34, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `utype` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `surname`, `uname`, `upass`, `utype`, `status`) VALUES
(11, 'Admin', 'Admin', 'admin', '123456', 'administrator', 1),
(13, 'Zeynep', 'Tınaz', 'zeynep.tinaz', '123456', 'student', 1),
(14, 'Arda ', 'Uslu', 'arda.uslu', 'qwerty', 'student', 1),
(15, 'Wen Tzu ', 'Liao', 'wen.tzu', '741852', 'student', 1),
(16, 'Furkan ', 'Tınaz', 'furkan.tinaz', '456123', 'student', 1),
(17, 'Sona ', 'Mardikyan', 'sona.mardikyan', '963852', 'professor', 1),
(18, 'Frank ', 'Zenker', 'frank.zenker', '123456', 'professor', 1),
(19, 'Gökhan ', 'Sayar', 'gokhan.sayar', 'qwerty', 'professor', 1),
(20, 'Ali ', 'Tükel', 'ali.tukel', 'economics', 'professor', 1),
(21, 'Mustafa ', 'Coşkun', 'mustafa.coskun', 'webdev', 'professor', 1),
(22, 'Kendall ', 'Roy', 'kendall.roy', 'ihatemydad', 'professor', 1),
(23, 'Roman ', 'Roy', 'roman.roy', 'gerri', 'student', 1),
(24, 'Manuel ', 'Malaguti', 'manuel.malaguti', 'italian', 'professor', 1),
(25, 'Ahmet ', 'Çakar', 'ahmet.çakar', '456123', 'professor', 1),
(26, 'Aysun ', 'Bozanta', 'aysun.bozanta', 'mathsismylife', 'professor', 1),
(27, 'Nazım ', 'Taşkın', 'nazım.taşkın', 'javaadam', 'professor', 1),
(28, 'Bilgin ', 'Metin', 'bilgin.metin', 'cybersecurity', 'professor', 1),
(29, 'Özgür ', 'Değerlioğlu', 'ozgur.degerlioglu', '123456', 'professor', 1),
(30, 'Ali Tuna', 'Kuyucu', 'ali.kuyucu', '123456', 'professor', 1),
(31, 'Esra ', 'Dicle', 'esra.dicle', '123456', 'professor', 1),
(32, 'Hülya ', 'Bulut', 'hulya.bulut', '789456', 'professor', 1),
(33, 'İrem', 'Günay', 'irem.gunay', 'irem', 'student', 1),
(34, 'Swagatam ', 'Banerjee', 'swagatam.banerjee', 'iamapos', 'student', 1),
(35, 'Sena ', 'Özdemir', 'sena.ozdemir', 'pelinsu', 'student', 1),
(37, 'Siobhan ', 'Roy', 'shiv.roy', 'opengil', 'student', 1),
(38, 'Kai', 'Ziegler', 'kai.ziegler', 'bettercallsaul', 'student', 1),
(39, 'Walter ', 'White', 'walter.white', 'mybabyblue', 'professor', 1),
(40, 'Jesse ', 'Pinkman', 'cptn.cook', 'magnet', 'student', 1),
(41, 'Greg ', 'Hersch', 'greg.hersch', '963258', 'student', 1),
(42, 'Tyrion', 'Lannister', 'tyrion.lannister', 'handoftheking', 'student', 1),
(43, 'Jaime', 'Lannister', 'jaime.lannister', '789456', 'student', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consents`
--
ALTER TABLE `consents`
  ADD PRIMARY KEY (`cons_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `st_course`
--
ALTER TABLE `st_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consents`
--
ALTER TABLE `consents`
  MODIFY `cons_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `st_course`
--
ALTER TABLE `st_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
