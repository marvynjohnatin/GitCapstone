-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 08:29 AM
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
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `Id` int(11) NOT NULL,
  `settingname` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`Id`, `settingname`, `value`) VALUES
(1, 'schoolyear', '2017-2018'),
(2, 'startingdate', '2017-06-15'),
(3, 'endingdate', '2018-03-15'),
(4, 'fulldiscount', '.05'),
(5, 'initialpayment', '2000');

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
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `Id` int(11) NOT NULL,
  `studentid` text NOT NULL,
  `subjectid` text NOT NULL,
  `subjectcode` text NOT NULL,
  `subjectteacher` text NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `Id` int(255) NOT NULL,
  `parentrole` text NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `occupation` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`Id`, `parentrole`, `fname`, `lname`, `mname`, `address`, `contactno`, `email`, `occupation`, `username`, `password`) VALUES
(1, 'mother', 'Mario', 'Atin', 'Caymo', 'Nueva Ecija', '09154095632', 'mario@gmail.com', 'Engineer', 'marioatin0', 'kXxAUJ');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Id` int(11) NOT NULL,
  `studentnumber` text NOT NULL,
  `schoolyear` text NOT NULL,
  `month` text NOT NULL,
  `paymentmode` text NOT NULL,
  `paymenttype` text NOT NULL,
  `amount` text NOT NULL,
  `paid_status` text NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `studentnumber`, `schoolyear`, `month`, `paymentmode`, `paymenttype`, `amount`, `paid_status`, `payment_date`) VALUES
(1, '20181000', '2017-2018', 'Upon Enrollment', 'paypal', 'Monthly', '44200', 'Yes', 'March 14, 2018 3:00:pm  ');

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
  `parentaccountid` text NOT NULL,
  `email` text NOT NULL,
  `current_level` text NOT NULL,
  `current_year` text NOT NULL,
  `current_strand` text NOT NULL,
  `current_section` text NOT NULL,
  `status_enrolled` text NOT NULL,
  `stud_pic` text NOT NULL,
  `examgrade` text NOT NULL,
  `examremark` text NOT NULL,
  `examdate` int(11) NOT NULL,
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
  `guardianoccupation` text NOT NULL,
  `paymentperiod` text NOT NULL,
  `discounttype` text NOT NULL,
  `discount` text NOT NULL,
  `honorcertificate` text NOT NULL,
  `birthcertificate` text NOT NULL,
  `form137` text NOT NULL,
  `form9` text NOT NULL,
  `goodmoral` text NOT NULL,
  `baptismal` text NOT NULL,
  `admit_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `studentnumber`, `fname`, `lname`, `mname`, `age`, `dateofbirth`, `gender`, `address`, `placeofbirth`, `contactno`, `parentaccountid`, `email`, `current_level`, `current_year`, `current_strand`, `current_section`, `status_enrolled`, `stud_pic`, `examgrade`, `examremark`, `examdate`, `password`, `account_status`, `fatherfname`, `fathermname`, `fatherlname`, `fatheroccupation`, `fathercontactno`, `fatheremail`, `motherfname`, `mothermname`, `motherlname`, `motheroccupation`, `mothercontactno`, `motheremail`, `guardianfname`, `guardianmname`, `guardianlname`, `guardiancontactno`, `guardianemail`, `guardianoccupation`, `paymentperiod`, `discounttype`, `discount`, `honorcertificate`, `birthcertificate`, `form137`, `form9`, `goodmoral`, `baptismal`, `admit_status`) VALUES
