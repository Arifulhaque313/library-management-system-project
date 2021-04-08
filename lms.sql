-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 05:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'admin@gmail.com', '12345678', 1945874215),
(3, 'admin', 'admin@gmail.com', '12345678', 1945874215);

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(50) NOT NULL,
  `author_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`) VALUES
(1, 'Mr.Fracklin'),
(4, 'Morrish mano'),
(5, 'Mr. Luish');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(50) NOT NULL,
  `book name` varchar(50) NOT NULL,
  `author_id` int(50) NOT NULL,
  `cat_id` int(50) NOT NULL,
  `book_no` int(50) NOT NULL,
  `book_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book name`, `author_id`, `cat_id`, `book_no`, `book_price`) VALUES
(3, 'digital system design', 101, 2, 110, 270),
(5, 'Software Enginnering ', 1, 2, 2131, 265),
(6, 'Harry porter', 3, 1, 2132, 500),
(8, 'Artificial Intelligent', 4, 2, 2034, 320),
(9, 'life of pie', 5, 3, 2033, 500),
(10, 'object oriented programming', 1, 2, 2035, 500);

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`cat_id`, `cat_name`) VALUES
(2, 'Computer Science and Engineering'),
(3, 'Fiction'),
(4, 'Mathematics '),
(5, 'LLB');

-- --------------------------------------------------------

--
-- Table structure for table `issued_book`
--

CREATE TABLE `issued_book` (
  `s_no` int(100) NOT NULL,
  `book_no` int(50) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  `issue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issued_book`
--

INSERT INTO `issued_book` (`s_no`, `book_no`, `book_name`, `book_author`, `user_id`, `status`, `issue_date`) VALUES
(17, 2131, 'Software Enginnering ', 'Mr.Fracklin', 45, 1, '2021-03-27'),
(19, 2131, 'Software Enginnering ', 'Mr.Fracklin', 48, 1, '2021-03-27'),
(20, 2132, 'Harry porter', 'Mr. Luish', 46, 1, '2021-03-27'),
(21, 110, 'digital system design', 'Mr.Fracklin', 43, 1, '2021-03-27'),
(23, 2035, 'object oriented programming', 'Mr. Luish', 50, 1, '2021-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` int(15) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `address`) VALUES
(43, 'Ariful Haque ', 'ariful@gmail.com', '12345678', 2147483647, 'Gazipur,Bangladesh\r\n'),
(45, 'johirul islam', 'joy@gmail.com', '12345678', 1235546, 'Kasimpur'),
(46, 'Md. Sojib Ali', 'sojib@gmail.com', '12345678', 1849737540, 'Rajshahi'),
(47, 'Md Nazim Uddin ', 'nazim@gmail.com', '12345678', 155487877, 'Ambag,Konabari , Gazipur'),
(48, 'Tanvir Mridha', 'tanvir@gmail.com', '12345678', 154787887, 'Charabag, Asulia, Savar'),
(50, 'Md Touhidul islam', 'touhidul@gmail.com', '12345678', 1652131, 'Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `issued_book`
--
ALTER TABLE `issued_book`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `issued_book`
--
ALTER TABLE `issued_book`
  MODIFY `s_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
