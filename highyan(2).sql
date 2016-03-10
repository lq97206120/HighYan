-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 03 月 09 日 21:57
-- 服务器版本: 5.5.41
-- PHP 版本: 5.3.10-1ubuntu3.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `highyan`
--

-- --------------------------------------------------------

--
-- 表的结构 `hy_access`
--

CREATE TABLE IF NOT EXISTS `hy_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hy_access`
--

INSERT INTO `hy_access` (`role_id`, `node_id`, `level`, `module`) VALUES
(1, 52, 3, NULL),
(1, 51, 3, NULL),
(1, 50, 3, NULL),
(1, 16, 2, NULL),
(1, 47, 3, NULL),
(1, 46, 3, NULL),
(1, 45, 3, NULL),
(1, 48, 3, NULL),
(3, 63, 3, NULL),
(4, 123, 3, NULL),
(2, 63, 3, NULL),
(2, 62, 3, NULL),
(1, 49, 3, NULL),
(1, 15, 2, NULL),
(1, 44, 3, NULL),
(1, 43, 3, NULL),
(1, 42, 3, NULL),
(1, 14, 2, NULL),
(1, 41, 3, NULL),
(1, 40, 3, NULL),
(4, 122, 3, NULL),
(1, 39, 3, NULL),
(1, 38, 3, NULL),
(1, 99, 3, NULL),
(1, 98, 3, NULL),
(1, 121, 3, NULL),
(1, 120, 3, NULL),
(1, 13, 2, NULL),
(1, 30, 3, NULL),
(1, 29, 3, NULL),
(1, 28, 3, NULL),
(1, 27, 3, NULL),
(1, 26, 3, NULL),
(1, 25, 3, NULL),
(1, 24, 3, NULL),
(1, 23, 3, NULL),
(1, 22, 3, NULL),
(1, 11, 2, NULL),
(1, 37, 3, NULL),
(1, 36, 3, NULL),
(1, 35, 3, NULL),
(1, 34, 3, NULL),
(1, 33, 3, NULL),
(1, 32, 3, NULL),
(1, 31, 3, NULL),
(1, 12, 2, NULL),
(1, 58, 3, NULL),
(1, 57, 3, NULL),
(1, 56, 3, NULL),
(1, 17, 2, NULL),
(1, 61, 3, NULL),
(1, 60, 3, NULL),
(1, 59, 3, NULL),
(2, 126, 3, NULL),
(2, 104, 3, NULL),
(2, 103, 3, NULL),
(2, 102, 3, NULL),
(2, 101, 3, NULL),
(2, 100, 3, NULL),
(2, 78, 3, NULL),
(2, 77, 3, NULL),
(2, 76, 3, NULL),
(2, 75, 3, NULL),
(2, 74, 3, NULL),
(2, 73, 3, NULL),
(2, 72, 3, NULL),
(2, 71, 3, NULL),
(2, 70, 3, NULL),
(2, 69, 3, NULL),
(2, 68, 3, NULL),
(2, 67, 3, NULL),
(2, 66, 3, NULL),
(2, 65, 3, NULL),
(2, 19, 2, NULL),
(2, 107, 3, NULL),
(2, 106, 3, NULL),
(2, 105, 3, NULL),
(2, 79, 3, NULL),
(2, 80, 3, NULL),
(2, 81, 3, NULL),
(2, 92, 3, NULL),
(2, 91, 3, NULL),
(2, 90, 3, NULL),
(2, 89, 3, NULL),
(3, 62, 3, NULL),
(3, 126, 3, NULL),
(3, 104, 3, NULL),
(3, 103, 3, NULL),
(3, 102, 3, NULL),
(3, 101, 3, NULL),
(3, 100, 3, NULL),
(3, 78, 3, NULL),
(3, 77, 3, NULL),
(3, 76, 3, NULL),
(3, 75, 3, NULL),
(3, 74, 3, NULL),
(3, 73, 3, NULL),
(3, 72, 3, NULL),
(3, 71, 3, NULL),
(3, 70, 3, NULL),
(3, 69, 3, NULL),
(4, 95, 3, NULL),
(4, 94, 3, NULL),
(4, 93, 3, NULL),
(4, 21, 2, NULL),
(2, 88, 3, NULL),
(3, 68, 3, NULL),
(4, 1, 1, NULL),
(1, 18, 2, NULL),
(1, 1, 1, NULL),
(1, 53, 3, NULL),
(1, 54, 3, NULL),
(1, 55, 3, NULL),
(2, 87, 3, NULL),
(2, 86, 3, NULL),
(2, 85, 3, NULL),
(2, 84, 3, NULL),
(2, 83, 3, NULL),
(2, 82, 3, NULL),
(2, 20, 2, NULL),
(2, 1, 1, NULL),
(3, 67, 3, NULL),
(3, 66, 3, NULL),
(3, 65, 3, NULL),
(3, 19, 2, NULL),
(3, 1, 1, NULL),
(4, 96, 3, NULL),
(4, 97, 3, NULL),
(4, 124, 3, NULL),
(5, 119, 3, NULL),
(5, 118, 3, NULL),
(5, 117, 3, NULL),
(5, 116, 3, NULL),
(5, 115, 3, NULL),
(5, 114, 2, NULL),
(5, 1, 1, NULL),
(6, 1, 1, NULL),
(6, 108, 2, NULL),
(6, 111, 3, NULL),
(6, 112, 3, NULL),
(6, 113, 3, NULL),
(6, 110, 3, NULL),
(6, 109, 3, NULL),
(5, 125, 3, NULL),
(3, 64, 3, NULL),
(2, 64, 3, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `hy_book`
--

CREATE TABLE IF NOT EXISTS `hy_book` (
  `bnum` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(20) NOT NULL,
  `bmale` tinyint(1) NOT NULL DEFAULT '1',
  `bphone` varchar(16) NOT NULL DEFAULT '',
  `bstatus` tinyint(1) NOT NULL DEFAULT '0',
  `bdate` int(10) NOT NULL,
  `bsid` int(10) NOT NULL,
  `bshopsname` varchar(50) NOT NULL,
  `buid` int(10) NOT NULL,
  `buname` varchar(20) NOT NULL,
  `bunum` varchar(8) NOT NULL,
  UNIQUE KEY `bnum` (`bnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1000000010 ;

--
-- 转存表中的数据 `hy_book`
--

INSERT INTO `hy_book` (`bnum`, `bname`, `bmale`, `bphone`, `bstatus`, `bdate`, `bsid`, `bshopsname`, `buid`, `buname`, `bunum`) VALUES
(1000000000, '张三', 1, '13945687523', 1, 0, 1, '松江店', 34, 'employee2', '100112'),
(1000000001, '李四', 0, '134', 1, 0, 1, '松江店', 34, 'employee2', '100112'),
(1000000002, '赵五', 1, '1234548354', 0, 2015, 4, '杨浦店', 34, '', ''),
(1000000003, '王六', 1, '213', 1, 2015, 1, '松江店', 8, 'employee3', '100113'),
(1000000004, '神龙', 1, '13', 1, 1451540049, 1, '松江店', 8, 'employee3', '100113'),
(1000000005, '玄武', 1, '1312321', 0, 1451540358, 1, '松江店', 0, '', ''),
(1000000006, '朱雀', 0, '123213', 1, 1451540792, 1, '松江店', 3, '店长A', '100101'),
(1000000007, 'bleach', 1, '21321', 0, 1457409217, 1, '上海衡山店', 0, '', ''),
(1000000008, '64t', 1, '4235', 0, 1457409749, 1, '上海衡山店', 0, '', ''),
(1000000009, 'kaer', 1, '545', 0, 1457410856, 1, '上海衡山店', 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `hy_express`
--

CREATE TABLE IF NOT EXISTS `hy_express` (
  `eid` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `edate` int(10) NOT NULL,
  `pexpress` varchar(12) NOT NULL,
  `pexpressnum` varchar(20) NOT NULL,
  `sgetstatus` tinyint(1) NOT NULL DEFAULT '0',
  `sexpress` varchar(12) NOT NULL,
  `sexpressnum` varchar(20) NOT NULL,
  `pgetstatus` tinyint(1) NOT NULL DEFAULT '0',
  `eclass` tinyint(1) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- 转存表中的数据 `hy_express`
--

INSERT INTO `hy_express` (`eid`, `edate`, `pexpress`, `pexpressnum`, `sgetstatus`, `sexpress`, `sexpressnum`, `pgetstatus`, `eclass`) VALUES
(1, 1453117613, '顺丰', '0000222233', 0, '', '', 0, 0),
(2, 1453117688, '22222', '323232323', 0, '', '', 0, 0),
(3, 1453169670, '阿三地方', '65656556', 0, '', '', 1, 0),
(4, 1453169727, '打发222', '8787853455', 0, '', '', 1, 0),
(5, 1453170789, '989898', '899898', 0, '', '', 0, 0),
(6, 1453171023, '6767', '767', 0, '', '', 0, 0),
(7, 1453172652, '顺丰22', '1111111', 1, '圆通1', '132132131334', 1, 0),
(8, 1453203896, '顺丰', '123213123123', 1, '申通', '45454545', 1, 0),
(9, 1453204017, '云大', '743535', 1, '234234', '324234423', 1, 0),
(10, 1453204697, '1312321', '司法地方213', 1, '231232', '231332313', 1, 1),
(11, 1453257468, '23213', '4324234234234', 1, '34234', '3123213213', 1, 0),
(12, 1453257701, '3123', '123213213', 1, '324', 'wewe', 1, 0),
(13, 1453258501, '2323', '213213', 1, '234324', '34234234324', 1, 1),
(14, 1453285528, '圆通', '321321313', 1, 'x韵达', 'x23123123', 1, 0),
(15, 1453285681, '顺丰', '123123123', 1, 'x驱蚊器', 'x23132132133', 1, 1),
(16, 1453285778, '韵达', '21344657', 1, 'x23213', 'x3423', 1, 1),
(17, 1453690728, 'x手动阀', 'x2321321323', 0, '', '', 0, 0),
(22, 1453698747, '脚后跟', '34324656', 1, '6565', '343242342', 1, 0),
(23, 1453698795, '就会', '56764634', 1, 'jhgjgj', '454355324', 1, 1),
(24, 1453699684, '酒馆喝酒', '456686878', 1, '', '', 0, 1),
(25, 1453710186, '顺丰', '745344532412', 1, '圆通', '765454324', 0, 0),
(26, 1453712363, '韵达', '54232123', 1, '韵达', '54335433', 1, 0),
(27, 1453712421, '申通', '23213213', 1, '铁通', '232321554', 1, 1),
(28, 1453712594, '铁通', '32131235', 1, '', '', 0, 1),
(29, 1456731598, 'dfsdf', '131215', 1, '发的', '23213213', 1, 0),
(30, 1456731827, '123', '321314', 1, '发士大夫', '23213213123', 1, 1),
(31, 1456731960, 'afads', ' 213213', 0, '', '', 0, 1),
(32, 1457099088, '333', '热尔额体育', 0, '', '', 0, 0),
(33, 1457104385, '7', '76784343dfg', 0, '', '', 0, 0),
(34, 1457106480, '100123', '麻烦高富帅的', 0, '', '', 0, 0),
(35, 1457432697, '顺丰', '232325465', 0, '', '', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `hy_express_order`
--

CREATE TABLE IF NOT EXISTS `hy_express_order` (
  `express_id` int(10) NOT NULL,
  `order_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hy_express_order`
--

INSERT INTO `hy_express_order` (`express_id`, `order_num`) VALUES
(7, 1000000026),
(8, 1000000026),
(9, 1000000026),
(0, 1000000026),
(10, 1000000026),
(11, 1000000023),
(12, 1000000023),
(13, 1000000023),
(14, 1000000027),
(15, 1000000027),
(16, 1000000027),
(17, 1000000030),
(22, 1000000032),
(23, 1000000032),
(24, 1000000032),
(25, 1000000033),
(26, 1000000035),
(27, 1000000035),
(28, 1000000035),
(29, 1000000036),
(30, 1000000036),
(31, 1000000036),
(32, 1000000045),
(33, 1000000042),
(34, 1000000041),
(35, 1000000046);

-- --------------------------------------------------------

--
-- 表的结构 `hy_goods`
--

CREATE TABLE IF NOT EXISTS `hy_goods` (
  `gid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gnum` varchar(8) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `gclass` int(1) NOT NULL DEFAULT '1',
  `gstatus` tinyint(1) NOT NULL DEFAULT '1',
  `gprice` float NOT NULL,
  PRIMARY KEY (`gid`),
  UNIQUE KEY `gnum` (`gnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `hy_goods`
--

INSERT INTO `hy_goods` (`gid`, `gnum`, `gname`, `gclass`, `gstatus`, `gprice`) VALUES
(1, '100000', 'nike的背心', 3, 1, 0),
(2, '100001', '衬衫', 1, 1, 300),
(3, '100002', 'northface裤子', 2, 1, 500),
(4, '100003', '战地吉普上衣', 1, 1, 1000),
(5, '100004', '美特斯邦威夹克', 1, 1, 2000);

-- --------------------------------------------------------

--
-- 表的结构 `hy_goods_shop`
--

CREATE TABLE IF NOT EXISTS `hy_goods_shop` (
  `goods_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hy_goods_shop`
--

INSERT INTO `hy_goods_shop` (`goods_id`, `shop_id`) VALUES
(3, 4),
(1, 4),
(4, 6),
(1, 6),
(2, 3),
(2, 4),
(2, 6),
(2, 7),
(2, 1),
(4, 1),
(5, 1),
(3, 1),
(1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `hy_inform`
--

CREATE TABLE IF NOT EXISTS `hy_inform` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `ititle` varchar(32) NOT NULL,
  `icontent` varchar(255) NOT NULL,
  `idate` int(10) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `hy_inform`
--

INSERT INTO `hy_inform` (`iid`, `ititle`, `icontent`, `idate`) VALUES
(2, '添加公告测试', 'safasdff', 1451447240),
(3, '中共中央政治局召开专题民主生活会', '新华网北京12月29日电  按照党中央关于在县处级以上领导干部中开展“三严三实”专题教育的部署，中共中央政治局于12月28日至29日召开专题民主生活会，围绕中央政治局带头践行严以修身、严以用权、严以律己、谋事要实、创业要实、做人要实的要求，联系中央政治局工作，联系党的十八', 1451447328);

-- --------------------------------------------------------

--
-- 表的结构 `hy_memb`
--

CREATE TABLE IF NOT EXISTS `hy_memb` (
  `mnum` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mmarrydate` date NOT NULL,
  `mhigh` varchar(8) NOT NULL,
  `mweight` varchar(8) NOT NULL,
  `mmail` varchar(20) NOT NULL,
  `mwechat` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mphone` varchar(16) NOT NULL,
  `mstatus` tinyint(1) NOT NULL DEFAULT '1',
  `mmale` tinyint(1) NOT NULL DEFAULT '1',
  `mpoints` float NOT NULL DEFAULT '0',
  `mdate` date NOT NULL,
  PRIMARY KEY (`mnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10000006 ;

--
-- 转存表中的数据 `hy_memb`
--

INSERT INTO `hy_memb` (`mnum`, `mmarrydate`, `mhigh`, `mweight`, `mmail`, `mwechat`, `mname`, `mphone`, `mstatus`, `mmale`, `mpoints`, `mdate`) VALUES
(10000000, '0000-00-00', '', '', '', '', '张三44', '13542687856', 1, 0, 2323, '0000-00-00'),
(10000001, '0000-00-00', '', '', '', '', '王五', '1234343', 1, 1, 0, '2015-12-10'),
(10000002, '0000-00-00', '', '', '', '', '铭刻', '21323', 1, 1, 0, '2015-12-24'),
(10000003, '0000-00-00', '', '', '', '', '深度', '123213', 1, 1, 0, '2015-12-16'),
(10000004, '2016-03-02', '2221', '3331', '444@qq.com1', '44441', '咳咳咳1', '1111', 1, 1, 1, '2016-03-01'),
(10000005, '2016-03-22', 'ww12345', 'ee12345', 'rr12345', 'tt12345', '额头12', 'qq123', 1, 1, 0, '2016-03-21');

-- --------------------------------------------------------

--
-- 表的结构 `hy_menu`
--

CREATE TABLE IF NOT EXISTS `hy_menu` (
  `mid` int(3) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mcontent` text NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hy_menu`
--

INSERT INTO `hy_menu` (`mid`, `mname`, `mcontent`) VALUES
(1, '首页', '<p><img src="/HighYan/Uploads/image/20160105/1451982380771378.gif" style="" title="1451982380771378.gif"/></p><p><img src="/HighYan/Uploads/image/20160105/1451982380848280.gif" style="" title="1451982380848280.gif"/></p><p><img src="/HighYan/Uploads/image/20160105/1451982380114815.gif" style="" title="1451982380114815.gif"/></p><p><a target="_self" href="http://localhost/HighYan/index.php/Index/Index/index/mid/4.html"><img src="/HighYan/Uploads/image/20160105/1451982380829482.gif" style="float:left;width:25%;" title="1451982380829482.gif"/></a> &nbsp; &nbsp;<a target="_self" href="http://localhost/HighYan/index.php/Index/Index/index/mid/5.html"><img src="/HighYan/Uploads/image/20160105/1451982380943986.gif" style="float:left;width:25%;" title="1451982380943986.gif"/></a> &nbsp; &nbsp;<a target="_self" href="http://localhost/HighYan/index.php/Index/Index/index/mid/3.html"><img src="/HighYan/Uploads/image/20160105/1451982380106615.gif" style="float:left;width:25%;" title="1451982380106615.gif"/></a> &nbsp; &nbsp;<a target="_self" href="http://localhost/HighYan/index.php/Index/Index/contactus.html"><img src="/HighYan/Uploads/image/20160105/1451982380103398.gif" style="float:left;width:25%;" title="1451982380103398.gif"/></a></p><p><img src="/HighYan/Uploads/image/20160105/1451982438621456.gif" title="1451982438621456.gif" alt="index_jiehunji.gif"/></p>'),
(2, '结婚季', '<p><img alt="jiehunji.gif" src="/HighYan/Uploads/image/20151231/1451532896597701.gif" title="1451532896597701.gif"/></p>'),
(3, '优秀案例', '<img alt="homepage.gif" src="/HighYan/Uploads/image/20151231/1451532947130016.gif" title="1451532947130016.gif"/>'),
(4, '产品系列', '<p><img src="/HighYan/Uploads/image/20160105/1451982587529962.gif" style="" title="1451982587529962.gif"/></p><p><img src="/HighYan/Uploads/image/20160105/1451982587882982.gif" style="" title="1451982587882982.gif"/></p><p><img src="/HighYan/Uploads/image/20160105/1451982612119897.gif" style="" title="1451982612119897.gif"/></p><p><img src="/HighYan/Uploads/image/20160105/1451982612873982.gif" style="" title="1451982612873982.gif"/></p><p><img src="/HighYan/Uploads/image/20160105/1451982612910877.gif" style="" title="1451982612910877.gif"/></p>'),
(5, '工艺展示', '<img alt="gongyizhanshi.gif" src="/HighYan/Uploads/image/20151231/1451532977405638.gif" title="1451532977405638.gif"/>');

-- --------------------------------------------------------

--
-- 表的结构 `hy_node`
--

CREATE TABLE IF NOT EXISTS `hy_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- 转存表中的数据 `hy_node`
--

INSERT INTO `hy_node` (`id`, `name`, `title`, `status`, `remark`, `sort`, `pid`, `level`) VALUES
(1, 'Admin', '后台应用', 1, NULL, 1, 0, 1),
(2, 'Rbac', '权限管理', 1, NULL, 1, 1, 2),
(3, 'index', '用户列表', 1, NULL, 1, 2, 3),
(4, 'role', '角色列表', 1, NULL, 1, 2, 3),
(5, 'node', '节点列表', 1, NULL, 1, 2, 3),
(6, 'addUser', '添加员工', 1, NULL, 1, 2, 3),
(7, 'addRole', '添加角色', 1, NULL, 1, 2, 3),
(8, 'addNode', '添加节点', 1, NULL, 1, 2, 3),
(12, 'Goods', '商品', 1, NULL, 1, 1, 2),
(11, 'Shop', '店铺', 1, NULL, 1, 1, 2),
(13, 'Order', '订单', 1, NULL, 1, 1, 2),
(14, 'Book', '预约', 1, NULL, 1, 1, 2),
(15, 'Memb', '会员', 1, NULL, 1, 1, 2),
(16, 'User', '员工', 1, NULL, 1, 1, 2),
(17, 'Inform', '公告', 1, NULL, 1, 1, 2),
(18, 'Front', '前台菜单', 1, NULL, 1, 1, 2),
(19, 'Employee', '店员', 1, NULL, 1, 1, 2),
(20, 'Shopleader', '店长', 1, NULL, 1, 1, 2),
(21, 'Provider', '供应商', 1, NULL, 1, 1, 2),
(22, 'index', '店铺列表', 1, NULL, 1, 11, 3),
(23, 'insert', '添加店铺', 1, NULL, 1, 11, 3),
(24, 'update', '更新店铺', 1, NULL, 1, 11, 3),
(25, 'delete', '删除店铺', 1, NULL, 1, 11, 3),
(26, 'searchuser', '查询部门', 1, NULL, 1, 11, 3),
(27, 'goodslist', '商品管理', 1, NULL, 1, 11, 3),
(28, 'goodslistHandle', '处理商品函数', 1, NULL, 1, 11, 3),
(29, 'frontset', '处理前台参数', 1, NULL, 1, 11, 3),
(30, 'frontsethandle', '处理前台参数函数', 1, NULL, 1, 11, 3),
(31, 'index', '商品列表', 1, NULL, 1, 12, 3),
(32, 'insert', '商品添加', 1, NULL, 1, 12, 3),
(33, 'update', '商品修改', 1, NULL, 1, 12, 3),
(34, 'delete', '商品删除', 1, NULL, 1, 12, 3),
(35, 'searchuser', '商品查询', 1, NULL, 1, 12, 3),
(36, 'shoplist', '商品分配', 1, NULL, 1, 12, 3),
(37, 'shoplistHandle', '商品分配函数', 1, NULL, 1, 12, 3),
(38, 'index', '订单列表', 1, NULL, 1, 13, 3),
(39, 'orderupdate', '订单更新', 1, NULL, 1, 13, 3),
(40, 'ordersearch', '订单查询', 1, NULL, 1, 13, 3),
(41, 'deleteorder', '订单删除', 1, NULL, 1, 13, 3),
(42, 'index', '预约列表', 1, NULL, 1, 14, 3),
(43, 'changebstatus', '处理预约单状态', 1, NULL, 1, 14, 3),
(44, 'searchuser', '预约查询', 1, NULL, 1, 14, 3),
(45, 'index', '会员列表', 1, NULL, 1, 15, 3),
(46, 'insert', '添加会员', 1, NULL, 1, 15, 3),
(47, 'update', '修改会员', 1, NULL, 1, 15, 3),
(48, 'searchuser', '会员查询', 1, NULL, 1, 15, 3),
(49, 'delete', '会员删除', 1, NULL, 1, 15, 3),
(50, 'index', '员工列表', 1, NULL, 1, 16, 3),
(51, 'delete', '删除员工', 1, NULL, 1, 16, 3),
(52, 'resetpwd', '重置密码', 1, NULL, 1, 16, 3),
(53, 'update', '员工更新', 1, NULL, 1, 16, 3),
(54, 'insert', '添加员工', 1, NULL, 1, 16, 3),
(55, 'searchuser', '查询员工', 1, NULL, 1, 16, 3),
(56, 'index', '公告列表', 1, NULL, 1, 17, 3),
(57, 'insert', '添加公告', 1, NULL, 1, 17, 3),
(58, 'deleteinform', '删除公告', 1, NULL, 1, 17, 3),
(59, 'menu', '菜单列表', 1, NULL, 1, 18, 3),
(60, 'editmenu', '编辑菜单', 1, NULL, 1, 18, 3),
(61, 'editmenuhandle', '编辑菜单函数', 1, NULL, 1, 18, 3),
(62, 'book', '预约列表', 1, NULL, 1, 19, 3),
(63, 'changebstatus', '处理预约状态', 1, NULL, 1, 19, 3),
(64, 'booksearch', '预约查询', 1, NULL, 1, 19, 3),
(65, 'selforder', '个人订单列表', 1, NULL, 1, 19, 3),
(66, 'orderinsert', '添加订单', 1, NULL, 1, 19, 3),
(67, 'readselforder', '读取个人订单', 1, NULL, 1, 19, 3),
(68, 'orderupdate', '更新个人订单', 1, NULL, 1, 19, 3),
(69, 'selfsearch', '个人订单查询', 1, NULL, 1, 19, 3),
(70, 'deleteorder', '个人订单删除', 1, NULL, 1, 19, 3),
(71, 'shoporder', '店铺订单列表', 1, NULL, 1, 19, 3),
(72, 'readshoporder', '读取店铺订单', 1, NULL, 1, 19, 3),
(73, 'shopsearch', '店铺订单查询', 1, NULL, 1, 19, 3),
(74, 'pullok', '处理打样状态', 1, NULL, 1, 19, 3),
(75, 'shopok', '处理成品状态', 1, NULL, 1, 19, 3),
(76, 'memb', '会员列表', 1, NULL, 1, 19, 3),
(77, 'insertmemb', '添加会员', 1, NULL, 1, 19, 3),
(78, 'searchmemb', '查询会员', 1, NULL, 1, 19, 3),
(79, 'order', '订单查询', 1, NULL, 1, 20, 3),
(80, 'orderinsert', '添加订单', 1, NULL, 1, 20, 3),
(81, 'readorder', '读取修改订单', 1, NULL, 1, 20, 3),
(82, 'orderupdate', '更新订单', 1, NULL, 1, 20, 3),
(83, 'ordersearch', '订单查询', 1, NULL, 1, 20, 3),
(84, 'deleteorder', '删除订单', 1, NULL, 1, 20, 3),
(85, 'pullok', '处理打样状态', 1, NULL, 1, 20, 3),
(86, 'shopok', '处理成品状态', 1, NULL, 1, 20, 3),
(87, 'user', '员工列表', 1, NULL, 1, 20, 3),
(88, 'insert', '添加员工', 1, NULL, 1, 20, 3),
(89, 'update', '更新员工信息', 1, NULL, 1, 20, 3),
(90, 'delete', '删除员工', 1, NULL, 1, 20, 3),
(91, 'goodslist', '商品列表', 1, NULL, 1, 20, 3),
(92, 'goodslistHandle', '处理商品函数', 1, NULL, 1, 20, 3),
(93, 'index', '订单列表', 1, NULL, 1, 21, 3),
(94, 'readorder', '读取订单', 1, NULL, 1, 21, 3),
(95, 'ordersearch', '订单查询', 1, NULL, 1, 21, 3),
(96, 'changepull', '处理打样状态', 1, NULL, 1, 21, 3),
(97, 'changeproviderok', '处理成品状态', 1, NULL, 1, 21, 3),
(98, 'readorder', '读取修改订单', 1, NULL, 1, 13, 3),
(99, 'allorderupdate', '处理订单修改函数', 1, NULL, 1, 13, 3),
(100, 'addRepair', '添加返修单', 1, NULL, 1, 19, 3),
(101, 'readExpressHandle', '处理流程句柄函数', 1, NULL, 1, 19, 3),
(102, 'readrepair', '读取返修单', 1, NULL, 1, 19, 3),
(103, 'readRepairHandle', '读取返修单句柄函数', 1, NULL, 1, 19, 3),
(104, 'readshoprepair', '读取店铺返修单', 1, NULL, 1, 19, 3),
(105, 'readExpressHandle', '读取流程句柄函数', 1, NULL, 1, 20, 3),
(106, 'readrepair', '读取返修单', 1, NULL, 1, 20, 3),
(107, 'readRepairHandle', '读取返修单句柄函数', 1, NULL, 1, 20, 3),
(108, 'Designer', '设计师', 1, NULL, 1, 1, 2),
(109, 'order', '读取订单', 1, NULL, 1, 108, 3),
(110, 'ordersearch', '订单查询', 1, NULL, 1, 108, 3),
(111, 'orderupdate', '订单更新', 1, NULL, 1, 108, 3),
(112, 'readorder', '读取订单', 1, NULL, 1, 108, 3),
(113, 'readrepair', '读取返修单', 1, NULL, 1, 108, 3),
(114, 'Inspector', '设计总监', 1, NULL, 1, 1, 2),
(115, 'order', '读取订单', 1, NULL, 1, 114, 3),
(116, 'ordersearch', '查询订单', 1, NULL, 1, 114, 3),
(117, 'orderupdate', '订单修改', 1, NULL, 1, 114, 3),
(118, 'readorder', '读取订单', 1, NULL, 1, 114, 3),
(119, 'readrepair', '读取返修单', 1, NULL, 1, 114, 3),
(120, 'readrepair', '读取返修单', 1, NULL, 1, 13, 3),
(121, 'readrepair', '读取返修单', 1, NULL, 1, 13, 3),
(122, 'addExpress', '添加流程', 1, NULL, 1, 21, 3),
(123, 'readExpressHandle', '读取流程句柄函数', 1, NULL, 1, 21, 3),
(124, 'readrepair', '读取返修单', 1, NULL, 1, 21, 3),
(125, 'readRepairHandle', '处理读取返回函数', 1, NULL, 1, 114, 3),
(126, 'updatememb', '修改会员', 1, NULL, 1, 19, 3);

-- --------------------------------------------------------

--
-- 表的结构 `hy_order`
--

CREATE TABLE IF NOT EXISTS `hy_order` (
  `onum` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reservenum` varchar(8) NOT NULL,
  `photocom` varchar(30) NOT NULL,
  `omnum` int(10) NOT NULL,
  `omname` varchar(20) NOT NULL,
  `omphone` varchar(16) NOT NULL,
  `ommale` tinyint(1) NOT NULL DEFAULT '1',
  `omaddr` varchar(100) NOT NULL,
  `photodate` date NOT NULL,
  `engagedate` date NOT NULL,
  `marrydate` date NOT NULL,
  `bookpulldate` date NOT NULL,
  `bookgetdate` date NOT NULL,
  `rentgetdate` date NOT NULL,
  `rentbackdate` date NOT NULL,
  `clothremark1` varchar(40) NOT NULL,
  `clothremark2` varchar(40) NOT NULL,
  `clothremark3` varchar(40) NOT NULL,
  `clothremark4` varchar(40) NOT NULL,
  `clothremark5` varchar(40) NOT NULL,
  `deposit` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `rbook` tinyint(1) NOT NULL DEFAULT '0',
  `rrent` tinyint(1) NOT NULL DEFAULT '0',
  `rsale` tinyint(1) NOT NULL DEFAULT '0',
  `rpacke` tinyint(1) NOT NULL DEFAULT '0',
  `gather1bookmoney` varchar(10) NOT NULL,
  `gather1sparemoney` varchar(10) NOT NULL,
  `gather1date` date NOT NULL,
  `gather1user` varchar(10) NOT NULL,
  `gather2bookmoney` varchar(10) NOT NULL,
  `gather2sparemoney` varchar(10) NOT NULL,
  `gather2date` date NOT NULL,
  `gather2user` varchar(10) NOT NULL,
  `rcode` varchar(10) NOT NULL,
  `rsleeve` varchar(10) NOT NULL,
  `rneck` varchar(10) NOT NULL,
  `rwaist` varchar(10) NOT NULL,
  `rleglength` varchar(10) NOT NULL,
  `rshoes` varchar(10) NOT NULL,
  `photonum` varchar(12) NOT NULL,
  `majiaprice` varchar(12) NOT NULL,
  `majiafabric` varchar(12) NOT NULL,
  `tie1` varchar(12) NOT NULL,
  `tie2` varchar(12) NOT NULL,
  `referee` varchar(12) NOT NULL,
  `rremark` varchar(255) NOT NULL,
  `oscalenum` varchar(8) NOT NULL,
  `scale` tinyint(1) NOT NULL DEFAULT '1',
  `ougid` int(10) NOT NULL,
  `ougnum` varchar(8) NOT NULL,
  `ougname` varchar(100) NOT NULL,
  `uremark` varchar(255) NOT NULL,
  `ushoulderwidth1` varchar(12) NOT NULL,
  `ushoulderwidth2` varchar(12) NOT NULL,
  `usleevewidth1` varchar(12) NOT NULL,
  `usleevewidth2` varchar(12) NOT NULL,
  `uclothlength1` varchar(12) NOT NULL,
  `uclothlength2` varchar(12) NOT NULL,
  `ubreathsur1` varchar(12) NOT NULL,
  `ubreathsur2` varchar(12) NOT NULL,
  `uwaistsur1` varchar(12) NOT NULL,
  `uwaistsur2` varchar(12) NOT NULL,
  `uhipsur1` varchar(12) NOT NULL,
  `uhipsur2` varchar(12) NOT NULL,
  `ubreathwidth1` varchar(12) NOT NULL,
  `ubreathwidth2` varchar(12) NOT NULL,
  `ubackwidth1` varchar(12) NOT NULL,
  `ubackwidth2` varchar(12) NOT NULL,
  `unecksur` varchar(12) NOT NULL,
  `uneckstyle` varchar(12) NOT NULL,
  `ubosom` varchar(12) NOT NULL,
  `usleevesur` varchar(12) NOT NULL,
  `ucode` varchar(12) NOT NULL,
  `uclothfabric` varchar(12) NOT NULL,
  `odgid` int(10) NOT NULL,
  `odgnum` varchar(8) NOT NULL,
  `odgname` varchar(100) NOT NULL,
  `dremark` varchar(255) NOT NULL,
  `dwaistsur1` varchar(12) NOT NULL,
  `dwaistsur2` varchar(12) NOT NULL,
  `dhipsur1` varchar(12) NOT NULL,
  `dhipsur2` varchar(12) NOT NULL,
  `dpantslength1` varchar(12) NOT NULL,
  `dpantslength2` varchar(12) NOT NULL,
  `dupcrotch1` varchar(12) NOT NULL,
  `dupcrotch2` varchar(12) NOT NULL,
  `dallcrotch1` varchar(12) NOT NULL,
  `dallcrotch2` varchar(12) NOT NULL,
  `dwaistdown1` varchar(12) NOT NULL,
  `dwaistdown2` varchar(12) NOT NULL,
  `dlegsur1` varchar(12) NOT NULL,
  `dlegsur2` varchar(12) NOT NULL,
  `dkneesur1` varchar(12) NOT NULL,
  `dkneesur2` varchar(12) NOT NULL,
  `dpantssur` varchar(12) NOT NULL,
  `belly` tinyint(1) NOT NULL DEFAULT '0',
  `sleg` tinyint(1) NOT NULL DEFAULT '0',
  `upleg` tinyint(1) NOT NULL DEFAULT '0',
  `flathip` tinyint(1) NOT NULL DEFAULT '0',
  `oleg` tinyint(1) NOT NULL DEFAULT '0',
  `xleg` tinyint(1) NOT NULL DEFAULT '0',
  `dcode` varchar(12) NOT NULL,
  `dpantsfabric` varchar(12) NOT NULL,
  `obgid` int(10) NOT NULL,
  `obgnum` varchar(8) NOT NULL,
  `obgname` varchar(100) NOT NULL,
  `bfrontlength` varchar(12) NOT NULL,
  `bbacklength` varchar(12) NOT NULL,
  `bup` varchar(12) NOT NULL,
  `bcenter` varchar(12) NOT NULL,
  `bcode` varchar(12) NOT NULL,
  `bbackfabric` varchar(12) NOT NULL,
  `otgid` int(10) NOT NULL,
  `otgnum` varchar(8) NOT NULL,
  `otgname` varchar(100) NOT NULL,
  `tremark` varchar(255) NOT NULL,
  `tshoulderwidth1` varchar(12) NOT NULL,
  `tshoulderwidth2` varchar(12) NOT NULL,
  `tsleevewidth1` varchar(12) NOT NULL,
  `tsleevewidth2` varchar(12) NOT NULL,
  `tclothlength1` varchar(12) NOT NULL,
  `tclothlength2` varchar(12) NOT NULL,
  `tbreathsur1` varchar(12) NOT NULL,
  `tbreathsur2` varchar(12) NOT NULL,
  `twaistsur1` varchar(12) NOT NULL,
  `twaistsur2` varchar(12) NOT NULL,
  `thipsur1` varchar(12) NOT NULL,
  `thipsur2` varchar(12) NOT NULL,
  `tbreathwidth1` varchar(12) NOT NULL,
  `tbreathwidth2` varchar(12) NOT NULL,
  `tbackwidth1` varchar(12) NOT NULL,
  `tbackwidth2` varchar(12) NOT NULL,
  `tnecksur` varchar(12) NOT NULL,
  `tneckstyle` varchar(12) NOT NULL,
  `tbosom` varchar(12) NOT NULL,
  `tsleevesur` varchar(12) NOT NULL,
  `tcode` varchar(12) NOT NULL,
  `tclothfabric` varchar(12) NOT NULL,
  `ossname` varchar(50) NOT NULL,
  `ossmail` varchar(24) NOT NULL,
  `osunum` varchar(8) NOT NULL,
  `bookdate` date NOT NULL,
  `inspectorverify` tinyint(1) NOT NULL,
  `shopleaderverify` tinyint(1) NOT NULL DEFAULT '0',
  `ispull` tinyint(1) NOT NULL DEFAULT '0',
  `opsname` varchar(50) NOT NULL,
  `ocunum` varchar(8) NOT NULL,
  `designer` varchar(20) NOT NULL,
  `pullstatus` int(1) NOT NULL DEFAULT '0',
  `expresslock` tinyint(1) NOT NULL DEFAULT '1',
  `repairlock` tinyint(1) NOT NULL DEFAULT '1',
  `repairid` int(10) NOT NULL,
  `pullok` tinyint(1) NOT NULL DEFAULT '0',
  `goodsok` tinyint(1) NOT NULL DEFAULT '0',
  `goodsokdate` int(10) NOT NULL,
  `pullokdate` int(10) NOT NULL,
  PRIMARY KEY (`onum`),
  KEY `oscalenum` (`oscalenum`),
  KEY `reservenum` (`reservenum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1000000047 ;

--
-- 转存表中的数据 `hy_order`
--

INSERT INTO `hy_order` (`onum`, `reservenum`, `photocom`, `omnum`, `omname`, `omphone`, `ommale`, `omaddr`, `photodate`, `engagedate`, `marrydate`, `bookpulldate`, `bookgetdate`, `rentgetdate`, `rentbackdate`, `clothremark1`, `clothremark2`, `clothremark3`, `clothremark4`, `clothremark5`, `deposit`, `total`, `rbook`, `rrent`, `rsale`, `rpacke`, `gather1bookmoney`, `gather1sparemoney`, `gather1date`, `gather1user`, `gather2bookmoney`, `gather2sparemoney`, `gather2date`, `gather2user`, `rcode`, `rsleeve`, `rneck`, `rwaist`, `rleglength`, `rshoes`, `photonum`, `majiaprice`, `majiafabric`, `tie1`, `tie2`, `referee`, `rremark`, `oscalenum`, `scale`, `ougid`, `ougnum`, `ougname`, `uremark`, `ushoulderwidth1`, `ushoulderwidth2`, `usleevewidth1`, `usleevewidth2`, `uclothlength1`, `uclothlength2`, `ubreathsur1`, `ubreathsur2`, `uwaistsur1`, `uwaistsur2`, `uhipsur1`, `uhipsur2`, `ubreathwidth1`, `ubreathwidth2`, `ubackwidth1`, `ubackwidth2`, `unecksur`, `uneckstyle`, `ubosom`, `usleevesur`, `ucode`, `uclothfabric`, `odgid`, `odgnum`, `odgname`, `dremark`, `dwaistsur1`, `dwaistsur2`, `dhipsur1`, `dhipsur2`, `dpantslength1`, `dpantslength2`, `dupcrotch1`, `dupcrotch2`, `dallcrotch1`, `dallcrotch2`, `dwaistdown1`, `dwaistdown2`, `dlegsur1`, `dlegsur2`, `dkneesur1`, `dkneesur2`, `dpantssur`, `belly`, `sleg`, `upleg`, `flathip`, `oleg`, `xleg`, `dcode`, `dpantsfabric`, `obgid`, `obgnum`, `obgname`, `bfrontlength`, `bbacklength`, `bup`, `bcenter`, `bcode`, `bbackfabric`, `otgid`, `otgnum`, `otgname`, `tremark`, `tshoulderwidth1`, `tshoulderwidth2`, `tsleevewidth1`, `tsleevewidth2`, `tclothlength1`, `tclothlength2`, `tbreathsur1`, `tbreathsur2`, `twaistsur1`, `twaistsur2`, `thipsur1`, `thipsur2`, `tbreathwidth1`, `tbreathwidth2`, `tbackwidth1`, `tbackwidth2`, `tnecksur`, `tneckstyle`, `tbosom`, `tsleevesur`, `tcode`, `tclothfabric`, `ossname`, `ossmail`, `osunum`, `bookdate`, `inspectorverify`, `shopleaderverify`, `ispull`, `opsname`, `ocunum`, `designer`, `pullstatus`, `expresslock`, `repairlock`, `repairid`, `pullok`, `goodsok`, `goodsokdate`, `pullokdate`) VALUES
(1000000016, '00000001', '', 10000000, '李四', '123', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '00000001', 1, 4, '100003', '战地吉普上衣', ' ', '1', '', '2', '', '3', '', '4', '', '5', '', '6', '', '123.6', '', '', '', '1', '', '', '', '', '', 0, '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, 1, '供应商B', '100001', '', 1, 1, 1, 0, 1, 1, 2016, 0),
(1000000017, '00000002', '', 10000002, '王五', '12', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '32', '23', '0000-00-00', '', '', '', '0000-00-00', '', '', '1', '', '2', '', '', '', '', '', '', '', '', '', '00000002', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '100002', 'northface裤子', '', '23', '', '123', '', '2', '', '3', '', '4', '', '4', '', '5', '', '91.3', '', '123456', 0, 1, 1, 0, 0, 1, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100101', '0000-00-00', 0, 1, 0, '供应商B', '100001', '', 1, 1, 1, 0, 0, 0, 0, 0),
(1000000019, '  123213', '', 0, 'fadsf', '12321313', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 1, 1, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1232132', 1, 4, '100003', '战地吉普上衣', '   ', '2', '', '3', '', '4', '', '5', '', '4', '', '5', '', '3', '', '', '', '', '', '', '', '', '', 0, '', '', '   ', '123456789', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '   ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 0, 0, 0, '', '', '', 1, 1, 1, 0, 1, 0, 0, 1457010436),
(1000000020, '32423', '', 0, '所发放', '2312321', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 1, 1, 1, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '23343', 0, 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '  ', '2', '', '4', '', '5', '', '6', '', '4', '', '23', '', '4', '', '', '', '', 0, 1, 1, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 0, 0, 1, '', '', '', 3, 1, 1, 0, 1, 0, 0, 0),
(1000000021, '222222', 'hollawood', 2121321321, '超大', '123213213', 0, '阿凡达发放啊手动阀撒fads发阿三', '2016-01-11', '2016-01-22', '2016-01-11', '2016-01-13', '2016-01-22', '2016-01-28', '0000-00-00', '成大恶', '', '', '', '', '23213.4', '', 1, 1, 1, 1, '13', '', '0000-00-00', '', '', '', '0000-00-00', '', '23', '', '44', '', '', '', 'adsfd', '', '', '', '', '', '', '', 0, 0, '', '', '   ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '   ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '   ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, 0, '供应商B', '', '', 1, 1, 1, 0, 1, 0, 0, 0),
(1000000023, '2321313', '公司', 123213, '十六', '12213213', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 1, 1, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '123132', 0, 0, '', '', '       ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '100002', 'northface裤子', ' 这就送笨哦自己哦在家啊嚼啊嚼家啊纠结啊家啊减肥打飞机；阿什福      ', '12321', '', '23', '', '233', '', '267', '', '123', '', '23', '', '323', '', '', '', '', 0, 1, 1, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '      ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, 1, '供应商B', '', '', 3, 1, 1, 0, 1, 0, 0, 1453256249),
(1000000024, '00033', '0家国大祭', 0, '塔防', '12321313', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '3666.5', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '012321321', '021313', '0232', '032', '02323', '0阿飞', ' 0阿凡达啊阿什福算法是伐发阿飞大师傅阿三地方阿什福阿什福阿三地方', '12321313', 1, 4, '100003', '战地吉普上衣', ' 0打发  阿飞发      ', '023', '', '023', '', '044', '', '055', '', '0123', '', '0213', '', '023', '', '', '', '', '', '', '', '', '', 0, '', '', '       ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 2, '100001', '衬衫', ' 0撒发顺丰阿飞阿飞啊      ', '01', '01.1', '02', '02.1', '03', '03.1', '04', '04.1', '05', '05.1', '06', '06.1', '07', '07.1', '08', '08.1', '09', '010', '011', '012', '013', '014', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 0, 0, 0, '', '', '', 1, 1, 1, 0, 1, 0, 0, 0),
(1000000025, '10002323', '310google', 312312321, '31额丰富', '31222222222', 0, '1打发发发发放阿飞阿什福阿三地方阿飞阿斯顿阿三方法', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '31礼服明细1', '31礼服明细2', '31礼服明细3', '31礼服明细4', '31礼服明细5', '3121323.4', '3112321.45', 1, 1, 1, 1, '312', '313', '2016-01-14', '', '3123', '3144', '2016-01-14', '', '3123', '3123', '31233', '31233', '3124444', '31244', '3121323213', '', '', '3125555', '3125555', '31发生发射点', '31 备注啊发射点发射点发发发的', '12123213', 0, 0, '', '', '             ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '100002', 'northface裤子', '321 阿凡达发发发阿飞阿飞阿飞阿飞阿德            ', '3211', '3211.0', '3212', '3212.0', '3213', '3213.0', '3214', '3214.0', '3251', '3215.0', '3216', '3216.0', '3217', '3217.0', '3218', '3218.0', '3219', 1, 1, 1, 1, 1, 1, '32', '32', 0, '', '', '', '', '', '', '', '', 2, '100001', '衬衫', ' 3       ', '2123', '', '32123232', '', '32145', '', '32156', '', '32167', '', '3219', '', '32167', '', '321567', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100101', '0000-00-00', 1, 1, 1, '供应商B', '', '', 1, 1, 1, 0, 1, 0, 0, 0),
(1000000026, '232313', '阿飞', 0, '阿什福', '2323123213', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '44545454', 0, 0, '', '', '   ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '100002', 'northface裤子', '   ', '23', '', '32', '', '44', '', '5', '', '5', '', '787878', '', '', '', '', '', '23232', 1, 0, 0, 1, 1, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '   ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, 1, '供应商B', '', '', 4, 1, 1, 0, 1, 1, 123135646, 456456323),
(1000000027, '23123213', '', 0, '2132131', '123213', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '21321313', 0, 0, '', '', '             ', 'yx1', 'yx1.0', 'yx2', 'yx2.0', 'yx3', 'yx3.0', 'yx4', 'yx4.0', 'yx5', 'yx5.0', 'yx6', 'yx6.0', 'yx7', 'yx7.0', 'yx8', 'yx8.0', 'yx10', 'yx11', 'yx12', 'yx13', 'yx14', 'yx15', 0, '', '', '             ', 'y21', 'y21.0', 'y22', 'y22.0', 'y23', 'y23.0', 'y24', 'y24.0', 'y25', 'y25.0', 'y26', 'y26.0', 'y27', 'y27.0', 'y28', 'y28.0', 'y29', 1, 1, 1, 1, 1, 1, 'yx29.1', 'y29.2', 0, '', '', 'yx31', 'yx32', 'yx33', 'yx34', 'yx35', 'yx36', 0, '', '', '', 'y41', 'y41.0', 'y42', 'y42.0', 'y43', 'y43.0', 'y44', 'y44.0', 'y45', 'y45.0', 'y46', 'y46.0', 'y47', 'y47.0', 'y48', 'y48.0', 'y49', 'y50', 'y51', 'y52', 'y53', 'y54', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, 1, '供应商B', '', '', 3, 1, 1, 4, 1, 1, 0, 1453285451),
(1000000028, '', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10000020', 0, 0, '', '', '    ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '100002', 'northface裤子', '啊瞬发法术发顺丰阿什福阿什福算法萨芬萨芬阿三发发发    ', '12', '', '23', '', '34', '', '12', '', '23', '', '23', '', '67', '', '78', '', '45', 0, 1, 0, 1, 1, 0, '', '', 0, '', '', '', '', '', '', '', '', 4, '100003', '战地吉普上衣', ' 的撒方法阿三对方是否阿三啊   ', '123', '', '23', '', '23', '', '123', '', '213', '', '123', '', '123', '', '213', '', '45', '3', '23', '23', '233434', '43', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, 1, '供应商C', '', '', 0, 1, 1, 0, 0, 0, 0, 1453622188),
(1000000029, '10001000', '21321', 0, '牵手主见', '2321323', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '10002020', 0, 4, '100003', '战地吉普上衣', '   ', '23', '', '23', '', '56', '', '', '', '54', '', '', '', '', '', '', '', '213', '213', '213', '123', '', '', 0, '', '', '   ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '   ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, 0, '供应商B', '', '', 0, 1, 1, 0, 1, 0, 0, 1453623813),
(1000000030, '10002000', '12321321', 12323213, '发放的', '123123213', 1, '213213', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '123', '喜喜喜喜喜喜喜喜', '打发士大夫啊', '', '', '123213', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '123', '', '23', '', '', '', '', '', '', '', '', ' 大师傅阿三', '22132132', 0, 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 1, '100000', 'nike的背心', '213', '2131', '31', '123', '31', '23', 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, 1, '供应商B', '', '', 1, 0, 1, 0, 0, 0, 0, 1453623935),
(1000000032, '10006000', '', 0, 'kh ', '98675454', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '10006001', 0, 0, '', '', ' fa  fasf asf as  ', 'x23', '', 'x23', '', 'x2', '', 'xxx', '', 'x2', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '   ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', 'x3213', '', 'xf', '', 'xsafsdfas', '', '', '', 'xfsfsafdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, 1, '供应商B', '', '', 2, 0, 1, 7, 1, 1, 1453699695, 1453698763),
(1000000033, '10008000', '', 0, 'jh dsd', '5435234', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', 'df', '', '', '', '', '', '', '', '', '', '', ' ', '10008001', 1, 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '100002', 'northface裤子', '  ', '23', '', 't', '', '565', '', '434', '', '4', '', '23432432', '', '32432', '', '', '', '', 0, 1, 1, 0, 0, 1, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, 1, '供应商B', '', '', 0, 0, 1, 0, 1, 0, 0, 1453710633),
(1000000034, '10009000', '', 0, 'hjg', '423466', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '10009001', 0, 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '100002', 'northface裤子', '  ', '32', '', '', '', '23', '', '23', '', '23', '', '323213', '', '', '', '32', '', '', 1, 0, 0, 1, 1, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '', '0000-00-00', 1, 1, 1, '供应商B', '', '', 0, 1, 1, 0, 0, 0, 0, 1453709463),
(1000000035, '20003000', '', 223, 'khkhjg', '75534', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '20003001', 0, 0, '', '', '     ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '     ', 'x233', '', 'x213', '', 'x123', '', 'x23', '', 'x23', '', 'x3', '', 'x33', '', 'x4', '', '', 0, 1, 0, 1, 0, 1, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, 1, '供应商B', '', '', 2, 0, 1, 8, 1, 1, 1453712613, 1453712388),
(1000000036, '213123', '', 0, '23213', '12323', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '442433', 0, 0, '', '', '   ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '   ', '2113', '', '33', '', '4', '', '35', '', '', '', '', '', '', '', '', '', '', 1, 1, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, 1, '供应商B', '', '', 1, 0, 1, 9, 1, 1, 1456731980, 1456731786),
(1000000037, '45435436', '  导师公司的风格', 0, '76765', '5645654', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '75646', 0, 0, '', '', '   ', 'd', '', 'd', '', 'd', '', 'd', '', 'd', '', 'd', '', 'd', '', '', '', '', '', '', '', '', '', 0, '', '', '   ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '   ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 1, 0, 0, '供应商B', '', '', 0, 1, 1, 0, 1, 0, 0, 1457424643),
(1000000038, '9999', '', 0, '999', '99999', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '888888', 1, 0, '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '0000-00-00', 0, 0, 0, '', '', '', 0, 1, 1, 0, 0, 0, 0, 0),
(1000000039, '56687645', '', 0, '765', '76654356', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '23', '23', '455', '423', '34', '', '53', 0, 0, 0, 0, '34', '', '2016-03-16', '', '43', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '345654', 0, 0, '', '', '     ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '100002', 'northface裤子', '     ', '3', '', '3', '', '2344', '', '5', '', '2', '', '3', '', '4', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '     ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '2016-03-03', 1, 1, 0, '供应商B', '', '', 0, 1, 1, 0, 1, 0, 0, 1457409297),
(1000000041, '56766543', '', 0, '34557', '345', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '345654', 0, 0, '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '312cz', '', '4312cz', '', '512cz', '', '12cz', '', '12cz', '', '12cz', '', '', '', '', '', '', 1, 0, 1, 0, 1, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '2016-03-03', 1, 1, 1, '供应商B', '', '', 1, 0, 1, 12, 0, 0, 0, 1457104576),
(1000000042, '56765434', '', 0, '76554', '54345678', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '765435', 0, 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '  ', '35123', '', 'er123', '', ' 额123', '', '热 123', '', '212123', '', '', '', '', '', '', '', '', 0, 1, 0, 1, 0, 1, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '', '2016-03-03', 1, 1, 1, '供应商B', '', '', 1, 0, 1, 11, 0, 0, 0, 1457104213),
(1000000043, '34565', '', 0, '345765', '4546787', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '45467896', 0, 4, '100003', '战地吉普上衣', '  ', '3', '', '4', '', '5', '', '6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100101', '2016-03-03', 1, 1, 0, '供应商B', '', '', 0, 1, 1, 0, 1, 0, 0, 1457410692),
(1000000044, '4357', '', 0, '23457', '6543454678', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '67789EEE', 0, 0, '', '', ' EDSDFA FDFDFDSFASDFDSFASDFASDFASFDASFASFASDFFAFAD ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100101', '2016-03-03', 1, 1, 1, '供应商B', '', '', 0, 1, 1, 0, 0, 0, 0, 1457410637),
(1000000045, '44343ER', '', 0, '456', '323', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', 'ERER232', 0, 0, '', '', '', '2123xzvt', '', '3123xzvt', '', '4123xzvt', '', '5123xzvt', '', '12', '', '12', '', '12', '', '12', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100101', '2016-03-03', 1, 1, 0, '供应商B', '', '', 1, 0, 1, 10, 1, 0, 0, 1457410657),
(1000000046, '100323A', '', 0, '陌生', '434234234', 1, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '2000334a', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '12', '', '12', '', '12', '', '12', '', '12', '', '12', '', '12', '', '12', '', '12', 1, 0, 1, 0, 1, 0, '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '上海衡山店', '1535116608@qq.com', '100113', '2016-03-08', 1, 1, 0, '供应商B', '', '', 1, 0, 1, 13, 1, 0, 0, 1457432598);

-- --------------------------------------------------------

--
-- 表的结构 `hy_repair`
--

CREATE TABLE IF NOT EXISTS `hy_repair` (
  `rid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rnum` varchar(10) NOT NULL,
  `isback` tinyint(1) NOT NULL DEFAULT '0',
  `rname` varchar(12) NOT NULL,
  `rtel` varchar(15) NOT NULL,
  `senddate` date NOT NULL,
  `getdate` date NOT NULL,
  `upnum` varchar(12) NOT NULL,
  `upremark1` varchar(1000) NOT NULL,
  `upremark2` varchar(1000) NOT NULL,
  `downnum` varchar(12) NOT NULL,
  `downremark1` varchar(700) NOT NULL,
  `downremark2` varchar(700) NOT NULL,
  `backnum` varchar(12) NOT NULL,
  `backremark1` varchar(700) NOT NULL,
  `backremark2` varchar(700) NOT NULL,
  `rphoto` varchar(255) NOT NULL,
  `isok` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  UNIQUE KEY `rnum` (`rnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `hy_repair`
--

INSERT INTO `hy_repair` (`rid`, `rnum`, `isback`, `rname`, `rtel`, `senddate`, `getdate`, `upnum`, `upremark1`, `upremark2`, `downnum`, `downremark1`, `downremark2`, `backnum`, `backremark1`, `backremark2`, `rphoto`, `isok`) VALUES
(1, '232323', 0, '', '', '2016-01-22', '0000-00-00', '', '12', '', '', '32', '', '', '4', '', '<p><img src="/HighYan/Uploads/image/20160120/1453293381101174.png" title="1453293381101174.png" alt="joomla-cms.png"/></p>', 1),
(2, '2321321', 0, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 1),
(3, '4521321323', 1, '', '', '2016-01-21', '2016-01-21', '', '1233333', '', '', '2133444', '', '', '233', '', '<p><img title="1453293776110496.png" alt="smallmouse.png" src="/HighYan/Uploads/image/20160120/1453293776110496.png"/>3</p>', 0),
(4, '1123213', 1, '', '', '2016-01-22', '2016-01-23', '', '1113213\r\nmmmmm', '-----\n==========\n-----\n衬衫实际肩宽41=>y41\n衬衫完成肩宽41.0=>y41.0\n衬衫实际袖长42=>y42\n衬衫完成袖长42.0=>y42.0\n衬衫实际衣长43=>y43\n衬衫完成衣长43.0=>y43.0\n衬衫实际胸围44=>y44\n衬衫完成胸围44.0=>y44.0\n衬衫实际腰围45=>y45\n衬衫完成腰围45.0=>y45.0\n衬衫实际臀围46=>y46\n衬衫完成臀围46.0=>y46.0\n衬衫实际胸宽47=>y47\n衬衫完成胸宽47.0=>y47.0\n衬衫实际背宽48=>y48\n衬衫完成背宽48.0=>y48.0\n衬衫领围49=>y49\n衬衫领型50=>y50\n衬衫前襟51=>y51\n衬衫袖口52=>y52\n衬衫码数53=>y53\n衬衫布号54=>y54\n==========\n上衣实际肩宽x1=>yx1\n上衣完成肩宽x1.0=>yx1.0\n上衣实际袖长x2=>yx2\n上衣完成袖长x2.0=>yx2.0\n上衣实际衣长x3=>yx3\n上衣完成衣长x3.0=>yx3.0\n上衣实际胸围x4=>yx4\n上衣完成胸围x4.0=>yx4.0\n上衣实际腰围x5=>yx5\n上衣完成腰围x5.0=>yx5.0\n上衣实际臀围x6=>yx6\n上衣完成臀围x6.0=>yx6.0\n上衣实际胸宽x7=>yx7\n上衣完成胸宽x7.0=>yx7.0\n上衣实际背宽x8=>yx8\n上衣完成背宽x8.0=>yx8.0\n上衣领围x10=>yx10\n上衣领型x11=>yx11\n上衣前襟x12=>yx12\n上衣袖口x13=>yx13\n上衣码数x14=>yx14\n上衣布号x15=>yx15\n-----\n=====\n-----\n', '', '222', '==========\n==========\n实际腰围21=>y21\n完成腰围21.0=>y21.0\n实际臀围22=>y22\n完成臀围22.0=>y22.0\n实际裤长23=>y23\n完成裤长23.0=>y23.0\n实际上裆24=>y24\n完成上裆24.0=>y24.0\n实际全裆25=>y25\n完成全裆25.0=>y25.0\n实际腰下26=>y26\n完成腰下26.0=>y26.0\n实际腿围27=>y27\n完成腿围27.0=>y27.0\n实际膝围28=>y28\n完成膝围28.0=>y28.0\n裤口29=>y29\nS腿0=>1\n平臀0=>1\nX腿0=>1\n码数x29.1=>yx29.1\n=====\n', '', '444', '==========\n==========\n前长x31=>yx31\n后长x32=>yx32\n上x33=>yx33\n中x34=>yx34\n码数x35=>yx35\n布号x36=>yx36\n=====\n前长31=>x31\n后长32=>x32\n上33=>x33\n中34=>x34\n码数=>x35\n布号36=>x36\n', '<p>5555</p><p><br/></p>', 1),
(7, '2323243', 1, '', '', '2016-01-25', '2016-01-26', '', 'sfsadffd', '上衣实际肩宽23=>x23\n上衣实际袖长23=>x23\n上衣实际衣长2=>x2\n上衣实际胸围xx=>xxx\n上衣实际腰围2=>x2\n衬衫实际肩宽3213=>x3213\n衬衫实际袖长f=>xf\n衬衫实际衣长safsdfas=>xsafsdfas\n衬衫实际腰围fsfsafdf=>xfsfsafdf\n==========\n', '', 'fdsfafasf', '==========\n', '', 'asdfxxvc ', '==========\n', '<p>ewwtt rwew</p>', 1),
(8, '21302130', 1, '', '', '2016-01-26', '2016-01-28', '', '321321', '==========\n', '', '23213', '实际腰围233=>x233\n实际臀围213=>x213\n实际裤长123=>x123\n实际上裆23=>x23\n实际全裆23=>x23\n实际腰下3=>x3\n实际腿围33=>x33\n实际膝围4=>x4\n==========\n', '', '反对非法法', '==========\n', '<p>地方大师傅撒法</p>', 1),
(9, '21313', 1, '', '', '2016-02-02', '2016-03-02', '', '3213123', '==========\n', '', '213213', '实际腰围211=>2113\n实际臀围3=>33\n实际裤长=>4\n实际上裆3=>35\n==========\n', '', '十大杀手的', '==========\n', '', 1),
(10, '4676765', 1, '', '', '2016-03-02', '2016-03-16', '', '233', '==========\n==========\n==========\n上衣实际肩宽212=>2123\n上衣实际袖长312=>3123\n上衣实际衣长412=>4123\n上衣实际胸围512=>5123\n==========\n上衣实际肩宽21=>212\n上衣实际袖长31=>312\n上衣实际衣长41=>412\n上衣实际胸围51=>512\n==========\n上衣实际肩宽2=>21\n上衣实际袖长3=>31\n上衣实际衣长4=>41\n上衣实际胸围5=>51\n==========\n\n修改人工号：100111\n上衣实际肩宽2123=>2123x\n上衣实际袖长3123=>3123x\n上衣实际衣长4123=>4123x\n上衣实际胸围5123=>5123x\n==========\n\n修改人工号：100101\n上衣实际肩宽2123x=>2123xz\n上衣实际袖长3123x=>3123xz\n上衣实际衣长4123x=>4123xz\n上衣实际胸围5123x=>5123xz\n==========\n\n修改人工号：100111\n上衣实际肩宽2123xz=>2123xzv\n上衣实际袖长3123xz=>3123xzv\n上衣实际衣长4123xz=>4123xzv\n上衣实际胸围5123xz=>5123xzv\n==========\n\n修改人工号：100111\n上衣实际肩宽2123xzv=>2123xzvt\n上衣实际袖长3123xzv=>3123xzvt\n上衣实际衣长4123xzv=>4123xzvt\n上衣实际胸围5123xzv=>5123xzvt\n==========\n\n修改人工号：100111\n上衣实际腰围=>1\n上衣实际臀围=>1\n上衣实际胸宽=>1\n上衣实际背宽=>1\n==========\n\n修改人工号：100111\n上衣实际腰围1=>12\n上衣实际臀围1=>12\n上衣实际胸宽1=>12\n上衣实际背宽1=>12\n==========\n', '', '123123', '==========\n==========\n==========\n==========\n==========\n==========\n\n修改人工号：100111\n==========\n\n修改人工号：100101\n==========\n\n修改人工号：100111\n==========\n\n修改人工号：100111\n==========\n\n修改人工号：100111\n==========\n\n修改人工号：100111\n==========\n', '', '3123435', '==========\n==========\n==========\n==========\n==========\n==========\n\n修改人工号：100111\n==========\n\n修改人工号：100101\n==========\n\n修改人工号：100111\n==========\n\n修改人工号：100111\n==========\n\n修改人工号：100111\n==========\n\n修改人工号：100111\n==========\n', '', 1),
(11, 're32434', 1, '', '', '2016-03-04', '2016-03-09', '', '4234', '==========\n\n修改人工号：\n==========\n\n修改人工号：100101\n==========\n', '', '31312', '实际腰围35=>351\n实际臀围er=>er1\n实际裤长 额=> 额1\n实际上裆热 =>热 1\n实际全裆212=>2121\n有肚0=>\nS腿0=>\n翘腿0=>\n平臀0=>\nO腿0=>\nX腿0=>\n==========\n\n修改人工号：\n实际腰围351=>3512\n实际臀围er1=>er12\n实际裤长 额1=> 额12\n实际上裆热 1=>热 12\n实际全裆2121=>21212\nS腿0=>1\n平臀0=>1\nX腿0=>1\n==========\n\n修改人工号：100101\n实际腰围3512=>35123\n实际臀围er12=>er123\n实际裤长 额12=> 额123\n实际上裆热 12=>热 123\n实际全裆21212=>212123\n==========\n', '', 'sddfsfc', '==========\n\n修改人工号：\n==========\n\n修改人工号：100101\n==========\n', '', 1),
(12, '325', 1, '', '', '2016-03-05', '2016-03-09', '', '2312', '\n修改人工号：\n==========\n\n修改人工号：100101\n==========\n\n修改人工号：100111\n==========\n\n修改人工号：100101\n==========\n', '', '2133', '\n修改人工号：\n实际腰围3=>31\n实际臀围43=>431\n实际裤长5=>51\n实际上裆=>1\n实际全裆=>1\n实际腰下=>1\n有肚0=>1\n平臀0=>1\nO腿0=>1\n==========\n\n修改人工号：100101\n实际腰围31=>312\n实际臀围431=>4312\n实际裤长51=>512\n实际上裆1=>12\n实际全裆1=>12\n实际腰下1=>12\nS腿0=>1\nX腿0=>1\n==========\n\n修改人工号：100111\n实际腰围312=>312c\n实际臀围4312=>4312c\n实际裤长512=>512c\n实际上裆12=>12c\n实际全裆12=>12c\n实际腰下12=>12c\n翘腿0=>1\n==========\n\n修改人工号：100101\n实际腰围312c=>312cz\n实际臀围4312c=>4312cz\n实际裤长512c=>512cz\n实际上裆12c=>12cz\n实际全裆12c=>12cz\n实际腰下12c=>12cz\nS腿1=>0\n平臀1=>0\nX腿1=>0\n==========\n', '', '124', '\n修改人工号：\n==========\n\n修改人工号：100101\n==========\n\n修改人工号：100111\n==========\n\n修改人工号：100101\n==========\n', '<p>32532<br/></p>', 1),
(13, '323235', 1, '', '', '2016-03-10', '2016-03-07', '', '34', '\n修改人工号：100111\n==========\n', '', '45', '\n修改人工号：100111\n实际腰围1=>12\n实际臀围1=>12\n实际裤长1=>12\n实际上裆1=>12\n实际全裆1=>12\n实际腰下1=>12\n实际腿围1=>12\n实际膝围1=>12\n裤口1=>12\n==========\n', '', '656', '\n修改人工号：100111\n==========\n', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `hy_repair_order`
--

CREATE TABLE IF NOT EXISTS `hy_repair_order` (
  `repair_id` int(10) NOT NULL,
  `order_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hy_repair_order`
--

INSERT INTO `hy_repair_order` (`repair_id`, `order_num`) VALUES
(1, 1000000027),
(2, 1000000027),
(3, 1000000027),
(4, 1000000027),
(7, 1000000032),
(8, 1000000035),
(9, 1000000036),
(10, 1000000045),
(11, 1000000042),
(12, 1000000041),
(13, 1000000046);

-- --------------------------------------------------------

--
-- 表的结构 `hy_role`
--

CREATE TABLE IF NOT EXISTS `hy_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `hy_role`
--

INSERT INTO `hy_role` (`id`, `name`, `pid`, `status`, `remark`) VALUES
(1, 'admin', 0, 1, '管理员'),
(2, 'shopleader', NULL, 1, '店长'),
(3, 'employee', NULL, 1, '导购员'),
(4, 'provider', NULL, 1, '供应商'),
(5, 'inspector', NULL, 1, '设计总监'),
(6, 'designer', NULL, 1, '设计师');

-- --------------------------------------------------------

--
-- 表的结构 `hy_role_user`
--

CREATE TABLE IF NOT EXISTS `hy_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `role_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hy_role_user`
--

INSERT INTO `hy_role_user` (`role_id`, `user_id`) VALUES
(1, '35'),
(1, '2'),
(2, '3'),
(4, '7'),
(3, '8'),
(3, '9'),
(4, '33'),
(6, '34'),
(1, '5'),
(5, '49'),
(3, NULL),
(2, '46'),
(2, '40'),
(4, '37'),
(2, '39'),
(3, '41'),
(3, '38'),
(3, '42'),
(1, '43'),
(4, '44'),
(3, '48');

-- --------------------------------------------------------

--
-- 表的结构 `hy_shop`
--

CREATE TABLE IF NOT EXISTS `hy_shop` (
  `sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `sclass` int(1) NOT NULL DEFAULT '1',
  `saddr` varchar(100) NOT NULL,
  `sphone` varchar(16) NOT NULL,
  `smail` varchar(24) NOT NULL,
  `sstatus` tinyint(1) NOT NULL DEFAULT '1',
  `sguide` varchar(100) NOT NULL,
  `simage` text NOT NULL,
  `snorth` float NOT NULL,
  `seast` float NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `sname` (`sname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `hy_shop`
--

INSERT INTO `hy_shop` (`sid`, `sname`, `sclass`, `saddr`, `sphone`, `smail`, `sstatus`, `sguide`, `simage`, `snorth`, `seast`) VALUES
(1, '上海衡山店', 1, '上海市衡山路534号衡山宾馆一楼', '021-64377226', '1535116608@qq.com', 1, '9号线（杨高中路方向）肇家浜路（2号出口）', '<p><img alt="hengshan_SH.gif" src="/HighYan/Uploads/image/20160105/1451979755830730.gif" title="1451979755830730.gif"/></p>', 121.443, 31.2),
(2, '管理部门', 2, '陆家嘴', '021-45678922', '97206120@qq.com', 1, '4号线4号出口2', '', 0, 0),
(3, '供应商A', 3, '重庆', '45657975', '305500302@163.com', 1, '49路公交', '', 0, 0),
(4, '上海虹井店', 1, '上海虹井路225号先锋大厦4楼', '18616715276', '', 1, '10号线（新江湾城方向）龙柏新村站（4号出口）', '', 121.37, 31.176),
(6, '上海静安店', 1, '上海市万航渡路50号2楼（愚园路）', '021-62666886', '', 1, '2号线（广兰路方向）静安寺站（1号口出）\r\n7号线（美兰湖方向）静安寺（1号口出）', '', 121.444, 31.2241),
(7, '供应商B', 3, '河南省商丘市', '23212312', '305500302@qq.com', 1, '', '', 0, 0),
(8, '供应商C', 3, '海南省海口市', '123', '', 1, '4路公交', '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hy_shop_user`
--

CREATE TABLE IF NOT EXISTS `hy_shop_user` (
  `shop_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hy_shop_user`
--

INSERT INTO `hy_shop_user` (`shop_id`, `user_id`) VALUES
(3, 7),
(1, 8),
(2, 5),
(1, 41),
(1, 40),
(3, 38),
(3, 37),
(1, 39),
(2, 35),
(1, 42),
(1, 3),
(2, 43),
(2, 2),
(8, 44),
(7, 33),
(4, 9),
(4, 46),
(1, 48),
(1, 34),
(1, 49);

-- --------------------------------------------------------

--
-- 表的结构 `hy_user`
--

CREATE TABLE IF NOT EXISTS `hy_user` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unum` varchar(8) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upassword` varchar(32) NOT NULL DEFAULT 'e10adc3949ba59abbe56e057f20f883e',
  `uphone` varchar(16) NOT NULL,
  `umale` tinyint(1) NOT NULL DEFAULT '1',
  `ubirth` date NOT NULL,
  `udate` date NOT NULL,
  `ustatus` tinyint(1) NOT NULL DEFAULT '1',
  `ulogintime` int(10) NOT NULL,
  `uloginip` varchar(32) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `unum` (`unum`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- 转存表中的数据 `hy_user`
--

INSERT INTO `hy_user` (`uid`, `unum`, `uname`, `upassword`, `uphone`, `umale`, `ubirth`, `udate`, `ustatus`, `ulogintime`, `uloginip`) VALUES
(2, '100002', '刘强', 'e10adc3949ba59abbe56e057f20f883e', '21314214', 1, '0000-00-00', '0000-00-00', 1, 1451960821, '10.202.108.10'),
(3, '100101', '店长A', 'e10adc3949ba59abbe56e057f20f883e', '124215545', 1, '0000-00-00', '0000-00-00', 1, 1457529497, '10.199.154.201'),
(35, '100001', 'tdzbz', 'e10adc3949ba59abbe56e057f20f883e', '13917377764 135', 0, '0000-00-00', '2015-12-04', 1, 1457529519, '10.199.154.201'),
(5, '100000', '海彦', '24cc2878f57e0ffa332b84caf66b93c6', '4343', 1, '0000-00-00', '0000-00-00', 1, 1452402731, '10.202.108.10'),
(7, '100201', 'provider1', 'cdb82d56473901641525fbbd1d5dab56', '', 1, '0000-00-00', '0000-00-00', 1, 0, '127.0.0.1'),
(8, '100113', 'employee3', 'e10adc3949ba59abbe56e057f20f883e', '43435', 1, '2015-11-30', '2015-12-07', 1, 1457529466, '10.199.154.201'),
(9, '100114', 'employee4', 'e10adc3949ba59abbe56e057f20f883e', '123546547', 1, '2015-12-16', '2015-12-15', 1, 1451541905, '127.0.0.1'),
(33, '100202', 'provider2', 'e10adc3949ba59abbe56e057f20f883e', '23425', 1, '0000-00-00', '0000-00-00', 1, 1457432650, '10.199.154.201'),
(34, '100112', '设计师', 'e10adc3949ba59abbe56e057f20f883e', '123211', 1, '0000-00-00', '0000-00-00', 1, 1457009456, '10.202.108.10'),
(46, '100102', '店长B', 'e10adc3949ba59abbe56e057f20f883e', '132', 0, '2015-12-02', '2015-12-14', 1, 1452569407, '10.199.154.201'),
(43, '100151', 'xuezhen', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '0000-00-00', '0000-00-00', 1, 0, ''),
(44, '100203', 'provider3', 'e10adc3949ba59abbe56e057f20f883e', '', 1, '0000-00-00', '0000-00-00', 1, 0, ''),
(49, '100111', '设计总裁', 'e10adc3949ba59abbe56e057f20f883e', '123', 1, '2015-12-30', '2016-01-06', 1, 1457529398, '10.199.154.201');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
