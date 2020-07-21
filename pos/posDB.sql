-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 03:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `bar`
--

CREATE TABLE `bar` (
  `server_name` text NOT NULL,
  `order` text NOT NULL,
  `price` text NOT NULL,
  `table_number` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bar_preview`
--

CREATE TABLE `bar_preview` (
  `server_name` text NOT NULL,
  `order` text NOT NULL,
  `price` text NOT NULL,
  `table_number` text NOT NULL,
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bar_preview`
--

INSERT INTO `bar_preview` (`server_name`, `order`, `price`, `table_number`, `id`, `date`, `quantity`) VALUES
('Jesus', 'house white', '5.00', '122', 31, '03/07/2020 06:49:44 pm', '1'),
('Jesus', 'house white', '5.00', '122', 32, '03/07/2020 06:49:44 pm', '1'),
('Jesus', 'house white', '5.00', '122', 33, '03/07/2020 06:49:44 pm', '1'),
('Jesus', 'house white', '5.00', '122', 34, '03/07/2020 06:49:44 pm', '1'),
('Jesus', 'house white', '5.00', '122', 35, '03/07/2020 06:49:45 pm', '1'),
('Jesus', 'house white', '5.00', '122', 36, '03/07/2020 06:49:45 pm', '1'),
('Jesus', 'house white', '5.00', '122', 37, '03/07/2020 06:49:45 pm', '1'),
('Jesus', 'house white', '5.00', '122', 38, '03/07/2020 06:49:45 pm', '1'),
('Jesus', 'house white', '5.00', '122', 39, '03/07/2020 06:49:45 pm', '1'),
('Jesus', '', '12.00', '122', 40, '03/07/2020 06:49:45 pm', '1'),
('Jesus', '', '12.00', '122', 41, '03/07/2020 06:49:45 pm', '1'),
('Jesus', '', '12.00', '122', 42, '03/07/2020 06:49:46 pm', '1'),
('Jesus', '', '12.00', '122', 43, '03/07/2020 06:49:46 pm', '1'),
('Jesus', '', '12.00', '122', 44, '03/07/2020 06:49:46 pm', '1'),
('Jesus', '', '12.00', '122', 45, '03/07/2020 06:49:46 pm', '1'),
('Jesus', '', '12.00', '122', 46, '03/07/2020 06:49:46 pm', '1'),
('Jesus', '', '12.00', '122', 47, '03/07/2020 06:49:46 pm', '1'),
('Jesus', '', '12.00', '122', 48, '03/07/2020 06:49:46 pm', '1');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `server_name` text NOT NULL,
  `order` text NOT NULL,
  `price` text NOT NULL,
  `table_number` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bo_discount_reports`
--

CREATE TABLE `bo_discount_reports` (
  `server_name` text NOT NULL,
  `discount` text NOT NULL,
  `amount` text NOT NULL,
  `id` int(11) NOT NULL,
  `table_number` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bo_discount_reports`
--

INSERT INTO `bo_discount_reports` (`server_name`, `discount`, `amount`, `id`, `table_number`, `date`) VALUES
('Jesus', 'Â£10 off mains', '10', 3, '10', '27/07/2018'),
('Jesus', '20% Off Summer', '8', 4, '9', '27/07/2018'),
('Jesus', '15 % off total ', '23.24', 5, '8', '27/07/2018'),
('Jesus', ' 10 %  off food ', '1.6', 6, '4', '27/07/2018'),
('Jesus', '50% off mains', '72', 9, '4', '10/08/2018'),
('Jesus', ' 50 %  off food ', '144', 12, '21', '29/08/2018'),
('Jesus', '15 % off total ', '3.47', 13, '212', '29/08/2018'),
('Jesus', ' 50 %  off food ', '12', 17, '11', '30/08/2018'),
('Jesus', '10% off food', '3.2', 19, '2', '05/09/2018'),
('Jesus', '100 % off total ', '334.25', 23, '12', '14/10/2018'),
('Jesus', ' 20 %  off food ', '0.8', 25, '23', '14/10/2018'),
('Jesus', 'Â£ 1  off total ', '1', 26, '21', '14/10/2018'),
('Jesus', 'Staff feeding', '151', 28, '100', '18/10/2018'),
('Jesus', '50% off mains ', '3.39', 30, '1', '03/07/2020'),
('Jesus', '50% off mains ', '76.5', 31, '122', '03/07/2020');

-- --------------------------------------------------------

--
-- Table structure for table `bo_sales_reports`
--

CREATE TABLE `bo_sales_reports` (
  `date` text NOT NULL,
  `card_payments` text NOT NULL,
  `cash_payments` text NOT NULL,
  `total_discount` text NOT NULL,
  `total_sales` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bo_sales_reports`
--

INSERT INTO `bo_sales_reports` (`date`, `card_payments`, `cash_payments`, `total_discount`, `total_sales`, `id`) VALUES
('16/07/2018', '0', '0', '139', '0', 1),
('18/07/2018', '0', '0', '0', '0', 2),
('18/07/2018', '16.67', '0', '0', '16.67', 3),
('27/07/2018', '60.26', '0', '0', '60.26', 4),
('30/07/2018', '399.56', '94.78', '44.99', '494.34', 5),
('01/08/2018', '32', '0', '0', '32', 6),
('10/08/2018', '218.76', '0', '76.99', '218.76', 7),
('23/08/2018', '0', '0', '24.23', '0', 8),
('29/08/2018', '85.22', '219.68', '147.47', '304.9', 9),
('04/09/2018', '3.99', '0', '0', '3.99', 10),
('05/09/2018', '57.75', '0', '3.2', '57.75', 11),
('10/09/2018', '75.53', '20.62', '0', '96.15', 12),
('10/09/2018', '11.97', '0', '0', '11.97', 13),
('10/09/2018', '0', '0', '0', '0', 14),
('10/09/2018', '0', '0', '0', '0', 15),
('10/09/2018', '0', '0', '0', '0', 16),
('10/09/2018', '0', '0', '0', '0', 17),
('10/09/2018', '0', '0', '0', '0', 18),
('10/09/2018', '0', '0', '0', '0', 19),
('10/09/2018', '0', '0', '0', '0', 20),
('11/09/2018', '1174.52', '0', '0', '1174.52', 21),
('19/09/2018', '-5.22', '0', '12', '-5.22', 22),
('21/09/2018', '658.91', '8.99', '0', '667.9', 23),
('30/09/2018', '83.66', '0', '0', '83.66', 24),
('30/09/2018', '0', '0', '0', '0', 25),
('02/10/2018', '0', '3.39', '0', '3.39', 26),
('04/10/2018', '0', '0', '0', '0', 27),
('04/10/2018', '0', '0', '0', '0', 28),
('14/10/2018', '21.72', '12', '336.05', '33.72', 29),
('14/10/2018', '0', '0', '0', '0', 30),
('14/10/2018', '0', '0', '0', '0', 31),
('14/10/2018', '0', '0', '0', '0', 32),
('14/10/2018', '113.84', '7', '0', '120.84', 33),
('17/10/2018', '44545454', '0', '0', '44545454', 34),
('18/10/2018', '6401.39', '1109.4', '151', '7510.79', 35),
('03/07/2020', '162.63', '0', '3.39', '162.63', 36),
('03/07/2020', '0', '0', '0', '0', 37),
('03/07/2020', '0', '0', '0', '0', 38);

-- --------------------------------------------------------

--
-- Table structure for table `bo_users`
--

CREATE TABLE `bo_users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bo_users`
--

INSERT INTO `bo_users` (`username`, `password`, `level`, `id`) VALUES
('admin', 'admin_9512', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `server_name` text NOT NULL,
  `payment_method` text NOT NULL,
  `amount` text NOT NULL,
  `id` int(11) NOT NULL,
  `table_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checkout1`
--

CREATE TABLE `checkout1` (
  `server_name` text NOT NULL,
  `payment_method` text NOT NULL,
  `amount` text NOT NULL,
  `id` int(11) NOT NULL,
  `table_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE `kitchen` (
  `server_name` text NOT NULL,
  `new_orders` text NOT NULL,
  `price` text NOT NULL,
  `table_number` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_preview`
--

CREATE TABLE `kitchen_preview` (
  `server_name` text NOT NULL,
  `order` text NOT NULL,
  `price` text NOT NULL,
  `table_number` text NOT NULL,
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kitchen_preview`
--

INSERT INTO `kitchen_preview` (`server_name`, `order`, `price`, `table_number`, `id`, `date`, `quantity`) VALUES
('Jesus', '', '5.00', '122', 32, '03/07/2020 06:49:44 pm', '1'),
('Jesus', '', '5.00', '122', 33, '03/07/2020 06:49:44 pm', '1'),
('Jesus', '', '5.00', '122', 34, '03/07/2020 06:49:44 pm', '1'),
('Jesus', '', '5.00', '122', 35, '03/07/2020 06:49:44 pm', '1'),
('Jesus', '', '5.00', '122', 36, '03/07/2020 06:49:45 pm', '1'),
('Jesus', '', '5.00', '122', 37, '03/07/2020 06:49:45 pm', '1'),
('Jesus', '', '5.00', '122', 38, '03/07/2020 06:49:45 pm', '1'),
('Jesus', '', '5.00', '122', 39, '03/07/2020 06:49:45 pm', '1'),
('Jesus', '', '5.00', '122', 40, '03/07/2020 06:49:45 pm', '1'),
('Jesus', 'classic cheese', '12.00', '122', 41, '03/07/2020 06:49:45 pm', '1'),
('Jesus', 'classic cheese', '12.00', '122', 42, '03/07/2020 06:49:45 pm', '1'),
('Jesus', 'classic cheese', '12.00', '122', 43, '03/07/2020 06:49:46 pm', '1'),
('Jesus', 'classic cheese', '12.00', '122', 44, '03/07/2020 06:49:46 pm', '1'),
('Jesus', 'classic cheese', '12.00', '122', 45, '03/07/2020 06:49:46 pm', '1'),
('Jesus', 'classic cheese', '12.00', '122', 46, '03/07/2020 06:49:46 pm', '1'),
('Jesus', 'classic cheese', '12.00', '122', 47, '03/07/2020 06:49:46 pm', '1'),
('Jesus', 'classic cheese', '12.00', '122', 48, '03/07/2020 06:49:46 pm', '1'),
('Jesus', 'classic cheese', '12.00', '122', 49, '03/07/2020 06:49:46 pm', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_sorted`
--

CREATE TABLE `kitchen_sorted` (
  `server_name` text NOT NULL,
  `order` text NOT NULL,
  `price` text NOT NULL,
  `table_number` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `minerals` text NOT NULL,
  `spirits` text NOT NULL,
  `wine` text NOT NULL,
  `juices` text NOT NULL,
  `burgers` text NOT NULL,
  `id` int(11) NOT NULL,
  `Desserts` text NOT NULL,
  `hot_drinks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`minerals`, `spirits`, `wine`, `juices`, `burgers`, `id`, `Desserts`, `hot_drinks`) VALUES
('pepsi', 'vodka', 'house white', 'orange', 'classic cheese', 1, 'apple pie', 'tea'),
('diet pepsi', 'bacardi', 'house red', 'apple', 'classic beef', 2, 'fudge cake', 'americano'),
('lemonade', 'triple sec', 'shiraz', 'pineapple', 'bacon cheese', 3, 'fruit salad', 'latte'),
('tango', 'bomabay saphire', 'zinfandel', 'passion fruit', 'triple cheese', 4, 'chocolate dreams', 'hot choc'),
('pepsi max', 'baileys', 'merlot', 'cranberry', 'meat lovers', 5, 'van cheesecake', 'cappuccino'),
('Tap Water', 'Empty', 'Empty', 'Empty', 'Empty', 6, 'Empty', 'Empty');

-- --------------------------------------------------------

--
-- Table structure for table `new_tables`
--

CREATE TABLE `new_tables` (
  `table_number` text NOT NULL,
  `id` int(11) NOT NULL,
  `covers` text NOT NULL,
  `owner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_tables1`
--

CREATE TABLE `new_tables1` (
  `table_number` text NOT NULL,
  `id` int(11) NOT NULL,
  `covers` text NOT NULL,
  `owner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_tables1`
--

INSERT INTO `new_tables1` (`table_number`, `id`, `covers`, `owner`) VALUES
('122', 5, '1', 'Jesus');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `status` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`status`, `id`) VALUES
('yes', 1),
('yes', 2),
('yes', 3),
('yes', 4),
('yes', 5),
('yes', 6),
('yes', 7),
('yes', 8),
('yes', 9),
('yes', 10),
('yes', 11),
('yes', 12),
('yes', 13),
('yes', 14),
('yes', 15),
('yes', 16),
('yes', 17),
('yes', 18),
('yes', 19),
('yes', 20),
('yes', 21);

-- --------------------------------------------------------

--
-- Table structure for table `perm_discounts`
--

CREATE TABLE `perm_discounts` (
  `name` text NOT NULL,
  `discount` text NOT NULL,
  `price` text NOT NULL,
  `id` int(11) NOT NULL,
  `table_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perm_discounts`
--

INSERT INTO `perm_discounts` (`name`, `discount`, `price`, `id`, `table_number`) VALUES
('Jesus', '50% off mains ', '76.5', 3, '122');

-- --------------------------------------------------------

--
-- Table structure for table `perm_server_check`
--

CREATE TABLE `perm_server_check` (
  `server_name` text NOT NULL,
  `card` text NOT NULL,
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `cash` text NOT NULL,
  `adjusted_amount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perm_server_check`
--

INSERT INTO `perm_server_check` (`server_name`, `card`, `id`, `date`, `cash`, `adjusted_amount`) VALUES
('Jesus', '4', 3, '16/07/2018', '7.28', '-5'),
('Bar', '0', 4, '16/07/2018', '0', '0'),
('Jesus', '7', 5, '16/07/2018', '11.98', '-15'),
('Sam Manager Manager', '50', 6, '16/07/2018', '18', '0'),
('Jesus', '0', 7, '16/07/2018', '0', '0'),
('Bar', '0', 8, '16/07/2018', '0', '0'),
('Abinesh', '0', 9, '16/07/2018', '0', '0'),
('Jesus', '0', 10, '16/07/2018', '0', '0'),
('Bar', '0', 11, '16/07/2018', '0', '0'),
('Abinesh', '0', 12, '16/07/2018', '0', '0'),
('Jesus', '0', 13, '16/07/2018', '0', '0'),
('Jesus', '20', 14, '18/07/2018', '250.19', '0'),
('Bar', '0', 15, '18/07/2018', '0', '0'),
('Abinesh', '0', 16, '18/07/2018', '0', '0'),
('Jesus', '0', 17, '18/07/2018', '16.67', '0'),
('Jesus', '0', 18, '01/08/2018', '0', '0'),
('Bar', '0', 19, '01/08/2018', '0', '0'),
('Abinesh', '0', 20, '01/08/2018', '0', '0'),
('Jesus', '0', 21, '10/08/2018', '218.76', '-5'),
('Jesus', '0', 22, '23/08/2018', '0', '0'),
('Joshua', '0', 23, '29/08/2018', '11.97', '0'),
('Abinesh', '0', 24, '29/08/2018', '0', '0'),
('Jesus', '219.68', 25, '29/08/2018', '73.25', '0'),
('Bar', '0', 26, '29/08/2018', '0', '0'),
('Abinesh', '0', 27, '29/08/2018', '0', '0'),
('Jesus', '0', 28, '29/08/2018', '0', '0'),
('Jesus', '0', 29, '05/09/2018', '57.75', '-3'),
('Bar', '0', 30, '05/09/2018', '0', '0'),
('Abinesh', '0', 31, '05/09/2018', '0', '0'),
('Joshua', '0', 32, '05/09/2018', '0', '0'),
('Jesus', '0', 33, '10/09/2018', '25.53', '0'),
('Bar', '20.62', 34, '10/09/2018', '50', '0'),
('Abinesh', '0', 35, '10/09/2018', '0', '0'),
('Joshua', '0', 36, '10/09/2018', '0', '0'),
('Jesus', '8.99', 37, '20/09/2018', '81.95', '0'),
('Bar', '0', 38, '20/09/2018', '0', '0'),
('Jesus', '8.99', 39, '20/09/2018', '658.91', '0'),
('Jesus', '3.39', 40, '02/10/2018', '0', '0'),
('Abinesh', '0', 41, '02/10/2018', '0', '0'),
('Jesus', '12', 42, '14/10/2018', '21.72', '0'),
('Jesus', '7', 43, '14/10/2018', '113.84', '0'),
('Jesus', '1109.4', 44, '18/10/2018', '6401.39', '-65'),
('Arek', '0', 45, '18/10/2018', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `perm_tables`
--

CREATE TABLE `perm_tables` (
  `server_name` text NOT NULL,
  `order` text NOT NULL,
  `price` text NOT NULL,
  `table_number` text NOT NULL,
  `id` int(11) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perm_tables`
--

INSERT INTO `perm_tables` (`server_name`, `order`, `price`, `table_number`, `id`, `date`) VALUES
('Jesus', 'pepsi', '3.99', '13', 1, '15/07/2018 11:36:14 pm'),
('Jesus', 'pepsi', '3.99', '13', 2, '15/07/2018 11:36:14 pm'),
('Jesus', 'vodka', '4.50', '13', 3, '15/07/2018 11:36:15 pm'),
('Jesus', 'vodka', '4.50', '13', 4, '15/07/2018 11:36:16 pm'),
('Jesus', 'shiraz', '6.00', '13', 5, '15/07/2018 11:36:17 pm'),
('Jesus', 'meat lovers', '17.00', '13', 6, '15/07/2018 11:36:18 pm'),
('Jesus', 'meat lovers', '17.00', '13', 7, '15/07/2018 11:36:18 pm'),
('Jesus', 'pepsi', '3.99', '13', 8, '15/07/2018 11:36:22 pm'),
('Jesus', 'pepsi', '3.99', '13', 9, '15/07/2018 11:36:22 pm'),
('Jesus', 'pepsi', '3.99', '13', 10, '15/07/2018 11:36:22 pm'),
('Jesus', 'pineapple', '3.00', '13', 11, '15/07/2018 11:36:25 pm'),
('Jesus', 'pineapple', '3.00', '13', 12, '15/07/2018 11:36:25 pm'),
('Jesus', 'pineapple', '3.00', '13', 13, '15/07/2018 11:36:25 pm'),
('Jesus', 'vodka', '4.50', '13', 14, '15/07/2018 11:36:28 pm'),
('Jesus', 'vodka', '4.50', '13', 15, '15/07/2018 11:36:28 pm'),
('Jesus', 'vodka', '4.50', '13', 16, '15/07/2018 11:36:28 pm'),
('Jesus', 'pepsi', '3.99', '13', 17, '15/07/2018 11:36:30 pm'),
('Jesus', 'pepsi', '3.99', '13', 18, '15/07/2018 11:36:30 pm'),
('Jesus', 'pepsi', '3.99', '13', 19, '15/07/2018 11:36:30 pm'),
('Jesus', 'vodka', '4.50', '13', 20, '15/07/2018 11:36:31 pm'),
('Jesus', 'vodka', '4.50', '13', 21, '15/07/2018 11:36:31 pm'),
('Jesus', 'vodka', '4.50', '13', 22, '15/07/2018 11:36:31 pm'),
('Jesus', 'house white', '5.00', '13', 23, '15/07/2018 11:36:32 pm'),
('Jesus', 'house white', '5.00', '13', 24, '15/07/2018 11:36:32 pm'),
('Jesus', 'house white', '5.00', '13', 25, '15/07/2018 11:36:32 pm'),
('Jesus', 'cranberry', '3.00', '13', 26, '15/07/2018 11:36:34 pm'),
('Jesus', 'cranberry', '3.00', '13', 27, '15/07/2018 11:36:34 pm'),
('Jesus', 'cranberry', '3.00', '13', 28, '15/07/2018 11:36:34 pm'),
('Jesus', 'merlot', '5.00', '13', 29, '15/07/2018 11:36:35 pm'),
('Jesus', 'merlot', '5.00', '13', 30, '15/07/2018 11:36:35 pm'),
('Jesus', 'merlot', '5.00', '13', 31, '15/07/2018 11:36:35 pm'),
('Jesus', 'pepsi', '3.99', '13', 32, '15/07/2018 11:36:37 pm'),
('Jesus', 'pepsi', '3.99', '13', 33, '15/07/2018 11:36:37 pm'),
('Jesus', 'pepsi', '3.99', '13', 34, '15/07/2018 11:36:37 pm'),
('Jesus', 'pepsi', '3.99', '13', 35, '15/07/2018 11:36:44 pm'),
('Jesus', 'lemonade', '3.39', '13', 36, '15/07/2018 11:36:45 pm');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `mineral_prices` text NOT NULL,
  `spirit_prices` text NOT NULL,
  `wine_prices` text NOT NULL,
  `juice_prices` text NOT NULL,
  `burger_prices` text NOT NULL,
  `id` int(11) NOT NULL,
  `dessert_prices` text NOT NULL,
  `hot_drink_prices` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`mineral_prices`, `spirit_prices`, `wine_prices`, `juice_prices`, `burger_prices`, `id`, `dessert_prices`, `hot_drink_prices`) VALUES
('3.99', '4.50', '5.00', '3.00', '12.00', 1, '4.00', '2.75'),
('3.39', '5.50', '4.80', '3.00', '9.95', 2, '5.50', '3.00'),
('3.39', '4.70', '6.00', '3.00', '14.00', 3, '2.50', '3.45'),
('3.39', '5.00', '5.75', '3.00', '16.00', 4, '7.00', '3.75'),
('3.99', '5.00', '5.00', '3.00', '17.00', 5, '4.75', '3.60'),
('0.00', '0.00', '0.00', '0.00', '0.00', 6, '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `rov`
--

CREATE TABLE `rov` (
  `discount_name` text NOT NULL,
  `voucher_code` text NOT NULL,
  `discount_amount` text NOT NULL,
  `discount_type` text NOT NULL,
  `discount_type1` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rov`
--

INSERT INTO `rov` (`discount_name`, `voucher_code`, `discount_amount`, `discount_type`, `discount_type1`, `id`) VALUES
('50% off mains ', '50', '50', 'p', 't', 2);

-- --------------------------------------------------------

--
-- Table structure for table `server_check`
--

CREATE TABLE `server_check` (
  `server_name` text NOT NULL,
  `payment_method` text NOT NULL,
  `amount` text NOT NULL,
  `id` int(11) NOT NULL,
  `table_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server_check`
--

INSERT INTO `server_check` (`server_name`, `payment_method`, `amount`, `id`, `table_number`) VALUES
('Jesus', 'cash', '76.5', 7, '122');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `item_name` text NOT NULL,
  `auth` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`item_name`, `auth`, `id`) VALUES
('vodka', 'In_Stock', 34),
('hot choc', 'In_Stock', 37),
('meat lovers', 'In_Stock', 39),
('bacardi', 'In_Stock', 40),
('triple cheese', 'In_Stock', 41),
('apple pie', 'In_Stock', 43),
('tea', 'In_Stock', 49),
('baileys', 'In_Stock', 51),
('Tap Water', 'In_Stock', 76),
('triple sec', 'In_Stock', 77),
('Empty', 'Out_Of_Stock', 85),
('diet pepsi', 'In_Stock', 91),
('lemonade', 'In_Stock', 92),
('tango', 'In_Stock', 93),
('pepsi max', 'In_Stock', 94),
('pepsi', 'Out_Of_Stock', 97);

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `status` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`status`, `id`) VALUES
('offline', 258),
('online', 259);

-- --------------------------------------------------------

--
-- Table structure for table `table_orders`
--

CREATE TABLE `table_orders` (
  `server_name` text NOT NULL,
  `order` text NOT NULL,
  `price` text NOT NULL,
  `table_number` text NOT NULL,
  `id` int(11) NOT NULL,
  `food_order` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `total` text NOT NULL,
  `table_number` text NOT NULL,
  `id` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `level`, `id`) VALUES
('Jesus', '9512', '5', 33),
('Arek', '1337', '4', 39),
('f', 'f', '5', 41),
('Test Admin', '1234', '5', 42);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bar_preview`
--
ALTER TABLE `bar_preview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bo_discount_reports`
--
ALTER TABLE `bo_discount_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bo_sales_reports`
--
ALTER TABLE `bo_sales_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bo_users`
--
ALTER TABLE `bo_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout1`
--
ALTER TABLE `checkout1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen_preview`
--
ALTER TABLE `kitchen_preview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen_sorted`
--
ALTER TABLE `kitchen_sorted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_tables`
--
ALTER TABLE `new_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_tables1`
--
ALTER TABLE `new_tables1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perm_discounts`
--
ALTER TABLE `perm_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perm_server_check`
--
ALTER TABLE `perm_server_check`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perm_tables`
--
ALTER TABLE `perm_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rov`
--
ALTER TABLE `rov`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server_check`
--
ALTER TABLE `server_check`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_orders`
--
ALTER TABLE `table_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bar`
--
ALTER TABLE `bar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `bar_preview`
--
ALTER TABLE `bar_preview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `bo_discount_reports`
--
ALTER TABLE `bo_discount_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `bo_sales_reports`
--
ALTER TABLE `bo_sales_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `bo_users`
--
ALTER TABLE `bo_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `checkout1`
--
ALTER TABLE `checkout1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `kitchen_preview`
--
ALTER TABLE `kitchen_preview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `kitchen_sorted`
--
ALTER TABLE `kitchen_sorted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `new_tables`
--
ALTER TABLE `new_tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `new_tables1`
--
ALTER TABLE `new_tables1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `perm_discounts`
--
ALTER TABLE `perm_discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perm_server_check`
--
ALTER TABLE `perm_server_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `perm_tables`
--
ALTER TABLE `perm_tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rov`
--
ALTER TABLE `rov`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `server_check`
--
ALTER TABLE `server_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `system`
--
ALTER TABLE `system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT for table `table_orders`
--
ALTER TABLE `table_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
