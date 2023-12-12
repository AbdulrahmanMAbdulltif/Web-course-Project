-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 06:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meals_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(10,4) UNSIGNED NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`id`, `title`, `price`, `image`, `description`) VALUES
(1, 'best sandwish', '23.0000', 'meal1.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.\r\n                         Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!'),
(2, 'burger', '25.0000', 'meal2.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.\r\n                         Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!'),
(3, 'burger meal', '27.0000', 'meal3.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.\r\n                         Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `reviewer_name` varchar(80) NOT NULL,
  `city` varchar(80) NOT NULL,
  `date` datetime NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL,
  `image` varchar(500) NOT NULL,
  `review` varchar(500) NOT NULL,
  `meal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `reviewer_name`, `city`, `date`, `rating`, `image`, `review`, `meal_id`) VALUES
(1, 'Mohammed', 'jeddah', '2021-12-13 18:27:03', 100, 'meal1.png', 'best sandwish', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Forigen key` (`meal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `Forigen key` FOREIGN KEY (`meal_id`) REFERENCES `meal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
