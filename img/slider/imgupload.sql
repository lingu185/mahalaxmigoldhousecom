-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2022 at 09:38 AM
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
-- Database: `imgupload`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangles`
--

CREATE TABLE `bangles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chain`
--

CREATE TABLE `chain` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chain`
--

INSERT INTO `chain` (`id`, `title`, `label`, `catagory`, `url`, `time`) VALUES
(1, 'Necklaces', 'This necklaces is the one of best design in the world. This haaram makes an women beauty.', 'necklaces', 'img/newarrival/23-10-2020-1603432918.jpg', '2022-08-21 04:47:36'),
(2, 'Bangles\r\n', 'The Bangles are most probably use for wedding purpose and this is the best design made by us which is called most beautiful.\r\n\r\n', 'bangles', 'img/newarrival/23-10-2020-1603433386.jpg', '2022-08-21 04:31:44'),
(4, 'Rings\r\n', 'Man Ring\r\n\r\n', 'Rings Mens', 'img/newarrival/07-11-2020-1604790503.jpg', '2022-08-21 04:34:11'),
(5, 'Chains\r\n', 'Round Pendant Designed Haaram', 'chains', 'img/newarrival/23-10-2020-1603433591.jpg', '2022-08-21 05:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `conatct`
--

CREATE TABLE `conatct` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conatct`
--

INSERT INTO `conatct` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Mike Oldridge\r\n', 'no-replyFlureli@gmail.com', '87915714887', 'Greetings \r\n \r\nI have just analyzed  mahalaxmigoldhouse.com for the ranking keywords and saw that your website could use an upgrade. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing month'),
(2, 'ggg', 'smiqhgen@gmail.com', 'jjj', 'jjjj'),
(3, 'ggg', 'smiqhgenkk@gmail.com', 'jjj', 'jjjj'),
(4, 'Gorilla George', 'gorillamarketingpromo@gmail.com', '87699362851', 'Hello \r\n \r\nDo you want more sales for your business? \r\n \r\nThen you might want to get an Animated Explainer Video for your website, social media and to email to prospects. \r\n \r\nAnd today, for the first 20 clients, we will slash our price from $597 to just '),
(5, 'Anthonytwepe', 'no.reply.feedbackform@gmail.com', '81972391143', 'GÐ¾Ð¾d dÐ°y!  mahalaxmigoldhouse.com \r\n \r\nDid yÐ¾u knÐ¾w thÐ°t it is pÐ¾ssiblÐµ tÐ¾ sÐµnd prÐ¾pÐ¾sÐ°l   lÐµgÐ°lly? \r\nWÐµ suggÐµsting Ð° nÐµw lÐµgitimÐ°tÐµ mÐµthÐ¾d Ð¾f sÐµnding lÐµttÐµr thrÐ¾ugh ÑÐ¾ntÐ°Ñt fÐ¾rms. SuÑh fÐ¾rms Ð°rÐµ lÐ¾ÑÐ°tÐµd Ð¾n mÐ°ny'),
(6, 'Mike Backer\r\n', 'no-replyFlureli@gmail.com', '86633454825', 'Hi there \r\n \r\nI Just checked your mahalaxmigoldhouse.com ranks and saw that your site is trending down for some time. \r\n \r\nIf you are looking for a trend reversal, we have the right solution for you \r\n \r\nWe are offering affordable Content Marketing plans '),
(7, 'Vernonfoemy', 'reports@projects202x.com', '85284717338', 'Great domain sale! Seller must liquidate ! \r\nBuy for 50%-15 % of Go Daddy?s appraisal values. \r\nGeneric .com, including crypto-domains, and  4 -5 character .com domains! \r\nThe sale starts now with prices set at 50% of the Go Daddy?s appraisal  values. \r\nE');

-- --------------------------------------------------------

--
-- Table structure for table `homeimage`
--

CREATE TABLE `homeimage` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeimage`
--

INSERT INTO `homeimage` (`id`, `title`, `label`, `url`, `time`) VALUES
(1, 'Bangles', 'details.php?updateid=bangles', 'img/homepageImage/1.jpg', '2022-08-20 06:15:00'),
(2, 'Rings', 'details.php?updateid=rings', 'img/homepageImage/4.jpg', '2022-08-20 06:15:30'),
(3, 'Earrings', 'details.php?updateid=earrings', 'img/homepageImage/3.jpg', '2022-08-20 06:15:49'),
(4, 'Chains', 'details.php?updateid=chains', 'img/homepageImage/2.jpg', '2022-08-20 06:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `url`, `created`) VALUES
(5, 'hy', 'img/slider/s-1-1.jpg', '2022-10-23 05:51:58'),
(6, 'q4121', 'img/slider/s-1-2.jpg', '2022-10-23 05:52:48'),
(9, 'ewew', 'img/slider/slide3.png', '2022-10-23 06:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `productupload`
--

CREATE TABLE `productupload` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `label` varchar(500) NOT NULL,
  `offer` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productupload`
--

INSERT INTO `productupload` (`id`, `name`, `catagory`, `label`, `offer`, `image`, `time`) VALUES
(1, 'Bangles', 'bangles', 'The Bangles are most probably use for wedding purpose and this is the best design made by us which is called most beautiful.', '', 'img/product/23-11-2020-1606137259.jpg', '2022-08-21 05:58:22'),
(2, 'Chains', 'chains', '\r\nA chain is an article of jewellery that is worn around the neck. chain may have been one of the earliest types of adornment worn by humans. They often serve ceremonial, religious, magical, or funerary purposes and are also used as symbols of wealth and status.\r\n\r\n', '', 'img/product/23-10-2020-1603460179.jpg', '2022-09-03 05:31:57'),
(3, 'Necklaces\r\n', 'necklaces', 'Gold Necklace\r\n\r\n', '', 'img/product/31-12-2020-1609385148.jpg', '2022-09-03 05:32:05'),
(4, 'Earrings', 'earrings', 'Pearl Detailed Jhumkas\r\n\r\n', '', 'img/product/31-12-2020-1609386613.jpg', '2022-09-03 05:32:08'),
(5, 'Chains\r\n', 'chains', 'Gold Beaded Chain\r\n', '', 'img/product/31-12-2020-1609385715.jpg', '2022-09-03 05:32:11'),
(6, 'Earrings', 'earrings', 'This earings is the one of best design in the world made by Mahaluxmi Goldhouse. This earrings makes a women beauty.\r\n\r\n', '', 'img/product/23-10-2020-1603434094.jpg', '2022-08-27 03:06:24'),
(7, 'Earrings\r\n', 'earrings', 'Gold Jhumkas\r\n\r\n', '', 'img/product/31-12-2020-1609385954.jpg', '2022-09-03 05:32:13'),
(8, 'Earrings\r\n', 'earrings', 'Simple Gold Jhumkas\r\n\r\n', '', 'img/product/31-12-2020-1609386397.jpg', '2022-09-03 05:32:16'),
(9, 'Gold Bars', 'gold-bars', 'Mahaluxmi Gold house gold bar, also called gold bullion or a gold ingot, is a quantity of refined metallic gold of any shape that is made by a bar producer meeting standard conditions of manufacture, labeling, and record keeping. Larger gold bars that are produced by pouring the molten metal into molds are called ingots.\r\n\r\n', '', 'img/product/23-10-2020-1603454911.jpg', '2022-08-28 08:57:54'),
(11, 'Chains', 'chains', 'Black Beaded Chain with Red Flower Accents\r\n\r\n', '', 'img/product/31-12-2020-1609385795-min.jpg', '2022-09-03 05:32:19'),
(12, 'Rings', 'mens-rings', 'Man Ring', '', 'img/product/07-11-2020-1604790503.jpg', '2022-08-28 08:58:23'),
(13, 'Haaram', 'harram', 'A haram is an article of jewellery that is worn around the neck. haaram may have been one of the earliest types of adornment worn by humans. They often serve ceremonial, religious, magical, or funerary purposes and are also used as symbols of wealth and s', '', 'img/product/22-10-2020-1603386308.jpg', '2022-08-27 06:09:20'),
(14, 'Rings', 'rings', 'Sapphire Ring', '', 'img/product/21-11-2020-1605996736.jpg', '2022-08-26 07:41:28'),
(15, 'Rings', 'rings', 'The ring is most probably use for wedding purpose and this is the best design made by us which is called most beautiful.', '', 'img/product/23-10-2020-1603433225.jpg', '2022-08-26 07:41:13'),
(16, 'Chains', 'chains', 'A chain is an article of jewellery that is worn around the neck. chain may have been one of the earliest types of adornment worn by humans. They often serve ceremonial, religious, magical, or funerary purposes and are also used as symbols of wealth and status.', '', 'img/product/23-10-2020-1603433665.jpg', '2022-08-26 07:40:10'),
(17, 'Chains', 'chains', 'Pearl Beaded Chain', '', 'img/product/31-12-2020-1609385654-min.jpg', '2022-08-26 07:22:21'),
(18, 'Earrings', 'earrings', 'Multiple Dangly Earrings', '', 'img/product/31-12-2020-1609386510-min.jpg', '2022-08-27 07:07:08'),
(19, 'Earrings', 'earrings', 'Red and White Stoned Jhumkas', '', 'img/product/31-12-2020-1609387058-min.jpg', '2022-08-27 07:08:54'),
(20, 'Haaram', 'harram', 'Round Pendant Designed Haaram', '', 'img/product/31-12-2020-160938483933-min.jpg', '2022-08-27 07:13:10'),
(21, 'Chains', 'chains', 'Gold Chain', '', 'img/product/31-12-2020-1609385873-min.jpg', '2022-08-27 15:27:05'),
(22, 'Necklaces', 'necklaces', 'This necklaces is the one of best design in the world. This haaram makes an women beauty.', '', 'img/product/23-10-2020-1603432918.jpg', '2022-08-27 16:01:35'),
(23, 'Necklaces', 'necklaces', 'A necklaces is an article of jewellery that is worn around the neck. necklaces may have been one of the earliest types of adornment worn by humans. They often serve ceremonial, religious, magical, or funerary purposes and are also used as symbols of wealth and status.', '', 'img/product/23-10-2020-1603434207.jpg', '2022-08-27 16:34:53'),
(24, 'Necklaces', 'necklaces', 'Pearl chain with Ruby and American diamond lotus pendant', '', 'img/product/31-12-2020-1609383625-min.jpg', '2022-08-27 16:44:44'),
(25, 'Necklaces', 'necklaces', 'Gold Dangling Necklace', '', 'img/product/31-12-2020-1609383860-min.jpg', '2022-08-27 16:47:10'),
(26, 'Necklaces', 'necklaces', 'Gold Droplet Necklace', '', 'img/product/31-12-2020-1609384050-min.jpg', '2022-08-28 06:02:42'),
(27, 'Necklaces', 'necklaces', 'Pearl Detailed Necklace', '', 'img/product/31-12-2020-1609384550-min.jpg', '2022-08-28 06:04:12'),
(28, 'Necklaces', 'necklaces', 'Ruby and American Diamond Accent Necklace', '', 'img/product/31-12-2020-1609384654-min.jpg', '2022-08-28 06:04:47'),
(29, 'Necklaces', 'necklaces', 'Gold Dainty Necklace', '', 'img/product/31-12-2020-1609384729-min.jpg', '2022-08-28 06:05:17'),
(30, 'Necklaces', 'necklaces', 'Gold Statement Necklace', '', 'img/product/31-12-2020-1609384942-min.jpg', '2022-08-28 06:05:49'),
(31, 'Necklaces', 'necklaces', 'Flower Pendant Gold Necklace', '', 'img/product/31-12-2020-1609385070-min.jpg', '2022-08-28 06:08:24'),
(32, 'Necklaces', 'necklaces', 'Gold Necklace', '', 'img/product/31-12-2020-1609386836-min.jpg', '2022-08-28 06:09:26'),
(33, 'Rings', 'rings', 'Perumal Ring\r\n\r\n', '', 'img/product/23-10-2020-1603433801.jpg', '2022-08-28 09:26:28'),
(34, 'Rings', 'mens-rings', 'Man Ring', '', 'img/product/21-11-2020-1605977329.jpg', '2022-08-28 09:27:05'),
(35, 'Rings', 'rings', 'Stoned Ring', '', 'img/product/31-12-2020-1609385436-min.jpg', '2022-08-28 09:30:33'),
(36, 'Gold Plating', 'gold-plating', 'Amman', '', 'img/product/07-11-2020-1604793332-min.jpg', '2022-08-28 09:32:53'),
(37, 'Gold Plating', 'gold-plating', 'Baba', '', 'img/product/08-11-2020-1604793843-min.jpg', '2022-08-28 09:33:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangles`
--
ALTER TABLE `bangles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chain`
--
ALTER TABLE `chain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conatct`
--
ALTER TABLE `conatct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeimage`
--
ALTER TABLE `homeimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productupload`
--
ALTER TABLE `productupload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangles`
--
ALTER TABLE `bangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chain`
--
ALTER TABLE `chain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `conatct`
--
ALTER TABLE `conatct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `homeimage`
--
ALTER TABLE `homeimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `productupload`
--
ALTER TABLE `productupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
