-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 01:40 PM
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
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `Id` int(255) NOT NULL,
  `fee_description` text NOT NULL,
  `year` text NOT NULL,
  `level` text NOT NULL,
  `strand` text NOT NULL,
  `amount` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`Id`, `fee_description`, `year`, `level`, `strand`, `amount`) VALUES
(1, 'Miscellaneous', 'General', 'General', 'General', 5000),
(2, 'Energy', 'General', 'General', 'General', 5000),
(3, 'Books', 'General', 'General', 'General', 1500),
(4, 'Tuition', 'General', 'General', 'General', 15000),
(5, 'Tuition', '2018', '1', 'General', 8000),
(6, 'Tuition', '2018', '2', 'General', 9000),
(7, 'Tuition', '2018', '3', 'General', 10000),
(8, 'Tuition', '2018', '4', 'General', 11000),
(9, 'Tuition', '2018', '5', 'General', 12000),
(10, 'Tuition', '2018', '6', 'General', 13000),
(11, 'Tuition', '2018', '7', 'General', 13500),
(12, 'Tuition', '2018', '8', 'General', 14000),
(13, 'Tuition', '2018', '9', 'General', 14500),
(14, 'Tuition', '2018', '10', 'General', 15000),
(15, 'Tuition', '2018', '11', 'ABM', 16000),
(16, 'Tuition', '2018', '11', 'STEM', 16000),
(17, 'Tuition', '2018', '11', 'HUMMS', 16000),
(18, 'Tuition', '2018', '12', 'ABM', 17000),
(19, 'Tuition', '2018', '12', 'STEM', 17000),
(20, 'Tuition', '2018', '12', 'HUMMS', 17000),
(21, 'Entrance', 'General', 'General', 'General', 1500),
(22, 'Retreat', '2018', '6', 'General', 1500),
(23, 'Retreat', '2018', '10', 'General', 1500),
(24, 'Retreat', '2018', '12', 'ABM', 1500),
(25, 'Retreat', '2018', '12', 'STEM', 1500),
(26, 'Retreat', '2018', '12', 'HUMMS', 1500),
(27, 'Malaking bill', 'Grade 2', 'Elementary', 'N/A', 3000),
(28, 'Mahal', 'Grade 3', 'Elementary', 'N/A', 5000);

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
-- Table structure for table `strand`
--

CREATE TABLE `strand` (
  `Id` int(11) NOT NULL,
  `name` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strand`
--

INSERT INTO `strand` (`Id`, `name`, `code`) VALUES
(1, 'Accountancy, Business, and Management ', 'ABM'),
(2, 'Humanities and Social Sciences', 'HUMSS'),
(3, 'Science, Technology, Engineering and Mathematics', 'STEM');

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
  `semester` text NOT NULL,
  `subject_strand` text NOT NULL,
  `coordinator` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_ID`, `subject_code`, `subject_name`, `subject_level`, `subject_year`, `semester`, `subject_strand`, `coordinator`) VALUES
