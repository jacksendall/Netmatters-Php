-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 04:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nm-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `Cname` text NOT NULL,
  `Csubject` text NOT NULL,
  `Cmessage` text NOT NULL,
  `ismarketing` tinyint(1) NOT NULL,
  `phone` text NOT NULL,
  `mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `Cname`, `Csubject`, `Cmessage`, `ismarketing`, `phone`, `mail`) VALUES
(1, 'Jack Sendall', 'test', 'test message', 0, '2147483647\0', 'jacksendall@gmail.com'),
(2, 'Jack Sendall', 'test message 2 ', 'lorem ipsum', 0, '2147483647\0', 'jacksendall@gmail.com'),
(3, 'Jack Sendall', 'testagain', 'yeet', 0, '2147483647\0', 'jacksendall@gmail.com'),
(4, 'Jack Sendall', 'teeeeeest', 'wanger', 0, '2147483647\0', 'jacksendall@gmail.com'),
(5, 'Jack Sendall', 'test data marketing', 'test', 1, '2147483647\0', 'jacksendall@gmail.com'),
(6, 'Jack Sendall', 'is not marketing', 'bullet proof test', 0, '2147483647\0', 'jacksendall@gmail.com'),
(7, 'last test man', 'test', 'shaboozey', 0, '2147483647\0', 'jacksendall@gmail.com'),
(8, 'Jack Sendall', 'get the phone number right', 'will it work?', 1, '7840961166\0', 'jacksendall@gmail.com'),
(9, 'Jack Sendall', 'testagain', 'phone number test', 1, '7840961166\0', 'jacksendall@gmail.com'),
(10, 'Jack Sendall', 'teeeeeeeest', 'test again', 1, '7840961166', 'jacksendall@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` date NOT NULL DEFAULT current_timestamp(),
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `image`, `body`, `published`, `color`) VALUES
(4, 'Careers', 'Senior Web Developer', 'img/senior-web-developer.jpg', 'Salary Range: 30-40k (DOE) + Bonus Hours: 40 hours per week, Monday - Friday Location: Wymondham...', '2020-06-07', 'software'),
(5, 'Insights', 'Why It\'s Crucial To Choose The Right Marketing...', 'img/why-its-crucial.jpg', 'Why It\'s Crucial To Choose The Right Marketing Budget To Grow Your Business Often, the question t...', '2020-06-07', 'marketing'),
(6, 'Careers', 'Web Developer', 'img/hiring-web-developer.jpg', 'Salary Range: 22-30k (DOE) + Bonus Hours: 40 hours per week, Monday - Friday Location: Wymondh...', '2020-06-07', 'design');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(2, 'biginthegame', 'email@address.com', '$2y$10$NiBjOWrFbQ81bIt13FXxne1OZClSTy.iN.YGYtKgMdOTrLvEtxPBu'),
(3, 'karen', 'karensendall@btinternet.com', '$2y$10$hu02HI7sZS/KuTWhucd7LO7CxbCDDyTYYZsMUeTN1xy7Hl6.kgJyq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
