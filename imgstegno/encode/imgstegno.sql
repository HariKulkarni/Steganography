-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 03:07 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imgstegno`
--

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `verificationcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `semail`, `sname`, `email`, `file`, `verificationcode`) VALUES
(4, 'pandurangdrg@gmail.com', 'pandurang', 'pandurangdrg@gmail.com', '579335.jpg', '8y6VQM5L'),
(6, 'vijayalakshmimallapurk1999@gmail.com', 'vijayalakshmi', 'fakeergoudamallapur@gmail.com', '857915.jpg', 'dGorK0X9'),
(7, 'vijayalakshmimallapurk1999@gmail.com', 'vijayalakshmi', 'fakeergoudamallapur@gmail.com', '457487.jpg', 'vb2zTJ1g'),
(8, 'vijayalakshmimallapurk1999@gmail.com', 'vijayalakshmi', 'prashanthmallapur2002@gmail.com', '680258.jpg', 'QcCOtfdx'),
(9, 'vijayalakshmimallapurk1999@gmail.com', 'vijayalakshmi', 'prashanth2@gmail.com', '551359.jpg', 'tdSeD1un'),
(10, 'vijayalakshmimallapurk1999@gmail.com', 'vijayalakshmi', 'prashanth2@gmail.com', '922156.jpg', 'bpndlNVu'),
(18, 'vijayalakshmimallapurk1999@gmail.com', 'vijayalakshmi', 'prashanth2@gmail.com', '142140.jpg', 'icdvrzTn'),
(19, 'vijayalakshmimallapurk1999@gmail.com', 'vijayalakshmi', 'prashanth2@gmail.com', '559323.jpg', 'AaRMsiKd'),
(20, 'vijayalakshmimallapurk1999@gmail.com', 'vijayalakshmi', 'zameerabbigeri123@gmail.com', '370411.jpg', 'cqipy7TW'),
(21, 'vijayalakshmimallapurk1999@gmail.com', 'vijayalakshmi', 'zameerabbigeri123@gmail.com', '447537.jpg', '0YvAKJOx'),
(22, 'vijayalakshmimallapurk1999@gmail.com', 'vijayalakshmi', 'almaskoppad999@gmail.com', '61410.jpg', 'WQLjvU1p');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `email` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `con` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`email`, `uname`, `con`, `pass`) VALUES
('abcd', 'dbkwsdb', 'lsdbskd', 'ksddvbbksdb'),
('almaskoppad999@gmail.com', 'Almas', '7975120426', 'Abc@1998'),
('pandurangdrg@gmail.com', 'pandurang', '8748896869', 'Abcd@1234'),
('prashanth23@gmail.com', 'prashanth3', '8749097027', '1236540'),
('prashanth2@gmail.com', 'prashanth ', '9784581241', '123654'),
('vijayalakshmimallapurk1999@gmail.com', 'vijayalakshmi', '9876543210', 'Abcd@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
