-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2018 at 09:28 AM
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
(1, 'Gab', 'Jornacion', 'Ocampo', 'Makati', '09154095632', 'gabjornacion@gmail.com', 'gabjornacion', 'parentdefault'),
(2, 'Rennier', 'Cuevas', 'Tongol', 'Tambo', '09154095632', 'renniercuevas@gmail.com', 'renniercuevas', 'parentdefault'),
(3, 'Cha', 'Ocampo', 'Baes', 'Ortigas', '09154095632', 'chaocampo@gmail.com', 'chaocampo', 'parentdefault'),
(4, 'Mariel', 'Marasigan', 'Magpantay', 'Lodlod', '09153011276', 'marielmarasigan@gmail.com', 'marielmarasigan', 'parentdefault'),
(5, 'Jethro', 'Bautro', 'Aranda', 'Ibaan', '09154095632', 'jethrobautro@gmail.com', 'jethrobautro', 'parentdefault'),
(6, 'Jhanie', 'Aranda', 'Matala', 'Narkabowl', '09154095632', 'jhaniearanda@gmail.com', 'jhaniearanda', 'parentdefault'),
(7, 'Kai', 'Alvez', 'Mahinay', 'Sinagtala', '09154095632', 'kaialvez@gmail.com', 'kaialvez', 'parentdefault'),
(8, 'Chloe', 'Adorna', 'Agape', 'Lemery', '09154095632', 'chloeadorna@gmail.com', 'chloeadorna', 'parentdefault'),
(9, 'Bea', 'Perez', 'Quiamco', 'Pasig', '09154095632', 'beaperez@gmail.com', 'beaperez', 'parentdefault'),
(10, 'Kathleen', 'Obusan', 'Perez', 'Pasay', '09154095632', 'kathleenobusan@gmail.com', 'kathleenobusan', 'parentdefault'),
(11, 'Mary', 'Angelee', 'Marin', 'Palawan', '09154095632', 'maryangelee@gmail.com', 'maryangelee', 'parentdefault'),
(12, 'Julienna', 'Villarba', 'Cruz', 'Tanauan', '09154095632', 'juliennavillarba@gmail.com', 'juliennavillarba', 'parentdefault'),
(13, 'Kat', 'Valdez', 'Castillo', 'Roxas', '09154095632', 'katvaldez@gmail.com', 'katvaldez', 'parentdefault'),
(14, 'Elisea', 'Mantuano', 'Jenner', 'New York', '09154095632', 'eliseamantuano@gmail.com', 'eliseamantuano', 'parentdefault'),
(15, 'Chiara', 'Permentilla', 'Lalunio', 'Talisay', '09154095632', 'chiarapermentilla@gmail.com', 'chiarapermentilla', 'parentdefault'),
(16, 'Rachel', 'Zapanta', 'Enriquez', 'Sabang', '09154095632', 'rachelzapanta@gmail.com', 'rachelzapanta', 'parentdefault'),
(17, 'Gabbi', 'Garcia', 'Ilagan', 'Colorado', '09154095632', 'gabbigarcia@gmail.com', 'gabbigarcia', 'parentdefault');

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
  `age` varchar(50) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL,
  `placeofbirth` text NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `parentid` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `current_level` varchar(50) NOT NULL,
  `current_year` varchar(50) NOT NULL,
  `current_section` text NOT NULL,
  `status_enrolled` text NOT NULL,
  `stud_pic` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `account_status` text NOT NULL,
  `fatherfname` varchar(50) NOT NULL,
  `fathermname` varchar(50) NOT NULL,
  `fatherlname` varchar(50) NOT NULL,
  `fatheroccupation` varchar(50) NOT NULL,
  `fathercontactno` varchar(50) NOT NULL,
  `fatheremail` varchar(255) NOT NULL,
  `motherfname` varchar(50) NOT NULL,
  `mothermname` varchar(50) NOT NULL,
  `motherlname` varchar(50) NOT NULL,
  `motheroccupation` varchar(50) NOT NULL,
  `mothercontactno` varchar(50) NOT NULL,
  `motheremail` varchar(255) NOT NULL,
  `guardianfname` varchar(50) NOT NULL,
  `guardianmname` varchar(50) NOT NULL,
  `guardianlname` varchar(50) NOT NULL,
  `guardiancontactno` varchar(50) NOT NULL,
  `guardianemail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `studentnumber`, `fname`, `lname`, `mname`, `age`, `dateofbirth`, `gender`, `address`, `placeofbirth`, `contactno`, `parentid`, `email`, `current_level`, `current_year`, `current_section`, `status_enrolled`, `stud_pic`, `password`, `account_status`, `fatherfname`, `fathermname`, `fatherlname`, `fatheroccupation`, `fathercontactno`, `fatheremail`, `motherfname`, `mothermname`, `motherlname`, `motheroccupation`, `mothercontactno`, `motheremail`, `guardianfname`, `guardianmname`, `guardianlname`, `guardiancontactno`, `guardianemail`) VALUES
(22, '2014152701', 'Marvyn', 'Atin', 'Casao', '20', 'November 16, 1997', 'Male', 'Tulay Ibaan Batangas', 'Putatan Muntinlupa CIty', '09154095632', '', 'marvynjohnatin@gmail.com', 'HighSchool', '4', 'St. Joseph', 'YES', 'noimage.jpg', 'password123', 'Pending', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, '20143700', 'Muffy', 'Atin', 'Casao', '8', 'April 1 2000', 'Male', 'Tulay', 'Muntinlupa', '09154095632', '', 'muffy@gmail.com', 'Elementary', '3', '', '', 'noimage.jpg', 'itsmorefuninsja', 'Pending', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, '20113800', 'Jakko', 'Casao', 'Atin', '3', 'August 16 1996', 'Male', 'Tulay', 'Muntinlupa', '09154095632', '', 'jakko@gmail.com', 'Elementary', '6', '', '', 'noimage.jpg', '', 'Pending', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '20133900', 'Muddog', 'Atin', 'Casao', '5', 'asd', 'Male', 'asd', 'Nov 16 1997', '09154095632', '', 'maddog@gmail.com', 'Elementary', '5', '', 'No', 'noimage.jpg', '', 'Pending', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, '20104000', 'Iris', 'Tanyag', 'Lapuk', '20', 'asdasd', 'Faggot', 'Gay club', 'ASshole', '09153011276', '', 'iristanyag@gmailc.om', 'Elementary', '2', '', 'No', 'noimage.jpg', 'iris9015', 'Pending', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, '20144100', 'Ledayl', 'Maralit', 'Corachea', '19', 'June 8 1998', 'Female', 'Pangao, Ibaan, Batangas', 'Ibaan', '09154095632', '', 'ledaylmaralit@yahoo.com', 'Central', '3', '', 'No', 'noimage.jpg', 'itsmorefunatsja', 'Pending', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_ID` int(11) NOT NULL,
  `teacher_ID` varchar(50) NOT NULL,
  `subject_name` text NOT NULL,
  `subject_level` text NOT NULL,
  `subject_grade` text NOT NULL,
  `coordinator` text NOT NULL,
  `subject_schedule` text NOT NULL,
  `subject_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_ID`, `teacher_ID`, `subject_name`, `subject_level`, `subject_grade`, `coordinator`, `subject_schedule`, `subject_time`) VALUES
(5, '', 'Algebra 1', 'Highschool', 'Grade 7', 'Edmar Silva A. Dimaano', 'Monday to Friday', '7:00 A.M. - 8:00 A.M.'),
(6, '', 'English 1', 'Highschool', 'Grade 7', 'Sheng G. Villanueva', 'Monday to Friday', '9:00 A.M. - 10:00 A.M.'),
(7, '', 'Filipino 1', 'Highschool', 'Grade 7', 'Mhar A. Barza', 'Monday to Friday', '11:00 A.M. - 12:00 A.M.');

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
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
