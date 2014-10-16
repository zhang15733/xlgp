-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014-10-04 10:09:27
-- 服务器版本： 10.0.13-MariaDB-log
-- PHP Version: 5.6.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meiju`
--

-- --------------------------------------------------------

--
-- 表的结构 `favorite_video`
--

CREATE TABLE IF NOT EXISTS `favorite_video` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `video_id` int(10) unsigned NOT NULL,
  `mark_time` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `favorite_video`
--

INSERT INTO `favorite_video` (`id`, `user_id`, `video_id`, `mark_time`) VALUES
(1, 1, 1, '2014-10-02'),
(4, 1, 2, '2014-10-02');

-- --------------------------------------------------------

--
-- 表的结构 `favorite_word`
--

CREATE TABLE IF NOT EXISTS `favorite_word` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `word_id` int(10) unsigned NOT NULL,
  `mark_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `pharse`
--

CREATE TABLE IF NOT EXISTS `pharse` (
`id` int(10) unsigned NOT NULL,
  `content` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL COMMENT '该句中重要的单词',
  `video_id` int(10) unsigned NOT NULL,
  `time` datetime NOT NULL COMMENT '该句中的单词所在的时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `playrecord`
--

CREATE TABLE IF NOT EXISTS `playrecord` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `video_id` int(10) unsigned NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) unsigned NOT NULL,
  `avatar` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `name` varchar(32) NOT NULL,
  `password` char(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `lastlogin` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `avatar`, `name`, `password`, `email`, `lastlogin`) VALUES
(1, NULL, '文文同学', 'b0583f9eb78dcd68ac11e630eb84211f', 'zhang15733@sina.cn', '2014-10-02');

-- --------------------------------------------------------

--
-- 表的结构 `user_pharse`
--

CREATE TABLE IF NOT EXISTS `user_pharse` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `video_id` int(10) unsigned NOT NULL,
  `mark_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `video`
--

CREATE TABLE IF NOT EXISTS `video` (
`id` int(10) unsigned NOT NULL,
  `title_en` varchar(128) NOT NULL COMMENT '视频英文标题',
  `title_zh` varchar(128) DEFAULT NULL COMMENT '视频中文标题',
  `intro` text NOT NULL COMMENT '视频介绍',
  `path` varchar(255) NOT NULL COMMENT '视频路径',
  `poster` varchar(255) NOT NULL COMMENT '视频封面',
  `play_count` int(11) NOT NULL DEFAULT '0' COMMENT '播放记录',
  `upload_time` date NOT NULL,
  `category` varchar(32) NOT NULL COMMENT '视频所在分类'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `video`
--

INSERT INTO `video` (`id`, `title_en`, `title_zh`, `intro`, `path`, `poster`, `play_count`, `upload_time`, `category`) VALUES
(1, 'Friends', '老友记', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//friends.jpg', 6, '2014-09-29', '生活专题'),
(2, 'Friends', '老友记', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//friends.jpg', 5, '2014-09-29', '生活专题'),
(3, 'Modernfamily', '摩登家庭', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//modernfamily.jpg', 1, '2014-09-29', '生活专题'),
(4, 'Boston Legal', '波士顿法律 ', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//boston_legal.jpg', 2, '2014-09-29', '生活专题'),
(5, 'Desperate Housewives', '绝望的主妇 ', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//des_wives.jpg', 6, '2014-09-29', '生活专题'),
(6, 'Criminal Minds', '犯罪心理 ', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//criminal_mind.jpg', 10, '2014-10-01', '生活专题'),
(7, 'Mad Men', '广告狂人', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//mad_men.jpg', 0, '2014-10-01', '生活专题'),
(8, '2 Broke Girls', '破产姐妹', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//break_girls.jpg', 1, '2014-10-01', '生活专题'),
(9, 'Vampire', '吸血鬼', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//vampire.jpg', 3, '2014-10-01', '生活专题'),
(10, 'One Upon a Time', '童话镇', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//one_upon_a_time.jpg', 0, '2014-10-01', '生活专题'),
(11, 'One Upon a Time', '童话镇', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//one_upon_a_time.jpg', 12, '2014-10-01', '生活专题'),
(12, 'One Upon a Time', '童话镇', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//one_upon_a_time.jpg', 0, '2014-10-01', '生活专题'),
(13, 'One Upon a Time', '童话镇', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//one_upon_a_time.jpg', 0, '2014-10-01', '生活专题'),
(14, 'One Upon a Time', '童话镇', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//one_upon_a_time.jpg', 0, '2014-10-01', '生活专题'),
(15, 'One Upon a Time', '童话镇', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//one_upon_a_time.jpg', 0, '2014-10-01', '生活专题'),
(16, 'One Upon a Time', '童话镇', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//one_upon_a_time.jpg', 0, '2014-10-01', '生活专题'),
(17, 'One Upon a Time', '童话镇', '《老友记/六人行》（英文：Friends）是美国一套久映电视荧幕十年的幽默情景喜剧系列，被公认为史上最成功、世界影响力最大的美剧之一。', 'video/lyj.mp4', 'style/index/image//one_upon_a_time.jpg', 1, '2014-10-01', '生活专题'),
(18, 'Boston Legal', '波士顿法律', '《波士顿法律》（Boston Legal）是讲述的是美国波士顿市一家律师事务所的故事，主要是两位活宝Alan(James Spader）扮演，曾凭该剧三夺艾美奖最佳男主角奖）和 Denny (William Shatner扮演），每集一般有两个官司要打，穿插办公室和个人生活的趣事，每集最后Alan和Denny在阳台夜话的是粉丝的一大爱好，只有这一刻，得一知己，把酒言欢，足以。', 'video/lyj.mp4', 'style/index/image//boston_legal.jpg', 30, '2014-10-03', '法律专题'),
(19, 'Mad Men', '广告狂人', '1960年代，美国的广告业步入全盛时代，位于曼哈顿的麦迪逊大道有数百家广告公司，斯特林·库帕公司堪称行业中的佼佼者。创意总监唐·德雷柏（乔·哈姆 Jon Hamm 饰）面容英俊，体格健硕，足智多谋，仿佛广告业中的007。', 'video/lyj.mp4', 'style/index/image//mad_men.jpg', 3, '2014-10-03', '娱乐专题');

-- --------------------------------------------------------

--
-- 表的结构 `word`
--

CREATE TABLE IF NOT EXISTS `word` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '单词名',
  `exp` varchar(255) NOT NULL COMMENT '单词的解释，词性',
  `year` int(11) NOT NULL DEFAULT '2014' COMMENT '四六级等时间',
  `level` varchar(32) NOT NULL,
  `voice` varchar(255) NOT NULL COMMENT '单词发音（暂不考虑）'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='单词表';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorite_video`
--
ALTER TABLE `favorite_video`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `u_user_video` (`user_id`,`video_id`);

--
-- Indexes for table `favorite_word`
--
ALTER TABLE `favorite_word`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharse`
--
ALTER TABLE `pharse`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playrecord`
--
ALTER TABLE `playrecord`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_pharse`
--
ALTER TABLE `user_pharse`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uk_user_pharse` (`user_id`,`video_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `word`
--
ALTER TABLE `word`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorite_video`
--
ALTER TABLE `favorite_video`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `favorite_word`
--
ALTER TABLE `favorite_word`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pharse`
--
ALTER TABLE `pharse`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `playrecord`
--
ALTER TABLE `playrecord`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_pharse`
--
ALTER TABLE `user_pharse`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `word`
--
ALTER TABLE `word`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
