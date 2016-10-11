-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.6.12-log - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win64
-- HeidiSQL 版本:                  9.2.0.4949
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出 blog 的数据库结构
CREATE DATABASE IF NOT EXISTS `blog` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `blog`;


-- 导出  表 blog.dong_admin 结构
CREATE TABLE IF NOT EXISTS `dong_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_login_time` int(11) unsigned NOT NULL COMMENT '最后一次登录时间',
  `last_login_ip` int(11) unsigned NOT NULL COMMENT '最后一次登录ip',
  `createtime` int(11) unsigned NOT NULL,
  `updatetime` int(11) unsigned NOT NULL COMMENT '修改时间',
  `status` tinyint(2) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL COMMENT '//头像',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- 正在导出表  blog.dong_admin 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `dong_admin` DISABLE KEYS */;
INSERT INTO `dong_admin` (`id`, `username`, `password`, `last_login_time`, `last_login_ip`, `createtime`, `updatetime`, `status`, `avatar`) VALUES
	(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1474186397, 2130706433, 0, 0, 0, ''),
	(2, 'root', 'e10adc3949ba59abbe56e057f20f883e', 1474186033, 2130706433, 0, 0, 0, NULL);
/*!40000 ALTER TABLE `dong_admin` ENABLE KEYS */;


-- 导出  表 blog.dong_adminlog 结构
CREATE TABLE IF NOT EXISTS `dong_adminlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `log` varchar(50) NOT NULL,
  `createtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- 正在导出表  blog.dong_adminlog 的数据：~2 rows (大约)
/*!40000 ALTER TABLE `dong_adminlog` DISABLE KEYS */;
INSERT INTO `dong_adminlog` (`id`, `name`, `log`, `createtime`) VALUES
	(4, 'admin', '管理员删除', 1473672394),
	(5, 'admin', '管理员删除', 1473672724);
/*!40000 ALTER TABLE `dong_adminlog` ENABLE KEYS */;


-- 导出  表 blog.dong_auth_group 结构
CREATE TABLE IF NOT EXISTS `dong_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='用户组表';

-- 正在导出表  blog.dong_auth_group 的数据：2 rows
/*!40000 ALTER TABLE `dong_auth_group` DISABLE KEYS */;
INSERT INTO `dong_auth_group` (`id`, `title`, `status`, `rules`) VALUES
	(1, '超级管理员', 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,19,20,21,23'),
	(2, 'admin', 1, '2,3,4,5,6,7,8,9,10');
/*!40000 ALTER TABLE `dong_auth_group` ENABLE KEYS */;


-- 导出  表 blog.dong_auth_group_access 结构
CREATE TABLE IF NOT EXISTS `dong_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户组明细表';

-- 正在导出表  blog.dong_auth_group_access 的数据：2 rows
/*!40000 ALTER TABLE `dong_auth_group_access` DISABLE KEYS */;
INSERT INTO `dong_auth_group_access` (`uid`, `group_id`) VALUES
	(1, 1),
	(2, 2);
/*!40000 ALTER TABLE `dong_auth_group_access` ENABLE KEYS */;


