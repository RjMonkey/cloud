/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50713
Source Host           : 127.0.0.1:3306
Source Database       : cloud

Target Server Type    : MYSQL
Target Server Version : 50713
File Encoding         : 65001

Date: 2016-10-26 23:54:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cloud_login
-- ----------------------------
DROP TABLE IF EXISTS `cloud_login`;
CREATE TABLE `cloud_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `login_ip` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for cloud_manage
-- ----------------------------
DROP TABLE IF EXISTS `cloud_manage`;
CREATE TABLE `cloud_manage` (
  `id` int(11) NOT NULL,
  `realname` varchar(255) DEFAULT NULL,
  `login_ip` varchar(255) DEFAULT NULL,
  `login_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for cloud_upload
-- ----------------------------
DROP TABLE IF EXISTS `cloud_upload`;
CREATE TABLE `cloud_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `level` int(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `upload_time` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `is_delete` varchar(255) DEFAULT NULL,
  `is_examine` varchar(255) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `examine_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for cloud_vote
-- ----------------------------
DROP TABLE IF EXISTS `cloud_vote`;
CREATE TABLE `cloud_vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `art_id` int(11) NOT NULL,
  `vote_num` varchar(255) DEFAULT NULL,
  `vote_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;
