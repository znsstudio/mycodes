/*
 Navicat Premium Data Transfer

 Source Server         : mvc.azerny.com
 Source Server Type    : MySQL
 Source Server Version : 50536
 Source Host           : localhost
 Source Database       : mvc

 Target Server Type    : MySQL
 Target Server Version : 50536
 File Encoding         : utf-8

 Date: 03/29/2014 21:04:28 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `category`
-- ----------------------------
BEGIN;
INSERT INTO `category` VALUES ('1', 'Nigar'), ('2', '234sAMIR'), ('3', '324'), ('4', '234'), ('5', '23423'), ('6', '423'), ('7', '4234'), ('8', '234'), ('9', 'Samir'), ('10', 'Samir'), ('11', 'SamirSSSSSS'), ('12', 'Samir'), ('13', 'Nigar Alieva');
COMMIT;

-- ----------------------------
--  Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` varchar(64) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `product_cost` decimal(11,2) NOT NULL DEFAULT '10.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `product`
-- ----------------------------
BEGIN;
INSERT INTO `product` VALUES ('1', '1', 'SamirS', '50.00'), ('2', 'sdfdsf-1', 'fsdfSSSSS', '0.00'), ('3', 'sdfsdfds', 'fsdfsdfSDSDSD', '0.00'), ('4', '1', 'Samirs Love', '34.00'), ('5', '1', 'SamirS', '50.00'), ('6', 'sdfdsf', 'fsdfSSSSS', '0.00'), ('7', 'sdfsdfds', 'fsdfsdfSDSDSD', '0.00'), ('8', '125', 'Sami', '156.00'), ('9', '23', 'sdfsdfsd', '0.00');
COMMIT;

-- ----------------------------
--  Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `user`
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES ('1', 'root', '513868a1ab92de4c34d68013d59603fa', 'owner');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
