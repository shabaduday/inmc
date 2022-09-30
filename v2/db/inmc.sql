-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 06:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10
--
-- Changelogs 1.1
-- acc_id removed from loan_types table and insert values

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

CREATE TABLE account (
  acc_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  givenname varchar(100) NOT NULL,
  address varchar(200) NOT NULL,
  contact int(13) NOT NULL,
  email varchar(50) NOT NULL,
  pass varchar(50) NOT NULL,
  image varchar(200) NOT NULL,
  user_type varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `borrower`
--

CREATE TABLE borrower (
  borrower_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  acc_id int(11) NOT NULL,
  borrower_prev_bal int(11) NOT NULL,
  borrower_penalty int(11) NOT NULL,
  borrower_curr_loan varchar(10) NOT NULL,
  FOREIGN KEY(acc_id) REFERENCES account(acc_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `loan_types`
--

CREATE TABLE loan_types (
  loan_types_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  loan_name varchar(100) NOT NULL,
  interest varchar(10) NOT NULL,
  max_amount int(11) NOT NULL,
  loan_lengths varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- inserting values into all created tables
--

INSERT INTO `account` (`acc_id`, `givenname`, `address`, `contact`, `email`, `pass`, `image`, `user_type`) VALUES
(1, 'Darwin', 'Sipocot', 1234567890, 'darwin@gmail.com', '202cb962ac59075b964b07152d234b70', 'Screenshot_20190821_145106.jpg', 'borrower'),
(2, 'manager', 'dfghjk', 123456, 'manager@gmail.com', '202cb962ac59075b964b07152d234b70', '', 'admin'),
(3, 'Dela Cruz, Juan', 'Sipocot', 918239213, 'delacruzjuan@gmail.com', '123', '', 'borrower'),
(4, 'Palad, Maria', 'Minalabac', 998765432, 'paladmaria@gmail.com', '456', '', 'borrower'),
(5, 'Wick, John', 'Pasacao', 123456, 'wickjohn@gmail.com', '123', '', 'borrower'),
(6, 'Yao, Bianca', 'San Jose', 947582138, 'yaobianca@gmail.com', '321', '', 'borrower');

INSERT INTO `borrower` (`borrower_id`, `acc_id`, `borrower_prev_bal`, `borrower_penalty`, `borrower_curr_loan`) VALUES
(1, 1, 123, 0, '321'),
(2, 2, 456, 200, '123'),
(3, 3, 789, 500, '300'),
(4, 4, 1000, 0, 'None'),
(5, 5, 5000, 150, 'None'),
(6, 6, 10000, 0, '500');

INSERT INTO `loan_types` (`loan_types_id`, `loan_name`, `interest`, `max_amount`, `loan_lengths`) VALUES
(1, 'Emergency Loan', '1%', 20000, '12 months'),
(2, 'Regular Loan', '1%', 50000, '12 months'),
(3, 'Irregular Loan', '5%', 100000, '2 years'),
(4, 'Emergency Food', '6%', 69420, '6 months'),
(5, 'Loan', '1%', 1000, '2 months'),
(6, 'Emergency', '10%', 500000, '5 years');

commit;