-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 06:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 07:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acc_id` int(11) NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `familyname` varchar(40) NOT NULL,
  `givenname` varchar(40) NOT NULL,
  `middlename` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `civilstatus` varchar(40) NOT NULL,
  `religion` varchar(40) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `contactnumber` int(12) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `residentialaddress` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `spousename` varchar(100) NOT NULL,
  `spouseocc` varchar(100) NOT NULL,
  `spouseage` int(11) NOT NULL,
  `nameofdependent1` varchar(100) NOT NULL,
  `aged1` int(11) NOT NULL,
  `relationship1` varchar(100) NOT NULL,
  `nameofdependent2` varchar(100) NOT NULL,
  `aged2` int(11) NOT NULL,
  `relationship2` varchar(100) NOT NULL,
  `nameofdependent3` varchar(100) NOT NULL,
  `aged3` int(11) NOT NULL,
  `relationship3` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_id`, `user_type`, `familyname`, `givenname`, `middlename`, `gender`, `age`, `civilstatus`, `religion`, `birthdate`, `birthplace`, `occupation`, `contactnumber`, `height`, `weight`, `residentialaddress`, `image`, `spousename`, `spouseocc`, `spouseage`, `nameofdependent1`, `aged1`, `relationship1`, `nameofdependent2`, `aged2`, `relationship2`, `nameofdependent3`, `aged3`, `relationship3`, `email`, `pass`) VALUES
(1, 'secretary', 'Llagas', 'Julie', 'Middle', 'female', 31, 'married', 'vatholic', '1999-09-19', 'sipocot', 'teacher', 987765543, 12, 12, 'sipocot', '', 'spouse', 'soccupation', 10, 'kram', 20, 'babab', '', 0, '', '', 0, '', 'secretary@gmail.com', '123'),
(2, 'admin', 'One', 'The', 'Number', 'unknown', 69, 'single', 'Born Again', '1987-09-22', 'Naga', 'Robot', 123456, 150, 69, 'Naga', '', 'Pedros', 'Teachers', 123, 'Mama', 123456, 'haha', 'hehe', 123, 'hihi', 'hoho', 456, 'huhu', 'manager@gmail.com', '123'),
(36, 'treasurer', 'Matila', 'Joshua', 'Carino', 'male', 22, 'married', 'Catholic', '2022-07-07', 'Cam Sur', 'Teacher', 2147483647, 144, 50, 'Sipocot ', '', 'padillo', 'Teacher', 20, 'fdsaf', 21, 'ewqeqw', 'darw', 21, 'qwqwe', 'fds', 21, 'rew', 'joshua@gmail.com', 'joshua'),
(37, 'borrower', 'Caballess', 'Ariels', 'Jolos', 'female', 232, 'marrieds', 'Mormonsss', '2022-09-22', 'Calagbangans', 'Teachers', 123, 150, 69, 'Calagbangans', '', 'Pedros', 'Teachers', 123, 'darwdsafsfa', 123456, 'dadadafsdfa', 'dafsdfasdfa', 123456, 'fdsaafsdfa', 'fsfsffasdfas', 123456, 'fdsfsafadfasdf', 'ariel1@cbsua.com', 'ariels'),
(38, 'manager', 'Dela Cruz', 'Juan', 'Tamad', 'male', 21, 'married', 'Catholic', '2022-09-23', 'Cam Sur', 'Teacher', 2147483647, 123, 50, 'Calagbangan', '', 'Pedro', 'Teacher', 21, 'we', 123, 'we', 'we', 123, 'we', 'we', 123, 'we', 'juan@gmail.com', '123');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
