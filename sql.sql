-- phpMyAdmin SQL Dump
-- version 4.0.10.11
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016-01-06 17:48:46
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `tpoa`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_admin`
--

CREATE TABLE IF NOT EXISTS `tp_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `loginip` varchar(15) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `edittime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tp_admin`
--

INSERT INTO `tp_admin` (`id`, `username`, `password`, `loginip`, `addtime`, `edittime`) VALUES
(3, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', 1451585930, 1451783836),
(4, 'hzw', '21232f297a57a5a743894a0e4a801fc3', '127.0.0.1', 1451585930, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tp_diaocha`
--

CREATE TABLE IF NOT EXISTS `tp_diaocha` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `subject` int(10) unsigned NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT '1',
  `content` text,
  `ip` varchar(20) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1040 ;

--
-- 转存表中的数据 `tp_diaocha`
--

INSERT INTO `tp_diaocha` (`id`, `username`, `subject`, `type`, `level`, `content`, `ip`, `addtime`) VALUES
(1036, '小网', 4, 2, 3, '难到包', '127.0.0.1', '2016-01-02 00:00:00'),
(1037, '小羊', 5, 4, 4, 'so easy', '127.0.0.1', '2016-01-02 00:00:00'),
(1038, '小赵', 7, 2, 4, '臣妾不敢啊', '127.0.0.1', '2016-01-03 00:00:00'),
(1039, '小李', 4, 2, 4, 'sadf', '127.0.0.1', '2016-01-03 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `tp_kaoqin`
--

CREATE TABLE IF NOT EXISTS `tp_kaoqin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `truename` varchar(20) NOT NULL,
  `subject` int(11) NOT NULL,
  `addtime` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tp_kaoqin`
--

INSERT INTO `tp_kaoqin` (`id`, `truename`, `subject`, `addtime`) VALUES
(1, '小海', 4, '2016-01-02'),
(2, '小海', 4, '2016-01-02'),
(3, '哒哒', 9, '2016-01-02'),
(4, '小海', 4, '2016-01-02'),
(5, '哒哒', 9, '2016-01-02'),
(6, '哈哈', 4, '2016-01-02'),
(7, '小绿', 4, '2016-01-02');

-- --------------------------------------------------------

--
-- 表的结构 `tp_message`
--

CREATE TABLE IF NOT EXISTS `tp_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `filepath` varchar(255) DEFAULT NULL,
  `content` text,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tp_message`
--

INSERT INTO `tp_message` (`id`, `title`, `filepath`, `content`, `addtime`) VALUES
(3, '蓝', '2016-01-02/5687cdfde41c5.jpg', '三体作者', 1451740669),
(4, '孩子', '2016-01-02/5687d198346a0.jpg', '&lt;p&gt;大刘啊啊啊啊啊&lt;/p&gt;\r\n', 1451741592),
(5, '哈哈', '2016-01-02/5687dce3b212a.jpg', '&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;/Uploads/images/201601022221083i76ac.jpg&quot; style=&quot;width: 986px; height: 1200px;&quot; /&gt;&lt;/p&gt;\r\n', 1451744483);

-- --------------------------------------------------------

--
-- 表的结构 `tp_student`
--

CREATE TABLE IF NOT EXISTS `tp_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `truename` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(10) unsigned NOT NULL,
  `tel` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `addtime` int(11) NOT NULL,
  `edittime` int(11) DEFAULT '1451477395',
  `remark` varchar(255) DEFAULT NULL,
  `subject` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `tp_student`
--

INSERT INTO `tp_student` (`id`, `username`, `password`, `truename`, `sex`, `age`, `tel`, `address`, `addtime`, `edittime`, `remark`, `subject`) VALUES
(3, 'zhaosi', 'e10adc3949ba59abbe56e057f20f883e', '赵四', '女', 34, '1231231231', '北京市', 1451477395, NULL, 'asdfsafsadfsdfsdf', 4),
(6, 'hzw', 'e10adc3949ba59abbe56e057f20f883e', '大大', '男', 23, '12323232323', '还原', 1451482102, NULL, '哈哈哈哈哈哈', 5),
(7, 'sanzi', 'c33367701511b4f6020ec61ded352059', '桑子', '女', 23, '1231231231', '广州番禺', 1451483522, 1451712002, '密码修改了', 4),
(8, 'xioahui', 'e10adc3949ba59abbe56e057f20f883e', '小孩', '男', 14, '13535343567', '上海市', 1451523703, NULL, '侬做啥', 8),
(9, 'xixi', 'e10adc3949ba59abbe56e057f20f883e', '西西', '女', 23, '13423453423', '广州番禺', 1451528668, NULL, '...', 7),
(10, 'dada', '976450e9178380b39f0ea04dc1e1b512', '哒哒', '男', 34, '132342354', '广州天河', 1451536459, NULL, '对方答复', 9),
(11, 'xiaoyu', 'e10adc3949ba59abbe56e057f20f883e', '小于', '女', 23, '13434134323', '广州花都', 1451698583, NULL, '阿斯蒂芬', 9),
(13, 'xiaosha', 'e10adc3949ba59abbe56e057f20f883e', '小沙', '女', 34, '13434134323', '广州花都', 1451698643, NULL, '阿斯蒂芬', 4),
(16, 'haha', 'e10adc3949ba59abbe56e057f20f883e', '哈哈', '男', 34, '13243233432', '', 1451711058, NULL, '呵呵呵呵呵', 4),
(17, 'xiaolv', 'e10adc3949ba59abbe56e057f20f883e', '小绿', '女', 23, '13434134323', '广州', 1451716178, 1451477395, '斯蒂芬', 4),
(18, 'xiaohai', 'e10adc3949ba59abbe56e057f20f883e', '小海', '男', 34, '13434134323', '广州', 1451716204, 1451477395, '的', 4);

-- --------------------------------------------------------

--
-- 表的结构 `tp_subject`
--

CREATE TABLE IF NOT EXISTS `tp_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `room` varchar(30) NOT NULL,
  `remark` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tp_subject`
--

INSERT INTO `tp_subject` (`id`, `title`, `room`, `remark`) VALUES
(4, 'PHP14期就业班', 'a201', '啊的发射点发射得分'),
(5, 'PHP15期基础班', 'a202', '阿斯蒂芬'),
(7, 'IOS12期基础班', 'a203', ''),
(9, 'JAVA20期基础班', 'a205', 'JAVA'),
(10, '.NET就业班', 'b203', '啊的发射点发');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