(1, '20181000', 'Marvyn', 'Atin', 'Casao', '20', '1997-11-16', 'Male', '#149 Tulay, Ibaan, Batangas', 'Ibaan', '09154095632', '1', 'marvynjohnatin@gmail.com', 'Highschool', '8', 'N/A', '', 'Enrolled', '1451500_700507843300899_1312591366_n.jpg', '95', 'PASS', 0, 'Allforlyadel24', 'Activated', 'Mario', 'Caymo', 'Atin', 'Engineer', '09154095632', 'mario@gmail.com', 'Evelyn', 'Casao', 'Atin', 'Accountant', '09154095632', 'evelyn@gmail.com', 'Elene', 'Casao', 'Casao', '09154095632', 'elena@email', 'Something', '', 'EB_Scholar', '10%', 'Specimen_England_and_Wales_Long_Birth_Certificate.jpg', '1520607817.jpg', 'certificate-of-good-moral-character-1-638.jpg', 'Certificate-of-Honor-Template.jpg', 'Forms.png', 'free-printable-baptism-certificate.jpg', 'Admitted');

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
(25, 'Eng1', 'English 1', 'Elementary', '1', '', 'N/A', ''),
(26, 'Math1', 'Mathematics 1', 'Elementary', '1', '', 'N/A', ''),
(27, 'Fil1', 'Filipino 1', 'Elementary', '1', '', 'N/A', ''),
(28, 'Eng2', 'English 2', 'Elementary', '2', '', 'N/A', ''),
(29, 'Math2', 'Mathematics 2', 'Elementary', '2', '', 'N/A', ''),
(30, 'Fil2', 'Filipino 2', 'Elementary', '2', '', 'N/A', ''),
(31, 'Eng3', 'English 3', 'Elementary', '3', '', 'N/A', ''),
(32, 'Math3', 'Mathematics 3', 'Elementary', '3', '', 'N/A', ''),
(33, 'Fil3', 'Filipino 3', 'Elementary', '3', '', 'N/A', ''),
(34, 'Eng4', 'English 4', 'Elementary', '4', '', 'N/A', ''),
(35, 'Math4', 'Mathematics 4', 'Elementary', '4', '', 'N/A', ''),
(36, 'Fil4', 'Filipino 4', 'Elementary', '4', '', 'N/A', ''),
(37, 'Eng5', 'English 5', 'Elementary', '5', '', 'N/A', ''),
(38, 'Math5', 'Mathematics 5', 'Elementary', '5', '', 'N/A', ''),
(39, 'Fil5', 'Filipino 5', 'Elementary', '5', '', 'N/A', ''),
(40, 'Eng6', 'English 6', 'Elementary', '6', '', 'N/A', ''),
(41, 'Math6', 'Mathematics 6', 'Elementary', '6', '', 'N/A', ''),
(42, 'Fil6', 'Filipino 6', 'Elementary', '6', '', 'N/A', ''),
(43, 'AP1', 'Araling Panlipunan 1', 'JHS', '7', '', 'N/A', ''),
(44, 'TLE1', 'Technology and Livelihood 1', 'JHS', '7', '', 'N/A', ''),
(45, 'Math7', 'Mathematics 7', 'JHS', '7', '', 'N/A', ''),
(46, 'AP2', 'Araling Panlipunan 2', 'JHS', '8', '', 'N/A', ''),
(47, 'TLE2', 'Technology and Livelihood 2', 'JHS', '8', '', 'N/A', ''),
(48, 'Math8', 'Mathematics 8', 'JHS', '8', '', 'N/A', ''),
(49, 'AP3', 'Araling Panlipunan 3', 'JHS', '9', '', 'N/A', ''),
(50, 'TLE3', 'Technology and Livelihood 3', 'JHS', '9', '', 'N/A', ''),
(51, 'Math9', 'Mathematics 9', 'JHS', '9', '', 'N/A', ''),
(52, 'AP4', 'Araling Panlipunan 4', 'JHS', '10', '', 'N/A', ''),
(53, 'TLE4', 'Technology and Livelihood 4', 'JHS', '10', '', 'N/A', ''),
(54, 'Math10', 'Mathematics 10', 'JHS', '10', '', 'N/A', '');

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
(2, 'admission', 'password123', 'AdmissionFname', 'AdmissionLname', 'Admission', 'noimage.jpg'),
(3, 'systemadmin', 'password123', 'systemadminfname', 'systemadminlname', 'SystemAdmin', 'noimage.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
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
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
