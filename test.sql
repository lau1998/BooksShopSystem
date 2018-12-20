-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-04-24 05:45:24
-- 服务器版本： 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `lc_books`
--

CREATE TABLE `lc_books` (
  `id` int(11) NOT NULL,
  `bookname` varchar(32) NOT NULL DEFAULT '',
  `author` varchar(30) DEFAULT NULL,
  `publisher` varchar(20) NOT NULL,
  `booktype` varchar(20) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `cover` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lc_books`
--

INSERT INTO `lc_books` (`id`, `bookname`, `author`, `publisher`, `booktype`, `price`, `cover`) VALUES
(1, 'XML基础教程', '耿祥义', '清华大学出版社', '计算机类', '35.2', '2017-05-18/591d67cf59a24.jpg'),
(2, 'XML基础教程', '耿祥义', '清华大学出版社', '计算机类', '35.2', '2017-05-18/591d67cf59a24.jpg'),
(3, 'HTML网页设计', '王晓白', '重庆大学出版社', '计算机类', '30', '2017-05-18/591d66cc43af9.jpg'),
(4, '三国演义', '罗贯中', '人民出版社', '文史哲类', '40.5', '2017-05-18/591d675309272.jpg'),
(5, '西游记', '吴承恩', '人民出版社', '文史哲类', '45.2', '2017-05-18/591d67b65de82.jpg'),
(6, '水浒传', '施耐庵', '人民出版社', '文史哲类', '42.8', '2017-05-18/591d6793d44a0.jpg'),
(7, '红楼梦', '曹雪芹', '人民出版社', '文史哲类', '45.5', '2017-05-18/591d66b54af05.jpg'),
(8, 'Java程序设计', '耿祥义', '清华大学出版社', '计算机类', '38', '2017-05-18/591d66e877e94.jpg'),
(9, 'ASP网站开发', '刘明', '清华大学出版社', '计算机类', '25', '2017-05-18/591d65881fabc.jpg'),
(10, '管理学基础', '范伟', '重庆大学出版社', '文史哲类', '20', '2017-05-18/591d6673b2d5f.jpg'),
(11, '大学英语I', '外国人', '外文出版社', '文史哲类', '35.2', '2017-05-18/591d65fd2f36e.jpg'),
(12, '大学英语II', '外国人', '外文出版社', '文史哲类', '35.2', '2017-05-18/591d65fd2f36e.jpg'),
(13, '大学英语III', '外国人', '外文出版社', '文史哲类', '35.2', '2017-05-18/591d65fd2f36e.jpg'),
(14, '大学英语IV', '外国人', '外文出版社', '文史哲类', '35.2', '2017-05-18/591d65fd2f36e.jpg'),
(15, 'DIV+CSS开发', '张帆', '清华大学出版社', '计算机类', '40', '2017-05-18/591d664f59035.jpg'),
(16, '古诗词鉴赏', '高丹', '人民出版社', '文史哲类', '45', '2017-05-18/591d66969cb32.jpg'),
(17, '三字经', '刘汉', '人民出版社', '文史哲类', '25', '2017-05-18/591d6770667e4.jpg'),
(18, '千字文', '梁州', '人民出版社', '文史哲类', '30', '2017-05-18/591d673c75f84.jpg'),
(19, 'PHP基础', '传智播客', '重庆大学出版社', '计算机类', '45', '2017-05-18/591d6705a06a5.jpg'),
(20, 'PHP高级开发', '传智播客', '重庆大学出版社', '计算机类', '45', '2017-05-18/591cfb3dbc9f3.jpg'),
(21, 'MySQL数据库入门', '刘敏', '重庆大学出版社', '计算机类', '37', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `lc_users`
--

CREATE TABLE `lc_users` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `userpwd` varchar(10) NOT NULL,
  `usersex` varchar(2) NOT NULL,
  `userphoto` varchar(50) NOT NULL,
  `useraihao` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lc_users`
--

INSERT INTO `lc_users` (`id`, `username`, `userpwd`, `usersex`, `userphoto`, `useraihao`) VALUES
(6, 'dd', 'ddd', '男', '2018-04-23/5add2408bf8ae.jpg', '游泳，乒乓球，羽毛球'),
(5, 'cc', 'cc', '女', '2018-04-23/5add218b47117.jpg', '唱歌，爬山');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lc_books`
--
ALTER TABLE `lc_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc_users`
--
ALTER TABLE `lc_users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `lc_books`
--
ALTER TABLE `lc_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用表AUTO_INCREMENT `lc_users`
--
ALTER TABLE `lc_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
