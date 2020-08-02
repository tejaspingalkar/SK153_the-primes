-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 03:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `f_name`, `m_name`, `l_name`, `date_of_birth`, `gender`, `email`, `mobile_no`, `user_name`, `password`) VALUES
(1, 'Admin', 'Admin', 'admin', '1989-07-28', '', '', '9999999999', 'admin', 'e0ec043b3f9e198ec09041687e4d4e8d');

-- --------------------------------------------------------

--
-- Table structure for table `cimages`
--

CREATE TABLE `cimages` (
  `iid` int(10) NOT NULL,
  `complaintid` int(10) NOT NULL,
  `embankment_id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cimages`
--

INSERT INTO `cimages` (`iid`, `complaintid`, `embankment_id`, `image`, `city`) VALUES
(1, 27, 11, '0', 'Nashik'),
(2, 28, 12, 'uploads/9.jpg', 'Pune'),
(3, 31, 5, 'uploads/aerial-view-of-seashore-near-large-grey-rocks-853199.jpg', 'indore'),
(4, 32, 3, 'uploads/logo.png', 'delhi');

-- --------------------------------------------------------

--
-- Table structure for table `embankment`
--

CREATE TABLE `embankment` (
  `embankment_id` int(10) NOT NULL,
  `embankment_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `latitude` varchar(60) NOT NULL,
  `longitude` varchar(60) NOT NULL,
  `local_authority_id` int(10) DEFAULT NULL,
  `date_of_establishment` date DEFAULT NULL,
  `date_of_modified` date DEFAULT NULL,
  `valid_till` date DEFAULT NULL,
  `river` varchar(50) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `diameter` varchar(50) DEFAULT NULL,
  `thickness` varchar(50) DEFAULT NULL,
  `length` varchar(50) DEFAULT NULL,
  `density` varchar(50) DEFAULT NULL,
  `youngs_modulus` varchar(50) DEFAULT NULL,
  `pile_spacing` varchar(50) DEFAULT NULL,
  `crssec_area_of_pile_cap` varchar(50) DEFAULT NULL,
  `poissons_ratio` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `district` varchar(100) NOT NULL,
  `taluka` varchar(100) NOT NULL,
  `village` varchar(50) NOT NULL,
  `type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `embankment`
--

INSERT INTO `embankment` (`embankment_id`, `embankment_name`, `location`, `latitude`, `longitude`, `local_authority_id`, `date_of_establishment`, `date_of_modified`, `valid_till`, `river`, `image`, `status`, `area`, `diameter`, `thickness`, `length`, `density`, `youngs_modulus`, `pile_spacing`, `crssec_area_of_pile_cap`, `poissons_ratio`, `state`, `district`, `taluka`, `village`, `type`) VALUES
(1, 'Jalgaon', 'Jalgaon', '21.007700', '75.562599', 1, '2020-03-04', '2020-03-12', '0000-00-00', 'Girna', 'NULL', 0, '', '', '', '', '', '', '', '', '', 'Maharashtra', '', '', '', ''),
(3, 'Delhi', 'Delhi', '28.600000', '77.209000', 2, '2020-03-04', '2020-03-17', '2020-03-17', 'brobro', '', 0, '', '', '', '', '', '', '', '', '', 'Delhi', '', '', '', ''),
(4, 'ytdhg', 'ytdhg', '27.923909590311894', '83.24458332562254', NULL, '2020-03-24', NULL, NULL, 'knlbublibubu', NULL, 0, 'ytdhg', 'ytdhg', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'NAME2', 'jaypur', '26.923909590311894', '82.24458332562254', 5, '2020-03-04', '2020-03-26', '2020-03-11', 'maybe', NULL, 0, '', '', '', '', '', '', '', '', '', 'adhyapradesh', '', '', '', ''),
(10, 'NAME3', 'Vijayvada', '16.5062', '80.6480', 6, '2020-03-04', '2020-03-26', '2020-03-11', 'Krishna', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Andhra Pradesh', '', '', '', ''),
(11, 'NAME4', 'Nashik', '19.9975', '73.7898', 7, '2020-03-04', '2020-03-26', '2020-03-11', 'Godavari', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Maharashtra', '', '', '', ''),
(12, 'Kanpur', 'Pune', '18.5204', '73.8567', 8, '2020-03-04', '2020-03-26', '2020-03-11', 'Mula Muthaa', 'embankuploads/bg-masthead.jpg', NULL, 'Mula Muthaa', '', '', '', '', '', '', '', '', ' Maharashtra', '', '', '', ''),
(13, 'NAME6', 'Haridwar', '29.9457', '78.1642', 9, '2020-03-04', '2020-03-26', '2020-03-11', 'Ganga', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Uttarakhand', '', '', '', ''),
(14, 'NAME7', 'Dehradun', '30.3165', '78.0322', 10, '2020-07-21', '2020-03-26', '2020-03-11', 'Rispana', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Uttarakhand', '', '', '', ''),
(17, 'NAME8', 'Chennai', '13.0827', '80.2707', 11, '2020-03-04', '2020-03-26', '2020-03-11', 'Cooum', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tamil Nadu', '', '', '', ''),
(19, ' Lucknow', 'Old Dhule Highway, Old Police Colony, Khote Nagar,', '26.751568131737386', '80.9630626677001', NULL, '2020-07-21', NULL, NULL, ' Lucknow', '', 0, ' Lucknow', '', '', '', '', '', '', '', '', '  Uttar Pradesh 226301', 'Lucknow', 'Lucknow', 'Lucknow', ''),
(21, 'gruyt', 'Old Dhule Highway, Old Police Colony, Khote Nagar,', '23.11989984214455', '77.82852592453604', NULL, '2020-04-09', NULL, NULL, 'dtdfa', NULL, 0, 'dtdfa', '22', '22', '22', '22', '22', '22', '22', '22', ' Madhya Pradesh 464986', '', '', '', ''),
(22, ' Jalgaon', 'Old Dhule Highway, Old Police Colony, Khote Nagar,', '21.02225994743587', '75.51946582779532', NULL, '2020-07-21', NULL, NULL, '', NULL, 0, '', '', '', '', '', '', '', '', '', ' Maharashtra 425002', ' Jalgaon', ' Jalgaon', ' Jalgaon', ''),
(23, 'sh Nag', '16, Ganesh Nagar, New Joshi Colony, Prabhat Colony', '20.99732116794211', '75.56413096589148', NULL, '2020-07-21', NULL, NULL, '', NULL, 0, '', '', '', '', '', '', '', '', '', ' Maharashtra 425001', '', '', '', ''),
(24, 'ytdhg', 'Master Canteen Bus Stop, V.S.S. Nagar, Kharabela N', '20.268973136742943', '85.84080996498709', NULL, '2020-05-06', NULL, NULL, 'Girna', NULL, 0, '', '', '', '', '', '', '', '', '', ' Odisha 751001', '', '', '', ''),
(25, 'Kolkata', '34/34/1, Majherhat, Mominpore, Kolkata, West Benga', '22.520147240882675', '88.3239025114501', NULL, '2020-07-07', NULL, NULL, 'Hooghly', NULL, 0, '', '', '', '', '', '', '', '', '', ' West Bengal 700027', '', '', '', ''),
(26, 'Kolhapur', 'Vadgaon - Hatkanangale Rd, Shivaji Chowk, Peth Vad', '16.83196022535657', '74.31993904099112', NULL, '2020-07-03', NULL, NULL, 'any', NULL, 0, '', '', '', '', '', '', '', '', '', ' Maharashtra 416112', '', '', '', ''),
(27, 'Kolhapur', 'Vadgaon - Hatkanangale Rd, Shivaji Chowk, Peth Vad', '16.83196022535657', '74.31993904099112', NULL, '2020-07-03', NULL, NULL, 'any', NULL, 0, '', '', '', '', '', '', '', '', '', ' Maharashtra 416112', 'Aurangabad', 'Aurangabad', 'Aurangabad', ''),
(28, 'Kolhapur', 'Vadgaon - Hatkanangale Rd, Shivaji Chowk, Peth Vad', '16.83196022535657', '71.31993904099112', NULL, '2020-07-03', NULL, NULL, 'any', NULL, 0, '', '', '', '', '', '', '', '', '', ' Maharashtra 416112', '', '', '', ''),
(29, 'Kolhapur', 'Vadgaon - Hatkanangale Rd, Shivaji Chowk, Peth Vad', '16.83196022535657', '74.31993904099112', NULL, '2020-07-03', NULL, NULL, 'any', 'embankuploads/2.jpg', 0, '', '', '', '', '', '', '', '', '', ' Maharashtra 416112', '', '', '', ''),
(30, 'Kolhapur', 'Vadgaon - Hatkanangale Rd, Shivaji Chowk, Peth Vad', '21.2787', '81.8661', NULL, '2020-07-21', NULL, NULL, 'any', 'embankuploads/2.jpg', 0, '', '', '', '', '', '', '', '', '', ' Maharashtra 416112', 'Aurangabad', 'Aurangabad', 'Aurangabad', ''),
(31, 'any name', 'Unnamed Road, Anandpur, Gujarat 363520, India', '22.215356096570037', '71.16308631882315', NULL, '2020-07-04', NULL, NULL, 'anyriver', 'embankuploads/4.jpg', 0, '', '', '', '', '', '', '', '', '', ' Gujarat 363520', '', '', '', ''),
(32, 'Gurha', 'Unnamed Road, Gurha, Rajasthan 305814, India', '26.94699489366073', '74.85771856157967', NULL, '2020-07-15', NULL, NULL, 'Gurha', 'embankuploads/1587545738-15875457025435398381095335631536.jpg', 1, '', '', '', '', '', '', '', '', '', 'Rajasthan', 'Anandpur', 'Gurha', 'Gurha', 'pond'),
(33, 'Yashoda', 'Mumbai Highway, Bodad, Maharashtra 442001, India', '20.736668084231304', '78.4475650849831', NULL, '2020-07-08', NULL, NULL, 'Yashoda', 'embankuploads/WhatsApp Image 2020-07-19 at 12.10.59 PM.jpeg', 1, '4234234', '34234', '34343', '5554', '343', '343423', '32434', '3334', '4234342', 'Maharashtra', 'Bodad', 'Anandpur', 'Anandpur', 'canal'),
(34, 'Amanishah Nala', 'Unnamed Road, Nimbhi, Rajasthan 303104, India', '27.043052610370662', '75.99246436833914', NULL, '2020-07-23', NULL, NULL, 'Amanishah ', 'embankuploads/embank.jpg', 1, '2323', '33', '3345', '323', '334', '345', '45323', '34', '34324', 'Rajasthan', 'Nimbhi', 'Nimbhi', 'Nimbhi', 'embankment'),
(35, 'Nainital ', 'Nainital Pines Rd, Naina Range, Uttarakhand 263002', '29.40713173394132', '79.48988747004897', NULL, '2020-07-16', NULL, NULL, 'Nainital Lake', 'embankuploads/embank1.jpg', 1, '424', '434345', '45345', '343', '556', '343', '344', '5465', '45345', 'Uttarakhand', 'Naina', 'Naina', 'Naina', 'embankment'),
(36, ' Kaveri ', 'MDR628, Dhavalaveeranpatti, Tamil Nadu 621302, Ind', '10.645570704126209', '78.29994829878454', NULL, '2020-07-08', NULL, NULL, ' Kaveri River', 'embankuploads/embank.jpg', 1, '2323', '33', '34343', '5554', '334', '343423', '45323', '34', '4234342', 'Tamil Nadu', 'Dhavalaveeranpatti', 'Dhavalaveeranpatti', 'Dhavalaveeranpatti', 'canal'),
(37, 'Paral', 'Karimanal, Tamil Nadu, India', '13.524324448719508', '80.2599376677001', NULL, '2020-07-11', NULL, NULL, 'Paral River', 'embankuploads/embank2.jpg', 1, '3324', '34234', '34235', '3423', '434', '4324', '3423', '3423', '34324', 'Tamil Nadu', 'Karimanal', 'Karimanal', 'Karimanal', 'embankment'),
(38, 'Mindhola ', 'Unnamed Road, Baben, Bardoli, Gujarat 394601, Indi', '21.141967998311753', '73.0913585661376', NULL, '2020-07-22', NULL, NULL, 'Mindhola River', 'embankuploads/embank.jpg', 1, '313', '312', '23455', '657', '56', '897', '897', '5667', '6756', 'Gujarat', 'Bardoli', 'Baben', 'Baben', 'pond'),
(39, 'Shipra ', 'Unnamed Road, Kaluheda, Madhya Pradesh 456006, Ind', '23.354123886877613', '75.71471429143449', NULL, '2020-07-08', NULL, NULL, 'Shipra River', 'embankuploads/Embank4.jpg', 1, '898', '789', '7686', '8768', '89896', '7879', '6789', '86889', '86989', 'Madhya Pradesh', 'Kaluheda', 'Kaluheda', 'Kaluheda', 'canal'),
(40, 'Doodh Ganga ', 'Harwan Rd, Shalimar, Rainawari, Srinagar, 191123', '34.15165018969563', '74.87366332248097', NULL, '2020-07-19', NULL, NULL, 'Doodh Ganga River', 'embankuploads/Embank4.jpg', 1, '2323', '34234', '7686', '8768', '89896', '4324', '32434', '3334', '34324', 'Srinagar', 'Rainawari', 'Shalimar', 'Shalimar', 'pond'),
(41, 'Doyang ', 'Unnamed Road, Kohima, Nagaland 797001, India', '25.67521825036589', '94.11022397265081', NULL, '2020-07-23', NULL, NULL, 'Doyang  River', 'embankuploads/WhatsApp Image 2020-07-19 at 12.10.59 PM.jpeg', 1, '4556', '563', '765', '453657', '7676', '54688', '5668', '979', '97986', 'Nagaland', 'Kohima', 'Kohima', 'Kohima', 'canal'),
(42, 'Kuakhai ', 'Unnamed Road, Benupur, Odisha 752101, India', '20.289066560222476', '85.9069103239501', NULL, '2020-07-25', NULL, NULL, 'Kuakhai River', 'embankuploads/embank.jpg', 1, '2323', '563', '23455', '343', '4234', '343', '324234', '34123', '425', 'Odisha', 'Benupur', 'Benupur', 'Benupur', 'canal'),
(43, 'Beas Kund', 'PALCHAN BRIDGE, Solang Valley, Burwa, Himachal Pra', '32.312794466774854', '77.1727794645751', NULL, '2020-07-10', NULL, NULL, 'Beas Kund River', 'embankuploads/embank1.jpg', 1, '5443', '45345', '54', '4534', '4665', '456', '54356', '534', '5436', 'Himachal Pradesh', 'Burwa', 'Solang Valley', 'Solang Valley', 'dam'),
(44, 'Manjeera ', 'Unnamed Road, Singaram, Telangana 506143, India', '17.88055298836634', '79.5787853239501', NULL, '2020-07-18', NULL, NULL, 'Manjeera  River', 'embankuploads/embank2.jpg', 1, '43243', '4235', '23445', '32445', '3445', '3445', '435353', '34235', '34342', 'Telangana', 'Singaram', 'Singaram', 'Singaram', 'pond'),
(45, 'Kumudavathi ', 'Gummanayakana Palya Rd, Vasanthapura, Karnataka 56', '13.80188534425491', '77.94815546408539', NULL, '2020-07-07', NULL, NULL, 'Kumudavathi  River', 'embankuploads/Embank4.jpg', 1, '4234234', '312', '45345', '8768', '343', '345', '32434', '5667', '45345', 'Karnataka', 'Vasanthapura', 'Vasanthapura', 'Vasanthapura', 'embankment'),
(46, 'Champavathi ', 'Unnamed Road, Jakkalacheruvu, Andhra Pradesh 51545', '15.120993663263544', '77.7550548552001', NULL, '2020-07-18', NULL, NULL, 'Champavathi  River', 'embankuploads/Embank5.jpg', 1, '313', '33', '34343', '5554', '556', '345', '45323', '3423', '6756', 'Andhra Pradesh', 'Jakkalacheruvu', 'Jakkalacheruvu', 'Jakkalacheruvu', ''),
(47, 'Kallada ', 'Kottavattom-Vettikkavala Rd, Kerala 691508, India', '9.021891541331216', '76.8761486052001', NULL, '2020-07-25', NULL, NULL, 'Kallada  River', 'embankuploads/embank6.jpg', 1, '3423', '345', '43534', '343', '3455', '43234', '345', '5434', '2343', 'Kerala', 'Vettikkavala Rd', 'Vettikkavala Rd', 'Vettikkavala Rd', 'embankment'),
(48, 'Arasalar ', 'Unnamed Road, Akasampattu, Tamil Nadu 605109, Indi', '12.012267010951145', '79.75731315598135', NULL, '2020-07-17', NULL, NULL, 'Arasalar  River', 'embankuploads/WhatsApp Image 2020-07-19 at 12.10.59 PM.jpeg', 1, '434', '4325', '34534', '4534', '453', '4556', '534', '455', '4534', 'Tamil Nadu', 'Akasampattu', 'Akasampattu', 'Akasampattu', 'canal'),
(49, 'Kurumali', 'Unnamed Road, Marottichal, Kerala 680014, India', '10.472766170182606', '76.3488048552001', NULL, '2020-07-15', NULL, NULL, ' Kurumali River', 'embankuploads/WhatsApp Image 2020-07-19 at 12.10.59 PM.jpeg', 1, '424', '33', '23455', '8768', '334', '343423', '32434', '5465', '6756', 'Kerala', 'Marottichal', 'Marottichal', 'Marottichal', 'pond'),
(50, 'Zuari  ', 'Unnamed Road, Borim, Goa 403401, India', '15.36876209300522', '74.014821672293', NULL, '2020-07-26', NULL, NULL, 'Zuari  River', 'embankuploads/embank.jpg', 1, '424', '789', '7686', '5554', '334', '4324', '344', '5465', '4234342', 'Goa', 'Borim', 'Borim', 'Borim', 'canal'),
(51, 'Krishna ', 'Magalapuram Rd, Vijayawada, Andhra Pradesh 521228,', '16.568887276428203', '80.64878137033196', NULL, '2020-07-25', NULL, NULL, 'Krishna River', 'embankuploads/embank1.jpg', 1, '324', '34234', '23455', '8768', '343', '345', '3423', '3423', '45345', 'Andhra Pradesh', 'Vijayawada', 'Vijayawada', 'Vijayawada', 'pond'),
(52, 'Godavari ', '57-23-6, Subhash Nagar, Gavara Kanchara Palem, Kan', '17.734113372501902', '83.2701915739501', NULL, '2020-07-17', NULL, NULL, 'Godavari  River', 'embankuploads/Embank4.jpg', 1, '4234234', '789', '45345', '343', '343', '4324', '344', '34', '34324', 'Andhra Pradesh', 'Gavara', 'Gavara', 'Gavara', 'canal'),
(53, 'Saraswati ', 'Unnamed Road, Manna Hally, Karnataka 571416, India', '12.732592005744074', '76.7662853239501', NULL, '2020-07-26', NULL, NULL, 'Saraswati  River', 'embankuploads/Embank5.jpg', 1, '4234234', '312', '45345', '343', '556', '343423', '3423', '5465', '34324', 'Karnataka', 'Manna Hally', 'Manna Hally', 'Manna Hally', 'canal'),
(54, 'Gulbarga ', 'Unnamed Road, Srinivas Saradgi, Karnataka 585102, ', '17.33341122229859', '76.95442619309073', NULL, '2020-07-11', NULL, NULL, 'Gulbarga  River', 'embankuploads/embank6.jpg', 1, '3324', '312', '34343', '5554', '556', '4324', '897', '343', '4234342', 'Karnataka', 'Srinivas Saradgi', 'Srinivas Saradgi', 'Srinivas Saradgi', 'pond'),
(55, 'Swarna ', '1, Srinetra Rd, Brahmagiri, Udupi, Karnataka 57610', '13.34133064748842', '74.7448009489501', NULL, '2020-07-16', NULL, NULL, 'Swarna  River', 'embankuploads/WhatsApp Image 2020-07-19 at 12.10.59 PM.jpeg', 1, '2323', '312', '23455', '343', '556', '343', '897', '3423', '45345', 'Karnataka', 'Brahmagiri', 'Brahmagiri', 'Brahmagiri', 'canal'),
(56, 'savitri ', 'Unnamed Road, Tavera, Chhattisgarh 491223, India', '20.96766964798966', '81.3365978239501', NULL, '2020-07-10', NULL, NULL, 'savitri  River', 'embankuploads/WhatsApp Image 2020-07-19 at 12.10.59 PM.jpeg', 1, '4234234', '563', '7686', '8768', '334', '343', '344', '5667', '4234342', 'Chhattisgarh', 'Tavera', 'Tavera', 'Tavera', 'embankment'),
(57, 'Murray ', 'Unnamed Road, Murra, Chhattisgarh 491340, India', '21.801402285866313', '81.82274284348135', NULL, '2020-07-19', NULL, NULL, 'Murray River ', 'embankuploads/embank.jpg', 1, '3324', '789', '45345', '323', '343', '345', '897', '5667', '45345', 'Chhattisgarh', 'Murra', 'Murra', 'Murra', 'pond'),
(58, 'Palkot', 'Unnamed Road, Palkot, Jharkhand 835229, India', '22.883587207750065', '84.6544689177001', NULL, '2020-07-10', NULL, NULL, 'Palkot', 'embankuploads/pic01.jpg', 1, '', '', '', '', '', '', '', '', '', 'Jharkhand', 'Palkot', 'Palkot', 'Palkot', 'pond'),
(59, 'Godavari River', 'Unnamed Road, Chaugulemala, Maharashtra 415539, In', '17.168160435402466', '74.1735118864501', NULL, '2020-07-09', NULL, NULL, 'Godavari River', 'embankuploads/embank1.jpg', 1, '424', '789', '34343', '5554', '89896', '343', '344', '3434', '45345', 'Maharashtra', 'Chaugulemala', 'Chaugulemala', 'Chaugulemala', ''),
(60, '', 'GJ SH 113, Fulvadi, Thangadh, Gujarat 363530, Indi', '22.579598684001482', '71.22475298628454', NULL, '2020-07-08', NULL, NULL, 'Ganges River', '', 0, 'Ganges River', '34234', '45345', '8768', '556', '343423', '45323', '5667', '45345', ' Gujarat363530', ' Thangadh', 'Surendranagar', 'Tarnetar', 'embankment'),
(61, 'Indrayani ', '7, Yerawada, Pune, Maharashtra 411006, India', '18.564064648471835', '73.88016270980482', NULL, '2020-07-08', NULL, NULL, 'Indrayani  River', 'embankuploads/Embank5.jpg', 0, '424', '334', '7686', '343', '343', '343', '3423', '34897', '6756', 'Maharashtra411006', ' Pune', 'Pune', 'Aalandi', 'embankment'),
(62, 'Powai', 'North Block 1, Krishna Nagar, Powai, Mumbai, Mahar', '19.130712880156636', '72.89246337995176', NULL, '2020-07-11', NULL, NULL, 'Powai River', 'embankuploads/Embank4.jpg', 1, '313', '312', '34343', '5554', '89896', '4324', '3423', '34', '86989', 'Maharashtra', ' Mumbai', 'Andheri', 'Andheri', 'embankment'),
(63, 'Godavari ', 'Maharashtra State Highway 30, Nandur Village, Nash', '20.00026791826573', '73.83949908003454', NULL, '2020-07-03', NULL, NULL, 'Godavari  River', 'embankuploads/embank6.jpg', 0, '424', '33', '23455', '8768', '556', '343423', '32434', '3423', '34324', 'Maharashtra', ' Nashik', 'Malegaon ', 'Kalwan', 'embankment'),
(64, ' Kaveri ', '26, Jhirga Toli, Gandhi Nagar, Ranchi, Jharkhand 8', '23.408887607129046', '85.3136486052001', NULL, '2020-07-09', NULL, NULL, 'Godavari  River', 'embankuploads/WhatsApp Image 2020-07-19 at 12.10.59 PM.jpeg', 1, '3324', '563', '34235', '323', '334', '345', '3423', '34', '4234342', 'Jharkhand', ' Ranchi', 'Jharkhand', 'Ranchi', 'embankment'),
(65, 'Mahananda ', 'Unnamed Road, Baikunthapur, West Bengal 721442, In', '21.786100643660102', '87.8185314177001', NULL, '2020-08-01', NULL, NULL, 'Mahananda  River', 'embankuploads/Embank5.jpg', 1, '3324', '789', '23455', '323', '334', '343', '897', '3423', '34324', 'West Bengal', ' Baikunthapur', 'Baikunthapur', 'Baikunthapur', 'embankment'),
(66, 'Chaliyar ', 'Unnamed Road, Chandul, Tripura 799115, India', '23.469366232301812', '91.3781017302001', NULL, '2020-07-25', NULL, NULL, 'Chaliyar  River', 'embankuploads/embank6.jpg', 1, '3324', '789', '7686', '323', '556', '343423', '344', '5667', '4234342', 'Tripura', ' Chandul', 'Chandul', 'Chandul', 'embankment'),
(67, 'Ganga', 'Unnamed Road, Dujra Diara, Patna, Bihar 800005, In', '25.624864817436986', '85.1543468473876', NULL, '2020-07-10', NULL, NULL, 'Ganga River', 'embankuploads/WhatsApp Image 2020-07-19 at 12.10.59 PM.jpeg', 1, '2323', '34234', '7686', '323', '343', '343', '3423', '5465', '6756', 'Bihar', ' Patna', 'Patna', 'Patna', 'embankment'),
(68, 'Gomti', '21/427, Sector 21, Indira Nagar, Lucknow, Uttar Pr', '26.88883099428166', '80.9850353239501', NULL, '2020-07-05', NULL, NULL, 'Gomti River', 'embankuploads/WhatsApp Image 2020-07-19 at 12.10.59 PM.jpeg', 1, '3324', '34234', '34343', '343', '334', '345', '32434', '5465', '4234342', 'Uttar Pradesh', ' Lucknow', 'Lucknow', 'Lucknow', 'embankment'),
(69, 'Ganges ', 'Ansari Rd, Dhaurera Mafi, Bareilly, Uttar Pradesh ', '28.3998218628557', '79.4689220427001', NULL, '2020-07-09', NULL, NULL, 'Ganges  River', 'embankuploads/embank2.jpg', 1, '3324', '789', '23455', '4534', '343', '343423', '32434', '5667', '6756', 'Uttar Pradesh', ' Bareilly', 'Bareilly', 'Bareilly', 'embankment'),
(70, 'Nainital ', 'Yangchen Lam, Thimphu, Bhutan', '27.46789619119225', '89.66148796066885', NULL, '2020-07-15', NULL, NULL, 'Amanishah ', 'embankuploads/embank1.jpg', 1, '424', '563', '7686', '5554', '556', '4324', '344', '34', '45345', 'Thimphu', 'Yangchen Lam', 'Yangchen Lam', 'YangchenLam', 'embankment'),
(71, 'Sabari ', 'Unnamed Road, Balau Sansan, Rajasthan 344026, Indi', '26.280295879414936', '72.42382587625346', NULL, '2020-07-10', NULL, NULL, 'Sabari River', 'embankuploads/embank2.jpg', 1, '424', '34234', '7686', '4534', '89896', '345', '897', '3423', '6756', 'Rajasthan', ' Balau Sansan', ' Balau Sansan', 'BalauSansan', 'embankment'),
(72, 'Ayad', 'Unnamed Road, Pratap Nagar, Udaipur, Rajasthan 313', '24.59315695617075', '73.7560314177001', NULL, '2020-07-17', NULL, NULL, 'Ayad River', 'embankuploads/Embank5.jpg', 1, '2323', '33', '23455', '8768', '343', '343', '344', '34', '86989', 'Rajasthan', ' Udaipur', 'Udaipur', 'Udaipur', 'embankment'),
(73, 'Lakhandei ', 'Bhokra Khiali Wala Road, Har Raipur Urf Bhokhri, P', '30.30910112266069', '74.9755138395751', NULL, '2020-07-25', NULL, NULL, 'Lakhandei  River', 'embankuploads/Embank4.jpg', 1, '2323', '312', '45345', '4534', '556', '345', '3423', '3334', '34324', 'Punjab', ' Har Raipur Urf Bhokhri', 'Bhokhri', 'Bhokhri', 'embankment'),
(74, 'Taapi Embankment', 'MH SH 186, Dambhurni, Maharashtra 425302, India', '21.183450199009908', '75.56642462859345', NULL, '2010-01-01', NULL, NULL, 'Taapi', 'embankuploads/WhatsApp Image 2020-07-28 at 9.30.10 PM (2).jpeg', 0, '', '', '', '', '', '', '', '', '', 'Maharashtra', 'Jalgaon', 'Yawal', 'Dambhurni', 'embankment'),
(75, 'Mohit', 'Adarsh Nagar, Ganesh Nagar, Zillapeth, Jalgaon, Ma', '20.992230623334883', '75.56039754371538', NULL, '2013-12-12', NULL, NULL, 'Girna', 'embankuploads/E2.jpeg', 0, '', '', '', '', '', '', '', '', '', 'Maharashtra', 'Jalgaon', 'jalgaon', 'Dmart', 'Dam'),
(76, 'bambhori', 'Mechanical Department, Bambhori Pr. Chandsar, Maha', '21.01485992', '75.5027744', NULL, '2011-12-12', NULL, NULL, 'Girna', 'embankuploads/aaaaaa.jpg', 0, '', '', '', '', '', '', '', '', '', 'maharashtra', 'jalgaon', 'jalgaon', 'jalgaon', 'canal'),
(77, 'Bambhori', 'Unnamed Road, Bambhori Pr. Chandsar, Maharashtra 4', '21.01429742', '75.506742', NULL, '2012-12-12', NULL, NULL, 'girna', 'embankuploads/aaaaaa.jpg', 0, '', '', '', '', '', '', '', '', '', 'maharashtra', 'jalgaon', 'jalgaon', 'jalgaon', 'embankment'),
(78, 'JOJRI', 'Rameshwar Colony, Mehron, Tambapura, Jalgaon, Maha', '20.98284962', '75.5682434', NULL, '2020-08-12', NULL, NULL, 'JOJRI', 'embankuploads/Embank.jpg', 1, '555', '3164', '321354', '535', '3543', '1.1', '45', '', '', 'Rajasthan', 'Jodhpur', 'Jodhpur', '	Akthali', 'embankment'),
(79, 'Bambhori', 'Mechanical Department, Bambhori Pr. Chandsar, Maha', '21.01485942', '75.5027762', NULL, '2020-08-01', NULL, NULL, 'Girna', 'embankuploads/IMG-20200802-WA0002.jpg', 1, '12', '18', '', '', '', '', '', '', '', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 'canal'),
(80, 'JOJRI embankment', 'Godavarish Sahita Sansad, Unit-3, Master Canteen, ', '20.270691531923596', '85.84090652451162', NULL, '2020-08-01', NULL, NULL, 'girna', 'embankuploads/embank-no-crack.jpg', 1, '', '', '', '', '', '', '', '', '', 'Odisha ', 'Bhubaneswar', 'Jodhpur', 'Baori', 'embankment');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `iid` int(10) NOT NULL,
  `complaintid` int(10) NOT NULL,
  `embankment_id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`iid`, `complaintid`, `embankment_id`, `image`, `city`) VALUES
(1, 20, 0, '1587473747-200.png', ''),
(2, 20, 0, 'uploads/8.jpg', 'pune'),
(3, 22, 0, 'uploads/8.jpg', 'pune'),
(4, 22, 0, 'uploads/8.jpg', 'pune'),
(5, 25, 0, '1587531067-20200405_211233.jpg', ''),
(6, 33, 0, 'uploads/7.jpg', 'pune'),
(7, 35, 0, '1587559701-283.png', ''),
(8, 36, 0, 'uploads/7.jpg', 'pune'),
(9, 0, 5, 'uploads/.962.png', ''),
(10, 0, 5, 'uploads/.962.png', ''),
(11, 0, 5, 'uploads/.laplogo.jpg', ''),
(12, 0, 5, 'uploads/.ac5c677804cdb30d38ce0d7ad4103e25.jpg', ''),
(13, 0, 5, '962.png', ''),
(14, 0, 5, 'uploads/962.png', ''),
(15, 0, 5, 'uploads/962.png', ''),
(16, 0, 21, 'uploads/thony-khim-next-ironman-textless.jpg', ''),
(17, 0, 21, 'uploads/526.png', ''),
(18, 0, 21, 'uploads/3.jpg', ''),
(19, 0, 4, 'uploads/7.jpg', 'pune'),
(20, 0, 4, 'uploads/8.jpg', 'Pune'),
(21, 0, 3, 'uploads/140x140.png', 'pune'),
(22, 104, 3, 'uploads/add_icon.jpg', 'pune'),
(23, 105, 13, 'uploads/140x140.png', 'Haridwar'),
(24, 106, 5, 'uploads/8.jpg', 'indore'),
(25, 106, 5, 'uploads/7.jpg', 'indore'),
(26, 106, 5, 'uploads/9.jpg', 'indore'),
(27, 107, 13, 'uploads/140x140.png', 'Haridwar'),
(28, 19, 5, 'uploads/7.jpg', 'indore'),
(29, 20, 5, 'uploads/396.png', 'indore'),
(30, 20, 5, 'uploads/109.png', 'indore'),
(31, 21, 23, 'uploads/5.jpg', ''),
(32, 22, 13, 'uploads/Final Event Designs - Copy (3).jpg', 'Haridwar'),
(33, 22, 13, 'uploads/IMG_20200711_141549.jpg', 'Haridwar'),
(34, 23, 3, 'cmuploads/aerial-view-of-seashore-near-large-grey-rocks-853199.jpg', 'delhi'),
(35, 24, 17, 'uploads/logo.png', 'Chennai'),
(36, 27, 11, 'uploads/3.jpg', 'Nashik'),
(37, 109, 12, 'uploads/add_icon.jpg', 'Pune'),
(38, 139, 75, 'uploads/878.jpg', 'aa'),
(39, 139, 75, 'uploads/622635a580ee6a12a31ba2fa2d4259ed.jpg', 'aa'),
(40, 140, 75, 'uploads/1415957686531918024097149240903581.jpg', 'a'),
(41, 140, 75, 'uploads/aaaaaa.jpg', 'a'),
(42, 140, 75, 'uploads/aaaaaa.jpg', 'a'),
(43, 141, 69, 'uploads/141exif.jpg', ''),
(44, 142, 44, 'uploads/142exif.jpg', 'a'),
(45, 143, 59, 'uploads/14313515961008352998817321039896723691.jpg', 'a'),
(46, 145, 75, 'uploads/14515961652206766011115793780611197.jpg', 'a'),
(47, 147, 77, 'uploads/147159624881888653365702417524116.jpg', 'a'),
(48, 148, 78, 'uploads/148worst.jpeg', 'a'),
(49, 148, 78, 'uploads/148source.JPG', 'a'),
(50, 148, 78, 'uploads/148good.jpeg', 'a'),
(51, 149, 41, 'uploads/149IMG_20200716_180815.jpg', 'a'),
(52, 149, 41, 'uploads/149IMG_20200716_180624.jpg', 'a'),
(53, 149, 41, 'uploads/149IMG_20200716_180501.jpg', 'a'),
(54, 149, 41, 'uploads/149worst.jpeg', 'a'),
(55, 150, 78, 'uploads/150worst.jpeg', 'a'),
(56, 151, 78, 'uploads/151WhatsApp Image 2020-07-31 at 4.02.20 PM.jpeg', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `local_authority`
--

CREATE TABLE `local_authority` (
  `local_authority_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `dat_of_birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `scope` varchar(50) NOT NULL,
  `scopename` varchar(100) NOT NULL,
  `state` varchar(60) NOT NULL,
  `district` varchar(60) NOT NULL,
  `taluka` varchar(60) NOT NULL,
  `village` varchar(60) NOT NULL,
  `status` int(10) NOT NULL,
  `active` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `local_authority`
--

INSERT INTO `local_authority` (`local_authority_id`, `f_name`, `m_name`, `l_name`, `dat_of_birth`, `email`, `gender`, `mobile`, `pwd`, `scope`, `scopename`, `state`, `district`, `taluka`, `village`, `status`, `active`) VALUES
(1, 'overlord', 'arc', 'actual', '2016-06-07', 'mohitchaudhari@gmail.com', 'male', '83', 'pass123', '', '', '', '', '', '', 0, 0),
(6, 'sanjay', 'Mukesh', 'kingavkrr', '2019-10-09', 'mohit111@333gmail.com', 'male', '2147483647', 'pass123', '', '', '', '', '', '', 0, 0),
(8, 'ytgjh', 'erytfj', 'drthfty', '2020-07-21', 'drtyhcg@y6tjh.yuhgfd', 'Male', '2147483647', '123', '', '', '', '', '', '', 0, 0),
(9, 'bf', 'dbfd', 'awdsa', '0004-08-26', 'wds@efdc.wefsd', 'Male', '0000000000', 'f1b708bba17f1ce948dc979f4d7092bc', '', '', '', '', '', '', 0, 0),
(14, 'ytgjh', 'erytfj', 'drthfty', '2020-07-21', 'drtyhcg@y6tjh.yuhgfd', 'Male', '2147483647', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', 0, 0),
(15, 'AAA', 'AAA', 'AAA', '2020-07-15', 'AAA@AAA.AAA', 'Male', '2147483647', 'adbc91a43e988a3b5b745b8529a90b61', '', '', '', '', '', '', 0, 0),
(16, 'aa', 'aa', 'aa', '2020-07-24', 'aa@aa.aa', 'Male', '9999999999', 'f1b708bba17f1ce948dc979f4d7092bc', '', '', '', '', '', '', 0, 0),
(17, 'fd', 'sdg', 'sdfg', '1999-06-04', 'df@rdf.erf', 'Male', '9999999999', '698d51a19d8a121ce581499d7b701668', '', '', '', '', '', '', 0, 0),
(18, 'latest', 'latest', 'latest', '1989-12-27', 'aa@hh.a', 'Male', '9999999999', '47bce5c74f589f4867dbd57e9ca9f808', 'district', 'Jalgaon', '', '', '', '', 0, 0),
(19, 'another', 'atest', 'test', '1988-12-28', 'aa@aa.a', 'Male', '2222222222', '47bce5c74f589f4867dbd57e9ca9f808', 'district', 'Aurangabad', '', '', '', '', 0, 0),
(20, 'Vinay', 'Suresh', 'Raut', '2000-07-11', 'raut123@gmail.com', 'Male', '7878789999', '81dc9bdb52d04dc20036dbd8313ed055', 'village', 'Savda', 'maharashtra', 'jalgaon', '', '', 0, 0),
(21, 'Neha', 'Chimanrav', 'pandey', '1999-11-18', 'sandippatilsirssbt@gmail.com', 'Female', '8087531130', '81dc9bdb52d04dc20036dbd8313ed055', 'taluka', '', '', '', '', '', 0, 0),
(22, 'Vikky', 'Raut', 'baviskar', '1994-07-14', 'Hdh@urj.id', 'Male', '9834901576', '202cb962ac59075b964b07152d234b70', 'taluka', 'Bhusawal', '', '', '', '', 1, 1),
(23, 'Ramesh', 'Suresh', 'Rajput', '1995-06-07', 'dipchaudhari2015@gmail.com', 'Male', '9834901576', '01cfcd4f6b8770febfb40cb906715822', 'state', 'maharashtra', 'maharashtra', '', '', '', 1, 0),
(24, 'Mohit', 'Yuvraj ', 'Chaudhari', '5330-09-09', 'chaudhari4351@gmail.com', 'Male', '8308549742', '6f1ed40a92884a152f1d2f64ce9c5e6f', 'state', 'Idaho', '', '', '', '', 0, 0),
(27, 'bihar', 'bihar', 'bihar', '1989-01-01', 'overlordactual007@gmail.com', 'Male', '5555555555', '202cb962ac59075b964b07152d234b70', 'state', 'Bihar', 'Bihar', 'Pashchim Champaran', 'Bihar', 'Bihar', 1, 1),
(28, 'ninad', 'Suresh', 'patil', '1997-06-04', 'sandippatilsirssbt@gmail.com', 'Male', '9999999999', 'cc57d0d5784f2106507c378da99bb9f1', 'district', 'jalgaon', 'maharashtra', '', '', '', 0, 0),
(29, 'ashis', 'ashis', 'ashis', '1989-04-14', 'parthpingalkar@gmail.com', 'Male', '6666666666', '202cb962ac59075b964b07152d234b70', 'state', 'Telangana', 'Telangana', '', '', '', 1, 1),
(30, 'Ramesh', 'Sitaram', 'Naik', '1998-01-22', 'ramesh@gmail.com', 'Male', '7777777777', 'dc965d80d204a7b56184fb508919eb4a', 'state', '', '', '', '', '', 0, 0),
(31, 'Ramesh ', 'Sitaram', 'Chudhari', '1996-07-31', 'sagargpatil1998@gmail.com', 'Male', '7777777777', '202cb962ac59075b964b07152d234b70', 'state', 'Maharashtra', '', '', '', '', 1, 1),
(32, 'Yogesh', 'Kaluram', 'Prajapat', '1999-06-16', 'sagargpatil1998@gmail.com', 'Male', '7777777777', 'c30db67b2b2c9550e6be4229811259b1', 'state', 'rajasthan', 'rajasthan', '', '', '', 0, 0),
(33, 'Mohit', 'Yuvraj ', 'Chaudhari', '1999-09-09', 'chaudhari4351@gmail.com', 'Male', '8308549742', 'c672a2e9e4d6d5b5e69a94c2e76307ed', 'district', 'Jalgaon', '', '', '', '', 0, 1),
(34, 'Ram ', 'Kavi', 'Patil ', '1973-07-20', 'Ram@gmail.com', 'Male', '7888888888', '5575de80f6e2fc7388b0950fa3d7601c', 'district', 'Jalgaon', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 0, 1),
(35, 'Ram ', 'Kavi', 'Patil ', '1973-07-20', 'sagargpatil1998@gmal.com ', 'Male', '7888888888', '3e1e65f0b528ec813f116a88a738e87b', 'district', 'Nashik', 'Maharashtra', 'Nashik', 'Malegaon', 'Malegaon', 0, 0),
(36, 'Sakaram', 'Tukaram', 'Mataram', '1992-07-30', 'sagargpatil1998@gmal.com ', 'Male', '7444444444', 'e2fad44041f6bcd69a3f66d27f21abc2', 'district', 'Jalgaon', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 0, 0),
(37, 'Mohit', 'Yuvraj', 'Chaudhari', '1999-09-09', 'chaudhari8568@gmail.com', 'Male', '9373876524', '651577b537f14cc4945d4f7cdb019314', 'village', 'Dambhurni', '', '', '', '', 0, 1),
(38, 'Mohit', 'Yuvraj', 'Chaudhari', '1999-07-21', 'chaudhari8568@gmail.com', 'Male', '9373876524', '69d4038f256262b43b01f31a582ebae5', 'village', 'Dambhurni', 'Maharashtra', 'Jalgaon', 'Dambhurni', 'Dambhurni', 0, 1),
(39, 'Sagar', 'Gorakh', 'Patil', '1998-08-23', 'sagargpatil1998@gmail.com', 'Male', '7777777777', '8e8116976572fcfb29a6a78f4cfa17b4', 'state', 'Rajasthan', 'Rajasthan', '', '', '', 0, 1),
(40, 'ooo', 'ooo', 'ooo', '1982-12-12', 'overlordactual007@gmail.com', 'Male', '3333366666', 'caf1a3dfb505ffed0d024130f58c5cfa', 'taluka', 'Pachora', 'Maharashtra', 'Jalgaon', 'Pachora', 'Pachora', 1, 1),
(41, 'dabake', 'dabake', 'dabake', '1985-12-31', 'chaudhari8568@gmail.com', 'Male', '9888888888', '26e9262dceb7a2c4e1dfc417b5234370', 'village', 'Dambhurni', 'Maharashtra', 'Jalgaon', 'Dambhurni', 'Dambhurni', 1, 1),
(42, '', '', '', '1981-12-12', '', 'Male', '', '72307521f1f2ab5ef2303704dda746b5', '', '', '', '', '', '', 0, 1),
(43, '', '', '', '1981-12-12', '', 'Male', '', '679534c8ce752a047f5d521007970ef2', '', '', '', '', '', '', 0, 1),
(44, 'aa', 'aa', 'aa', '1988-12-12', 'chaudhari8568@gmail.com', 'Male', '9888888888', '69fe59d860561e185bc460378babec82', 'district', 'Jalgaon', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 0, 1),
(45, 'ninad', 'Vinay', 'Raut', '1999-07-30', 'Danani@gmail.com', 'Male', '1111111111', 'f6952197e4e6fd8da59c58a2cd824482', 'taluka', 'Bhusawal', '', '', '', '', 0, 1),
(46, 'dipesh', 'dipesh', 'dipesh', '1989-02-12', 'sspatiljalgaon@gmail.com', 'Male', '9420347893', 'e10adc3949ba59abbe56e057f20f883e', 'district', 'Jalgaon', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 1, 1),
(47, 'Sameer', 'M', 'Chakravarti', '1983-12-12', 'overlordactual007@gmail.com', 'Male', '9876543210', 'e388c1c5df4933fa01f6da9f92595589', 'district', '', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 1, 1),
(50, 'a', 'a', 'a', '1998-12-12', 'a@a.a', 'Male', '1231231231', '37b7dd139ae7e245d7f66a28dbeb8fc2', 'taluka', 'Pachora', 'Maharashtra', 'Jalgaon', 'Pachora', 'Pachora', 0, 1),
(51, 'Akash', 'Gorakh', 'Patil', '1998-07-15', 'sagargpatil1998@gmail.com', 'Male', '9999999999', 'c8a5bba0007142ab3e25c41505ba6b3f', 'state', 'Rajasthan', 'Rajasthan', '', '', '', 0, 1),
(52, 'Yogesh', 'Chnaram', 'Prajapat', '1996-07-13', 'sagargpatil1998@gmail.com', 'Male', '8888888888', '878eda85dbebe7fc10c16b6cb15789ab', 'state', 'Gujarat', 'Gujarat', '', '', '', 0, 0),
(57, 'aa', 'aa', 'aa', '1992-02-12', 'qqq@qq.q', 'Male', '3213213210', '01cfcd4f6b8770febfb40cb906715822', 'state', 'Rajasthan', 'Rajasthan', '', '', '', 1, 1),
(59, 'aa', 'aaaa', '', '1996-12-12', 'sandippatilsirssbt@gmail.com', 'Male', '3210000000', 'ed982a4d67cd8764c075639b2fa1881d', 'district', 'Buldhana', 'Maharashtra', 'Buldhana', 'Buldana', 'Buldana', 0, 1),
(60, 'aaa', 'aaaa', 'aaa', '1989-12-12', 'sandippatilsirssbt@gmail.com', 'Male', '852085200', '4559b36640085ebaae946aebc679e700', 'village', 'Soygaon', 'Maharashtra', 'Jalgaon', 'Soygaon', 'Soygaon', 0, 1),
(62, 'Gopal', 'Krishna', 'Bhatt', '1994-06-17', 'sagargpatil1998@gmail.com', 'Male', '5555544444', '202cb962ac59075b964b07152d234b70', 'state', 'Rajasthan', 'Rajasthan', '', '', '', 1, 1),
(63, 'Gopichand', 'Nidkant', 'Patil', '1996-08-22', 'sagargpatil1998@gmail.com', 'Male', '5522887799', '202cb962ac59075b964b07152d234b70', 'district', 'Jodhpur', 'Rajasthan', 'Jodhpur', 'Jodhpur', 'Jodhpur', 1, 1),
(64, 'Ram', 'Sadashiv', 'kejriwal', '1999-05-01', 'sagargpatil1998@gmail.com', 'Male', '1122334455', '202cb962ac59075b964b07152d234b70', 'district', 'Udaipur', 'Rajasthan', 'Udaipur', 'Udaipur', 'Udaipur', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `latitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `location_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `latitude`, `longitude`, `location_name`, `location_info`) VALUES
(1, '24.794500', '73.055000', 'Pindwara', 'Pindwara, Rajasthan, India'),
(2, '21.250000', '81.629997', 'Raipur', 'Chhattisgarh, India'),
(3, '16.166700', '74.833298', 'Gokak', 'Gokak, Karnataka, India'),
(4, '26.850000', '80.949997', 'Lucknow', 'Lucknow, Uttar Pradesh, India'),
(5, '28.610001', '77.230003', 'Delhi', 'Delhi, the National Capital Territory of Delhi, India'),
(6, '19.076090', '72.877426', 'Mumbai', 'Mumbai, Maharashtra, The film city of India'),
(7, '14.167040', '75.040298', 'Sagar', 'Sagar, Karnataka, India'),
(8, '26.540457', '88.719391', 'Jalpaiguri', 'Jalpaiguri, West Bengal, India'),
(9, '24.633568', '87.849251', 'Pakur', 'Pakur, Jharkhand, India'),
(10, '22.728392', '71.637077', 'Surendranagar', 'Surendranagar, Gujarat, India'),
(11, '9.383452', '76.574059', 'Thiruvalla', 'Thiruvalla, Kerala, India');

-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

CREATE TABLE `parameter` (
  `embankment_id` int(11) NOT NULL,
  `diameter` varchar(50) NOT NULL,
  `thickness` varchar(50) NOT NULL,
  `density` varchar(50) NOT NULL,
  `young's_modulus` varchar(50) NOT NULL,
  `pile_spacing` varchar(50) NOT NULL,
  `cross-sectional_area_of_pile_cap` varchar(50) NOT NULL,
  `poisson's_ratio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registercomplaint`
--

CREATE TABLE `registercomplaint` (
  `compl_id` int(60) NOT NULL,
  `embankment_id` int(40) NOT NULL,
  `city` varchar(50) NOT NULL,
  `embankment_name` text NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `problem_desc` varchar(500) NOT NULL,
  `compl_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stats` varchar(11) NOT NULL,
  `mac` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registercomplaint`
--

INSERT INTO `registercomplaint` (`compl_id`, `embankment_id`, `city`, `embankment_name`, `name`, `email`, `mobile_no`, `problem`, `problem_desc`, `compl_date`, `stats`, `mac`, `lat`, `lon`) VALUES
(1, 1, 'pune', 'koyana dam', 'Pravin Sonawane', 'dipchaudhari2015@gmail.com', '8888888888', 'corporate', '', '2020-07-06 22:14:09', 'dued', '', '0', '0'),
(2, 1, 'jalgaon', 'Hatnur Dam', 'Mohit Mahajan', 'mohit111@333gmail.com', '6756875456', 'Geometric Distortion', 'Very Extream Condition', '2020-07-06 22:14:09', 'dued', '', '0', '0'),
(3, 1, 'pune', 'Hatnur Dam', 'Sanjay Raut', 'mohit111@333gmail.com', '6756875456', 'Geometric Distortion', 'Very Extream Condition', '2020-07-06 22:14:09', 'dued', '', '0', '0'),
(4, 1, 'pune', 'Hatnur Dam', 'Sanjay Raut', 'mohit111@333gmail.com', '6756875456', 'Geometric Distortion', 'Very Extream Condition', '2020-07-06 22:14:09', 'dued', '', '0', '0'),
(5, 1, 'pune', 'Hatnur Dam', 'Subhash Desai', 'chaudhari8568@gmail.com', '8889999994', 'Vegetative Growth', 'sefsac adc', '2020-07-24 02:45:14', 'active', '', '0', '0'),
(6, 4, 'jalgaon', 'koyana dam', 'Sanjay Raut', 'mohit111@333gmail.com', '9999999999', 'Vegetative Growth', 'reedsdf', '2020-03-06 22:30:45', 'dued', '', '0', '0'),
(7, 2, 'pune', 'Jaykwadi Dam', 'Girish Patnaik', 'chaudhari8568@gmail.com', '7676767676', 'Vegetative Growth', 'Very Extream Condition', '2020-07-06 22:32:25', 'dued', '', '0', '0'),
(8, 5, 'jalgaon', '', 'AA', 'assa@ewf.fsd', '8989898989', 'Others', 'ehgj,', '2020-07-13 10:24:45', 'dued', '', '0', '0'),
(9, 2, 'jalgaon', ' Gadha', 'rdgfthj', 'efdsc@refd.f', '1111111111', 'Cracks', 'dc', '2020-07-13 16:59:15', 'dued', '', '0', '0'),
(10, 1, 'pune', 'delhi', 'ergthyju', 'erthyj@fgf.yhgf', '2222222222', 'Vegetative Growth', 'dsx', '2020-07-13 17:01:03', 'dued', '', '0', '0'),
(11, 5, '', 'Nashik', 'ewds&quot;&quot;', 'efd@efd.ytgf', '1111111111', 'Geometric Distortion', 'dxs&quot;&quot;\';', '2020-07-14 04:10:14', 'dued', '', '0', '0'),
(12, 3, '', 'delhi', 'werk', 'drgfth@gthy.red', '2222222222', 'Geometric Distortion', 'wdec', '2020-07-14 11:27:05', 'dued', '', '0', '0'),
(13, 0, 'Dehradun', 'Dehradun', 's', 'arclord@over.com', '9999999999', 'Geometric Distortion', '', '2020-07-17 17:49:58', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(14, 0, 'Haridwar', 'Haridwar', 's', 'd@d.tf', '9999999999', 'Vegetative Growth', '', '2020-07-18 00:35:29', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(15, 13, 'Haridwar', 'Haridwar', 'aa', 'aa@aa.f', '9999999999', 'Vegetative Growth', '', '2020-07-18 00:37:53', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(16, 19, '', '', 'a', 'aa@ee.s', '9999999999', 'Vegetative Growth', '', '2020-07-18 00:50:09', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(17, 12, 'Pune', 'Pune', 'aa', 'aa@ff.yg', '9999999999', 'Vegetative Growth', '', '2020-07-18 01:19:08', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(18, 3, 'delhi', 'delhi', 'aa', 'ss@dd.tg', '9999999999', 'Vegetative Growth', '', '2020-07-18 01:24:15', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(19, 5, 'indore', 'indore', 'aa', 'aa@aa.a', '9999999999', 'Vegetative Growth', '', '2020-07-18 01:25:08', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(20, 5, 'indore', 'indore', 'aa', 'aa@hhh.g', '8888888888', 'Vegetative Growth', '', '2020-07-18 01:27:44', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(21, 23, 'pune', '', 'aa', 'aa@aa.e', '1111111111', 'Vegetative Growth', '', '2020-07-18 01:30:19', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(22, 13, 'pune', 'Haridwar', 'utu fesrd', 'bjy@orjoiel', '2222222256', 'Vegetative Growth', '', '2020-07-18 01:33:51', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(23, 3, 'delhi', 'delhi', 'utu fesrd', 'bjy@orjoiel', '2222222256', 'Vegetative Growth', '', '2020-07-18 01:39:20', 'active', '00-FF-CF-D0-58-ED', '16', '74'),
(24, 17, 'Chennai', 'Chennai', 'aa', 'aa@s.g', '9999999999', 'Vegetative Growth', '', '2020-07-18 01:42:17', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(25, 19, '', '', 'aaa', 'aa@aa.a', '9999999999', 'Vegetative Growth', '', '2020-07-18 01:47:06', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(26, 12, 'Pune', 'Pune', 'aa', 'a@d.a', '9999999999', 'Vegetative Growth', '', '2020-07-18 01:48:02', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(27, 11, 'Nashik', 'Nashik', 'a', 'a@a.rdf', '8555555555', 'Vegetative Growth', '', '2020-07-18 01:56:22', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(28, 12, 'Pune', 'Pune', 'aa', 'a@a.a', '9955662222', 'Vegetative Growth', '', '2020-07-18 02:00:35', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(29, 5, 'pune', 'indore', 'a', 'a@a.a', '4444444444', 'Vegetative Growth', '', '2020-07-18 02:03:21', 'complete', '00-FF-CF-D0-58-ED', '0', '0'),
(30, 13, 'Haridwar', 'Haridwar', 'a', 'aa@a.a', '7777777777', 'Vegetative Growth', '', '2020-07-18 02:18:31', 'active', '00-FF-CF-D0-58-ED', '0', '0'),
(31, 5, 'pune', 'indore', 'a', 'aa@f.t', '', 'Vegetative Growth', '', '2020-07-18 02:20:18', 'active', '00-FF-CF-D0-58-ED', '1.3142555999999999', '103.7093099'),
(32, 3, 'delhi', 'delhi', 'a', 'aa@ss.e', '9999999999', 'Vegetative Growth', '', '2020-07-18 02:24:16', 'active', '00-FF-CF-D0-58-ED', '19.7514798', '75.7138884'),
(33, 3, 'delhi', 'delhi', 'a', 'a@a.a', '1122212121', 'Vegetative Growth', '', '2020-07-18 12:58:22', 'active', '00-FF-CF-D0-58-ED', '19.7514798', '75.7138884');

-- --------------------------------------------------------

--
-- Table structure for table `remove_embankment`
--

CREATE TABLE `remove_embankment` (
  `embankment_id` int(11) NOT NULL,
  `reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `remove_embankment`
--

INSERT INTO `remove_embankment` (`embankment_id`, `reason`) VALUES
(1, 'No Problem'),
(3, 'NoProblem'),
(4, 'gbbgfd'),
(5, 'No Problem'),
(10, 'No Problem'),
(11, 'No Problem'),
(13, 'No Problem'),
(14, 'dsad'),
(17, 'y6t'),
(19, 'No Problem\r\n'),
(21, 'there was an idea'),
(22, 'No Problem'),
(23, 'No Problem'),
(24, 'No Problem'),
(25, 'No Problem'),
(26, 'No Problem'),
(27, 'No Problem'),
(28, 'very '),
(29, 'No Problem'),
(30, 'No Problem'),
(31, 'gvjvj'),
(60, 're'),
(61, 'no'),
(63, 'Reason\r\n'),
(74, 'Remove'),
(75, 'Reason\r\n'),
(76, 'ttyd     '),
(77, 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `request_embankment`
--

CREATE TABLE `request_embankment` (
  `req_id` int(10) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_mname` varchar(100) NOT NULL,
  `user_lname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `river` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_embankment`
--

INSERT INTO `request_embankment` (`req_id`, `user_fname`, `user_mname`, `user_lname`, `user_email`, `mobile_no`, `longitude`, `latitude`, `address`, `river`) VALUES
(1, 'sagar', 'g', 'patil', 'sadas@gmxfu.com', '1334567786', '2143', '343455', 'adsvdfhnmkh', 'sddgdf'),
(2, 'sagar', 'g', 'patil', 'sadas@gmxfu.com', '1334567786', '2143', '343455', 'adsvdfhnmkh', 'sddgdf'),
(3, 'sagar', 'g', 'patil', 'sadas@gmxfu.com', '1334567786', '2143', '343455', 'adsvdfhnmkh', 'sddgdf'),
(4, 'sagar', 'g', 'patil', 'sadas@gmxfu.com', '1334567786', '2143', '343455', 'adsvdfhnmkh', 'sddgdf'),
(5, 'sagar', 'gorakh', 'patil', 'sadadfgfdgfds@gmxfu.com', '1334567786', '2143', '343455', 'adsvdfhnmkh', 'sddgdf'),
(6, 'sagar', 'gorakh', 'patil', 'sadadfgfdgfds@gmxfu.com', '1334567786', '2143', '343455', 'adsvdfhnmkh', 'sddgdf'),
(7, 'sagar', 'gorakh', 'gujjar', 'sadas@gmxfu.com', '1334567786', '2143', '343455', 'adsvdfhnmkh', 'sddgdf'),
(8, 'sagar', 'gorakh', 'gujjar', 'sadas@gmxfu.com', '1334567786', '2143', '343455', 'adsvdfhnmkh', 'sddgdf');

-- --------------------------------------------------------

--
-- Table structure for table `req_image`
--

CREATE TABLE `req_image` (
  `image_id` int(11) NOT NULL,
  `req_id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `complaintid` int(10) NOT NULL,
  `embankment_id` int(10) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `vegetative` int(10) NOT NULL,
  `crack` int(10) NOT NULL,
  `geometry` int(10) NOT NULL,
  `suggetions` varchar(500) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`complaintid`, `embankment_id`, `city`, `vegetative`, `crack`, `geometry`, `suggetions`, `name`, `email`, `mobile`, `time`) VALUES
(1, 21, ' Gadha', 3, 4, 2, 'edxctfvuyk tv      ygkg ygky ,', 'mlmlml', 'test@test.com', '445588885', '2020-07-30 08:50:54'),
(2, 22, ' Jalgaon', 4, 7, 2, 'hguiorhtgiurhiguo fghiorhdouifh houfg goifgoib ofghgouif goui fhlbihflgbh iofu ', 'mlmlml', 'overlord007@cod.enc', '1111111111', '2020-07-30 08:50:54'),
(3, 22, ' Jalgaon', 3, 4, 4, 'wearter eet eezr g eay5', 'mlmlml', 'overlord007@cod.enc', '1122336655', '2020-07-30 08:50:54'),
(4, 22, ' Jalgaon', 3, 4, 4, 'wearter eet eezr g eay5', 'mlmlml', 'overlord007@cod.enc', '1122336655', '2020-07-30 08:50:54'),
(5, 21, ' Gadha', 3, 6, 3, 'af orfk rtthserrgii serjgijd fsjdgio', 'mlmlml', 'overlord007@cod.enc', '2626559596', '2020-07-30 08:50:54'),
(6, 21, ' Gadha', 3, 6, 3, 'ajef09ajr9fu 9e9serru g9s 9sureg9 dfg', 'mlmlml', 'overlord007@cod.enc', '1266365478', '2020-07-30 08:50:54'),
(7, 21, ' Gadha', 3, 6, 3, ' wrtert sts e5rtr sert d tr ', 'mlmlml', 'overlord007@cod.enc', '2266998852', '2020-07-30 08:50:54'),
(8, 5, 'indore', 3, 2, 5, 'ghfuisersgu ggshu dgshui dggsudiof gsdufgn sdf', 'patt', 'overlord007@cod.enc', '1111111111', '2020-07-30 08:50:54'),
(9, 5, 'indore', 3, 3, 4, 'wrs tstytyty', 'adsd', 'overlord007@cod.enc', '445566996', '2020-07-30 08:50:54'),
(10, 5, 'indore', 1, 1, 1, 'wrs tstytyty', 'adsd', 'overlord007@cod.enc', '445566996', '2020-07-30 08:50:54'),
(11, 19, ' Lucknow', 5, 3, 7, 'aertsre e rtysetyst ttyrstysrtys ysrtyh d srt', 'mlmlml', 'overlord007@cod.enc', '1234568787', '2020-07-30 08:50:54'),
(12, 19, ' Lucknow', 5, 3, 7, 'aertsre e rtysetyst ttyrstysrtys ysrtyh d srt', 'mlmlml', 'overlord007@cod.enc', '1234568787', '2020-07-30 08:50:54'),
(13, 19, ' Lucknow', 5, 3, 7, 'aertsre e rtysetyst ttyrstysrtys ysrtyh d srt', 'mlmlml', 'overlord007@cod.enc', '1234568787', '2020-07-30 08:50:54'),
(14, 19, ' Lucknow', 2, 4, 2, 'iopiop', 'mlmlml', 'overlord007@cod.enc', '5353', '2020-07-30 08:50:54'),
(15, 19, ' Lucknow', 3, 3, 3, 'asds', 'mlmlml', 'overlord007@cod.enc', '12', '2020-07-30 08:50:54'),
(16, 19, ' Lucknow', 2, 3, 3, 'guy tg yg ligybl uyb yhj', 'mlmlml', 'overlord007@cod.enc', '45', '2020-07-30 08:50:54'),
(17, 19, ' Lucknow', 6, 6, 6, 'ssfdfdsf', 'patt', 'overlord007@cod.enc', '5', '2020-07-30 08:50:54'),
(18, 19, ' Lucknow', 5, 5, 5, 'ujyhtfg', 'mlmlml', 'overlord007@cod.enc', '54', '2020-07-30 08:50:54'),
(19, 19, ' Lucknow', 4, 4, 4, 'ghf jy jygjg ', 'mlmlml', 'archlight@cod.enc', '742', '2020-07-30 08:50:54'),
(20, 19, ' Lucknow', 3, 4, 5, '6yryt', 'grtd', 'overlord007@cod.enc', '858', '2020-07-30 08:50:54'),
(21, 21, ' Gadha', 3, 6, 5, 'Hehehneb', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '7788990099', '2020-07-30 08:50:54'),
(22, 21, ' Gadha', 3, 5, 5, 'sersdhgs', 'mlmlml', 'overlord007@cod.enc', '1122334455', '2020-07-30 08:50:54'),
(23, 21, ' Gadha', 3, 6, 5, 'Hehehneb', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '7788990099', '2020-07-30 08:50:54'),
(24, 21, ' Gadha', 3, 6, 6, 'Nejdnnd', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-30 08:50:54'),
(25, 21, ' Gadha', 6, 4, 6, 'Cyvvjvuv', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-30 08:50:54'),
(26, 21, ' Gadha', 5, 5, 6, 'Usunsb ushsb s s s s s', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-30 08:50:54'),
(27, 21, ' Gadha', 3, 6, 4, 'Hdhdhd udhdhd yrhdbdbd', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-30 08:50:54'),
(28, 21, ' Gadha', 3, 6, 4, 'Hdhdhd udhdhd yrhdbdbd', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-30 08:50:54'),
(29, 21, ' Gadha', 3, 6, 4, 'Hdhdhd udhdhd yrhdbdbd', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-30 08:50:54'),
(30, 21, ' Gadha', 3, 6, 4, 'Hdhdhd udhdhd yrhdbdbd', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-30 08:50:54'),
(31, 21, ' Gadha', 3, 5, 6, 'Hehehe dhdjdnd hdjdbdn', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-30 08:50:54'),
(32, 21, ' Gadha', 3, 5, 3, '', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-30 08:50:54'),
(33, 21, ' Gadha', 7, 7, 5, '', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-30 08:50:54'),
(34, 19, ' Lucknow', 3, 4, 5, '', 'patt', 'overlord007@cod.enc', '8877665544', '2020-07-30 08:50:54'),
(35, 19, ' Lucknow', 3, 1, 1, '', 'ageararg', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(36, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(37, 19, ' Lucknow', 1, 1, 1, '', 'patt', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(38, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(39, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(40, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(41, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(42, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(43, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(44, 19, ' Lucknow', 1, 1, 1, '', 'patt', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(45, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(46, 19, ' Lucknow', 4, 3, 4, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(47, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(48, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(49, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(50, 19, ' Lucknow', 3, 3, 6, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(51, 19, ' Lucknow', 1, 1, 1, '', 'patt', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(52, 10, 'Vijayvada', 3, 4, 4, '', 'patt', 'test@test.com', '1234567890', '2020-07-30 08:50:54'),
(53, 10, 'Vijayvada', 1, 4, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(54, 10, 'Vijayvada', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(55, 19, ' Lucknow', 3, 7, 8, '', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-30 08:50:54'),
(56, 21, ' Gadha', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(57, 13, 'Haridwar', 1, 1, 1, '', 'ageararg', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(58, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'test@test.com', '1234567890', '2020-07-30 08:50:54'),
(59, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'test@test.com', '1234567890', '2020-07-30 08:50:54'),
(60, 3, 'delhi', 1, 1, 1, '', 'patt', 'test@test.com', '1234567890', '2020-07-30 08:50:54'),
(61, 21, ' Gadha', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(62, 3, 'delhi', 1, 1, 1, '', 'patt', 'test@test.com', '1234567890', '2020-07-30 08:50:54'),
(63, 21, ' Gadha', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(64, 21, ' Gadha', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(65, 3, 'delhi', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(66, 3, 'delhi', 1, 1, 1, '', 'patt', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(67, 3, 'delhi', 1, 1, 1, '', 'patt', 'test@test.com', '1234567890', '2020-07-30 08:50:54'),
(68, 3, 'delhi', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(69, 3, 'delhi', 1, 1, 1, '', 'mlmlml', 'test@test.com', '', '2020-07-30 08:50:54'),
(70, 3, 'delhi', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(71, 3, 'delhi', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(72, 3, 'delhi', 2, 4, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(73, 3, 'delhi', 1, 1, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(74, 19, ' Lucknow', 1, 1, 1, '', 'mlmlml', 'archlight@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(75, 19, ' Lucknow', 1, 1, 1, '', 'Hdj', 'js@jd.ux', '1234567890', '2020-07-30 08:50:54'),
(76, 21, ' Gadha', 5, 3, 1, '', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(77, 21, ' Gadha', 4, 5, 3, 'tt6ugy7,m yir6 ifhu yoy8ofyuk vfyu', 'mlmlml', 'overlord007@cod.enc', '1234567890', '2020-07-30 08:50:54'),
(78, 13, 'Haridwar', 7, 6, 9, '', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-30 08:50:54'),
(79, 3, 'delhi', 3, 6, 4, '', 'patt', 'test@test.com', '1234567890', '2020-07-30 08:50:54'),
(80, 24, 'indorejaypur', 5, 6, 2, 'rdgft', 'hnm', 'rtyu@jkbk.u', '1111111111', '2020-07-30 08:50:54'),
(81, 13, 'Haridwar', 1, 1, 1, '', 'trf', 'regdfbf@klngr.re', '2121212121', '2020-07-30 08:50:54'),
(82, 24, 'delhiDelhi', 4, 6, 5, '', 'weds', 'efsd@tfg.rdf', '1111111111', '2020-07-30 08:50:54'),
(84, 3, 'delhi', 3, 5, 3, '', 'erfd', 'rtdhf@gt.tgf', '1111111111', '2020-07-30 08:50:54'),
(85, 3, 'delhi', 2, 5, 4, '', 'erfd', 'rtdhf@gt.tgf', '1111111111', '2020-07-30 08:50:54'),
(86, 3, 'delhi', 2, 3, 4, '', 'gtfhj', 'r4ety@rgth.rtgf', '1212121212', '2020-07-30 08:50:54'),
(87, 3, 'delhi', 3, 5, 4, '', 'gtfhj', 'r4ety@rgth.rtgf', '1212121212', '2020-07-30 08:50:54'),
(88, 3, 'delhi', 3, 5, 4, '', 'gtfhj', 'r4ety@rgth.rtgf', '1212121212', '2020-07-30 08:50:54'),
(90, 5, 'indore', 1, 1, 1, '', 'dsz', 'sdf@yt.t6g', '1234567890', '2020-07-30 08:50:54'),
(91, 5, 'indore', 1, 1, 1, '', 'zdgv', 'zdsfz@tyhg.t', '1234567890', '2020-07-30 08:50:54'),
(92, 21, ' Gadha', 1, 1, 1, '', 'utu fesrd', 'bjy@orjoiel', '2222222256', '2020-07-30 08:50:54'),
(93, 3, 'delhi', 1, 1, 1, '', 'wds', 'sd@hy.tfg', '1234567830', '2020-07-30 08:50:54'),
(94, 21, ' Gadha', 1, 1, 1, 'The New One', 'The New One', 'dsf@f.d', '1111111111', '2020-07-30 08:50:54'),
(95, 24, 'HaridwarHaridwar', 1, 1, 1, '', 'echo ', 'h@j.c', '1111111111', '2020-07-30 08:50:54'),
(96, 21, ' Gadha', 1, 1, 1, '', 'asd', 'sd@sdf.sefd', '1111111111', '2020-07-30 08:50:54'),
(97, 21, ' Gadha', 1, 1, 1, '', 'k', 'f@g.y', '1111111111', '2020-07-30 08:50:54'),
(98, 3, 'delhi', 1, 1, 1, '', 'utu fesrd', 'bjy@orjoiel', '2222222256', '2020-07-30 08:50:54'),
(99, 21, 'pune', 2, 3, 1, '', 'asd', 'sad@f.f', '0000000000', '2020-07-30 08:50:54'),
(100, 24, 'indorejaypur', 1, 1, 1, '', 'rfdgdf', 'ds@hg.f', '1111111111', '2020-07-30 08:50:54'),
(101, 24, 'indorejaypur', 1, 1, 1, '', 'aaa', 'a@f.c', '0000000000', '2020-07-30 08:50:54'),
(102, 4, 'hllo', 3, 4, 2, '', 'fff', 'ff@ff.f', '0000000000', '2020-07-30 08:50:54'),
(103, 21, 'pune', 1, 1, 1, '', 'aa', 'a@a.a', '0000000000', '2020-07-30 08:50:54'),
(104, 3, 'delhi', 1, 1, 1, '', 'sdsf', 'a.@j.s', '0000000111', '2020-07-30 08:50:54'),
(105, 13, 'Haridwar', 1, 1, 1, '', 'wad', 'a.h@j', '9000000000', '2020-07-30 08:50:54'),
(106, 5, 'indore', 1, 1, 1, '', 'regf', 'erf@rgf.y', '9999999999', '2020-07-30 08:50:54'),
(107, 13, 'Haridwar', 1, 1, 1, '', 'aa', 'aa@ww.a', '9999999999', '2020-07-30 08:50:54'),
(108, 12, 'Pune', 5, 8, 3, 'aaa', 'aa', 'aa@aa.e', '9999999999', '2020-07-30 08:50:54'),
(109, 12, 'Pune', 10, 10, 10, '', 'aa', 'dsd@de.ty', '', '2020-07-30 08:50:54'),
(110, 3, 'delhi', 1, 1, 1, '', 'a', 'a@a.a', '1111111111', '2020-07-30 08:50:54'),
(111, 19, ' Lucknow', 2, 5, 7, '', 'Raghav patil', 'gcd@gmail.com', '9856767676', '2020-07-30 08:50:54'),
(112, 19, 'Lucknow', 2, 4, 2, '', 'Mohit Mahajan', 'mahajan123@gmail.com', '7676765676', '2020-07-30 08:50:54'),
(113, 25, ' Kolkata', 6, 2, 5, '', 'Tanmay', 'tanu@gmail.com', '8787878787', '2020-07-30 08:50:54'),
(114, 23, '1', 1, 1, 0, 'qq', 'ss@r.r', '9999999999', NULL, '2020-07-30 08:50:54'),
(115, 25, '1', 1, 1, 0, 'Hd', 'aa@a.a', '1234567890', NULL, '2020-07-30 08:50:54'),
(116, 19, '3', 5, 2, 0, 'Dipak', 'dipak@gmail.com', '1234567890', NULL, '2020-07-30 08:50:54'),
(117, 46, '2', 5, 7, 0, 'Saurabh Jadhav', 'saurabh@gmail.com', '7676564421', NULL, '2020-07-30 08:50:54'),
(118, 61, '2', 8, 5, 0, 'Kishor Wagh', 'wagh@gmail.com', '7676239876', NULL, '2020-07-30 08:50:54'),
(119, 61, '4', 3, 6, 0, 'Karan jadhav', 'jadhavk@gmail.com', '8767897789', NULL, '2020-07-30 08:50:54'),
(120, 59, '6', 2, 3, 0, 'Yamini shekavat', 'yshek@gmail.com', '9846578623', NULL, '2020-07-30 08:50:54'),
(121, 58, '10', 10, 10, 0, 'Someone', 'Someone@Someone.c', '9898989898', NULL, '2020-07-30 08:50:54'),
(122, 60, '10', 10, 10, 0, 'aa', 'aa@aa.a', '1234567890', NULL, '2020-07-30 08:50:54'),
(123, 22, '5', 3, 3, 0, 'Sagar Patil ', 'sagargpatil1998@gmal.com', '8888888888', NULL, '2020-07-30 08:50:54'),
(124, 40, '4', 3, 6, 0, 'Sagar Patil ', 'sagargpatil1998@gmal.com', '8888888888', NULL, '2020-07-30 08:50:54'),
(125, 33, '1', 1, 1, 0, 'Sagar Patil ', 'sagargpatil1998@gmal.com', '8888888888', NULL, '2020-07-30 08:50:54'),
(126, 56, '7', 8, 4, 0, 'Nehal Chaudhari', 'chaudharid99@gmail.com', '9787678987', NULL, '2020-07-30 08:50:54'),
(127, 73, '5', 2, 2, 0, 'rohan', 'rohan@gmail.com', '8787876543', NULL, '2020-07-30 08:50:54'),
(128, 68, '5', 6, 2, 0, 'Faruk chavhan', 'faruk@gmail.com', '9898983344', NULL, '2020-07-30 08:50:54'),
(129, 74, '10', 10, 7, 0, 'Mohit Yuvraj Chaudhari', 'chaudhari8568@gmail.com', '9373876524', NULL, '2020-07-30 08:50:54'),
(130, 68, '5', 3, 9, 0, 'Salman ali', 'ali@gmail.com', '7656879867', NULL, '2020-07-30 08:50:54'),
(131, 68, '4', 7, 3, 0, 'Sagar Patil ', 'shankar@gmail.com', '7666666666', NULL, '2020-07-30 08:50:54'),
(132, 75, 'a', 1, 1, 8, '', 'yogendrarade23@gmail.com', 'yogendrarade23@gmail.com', '7038107599', '2020-07-30 08:58:17'),
(133, 75, '1', 1, 7, 0, 'Hf', 'jd@je.id', '1234567890', NULL, NULL),
(134, 75, 'a', 1, 1, 7, '', 'dipesh', 'dipchaudhari2015@gmail.com', '9834901576', '2020-07-30 09:18:01'),
(135, 75, 'a', 1, 1, 8, '', 'patilsaurav143@gmail.com', 'patilsaurav143@gmail.com', '7350989270', '2020-07-30 09:20:10'),
(136, 75, 'a', 4, 7, 5, '', 'Pravin Sonawane', 'dsfns@gmi.v', '1234569875', '2020-07-30 09:29:30'),
(137, 68, 'a', 3, 5, 6, '', 'a', 'a@a.a', '9999999999', '2020-07-30 09:38:22'),
(138, 33, 'a', 3, 5, 3, '', 'aaa', 'aa@a.a', '7894561230', '2020-07-30 09:42:29'),
(139, 75, 'a', 5, 4, 3, 'FullnameFullnameFullnameFullname', 'Fullname', 'Fullname@a.a', '9999999999', '2020-07-30 09:47:31'),
(140, 75, 'a', 2, 4, 6, 'retse rtebe5y se5', 'a', 'a@a.a', '1111111111', '2020-07-30 10:07:31'),
(141, 69, 'a', 4, 6, 2, '', 'aa', 'aa@aa.a', '1234567890', '2020-07-30 10:40:50'),
(142, 44, 'a', 3, 5, 4, '', 'dfs', 'df@d.t', '9999999999', '2020-07-30 12:13:13'),
(143, 59, 'a', 4, 8, 2, 'No Suggestions', 'rdythdd', 'Email@email.a', '', '2020-07-30 12:50:29'),
(144, 32, 'a', 2, 3, 4, 'Very Extream stuation', 'Sanjay patil', 'patil@gmail.com', '9878787657', '2020-07-30 15:59:37'),
(145, 75, 'a', 1, 9, 1, 'No', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-31 03:12:39'),
(146, 75, 'a', 8, 1, 1, '', 'tejaspingalkar@gmail.com', 'tejaspingalkar@gmail.com', '1234567890', '2020-07-31 03:17:02'),
(147, 77, 'a', 3, 7, 4, 'No suggest', 'dipesh', 'dipchaudhari2015@gmail.com', '9834901576', '2020-08-01 02:25:57'),
(148, 78, 'a', 6, 4, 6, '', 'Rohit', 'Pawar@gmail.com', '7075802030', '2020-08-02 03:48:54'),
(149, 41, 'a', 7, 5, 5, '', 'dnfk', 'dkf@gmail.com', '1010101010', '2020-08-02 03:52:03'),
(150, 78, 'a', 4, 6, 8, '', 'ef', 'vsdk@gmail.com', '2020202020', '2020-08-02 05:42:52'),
(151, 78, 'a', 6, 4, 3, '', 'jefhio', 'CHside@gmail.com', '1010101010', '2020-08-02 05:49:41'),
(152, 56, 'a', 6, 7, 2, 'no', 'GautamShashri', 'Gautam@gmail.com', '8546792478', '2020-08-02 11:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `testtt`
--

CREATE TABLE `testtt` (
  `id` int(9) NOT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtt`
--

INSERT INTO `testtt` (`id`, `lat`, `lon`) VALUES
(1, '-34.34825987035316', ' 149.25972265625'),
(1, '-34.23025959564259', ' 149.8914365234375'),
(2, '-34.203005239394265', ' 148.0127744140625'),
(2, '-34.17119735027935', ' 149.007037109375'),
(2, '-34.45703600792089', ' 149.029009765625'),
(2, '-34.51137101990372', ' 148.216021484375'),
(2, '-34.40719783275349', ' 147.7600888671875'),
(2, '-34.0165314049471', ' 147.7930478515625'),
(3, '-34.656091221194835', ' 148.2105283203125'),
(3, '-34.55662315165483', ' 148.897173828125'),
(3, '-34.4887357328711', ' 149.204791015625'),
(3, '-34.4887357328711', ' 149.204791015625'),
(4, '-32.46895343435964', ' 145.3723768464262'),
(4, '-27.757405361537042', ' 143.0872205964262'),
(4, '-24.282984385983664', ' 139.3079237214262'),
(4, '-28.145592783068714', ' 136.9348768464262'),
(4, '-31.124402873836875', ' 140.5383924714262'),
(4, '-32.69113365098245', ' 142.9993299714262'),
(5, '24.138069174247843', ' 81.1315877256086'),
(5, '24.187561544133793', ' 81.21192525002266'),
(5, '24.21857878140092', ' 81.24831746193672'),
(5, '24.24550304520368', ' 81.31629536721016'),
(5, '24.23986820542819', ' 81.33277485939766'),
(5, '24.19164882535217', ' 81.28882954689766'),
(5, '24.14341120775612', ' 81.23458455178047');

-- --------------------------------------------------------

--
-- Table structure for table `theftimage`
--

CREATE TABLE `theftimage` (
  `imgid` int(9) NOT NULL,
  `theft_id` int(9) NOT NULL,
  `image` varchar(150) NOT NULL,
  `ref` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theftimage`
--

INSERT INTO `theftimage` (`imgid`, `theft_id`, `image`, `ref`) VALUES
(1, 6, 'uploads/pic03.jpg', ''),
(2, 6, 'uploads/bg.jpg', ''),
(3, 8, 'uploads/E2.jpeg', ''),
(4, 8, 'uploads/E3.jpeg', ''),
(5, 8, 'uploads/jalshakti.jpg', ''),
(6, 15, 'uploads/shopping.png', ''),
(7, 17, 'uploads/shopping.png', ''),
(8, 18, 'uploads/shopping.png', ''),
(9, 25, 'theft/uploads/images.jpeg', '4961725'),
(10, 26, 'theft/uploads/1596078788045272872427484016488.jpg', '9154426'),
(11, 26, 'theft/uploads/15960788637895957718180929109691.jpg', '9154426'),
(12, 26, 'theft/uploads/PHOTO_20200422_141310.jpg', '9154426'),
(13, 27, 'theft/uploads/15960792027582547369938853539503.jpg', '3770827'),
(14, 28, 'theft/uploads/Screenshot_20200730-085053_Chrome.jpg', '1184928'),
(15, 29, 'theft/uploads/Screenshot_20200730-085053_Chrome.jpg', '9878529'),
(16, 30, 'theft/uploads/878.jpg', '1705730'),
(17, 31, 'theft/uploads/images.jpeg', '3162731'),
(18, 32, 'theft/uploads/15960934877815417036586228460894.jpg', '8616232'),
(19, 0, 'theft/uploads/images (2).jpeg', ''),
(20, 36, 'theft/uploads/15962501302071823715147602234157.jpg', '7730236'),
(21, 37, 'theft/uploads/15963670861158676040491008995011.jpg', '2586737'),
(22, 38, 'theft/uploads/15963672077664050896742725866927.jpg', '9389038'),
(23, 39, 'theft/uploads/15963672803785041335391268978777.jpg', '3052039');

-- --------------------------------------------------------

--
-- Table structure for table `waterbodies`
--

CREATE TABLE `waterbodies` (
  `bid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `taluka` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `postal` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waterbodies`
--

INSERT INTO `waterbodies` (`bid`, `name`, `mobile`, `email`, `type`, `state`, `district`, `taluka`, `village`, `postal`, `lat`, `lon`, `address`, `status`, `time`) VALUES
(1, 'aaa', '9999999999', 'aa@a.a', 'embankment', 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'map', '2020-07-25 11:22:15'),
(2, 'sadas', '9999999999', 'as@ji.a', 'canal', 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'map', '2020-07-25 11:22:15'),
(3, 'asas', '2222222222', 'ss@kk.c', 'pond', 'Maharashtra', 'Aurangabad', 'soygaon', 'soygaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'map', '2020-07-25 11:22:15'),
(4, 'uihu', '9999999999', 'aa@d.a', 'canal', 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'map', '2020-07-25 11:22:15'),
(5, 'aaa', '7777777777', 'ffds@hsdf.sd', 'canal', 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'map', '2020-07-25 11:22:15'),
(6, 'aas', '1234567890', 'sdf@dfd.f', 'canal', 'Maharashtra', 'Aurangabad', 'Aurangabad', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'map', '2020-07-25 11:22:15'),
(7, 'The LIVE', '9999999999', 'aa@kk.s', 'Dam', 'Maharashtra', 'Aurangabad', 'Kongaon', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'map', '2020-07-25 12:38:55'),
(8, 'Ramesh Deshmukh', '7676765656', 'gcd@gmail.com', 'canal', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425002', '21.0149921', '75.5275534', 'Indrani Society, Pimprala, near Mali Hostel, Mayur Society, pimprala, Jalgaon, Maharashtra 425002, India', 'map', '2020-07-25 15:46:11'),
(9, 'Live', '8888888888', 'dh@hd.dk', 'pond', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425002', '20.9977905', '75.5523732', '8, behind M.J. College, Shivram Nagar, Suyog Colony, Jalgaon, Maharashtra 425002, India', 'map', '2020-07-26 06:32:36'),
(10, 'Vicky', '9999999999', 'anymailvi@h.com', '', 'Maharashtra', 'Jalgaon', 'Bhusawal', 'Jalgaon', '425002', '20.9978284', '75.5524465', '8, behind M.J. College, Shivram Nagar, Suyog Colony, Jalgaon, Maharashtra 425002, India', 'map', '2020-07-26 06:51:45'),
(11, 'Vicky', '9999999999', 'anymailvi@h.com', '', 'Maharashtra', 'Jalgaon', 'Bhusawal', 'Jalgaon', '425002', '20.9978284', '75.5524465', '8, behind M.J. College, Shivram Nagar, Suyog Colony, Jalgaon, Maharashtra 425002, India', 'map', '2020-07-26 06:51:45'),
(12, 'dipesh', '9834901576', 'dipchaudhari2015@gmail.com', 'pond', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425002', '20.9978472', '75.552397', '8, behind M.J. College, Shivram Nagar, Suyog Colony, Jalgaon, Maharashtra 425002, India', 'map', '2020-07-26 06:57:53'),
(13, 'Mohit Yuvraj Chaudhari', '8308549742', 'chaudhari8568@gmail.com', 'embankment', 'Maharashtra', 'Jalgaon', 'Yawal', 'Kingaon', '425112', '21.1842209', '75.5525976', 'Unnamed Road, Maharashtra 425112, India', 'map', '2020-07-26 12:56:36'),
(14, 'vucufu', '7350989270', 'chaudhari8568@gmail.com', 'embankment', 'Maharashtra', 'Jalgaon', 'Dongaon', 'Dongaon', '425112', '21.1852796', '75.5606026', 'Unnamed Road, Dongaon, Maharashtra 425112, India', 'map', '2020-07-26 13:04:06'),
(15, 'Ravindra', '8787878787', 'trdhr@tyg.rtgf', '', 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'map', '2020-07-27 04:04:11'),
(16, 'Sanjay ', '8787878787', 'trdhr@tyg.rtgf', 'Dam', 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'map', '2020-07-27 04:18:32'),
(17, 'Test', '9999999999', 'test@test.test', 'embankment', 'AndhraPradesh', 'Jalna', 'Kongaon', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'nomap', '2020-07-28 06:46:32'),
(18, 'erg', '6666666666', 'dfsu@ndsf.fd', 'canal', 'bihar', 'Jalna', 'Kongaon', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'nomap', '2020-07-28 08:36:21'),
(19, 'tel', '9999999999', 'fd@gdf.y', 'pond', 'telangana', 'Jalna', 'Kongaon', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'nomap', '2020-07-28 09:00:43'),
(20, 'Sagar Patil ', '8888888888', 'sagargpatil1998@gmal.com', 'embankment', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425001', '20.9847665', '75.5820686', 'E-3, MIDC, Jalgaon, Maharashtra 425001, India', 'map', '2020-07-28 14:54:19'),
(21, 'Sagar Patil ', '8888888888', 'sagargpatil1998@gmal.com', 'canal', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425001', '20.9847665', '75.5820686', 'E-3, MIDC, Jalgaon, Maharashtra 425001, India', 'nomap', '2020-07-28 14:56:15'),
(22, 'Subhash Desai', '8888888888', 'dsfns@gmi.v', 'pond', 'Maharashtra', 'Jalgaon', 'jalgaon', 'Bambhori', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'nomap', '2020-07-28 15:34:23'),
(23, 'GautamShashri', '8546792478', 'Gautam@gmail.com', 'embankment', 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'map', '2020-07-28 15:40:06'),
(24, 'Gautam Shastri', '8888888888', 'shastri@gmal.com', 'embankment', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Meharun', '425001', '20.9828496', '75.5682434', 'JK Park, Tambapura, Jalgaon, Maharashtra 425002, India', 'nomap', '2020-07-28 15:44:22'),
(25, 'BilalPatni', '8546792478', 'Bilala@gmail.com', 'embankment', 'Rajasthan', 'Jodhpur', 'Jodhpur', '	Akthali', '342303', '19.7514798', '75.7138884', 'Bavdi', 'map', '2020-07-28 16:24:10'),
(26, 'Sham Patil', '9888576780', 'Sham@gmail.com', 'embankment', 'Rajasthan', 'Jodhpur ', 'Luni', 'Barli', '342303', '20.9828496', '75.5682434', 'Revdi', 'map', '2020-07-28 16:29:50'),
(27, 'Ritesh shukla', '8888888888', 'shastri@gmal.com', 'embankment', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425001', '20.9974022', '75.5555085', '10/A, Gurukul Colony, Ramdas Colony, Jalgaon, Maharashtra 425001, India', 'nomap', '2020-07-29 06:05:26'),
(28, 'Shankar  Pawar', '7666666666', 'shankar@gmail.com', 'embankment', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425001', '20.9978164', '75.5518698', '30, Laxmi Nagar, Ramanand Nagar, Jalgaon, Maharashtra 425001, India', 'map', '2020-07-29 06:35:54'),
(29, 'Shankar  Pawar', '7666666666', 'shankar@gmail.com', 'embankment', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425001', '20.9978164', '75.5518698', '30, Laxmi Nagar, Ramanand Nagar, Jalgaon, Maharashtra 425001, India', 'map', '2020-07-29 06:35:54'),
(30, 'L', '1234567890', 'tejaspingalkar@gmail.com', 'pond', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425001', '20.9991591', '75.5547808', '13, MJ College Rd, Shivram Nagar, Ramdas Colony, Jalgaon, Maharashtra 425001, India', 'nomap', '2020-07-30 02:53:56'),
(31, 'Shantaram Zope', '8767678767', 'shantaram@gmail.com', 'pond', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425001', '21.0159161', '75.5296715', 'Sant Mirabai Nagar Rd, Mayur Society, pimprala, Jalgaon, Maharashtra 425001, India', 'map', '2020-07-30 02:55:12'),
(32, 'Salman Khan', '9090909090', 'salombhai@gmail.com', 'pond', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425001', '20.9922889', '75.5603485', 'Adarsh Nagar, Ganesh Nagar, Zillapeth, Jalgaon, Maharashtra 425001, India', 'map', '2020-07-30 07:14:27'),
(33, 'Manoj shukla', '8888888888', 'sagargpatil1998@gmal.com', 'embankment', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425001', '20.9922892', '75.5603472', 'Adarsh Nagar, Ganesh Nagar, Zillapeth, Jalgaon, Maharashtra 425001, India', 'map', '2020-07-30 08:26:19'),
(34, 'Akshay', '9856786523', 'akshay@gmail.com', 'Dam', 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', '421302', '19.7514798', '75.7138884', '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra 421302, India', 'map', '2020-07-30 15:56:57'),
(35, 'Dipesh Shivaji Chaudhari', '7656897624', 'danger@gmail.com', 'canal', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425001', '21.0159161', '75.5296715', 'Sant Mirabai Nagar Rd, Mayur Society, pimprala, Jalgaon, Maharashtra 425001, India', 'nomap', '2020-07-31 02:03:20'),
(36, 'Dipesh Shivaji Chaudhari', '5555555555', 'mohit@gmail.com', 'canal', 'Maharashtra', 'Jalgaon', 'Bambhori Pr. Chandsar', 'BambhoriPr.Chandsar', '425002', '21.0148599', '75.5027744', 'Mechanical Department, Bambhori Pr. Chandsar, Maharashtra 425002, India', 'map', '2020-07-31 05:58:15'),
(37, 'Sagar Patil ', '8888888888', 'shankar@gmail.com', 'embankment', 'Maharashtra', 'Jalgaon', 'Bambhori Pr. Chandsar', 'BambhoriPr.Chandsar', '425001', '21.0116732', '75.5016461', 'GY-06, New Boys Hostel SSBT COET, Bambhori Pr. Chandsar, Maharashtra 425001, India', 'map', '2020-07-31 07:25:21'),
(38, 'sanwadrajendrapatil@gmail.com', '9175238158', 'sanwadrajendrapatil@gmail.com', 'Dam', 'Maharashtra', 'Jalgaon', 'Toli Kh.', 'ToliKh.', '425109', '20.9639481', '75.2998836', 'SH185, Toli Kh., Maharashtra 425109, India', 'nomap', '2020-07-31 07:48:27'),
(39, 'a', '9797979797', 'a@a.f', 'Dam', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425002', '21.024919999999998', '75.4927165', 'Unnamed Road, Maharashtra 425002, India', 'nomap', '2020-07-31 09:45:20'),
(40, 'Tejas', '1234567890', 'ue@hs.s', 'canal', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425001', '20.999247', '75.5529291', 'Surekha Apartment Rd, Shivram Nagar, Ramanand Nagar, Jalgaon, Maharashtra 425001, India', 'map', '2020-07-31 14:43:09'),
(41, 'dipesh', '9834901576', 'danger@gmail.com', 'canal', 'Maharashtra', 'Jalgaon', 'Bambhori Pr. Chandsar', 'BambhoriPr.Chandsar', '425002', '21.0142974', '75.506742', 'Unnamed Road, Bambhori Pr. Chandsar, Maharashtra 425002, India', 'map', '2020-08-01 02:18:05'),
(42, 'KaluramPrajapat', '8888888888', 'kalu@gmail.com', 'embankment', 'Rajasthan', 'Jodhpur', 'Bawdi', 'Baori', '342037', '21.024919999999998', '75.4927165', 'Near shivana river', 'nomap', '2020-08-01 06:59:34'),
(43, 'aa', '1221221222', 'Jalgaon@Jalgaon.Jalgaon', 'pond', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', '425002', '21.024919999999998', '75.4927165', 'Unnamed Road, Maharashtra 425002, India', 'nomap', '2020-08-01 07:09:28'),
(44, 'a', '9879879995', 'Jalgaon@sss.Jalgaon', 'pond', 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon44', '425002', '21.024919999999998', '75.4927165', 'Unnamed Road, Maharashtra 425002, India', 'map', '2020-08-01 07:17:59'),
(45, 'Dipesh Shivaji Chaudhari', '9834901576', 'dipchaudhari2015@gmail.com', 'Dam', 'Maharashtra', 'Jalgaon', 'Bambhori Pr. Chandsar', 'BambhoriPr.Chandsar', '425002', '21.014856', '75.5027735', 'Mechanical Department, Bambhori Pr. Chandsar, Maharashtra 425002, India', 'map', '2020-08-01 11:49:51'),
(46, 'dipesh', '9834901576', 'dipchaudhari2015@gmail.com', 'canal', 'Maharashtra', 'Jalgaon', 'Bambhori Pr. Chandsar', 'BambhoriPr.Chandsar', '425002', '21.0148601', '75.5027748', 'Mechanical Department, Bambhori Pr. Chandsar, Maharashtra 425002, India', 'map', '2020-08-01 12:43:22'),
(47, 'Mohit Mahajan', '8898987678', 'mohit@gmail.com', 'canal', 'Maharashtra', 'Jalgaon', 'jalgaon', 'Jalgaon', '425002', '21.024919999999998', '75.4927165', 'Unnamed Road, Maharashtra 425002, India', 'nomap', '2020-08-02 11:01:30'),
(48, 'Girish', '1234567890', 'tejaspingalkar@gmail.com', 'canal', 'Maharashtra', 'Jalgaon', 'Bambhori Pr. Chandsar', 'BambhoriPr.Chandsar', '425002', '21.0148594', '75.5027762', 'Mechanical Department, Bambhori Pr. Chandsar, Maharashtra 425002, India', 'nomap', '2020-08-02 11:05:27'),
(49, 'GautamShashri', '8546792478', 'Gautam@gmail.com', 'canal', 'Maharashtra', 'Jalgaon', 'jalgaon', 'jalgaon', '425002', '21.024919999999998', '75.4927165', 'Unnamed Road, Maharashtra 425002, India', 'nomap', '2020-08-02 11:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `watertheft`
--

CREATE TABLE `watertheft` (
  `theft_id` int(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  `taluka` varchar(30) NOT NULL,
  `village` varchar(30) NOT NULL,
  `postal` int(10) NOT NULL,
  `lat` int(40) NOT NULL,
  `lon` int(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watertheft`
--

INSERT INTO `watertheft` (`theft_id`, `state`, `district`, `taluka`, `village`, `postal`, `lat`, `lon`, `address`, `description`, `status`, `time`, `type`) VALUES
(1, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'complete', '2020-08-28 09:23:35', 'water'),
(2, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 0, 0, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-28 09:24:15', 'water'),
(3, 'Telangana', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-09 09:24:39', 'water'),
(4, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'dued', '2020-07-28 09:25:43', 'water'),
(5, 'Maharashtra', 'Jalgaon', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-28 09:30:26', 'water'),
(6, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-28 09:38:46', 'water'),
(7, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-28 09:42:54', 'water'),
(8, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-28 09:46:21', 'water'),
(9, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'complete', '2020-07-28 09:47:48', 'sand'),
(10, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 0, 0, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-28 09:49:05', 'sand'),
(11, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-28 09:49:56', 'sand'),
(12, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-28 09:50:10', 'sand'),
(13, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-28 09:52:32', 'sand'),
(14, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-28 09:52:40', 'sand'),
(15, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-28 09:57:23', 'sand'),
(16, 'Maharashtra', 'Jalgaon', 'Kingaon', 'Kingaon', 425302, 21, 76, 'MH SH 186, Kingaon, Maharashtra 425302, India', '', 'active', '2020-07-28 10:27:33', 'water'),
(17, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', '', 'active', '2020-07-28 11:16:55', 'water'),
(18, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', 'very Bad Condition', 'active', '2020-07-24 11:27:36', 'sand'),
(19, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', 'Some people draw water from canal', 'active', '2020-07-28 11:33:30', 'water'),
(20, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', 'some people draw water ', 'active', '2020-07-28 13:20:40', 'water'),
(21, 'Delhi', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', 'hbhbb', 'active', '2020-07-28 13:22:01', 'sand'),
(22, 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 425001, 21, 76, 'E-3, MIDC, Jalgaon, Maharashtra 425001, India', '', 'active', '2020-07-28 14:59:03', 'sand'),
(23, 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 425001, 0, 0, 'E-3, MIDC, Jalgaon, Maharashtra 425001, India', '', 'active', '2020-07-28 15:00:08', 'sand'),
(24, 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 425002, 21, 76, 'JK Park, Tambapura, Jalgaon, Maharashtra 425002, I', '', 'active', '2020-07-28 15:00:28', 'sand'),
(25, 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 425001, 21, 76, 'Sant Mirabai Nagar Rd, Mayur Society, pimprala, Ja', 'Mohit pani chorto', 'complete', '2020-07-30 02:57:45', 'water'),
(26, 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 425001, 21, 76, 'Surekha Apartment Rd, Shivram Nagar, Ramanand Naga', '', 'active', '2020-07-30 03:13:05', 'water'),
(27, 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 425001, 21, 76, 'Surekha Apartment Rd, Shivram Nagar, Ramanand Naga', '', 'active', '2020-07-30 03:19:54', 'water'),
(28, 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 425001, 21, 76, 'Surekha Apartment Rd, Shivram Nagar, Ramanand Naga', '', 'active', '2020-07-30 03:21:28', 'water'),
(29, 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 425001, 21, 76, 'Surekha Apartment Rd, Shivram Nagar, Ramanand Naga', '', 'active', '2020-07-30 03:22:27', 'sand'),
(30, 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 425001, 21, 76, 'Surekha Apartment Rd, Shivram Nagar, Ramanand Naga', '', 'active', '2020-07-30 03:25:45', 'water'),
(31, 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 425001, 21, 76, 'Sant Mirabai Nagar Rd, Mayur Society, pimprala, Ja', 'Vggg', 'active', '2020-07-30 03:37:22', 'water'),
(32, 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 425001, 21, 76, 'Adarsh Nagar, Ganesh Nagar, Zillapeth, Jalgaon, Ma', '', 'active', '2020-07-30 07:17:48', 'water'),
(33, 'Maharashtra', 'Jalgaon', 'Jalgaon', 'Jalgaon', 425001, 21, 76, 'Adarsh Nagar, Ganesh Nagar, Zillapeth, Jalgaon, Ma', '', 'active', '2020-07-30 07:19:19', 'water'),
(34, 'Maharashtra', 'Jalna', 'Kongaon', 'Kongaon', 421302, 20, 76, '421302, Kalyan - Bhiwandi Rd, Kongaon, Maharashtra', 'Some people Draw water', 'active', '2020-07-30 16:01:27', 'water'),
(35, 'Maharashtra', 'Jalgaon', 'Bambhori Pr. Chandsar', 'Bambhori Pr. Chandsar', 425002, 21, 76, 'Mechanical Department, Bambhori Pr. Chandsar, Maha', '', 'active', '2020-07-31 06:01:30', 'water'),
(36, 'Maharashtra', 'Jalgaon', 'Bambhori Pr. Chandsar', 'Bambhori Pr. Chandsar', 425002, 21, 76, 'Mechanical Department, Bambhori Pr. Chandsar, Maha', 'Water ', 'active', '2020-08-01 02:46:24', 'water'),
(37, 'Maharashtra', 'Jalgaon', 'Bambhori Pr. Chandsar', 'Bambhori Pr. Chandsar', 425002, 21, 76, 'Mechanical Department, Bambhori Pr. Chandsar, Maha', 'Theft is occur', 'active', '2020-08-02 11:16:52', 'water'),
(38, 'Maharashtra', 'Jalgaon', 'Bambhori Pr. Chandsar', 'Bambhori Pr. Chandsar', 425002, 21, 76, 'Mechanical Department, Bambhori Pr. Chandsar, Maha', 'Theft is occur', 'active', '2020-08-02 11:19:06', 'sand'),
(39, 'Maharashtra', 'Jalgaon', 'Bambhori Pr. Chandsar', 'Bambhori Pr. Chandsar', 425002, 21, 76, 'Mechanical Department, Bambhori Pr. Chandsar, Maha', 'Theft', 'active', '2020-08-02 11:20:18', 'water'),
(40, 'Maharashtra', 'Jalgaon', 'Bambhori Pr. Chandsar', 'Bambhori Pr. Chandsar', 425002, 21, 76, 'Mechanical Department, Bambhori Pr. Chandsar, Maha', 'Theft', 'active', '2020-08-02 11:21:34', 'water');

-- --------------------------------------------------------

--
-- Table structure for table `wimages`
--

CREATE TABLE `wimages` (
  `iid` int(9) NOT NULL,
  `images` varchar(100) NOT NULL,
  `biid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wimages`
--

INSERT INTO `wimages` (`iid`, `images`, `biid`) VALUES
(3, 'aa', 1),
(4, 'uploads/2aaaaaa.jpg', 2),
(5, 'uploads/2IMG_20200711_141549.jpg', 2),
(6, 'uploads/3bg-masthead.jpg', 3),
(7, 'uploads/3ymrb.jpg', 3),
(8, 'uploads/4thony-khim-next-ironman-textless.jpg', 4),
(9, 'uploads/4b910f27d272411a26e0b110358285d57 (1).jpg', 4),
(10, 'uploads/4a.jpg', 4),
(11, 'uploads/4a.jpg', 4),
(12, 'uploads/4bg1.jpg', 4),
(13, 'uploads/5adz.jpg', 5),
(14, 'uploads/5bridge.jpg', 5),
(15, 'wbuploads/6A New Design - Made with PosterMyWall.jpg', 6),
(16, 'wbuploads/77.jpg', 7),
(17, 'wbuploads/7109.png', 7),
(18, 'wbuploads/11IMG_20200726_122149.jpg', 11),
(19, 'wbuploads/1415957686531918024097149240903581.jpg', 14),
(20, 'wbuploads/15earthen-dams-6-1024.jpg', 15),
(21, 'wbuploads/17pic01.jpg', 17),
(22, 'wbuploads/18pic01.jpg', 18),
(23, 'wbuploads/18pic03.jpg', 18),
(24, 'wbuploads/19bg.jpg', 19),
(25, 'wbuploads/23embankment.jpg', 23),
(26, 'wbuploads/23Embank.jpg', 23),
(27, 'wbuploads/25Embank.jpg', 25),
(28, 'wbuploads/25embankment.jpg', 25),
(29, 'wbuploads/3015960777012741836158520381095808.jpg', 30),
(30, 'wbuploads/31IMG_20200726_185224.jpg', 31),
(31, 'wbuploads/32IMG_20200726_184318.jpg', 32),
(32, 'wbuploads/39exif.jpg', 39),
(33, 'wbuploads/4015962066501601309040732966080768.jpg', 40),
(34, 'wbuploads/4115962483688575910579948901472236.jpg', 41),
(35, 'wbuploads/4515962826535182562597233810272742.jpg', 45),
(36, 'wbuploads/4515962826642214802449621806478657.jpg', 45),
(37, 'wbuploads/4615962858666514851855838587134360.jpg', 46),
(38, 'wbuploads/4815963664681632359002429769060137.jpg', 48);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cimages`
--
ALTER TABLE `cimages`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `embankment`
--
ALTER TABLE `embankment`
  ADD PRIMARY KEY (`embankment_id`),
  ADD UNIQUE KEY `lid` (`local_authority_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `local_authority`
--
ALTER TABLE `local_authority`
  ADD PRIMARY KEY (`local_authority_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parameter`
--
ALTER TABLE `parameter`
  ADD UNIQUE KEY `embankment_id` (`embankment_id`);

--
-- Indexes for table `registercomplaint`
--
ALTER TABLE `registercomplaint`
  ADD PRIMARY KEY (`compl_id`);

--
-- Indexes for table `remove_embankment`
--
ALTER TABLE `remove_embankment`
  ADD UNIQUE KEY `embankment_id` (`embankment_id`);

--
-- Indexes for table `request_embankment`
--
ALTER TABLE `request_embankment`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `req_image`
--
ALTER TABLE `req_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`complaintid`),
  ADD KEY `embankment_id` (`embankment_id`);

--
-- Indexes for table `theftimage`
--
ALTER TABLE `theftimage`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `waterbodies`
--
ALTER TABLE `waterbodies`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `watertheft`
--
ALTER TABLE `watertheft`
  ADD PRIMARY KEY (`theft_id`);

--
-- Indexes for table `wimages`
--
ALTER TABLE `wimages`
  ADD PRIMARY KEY (`iid`),
  ADD KEY `bid` (`biid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cimages`
--
ALTER TABLE `cimages`
  MODIFY `iid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `embankment`
--
ALTER TABLE `embankment`
  MODIFY `embankment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `iid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `local_authority`
--
ALTER TABLE `local_authority`
  MODIFY `local_authority_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registercomplaint`
--
ALTER TABLE `registercomplaint`
  MODIFY `compl_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `request_embankment`
--
ALTER TABLE `request_embankment`
  MODIFY `req_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `req_image`
--
ALTER TABLE `req_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `complaintid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `theftimage`
--
ALTER TABLE `theftimage`
  MODIFY `imgid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `waterbodies`
--
ALTER TABLE `waterbodies`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `watertheft`
--
ALTER TABLE `watertheft`
  MODIFY `theft_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `wimages`
--
ALTER TABLE `wimages`
  MODIFY `iid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`embankment_id`) REFERENCES `embankment` (`embankment_id`);

--
-- Constraints for table `wimages`
--
ALTER TABLE `wimages`
  ADD CONSTRAINT `wimages_ibfk_1` FOREIGN KEY (`biid`) REFERENCES `waterbodies` (`bid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
