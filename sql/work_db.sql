-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018 年 2 月 21 日 22:41
-- サーバのバージョン： 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `market_table`
--

CREATE TABLE `market_table` (
  `ask_bf` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `ask_zf` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `ask_cc` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `ask_qx` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `ask_bb` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `bid_bf` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `bid_zf` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `bid_cc` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `bid_qx` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `bid_bb` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `market_table`
--

INSERT INTO `market_table` (`ask_bf`, `ask_zf`, `ask_cc`, `ask_qx`, `ask_bb`, `bid_bf`, `bid_zf`, `bid_cc`, `bid_qx`, `bid_bb`) VALUES
('1,170,524', '1,140,745', '1,024,383', '1,271,677', '1,138,979', '1,124,124', '1,140,735', '1,024,317', '1,108,967', '1,137,896'),
('1,170,524', '1,140,425', '1,024,363', '1,271,677', '1,138,964', '1,124,124', '1,139,995', '1,023,483', '1,108,967', '1,137,921'),
('1,170,524', '1,141,000', '1,024,103', '1,271,677', '1,138,959', '1,124,124', '1,140,740', '1,023,684', '1,108,967', '1,137,976'),
('1,170,524', '1,138,995', '1,024,103', '1,271,677', '1,139,194', '1,124,124', '1,138,675', '1,023,684', '1,108,967', '1,139,001'),
('1,170,524', '1,139,000', '1,023,290', '1,271,677', '1,139,194', '1,124,124', '1,138,680', '1,023,264', '1,108,967', '1,139,011');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
