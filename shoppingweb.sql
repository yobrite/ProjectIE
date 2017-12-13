-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 07:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addressID` int(10) NOT NULL,
  `cID` int(10) NOT NULL,
  `addressForm` varchar(500) NOT NULL,
  `district` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `postcode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`addressID`, `cID`, `addressForm`, `district`, `state`, `postcode`) VALUES
(1, 1, '122 Soi Latphrao 26 Khwang Latyao', 'Chatuchak ', 'Bangkok', 10900),
(2, 2, 'D F Building Rimkhlong Saensaeb Rd Khwang Bangkapi', 'Huai Khwang', 'Bangkok ', 10310),
(3, 3, 'Ramindra Khwang Khanna Yao', ' Khanna Yao ', 'Bangkok ', 10230),
(4, 4, '662/63-6 Rama 3 Khwang Bang Phongphang', 'Yan Nawa', 'Bangkok ', 10120),
(5, 5, '38/185 Moo 6 Soi Ekachai 64/2 Khwang Bang Bon ', 'Bang Bon', 'Bangkok', 10150),
(6, 6, '42/1 Moo 2 Phetkasem Tumbol Om Yai ', 'Sam Phran', 'Nakhon Pathom', 73160),
(7, 7, '9 Soi 3 Pang Nga Tumbol Talatyai', 'Mueang Phuket', 'Phuket ', 83000),
(8, 8, '116/33 Thungree Tumbol Khohong', 'Hat Yai ', 'Songkhla ', 90110),
(9, 9, '73/3 Moo 6', 'Mueang Phuket', 'Phuket ', 83000),
(10, 10, '10 Soi 163 Yaek 7 Nawamin Khwang Raminthra', 'Khanna Yao ', 'Bangkok ', 10230),
(11, 11, '55 Soi 107 Latphrao Khwang Khlong Chan', 'Bang Kapi', 'Bangkok ', 10240),
(12, 12, '264/3 Ta City ', 'Muang Ranong', 'Ranong ', 85000),
(13, 13, '204/6 Moo 2 Nongbondaeng Dist Tumbol Nongbondaeng ', 'Ban Bueng', 'Chonburi ', 20170),
(14, 14, '53,55 Soi Rangsit-Nakornnayok 27 Tumbol Prachatipat ', 'Thunyaburi ', 'Pathum Thani', 12130),
(15, 15, '/9 Moo 11 Suwinthawong Khwang San Sap ', 'in Buri', 'Bangkok ', 10510),
(16, 16, '154 Krungkasem Khwang Bang Khun Phrom', 'Phra Nakhon', 'Bangkok ', 10200),
(21, 17, '620/77-78 Sathupradit Khwang Bang Phongphang', 'Yan Nawa', 'Bangkok ', 10120),
(22, 18, '5 Soi Thianthale 22 Yaek 5 Bangkhunthian-Chaithale Khwang Thakham', 'Bang Khun Thian', 'Bangkok ', 10150),
(23, 19, '1 Soi Ruam Rudi Phloenchit Khwang Lumphini', 'Pathumwan ', 'Bangkok ', 10330),
(24, 20, 'Khwang Khlong Mahanak', ' Pom Prap Sattru Phai ', 'Bangkok ', 10100),
(25, 21, 'Br 1 9 Tilok Uthit 2', 'Mueang Phuket', 'Phuket ', 83000),
(26, 22, 'Asoke Br 24 Sukhumvit 21 Khwang Khlongtoey Nuea', 'Watthana ', 'Bangkok ', 10110),
(27, 23, '196/4 Pradipat Khwang Samsaen Nai', 'Phaya Thai ', 'Bangkok ', 10400),
(28, 24, '88/3 Moo 3 Village Sansiri', 'Mueang Ubon Ratchathan', 'Ubon Ratchathani', 34000),
(29, 25, 'Tumbol Wat Sai', ' Mueang Nakhon Sawan ', 'Nakhon Sawan', 60000),
(30, 26, 'Tumbol Mueang Kao', 'Mueang Khon Kaen', 'Khon Kaen', 40000),
(31, 27, '1250 Moo 5 Khuanlang Sub Dist Tumbol Khuanlang ', ' Hat Yai ', 'Songkhla ', 90110),
(32, 28, '38/185 Moo 6 Soi Ekachai 64/2 Khwang Bang Bon', 'Bang Bon', 'Bangkok ', 10150),
(33, 29, 'Tumbol Choengnoen', 'Mueang Rayong', 'Rayong ', 21000),
(34, 30, '239 Huay Kaew Road', 'San Sai', 'Chiang Mai', 50290),
(35, 31, '17 Soi 110 Yaek 4 Phetkasem Khwang Nong Klang Plu ', 'Nong Khaem', 'Bangkok ', 10160),
(36, 32, '666/159 Kangmueang', 'Mueang Khon Kaen ', 'Khon Kaen', 40000),
(37, 33, '21/10 Moo 2 Ambassador City Jomtien Hotel Sukhumvit Tumbol Nachomthian ', 'Sattahip ', 'Chonburi ', 20250),
(38, 34, '150 Moo 2 Phetkasem Tumbol Don Khun Hui', 'Cha-Am', 'Phetchaburi ', 76120),
(39, 35, 'Tumbol Laosueakok', 'Lao Suea Kok', 'Ubon Ratchathani', 34000),
(40, 36, '106 Sanambinnam Tumbol Thasai', 'Mueang Nonthaburi', 'Nonthaburi ', 11000),
(41, 37, '167/88 Moo 1 Pimolratch Dist', ' Bang Bua Thong ', 'Nonthaburi ', 11110),
(42, 38, '24 Ramkhamhaeng Soi 8 Khwang Hua Mak', 'Bang Kapi', 'Bangkok', 10240),
(43, 39, '07/50 Kanchanawanit Tumbol Banphru', 'Hat Yai ', 'Songkhla ', 90250),
(44, 40, '56/10 Soi Thonglor Sukhumvit 55 Khwang Khlongton Nuea ', 'Watthana ', 'Bangkok ', 10110),
(45, 41, 'Tumbol Bang Phut', 'Pak Kret', 'Nonthaburi ', 11120),
(46, 42, '350/1-2 Moo 13 Khukhot Sub Dist Tumbol Khukhot ', 'Lamlukka ', 'Pathum Thani', 12130),
(47, 43, '77 Panthiya Village Bang Kruai-Sai Noi Tumbol Bang Si Thong', 'Bang Kruai', 'Nonthaburi ', 11130),
(48, 44, '323/18 Soi Bangmot Land 5 Phutthabucha Khwang Bang Mot', 'Thung Khru', 'Bangkok ', 10140),
(49, 45, '297 Nawamin Festival Walk Shopping Prasort Manukit Khwang Charakhe Bua', 'Lat Phrao', 'Bangkok ', 10230),
(50, 46, '399 Sinakharin Khwang Hua Mak', ' Bang Kapi', 'Bangkok', 10240),
(51, 47, 'Khwang Samphanthawong', 'Samphanthawong ', 'Bangkok ', 10100),
(52, 48, 'Khwang Tha Raeng', 'Bang Khen', 'Bangkok ', 10220),
(53, 49, '35/354 Moo 2 Bangnamchuet Sub Dist Tumbol Bangnamchuet', 'Mueang Samut Sakhon', 'Samut Sakhon', 74000),
(54, 50, 'Fctry 247/1 Bang Pu Industrial Estate Soi Phatthana 3 Sukhumvit Tumbol Phraeksa', 'Mueang Samut Prakarn', 'Samut Prakan', 10280);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cID` int(10) NOT NULL,
  `cFName` varchar(100) NOT NULL,
  `cLName` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phoneNumber` int(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cID`, `cFName`, `cLName`, `userName`, `password`, `phoneNumber`, `email`) VALUES
(1, 'William ', 'Hogans', 'Sampeatent', 'BoeCheih9', 853763455, 'WilliamBHogans@dayrep.com'),
(2, 'Herman', 'Livingston', 'Wone1975', 'iewieRi4o', 818983312, 'HermanMLivingston@rhyta.com'),
(3, 'Yvonne ', 'Kelly', 'Wooduousted1987', 'cho1nu2Aim3', 703496495, 'YvonneRKelly@dayrep.com\r\n'),
(4, 'Robert ', 'Dailey', 'Ourection', 'aethei0oMee', 724482049, 'RobertJDailey@rhyta.com'),
(5, 'Teresa ', 'Molina', 'Knougguent', 'teilo9Ow', 609766663, 'TeresaWMolina@armyspy.com\r\n'),
(6, 'Barney ', 'Allman', 'Dalmor', 'Ohk3aphu3', 951232231, 'BarneyEAllman@rhyta.com\r\n'),
(7, 'Chris', 'Vallery', 'Ared1995', 'Aemie8za', 6873373, 'ChrisMVallery@teleworm.us\r\n'),
(8, 'John', 'Petersen', 'Deabinder', 'Tong6oi5Zoo', 765255048, 'JohnCPetersen@dayrep.com\r\n'),
(9, 'Ruth ', 'Simone', 'Clueer', 'at0lieGhosi', 307933691, 'RuthRSimone@armyspy.com\r\n'),
(10, 'James ', 'Stansbury', 'Withomy', 'airah9uQu', 513008215, 'JamesJStansbury@teleworm.us\r\n'),
(11, 'Anna ', 'Massie', 'Coulsomest', 'jahK1Oomo', 780117272, 'AnnaTMassie@armyspy.com\r\n'),
(12, 'Erika ', 'Garcia', 'Eubje1952', 'baeDe4vie2ah', 463512918, 'ErikaDGarcia@armyspy.com\r\n'),
(13, 'Steve ', 'Williams', 'Parsomen', 'ooFei4Eroh', 637638756, 'SteveJWilliams@armyspy.com\r\n'),
(14, 'Marshall ', 'Mathis', 'Ackelvel', 'oka9Pela', 477704509, 'MarshallCMathis@teleworm.us\r\n'),
(15, 'Barbara ', 'Acevedo', 'Ates1937', 'eeJeim3Ei', 674322898, 'BarbaraDAcevedo@armyspy.com\r\n'),
(16, 'Kevin ', 'Berkowitz', 'Thationown', 'Aes4ne6H', 41169496, 'KevinJBerkowitz@jourrapide.com\r\n'),
(17, 'Jason ', 'Sims', 'Pary1983', 'eba8efooNg7', 164110762, 'JasonFSims@rhyta.com\r\n'),
(18, 'Candis ', 'Saenz', 'Proal1965', 'Mivai2ied3', 608790816, 'CandisASaenz@armyspy.com\r\n'),
(19, 'Thaddeus ', 'Torres', 'Hitho1939', 'Ie9ropoosh7', 676143263, 'ThaddeusBTorres@rhyta.com\r\n'),
(20, 'Trisha ', 'Olivarez', 'Wineirle', 'Afah9uu0wie', 750922142, 'TrishaROlivarez@dayrep.com\r\n'),
(21, 'Kenneth ', 'Mance', 'Fult1952', 'Loofoogh1', 682948341, 'KennethKMance@rhyta.com\r\n'),
(22, 'John ', 'Tinney', 'Wherser', 'Coov7Nae6', 965925963, 'JohnDTinney@armyspy.com\r\n'),
(23, 'Glenda ', 'Hamilton', 'Decommand1939', 'ai7meen8Oo', 469737350, 'GlendaTHamilton@teleworm.us\r\n'),
(24, 'Jennifer ', 'Schmidt', 'Pirs1941', 'Eedeeng8Ee', 308026880, 'JenniferRSchmidt@rhyta.com\r\n'),
(25, 'Lorine ', 'Baker', 'Consel95', 'Sohcaeph9', 172001142, 'LorineCBaker@rhyta.com\r\n'),
(26, 'Steven ', 'Seymour', 'Clontriled', 'jieFaiB8nae', 830583496, 'StevenDSeymour@teleworm.us\r\n'),
(27, 'Rachael ', 'Dunbar', 'Vored1967', 'phohPh8iet2', 69797585, 'RachaelJDunbar@dayrep.com\r\n'),
(28, 'Richard', 'Evans', 'Rany1967', 'Iew7rahxei6', 204389152, 'RichardTEvans@armyspy.com\r\n'),
(29, 'Ricardo ', 'Frisbie', 'Piten1965', 'phoh6auSh1ch', 554875193, 'RicardoRFrisbie@dayrep.com\r\n'),
(30, 'Stephen ', 'Medlin', 'Prear1939', 'Maef5chai', 434520351, 'StephenCMedlin@jourrapide.com\r\n'),
(31, 'Doris ', 'Kaplan', 'Knowers1944\r\n', 'eeshae1D', 44210912, 'DorisRKaplan@armyspy.com\r\n'),
(32, 'Jack ', 'Peterson', 'Littly', 'uch6thieH6', 120116360, 'JackKPeterson@rhyta.com\r\n'),
(33, 'Susan ', 'Juarez', 'Onsted', 'Ahj2eixuL', 21965744, 'SusanJJuarez@dayrep.com\r\n'),
(34, 'Stacy ', 'Schoolcraft', 'Wold1973', 'aih8quooSh', 892831682, 'StacyGSchoolcraft@teleworm.us\r\n'),
(35, 'Diane ', 'Furst', 'Thlearb', 'Cochae4ieB7', 252226170, 'DianeJFurst@rhyta.com\r\n'),
(36, 'Gary ', 'Kendall', 'Teminy', 'phoo7gai2Ee', 374193239, 'GaryKKendall@jourrapide.com\r\n'),
(37, 'Raymond ', 'Hanley', 'Whin1989', 'EeThoo7vae', 679735705, 'RaymondSHanley@rhyta.com\r\n'),
(38, 'Irving ', 'Thompson', 'Likesse', 'chu6Uxee8', 1082435, 'IrvingMThompson@jourrapide.com\r\n'),
(39, 'Russell ', 'Ellsworth', 'Shooke', 'OoD2Eipoh', 65918821, 'RussellMEllsworth@jourrapide.com\r\n'),
(40, 'Matthew ', 'Poindexter', 'Holf1983', 'ThooJei1\r\n', 751127398, 'MatthewEPoindexter@rhyta.com\r\n'),
(41, 'Anne ', 'Lopez', 'Therstagaing', 'oGiezee6xu', 24337250, 'AnneMLopez@dayrep.com\r\n'),
(42, 'Shirley ', 'Shores', 'Hishooked', 'beiSah0u', 284136728, 'ShirleyLShores@teleworm.us\r\n'),
(43, 'David ', 'Simmons', 'Survis', 'ohPhah5Na', 56403119, 'DavidJSimmons@teleworm.us\r\n'),
(44, 'Robert ', 'Perkins', 'Hurse1990', 'pei4ooTheid3', 959945049, 'RobertRPerkins@jourrapide.com\r\n'),
(45, 'Melinda ', 'Reagan', 'Answeept1967', 'thahngez3Ip', 678482846, 'MelindaEReagan@teleworm.us\r\n'),
(46, 'Donald', 'Trump', 'trumpeiei', 'pesident45', 859575809, 'trumpza@gmail.com'),
(47, 'Hillary ', 'Clinton', 'Hillary123', 'democratic', 854796215, 'HillaryC@gmail.com'),
(48, 'Chaiyapruek\r\n', 'Muangsiri', 'Poonsung', '123456', 812223456, 'Poonzaa_2@hotmail.com\r\n'),
(49, 'Theerapat', 'Lapjaturapit', 'Earthlnwzaa', '111222', 813332232, 'Earthhuad@hotmaill.com'),
(50, 'Noppavit', 'Puangto', 'fnxp777', '11111', 899992312, 'Frankeieina@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(10) NOT NULL,
  `orderDate` date NOT NULL,
  `orderTime` time NOT NULL,
  `cID` int(10) NOT NULL,
  `orderStatusType` int(10) NOT NULL,
  `shippingID` int(10) NOT NULL,
  `paymentID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `orderDate`, `orderTime`, `cID`, `orderStatusType`, `shippingID`, `paymentID`) VALUES
