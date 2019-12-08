-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-11-01 06:41:55
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinecat`
--

-- --------------------------------------------------------

--
-- 表的结构 `sourcetext`
--

CREATE TABLE `sourcetext` (
  `source_text` varchar(1000) NOT NULL,
  `source_id` varchar(1000) NOT NULL,
  `source_field` varchar(1000) NOT NULL,
  `source_part_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `termbase`
--

CREATE TABLE `termbase` (
  `term_st` varchar(1000) NOT NULL,
  `term_tt` varchar(1000) NOT NULL,
  `term_field` varchar(1000) NOT NULL,
  `source_id` varchar(1000) NOT NULL,
  `term_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `trans_memory`
--

CREATE TABLE `trans_memory` (
  `source_part` varchar(10000) NOT NULL,
  `correspond_trans` varchar(10000) NOT NULL,
  `source_part_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `trans_memory`
--

INSERT INTO `trans_memory` (`source_part`, `correspond_trans`, `source_part_id`) VALUES
('习近平首先表示，几天前，中国工会第十七次全国代表大会胜利闭幕了。', 'Xi Jinping first said that a few days ago, the Seventeenth National Congress of the Chinese Trade Union ended successfully.', ''),
('习近平强调，我国工运事业是党的事业的重要组成部分，工会工作是党治国理政的一项经常性、基础性工作。', 'Xi Jinping stressed that China''s labor movement is an important part of the party''s cause, trade union work is a regular and basic work of the party''s governance and administration.', ''),
('全国总工会新一届领导班子对贯彻落实党中央决策部署、做好工会工作，态度坚决，信心坚定，情绪饱满，精神振奋。', 'The new leading group of the All-China Federation of Trade Unions is resolute, confident, full of emotions and inspired to implement the Party Central Committee''s decision-making and deployment and do a good job in trade union work.', ''),
('我代表党中央，对中国工会十七大成功召开、对全国总工会新一届领导班子表示热烈祝贺', 'On behalf of the Central Committee of the Communist Party of China, I extend warm congratulations on the successful convening of the 17th National Congress of the Chinese Trade Union and on the new leadership of the All-China Federation of Trade Unions.', ''),
('党中央对全国总工会新一届领导班子寄予殷切期望。', 'The Central Committee of the Communist Party of China has ardently hoped for the new leadership of the National Federation of trade unions.', '');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_id` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