-- 导出  表 blog.dong_auth_rule 结构
CREATE TABLE IF NOT EXISTS `dong_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则唯一标识',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则中文名称',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态：为1正常，为0禁用',
  `condition` char(100) NOT NULL DEFAULT '' COMMENT '规则表达式，为空表示存在就验证，不为空表示按照条件验证',
  `menu` tinyint(3) NOT NULL DEFAULT '0' COMMENT '是否为菜单',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='规则表';

-- 正在导出表  blog.dong_auth_rule 的数据：19 rows
/*!40000 ALTER TABLE `dong_auth_rule` DISABLE KEYS */;
INSERT INTO `dong_auth_rule` (`id`, `pid`, `name`, `title`, `type`, `status`, `condition`, `menu`) VALUES
	(1, 0, 'Admin/User/index', '用户中心', 1, 1, '', 0),
	(2, 0, 'Admin/ShowNav/rule', '权限管理', 1, 1, '', 0),
	(3, 0, 'Admin/System/index', '系统设置', 1, 1, '', 0),
	(4, 0, 'Admin/News/index', '文章管理', 1, 1, '', 0),
	(5, 1, 'Admin/User/userInfo', '账号管理', 1, 1, '', 0),
	(6, 2, 'Admin/AdminAction/index', '权限列表', 1, 1, '', 0),
	(7, 2, 'Admin/AdminAction/add', '添加权限', 1, 1, '', 0),
	(8, 2, 'Admin/AdminGroup/index', '用户组列表', 1, 1, '', 0),
	(9, 2, 'Admin/AdminGroup/add', '添加用户组', 1, 1, '', 0),
	(10, 0, 'Admin/Browser/index', '后台统计', 1, 1, '', 0),
	(11, 10, 'Admin/AdminBrower/index', '统计页面', 1, 1, '', 0),
	(12, 0, 'Admin/Index/index', '后台首页', 1, 1, '', 0),
	(13, 1, 'Admin/User/delete', '删除', 1, 1, '', 1),
	(14, 1, 'Admin/User/update', '修改', 1, 1, '', 1),
	(15, 2, 'Admin/AdminAction/insert', '增加', 1, 1, '', 1),
	(19, 2, 'Admin/AdminGroup/update', '修改用户组名', 1, 1, '', 1),
	(20, 2, 'Admin/AdminGroup/delete', '删除用户组', 1, 1, '', 1),
	(21, 2, 'Admin/AdminGroup/insert', '添加用户组和权限', 1, 1, '', 1),
	(23, 4, 'Admin/News/add', '添加文章', 1, 1, '', 0);
/*!40000 ALTER TABLE `dong_auth_rule` ENABLE KEYS */;


-- 导出  表 blog.dong_news 结构
CREATE TABLE IF NOT EXISTS `dong_news` (
  `n_id` int(36) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) NOT NULL COMMENT '文章标题',
  `news_titleshort` varchar(100) DEFAULT NULL COMMENT '简短标题',
  `news_columnid` int(11) NOT NULL,
  `news_columnviceid` int(11) DEFAULT NULL COMMENT '副栏目ID',
  `news_key` varchar(100) NOT NULL COMMENT '文章关键字',
  `news_tag` varchar(50) NOT NULL DEFAULT '' COMMENT '文章标签',
  `news_auto` varchar(20) NOT NULL COMMENT '作者',
  `news_adminid` int(11) NOT NULL COMMENT '所属管理员',
  `news_source` varchar(20) NOT NULL DEFAULT '未知' COMMENT '来源',
  `news_content` longtext NOT NULL COMMENT '新闻内容',
  `news_scontent` varchar(100) NOT NULL DEFAULT '',
  `news_hits` int(11) NOT NULL DEFAULT '200' COMMENT '点击率',
  `news_img` varchar(100) DEFAULT '' COMMENT '大图地址',
  `news_pic_type` tinyint(2) NOT NULL COMMENT '1=普通模式 2=腾讯模式',
  `news_pic_allurl` varchar(255) DEFAULT '' COMMENT '多图路径',
  `news_pic_content` longtext NOT NULL COMMENT '多图对应文字说明',
  `news_time` int(11) NOT NULL,
  `news_flag` set('h','c','f','a','s','p','j','d') NOT NULL DEFAULT '' COMMENT '文章属性',
  `news_zaddress` varchar(100) NOT NULL DEFAULT '' COMMENT '跳转地址',
  `news_back` int(2) NOT NULL DEFAULT '0' COMMENT '是否为回收站',
  `news_open` varchar(2) DEFAULT '0' COMMENT '0代表审核不通过 1代表审核通过',
  `news_lvtype` tinyint(2) NOT NULL DEFAULT '0' COMMENT '旅游类型1=行程 2=攻略',
  PRIMARY KEY (`n_id`),
  KEY `news_titleshort` (`news_titleshort`),
  KEY `news_title` (`news_title`),
  KEY `news_columnid` (`news_columnid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- 正在导出表  blog.dong_news 的数据：0 rows
/*!40000 ALTER TABLE `dong_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `dong_news` ENABLE KEYS */;


-- 导出  表 blog.dong_newscreate 结构
CREATE TABLE IF NOT EXISTS `dong_newscreate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  blog.dong_newscreate 的数据：~2 rows (大约)
/*!40000 ALTER TABLE `dong_newscreate` DISABLE KEYS */;
INSERT INTO `dong_newscreate` (`id`, `name`) VALUES
	(1, 'PHP'),
	(2, '前端'),
	(3, 'Linux');
/*!40000 ALTER TABLE `dong_newscreate` ENABLE KEYS */;


-- 导出  表 blog.dong_news_content 结构
CREATE TABLE IF NOT EXISTS `dong_news_content` (
  `news_content_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_content_nid` int(11) NOT NULL COMMENT '对应文章ID',
  `news_content_body` longtext NOT NULL COMMENT '内容主体',
  PRIMARY KEY (`news_content_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- 正在导出表  blog.dong_news_content 的数据：0 rows
/*!40000 ALTER TABLE `dong_news_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `dong_news_content` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
