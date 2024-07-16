-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 07:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clg_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `listing_1_table`
--

CREATE TABLE `listing_1_table` (
  `House_no` varchar(255) NOT NULL,
  `Soc_name` varchar(50) NOT NULL,
  `Near` varchar(100) NOT NULL,
  `Street_name` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Total_houses` varchar(50) NOT NULL,
  `Floor_no` varchar(15) NOT NULL,
  `Total_floors` int(100) NOT NULL,
  `L_email` varchar(50) NOT NULL,
  `Bedrooms` varchar(10) NOT NULL,
  `Balconies` varchar(10) NOT NULL,
  `Furnished` varchar(50) NOT NULL,
  `Bathrooms` varchar(10) NOT NULL,
  `TV` int(10) NOT NULL,
  `AC` int(10) NOT NULL,
  `Amenities` varchar(255) NOT NULL,
  `Property_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listing_1_table`
--

INSERT INTO `listing_1_table` (`House_no`, `Soc_name`, `Near`, `Street_name`, `Area`, `City`, `Total_houses`, `Floor_no`, `Total_floors`, `L_email`, `Bedrooms`, `Balconies`, `Furnished`, `Bathrooms`, `TV`, `AC`, `Amenities`, `Property_type`) VALUES
('A/506', '', 'Nr. Marutinandan Restaturant', 'S.G. Highway', 'Sola', 'Ahmedabad', 'More than 100', '5th', 7, 'karmapatel@gmail.com', '3', '1', 'Fully Furnished', '3', 2, 3, 'Fridge,Sofa,Washing Machine,Microwave,Electricity,Solar Panel', 'Flat/Apartment'),
('23', '', 'Nr. Mayflower Hospital', 'Navrangpura Road', 'Sindhu Bhawan', 'Ahmedabad', 'Less than 50', 'Select', 4, 'preksha@gmail.com', '5', '2', 'Fully Furnished', '3', 2, 4, 'Fridge,Sofa,Dining Table,Washing Machine,Electricity', 'Bunglow'),
('B/502', '', 'Khodiyar Mata Temple', 'GST Road ', 'New Ranip', 'Ahmedabad', 'Between 50 to 100', 'Select', 3, 'ram1@gmail.com', '3', '1', 'Semi Furnished', '1', 2, 1, 'Sofa,Microwave,Gas Connection,Solar Panel', 'Bunglow'),
('78', '', 'Nr. Kamuba Party plot', 'GST Road', 'Ghatlodiya', 'Ahmedabad', 'Less than 50', '3rd', 5, 'ram@gmail.com', '3', '1', 'Fully Furnished', '3', 1, 2, '', 'Flat/Apartment'),
('A/598', '', 'Film City', 'Film City Road', 'Sindhu Bhawan', 'Ahmedabad', 'Less than 50', '6th', 8, 'salu@gmail.com', '3', '4', 'Semi Furnished', '2', 1, 3, '', 'Villa'),
('A-101', '', 'Nr. Kamuba Party plot', 'New Ranip Road', 'New Ranip', 'Ahmedabad', 'Between 50 to 100', 'Select', 3, 'yashshah@gmail.com', '5', '2', 'Fully Furnished', '4', 2, 4, '', 'Bunglow');

-- --------------------------------------------------------

--
-- Table structure for table `listing_2_table`
--

CREATE TABLE `listing_2_table` (
  `L_email` varchar(255) NOT NULL,
  `Sqrt` bigint(100) NOT NULL,
  `Construction_age` varchar(100) NOT NULL,
  `Rent` bigint(100) NOT NULL,
  `Maintainance` bigint(100) NOT NULL,
  `Image_1` varchar(100) NOT NULL,
  `Image_2` varchar(100) NOT NULL,
  `Image_3` varchar(100) NOT NULL,
  `Image_4` varchar(100) NOT NULL,
  `Image_5` varchar(100) NOT NULL,
  `Image_6` varchar(100) NOT NULL,
  `Image_7` varchar(100) NOT NULL,
  `Image_8` varchar(100) NOT NULL,
  `Image_9` varchar(100) NOT NULL,
  `Image_10` varchar(100) NOT NULL,
  `Approve` int(10) NOT NULL,
  `P_desc` text NOT NULL,
  `map` text NOT NULL,
  `map_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listing_2_table`
--

INSERT INTO `listing_2_table` (`L_email`, `Sqrt`, `Construction_age`, `Rent`, `Maintainance`, `Image_1`, `Image_2`, `Image_3`, `Image_4`, `Image_5`, `Image_6`, `Image_7`, `Image_8`, `Image_9`, `Image_10`, `Approve`, `P_desc`, `map`, `map_url`) VALUES
('karmapatel@gmail.com', 1555, '5 to 10 Years', 12000, 5000, 'uploads/pexels-chait-goli-1918291.jpg', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 1, '  \r\n                \r\n                ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.7097302530465!2d72.53336517474803!3d23.10771937911413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e82d90c4097f9%3A0xab0c937c931c4833!2sSilver%20Gardenia!5e0!3m2!1sen!2sin!4v1690261860816!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.google.com/maps/place/Silver+Gardenia/@23.1077194,72.5333652,17z/data=!3m1!4b1!4m6!3m5!1s0x395e82d90c4097f9:0xab0c937c931c4833!8m2!3d23.1077194!4d72.5359401!16s%2Fg%2F1tfblq06?entry=ttu'),
('preksha@gmail.com', 1200, '1 to 5 Years', 11000, 2000, 'uploads/pexels-ksenia-chernaya-4740485.jpg', 'uploads/pexels-curtis-adams-3555614.jpg', 'uploads/pexels-vecislavas-popa-1571470.jpg', 'uploads/pexels-donald-tong-189333.jpg', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 1, '  \r\n                \r\n                ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.459033846606!2d72.55547532474586!3d23.043626779159013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848dd867c45d%3A0xa4b2dee8dc07a31d!2sPraful%20Society%2C%20Girivar%20Society%2C%20Navrangpura%2C%20Ahmedabad%2C%20Gujarat%20380014!5e0!3m2!1sen!2sin!4v1683825717846!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.google.com/maps/place/Praful+Society,+Girivar+Society,+Navrangpura,+Ahmedabad,+Gujarat+380014/@23.0436268,72.5554753,17z/data=!3m1!4b1!4m6!3m5!1s0x395e848dd867c45d:0xa4b2dee8dc07a31d!8m2!3d23.0436267!4d72.5580424!16s%2Fg%2F11dx8p1_59'),
('ram1@gmail.com', 1500, '5 to 10 Years', 15000, 2000, 'uploads/pexels-vecislavas-popa-1571470.jpg', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 1, '  \r\n                \r\n                ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.1640467354027!2d72.56397237474751!3d23.09108987912575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8309f479a56d%3A0xe74bb8c8288e8b24!2sSiddhi%20Bunglows%2C%20New%20Ranip%2C%20Ahmedabad!5e0!3m2!1sen!2sin!4v1687325085052!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.google.com/maps/place/Siddhi+Bunglows,+New+Ranip,+Ahmedabad/@23.0910899,72.5639724,17z/data=!3m1!4b1!4m6!3m5!1s0x395e8309f479a56d:0xe74bb8c8288e8b24!8m2!3d23.0910899!4d72.5665473!16s%2Fg%2F11bwkymgk4?entry=ttu'),
('ram@gmail.com', 112, '5 to 10 Years', 7000, 1500, 'uploads/pexels-maria-orlova-4906520.jpg', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 1, '  \r\n                \r\n                ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.225042209597!2d72.56306027474747!3d23.088856379127407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e830a46089a0b%3A0x565f3531f727f5c1!2sSavan%20Bungalows!5e0!3m2!1sen!2sin!4v1683823394006!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.google.com/maps/place/Savan+Bungalows/@23.0888564,72.5630603,17z/data=!3m1!4b1!4m6!3m5!1s0x395e830a46089a0b:0x565f3531f727f5c1!8m2!3d23.0888564!4d72.5656352!16s%2Fg%2F11fy4qgxfk'),
('salu@gmail.com', 1555, '10 to 15 Years', 12000, 1000, 'uploads/pexels-ksenia-chernaya-4740485.jpg', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 1, '  \r\n                \r\n                ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.1457164745!2d72.71637172154087!3d19.08217751124499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1683573287230!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.google.com/maps/place/Rajdhani+Bunglows/@23.0885555,72.562358,17z/data=!3m1!4b1!4m6!3m5!1s0x395e830b2a6c6621:0x285eb1d9bc6785a5!8m2!3d23.0885555!4d72.5649329!16s%2Fg%2F11dxs2zvhd?entry=ttu'),
('yashshah@gmail.com', 1500, '5 to 10 Years', 8500, 1200, 'uploads/pexels-vecislavas-popa-1571470.jpg', 'uploads/pexels-maria-orlova-4906520.jpg', 'uploads/pexels-curtis-adams-3555614.jpg', 'uploads/pexels-ksenia-chernaya-4740485.jpg', 'uploads/pexels-donald-tong-189333.jpg', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 'uploads/', 1, '  \r\n                \r\n                ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.094330012494!2d72.55233727474759!3d23.093642479124014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83102e09b11b%3A0x44163a01ee41b762!2sRutu%20Bunglow!5e0!3m2!1sen!2sin!4v1683607601439!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.google.com/maps/place/Rutu+Bunglow/@23.0936425,72.5523373,17z/data=!3m1!4b1!4m6!3m5!1s0x395e83102e09b11b:0x44163a01ee41b762!8m2!3d23.0936425!4d72.5549122!16s%2Fg%2F11bxfz0zmj');

-- --------------------------------------------------------

--
-- Table structure for table `listing_common_table`
--

CREATE TABLE `listing_common_table` (
  `Type` varchar(8) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `L_email` varchar(50) NOT NULL,
  `Approve` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listing_common_table`
--

INSERT INTO `listing_common_table` (`Type`, `First_name`, `Last_name`, `L_email`, `Approve`) VALUES
('Owner', 'Karma', 'Patel', 'karmapatel@gmail.com', 1),
('Owner', 'Preksha', 'Patel', 'preksha@gmail.com', 1),
('Owner', 'Ram', 'Patel', 'ram1@gmail.com', 1),
('Owner', 'Ram', 'Panchal', 'ram@gmail.com', 1),
('Owner', 'salman', 'khan', 'salu@gmail.com', 1),
('Owner', 'Yash', 'Shah', 'yashshah@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `C_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`Email`, `Username`, `Password`, `C_password`) VALUES
('karma@gmail.com', 'karma', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad'),
('prekshapatel@gmail.com', 'preksha', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad'),
('ram@gmail.com', 'Ram', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad'),
('yash@gmail.com', 'Yash', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listing_1_table`
--
ALTER TABLE `listing_1_table`
  ADD UNIQUE KEY `S_email` (`L_email`);

--
-- Indexes for table `listing_2_table`
--
ALTER TABLE `listing_2_table`
  ADD UNIQUE KEY `L_email_2` (`L_email`),
  ADD KEY `L_email` (`L_email`);

--
-- Indexes for table `listing_common_table`
--
ALTER TABLE `listing_common_table`
  ADD PRIMARY KEY (`L_email`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `listing_1_table`
--
ALTER TABLE `listing_1_table`
  ADD CONSTRAINT `listing_1_table_ibfk_1` FOREIGN KEY (`L_email`) REFERENCES `listing_common_table` (`L_email`);

--
-- Constraints for table `listing_2_table`
--
ALTER TABLE `listing_2_table`
  ADD CONSTRAINT `listing_2_table_ibfk_1` FOREIGN KEY (`L_email`) REFERENCES `listing_common_table` (`L_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
