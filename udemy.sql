-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2023 at 04:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udemy`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pactuer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `pactuer`) VALUES
(1, 'baha', '$email', '$pass', ' assest/images/profile/1692044920'),
(2, 'Abdelrahmna', 'generalal700@gmail.com', '$2y$10$vba7jMj7613ejL/fV/BgeuS6oj2pM6bjHvm6E.mQsEEgfvufQfvrm', 'assest/images/profile/1692112821دعاء.jpg'),
(3, 'Abdo', 'abdo@gmail.com', '$2y$10$UL5WOvJ4Kwjkibu0MT5Gpun6wZEcpphBTzsvxBv0JXoQDarwm5W7O', 'assest/images/profile/16921115571.jpg'),
(4, 'baha', 'Ali@gmail.com', '$2y$10$JAGeYJdzjjYiJZxPkEd8VeiXhby0zrOKrHqozlGxd5VOMRs11o9zC', ' assest/images/profile/1692044920'),
(5, 'baha', 'Ali@gmail.com', '$2y$10$OAV078ScH3bF/op7ZPgxluIqWlkk1TioeDHsFAaQwaAalEJxUMuMm', ' assest/images/profile/1692044920'),
(6, 'baha', 'gene@gmail.com', '$2y$10$ND7rFq8tHEqWcA9dCoEh0.l0MTOzVt3g9ER2nvAUWd38c73mjbJ0C', ' assest/images/profile/1692044920'),
(7, 'Abdelrahmna', 'generalal700@gmail.com', '$2y$10$Sct0SFZaDNPqpC2xiCZzGeUPGfGo3HE95P73Eeaq1nA6rUIp4S9sC', 'assest/images/profile/1692112821دعاء.jpg'),
(8, 'khaled', 'khaled@gmail.com', '$2y$10$Ba4ixTieOwC8olBkcr7udejchjQaXKpNFLmf3sU.uc2G5Y.PIT7g.', 'assest/images/profile/16921135949.jpg'),
(9, 'sayed', 'sa@gmail.com', '$2y$10$.jxdFjTMFpNbFLWbgbQR3Oij1QOlGb629FTlirvY86eAjn1jWZgMq', 'assest/images/profile/16921136348.jpg'),
(10, 'Abdelrahman', 'gemeralal700@gmail.com', '$2y$10$evxtclsQwo2GNzt1CTtTle0HkyUyHWR8imkfXq4KeSQqYzW/TPkAy', 'assest/images/profile/169211372488.jpg'),
(11, 'Abdo', 'ALa@gmail.com', '$2y$10$FZ1J9YdkMZLcnk/UzDhk9OYe8PXqNEURb4Js9.l53l2Vll255kNiO', 'assest/images/profile/16921142251.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
