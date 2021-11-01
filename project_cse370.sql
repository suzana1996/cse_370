-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 03:45 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_cse370`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Mobile`, `Subject`, `Message`) VALUES
('Customer1', 'customer1@gmail.com', '01301361854', 'demo', 'test'),
('khalid Syffullah', 'khalidsaiffullah29@gmail.com', '01301361854', 'sample', 'demo'),
('khalid Syffullah', 'sample@sample.com', '01301361854', 'sample', 'iujhpoiu');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('customer', 'customer', 'customer@gmail.com', '0130000001', 'Mohakhali, Dhaka', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `images_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `description`, `images_path`) VALUES
(1, 'Chicken burger', 200, 'Delightful perfection starts with two crispy chicken patties, topped with fresh shredded iceberg lettuce, creamy mayo, and one slice American cheddar cheese', 'images/burger.jpg'),
(2, 'Beef Burger', 250, 'A juicy, 100% pure beef patty with absolutely no fillers, additives or preservatives, seasoned with secret herbs, and topped with shredded lettuce, creamy mayonnaise, sliced tomatoes, tangy pickles, s', 'images/burger.jpg'),
(3, 'classic chicken burger', 160, 'Delightful perfection starts with two crispy chicken patties, topped with fresh shredded iceberg lettuce, creamy mayo, and one slice American cheddar cheese on a soft toasted seasame bun.  Add French ', 'images/burger.jpg'),
(4, 'Pizza: American Favourite Feas', 700, 'Chicken sausage, Beef pepperoni come together with seasoned mushrooms and green chilli to deliver a spicy and meaty mouthfeel.', 'images\\Pizza.jpg'),
(5, 'Pizza: Beef Kala Bhuna', 700, 'A Pizza for beef lovers with thick chunks of traditionally marinated beef along with Red paprika, Capsicum and red onion.', 'images\\Pizza.jpg'),
(6, 'Pizza: Farmhouse', 500, 'A delectable Pizza with Farm Veggies like Red Onion, Seasoned Mushroom, exotic Red & Yellow Bell Peppers', 'images\\Pizza.jpg'),
(7, 'Madame Lucy Burger', 0, '400', 'images/burger.jpg'),
(8, 'Spicy Cajun Fries', 1330, 'French fries sprinkled with cajun spice.', 'images/f-fry.jpg'),
(12, 'demo', 200, 'demo food', 'images/burger.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('admin', 'admin', 'admin@admin.com', '01710000000', 'mohakhali, Dhaka', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `foodname`, `price`, `quantity`, `order_date`, `username`) VALUES
(3, 'burger classic', 200, 1, '2021-09-16', 'customer'),
(4, 'Chicken burger', 200, 1, '2021-09-16', 'customer'),
(3, 'burger classic', 200, 1, '2021-09-16', 'customer'),
(3, 'burger classic', 200, 1, '2021-09-16', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
