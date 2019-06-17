-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 11:03 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmaths`
--

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `topic_image` varchar(100) NOT NULL,
  `topic_name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `topic_video` varchar(100) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`topic_image`, `topic_name`, `description`, `topic_video`, `video_id`) VALUES
('img/square.jpg', 'Area of Square', 'If you are confused to find out the area of square then learn quickly by just watching our video.', 'vid/aos.mp4', 1),
('img/circle.jpg', 'Area of circle', 'If you are confused to find out the area of circle then learn quickly by just watching our video', 'vid/aoc.mp4', 2),
('img/triangle.jpg', 'Types of triangle', 'We are having an easy way to find out the area of a triangle by just watching our video.', 'vid/tot.mp4', 3),
('img/rectangle.jpg', 'Area of Rectangle', 'If you are confused to find out the area of rectangle then learn quickly by just watching our video.', 'vid/aor.mp4', 4),
('img/triangle.jpg', 'Area of Triangle', 'If you are confused to find out the area of triangle then learn quickly by just watching our video', 'vid/aot.mp4', 5),
('img/cube.jpg', 'Volume of a cuboid', 'If you are confused to find out the volume of a cuboid then learn quickly by just watching our video.', 'vid/voc.mp4', 6),
('img/9.jpg', 'Learn 9 table', 'We are having an easy way to find out the 9 times table by just watching our video.', 'vid/9.mp4', 7),
('img/5.jpg', 'Learn 5 table', 'We are having an easy way to find out the 5 times table by just watching our video.\r\n\r\n', 'vid/5.mp4', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
