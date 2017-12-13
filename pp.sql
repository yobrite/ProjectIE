-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2016 at 12:53 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

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
(15, 'Yuneec Typhoon H Pro with Intel RealSense Technology', 5, 45500, NULL, 'The Typhoon H is an advanced aerial photography and videography platform. ', NULL),
(16, 'Fluffy Bear Cat Paw Glove', 2, 110, NULL, NULL, NULL),
(17, 'Men''s hoodie tracksuit', 2, 630, NULL, NULL, NULL),
(18, 'Vintage long sleeve flower floral black dress', 2, 1015, NULL, NULL, NULL),
(19, 'Arbitmatch Female Warm Winter jacker women', 2, 1820, NULL, NULL, NULL),
(20, 'Deep V Neck Dress Women Pleats Split', 2, 850, NULL, NULL, NULL),
(21, 'Biker jeans destory', 2, 1680, NULL, NULL, NULL),
(22, 'Women heans ripped girl''s Plus', 2, 1050, NULL, NULL, NULL),
(23, 'Yoga set women long sleeves shirt and ankle length slim', 2, 2240, NULL, NULL, NULL),
(24, 'PCS Kawaii Icon Acrylic pin Badge Cartoon', 3, 30, NULL, NULL, NULL),
(25, 'Stainless bracelet male', 3, 900, NULL, NULL, NULL),
(26, 'Drop ship The One Ring All seeing Eyes', 3, 210, NULL, NULL, NULL),
(27, 'Sterling Silver Queen Elsa Ring', 3, 1400, NULL, NULL, NULL),
(28, 'Hot Beanie Snowboard Winter hats', 3, 750, NULL, NULL, NULL),
(29, 'KOTTDO Reading eyeglasses', 3, 170, NULL, NULL, NULL),
(30, 'Mens watches Automatic mechanical watch tourbillo brand LIGE', 3, 4195, NULL, NULL, NULL),
(31, 'Retro Bracelets 40cm Leather Bracelet Men', 3, 435, NULL, NULL, NULL),
(32, 'Pendant Amethyst magic cube necklace', 3, 1750, NULL, NULL, NULL),
(33, 'Pearl Earings brincos 18k Gold Plated Earrings For Women', 3, 190, NULL, NULL, NULL),
(34, 'Database Systems A Practical Approach to Design, Implementation, and Management (6th Edition)', 4, 6160, NULL, NULL, NULL),
(35, 'Double Down (Diary of a Wimpy Kid #11)', 4, 420, NULL, NULL, NULL),
(36, 'Fundamentals of Database Systems (7th Edition)', 4, 5670, NULL, NULL, NULL),
(37, 'Ghost (Track)', 4, 350, NULL, NULL, NULL),
(38, 'Gordon Ramsay''s Home Cooking Everything You Need to Know to Make Fabulous Food', 4, 1225, NULL, NULL, NULL),
(39, 'Fantastic Beasts and Where to Find Them The Original Screenplay', 4, 525, NULL, NULL, NULL),
(40, 'Life of Pi', 4, 315, NULL, NULL, NULL),
(41, 'Steve Jobs', 4, 420, NULL, NULL, NULL),
(42, 'The Bourne Identity A Novel (Jason Bourne)', 4, 315, NULL, NULL, NULL),
(43, 'The Sun Is Also a Star', 4, 400, NULL, NULL, NULL),
(44, 'The Throwback Special A Novel', 4, 875, NULL, NULL, NULL),
(45, 'Trump The Art of the Deal', 4, 560, NULL, NULL, NULL),
(46, 'Joypad Gamepad Controller For Microsoft for Xbox Slim 360 for PC for Windows7', 5, 490, NULL, NULL, NULL),
(47, 'AUKEY Quick Charge 2 0 USB Wall Charger 3 Port Smart Fast Turbo Mobile Charger', 5, 1155, NULL, NULL, NULL),
(48, 'Beats Solo2 On-Ear Headphones', 5, 7000, NULL, NULL, NULL),
(49, 'BlitzWolf VR 3D VR Glasses Box Virtual Reality Headset', 5, 1295, NULL, NULL, NULL),
(50, 'iPhone Cable IOS 10 9 USAMS 2 1A Fast Charging 1m 1 5m Flat', 5, 175, NULL, NULL, NULL),
(51, 'Waterproof Metal USB Flash Drives 32GB', 5, 600, NULL, NULL, NULL),
(52, 'LG Electronics 55LH5750 55 Inch 1080p Smart LED TV (2016 Model)', 5, 17500, NULL, NULL, NULL),
(53, 'LD Micro SD Card 32GB Class 10', 5, 1400, NULL, NULL, NULL),
(54, 'Mpow Magnetic Earphone 1 Headset Wireless Headphone Sport', 5, 945, NULL, NULL, NULL),
(55, 'Xiaomi Mi Band 2 MiBand 2 Wristband ', 5, 1190, NULL, NULL, NULL),
(56, 'Professional Wired Gaming Mouse 7 Button 5500 DPI LED Optical USB Gamer Computer Mouse Mice Cable', 5, 350, NULL, NULL, NULL),
(57, 'Laser facial packages @ SUMOM Clinic', 6, 9500, NULL, NULL, NULL),
(58, 'Too Coo For School Promotion EGG MOUSSE PACK', 6, 1050, NULL, NULL, NULL),
(59, 'Watsons Winter Buffet Nov 2016', 6, 1000, NULL, NULL, NULL),
(60, 'Mei linda cosmetics', 6, 1000, NULL, NULL, NULL),
(61, 'Massage Spa @ Embassy', 6, 259, NULL, NULL, NULL),
(62, 'Botox @ Tharatorn Medical Clinic', 6, 8500, NULL, NULL, NULL),
(63, 'Supreme cosmetics', 6, 1000, NULL, NULL, NULL),
(64, 'Gold Mask @ Doctorgrich Clinic', 6, 30000, NULL, NULL, NULL),
(65, 'Lifitng Package @ Avarah Innovation Clinic', 6, 30000, NULL, NULL, NULL),
(66, 'Ireland Vacation with Airfare and Car Rental ', 8, 38500, NULL, NULL, NULL),
(67, 'Italy Vacation with Airfare from Gate 1 Travel - Venice, Florence, and Rome', 8, 38500, NULL, NULL, NULL),
(68, 'Jake Jump Family Pack @ Cartoon Network Amazone Pattaya', 8, 5529, NULL, NULL, NULL),
(69, 'South Korea Cheap Flight!!!', 8, 8488, NULL, NULL, NULL),
(70, 'Pheasant Run Resort - St. Charles, IL', 8, 2415, NULL, NULL, NULL),
(71, 'BKK-IRL Cheap Flight', 8, 17400, NULL, NULL, NULL),
(72, 'Banana Beach (One Day Trip)@ Phuket Colorful Trip', 8, 2200, NULL, NULL, NULL),
(73, '48 years Bangkok Airway promotion', 8, 1000, NULL, NULL, NULL),
(74, 'Tour 3 day 2 night with Hidayah Grand Krabi', 8, 12000, NULL, NULL, NULL),
(75, '2 day 1 night @ Lotus Villas & Resort Hua Hin', 8, 8455, NULL, NULL, NULL),
(76, '4 Tickets from SFW,SFX and SFC', 9, 800, NULL, NULL, NULL),
(77, 'One Month Unlimited Pass at Webster Place Athletic Club', 7, 4025, NULL, NULL, NULL),
(78, 'Five Drop-In Fitness Classes or One Month of Unlimited Classes at MaZi Dance Fitness Centre', 7, 3325, NULL, NULL, NULL),
(79, 'Lift Ticket with Optional Equipment Rental or a Beginner Package or Tubing at Cascade Mountain', 7, 3465, NULL, NULL, NULL),
(80, 'One Week of Unlimited Bikram Yoga Classes or 5 Bikram Yoga Classes at Bikram Yoga River North', 7, 2625, NULL, NULL, NULL),
(81, 'Five Saturday Dance-Fitness Classes at Zumba With Jan', 7, 1575, NULL, NULL, NULL),
(82, 'High-Intensity Fitness Classes at Fit-Results', 7, 4550, NULL, NULL, NULL),
(83, 'Teeth-Whitening Treatment at Smiling Bright', 7, 10500, NULL, NULL, NULL),
(84, 'One, Three, or Five Whole-Body Cryotherapy Sessions at Advanced Cryotherapy and Fitness', 7, 12250, NULL, NULL, NULL),
(85, 'Reflexology and Foot Massage at Healthy Zu Spa foot massage and relaxation retreat ', 7, 2065, NULL, NULL, NULL),
(86, 'Kickboxing Classes at StrikeForce Fitness', 7, 8750, NULL, NULL, NULL),
(87, 'Asiatique Brown Fish', 1, 129, NULL, NULL, NULL),
(88, 'Buddhi Belly', 1, 170, NULL, NULL, NULL),
(89, 'Coffee World', 1, 145, NULL, NULL, NULL),
(90, 'Hot Pot Buffet', 1, 319, NULL, NULL, NULL),
(91, 'Kanemochi Cafe', 1, 165, NULL, NULL, NULL),
(92, 'PizzaCompany Lunch', 1, 200, NULL, NULL, NULL),
(93, 'PizzaHut Seafood', 1, 398, NULL, NULL, NULL),
(94, 'Squeeze', 1, 105, NULL, NULL, NULL),
(95, 'Superb Saturday Buffet', 1, 691, NULL, NULL, NULL),
(96, 'Buffet @Majestic Grande Hotel', 1, 800, NULL, NULL, NULL),
(97, 'Cat House and Pet Bed', 9, 400, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pp`
--
ALTER TABLE `pp`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pp`
--
ALTER TABLE `pp`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
