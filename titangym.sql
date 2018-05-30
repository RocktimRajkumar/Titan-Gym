/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 50714
 Source Host           : localhost:3306
 Source Schema         : titangym

 Target Server Type    : MySQL
 Target Server Version : 50714
 File Encoding         : 65001

 Date: 29/05/2018 20:58:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address`  (
  `id` int(12) NULL DEFAULT NULL,
  `streetName` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `state` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `city` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  INDEX `id`(`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pass_key` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `securekey` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('admin1', 'admin1', 'admin1');

-- ----------------------------
-- Table structure for enrolls_to
-- ----------------------------
DROP TABLE IF EXISTS `enrolls_to`;
CREATE TABLE `enrolls_to`  (
  `pid` int(5) NOT NULL,
  `id` int(12) NOT NULL,
  `paid_date` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `expire` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `renewal` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  INDEX `planid`(`pid`) USING BTREE,
  INDEX `userID`(`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of enrolls_to
-- ----------------------------
INSERT INTO `enrolls_to` VALUES (1, 1, '1212', '112', '112');

-- ----------------------------
-- Table structure for health_status
-- ----------------------------
DROP TABLE IF EXISTS `health_status`;
CREATE TABLE `health_status`  (
  `hid` int(5) NOT NULL AUTO_INCREMENT,
  `calorie` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `height` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `weight` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fat` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `remarks` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id` int(12) NOT NULL,
  PRIMARY KEY (`hid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for plan
-- ----------------------------
DROP TABLE IF EXISTS `plan`;
CREATE TABLE `plan`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pid` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `planName` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `validity` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of plan
-- ----------------------------
INSERT INTO `plan` VALUES (1, 'XFJGH', 'Summer Plan', 'well plan', '3 months', 2500);

-- ----------------------------
-- Table structure for timetable
-- ----------------------------
DROP TABLE IF EXISTS `timetable`;
CREATE TABLE `timetable`  (
  `tid` int(12) NOT NULL AUTO_INCREMENT,
  `tname` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day1` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day2` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day3` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day4` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day5` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day6` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day7` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pid` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`tid`) USING BTREE,
  INDEX `pid`(`pid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mobile` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dob` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `joining_date` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
