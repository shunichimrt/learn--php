-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2021 年 10 月 17 日 04:15
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `townblog`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `users_id` int(11) NOT NULL COMMENT 'ユーザID',
  `town_id` int(11) NOT NULL COMMENT '地域ID',
  `title` text NOT NULL COMMENT 'タイトル',
  `content` text NOT NULL COMMENT '内容',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '登録日',
  `del_flg` int(11) NOT NULL DEFAULT '0' COMMENT '論理削除'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `blog`
--

INSERT INTO `blog` (`id`, `users_id`, `town_id`, `title`, `content`, `created_at`, `del_flg`) VALUES
(10, 15, 1, 'Sapporo', 'The largest city on Hokkaido is its capital, Sapporo, which is also its only ordinance-designated city. Sakhalin lies about 43 kilometers (26 mi) to the north of Hokkaido, and to the east and northeast are the Kuril Islands, which are administered by Russia, though the four most southerly are claimed by Japan. Hokkaido was formerly known as Ezo, Yezo, Yeso, or Yesso.', '2021-10-17 13:00:24', 0),
(11, 16, 2, 'Aomori', 'Aomori has a mayor-council form of government with a directly elected mayor and a unicameral city legislature of 35 members. The city also contributes 10 members of the 48 member Aomori Prefectural Assembly. In terms of national politics, the city falls within the Aomori 1st district, a single-member constituency of the House of Representatives in the national Diet of Japan, which also includes the city of Mutsu, the Higashitsugaru District, the Shimokita District, and the northern half of the Kamikita District.', '2021-10-17 13:12:24', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `blog_id` int(11) NOT NULL COMMENT '投稿ID',
  `users_id` int(11) NOT NULL COMMENT 'ユーザID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `town`
--

CREATE TABLE `town` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `name` varchar(100) NOT NULL COMMENT '地域名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `town`
--

INSERT INTO `town` (`id`, `name`) VALUES
(1, 'Hokkaido'),
(2, 'Aomori'),
(3, 'Iwate'),
(4, 'Miyagi'),
(5, 'Akita'),
(6, 'Yamagata'),
(7, 'Fukushima'),
(8, 'Ibaraki'),
(9, 'Tochigi'),
(10, 'Gunma'),
(11, 'Saitama'),
(12, 'Chiba'),
(13, 'Tokyo'),
(14, 'Kanagawa'),
(15, 'Niigata'),
(16, 'Toyama'),
(17, 'Ishikawa'),
(18, 'Fukui'),
(19, 'Yamanashi'),
(20, 'Nagano'),
(21, 'Gifu'),
(22, 'Shizuoka'),
(23, 'Aichi'),
(24, 'Mie'),
(25, 'Shiga'),
(26, 'Kyoto'),
(27, 'Osaka'),
(28, 'Hyogo'),
(29, 'Nara'),
(30, 'Wakayama'),
(31, 'Tottori'),
(32, 'Shimane'),
(33, 'Okayama'),
(34, 'Hiroshima'),
(35, 'Yamaguchi'),
(36, 'Tokushima'),
(37, 'Kagawa'),
(38, 'Ehime'),
(39, 'Kochi'),
(40, 'Fukuoka'),
(41, 'Saga'),
(42, 'Nagasaki'),
(43, 'Kumamoto'),
(44, 'Oita'),
(45, 'Miyazaki'),
(46, 'Kagoshima'),
(47, 'Okinawa');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `name` varchar(100) NOT NULL COMMENT '名前',
  `email` varchar(100) NOT NULL COMMENT 'メールアドレス',
  `password` varchar(100) NOT NULL COMMENT 'パスワード',
  `town_id` int(11) NOT NULL COMMENT '地域ID',
  `role` int(11) NOT NULL DEFAULT '1' COMMENT '権限'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `town_id`, `role`) VALUES
(15, 'host', 'host@host', '$2y$10$lHdCLs5q.t9hKBqoJOzgveTyHR3w0IPYp3Sb6oyG9.lkmJmgDXA9a', 1, 0),
(16, 'user', 'user@user', '$2y$10$XbqEx45RA87UZspsCl/BtebnojPqYbs5cx8TwuAznSf/bc0ZloZhG', 2, 1);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=12;

--
-- テーブルの AUTO_INCREMENT `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=84;

--
-- テーブルの AUTO_INCREMENT `town`
--
ALTER TABLE `town`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=48;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
