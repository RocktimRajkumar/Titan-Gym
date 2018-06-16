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

 Date: 16/06/2018 20:48:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address`  (
  `id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `streetName` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `state` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `city` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  INDEX `userID`(`id`) USING BTREE,
  CONSTRAINT `userID` FOREIGN KEY (`id`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of address
-- ----------------------------
INSERT INTO `address` VALUES ('1527696954', 'Rajbari Lane Behind Eleye Cinema Hall', 'ASSAM', 'Jorhat');
INSERT INTO `address` VALUES ('1527699183', 'dewal road', 'Assam', 'shivsagar');
INSERT INTO `address` VALUES ('1527699292', 'sdf', 'sdf', 'sdf');
INSERT INTO `address` VALUES ('1527705448', 'Doha bora', 'Assam', 'Jorhat');
INSERT INTO `address` VALUES ('1527791878', 'Choladhara', 'Assam', 'Jorhat');
INSERT INTO `address` VALUES ('1528186134', 'Andhari', 'Maharastra', 'Mumbai');
INSERT INTO `address` VALUES ('1529050312', 'Sotai', 'Assam', 'Jorhat');

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pass_key` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `securekey` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Full_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('admin1', 'admin1', 'admin1', 'Titanium Gym');

-- ----------------------------
-- Table structure for enrolls_to
-- ----------------------------
DROP TABLE IF EXISTS `enrolls_to`;
CREATE TABLE `enrolls_to`  (
  `et_id` int(5) NOT NULL AUTO_INCREMENT,
  `pid` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `uid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `paid_date` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `expire` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `renewal` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`et_id`) USING BTREE,
  INDEX `user_ID`(`uid`) USING BTREE,
  INDEX `plan_ID_idx`(`pid`) USING BTREE,
  CONSTRAINT `plan_ID` FOREIGN KEY (`pid`) REFERENCES `plan` (`pid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_ID` FOREIGN KEY (`uid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of enrolls_to
-- ----------------------------
INSERT INTO `enrolls_to` VALUES (8, 'TYLFGN', '1527696954', '2018-05-30', '1970-01-01', 'no');
INSERT INTO `enrolls_to` VALUES (9, 'PMZBJS', '1527699183', '2018-05-30', '1970-01-01', 'no');
INSERT INTO `enrolls_to` VALUES (11, 'BVDPWN', '1527699292', '2018-06-30', '1970-01-01', 'yes');
INSERT INTO `enrolls_to` VALUES (13, 'TYLFGN', '1527705448', '2018-05-30', '1970-01-01', 'yes');
INSERT INTO `enrolls_to` VALUES (14, 'PMZBJS', '1527791878', '2018-05-31', '1970-01-01', 'no');
INSERT INTO `enrolls_to` VALUES (22, 'PMZBJS', '1527696954', '2018-06-01', '2018-09-01', 'yes');
INSERT INTO `enrolls_to` VALUES (23, 'TYLFGN', '1527699183', '2018-06-01', '2018-07-01', 'yes');
INSERT INTO `enrolls_to` VALUES (26, 'TYLFGN', '1527791878', '2018-06-01', '2018-07-01', 'yes');
INSERT INTO `enrolls_to` VALUES (27, 'PMZBJS', '1528186134', '2018-06-05', '2018-09-05', 'yes');
INSERT INTO `enrolls_to` VALUES (28, 'TYLFGN', '1529050312', '2018-06-15', '2018-07-15', 'no');
INSERT INTO `enrolls_to` VALUES (29, 'GKZCJL', '1529050312', '2018-06-15', '2018-10-15', 'yes');

-- ----------------------------
-- Table structure for health_status
-- ----------------------------
DROP TABLE IF EXISTS `health_status`;
CREATE TABLE `health_status`  (
  `hid` int(5) NOT NULL AUTO_INCREMENT,
  `calorie` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `height` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `weight` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fat` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `remarks` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `uid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`hid`) USING BTREE,
  INDEX `userID_idx`(`uid`) USING BTREE,
  CONSTRAINT `uID` FOREIGN KEY (`uid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of health_status
-- ----------------------------
INSERT INTO `health_status` VALUES (3, '65', '185', '73', '23', 'Very Impressive !!!', '1527696954');
INSERT INTO `health_status` VALUES (4, '65', '185', '73', '23', 'Very Impressive !!!', '1527699183');
INSERT INTO `health_status` VALUES (6, '65', '185', '73', '23', 'Very Impressive !!!', '1527699292');
INSERT INTO `health_status` VALUES (8, '65', '185', '73', '23', 'Very Impressive !!!', '1527705448');
INSERT INTO `health_status` VALUES (9, '65', '188', '73', '23', 'Very Impressive !!!', '1527791878');
INSERT INTO `health_status` VALUES (19, '65', '185', '73', '23', 'Very Impressive !!!', '1528186134');
INSERT INTO `health_status` VALUES (20, '65', '185', '73', '23', 'Very Impressive !!!', '1529050312');

-- ----------------------------
-- Table structure for plan
-- ----------------------------
DROP TABLE IF EXISTS `plan`;
CREATE TABLE `plan`  (
  `pid` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `planName` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `validity` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `amount` int(10) NOT NULL,
  `active` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pid`) USING BTREE,
  INDEX `pid`(`pid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of plan
-- ----------------------------
INSERT INTO `plan` VALUES ('BVDPWN', 'dfd', 'sdf', '2', 532, 'yes');
INSERT INTO `plan` VALUES ('GKZCJL', 'Quatarly', 'Pay your fees quartily', '4', 4000, 'yes');
INSERT INTO `plan` VALUES ('OIREAC', 'Yearly', 'Pay Yearrly', '12', 6000, 'yes');
INSERT INTO `plan` VALUES ('PMZBJS', 'Beginner', 'Basic', '3', 1400, 'yes');
INSERT INTO `plan` VALUES ('TYLFGN', 'monthly', 'regular', '1', 500, 'yes');

-- ----------------------------
-- Table structure for timetable
-- ----------------------------
DROP TABLE IF EXISTS `timetable`;
CREATE TABLE `timetable`  (
  `tid` int(12) NOT NULL AUTO_INCREMENT,
  `tname` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day1` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day2` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day3` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day4` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day5` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `day6` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`tid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of timetable
-- ----------------------------
INSERT INTO `timetable` VALUES (2, 'Begineer', 'abc', 'def', 'hij', 'klm', 'nop', 'qrst');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `userid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mobile` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dob` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `joining_date` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`userid`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  INDEX `userid`(`userid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1527696954', 'Rajkumar Rocktim Narayan Singha', 'Male', '8011806053', 'rocktim53@gmail.com', '1997-12-02', '2018-05-30');
INSERT INTO `users` VALUES ('1527699183', 'hello world', 'Female', '2345678912', 'hello@gmail.com', '1998-02-10', '2018-05-28');
INSERT INTO `users` VALUES ('1527699292', 'sdf', 'Male', '2343243', '2342@dfsd.com', '1994-12-08', '2018-04-25');
INSERT INTO `users` VALUES ('1527705448', 'Rounak Dutta', 'Male', '8011806046', 'rdutta7743@gmail.com', '1995-02-10', '2018-03-06');
INSERT INTO `users` VALUES ('1527791878', 'Bishal Bhattercherjee', 'Male', '987600943', 'bishal123@gmail.com', '1994-12-01', '2018-01-06');
INSERT INTO `users` VALUES ('1528186134', 'Telusko Learning ', 'Male', '7896543210', 'telusko@gmail.com', '1994-02-22', '2018-06-06');
INSERT INTO `users` VALUES ('1529050312', 'Debojit Gogoi', 'Male', '7894561230', 'debojit@gmail.com', '1996-11-29', '2018-06-15');

SET FOREIGN_KEY_CHECKS = 1;
