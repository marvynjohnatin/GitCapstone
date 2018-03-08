-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 02:40 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sja_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `rtitle` text NOT NULL,
  `rstatus` text NOT NULL,
  `rdate` varchar(50) NOT NULL,
  `rposter` varchar(200) NOT NULL,
  `rstudent` text NOT NULL,
  `rcontent` text NOT NULL,
  `rslider` varchar(1000) NOT NULL,
  `rtype` text NOT NULL,
  `rprimary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`rtitle`, `rstatus`, `rdate`, `rposter`, `rstudent`, `rcontent`, `rslider`, `rtype`, `rprimary`) VALUES
('Claire De Lune - The Sparks Of Fallen Stars', 'Upcoming ', '2018-02-14', 'prom.jpg', 'Iris Joshua L. Tanyag', 'Kasalukuyang nag eenroll ang mga estudyante ngaung 2017,Kasalukuyang nag eenroll ang mga estudyante ngaung 2017,Kasalukuyang nag eenroll ang mga estudyante ngaung 2017,Kasalukuyang nag eenroll ang mga estudyante ngaung 2017,Kasalukuyang nag eenroll ang mga estudyante ngaung 2017,Kasalukuyang nag eenroll ang mga estudyante ngaung 2017,Kasalukuyang nag eenroll ang mga estudyante ngaung 2017,Kasalukuyang nag eenroll ang mga estudyante ngaung 2017,Kasalukuyang nag eenroll ang mga estudyante ngaung 2017. 		', '', '', 3),
('Party in the USA', 'Upcoming', '2018-02-14', 'iron-man.jpg', 'Iris Joshua L. Tanyag', 'We are ready to go!			', '', '', 4),
('We are the world', 'Upcoming', '2018-02-16', 'iron-man-core.gif', 'Michael Jason', 'Shempion! El Nigga,Shempion! El Nigga,Shempion! El Shempion! El Nigga,	Shempion! El Nigga,	Shempion! El Nigga,	Shempion! El Nigga,	Shempion! El Nigga,	Shempion! El Nigga,	Shempion! El Nigga,	Shempion! El Nigga,	Shempion! El Nigga,	Shempion! El Nigga,	Shempion! El Nigga,	Shempion! El Nigga,	Shempion! El Nigga,	Shempion! El Nigga,		', '', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `Id` int(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`Id`, `fname`, `lname`, `mname`, `address`, `contactno`, `email`, `username`, `password`) VALUES
(1, 'Mario', 'Atin', '', '', '09154095632', 'mario@gmail.com', 'marioatin', 'itsmorefunatsja'),
(2, 'Mario', 'Atin', '', '', '09154095632', 'mario@gmail.com', 'marioatin1', 'itsmorefunatsja'),
(3, 'Obito', 'Rin', 'Dela Cruz', '', '09154095632', 'obitodelacruz@gmail.com', 'obitorin', 'itsmorefunatsja');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `fname` text NOT NULL,
  `middle` text NOT NULL,
  `lname` text NOT NULL,
  `role` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `staff_ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`fname`, `middle`, `lname`, `role`, `password`, `staff_ID`, `username`) VALUES
('Sheng', 'Cheron', 'Villanueva', 'System Administrator', 'sheng9015', 1, 'shengvillanueva');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(11) NOT NULL,
  `studentnumber` varchar(30) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mname` text NOT NULL,
  `age` text NOT NULL,
  `dateofbirth` text NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL,
  `placeofbirth` text NOT NULL,
  `contactno` text NOT NULL,
  `parentid` text NOT NULL,
  `email` text NOT NULL,
  `current_level` text NOT NULL,
  `current_year` text NOT NULL,
  `current_section` text NOT NULL,
  `status_enrolled` text NOT NULL,
  `stud_pic` text NOT NULL,
  `examgrade` text NOT NULL,
  `examremark` text NOT NULL,
  `password` text NOT NULL,
  `account_status` text NOT NULL,
  `fatherfname` text NOT NULL,
  `fathermname` text NOT NULL,
  `fatherlname` text NOT NULL,
  `fatheroccupation` text NOT NULL,
  `fathercontactno` text NOT NULL,
  `fatheremail` text NOT NULL,
  `motherfname` text NOT NULL,
  `mothermname` text NOT NULL,
  `motherlname` text NOT NULL,
  `motheroccupation` text NOT NULL,
  `mothercontactno` text NOT NULL,
  `motheremail` text NOT NULL,
  `guardianfname` text NOT NULL,
  `guardianmname` text NOT NULL,
  `guardianlname` text NOT NULL,
  `guardiancontactno` text NOT NULL,
  `guardianemail` text NOT NULL,
  `guardianoccupation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `studentnumber`, `fname`, `lname`, `mname`, `age`, `dateofbirth`, `gender`, `address`, `placeofbirth`, `contactno`, `parentid`, `email`, `current_level`, `current_year`, `current_section`, `status_enrolled`, `stud_pic`, `examgrade`, `examremark`, `password`, `account_status`, `fatherfname`, `fathermname`, `fatherlname`, `fatheroccupation`, `fathercontactno`, `fatheremail`, `motherfname`, `mothermname`, `motherlname`, `motheroccupation`, `mothercontactno`, `motheremail`, `guardianfname`, `guardianmname`, `guardianlname`, `guardiancontactno`, `guardianemail`, `guardianoccupation`) VALUES
