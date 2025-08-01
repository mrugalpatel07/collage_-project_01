-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 07:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  `UserRole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`, `UserRole`) VALUES
(1, 'Admin', 'admin', 9757128558, 'adminuser@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2021-04-13 18:30:00', 1),
(11, 'Patel Vivek', 'vivek', 9977552214, 'patelvivek@gmail.com', '8a09052c9601178c546f1ee513920cf2', '2023-05-27 05:13:09', 0),
(12, 'Patel Mrugal', 'mrugal', 9955888779, 'patelmugal52@gmail.com', 'ae86f89f0472b550d47a8997ad5be993', '2023-05-27 07:16:40', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `tblpass` (
  `ID` int(10) NOT NULL,
  `PassNumber` varchar(200) DEFAULT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `IdentityType` varchar(200) DEFAULT NULL,
  `IdentityCardno` varchar(200) DEFAULT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `FromDate` varchar(200) DEFAULT NULL,
  `ToDate` varchar(200) DEFAULT NULL,
  `PasscreationDate` timestamp NULL DEFAULT current_timestamp(),
  `CreatedBy` varchar(120) DEFAULT NULL,
  `enrollmentnumber` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpass`
--

INSERT INTO `tblpass` (`ID`, `PassNumber`, `FullName`, `ContactNumber`, `Email`, `IdentityType`, `IdentityCardno`, `Category`, `FromDate`, `ToDate`, `PasscreationDate`, `CreatedBy`, `enrollmentnumber`) VALUES
(9, '332209525', 'Prince', 9988775878, 'princepatel@gmail.com', 'Sem 6', NULL, 'Student', '2023-05-10 12:39:00', '2023-05-15 14:45:00', '2023-05-06 16:10:02', 'admin', '2020095900001232'),
(10, '584910941', 'Dharmik ', 9724639966, 'mewadadharmik@gmail.com', 'Sem 6', NULL, 'Student', '2023-04-29T15:15', '2023-05-14T21:52', '2023-05-06 16:22:40', 'admin', '2020095900001143'),
(11, '960936992', 'Yagna', 6355440560, 'acharyayagna16@gmail.com', 'Sem 6', '20202195900000036', 'Student', '2023-05-02T21:53', '2023-05-20T21:53', '2023-05-06 16:23:31', 'admin', '2020219590000036'),
(12, '345062936', 'ram', 9988775878, 'ramdesai@gmail.com', 'Sem 4', NULL, 'Student', '2023-05-02 22:00:00', '2023-05-18 15:05:00', '2023-05-06 16:31:08', 'admin', '2020209590000118'),
(13, '172726809', 'Patel Dhruv', 9188755878, 'pateldhruv007@gmail.com', 'Sem 4', NULL, 'Student', '2023-05-01 16:01:00', '2023-05-01 13:02:00', '2023-05-06 16:32:20', 'admin', '2020095900000542'),
(14, '686443811', 'Deep', 9788455544, 'pateldeep75@gmail.com', 'Sem 2', NULL, 'Student', '2023-04-28 22:06:00', '2023-05-18 22:07:00', '2023-05-06 16:37:21', 'admin', '2020095900001135'),
(15, '503041253', 'Nirmal ', 9875131698, 'patelnirmal59@gmail.com', 'Sem 5', NULL, 'Student', '2023-04-30 16:15:00', '2023-05-18 14:21:00', '2023-05-06 16:46:10', 'admin', '2020095900001127'),
(16, '779089847', 'Neha', 9874256484, 'patelneha@outlook.com', 'Sem 6', NULL, 'Student', '2023-03-29 22:19:00', '2023-05-26 22:17:00', '2023-05-06 16:47:52', 'admin', '2020095900000654'),
(17, '638518752', 'Urvashi', 9458781487, 'patelurvashi@gmail.com', 'Sem 6', NULL, 'Student', '2023-03-15 14:20:00', '2023-05-11 14:20:00', '2023-05-06 16:50:50', 'admin', '2020209590000727'),
(18, '629537297', 'akash', 9421548752, 'patelakasha16@yahoo.com', 'Sem 5', NULL, 'Student', '2023-05-03 12:25:00', '2023-05-19 15:30:00', '2023-05-06 16:56:03', 'admin', '2020209590000511'),
(19, '291784019', 'Mit', 9852159862, 'mitpatelvadu2@gmail.com', 'Sem 3', NULL, 'Student', '2023-05-09 22:32:00', '2023-05-17 22:06:00', '2023-05-06 16:58:31', 'admin', '2020209590000646'),
(20, '548636051', 'Suthar Dharmik', 9724639966, 'mvddharmik19@gmail.com', 'Sem 6', NULL, 'Student', '2023-05-06', '2023-05-06', '2023-05-06 17:21:59', 'dharmik', NULL),
(21, '488783354', 'Raj', 9874587562, 'verat50857@loongwin.com', 'Sem 6', NULL, 'Student', '2023-04-19', '2023-05-18', '2023-05-06 17:26:40', 'dharmik', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CategoryName` (`CategoryName`);

--
-- Indexes for table `tblpass`
--
ALTER TABLE `tblpass`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `catid` (`Category`),
  ADD KEY `usename` (`CreatedBy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblpass`
--
ALTER TABLE `tblpass`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblpass`
--
ALTER TABLE `tblpass`
  ADD CONSTRAINT `usename` FOREIGN KEY (`CreatedBy`) REFERENCES `tbladmin` (`UserName`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
