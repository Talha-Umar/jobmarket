-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 08:45 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `salary_min` varchar(255) NOT NULL,
  `salary_max` varchar(255) NOT NULL,
  `experience_max` varchar(255) NOT NULL,
  `experience_min` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `job_id` int(255) NOT NULL,
  `can_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `aname`, `email`, `whatsapp`, `salary_min`, `salary_max`, `experience_max`, `experience_min`, `education`, `job_id`, `can_id`) VALUES
(3, 'Zahid Hussain', 'support@nscreationz.com', '1234567901', '12000', '13500', '1 year', '6 months', 'Bachelor', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `fname`, `lname`, `cemail`, `cpassword`, `type`, `code`) VALUES
(2, 'Zahid', 'Hussain', 'support@nscreationz.com', '12345678', 'can', ''),
(5, 'Talha', 'Umar', 'talhaumar4373@gmail.com', 'talha', 'can', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `cate_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cate_name`) VALUES
(1, 'Education'),
(2, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(255) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`) VALUES
(1, 'Vehari'),
(2, 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `code` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `cname`, `caddress`, `email`, `password`, `type`, `code`) VALUES
(1, 'Soft Serve', 'Vehari Pakistan', 'softserve@gmail.com', 'Zahid786', 'emp', 0),
(3, 'Teach4u', 'Vehari', 'talha@teach4u.com', 'talha', 'emp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `salarymin` varchar(255) NOT NULL,
  `salarymax` varchar(255) NOT NULL,
  `experience_min` varchar(255) NOT NULL,
  `experience_max` varchar(255) NOT NULL,
  `cid` int(255) NOT NULL,
  `cate_id` int(255) NOT NULL,
  `emp_id` int(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `job_type`, `salarymin`, `salarymax`, `experience_min`, `experience_max`, `cid`, `cate_id`, `emp_id`, `pin_code`, `job_description`, `company_name`, `company_email`, `phone_no`) VALUES
(2, 'WordPress Developer', 'on', '12000', '13500', '6 months', '1 year', 1, 2, 3, '1234', 'Required a wordpress developer for themes and plugins developers. ', 'Teach4uu', '', '1234567901'),
(3, 'Full Stack Web Developer', 'on', '50000', '51500', '1 year', '2 years', 1, 2, 3, '1122', 'Required a full stack web developer for our company.', 'Teach4u', 'teach4u@talha.com', '23849488922'),
(4, 'dscxzsxddcx', 'on', '33323', '34823', 'efdcx`', 'ewfdc', 2, 1, 3, '4324324', 'fdlcxknflk;cj', 'dsfdsf', 'talha@teach4u.com', 'sddsr3'),
(5, 'Full Stack Web ', 'Full Time Jobs', '22432', '23932', '1 year', '3 year', 2, 2, 3, '2222', 'Pta Nai', 'TUC', 'talha@teach4u.com', '234455');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `can_id` (`can_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `cate_id` (`cate_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `applicant_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `applicant_ibfk_2` FOREIGN KEY (`can_id`) REFERENCES `candidate` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `jobs_ibfk_3` FOREIGN KEY (`emp_id`) REFERENCES `employer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