(1, '2016-01-03', '02:55:37', 33, 1, 4, 4),
(2, '2016-01-28', '19:01:55', 22, 5, 2, 5),
(3, '2016-02-04', '02:18:51', 24, 1, 3, 3),
(4, '2016-02-06', '16:34:19', 48, 5, 4, 5),
(5, '2016-02-27', '04:12:10', 11, 3, 2, 3),
(6, '2016-03-16', '14:50:16', 30, 4, 2, 4),
(7, '2016-03-24', '12:44:59', 43, 1, 5, 5),
(8, '2016-04-17', '07:18:30', 32, 2, 1, 2),
(9, '2016-04-19', '02:37:03', 1, 1, 5, 4),
(10, '2016-04-20', '11:08:17', 18, 2, 4, 1),
(11, '2016-04-26', '13:23:57', 13, 1, 5, 3),
(12, '2016-05-11', '12:58:07', 45, 2, 3, 1),
(13, '2016-05-27', '16:38:11', 46, 3, 4, 1),
(14, '2016-07-08', '06:01:34', 6, 1, 4, 3),
(15, '2016-07-10', '01:49:30', 5, 5, 4, 1),
(16, '2016-07-26', '13:51:43', 19, 1, 4, 4),
(17, '2016-07-29', '05:09:08', 41, 3, 4, 2),
(18, '2016-08-11', '23:05:42', 36, 2, 4, 4),
(19, '2016-08-23', '17:25:09', 31, 3, 3, 5),
(20, '2016-08-25', '23:58:37', 4, 2, 4, 2),
(21, '2016-09-26', '21:24:09', 27, 2, 5, 5),
(22, '2016-10-22', '09:40:42', 17, 1, 1, 2),
(23, '2016-11-11', '20:33:08', 29, 3, 1, 1),
(24, '2016-11-15', '20:33:07', 14, 2, 1, 5),
(25, '2016-11-28', '08:26:38', 3, 1, 5, 4),
(26, '2016-02-22', '22:22:07', 39, 1, 1, 4),
(27, '2016-03-02', '09:31:25', 23, 4, 4, 3),
(28, '2016-05-03', '04:55:29', 26, 1, 1, 5),
(29, '2016-05-05', '06:02:33', 15, 1, 4, 3),
(30, '2016-05-06', '05:24:01', 38, 3, 4, 3),
(31, '2016-05-09', '01:04:23', 50, 3, 3, 5),
(32, '2016-05-10', '06:41:21', 49, 2, 2, 2),
(33, '2016-05-18', '13:27:41', 34, 1, 1, 4),
(34, '2016-05-19', '19:12:08', 9, 1, 4, 4),
(35, '2016-07-06', '09:10:17', 28, 1, 3, 3),
(36, '2016-07-10', '13:23:44', 42, 2, 5, 5),
(37, '2016-07-16', '20:38:36', 8, 5, 4, 3),
(38, '2016-07-31', '07:41:51', 7, 2, 2, 1),
(39, '2016-08-09', '12:26:30', 40, 2, 2, 1),
(40, '2016-08-13', '13:23:38', 35, 2, 5, 5),
(41, '2016-08-25', '16:58:48', 16, 1, 5, 4),
(42, '2016-08-28', '00:42:12', 20, 3, 3, 1),
(43, '2016-09-23', '18:05:25', 37, 4, 5, 1),
(44, '2016-10-01', '23:00:18', 25, 3, 1, 5),
(45, '2016-10-22', '17:28:56', 44, 1, 2, 2),
(46, '2016-11-18', '03:50:25', 2, 1, 4, 4),
(47, '2016-11-28', '02:19:25', 21, 1, 5, 5),
(48, '2016-11-29', '13:53:28', 10, 2, 3, 2),
(49, '2016-12-11', '05:26:58', 47, 1, 3, 3),
(50, '2016-12-23', '06:41:28', 12, 2, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `orderStatusType` int(10) NOT NULL,
  `orderStatusName` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`orderStatusType`, `orderStatusName`) VALUES
