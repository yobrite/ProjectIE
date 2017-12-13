-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 04:34 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(3, 'Columbia Men''s Watertight II Front-Zip Hooded Rain Jacket', 2, 2660, NULL, 'Top-notch rain protection in an ultralight package-this packable rain jacket features full seam sealing', NULL),
(4, 'Dell AW15R3-10881SLV Laptop', 5, 86450, NULL, 'With the unstoppable mobility and awesomely intense graphics, the Alienware 15 gives you the power to take the game further than ever. ', NULL),
(5, 'Emporio Armani Dress Watch', 3, 7875, NULL, 'Black ion-plated stainless steel case with a black leather (interchangeable striped canvas) strap. Fixed black ion-plated bezel. Black dial with grey hands and index hour markers.', NULL),
(6, 'Fizzics Revolutionary Beer System, One Size, Black and Silver', 5, 6965, NULL, 'The Fizzics System is the world’s first portable Draft Beer System that improves the flavor and taste of ordinary canned, bottled and growler beer. ', NULL),
(7, 'Herschel Supply Co. Men''s Roy Quilted Bifold Wallet', 2, 945, NULL, 'The classic bi-fold quilted Roy wallet offers a currency sleeve, multiple card slots and additional storage with a distinctive diamond stitched exterior.', NULL),
(8, 'Jan Marini Skin Research Holiday Exfoliator, Chocolate Truffle, 2 fl. oz', 3, 2450, NULL, 'Uniquely designed microscopic particles gently exfoliate while releasing a skin protectant', NULL),
(9, 'NETGEAR Nighthawk X10 – AD7200 802.11acad Quad-Stream MU-MIMO WiFi', 5, 17465, NULL, 'The Nighthawk X10 AD7200 Smart WiFi Router is industry’s fastest router for media streaming with Plex media server. ', NULL),
(10, 'Oral-B Black Pro 1000 Power Rechargeable Electric Toothbrush Powered by', 5, 2450, NULL, 'Oral-b black 1000 rechargeable electric toothbrush provides a clinically proven superior clean vs a regular manual toothbrush. ', NULL),
(11, 'Philips Norelco Electric Shaver 8900, Wet & Dry Edition S895091', 5, 3990, NULL, 'This wet or dry electric shaver is designed to contour to the curves of your face and cut closer to the skin. ', NULL),
(12, 'SUNVP Men''s Hats Warm Knitted Cap Technician Fine Gauge Beanie Warm Knitted Cap', 2, 1750, NULL, 'Warm Knitted Cap Technician Fine Gauge Beanie Warm Knitted Cap\r\nComfort, Warmth & Style Guaranteed \r\n', NULL),
(13, 'Tamarac by Slippers International Men''s Flynn Slippers', 2, 1400, NULL, 'Men''s canoe moccasin-style slipper featuring cowsuede leather upper with whipstitched toe and soft berber lining.', NULL),
(14, 'Trimfit Boys Dragon Slippers Moccasin (ToddlerLittle KidBig Kid)', 3, 875, NULL, 'Vibrant, comfortable 3d fire breathing dragon slipper by Trimfit, with elastic collar to ensure best possible fit. ', NULL),
(15, 'Yuneec Typhoon H Pro with Intel RealSense Technology', 5, 45500, NULL, 'The Typhoon H is an advanced aerial photography and videography platform. ', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productz`
--
ALTER TABLE `productz`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productz`
--
ALTER TABLE `productz`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
