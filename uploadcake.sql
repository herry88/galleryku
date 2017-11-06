/*
Navicat MySQL Data Transfer

Source Server         : herry
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : uploadcake

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-11-06 14:25:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for countries
-- ----------------------------
DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of countries
-- ----------------------------
INSERT INTO `countries` VALUES ('1', 'Indonesia');

-- ----------------------------
-- Table structure for files
-- ----------------------------
DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of files
-- ----------------------------
INSERT INTO `files` VALUES ('3', 'Penguins.jpg', 'C:\\xampp\\htdocs\\mycakeweb\\webroot\\uploads/files/', '2017-10-18 02:47:50', '2017-10-18 02:47:50', '1');
INSERT INTO `files` VALUES ('4', 'juegos-vestir-goku.jpg', 'C:\\xampp\\htdocs\\mycakeweb\\webroot\\uploads/files/', '2017-10-18 03:44:56', '2017-10-18 03:44:56', '1');
INSERT INTO `files` VALUES ('5', 'vegetavwx2014_928.jpg', 'C:\\xampp\\htdocs\\mycakeweb\\webroot\\uploads/files/', '2017-10-18 08:42:56', '2017-10-18 08:42:56', '1');
INSERT INTO `files` VALUES ('6', 'IpRSDNnK.jpg', 'C:\\xampp\\htdocs\\mycakeweb\\webroot\\uploads/files/', '2017-10-18 10:28:49', '2017-10-18 10:28:49', '1');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('4', '2', 'tes', 'Ft904pMk.jpg');
INSERT INTO `images` VALUES ('5', '3', 'joe', 'vegetavwx2014_928.jpg');
INSERT INTO `images` VALUES ('6', '3', 'tes', 'IpRSDNnK.jpg');
INSERT INTO `images` VALUES ('7', '4', 'tes', '5.jpg');
INSERT INTO `images` VALUES ('8', '4', 'Indonesia', 'Trunks.jpg');
INSERT INTO `images` VALUES ('11', '5', 'ques2', 'marquez1`.jpg');
INSERT INTO `images` VALUES ('12', '5', 'ques3', 'Marc-Marquez-5.jpg');
INSERT INTO `images` VALUES ('14', '4', 'Indonesia', 'Marc-Marquez-5.jpg');
INSERT INTO `images` VALUES ('15', '2', 'sun goku', 'tes.jpg');
INSERT INTO `images` VALUES ('16', '2', 'sun goku', 'gwgw.jpg');
INSERT INTO `images` VALUES ('17', '2', 'gouku', 'photo_2017-10-20_15-15-18.jpg');
INSERT INTO `images` VALUES ('18', '2', 'tes', 'photo_2017-10-20_15-13-47.jpg');
INSERT INTO `images` VALUES ('19', '2', '4', '4545454.jpg');
INSERT INTO `images` VALUES ('21', '3', 'tes', 'sfgsdgdsg.jpg');
INSERT INTO `images` VALUES ('22', '3', 'joe', 'wew.jpg');
INSERT INTO `images` VALUES ('25', '3', 'tes', 'tererere.jpg');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('2', 'sun goku ');
INSERT INTO `posts` VALUES ('3', 'vegeta');
INSERT INTO `posts` VALUES ('4', 'Trunks');
INSERT INTO `posts` VALUES ('5', 'Marquez');

-- ----------------------------
-- Table structure for types
-- ----------------------------
DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of types
-- ----------------------------
INSERT INTO `types` VALUES ('1', 'sun goku');
INSERT INTO `types` VALUES ('2', 'herry prasetyo');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `longitude` decimal(10,0) DEFAULT NULL,
  `latitude` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('3', '1', '1', 'admin', 'herry_prasetyo@rocketmail.com', '444', 'C:\\xampp\\htdocs\\mycakeweb\\webroot\\uploads/files/2.', 'adsf', '6', '1', '1');
