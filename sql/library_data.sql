-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: St 15.Feb 2023, 10:37
-- Verzia serveru: 10.4.27-MariaDB
-- Verzia PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `library`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `biography` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `authors`
--

INSERT INTO `authors` (`id`, `fullname`, `biography`, `photo`) VALUES
(1, 'Fiodor Michalovič Dostojevskij', 'smutny zivot ...', 'fotka'),
(2, 'Lev Nikolajevič Tolstoj', 'zivotzivot yeyes ...', 'fotka'),
(3, 'Honoré de Balzac', 'francuzky zivot yeyes ...', 'fotka');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `main_genre` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `release_year` int(11) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `books`
--

INSERT INTO `books` (`id`, `title`, `author_id`, `main_genre`, `description`, `release_year`, `availability`, `language`, `image`) VALUES
(1, 'Zlocin a trest', 1, 'svedomie, ruska klasika, chudoba', 'Najlepší roman', 2014, 1, 'Slovenčina', 'https://www.databazeknih.cz/img/books/11_/1106/big_zlocin-a-trest-dr0-1106.jpg'),
(2, 'Anna Karenina', 2, 'zakazane laska, rusko spolocnost', NULL, 2019, 1, 'Slovenčina', ''),
(3, 'Otec Goriot', 3, 'neviem', NULL, 2003, 1, 'Slovenčina', '');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `book_wishlist`
--

CREATE TABLE `book_wishlist` (
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `credentials`
--

CREATE TABLE `credentials` (
  `id` int(11) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `lent_books`
--

CREATE TABLE `lent_books` (
  `book_id` int(11) NOT NULL,
  `since_lent` date NOT NULL,
  `due_lent` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `returned` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `credential_id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `lent_books`
--
ALTER TABLE `lent_books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pre tabuľku `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `lent_books`
--
ALTER TABLE `lent_books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
