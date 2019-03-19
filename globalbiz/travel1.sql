-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 06:42 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(15) NOT NULL,
  `fname` char(50) NOT NULL,
  `lname` char(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `status` char(45) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(15) NOT NULL,
  `fname` char(50) NOT NULL,
  `lname` char(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `country` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `ccomments` text,
  `adress` varchar(255) NOT NULL,
  `fathername` char(100) NOT NULL,
  `mothname` char(100) DEFAULT NULL,
  `degree` char(15) NOT NULL,
  `dateapplication` date NOT NULL,
  `extra` varchar(100) DEFAULT NULL,
  `status` char(45) NOT NULL,
  `acomments` text,
  `codeagent` int(15) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(15) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(255) NOT NULL,
  `candidateid` int(15) NOT NULL,
  `link` text NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subagents`
--

CREATE TABLE `subagents` (
  `codeagent` int(15) NOT NULL,
  `fname` char(100) NOT NULL,
  `lname` char(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `status` char(15) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `univ`
--

CREATE TABLE `univ` (
  `id` int(15) NOT NULL,
  `country` varchar(100) NOT NULL,
  `univ` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country` (`country`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subagents`
--
ALTER TABLE `subagents`
  ADD PRIMARY KEY (`codeagent`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `univ`
--
ALTER TABLE `univ`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
