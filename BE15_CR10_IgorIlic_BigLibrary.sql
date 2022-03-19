-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2022 at 11:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BE15_CR10_IgorIlic_BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `BE15_CR10_IgorIlic_BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `BE15_CR10_IgorIlic_BigLibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `bigLibrary`
--

CREATE TABLE `bigLibrary` (
  `id` int(11) NOT NULL,
  `title` char(50) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `isbnCode` int(15) NOT NULL,
  `shortDescription` varchar(500) NOT NULL,
  `type` char(25) NOT NULL,
  `authorFirstName` char(25) NOT NULL,
  `authorLastName` char(25) NOT NULL,
  `publisherName` char(30) NOT NULL,
  `publisherAddress` char(50) NOT NULL,
  `publishDate` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bigLibrary`
--

INSERT INTO `bigLibrary` (`id`, `title`, `image`, `isbnCode`, `shortDescription`, `type`, `authorFirstName`, `authorLastName`, `publisherName`, `publisherAddress`, `publishDate`, `status`) VALUES
(21, 'Rich Dad Poor Dad', 'https://i.weltbild.de/p/rich-dad-poor-dad-320911880.jpg?v=1&wp=_max', 1612680194, 'Rich Dad Poor Dad is Robert\'s story of growing up with two dads — his real father and the father of his best friend, his rich dad — and the ways in which both men shaped his thoughts about money and investing. The book explodes the myth that you need to earn a high income to be rich and explains the difference between working for money and having your money work for you.', 'Book', 'Robert', 'Kiyosaki', 'Plata Publishing', 'USA', '2017-04-11', 1),
(22, 'Cashflow Quadrant', 'https://images-na.ssl-images-amazon.com/images/I/41aJnFuCBWL._SX331_BO1,204,203,200_.jpg', 1612680054, 'CASHFLOW Quadrant was written for those who are ready to move beyond job security and enter the world of financial freedom. It’s for those who want to make significant changes in their lives and take control of their financial future.', 'Book', 'Robert', 'Kiyosaki', 'Plata Publishing', 'USA', '2011-08-16', 1),
(23, 'The Wim Hof Method', 'https://images-na.ssl-images-amazon.com/images/I/51BU08+2YRL._SX337_BO1,204,203,200_.jpg', 1846046297, 'In The Wim Hof Method, this trailblazer of human potential shares his simple three-pillar approach that anyone can use to improve health and performance - and see real results within just a few days. Refined over forty years and championed by scientists across the globe, you\'ll learn how to harness three key elements of Cold, Breathing and Mindset to master mind over matter and achieve the impossible.\r\n', 'Book', 'Wim', 'Hof', 'Rider', 'UK', '2020-09-24', 0),
(24, 'Awaken the Giant Within', 'https://images-na.ssl-images-amazon.com/images/I/51YgODmIYuL._SY291_BO1,204,203,200_QL40_ML2_.jpg', 671727346, 'Anthony Robbins has already unlocked the personal power inside millions of people worldwide. Now, in this revolutionary new audio production based on his enormously popular Date with Destiny seminars, Robbins unleashes the sleeping giant that lies within all of us, teaching us to harness our untapped abilities, talents and skills.', 'Book', 'Anthony', 'Robbins', 'Simon & Schuster', 'USA', '1991-11-15', 0),
(25, '1984', 'https://images-na.ssl-images-amazon.com/images/I/5193RUDnQbL._SX330_BO1,204,203,200_.jpg', 452262933, 'Winston Smith toes the Party line, rewriting history to satisfy the demands of the Ministry of Truth. With each lie he writes, Winston grows to hate the Party that seeks power for its own sake and persecutes those who dare to commit thoughtcrimes. But as he starts to think for himself, Winston can’t escape the fact that Big Brother is always watching...', 'Book', 'George', 'Orwell', 'Berkley', 'USA', '1983-01-01', 1),
(26, 'The Alchemist', 'https://images-na.ssl-images-amazon.com/images/I/51kcX5PpaZL._SX329_BO1,204,203,200_.jpg', 62315005, 'Paulo Coelho\'s masterpiece tells the mystical story of Santiago, an Andalusian shepherd boy who yearns to travel in search of a worldly treasure. His quest will lead him to riches far different—and far more satisfying—than he ever imagined. Santiago\'s journey teaches us about the essential wisdom of listening to our hearts, of recognizing opportunity and learning to read the omens strewn along life\'s path, and, most importantly, to follow our dreams.', 'Book', 'Paulo', 'Coelho', 'HarperOne', 'USA', '2014-04-15', 0),
(27, 'The Wolf of Wall Street', 'https://de.web.img2.acsta.net/pictures/210/613/21061365_20131127123712997.jpg', 1, 'A hedonistic stockbroker who made his fortune on defrauding investors (Leonardo DiCaprio) tries everything to evade the FBI and keep the party going. Directed by Martin Scorsese.', 'DVD', 'Martin', 'Scorsese', 'Lorem', 'USA', '2014-03-15', 1),
(28, 'Seven pounds', 'https://upload.wikimedia.org/wikipedia/en/thumb/2/2d/Seven_Pounds_poster.jpg/220px-Seven_Pounds_poster.jpg', 2, 'In Los Angeles, Ben Thomas berates a sales representative, Ezra Turner, over the phone. Ezra, who is blind, maintains his composure and politely ends the call. At an IRS office after hours, Ben researches Emily Posa, finding her being treated for a congenital heart defect. His brother calls, but he denies having taken something from his house.', 'DVD', 'Gabriele', 'Muccino', 'Loremm', 'USA', '2008-12-14', 0),
(29, 'View', 'https://upload.wikimedia.org/wikipedia/en/thumb/a/af/Drake_-_Views_cover.jpg/220px-Drake_-_Views_cover.jpg', 3, 'Songs on Views see Drake discussing his relationship woes, experiences with betrayal, and celebrations of loyalty and friendship. Writing for Vice, Emma Garland said that while the album \"lacks in lyrical sentiment, it makes up for in musical experimentation and production.\" Garland further define the album as a \"minimal nuance of If You\'re Reading This It\'s Too Late [that] has bloomed into the more fleshed-out format of Take Care.\"', 'CD', 'Drake', 'Graham', 'Loremmm', 'USA', '2016-04-29', 0),
(30, 'The Life Of Pablo', 'http://rap.de/wp-content/uploads/kanye-west-the-life-of-pablo1.jpg', 4, 'In November 2013, Kanye West began working on his seventh studio album, with the working title of So Help Me God intended for a 2014 release date. Q-Tip announced he and Rick Rubin, one of the executive producers of West\'s sixth studio album Yeezus (2013), would produce the album. ', 'CD', 'Kanye', 'West', 'Loremmmm', 'USA', '2016-02-16', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bigLibrary`
--
ALTER TABLE `bigLibrary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bigLibrary`
--
ALTER TABLE `bigLibrary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
