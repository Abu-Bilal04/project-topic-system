-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2024 at 03:06 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `projecttopics`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsetting`
--

CREATE TABLE `adminsetting` (
  `id` int(11) NOT NULL auto_increment,
  `admin` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `lower` varchar(30) NOT NULL,
  `higher` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminsetting`
--

INSERT INTO `adminsetting` (`id`, `admin`, `password`, `lower`, `higher`) VALUES
(1, 'admin', '1234', 'Diploma', 'Higher Diploma');

-- --------------------------------------------------------

--
-- Table structure for table `hndtopics`
--

CREATE TABLE `hndtopics` (
  `id` int(11) NOT NULL auto_increment,
  `studentname` varchar(50) NOT NULL,
  `studentregno` varchar(15) NOT NULL,
  `studentdate` date NOT NULL,
  `studentsupervisor` varchar(50) NOT NULL,
  `studenttopic` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hndtopics`
--

INSERT INTO `hndtopics` (`id`, `studentname`, `studentregno`, `studentdate`, `studentsupervisor`, `studenttopic`) VALUES
(2, 'Ismail Sani', 'NDCS2021/579', '2024-05-08', 'mal kabir', 'Design and implementation of clinical card management system');

-- --------------------------------------------------------

--
-- Table structure for table `ndtopics`
--

CREATE TABLE `ndtopics` (
  `id` int(11) NOT NULL auto_increment,
  `studentname` varchar(50) NOT NULL,
  `studentregno` varchar(15) NOT NULL,
  `studentdate` date NOT NULL,
  `studentsupervisor` varchar(50) NOT NULL,
  `studenttopic` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ndtopics`
--

INSERT INTO `ndtopics` (`id`, `studentname`, `studentregno`, `studentdate`, `studentsupervisor`, `studenttopic`) VALUES
(6, 'Isa Sani', 'NDCS2021/632', '2024-05-07', 'Mr. Martins', 'Design and implementation of card management system');
