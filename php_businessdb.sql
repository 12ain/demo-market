/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : php_businessdb

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-05-02 09:59:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `account`
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `userid` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `userName` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `Ugroup` varchar(20) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES ('1', 'h1998083', '1998083hjw', '123456@12', 'user');
INSERT INTO `account` VALUES ('2', 'VIP001', '666666', '123@123.com', 'user');
INSERT INTO `account` VALUES ('4', 'x12345678', 'x123456', 'xyt123@163.com', 'user');

-- ----------------------------
-- Table structure for `business_goods`
-- ----------------------------
DROP TABLE IF EXISTS `business_goods`;
CREATE TABLE `business_goods` (
  `Gid` int(36) NOT NULL AUTO_INCREMENT,
  `Gname` varchar(100) NOT NULL,
  `Gprice` double NOT NULL,
  `Gdescription` varchar(255) NOT NULL,
  `Gclass` varchar(100) NOT NULL,
  `Gimage` varchar(200) DEFAULT '/images/ex.jpg',
  `Gphone` varchar(11) NOT NULL,
  `Gqq` varchar(10) DEFAULT NULL,
  `Gwechat` varchar(20) DEFAULT NULL,
  `Glocation` varchar(20) NOT NULL DEFAULT '青岛工学院',
  `Gtime` int(10) NOT NULL DEFAULT '0',
  `Gsecond` varchar(20) NOT NULL,
  `Uname` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Gid`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of business_goods
-- ----------------------------
INSERT INTO `business_goods` VALUES ('24', '小米手机', '2499', '全新小米手机一台', '手机', 'images/ex.jpg', '15621151521', '1539213866', 'x1539213866', '青岛工学院', '0', '求购', 'x12345678');
INSERT INTO `business_goods` VALUES ('25', '小米9', '2499', '一台全新的小米9', '手机', 'upload/201904211615206973.jpg', '15621111111', '1539213866', 'xxx123456', '三号宿舍楼', '1555856120', '二手', 'x12345678');
INSERT INTO `business_goods` VALUES ('27', '法拉利', '10', '10块', '代步工具', 'upload/201904211626359166.jpg', '15621111111', '1539213866', 'xxx123456', '青岛工学院', '1555856795', '求购', 'vip001');
INSERT INTO `business_goods` VALUES ('28', '雷神游戏本', '5000', '全新宝宝', '电脑', 'upload/201904211638055669.jpg', '15621111111', '1539213866', 'xxx123456', '一号宿舍楼', '1555857485', '二手', 'vip001');
INSERT INTO `business_goods` VALUES ('29', '游戏本', '2499', '只要50块', '电脑', 'upload/201904211639347257.jpg', '15621111111', '1539213866', 'xxx123456', '青岛工学院', '1555857574', '求购', 'vip001');
INSERT INTO `business_goods` VALUES ('31', '新概念英语教材1-4包邮', '50', '新概念英语教材1-4包邮', '书籍教材', 'upload/201904231642595019.jpg', '15621111111', '212121', 'xxx123456', '一号宿舍楼', '1556030579', '二手', 'vip001');
INSERT INTO `business_goods` VALUES ('32', '新概念英语', '10', '10块', '书籍教材', 'upload/201904231644247943.jpg', '15621111111', '212121', 'xxx123456', '青岛工学院', '1556030664', '求购', 'vip001');
INSERT INTO `business_goods` VALUES ('33', '篮球', '10', '10块', '体育健身', 'upload/201904231646524792.jpg', '15621111111', '1539213866', 'xxx123456', '三号宿舍楼', '1556030812', '二手', 'x12345678');
INSERT INTO `business_goods` VALUES ('34', '足球', '10', '10块', '体育健身', 'upload/201904231647479426.jpg', '15621111111', '1539213866', 'xxx123456', '青岛工学院', '1556030867', '求购', 'x12345678');
INSERT INTO `business_goods` VALUES ('35', '兰博基尼', '5000', '全新跑车', '代步工具', 'upload/201904231649062730.jpg', '15621111111', '1539213866', 'xxx123456', '一号宿舍楼', '1556030946', '二手', 'x12345678');
INSERT INTO `business_goods` VALUES ('36', '电饭锅', '50', '需要的拿走呀', '电器', 'upload/201904231651541506.jpg', '15621111111', '1539213866', 'xxx123456', '二号宿舍楼', '1556031114', '二手', 'x12345678');
INSERT INTO `business_goods` VALUES ('37', '单反', '2222', '单反相机一台', '数码', 'upload/201904231653159573.jpg', '15621111111', '212121', 'xxx123456', '青岛工学院', '1556031195', '求购', 'x12345678');
