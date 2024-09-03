-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 05:41 AM
-- Server version: 8.0.34
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revised2`
--

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `id` int NOT NULL,
  `Name` varchar(25) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`id`, `Name`, `USN`, `PASSWORD`, `Email`, `Question`, `Answer`) VALUES
(1, 'veda', '1cg13is401', '123', 'veda', 'What is your fav spot?', 'circket'),
(2, 'Veda', '1cg12is096', 'veda', 'v@gmil.com', 'what is your fav spot?', 'mysore'),
(3, 'rama', '1cg12cs001', 'rama', 'rama@gmail.com', 'What is your fav dish?', 'chicken'),
(4, 'Vishruth Harithsa', '1cg12is094', 'CUTESTAR22', 'har', 'What is your nickname?', ''),
(5, 'Armstrong', '1cg12is000', 'asdfg', 'armstrong@neil.com', 'What is your fav spot?', 'New York'),
(8, 'Harry', '1cg12is007', 'asdfg', 'asdfg@gmail.com', 'What is your fav spot?', 'Manali'),
(9, '', '', '', '', '', ''),
(10, 'Harithsa', '1cg12is009', 'qwerty', 'harithsa@aol.com', 'What is your nickname?', 'Gunda'),
(11, 'Vishruth Harithsa', '1cg12is011', 'qwerty', 'astroman225@gmail.com', 'What is your fav spot?', 'Manali'),
(12, 'Amey', '1021bsc096', 'database', 'amey@gmail.com', 'iS IT working?', 'IDK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `USN` (`USN`,`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