(1, 'Complete'),
(2, 'Waiting for payment\r\n'),
(3, 'Pending\r\n'),
(4, 'On delivery\r\n'),
(5, 'Delay\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(10) NOT NULL,
  `amountPaid` float NOT NULL,
  `paymentTime` time NOT NULL,
  `paymentMethodID` int(10) NOT NULL,
  `paymentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `paymentMethodID` int(10) NOT NULL,
  `paymentMethodName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`paymentMethodID`, `paymentMethodName`) VALUES
(1, 'Cash\r\n'),
(2, 'Credit card'),
(3, 'Debit card'),
(4, 'Paypal'),
(5, 'Direct transfer');

-- --------------------------------------------------------

--
-- Table structure for table `pp`
--

CREATE TABLE `pp` (
  `productID` int(10) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productTypeID` int(10) NOT NULL,
  `productPrice` float NOT NULL,
  `promotionID` int(10) DEFAULT NULL,
  `shortDescription` varchar(200) DEFAULT NULL,
  `longDescription` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pp`
--

INSERT INTO `pp` (`productID`, `productName`, `productTypeID`, `productPrice`, `promotionID`, `shortDescription`, `longDescription`) VALUES
(1, 'BaBylissPRO Nano Titanium Dryer', 5, 66465, 1, 'A stellar combination of power, speed and design offers both heavy-duty 2000-watt performance and lightweight ergonomic handling', NULL),
(2, 'Bluetooth ver 4.0 Stereo Headphones With Microphone', 5, 910, 4, 'Colorful Design Multi-Function Stereo Sound Collapsible Wireless Bluetooth Headphones with Memory Card Support. ', NULL),
(3, 'Columbia Men\'s Watertight II Front-Zip Hooded Rain Jacket', 2, 2660, 3, 'Top-notch rain protection in an ultralight package-this packable rain jacket features full seam sealing', NULL),
(4, 'Dell AW15R3-10881SLV Laptop', 5, 86450, 1, 'With the unstoppable mobility and awesomely intense graphics, the Alienware 15 gives you the power to take the game further than ever. ', NULL),
(5, 'Emporio Armani Dress Watch', 3, 7875, 9, 'Black ion-plated stainless steel case with a black leather (interchangeable striped canvas) strap. Fixed black ion-plated bezel. Black dial with grey hands and index hour markers.', NULL),
(6, 'Fizzics Revolutionary Beer System, One Size, Black and Silver', 5, 6965, 1, 'The Fizzics System is the world’s first portable Draft Beer System that improves the flavor and taste of ordinary canned, bottled and growler beer. ', NULL),
(7, 'Herschel Supply Co. Men\'s Roy Quilted Bifold Wallet', 2, 945, 6, 'The classic bi-fold quilted Roy wallet offers a currency sleeve, multiple card slots and additional storage with a distinctive diamond stitched exterior.', NULL),
(8, 'Jan Marini Skin Research Holiday Exfoliator, Chocolate Truffle, 2 fl. oz', 3, 2450, 4, 'Uniquely designed microscopic particles gently exfoliate while releasing a skin protectant', NULL),
(9, 'NETGEAR Nighthawk X10 – AD7200 802.11acad Quad-Stream MU-MIMO WiFi', 5, 17465, 4, 'The Nighthawk X10 AD7200 Smart WiFi Router is industry’s fastest router for media streaming with Plex media server. ', NULL),
(10, 'Oral-B Black Pro 1000 Power Rechargeable Electric Toothbrush Powered by', 5, 2450, 10, 'Oral-b black 1000 rechargeable electric toothbrush provides a clinically proven superior clean vs a regular manual toothbrush. ', NULL),
(11, 'Philips Norelco Electric Shaver 8900, Wet & Dry Edition S895091', 5, 3990, 8, 'This wet or dry electric shaver is designed to contour to the curves of your face and cut closer to the skin. ', NULL),
(12, 'SUNVP Men\'s Hats Warm Knitted Cap Technician Fine Gauge Beanie Warm Knitted Cap', 2, 1750, 3, 'Warm Knitted Cap Technician Fine Gauge Beanie Warm Knitted Cap\r\nComfort, Warmth & Style Guaranteed \r\n', NULL),
(13, 'Tamarac by Slippers International Men\'s Flynn Slippers', 2, 1400, 1, 'Men\'s canoe moccasin-style slipper featuring cowsuede leather upper with whipstitched toe and soft berber lining.', NULL),
(14, 'Trimfit Boys Dragon Slippers Moccasin (ToddlerLittle KidBig Kid)', 3, 875, 12, 'Vibrant, comfortable 3d fire breathing dragon slipper by Trimfit, with elastic collar to ensure best possible fit. ', NULL),
(15, 'Yuneec Typhoon H Pro with Intel RealSense Technology', 5, 45500, 9, 'The Typhoon H is an advanced aerial photography and videography platform. ', NULL),
(16, 'Fluffy Bear Cat Paw Glove', 2, 110, 10, NULL, NULL),
(17, 'Men\'s hoodie tracksuit', 2, 630, 3, NULL, NULL),
(18, 'Vintage long sleeve flower floral black dress', 2, 1015, 4, NULL, NULL),
(19, 'Arbitmatch Female Warm Winter jacker women', 2, 1820, 5, NULL, NULL),
(20, 'Deep V Neck Dress Women Pleats Split', 2, 850, 1, NULL, NULL),
(21, 'Biker jeans destory', 2, 1680, 6, NULL, NULL),
(22, 'Women heans ripped girl\'s Plus', 2, 1050, 7, NULL, NULL),
(23, 'Yoga set women long sleeves shirt and ankle length slim', 2, 2240, 10, NULL, NULL),
(24, 'PCS Kawaii Icon Acrylic pin Badge Cartoon', 3, 30, 1, NULL, NULL),
(25, 'Stainless bracelet male', 3, 900, 7, NULL, NULL),
(26, 'Drop ship The One Ring All seeing Eyes', 3, 210, 6, NULL, NULL),
(27, 'Sterling Silver Queen Elsa Ring', 3, 1400, 10, NULL, NULL),
(28, 'Hot Beanie Snowboard Winter hats', 3, 750, 7, NULL, NULL),
(29, 'KOTTDO Reading eyeglasses', 3, 170, 11, NULL, NULL),
(30, 'Mens watches Automatic mechanical watch tourbillo brand LIGE', 3, 4195, 9, NULL, NULL),
(31, 'Retro Bracelets 40cm Leather Bracelet Men', 3, 435, 2, NULL, NULL),
(32, 'Pendant Amethyst magic cube necklace', 3, 1750, 4, NULL, NULL),
(33, 'Pearl Earings brincos 18k Gold Plated Earrings For Women', 3, 190, 8, NULL, NULL),
(34, 'Database Systems A Practical Approach to Design, Implementation, and Management (6th Edition)', 4, 6160, 5, NULL, NULL),
(35, 'Double Down (Diary of a Wimpy Kid #11)', 4, 420, 10, NULL, NULL),
(36, 'Fundamentals of Database Systems (7th Edition)', 4, 5670, 1, NULL, NULL),
(37, 'Ghost (Track)', 4, 350, 9, NULL, NULL),
(38, 'Gordon Ramsay\'s Home Cooking Everything You Need to Know to Make Fabulous Food', 4, 1225, 4, NULL, NULL),
(39, 'Fantastic Beasts and Where to Find Them The Original Screenplay', 4, 525, 3, NULL, NULL),
(40, 'Life of Pi', 4, 315, 2, NULL, NULL),
(41, 'Steve Jobs', 4, 420, 8, NULL, NULL),
(42, 'The Bourne Identity A Novel (Jason Bourne)', 4, 315, 1, NULL, NULL),
(43, 'The Sun Is Also a Star', 4, 400, 3, NULL, NULL),
(44, 'The Throwback Special A Novel', 4, 875, 4, NULL, NULL),
(45, 'Trump The Art of the Deal', 4, 560, 5, NULL, NULL),
(46, 'Joypad Gamepad Controller For Microsoft for Xbox Slim 360 for PC for Windows7', 5, 490, 4, NULL, NULL),
(47, 'AUKEY Quick Charge 2 0 USB Wall Charger 3 Port Smart Fast Turbo Mobile Charger', 5, 1155, 2, NULL, NULL),
(48, 'Beats Solo2 On-Ear Headphones', 5, 7000, 12, NULL, NULL),
(49, 'BlitzWolf VR 3D VR Glasses Box Virtual Reality Headset', 5, 1295, 1, NULL, NULL),
(50, 'iPhone Cable IOS 10 9 USAMS 2 1A Fast Charging 1m 1 5m Flat', 5, 175, 5, NULL, NULL),
(51, 'Waterproof Metal USB Flash Drives 32GB', 5, 600, 9, NULL, NULL),
(52, 'LG Electronics 55LH5750 55 Inch 1080p Smart LED TV (2016 Model)', 5, 17500, 4, NULL, NULL),
(53, 'LD Micro SD Card 32GB Class 10', 5, 1400, 7, NULL, NULL),
(54, 'Mpow Magnetic Earphone 1 Headset Wireless Headphone Sport', 5, 945, 9, NULL, NULL),
(55, 'Xiaomi Mi Band 2 MiBand 2 Wristband ', 5, 1190, 9, NULL, NULL),
(56, 'Professional Wired Gaming Mouse 7 Button 5500 DPI LED Optical USB Gamer Computer Mouse Mice Cable', 5, 350, 4, NULL, NULL),
(57, 'Laser facial packages @ SUMOM Clinic', 6, 9500, 3, NULL, NULL),
(58, 'Too Coo For School Promotion EGG MOUSSE PACK', 6, 1050, 6, NULL, NULL),
(59, 'Watsons Winter Buffet Nov 2016', 6, 1000, 5, NULL, NULL),
(60, 'Mei linda cosmetics', 6, 1000, 4, NULL, NULL),
(61, 'Massage Spa @ Embassy', 6, 259, 7, NULL, NULL),
(62, 'Botox @ Tharatorn Medical Clinic', 6, 8500, 2, NULL, NULL),
(63, 'Supreme cosmetics', 6, 1000, 12, NULL, NULL),
(64, 'Gold Mask @ Doctorgrich Clinic', 6, 30000, 2, NULL, NULL),
(65, 'Lifitng Package @ Avarah Innovation Clinic', 6, 30000, 8, NULL, NULL),
(66, 'Ireland Vacation with Airfare and Car Rental ', 8, 38500, 5, NULL, NULL),
(67, 'Italy Vacation with Airfare from Gate 1 Travel - Venice, Florence, and Rome', 8, 38500, 2, NULL, NULL),
(68, 'Jake Jump Family Pack @ Cartoon Network Amazone Pattaya', 8, 5529, 8, NULL, NULL),
(69, 'South Korea Cheap Flight!!!', 8, 8488, 7, NULL, NULL),
(70, 'Pheasant Run Resort - St. Charles, IL', 8, 2415, 6, NULL, NULL),
(71, 'BKK-IRL Cheap Flight', 8, 17400, 7, NULL, NULL),
(72, 'Banana Beach (One Day Trip)@ Phuket Colorful Trip', 8, 2200, 3, NULL, NULL),
(73, '48 years Bangkok Airway promotion', 8, 1000, 8, NULL, NULL),
(74, 'Tour 3 day 2 night with Hidayah Grand Krabi', 8, 12000, 9, NULL, NULL),
(75, '2 day 1 night @ Lotus Villas & Resort Hua Hin', 8, 8455, 6, NULL, NULL),
(76, '4 Tickets from SFW,SFX and SFC', 9, 800, 8, NULL, NULL),
(77, 'One Month Unlimited Pass at Webster Place Athletic Club', 7, 4025, 9, NULL, NULL),
(78, 'Five Drop-In Fitness Classes or One Month of Unlimited Classes at MaZi Dance Fitness Centre', 7, 3325, 6, NULL, NULL),
(79, 'Lift Ticket with Optional Equipment Rental or a Beginner Package or Tubing at Cascade Mountain', 7, 3465, 7, NULL, NULL),
(80, 'One Week of Unlimited Bikram Yoga Classes or 5 Bikram Yoga Classes at Bikram Yoga River North', 7, 2625, 3, NULL, NULL),
(81, 'Five Saturday Dance-Fitness Classes at Zumba With Jan', 7, 1575, 8, NULL, NULL),
(82, 'High-Intensity Fitness Classes at Fit-Results', 7, 4550, 1, NULL, NULL),
(83, 'Teeth-Whitening Treatment at Smiling Bright', 7, 10500, 2, NULL, NULL),
(84, 'One, Three, or Five Whole-Body Cryotherapy Sessions at Advanced Cryotherapy and Fitness', 7, 12250, 3, NULL, NULL),
(85, 'Reflexology and Foot Massage at Healthy Zu Spa foot massage and relaxation retreat ', 7, 2065, 4, NULL, NULL),
(86, 'Kickboxing Classes at StrikeForce Fitness', 7, 8750, 5, NULL, NULL),
(87, 'Asiatique Brown Fish', 1, 129, 2, NULL, NULL),
(88, 'Buddhi Belly', 1, 170, 6, NULL, NULL),
(89, 'Coffee World', 1, 145, 5, NULL, NULL),
(90, 'Hot Pot Buffet', 1, 319, 5, NULL, NULL),
(91, 'Kanemochi Cafe', 1, 165, 4, NULL, NULL),
(92, 'PizzaCompany Lunch', 1, 200, 3, NULL, NULL),
(93, 'PizzaHut Seafood', 1, 398, 12, NULL, NULL),
(94, 'Squeeze', 1, 105, 4, NULL, NULL),
(95, 'Superb Saturday Buffet', 1, 691, 1, NULL, NULL),
(96, 'Buffet @Majestic Grande Hotel', 1, 800, 2, NULL, NULL),
(97, 'Cat House and Pet Bed', 9, 400, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(10) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productTypeID` int(10) NOT NULL,
  `productPrice` float NOT NULL,
  `promotionID` int(10) DEFAULT NULL,
  `shortDescription` varchar(500) NOT NULL,
  `longDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productTypeID`, `productPrice`, `promotionID`, `shortDescription`, `longDescription`) VALUES
(1, 'Wholesale Price Cat House and Pet Bed', 9, 400, 1, '', ''),
(6, 'Asiatique Brown Fish', 1, 129, NULL, '', ''),
(7, 'Buddhi Belly', 1, 170, NULL, '', ''),
(8, 'Coffee World', 1, 145, NULL, '', ''),
(9, 'Hot Pot Buffet', 1, 319, NULL, '', ''),
(10, 'Kanemochi Cafe', 1, 165, NULL, '', ''),
(11, 'PizzaCompany Lunch', 1, 200, NULL, '', ''),
(12, 'PizzaHut Seafood', 1, 398, NULL, '', ''),
(13, ' Squeeze', 1, 105, NULL, '', ''),
(14, 'Superb Saturday Buffet', 1, 691, NULL, '', ''),
(15, 'Buffet @Majestic Grande Hotel', 1, 800, NULL, '', ''),
(16, 'Fluffy Bear Cat Paw Glove', 2, 110, NULL, '', ''),
(17, 'Men\'s hoodie tracksuit', 2, 630, NULL, '', ''),
(18, 'Vintage long sleeve flower floral black dress', 2, 1015, NULL, '', ''),
(19, 'Arbitmatch Female Warm Winter jacker women', 2, 1820, NULL, '', ''),
(20, 'Deep V Neck Dress Women Pleats Split', 2, 850, NULL, '', ''),
(21, 'Biker jeans destory', 2, 1680, NULL, '', ''),
(22, 'Women heans ripped girl\'s Plus', 2, 1050, NULL, '', ''),
(23, 'Yoga set women long sleeves shirt and ankle length slim', 2, 2240, NULL, '', ''),
(24, 'PCS Kawaii Icon Acrylic pin Badge Cartoon', 3, 30, NULL, '', ''),
(25, 'Stainless bracelet male', 3, 900, NULL, '', ''),
(26, 'Drop ship The One Ring All seeing Eyes', 3, 210, NULL, '', ''),
(27, 'Sterling Silver Queen Elsa Ring', 3, 1400, NULL, '', ''),
(28, 'Hot Beanie Snowboard Winter hats', 3, 750, NULL, '', ''),
(29, 'KOTTDO Reading eyeglasses', 3, 170, NULL, '', ''),
(30, 'Mens watches Automatic mechanical watch tourbillo brand LIGE', 3, 4195, NULL, '', ''),
(31, 'Retro Bracelets 40cm Leather Bracelet Men', 3, 435, NULL, '', ''),
(32, 'Pendant Amethyst magic cube necklace', 3, 1750, NULL, '', ''),
(33, 'Pearl Earings brincos 18k Gold Plated Earrings For Women', 3, 190, NULL, '', ''),
(34, 'Database Systems A Practical Approach to Design, Implementation, and Management (6th Edition)', 4, 6160, NULL, '', ''),
(35, 'Double Down (Diary of a Wimpy Kid #11)', 4, 420, NULL, '', ''),
(36, 'Fundamentals of Database Systems (7th Edition)', 4, 5670, NULL, '', ''),
(37, 'Ghost (Track)', 4, 350, NULL, '', ''),
(38, 'Gordon Ramsay\'s Home Cooking Everything You Need to Know to Make Fabulous Food', 4, 1225, NULL, '', ''),
(39, 'Fantastic Beasts and Where to Find Them The Original Screenplay', 4, 525, NULL, '', ''),
(40, 'Life of Pi', 4, 315, NULL, '', ''),
(41, 'Steve Jobs', 4, 420, NULL, '', ''),
(42, 'The Bourne Identity A Novel (Jason Bourne)', 4, 315, NULL, '', ''),
(43, 'The Sun Is Also a Star', 4, 400, NULL, '', ''),
(44, 'The Throwback Special A Novel', 4, 875, NULL, '', ''),
(45, 'Trump The Art of the Deal', 4, 560, NULL, '', ''),
(46, 'Joypad Gamepad Controller For Microsoft for Xbox Slim 360 for PC for Windows7', 5, 490, NULL, '', ''),
(47, 'AUKEY Quick Charge 2 0 USB Wall Charger 3 Port Smart Fast Turbo Mobile Charger', 5, 1155, NULL, '', ''),
(48, 'Beats Solo2 On-Ear Headphones', 5, 7000, NULL, '', ''),
(49, 'BlitzWolf VR 3D VR Glasses Box Virtual Reality Headset', 5, 1295, NULL, '', ''),
(50, 'iPhone Cable IOS 10 9 USAMS 2 1A Fast Charging 1m 1 5m Flat', 5, 175, NULL, '', ''),
(51, 'Waterproof Metal USB Flash Drives 32GB', 5, 600, NULL, '', ''),
(52, 'LG Electronics 55LH5750 55 Inch 1080p Smart LED TV (2016 Model)', 5, 17500, NULL, '', ''),
(53, 'LD Micro SD Card 32GB Class 10', 5, 1400, NULL, '', ''),
(54, 'Mpow Magnetic Earphone 1 Headset Wireless Headphone Sport', 5, 945, NULL, '', ''),
(55, 'Xiaomi Mi Band 2 MiBand 2 Wristband ', 5, 1190, NULL, '', ''),
(56, 'Professional Wired Gaming Mouse 7 Button 5500 DPI LED Optical USB Gamer Computer Mouse Mice Cable', 5, 350, NULL, '', ''),
(57, 'Laser facial packages @ SUMOM Clinic', 6, 9500, NULL, '', ''),
(58, 'Too Coo For School Promotion EGG MOUSSE PACK', 6, 1050, NULL, '', ''),
(59, 'Watsons Winter Buffet Nov 2016', 6, 1000, NULL, '', ''),
(60, 'Mei linda cosmetics', 6, 1000, NULL, '', ''),
(61, 'Massage Spa @ Embassy', 6, 259, NULL, '', ''),
(62, 'Botox @ Tharatorn Medical Clinic', 6, 8500, NULL, '', ''),
(63, 'Supreme cosmetics', 6, 1000, NULL, '', ''),
(64, 'Gold Mask @ Doctorgrich Clinic', 6, 30000, NULL, '', ''),
(65, 'Lifitng Package @ Avarah Innovation Clinic', 6, 30000, NULL, '', ''),
(66, 'Ireland Vacation with Airfare and Car Rental ', 8, 38500, NULL, '', ''),
(67, 'Italy Vacation with Airfare from Gate 1 Travel - Venice, Florence, and Rome', 8, 38500, NULL, '', ''),
(68, 'Jake Jump Family Pack @ Cartoon Network Amazone Pattaya', 8, 5529, NULL, '', ''),
(69, 'South Korea Cheap Flight!!!', 8, 8488, NULL, '', ''),
(70, 'Pheasant Run Resort - St. Charles, IL', 8, 2415, NULL, '', ''),
(71, 'BKK-IRL Cheap Flight', 8, 17400, NULL, '', ''),
(72, 'Banana Beach (One Day Trip)@ Phuket Colorful Trip', 8, 2200, NULL, '', ''),
(73, '48 years Bangkok Airway promotion', 8, 1000, NULL, '', ''),
(74, 'Tour 3 day 2 night with Hidayah Grand Krabi', 8, 12000, NULL, '', ''),
(75, '2 day 1 night @ Lotus Villas & Resort Hua Hin', 8, 8455, NULL, '', ''),
(76, '4 Tickets from SFW,SFX and SFC', 9, 800, NULL, '', ''),
(77, 'One Month Unlimited Pass at Webster Place Athletic Club', 7, 4025, NULL, '', ''),
(78, 'Five Drop-In Fitness Classes or One Month of Unlimited Classes at MaZi Dance Fitness Centre', 7, 3325, NULL, '', ''),
(79, 'Lift Ticket with Optional Equipment Rental or a Beginner Package or Tubing at Cascade Mountain', 7, 3465, NULL, '', ''),
(80, 'One Week of Unlimited Bikram Yoga Classes or 5 Bikram Yoga Classes at Bikram Yoga River North', 7, 2625, NULL, '', ''),
(81, 'Five Saturday Dance-Fitness Classes at Zumba With Jan', 7, 1575, NULL, '', ''),
(82, 'High-Intensity Fitness Classes at Fit-Results', 7, 4550, NULL, '', ''),
(83, 'Teeth-Whitening Treatment at Smiling Bright', 7, 10500, NULL, '', ''),
(84, 'One, Three, or Five Whole-Body Cryotherapy Sessions at Advanced Cryotherapy and Fitness', 7, 12250, NULL, '', ''),
(85, 'Reflexology and Foot Massage at Healthy Zu Spa foot massage and relaxation retreat ', 7, 2065, NULL, '', ''),
(86, 'Kickboxing Classes at StrikeForce Fitness', 7, 8750, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `productorder`
--

CREATE TABLE `productorder` (
  `productOrderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `totalItem` int(11) NOT NULL,
  `totalPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `productTypeID` int(10) NOT NULL,
  `productTypeName` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`productTypeID`, `productTypeName`) VALUES
(1, 'Food & Drinks\r\n'),
(2, 'Fashion\r\n'),
(3, 'Accessories\r\n'),
(4, 'Books\r\n'),
(5, 'Electronics\r\n'),
(6, 'Beauty & spa\r\n'),
(7, 'Health & Fitness\r\n'),
(8, 'Travel\r\n'),
(9, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `productz`
--

CREATE TABLE `productz` (
  `productID` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productTypeID` int(10) NOT NULL,
  `productPrice` float NOT NULL,
  `promotionID` int(10) DEFAULT NULL,
  `shortDescription` varchar(200) NOT NULL,
  `longDescription` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productz`
--

INSERT INTO `productz` (`productID`, `productName`, `productTypeID`, `productPrice`, `promotionID`, `shortDescription`, `longDescription`) VALUES
(1, 'BaBylissPRO Nano Titanium Dryer', 5, 66465, NULL, 'A stellar combination of power, speed and design offers both heavy-duty 2000-watt performance and lightweight ergonomic handling', NULL),
(2, 'Bluetooth ver 4.0 Stereo Headphones With Microphone', 5, 910, NULL, 'Colorful Design Multi-Function Stereo Sound Collapsible Wireless Bluetooth Headphones with Memory Card Support. ', NULL),
(3, 'Columbia Men\'s Watertight II Front-Zip Hooded Rain Jacket', 2, 2660, NULL, 'Top-notch rain protection in an ultralight package-this packable rain jacket features full seam sealing', NULL),
(4, 'Dell AW15R3-10881SLV Laptop', 5, 86450, NULL, 'With the unstoppable mobility and awesomely intense graphics, the Alienware 15 gives you the power to take the game further than ever. ', NULL),
(5, 'Emporio Armani Dress Watch', 3, 7875, NULL, 'Black ion-plated stainless steel case with a black leather (interchangeable striped canvas) strap. Fixed black ion-plated bezel. Black dial with grey hands and index hour markers.', NULL),
(6, 'Fizzics Revolutionary Beer System, One Size, Black and Silver', 5, 6965, NULL, 'The Fizzics System is the world’s first portable Draft Beer System that improves the flavor and taste of ordinary canned, bottled and growler beer. ', NULL),
(7, 'Herschel Supply Co. Men\'s Roy Quilted Bifold Wallet', 2, 945, NULL, 'The classic bi-fold quilted Roy wallet offers a currency sleeve, multiple card slots and additional storage with a distinctive diamond stitched exterior.', NULL),
(8, 'Jan Marini Skin Research Holiday Exfoliator, Chocolate Truffle, 2 fl. oz', 3, 2450, NULL, 'Uniquely designed microscopic particles gently exfoliate while releasing a skin protectant', NULL),
(9, 'NETGEAR Nighthawk X10 – AD7200 802.11acad Quad-Stream MU-MIMO WiFi', 5, 17465, NULL, 'The Nighthawk X10 AD7200 Smart WiFi Router is industry’s fastest router for media streaming with Plex media server. ', NULL),
(10, 'Oral-B Black Pro 1000 Power Rechargeable Electric Toothbrush Powered by', 5, 2450, NULL, 'Oral-b black 1000 rechargeable electric toothbrush provides a clinically proven superior clean vs a regular manual toothbrush. ', NULL),
(11, 'Philips Norelco Electric Shaver 8900, Wet & Dry Edition S895091', 5, 3990, NULL, 'This wet or dry electric shaver is designed to contour to the curves of your face and cut closer to the skin. ', NULL),
(12, 'SUNVP Men\'s Hats Warm Knitted Cap Technician Fine Gauge Beanie Warm Knitted Cap', 2, 1750, NULL, 'Warm Knitted Cap Technician Fine Gauge Beanie Warm Knitted Cap\r\nComfort, Warmth & Style Guaranteed \r\n', NULL),
(13, 'Tamarac by Slippers International Men\'s Flynn Slippers', 2, 1400, NULL, 'Men\'s canoe moccasin-style slipper featuring cowsuede leather upper with whipstitched toe and soft berber lining.', NULL),
(14, 'Trimfit Boys Dragon Slippers Moccasin (ToddlerLittle KidBig Kid)', 3, 875, NULL, 'Vibrant, comfortable 3d fire breathing dragon slipper by Trimfit, with elastic collar to ensure best possible fit. ', NULL),
(15, 'Yuneec Typhoon H Pro with Intel RealSense Technology', 5, 45500, NULL, 'The Typhoon H is an advanced aerial photography and videography platform. ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotionID` int(10) NOT NULL,
  `percentDiscount` decimal(10,2) DEFAULT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `promotionName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotionID`, `percentDiscount`, `startDate`, `endDate`, `promotionName`) VALUES
(1, '5.00', '2016-11-11', '2017-11-12', '5% Discount'),
(2, '10.00', '2016-11-23', '2017-11-24', '10% Discount'),
(3, '15.00', '2016-11-23', '2017-11-24', '15% Discount'),
(4, '20.00', '2016-11-23', '2017-11-24', '20% Discount'),
(5, '25.00', '2016-11-23', '2017-11-24', '25% Discount'),
(6, '30.00', '2016-11-23', '2017-11-24', '30% Discount'),
(7, '35.00', '2016-11-23', '2017-11-24', '35% Discount'),
(8, '45.00', '2016-11-23', '2017-11-24', '45% Discount'),
(9, '50.00', '2016-11-23', '2017-11-24', '50% Discount'),
(10, '60.00', '2016-11-23', '2017-11-24', '60% Discount'),
(11, '70.00', '2016-11-23', '2017-11-24', '70% Discount'),
(12, NULL, '2016-11-23', '2017-11-23', 'BUY 1 GETt 1 FREE');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shippingID` int(10) NOT NULL,
  `methodID` int(10) NOT NULL,
  `shippingDate` date NOT NULL,
  `shippingPrice` float NOT NULL,
  `guaranteeeDate` date NOT NULL,
  `addressID` int(10) NOT NULL,
  `orderID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shippingmethod`
--

CREATE TABLE `shippingmethod` (
  `shippingMethodID` int(10) NOT NULL,
  `methodName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shippingmethod`
--

INSERT INTO `shippingmethod` (`shippingMethodID`, `methodName`) VALUES
(1, 'Thailand Post\r\n'),
(2, 'EMS'),
(3, 'Kerry Express\r\n'),
(4, 'FedEx'),
(5, 'UPS');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `cartID` int(10) NOT NULL,
  `cID` int(10) NOT NULL,
  `productID` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `isActive` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`cartID`, `cID`, `productID`, `amount`, `isActive`) VALUES
(2, 1, 1, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`orderStatusType`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`paymentMethodID`);

--
-- Indexes for table `pp`
--
ALTER TABLE `pp`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `productorder`
--
ALTER TABLE `productorder`
  ADD PRIMARY KEY (`productOrderID`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`productTypeID`);

--
-- Indexes for table `productz`
--
ALTER TABLE `productz`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotionID`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shippingID`);

--
-- Indexes for table `shippingmethod`
--
ALTER TABLE `shippingmethod`
  ADD PRIMARY KEY (`shippingMethodID`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`cartID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `orderStatusType` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `paymentMethodID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pp`
--
ALTER TABLE `pp`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `productorder`
--
ALTER TABLE `productorder`
  MODIFY `productOrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `productTypeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `productz`
--
ALTER TABLE `productz`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shippingID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippingmethod`
--
ALTER TABLE `shippingmethod`
  MODIFY `shippingMethodID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `cartID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