(1, '20151000', 'Marvyn John', 'Atin', 'Casao', '20', '1997-11-16', 'Male', 'Tulay, Ibaan, Batangas', 'Putatan Muntinlupa City', '09154095632', '1', 'marvynjohnatin@gmail.com', 'Highschool', '2015', '', 'No', '1451500_700507843300899_1312591366_n.jpg', 'Pending', 'PASS', 'password123', 'Activated', 'Mario', 'Caymo', 'Atin', 'Engineer', '09154095632', 'mario@gmail.com', 'Evelyn', 'Casao', 'Atin', 'Accountant', '09154095632', 'evelyn@gmail.com', 'Elena', 'Casao', 'Casao', '09154095632', 'elena@email', 'Housewife'),
(2, '20142000', 'Shuka', 'Saito', 'Atin', '23', '1995-08-16', 'Female', 'Tokyo Japan', 'Tokyo ', '09154095632', '2', 'shuka@gmail.com', 'Highschool', '2014', '', 'No', 'jKNYHT7OruzGCQdm9BZBoOej-thumbnail-00001.png', 'Pending', 'PASS', 'itsmorefunatsja', 'First', 'Mario', 'Caymo', 'Atin', 'Engineer', '09154095632', 'mario@gmail.com', 'Evely', 'Casao', 'Atin', 'Accountant', '09154095632', 'evelyn@gmail.com', 'asd', 'asd', 'asd', '09154095632', 'asd@aasd', 'asd'),
(3, '20003000', 'Itachi', 'Uchiha', 'Uzumaki', '20', '2018-03-08', 'Male', 'Konoha', 'Uchiha Village', '09154095632', '3', 'marvynjohnatin@gmail.com', 'Senior Highschool', '2000', '', 'No', '1450986_700508009967549_581890431_n.jpg', 'Pending', 'PASS', 'itsmorefunatsja', 'Pending', 'Obito', 'Dela Cruz', 'Rin', 'Plumber', '09154095632', 'obitodelacruz@gmail.com', 'Sam', 'Sakura', 'Kurenai', 'Nurse', '09154095632', 'rinsakura@gmail.com', 'Shin', 'Jang', 'Oppei', '09154095632', 'shinjang@gmail.com', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_ID` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_name` text NOT NULL,
  `subject_level` text NOT NULL,
  `subject_year` text NOT NULL,
  `subject_course` varchar(100) NOT NULL,
  `coordinator` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_ID`, `subject_code`, `subject_name`, `subject_level`, `subject_year`, `subject_course`, `coordinator`) VALUES
(5, '', 'Algebra 1', 'Highschool', 'Grade 7', '', 'Edmar Silva A. Dimaano'),
(6, '', 'English 1', 'Highschool', 'Grade 7', '', 'Sheng G. Villanueva'),
(7, '', 'Filipino 1', 'Highschool', 'Grade 7', '', 'Mhar A. Barza'),
(8, '', 'asd', 'Senior Highschool', 'Grade 12', '', 'asd'),
(9, '', 'asd', 'Senior Highschool', 'Grade 12', '', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Id` int(11) NOT NULL,
  `teacher_ID` varchar(50) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mname` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `age` varchar(10) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `contactno` varchar(30) NOT NULL,
  `faculty_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Id`, `teacher_ID`, `fname`, `lname`, `mname`, `password`, `age`, `dateofbirth`, `gender`, `address`, `placeofbirth`, `contactno`, `faculty_pic`) VALUES
(1, '20151', 'Von Chester', 'Calabia', 'Cariman', 'calabia9015', '', '', '', '', '', '', 'noimage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `user_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fname`, `lname`, `user_type`, `user_pic`) VALUES
(1, 'irisjoshtanyag', 'irisjoshuatanyag', 'Iris Joshua', 'Tanyag', 'Registrar', 'noimage.jpg'),
(2, 'admission', 'admissionpassword', 'AdmissionFname', 'AdmissionLname', 'Admission', 'noimage.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`rprimary`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `teacher_ID` (`teacher_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `rprimary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
