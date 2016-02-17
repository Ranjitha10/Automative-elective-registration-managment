-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2015 at 06:15 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elect_auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignment_title` varchar(100) DEFAULT NULL,
  `student_usn` varchar(30) NOT NULL,
  `elective_id` varchar(30) NOT NULL,
  `a_marks` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `Date` date NOT NULL DEFAULT '0000-00-00',
  `Total_class` int(5) DEFAULT NULL,
  `student_usn` varchar(30) NOT NULL,
  `elective_id` varchar(30) NOT NULL,
  `class_attended` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Date`, `Total_class`, `student_usn`, `elective_id`, `class_attended`) VALUES
('2011-01-31', 12, '1RV13IS032', '12IS6C1', 11),
('2015-11-01', 63, '1RV13IS032', '12IS6C1', 34);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `email`, `comments`) VALUES
('Enter your name', 'sudheshat94@gmail.com', 's'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` char(30) NOT NULL,
  `department_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
('BT', 'Biotechnology Engineering'),
('CH', 'Chemical Engineering'),
('CSE', 'computer sciene and Engineering'),
('CV', 'Civil Engineering'),
('ECE', 'Electronics and Communication Engineering'),
('EEE', 'Electrical and Electronics engineering'),
('IEM', 'Industrial Engineering and Mechanism'),
('ISE', 'Information Science Engineering'),
('IT', 'Instrumentation technology'),
('pp', 'sasa'),
('TE', 'Telecom Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `elective`
--

CREATE TABLE IF NOT EXISTS `elective` (
  `elective_id` varchar(30) NOT NULL,
  `elective_name` varchar(30) DEFAULT NULL,
  `credit` int(5) DEFAULT NULL,
  `department_Id` varchar(30) NOT NULL DEFAULT '',
  `semester` int(2) NOT NULL,
  `filename` varchar(30) DEFAULT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'Local',
  `visit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elective`
--

INSERT INTO `elective` (`elective_id`, `elective_name`, `credit`, `department_Id`, `semester`, `filename`, `type`, `visit`) VALUES
('12CS5C1', 'Unix Systems Programming', 4, 'CSE', 5, NULL, 'Local', 0),
('12CS5C2', 'Linux', 4, 'CSE', 5, NULL, 'Local', 0),
('12CS5C3', 'Fuzzy Logic', 4, 'CSE', 5, NULL, 'Local', 0),
('12CS5D1', 'Entreprise Architecture', 3, 'CSE', 5, NULL, 'Local', 0),
('12CS5D2', 'Information Retrieval', 3, 'CSE', 5, NULL, 'Local', 0),
('12CS6C1', 'Fuzzy Logic', 4, 'CSE', 6, NULL, 'Local', 0),
('12CS6C2', 'Machine Learning ', 4, 'CSE', 6, NULL, 'Local', 0),
('12CS6C3', 'Image processing ', 4, 'CSE', 6, NULL, 'Local', 0),
('12CS6D1', 'Compiler Design', 3, 'CSE', 6, 'COMPILER DESIGN.pdf', 'Local', 5),
('12CS6D2', 'System Software', 3, 'CSE', 6, NULL, 'Local', 0),
('12CS7E1', 'Big Data Analytics', 4, 'CSE', 7, NULL, 'Local', 0),
('12CS7E2', 'Human Computer Interaction', 4, 'CSE', 7, NULL, 'Local', 0),
('12CS7E3', 'Computer Graphics', 4, 'CSE', 7, NULL, 'Local', 0),
('12EC5C1', 'Data Stuctures', 4, 'ECE', 5, NULL, 'Local', 1),
('12EC5C2', 'DBMS', 4, 'ECE', 5, NULL, 'Local', 0),
('12EC5C3', 'Networks', 4, 'ECE', 5, NULL, 'Local', 0),
('12EC5D1', 'VLSI', 3, 'ECE', 5, NULL, 'Local', 0),
('12EC5D2', 'Operating Systems', 3, 'ECE', 5, NULL, 'Local', 0),
('12EC6C1', 'Java', 4, 'ECE', 6, NULL, 'Local', 0),
('12EC6C2', 'Radar Systems', 4, 'ECE', 6, NULL, 'Local', 0),
('12EC6C3', 'Telecommunication Systems', 4, 'ECE', 6, NULL, 'Local', 0),
('12EC6D1', 'ARM System Development', 3, 'ECE', 6, NULL, 'Local', 1),
('12EC6D2', 'Broad Band Communication', 4, 'ECE', 6, NULL, 'Local', 0),
('12EC7E1', 'VLSI Testing for ICS', 4, 'ECE', 7, NULL, 'Local', 0),
('12EC7E2', 'MEMS and Smart Systems', 4, 'ECE', 7, NULL, 'Local', 0),
('12EC7E3', 'Radio Frequency Integrated', 4, 'ECE', 7, NULL, 'Local', 0),
('12GF703', 'Mobile Appliction Development', 4, 'CSE', 7, NULL, 'Global', 0),
('12GF705', 'Artificial Neural Networks', 4, 'ECE', 7, NULL, 'Global', 1),
('12GF706', 'Design of Renewable Systems', 4, 'EEE', 7, NULL, 'Global', 0),
('12GF709', ' JAVA & J2EE', 4, 'ISE', 7, NULL, 'Global', 0),
('12GG703', 'Intelligent Systems', 3, 'CSE', 7, NULL, 'Global', 0),
('12GG705', 'Automotive electronics', 3, 'ECE', 7, NULL, 'Global', 1),
('12GG706', 'Industrial Electronics', 3, 'EEE', 7, NULL, 'Global', 0),
('12GG708', 'Cloud computing', 3, 'ISE', 7, NULL, 'Global', 1),
('12IS5C1', 'Network Programming', 4, 'ISE', 5, NULL, 'Local', 0),
('12IS5C2', 'File Structures', 4, 'ISE', 5, NULL, 'Local', 0),
('12IS5C3', 'Managing Information Systems', 4, 'ISE', 5, NULL, 'Local', 0),
('12IS5D1', 'Java & J2EE', 3, 'ISE', 5, NULL, 'Local', 0),
('12IS5D2', 'Advanced Operating Systems', 3, 'ISE', 5, NULL, 'Local', 0),
('12IS6C1', 'High Performance Computing', 4, 'ISE', 6, NULL, 'Local', 0),
('12IS6C2', 'Graph Theory', 4, 'ISE', 6, NULL, 'Local', 0),
('12IS6C3', 'Natural Language Processing', 4, 'ISE', 6, 'NLP.pdf', 'Local', 1),
('12IS6D1', 'Wireless Sensor Nertworks', 3, 'ISE', 6, NULL, 'Local', 0),
('12IS6D2', 'Compiler Design', 3, 'ISE', 6, 'COMPILER DESIGN.pdf', 'Local', 5),
('12IS7E1', 'Big Data Analytics', 4, 'ISE', 7, NULL, 'Local', 0),
('12IS7E2', 'Cloud Computing', 4, 'ISE', 7, NULL, 'Local', 1),
('12IS7E3', 'Fuzzy logic and GA', 4, 'ISE', 7, NULL, 'Local', 0);

-- --------------------------------------------------------

--
-- Table structure for table `learn`
--

CREATE TABLE IF NOT EXISTS `learn` (
  `elective_id` varchar(30) NOT NULL DEFAULT '',
  `student_usn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learn`
--

INSERT INTO `learn` (`elective_id`, `student_usn`) VALUES
('12GF703', '1RV12IS026'),
('12GG703', '1RV12IS026'),
('12GF703', '1RV12IS034'),
('12GG703', '1RV12IS034'),
('12IS6C1', '1RV13IS032'),
('12IS6D1', '1RV13IS032');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `student_usn` varchar(30) NOT NULL DEFAULT '',
  `elective_id` varchar(30) NOT NULL DEFAULT '',
  `type` varchar(5) NOT NULL DEFAULT '',
  `q_mark` int(2) DEFAULT NULL,
  `t_mark` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`student_usn`, `elective_id`, `type`, `q_mark`, `t_mark`) VALUES
('1RV13IS032', '12IS6C1', '1', 22, 12),
('1RV13IS032', '12IS6C1', '2', 43, 12),
('1RV13IS032', '12IS6C1', '3', 34, 12),
('1RV13IS032', '12IS6C1', '4', 12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` varchar(30) NOT NULL DEFAULT '',
  `staff_name` varchar(30) DEFAULT NULL,
  `staff_desig` varchar(30) DEFAULT NULL,
  `department_id` varchar(30) NOT NULL DEFAULT '',
  `email_id` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_desig`, `department_id`, `email_id`, `password`) VALUES
('100', 'B.M.Sagar', 'Associate Professor', 'ISE', 'sagar.bm@gmail.com', '12'),
('101', 'padmashree', 'Assistant Professor', 'ISE', 'padmashre.t@gmail.com', '12'),
('102', 'Rekha', 'Assistant Professor', 'ISE', 'rekha@gmail.com', '12'),
('103', 'Rajashekar Murthy', 'Associative Professor', 'ISE', 'rms@gmail.com', '12'),
('104', 'Cauvery', 'HOD', 'ISE', 'cauvery@gmail.com', '12'),
('105', 'Smitha', 'Assistant Professor', 'ISE', 'smitha@gmail.com', '12'),
('106', 'Raghavendra', 'SGR', 'ISE', 'raghavendra@gmail.com', '12'),
('107', 'G N Sreenivasaiah', 'GNS', 'ISE', 'sreenivasaiah@gmail.com', '12'),
('108', 'Manjunath', 'MNS', 'CSE', 'manjunath@gmail.com', '12'),
('109', 'Parvati', 'PKS', 'CSE', 'parvati@gmail.com', '12'),
('110', 'Naveen H N', 'NHN', 'CSE', 'naveenhn@gmail.com', '12'),
('111', 'Suresh', 'SKS', 'ECE', 'suresh@gmail.com', '12'),
('112', 'Manohar', 'MLS', 'ECE', 'manohar@gmail,com', '12'),
('113', 'Shanmukh', 'SLP', 'ECE', 'shanmukh@gmail.com', '12'),
('114', 'Harish', 'HGP', 'EEE', 'harish@gmail.com', '12'),
('115', 'Ajith', 'ajith@gmail.com', 'EEE', 'ajith@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_usn` varchar(30) NOT NULL DEFAULT '',
  `first_name` char(30) DEFAULT NULL,
  `middle_name` char(30) DEFAULT NULL,
  `last_name` char(30) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  `department_id` char(30) NOT NULL DEFAULT '',
  `mobile_no` varchar(20) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_usn`, `first_name`, `middle_name`, `last_name`, `semester`, `department_id`, `mobile_no`, `email_id`, `password`, `year`) VALUES
('1RV12CS103', 'Sudhesh', 'Prabhu', NULL, 7, 'CSE', '9855476321', 'sudheshprabhu@gmail.com', '12', 2015),
('1RV12CS123', 'Vijaykumar', '', NULL, 7, 'CSE', '9856412384', 'vijaykumar@gmail.com', '12', 2015),
('1RV12CS128', 'Vardhanayak', 'P', NULL, 7, 'CSE', '8796325412', 'vardhanayakp@gmail.com', '12', 2015),
('1RV12CV098', 'Naveen', 'A', NULL, 7, 'CV', '78545154', 'naveena@gmail.com', '12', 2015),
('1RV12EC121', 'Basavaraj', NULL, NULL, 7, 'ECE', '8745123657', 'basavaraj@gmail.com', '12', 2015),
('1RV12EC123', 'Ashith', 'E N', NULL, 7, 'ECE', '8542364789', 'ashithen@gmail.com', '12', 2015),
('1RV12EC125', 'Suresh', 'Bhat', NULL, 7, 'ECE', '9856221477', 'suresh@gmail.com', '12', 2015),
('1RV12IS026', 'Nishanth', 'M', 'S', 7, 'ISE', '9025279704', 'nishanthms20@gmail.com', 'root', 2012),
('1RV12IS034', 'Prateek', NULL, 'Mandi', 7, 'ISE', '9449168988', 'prateekmandi007@gmail.com', 'root', 2015),
('1RV12IS048', 'Sagarkumar', 'H', 'N', 7, 'ISE', '9738749877', 'captainsagarsparrow@gmail.com', '12', 2015),
('1RV12IS052', 'Sourabh', NULL, 'shirgur', 7, 'ISE', '8861943745', 'sourabhshirgur@gmail.com', '121212', 2015),
('1RV12IS058', 'Ullas', NULL, 'Jain', 7, 'ISE', '8123171798', 'ullasjain1994@gmail.com', '12', 2015),
('1RV12TC093', 'Aditya', 'R', NULL, 7, 'TE', '785463215', 'adityar@gmail.com', '12', 2015),
('1RV13IS032', 'Pramod', 'L', NULL, 6, 'ISE', '895674512', 'pramodl@gmail.com', '12', 2015),
('1RV13IS045', 'Mohan', 'J', NULL, 5, 'ISE', '8745554644', 'mohanj@gmail.com', '12', 2015),
('1RV13IS048', 'Parthiv', 'Bhat', NULL, 5, 'ISE', '8745121545', 'parthivbhat@gmail.com', '12', 2015),
('1RV13IS076', 'Abhishek', 'G', NULL, 6, 'ISE', '9874563555', 'abhishekg@gmail.com', '12', 2015),
('1RV13IS082', 'Omkar', 'L', NULL, 6, 'ISE', '7451254775', 'omkarl@gmail.com', '12', 2015),
('1RV13IS085', 'Akshay', 'M', NULL, 6, 'ISE', '7451236545', 'akshaym@gmail.com', '12', 2015),
('1RV13IS090', 'Nagaraj', 'N', NULL, 5, 'ISE', '8754123654', 'nagarajn@gmail.com', '12', 2015),
('1RV13IS094', 'Raju', 'G', NULL, 5, 'ISE', '7545212364', 'rajun@gmail.com', '12', 2015),
('390TB21VR1', 'Ujwal', 'K', NULL, 7, 'BT', '7845454547', 'ujwalk@gmail.com', '12', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `student_actual`
--

CREATE TABLE IF NOT EXISTS `student_actual` (
  `student_usn` varchar(30) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `department_id` char(30) NOT NULL,
  `first_name` char(30) NOT NULL,
  `year` int(30) NOT NULL,
  `semester` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_actual`
--

INSERT INTO `student_actual` (`student_usn`, `email_id`, `department_id`, `first_name`, `year`, `semester`) VALUES
('1RV12IS026', 'nishanthms20@gmail.com', 'ISE', 'Nishanth', 2012, 6),
('', '', '', '', 0, 0),
('1RV12IS052', 'soty@gmail.com', 'ISE', 'Sourabh', 2012, 6);

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE IF NOT EXISTS `teaches` (
  `elective_id` varchar(30) NOT NULL,
  `staff_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`elective_id`, `staff_id`) VALUES
('12GF709', '100'),
('12IS5C1', '100'),
('12IS6C1', '100'),
('12IS7E3', '100'),
('12IS5C2', '101'),
('12IS6C2', '101'),
('12IS5C3', '102'),
('12IS6C3', '102'),
('12IS5D1', '103'),
('12IS6D1', '103'),
('12IS6D2', '104'),
('12IS7E2', '105'),
('12GG708', '106'),
('12IS7E1', '106'),
('12CS6D1', '107'),
('12IS6D2', '107'),
('12CS5C1', '108'),
('12CS5D1', '108'),
('12CS6D2', '108'),
('12CS7E1', '108'),
('12GG703', '108'),
('12CS5C2', '109'),
('12CS6C2', '109'),
('12CS7E2', '109'),
('12GG703', '109'),
('12CS5C3', '110'),
('12CS6C1', '110'),
('12CS6C3', '110'),
('12CS7E3', '110'),
('12EC5C1', '111'),
('12EC5D1', '111'),
('12EC6C2', '111'),
('12EC6D2', '111'),
('12GF705', '111'),
('12EC5C2', '112'),
('12EC5D2', '112'),
('12EC6C3', '112'),
('12EC7E1', '112'),
('12GG705', '112'),
('12EC5C3', '113'),
('12EC6C1', '113'),
('12EC6D1', '113'),
('12EC7E2', '113'),
('12GF706', '114'),
('12GG706', '115');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
 ADD PRIMARY KEY (`student_usn`,`elective_id`), ADD KEY `elective_id` (`elective_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
 ADD PRIMARY KEY (`Date`,`student_usn`,`elective_id`), ADD KEY `elective_id` (`elective_id`), ADD KEY `student_usn` (`student_usn`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `elective`
--
ALTER TABLE `elective`
 ADD PRIMARY KEY (`elective_id`,`department_Id`), ADD KEY `department_Id` (`department_Id`);

--
-- Indexes for table `learn`
--
ALTER TABLE `learn`
 ADD PRIMARY KEY (`elective_id`,`student_usn`), ADD KEY `student_usn` (`student_usn`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
 ADD PRIMARY KEY (`student_usn`,`elective_id`,`type`), ADD KEY `elective_id` (`elective_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`staff_id`,`department_id`), ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`student_usn`,`department_id`), ADD KEY `student_ibfk_1` (`department_id`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
 ADD PRIMARY KEY (`elective_id`,`staff_id`), ADD KEY `staff_id` (`staff_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`student_usn`) REFERENCES `student` (`student_usn`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `assignment_ibfk_2` FOREIGN KEY (`elective_id`) REFERENCES `elective` (`elective_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`student_usn`) REFERENCES `student` (`student_usn`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`elective_id`) REFERENCES `elective` (`elective_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `elective`
--
ALTER TABLE `elective`
ADD CONSTRAINT `elective_ibfk_1` FOREIGN KEY (`department_Id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `learn`
--
ALTER TABLE `learn`
ADD CONSTRAINT `learn_ibfk_4` FOREIGN KEY (`elective_id`) REFERENCES `elective` (`elective_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `learn_ibfk_5` FOREIGN KEY (`student_usn`) REFERENCES `student` (`student_usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`elective_id`) REFERENCES `elective` (`elective_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`student_usn`) REFERENCES `student` (`student_usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`elective_id`) REFERENCES `elective` (`elective_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
