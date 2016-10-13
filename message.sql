-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-10-12 17:12:17
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `message`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_message`
--

CREATE TABLE IF NOT EXISTS `tp_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `filename` varchar(30) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `tp_message`
--

INSERT INTO `tp_message` (`id`, `title`, `content`, `filename`, `time`, `uid`) VALUES
(14, '天气', '晴朗', '57f8a8d9ab523.jpg', 1475913945, 20),
(13, '我想留言', '我要留意', '', 1475913546, 20),
(4, '题目3', '内容3', '57d691b423ca1.gif', 1473679796, 18),
(18, '留言', '留言出来留言人', '57fe49418c09f.jpg', 1476282689, 20),
(6, '', '2016.9.12', '', 1473679992, 19),
(7, '题目5', '啊啊啊啊啊啊啊', '57d692979ce11.gif', 1473680023, 19),
(15, '阳光', '不错', '57f8a9173684b.jpg', 1475914007, 20),
(11, 'sdsf', 'sdfsdf', '57f79125b4ea0.jpg', 0, 25),
(12, 'wshidumei', 'dsdsfdf', '57f7917bc027b.jpg', 1475842427, 25),
(16, '不要跳转', '有没有', '57f8a93e2b9dc.jpg', 1475914046, 20),
(17, '不要跳转', '有没有', '57f8a956295ac.jpg', 1475914070, 20),
(19, '人', '出来人', '57fe49f4b3f85.jpg', 1476282868, 20),
(20, '人', '人', '57fe4a484455c.jpg', 1476282952, 20),
(21, '人啊', '人啊', '57fe4aad20f4a.jpg', 1476283053, 20),
(22, '人啊啊', '人啊啊啊', '57fe4c0d0159f.jpg', 1476283405, 20),
(23, '人拉拉', '人拉拉', '57fe4cc7049a7.jpg', 1476283591, 20),
(24, '人啊', '人啊啊', '57fe4d2f905a3.jpg', 1476283695, 20),
(25, '来人', '来人啊', '57fe4d73f12e3.jpg', 1476283763, 20),
(26, '破', '哦婆婆', '57fe4e16cff9d.jpg', 1476283926, 20),
(27, '辅导费', '双方都 ', '57fe4e91efa71.jpg', 1476284049, 20),
(28, '地方', '士大夫 ', '57fe4eb73a2dd.jpg', 1476284087, 20),
(29, 'sDV', '色法色法', '57fe4f40e9235.jpg', 1476284224, 20);

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE IF NOT EXISTS `tp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `sex` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `username`, `password`, `sex`) VALUES
(25, 'dumei', '123', 1),
(24, 'heyudi', '123', 1),
(22, 'qiuhui', '123', 1),
(26, '王佳欢', 'ww19720827120026', 1),
(21, 'zhangxueying', '123', 0),
(20, 'wangjiahuan', '123', 0),
(19, 'wjh123', '123', 0),
(18, 'text123', '123', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
