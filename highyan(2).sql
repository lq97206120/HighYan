-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 01 月 08 日 11:37
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
(1, 8, 3, NULL),
(1, 7, 3, NULL),
(1, 6, 3, NULL),
(1, 5, 3, NULL),
(1, 4, 3, NULL),
(1, 3, 3, NULL),
(1, 2, 2, NULL),
(1, 1, 1, NULL),
(2, 1, 1, NULL),
(2, 2, 2, NULL),
(2, 3, 3, NULL),
(2, 6, 3, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `hy_book`
--

CREATE TABLE IF NOT EXISTS `hy_book` (
  `bnum` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `bmale` tinyint(1) NOT NULL DEFAULT '1',
  `bphone` varchar(16) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `bstatus` tinyint(1) NOT NULL DEFAULT '0',
  `bdate` int(10) NOT NULL,
  `bsid` int(10) NOT NULL,
  `bshopsname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `buid` int(10) NOT NULL,
  `buname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `bunum` varchar(8) CHARACTER SET utf8 NOT NULL,
  UNIQUE KEY `bnum` (`bnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1000000007 ;

--
-- 转存表中的数据 `hy_book`
--

INSERT INTO `hy_book` (`bnum`, `bname`, `bmale`, `bphone`, `bstatus`, `bdate`, `bsid`, `bshopsname`, `buid`, `buname`, `bunum`) VALUES
(1000000000, '张三', 1, '13945687523', 1, 0, 1, '松江店', 34, 'employee2', '100112'),
(1000000001, '李四', 0, '134', 1, 0, 1, '松江店', 34, 'employee2', '100112'),
(1000000002, '赵五', 1, '1234548354', 0, 2015, 4, '杨浦店', 34, '', ''),
(1000000003, '王六', 1, '213', 1, 2015, 1, '松江店', 8, 'employee3', '100113'),
(1000000004, '神龙', 1, '13', 0, 1451540049, 1, '松江店', 0, '', ''),
(1000000005, '玄武', 1, '1312321', 0, 1451540358, 1, '松江店', 0, '', ''),
(1000000006, '朱雀', 0, '123213', 0, 1451540792, 1, '松江店', 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `hy_goods`
--

CREATE TABLE IF NOT EXISTS `hy_goods` (
  `gid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gnum` varchar(8) CHARACTER SET utf8 NOT NULL,
  `gname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `gclass` int(1) NOT NULL DEFAULT '1',
  `gstatus` tinyint(1) NOT NULL DEFAULT '1',
  `gprice` float NOT NULL,
  PRIMARY KEY (`gid`),
  UNIQUE KEY `gnum` (`gnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `ititle` varchar(32) CHARACTER SET utf8 NOT NULL,
  `icontent` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idate` int(10) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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
  `mname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mphone` varchar(16) CHARACTER SET utf8 NOT NULL,
  `mstatus` tinyint(1) NOT NULL DEFAULT '1',
  `mmale` tinyint(1) NOT NULL DEFAULT '1',
  `mpoints` float NOT NULL DEFAULT '0',
  `mdate` date NOT NULL,
  PRIMARY KEY (`mnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10000004 ;

--
-- 转存表中的数据 `hy_memb`
--

INSERT INTO `hy_memb` (`mnum`, `mname`, `mphone`, `mstatus`, `mmale`, `mpoints`, `mdate`) VALUES
(10000000, '张三', '13542687856', 1, 0, 2000, '2015-12-18'),
(10000001, '王五', '1234343', 1, 1, 0, '2015-12-10'),
(10000002, '铭刻', '21323', 1, 1, 0, '2015-12-24'),
(10000003, '深度', '123213', 1, 1, 0, '2015-12-16');

-- --------------------------------------------------------

--
-- 表的结构 `hy_menu`
--

CREATE TABLE IF NOT EXISTS `hy_menu` (
  `mid` int(3) NOT NULL,
  `mname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mcontent` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

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
(8, 'addNode', '添加节点', 1, NULL, 1, 2, 3);

-- --------------------------------------------------------

--
-- 表的结构 `hy_order`
--

CREATE TABLE IF NOT EXISTS `hy_order` (
  `onum` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `omnum` int(8) NOT NULL,
  `omname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `omphone` varchar(16) CHARACTER SET utf8 NOT NULL,
  `ougid` int(10) NOT NULL,
  `ougnum` varchar(8) CHARACTER SET utf8 NOT NULL,
  `ougname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ushoulderwidth1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `ushoulderwidth2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `usleevewidth1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `usleevewidth2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `uclothlength1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `uclothlength2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `ubreathsur1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `ubreathsur2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `uwaistsur1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `uwaistsur2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `uhipsur1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `uhipsur2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `ubreathwidth1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `ubreathwidth2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `ubackwidth1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `ubackwidth2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `unecksur` varchar(6) CHARACTER SET utf8 NOT NULL,
  `uneckstyle` varchar(6) CHARACTER SET utf8 NOT NULL,
  `ubosom` varchar(6) CHARACTER SET utf8 NOT NULL,
  `usleevesur` varchar(6) CHARACTER SET utf8 NOT NULL,
  `ucode` varchar(6) CHARACTER SET utf8 NOT NULL,
  `uclothfabric` varchar(6) CHARACTER SET utf8 NOT NULL,
  `odgid` int(10) NOT NULL,
  `odgnum` varchar(8) CHARACTER SET utf8 NOT NULL,
  `odgname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dwaistsur1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dwaistsur2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dhipsur1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dhipsur2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dpantslength1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dpantslength2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dupcrotch1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dupcrotch2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dallcrotch1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dallcrotch2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dwaistdown1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dwaistdown2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dlegsur1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dlegsur2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dkneesur1` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dkneesur2` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dpantssur` varchar(6) CHARACTER SET utf8 NOT NULL,
  `belly` tinyint(1) NOT NULL DEFAULT '0',
  `sleg` tinyint(1) NOT NULL DEFAULT '0',
  `upleg` tinyint(1) NOT NULL DEFAULT '0',
  `flathip` tinyint(1) NOT NULL DEFAULT '0',
  `oleg` tinyint(1) NOT NULL DEFAULT '0',
  `xleg` tinyint(1) NOT NULL DEFAULT '0',
  `dcode` varchar(6) CHARACTER SET utf8 NOT NULL,
  `dpantsfabric` varchar(6) CHARACTER SET utf8 NOT NULL,
  `obgid` int(10) NOT NULL,
  `obgnum` varchar(8) CHARACTER SET utf8 NOT NULL,
  `obgname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `bfrontlength` varchar(6) CHARACTER SET utf8 NOT NULL,
  `bbacklength` varchar(6) CHARACTER SET utf8 NOT NULL,
  `bup` varchar(6) CHARACTER SET utf8 NOT NULL,
  `bcenter` varchar(6) CHARACTER SET utf8 NOT NULL,
  `bcode` varchar(6) CHARACTER SET utf8 NOT NULL,
  `bbackfabric` varchar(6) CHARACTER SET utf8 NOT NULL,
  `ossname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ossaddr` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ossphone` varchar(16) CHARACTER SET utf8 NOT NULL,
  `ossmail` varchar(24) CHARACTER SET utf8 NOT NULL,
  `osunum` varchar(8) CHARACTER SET utf8 NOT NULL,
  `bookdate` date NOT NULL,
  `leaderverifystatus` tinyint(1) NOT NULL DEFAULT '0',
  `ispullleader` tinyint(1) NOT NULL DEFAULT '0',
  `opsname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ocunum` varchar(8) CHARACTER SET utf8 NOT NULL,
  `assignstatus` tinyint(1) NOT NULL DEFAULT '0',
  `designer` varchar(20) CHARACTER SET utf8 NOT NULL,
  `providerpull` tinyint(1) NOT NULL DEFAULT '1',
  `pullok` tinyint(1) NOT NULL DEFAULT '1',
  `providerok` tinyint(1) NOT NULL DEFAULT '0',
  `shopok` tinyint(1) NOT NULL DEFAULT '0',
  `okdate` date NOT NULL,
  PRIMARY KEY (`onum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1000000016 ;

--
-- 转存表中的数据 `hy_order`
--

INSERT INTO `hy_order` (`onum`, `omnum`, `omname`, `omphone`, `ougid`, `ougnum`, `ougname`, `ushoulderwidth1`, `ushoulderwidth2`, `usleevewidth1`, `usleevewidth2`, `uclothlength1`, `uclothlength2`, `ubreathsur1`, `ubreathsur2`, `uwaistsur1`, `uwaistsur2`, `uhipsur1`, `uhipsur2`, `ubreathwidth1`, `ubreathwidth2`, `ubackwidth1`, `ubackwidth2`, `unecksur`, `uneckstyle`, `ubosom`, `usleevesur`, `ucode`, `uclothfabric`, `odgid`, `odgnum`, `odgname`, `dwaistsur1`, `dwaistsur2`, `dhipsur1`, `dhipsur2`, `dpantslength1`, `dpantslength2`, `dupcrotch1`, `dupcrotch2`, `dallcrotch1`, `dallcrotch2`, `dwaistdown1`, `dwaistdown2`, `dlegsur1`, `dlegsur2`, `dkneesur1`, `dkneesur2`, `dpantssur`, `belly`, `sleg`, `upleg`, `flathip`, `oleg`, `xleg`, `dcode`, `dpantsfabric`, `obgid`, `obgnum`, `obgname`, `bfrontlength`, `bbacklength`, `bup`, `bcenter`, `bcode`, `bbackfabric`, `ossname`, `ossaddr`, `ossphone`, `ossmail`, `osunum`, `bookdate`, `leaderverifystatus`, `ispullleader`, `opsname`, `ocunum`, `assignstatus`, `designer`, `providerpull`, `pullok`, `providerok`, `shopok`, `okdate`) VALUES
(1000000000, 10000000, '张三', '123456', 4, '100003', '战地吉普上衣', '23', '34', '56', '45', '45', '23', '78', '54', '90', '45', '23', '34', '23', '12', '23', '33', '46', '圆领', '61', '21', 'XL', '23', 3, '100002', 'northface裤子', '49', '53', '20', '78', '56', '23', '10', '34', '53', '32', '67', 'sf', '73', '123', '62', '121.3', '53', 0, 1, 0, 1, 0, 0, 'ML', '45', 1, '100000', 'nike的背心', '20', '10', '42', '20', 'XL', '7521', '松江店', '人民北路2999号', '13917377764', '1535116608@qq.com', '100113', '2015-12-15', 1, 1, '供应商B', '100001', 1, '', 1, 1, 1, 1, '2015-12-29'),
(1000000001, 10000002, 'df', 'xx', 2, '100001', '衬衫', '34', '', '34', '', '54', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '100002', 'northface裤子', 'fd', '', 'fd', '', '', '', '', '', '', '', 'x', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '松江店', '人民北路2999号', '13917377764', '1535116608@qq.com', '100113', '0000-00-00', 0, 0, '', '', 0, '', 1, 1, 0, 0, '0000-00-00'),
(1000000002, 10000003, 'td', '123', 2, '100001', '衬衫', 's', '', 'f', '', '3', '', '4', '', 't', '', 'we', '', 'er', '', 's', 't', '', '', '', '', 'XL', '45', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '松江店', '人民北路2999号', '13917377764', '1535116608@qq.com', '100113', '0000-00-00', 0, 0, '', '', 0, '', 1, 1, 0, 0, '0000-00-00'),
(1000000003, 10000004, 'fd', 'sz', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 1, '100000', 'nike的背心', 'fd', 'xf', 'fd', '', '', '', '松江店', '人民北路2999号', '13917377764', '1535116608@qq.com', '100113', '0000-00-00', 1, 1, '供应商B', '100001', 1, '', 1, 1, 0, 0, '0000-00-00'),
(1000000004, 123456, '4324', '343', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '100002', 'northface裤子', 'df', 'fd', '32', '', '', '', '123', '', 'x', '', '', '', '', '', '', '', '', 0, 0, 0, 1, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '松江店', '人民北路2999号', '13917377764', '1535116608@qq.com', '100113', '0000-00-00', 1, 0, '供应商B', '100001', 1, '', 1, 1, 0, 0, '0000-00-00'),
(1000000008, 100005, '23213', '23', 4, '100003', '战地吉普上衣', '23', '', '32', '', '3', '', '23', '', '', '', '4', '', '', '', '5', '', '', '', 'xx', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '松江店', '人民北路2999号', '13917377764', '1535116608@qq.com', '100113', '0000-00-00', 1, 0, '供应商B', '100001', 1, '', 1, 1, 0, 0, '0000-00-00'),
(1000000011, 1000025, '二愣子', '21313', 4, '100003', '战地吉普上衣', '23', '', '32', '', '44', '', '的', '', '23', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '松江店', '人民北路2999号', '13917377764', '1535116608@qq.com', '100101', '0000-00-00', 1, 0, '供应商B', '100001', 1, '', 1, 1, 0, 0, '0000-00-00'),
(1000000012, 10000024, '王五', '123', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 1, '100000', 'nike的背心', '213', '23', '32', '', '', '', '松江店', '人民北路2999号', '13917377764', '1535116608@qq.com', '100101', '0000-00-00', 1, 0, '供应商B', '100001', 1, '', 1, 1, 0, 0, '0000-00-00'),
(1000000013, 10002323, '杨浦店张三', '123', 2, '100001', '衬衫', '23', '', '32', '', '32', '', '44', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '杨浦店', '杨浦区军工路516号', '021-45230123', '', '100114', '0000-00-00', 1, 1, '供应商B', '100001', 1, '', 1, 1, 1, 0, '0000-00-00'),
(1000000015, 10002323, '薛xxx', '23', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '213', '', '32', '', '32', '', '32', '', '23', '', '32', '', '32', '', '32', '', '4', 0, 1, 1, 0, 0, 1, '', '', 0, '', '', '', '', '', '', '', '', '松江店', '人民北路2999号', '13917377764', '1535116608@qq.com', '100101', '0000-00-00', 1, 1, '供应商B', '100001', 1, '', 1, 1, 1, 1, '0000-00-00');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `hy_role`
--

INSERT INTO `hy_role` (`id`, `name`, `pid`, `status`, `remark`) VALUES
(1, 'admin', 0, 1, '管理员'),
(2, 'shopleader', NULL, 1, '店长'),
(3, 'employee', NULL, 1, '店员'),
(4, 'provider', NULL, 1, '供应商');

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
(3, '34'),
(1, '5'),
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
  `sname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sclass` int(1) NOT NULL DEFAULT '1',
  `saddr` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sphone` varchar(16) CHARACTER SET utf8 NOT NULL,
  `smail` varchar(24) CHARACTER SET utf8 NOT NULL,
  `sstatus` tinyint(1) NOT NULL DEFAULT '1',
  `sguide` varchar(100) CHARACTER SET utf8 NOT NULL,
  `simage` text CHARACTER SET utf8 NOT NULL,
  `snorth` float NOT NULL,
  `seast` float NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `sname` (`sname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 34),
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
(1, 48);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- 转存表中的数据 `hy_user`
--

INSERT INTO `hy_user` (`uid`, `unum`, `uname`, `upassword`, `uphone`, `umale`, `ubirth`, `udate`, `ustatus`, `ulogintime`, `uloginip`) VALUES
(2, '100002', '刘强', 'e10adc3949ba59abbe56e057f20f883e', '21314214', 1, '0000-00-00', '0000-00-00', 1, 1451960821, '10.202.108.10'),
(3, '100101', '店长A', 'e10adc3949ba59abbe56e057f20f883e', '124215545', 1, '0000-00-00', '0000-00-00', 1, 1452220817, '10.202.108.10'),
(35, '100001', 'tdzbz', 'e10adc3949ba59abbe56e057f20f883e', '13917377764 135', 0, '0000-00-00', '2015-12-04', 1, 1452221955, '10.202.108.10'),
(5, '100000', '海彦', '24cc2878f57e0ffa332b84caf66b93c6', '4343', 1, '0000-00-00', '0000-00-00', 1, 838, '10.202.108.10'),
(7, '100201', 'provider1', 'cdb82d56473901641525fbbd1d5dab56', '', 1, '0000-00-00', '0000-00-00', 1, 0, '127.0.0.1'),
(8, '100113', 'employee3', 'e10adc3949ba59abbe56e057f20f883e', '43435', 1, '2015-11-30', '2015-12-07', 1, 1452220914, '10.202.108.10'),
(9, '100114', 'employee4', 'e10adc3949ba59abbe56e057f20f883e', '123546547', 1, '2015-12-16', '2015-12-15', 1, 1451541905, '127.0.0.1'),
(33, '100202', 'provider2', 'e10adc3949ba59abbe56e057f20f883e', '23425', 1, '0000-00-00', '0000-00-00', 1, 1452220937, '10.202.108.10'),
(34, '100112', 'employee2', 'e10adc3949ba59abbe56e057f20f883e', '123211', 1, '0000-00-00', '0000-00-00', 1, 838, '10.202.108.10'),
(46, '100102', '店长B', 'e10adc3949ba59abbe56e057f20f883e', '132', 0, '2015-12-02', '2015-12-14', 1, 1451375052, '10.202.108.10'),
(43, '100151', 'xuezhen', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '0000-00-00', '0000-00-00', 1, 0, ''),
(44, '100203', 'provider3', 'e10adc3949ba59abbe56e057f20f883e', '', 1, '0000-00-00', '0000-00-00', 1, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