(1, 'OralCom', 'Oral Communication in Context', 'SHS', '11', '1st', 'ABM', ''),
(2, 'KomPanKulPil', 'Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino', 'SHS', '11', '1st', 'ABM', ''),
(3, 'GenMath', 'General Mathematics', 'SHS', '11', '1st', 'ABM', ''),
(4, 'ReadWrite', 'REading and Writing Skills', 'SHS', '11', '2nd', 'ABM', ''),
(5, 'Pagbasa', 'Pagbasa at Pagsusuri ng Iba\'t-Ibang Teksto Tungo sa Pananaliksik', 'SHS', '11', '2nd', 'ABM', ''),
(6, 'WorldRel', 'Introduction to World Religions and Belief Systems', 'SHS', '11', '2nd', 'ABM', ''),
(7, 'MediaLit', 'Media and Information Literacy', 'SHS', '12', '1st', 'ABM', ''),
(8, 'Philosophy', 'Introduction to the Philosophy of the Human Person', 'SHS', '12', '1st', 'ABM', ''),
(9, 'PhySci', 'Physical Science', 'SHS', '12', '1st', 'ABM', ''),
(10, 'PhysEd', 'Physical Education and Health', 'SHS', '12', '2nd', 'ABM', ''),
(11, 'Entrep', 'Entrepreneur', 'SHS', '12', '2nd', 'ABM', ''),
(12, 'ResProj', 'Research Project', 'SHS', '12', '2nd', 'ABM', ''),
(13, 'OralCom', 'Oral Communication in Context', 'SHS', '11', '1st', 'STEM', ''),
(14, 'GenMath', 'General Mathematics', 'SHS', '11', '1st', 'STEM', ''),
(15, 'Pre-Calc', 'Pre-Calculus', 'SHS', '11', '1st', 'STEM', ''),
(16, 'ReadWrite', 'Reading and Writing Skills', 'SHS', '11', '2nd', 'STEM', ''),
(17, 'StatProb', 'Statistics and Probability', 'SHS', '11', '2nd', 'STEM', ''),
(18, 'BasCalc', 'Basic Calculus', 'SHS', '11', '2nd', 'STEM', ''),
(19, 'MediaLit', 'Media Literacy', 'SHS', '12', '1st', 'STEM', ''),
(20, 'GenPhy1', 'General Physics 1', 'SHS', '12', '1st', 'STEM', ''),
(21, 'GenBio1', 'General Biology 1', 'SHS', '12', '1st', 'STEM', ''),
(22, 'PhysEd', 'Physical Education and Heath', 'SHS', '12', '2nd', 'STEM', ''),
(23, 'GenPhy2', 'General Physics 2', 'SHS', '12', '2nd', 'STEM', ''),
(24, 'GenBio2', 'General Biology 2', 'SHS', '12', '2nd', 'STEM', ''),
(25, 'Eng1', 'English 1', 'Elementary', '1', '', '', ''),
(26, 'Math1', 'Mathematics 1', 'Elementary', '1', '', '', ''),
(27, 'Fil1', 'Filipino 1', 'Elementary', '1', '', '', ''),
(28, 'Eng2', 'English 2', 'Elementary', '2', '', '', ''),
(29, 'Math2', 'Mathematics 2', 'Elementary', '2', '', '', ''),
(30, 'Fil2', 'Filipino 2', 'Elementary', '2', '', '', ''),
(31, 'Eng3', 'English 3', 'Elementary', '3', '', '', ''),
(32, 'Math3', 'Mathematics 3', 'Elementary', '3', '', '', ''),
(33, 'Fil3', 'Filipino 3', 'Elementary', '3', '', '', ''),
(34, 'Eng4', 'English 4', 'Elementary', '4', '', '', ''),
(35, 'Math4', 'Mathematics 4', 'Elementary', '4', '', '', ''),
(36, 'Fil4', 'Filipino 4', 'Elementary', '4', '', '', ''),
(37, 'Eng5', 'English 5', 'Elementary', '5', '', '', ''),
(38, 'Math5', 'Mathematics 5', 'Elementary', '5', '', '', ''),
(39, 'Fil5', 'Filipino 5', 'Elementary', '5', '', '', ''),
(40, 'Eng6', 'English 6', 'Elementary', '6', '', '', ''),
(41, 'Math6', 'Mathematics 6', 'Elementary', '6', '', '', ''),
(42, 'Fil6', 'Filipino 6', 'Elementary', '6', '', '', ''),
(43, 'AP1', 'Araling Panlipunan 1', 'JHS', '7', '', '', ''),
(44, 'TLE1', 'Technology and Livelihood 1', 'JHS', '7', '', '', ''),
(45, 'Math7', 'Mathematics 7', 'JHS', '7', '', '', ''),
(46, 'AP2', 'Araling Panlipunan 2', 'JHS', '8', '', '', ''),
(47, 'TLE2', 'Technology and Livelihood 2', 'JHS', '8', '', '', ''),
(48, 'Math8', 'Mathematics 8', 'JHS', '8', '', '', ''),
(49, 'AP3', 'Araling Panlipunan 3', 'JHS', '9', '', '', ''),
(50, 'TLE3', 'Technology and Livelihood 3', 'JHS', '9', '', '', ''),
(51, 'Math9', 'Mathematics 9', 'JHS', '9', '', '', ''),
(52, 'AP4', 'Araling Panlipunan 4', 'JHS', '10', '', '', ''),
(53, 'TLE4', 'Technology and Livelihood 4', 'JHS', '10', '', '', ''),
(54, 'Math10', 'Mathematics 10', 'JHS', '10', '', '', '');

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
(2, 'admission', 'admissionpassword', 'AdmissionFname', 'AdmissionLname', 'Admission', 'noimage.jpg'),
(3, 'systemadmin', 'password123', 'systemadminfname', 'systemadminlname', 'SystemAdmin', 'noimage.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`rprimary`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `strand`
--
ALTER TABLE `strand`
  ADD PRIMARY KEY (`Id`);

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
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `strand`
--
ALTER TABLE `strand`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
