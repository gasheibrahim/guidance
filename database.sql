-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2022 at 09:53 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `inet_remote_guidance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment_schedule`
--

CREATE TABLE `tbl_appointment_schedule` (
  `schedule_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `number_of_slots` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counselling`
--

CREATE TABLE `tbl_counselling` (
  `counselling_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `counsellor_message` varchar(200) NOT NULL,
  `strategies_advice` varchar(200) NOT NULL,
  `video_recording_link` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  `counsellor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counsellor`
--

CREATE TABLE `tbl_counsellor` (
  `counsellor_id` int(11) NOT NULL,
  `complete_name` varchar(100) NOT NULL,
  `work_history` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(15) NOT NULL,
  `complete_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_referral_reason`
--

CREATE TABLE `tbl_referral_reason` (
  `reason_id` int(11) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `reservation_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `referral_id` int(11) NOT NULL,
  `concern` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `meeting_link` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `counsellor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `course_id` int(11) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` int(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `account_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
