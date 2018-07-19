/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : framework

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-07-19 15:21:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for msg
-- ----------------------------
DROP TABLE IF EXISTS `msg`;
CREATE TABLE `msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `uname` varchar(45) DEFAULT NULL COMMENT '用户名',
  `content` text COMMENT '内容',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '创建于',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '更新于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of msg
-- ----------------------------
INSERT INTO `msg` VALUES ('12', 'gsfg', 'gfdsgsfg', '1531826482', '1531826482');
INSERT INTO `msg` VALUES ('4', 'ggg', 'gggggggggg', '1531648795', '1531648795');
INSERT INTO `msg` VALUES ('5', '苦咖啡', '机构和交通部', '1531648868', '1531648868');
INSERT INTO `msg` VALUES ('14', 'aaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaa', '1531826549', '1531826549');
INSERT INTO `msg` VALUES ('13', 'fdsgf', 'gfgfgfg', '1531826519', '1531826519');
INSERT INTO `msg` VALUES ('10', '开发开放课', '广东省食堂', '1531727343', '1531727343');
INSERT INTO `msg` VALUES ('11', '反倒是', '感受到广东省', '1531810657', '1531810657');
INSERT INTO `msg` VALUES ('15', 'aa', 'aa', '1531967692', '1531967692');

-- ----------------------------
-- Table structure for t1
-- ----------------------------
DROP TABLE IF EXISTS `t1`;
CREATE TABLE `t1` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `uname` varchar(45) NOT NULL COMMENT '用户名',
  `pwd` char(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t1
-- ----------------------------
INSERT INTO `t1` VALUES ('45', 'aa', 'dasd');
INSERT INTO `t1` VALUES ('47', 'sddffaaffds', '389673433');
INSERT INTO `t1` VALUES ('48', 'fsfdfafdsda', '162138788');
INSERT INTO `t1` VALUES ('49', 'ffdssffadda', '1118124824');
INSERT INTO `t1` VALUES ('50', 'fsdfsaffdad', '941021172');
INSERT INTO `t1` VALUES ('51', 'afsdsdaffdf', '772192823');
INSERT INTO `t1` VALUES ('52', 'yyy', 'yyy');
