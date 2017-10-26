/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50623
Source Host           : localhost:3306
Source Database       : vote

Target Server Type    : MYSQL
Target Server Version : 50623
File Encoding         : 65001

Date: 2017-09-19 19:56:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `switch` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('3', 'open');

-- ----------------------------
-- Table structure for bevote
-- ----------------------------
DROP TABLE IF EXISTS `bevote`;
CREATE TABLE `bevote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `typename` varchar(255) DEFAULT NULL,
  `agree` int(10) DEFAULT NULL,
  `disagree` int(10) DEFAULT NULL,
  `waiver` int(10) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bevote
-- ----------------------------
INSERT INTO `bevote` VALUES ('26', '丁际铭', 'director', '理事会理事', '0', '0', '0', '深圳鹏能投资控股有限公司区域经理', '中德智造学院', '2015届10级电气J4班');
INSERT INTO `bevote` VALUES ('27', '马若文', 'director', '理事会理事', '0', '0', '0', '深圳市奥莱室内设计有限公司总经理', '设计学院', '2007届04展示工程G3班');
INSERT INTO `bevote` VALUES ('28', '马维克', 'director', '理事会理事', '0', '0', '0', '海南东维投资有限公司总经理', '国际商务系', '2007届02物流G5-2班');
INSERT INTO `bevote` VALUES ('29', '王海宏', 'director', '理事会理事', '0', '0', '0', '深圳市无线城市科技有限公司总经理', '电子信息技术系', '2005届02软件G3班');
INSERT INTO `bevote` VALUES ('30', '甘熠', 'director', '理事会理事', '0', '0', '0', '深圳技师学院实训室管理', '中德智造学院', '2006届01数控G5班');
INSERT INTO `bevote` VALUES ('31', '付春花', 'director', '理事会理事', '0', '0', '0', '弗镭斯激光董事长', '中德智造学院', '2005届02光电子G3班');
INSERT INTO `bevote` VALUES ('32', '庄梦湾', 'director', '理事会理事', '0', '0', '0', '深圳地铁集团车厂调度', '中德智造学院', '2013届08模具G5班');
INSERT INTO `bevote` VALUES ('33', '刘丹', 'director', '理事会理事', '0', '0', '0', '大族激光精密焊接事业部总经理助理', '中德智造学院', '2015届10数控G5班');
INSERT INTO `bevote` VALUES ('34', '刘文丽', 'director', '理事会理事', '0', '0', '0', '深圳森钻企业管理顾问有限公司总经理', '国际商务系', '2006届01文秘G5-1班');
INSERT INTO `bevote` VALUES ('35', '刘良智', 'director', '理事会理事', '0', '0', '0', '北京金准基因科技有限责任公司销售工程师', '应用生物系', '2013届08生物G5班');
INSERT INTO `bevote` VALUES ('36', '江勇增', 'director', '理事会理事', '0', '0', '0', '深圳宝源行宝马汽车销售服务有限公司售后总监', '汽车技术系', '2011届06汽修G5班');
INSERT INTO `bevote` VALUES ('37', '江琼珠', 'director', '理事会理事', '0', '0', '0', '中国平安人寿深圳分公司高级主任', '国际商务系', '2010届05文秘G5班');
INSERT INTO `bevote` VALUES ('38', '江喜允', 'director', '理事会理事', '0', '0', '0', '深圳钜匠科技有限公司总经理', '中德智造学院', '2006届01数控G5班');
INSERT INTO `bevote` VALUES ('39', '孙久健', 'director', '理事会理事', '0', '0', '0', '深圳澳码标识设备有限公司总经理', '国际商务系', '2010届05物流G5-1班');
INSERT INTO `bevote` VALUES ('40', '李岩', 'director', '理事会理事', '0', '0', '0', '深圳市美瑞行珠宝首饰有限公司总经理', '珠宝首饰系', '2007届02珠宝G5班');
INSERT INTO `bevote` VALUES ('41', '李振全', 'director', '理事会理事', '0', '0', '0', '深圳市盈天下广告有限公司董事长', '设计学院', '2005届02卡通G3班');
INSERT INTO `bevote` VALUES ('42', '杨捷顺', 'director', '理事会理事', '0', '0', '0', '深圳技师学院实训室管理', '中德智造学院', '2006届01光电子G5班');
INSERT INTO `bevote` VALUES ('43', '肖贵元', 'director', '理事会理事', '0', '0', '0', '中国人民人寿保险有限公司福田支公司总经理', '国际商务系', '2012届07营销G5班');
INSERT INTO `bevote` VALUES ('44', '邹渊', 'director', '理事会理事', '0', '0', '0', '广东欣大汽车服务有限公司总经理', '汽车技术系', '2011届06汽修G5班');
INSERT INTO `bevote` VALUES ('45', '邹佩珊', 'director', '理事会理事', '0', '0', '0', '深圳碳云智能科技有限公司运营经理', '应用生物系', '2009届04生物G5班');
INSERT INTO `bevote` VALUES ('46', '张翼', 'director', '理事会理事', '0', '0', '0', '深圳前海易贷小额贷款有限公司 副总经理', '电子信息技术系', '2004届01软件G3班');
INSERT INTO `bevote` VALUES ('47', '张许平', 'director', '理事会理事', '0', '0', '0', '深圳市苏摩科技有限公司主任设计师', '设计学院', '2013届10美工G3班');
INSERT INTO `bevote` VALUES ('48', '张铭健', 'director', '理事会理事', '0', '0', '0', '深圳市铭鑫范科技有限公司总经理', '电子信息技术系', '2014届10电子技术J4班');
INSERT INTO `bevote` VALUES ('49', '张惠民', 'director', '理事会理事', '0', '0', '0', '大兴宝德奔驰汽车销售服务有限公司技术总监', '汽车技术系', '2006届03汽修G3班');
INSERT INTO `bevote` VALUES ('50', '陆秀', 'director', '理事会理事', '0', '0', '0', '迈斯会展服务有限公司副总经理', '国际商务系', '2008届03文秘G5班');
INSERT INTO `bevote` VALUES ('51', '陈小瀚', 'director', '理事会理事', '0', '0', '0', '杭州老板电器股份有限公司深圳分公司总经理', '国际商务系', '2009届04营销G5班');
INSERT INTO `bevote` VALUES ('52', '林冰冰', 'director', '理事会理事', '0', '0', '0', '瑞荻卡钻石（多乐美集团）库存管理', '珠宝首饰系', '2007届02珠宝G5班');
INSERT INTO `bevote` VALUES ('53', '林碧紫', 'director', '理事会理事', '0', '0', '0', 'SOME ENJOY THING 设计工作室创始人', '图文传播系', '2011届06印刷G5班');
INSERT INTO `bevote` VALUES ('54', '罗慧', 'director', '理事会理事', '0', '0', '0', '深圳金语科技有限公司项目经理', '电子信息技术系', '2011届06通信G5班');
INSERT INTO `bevote` VALUES ('55', '郑微', 'director', '理事会理事', '0', '0', '0', '环球资源国际贸易公司（美资）经理助理', '电子信息技术系', '2005届00计算机G5-1班');
INSERT INTO `bevote` VALUES ('56', '赵洪福', 'director', '理事会理事', '0', '0', '0', '深圳市珠穆朗玛影业有限公司总经理', '设计学院', '2008届05摄影G3班');
INSERT INTO `bevote` VALUES ('57', '钟文康', 'director', '理事会理事', '0', '0', '0', '水务集团安全管理', '中德智造学院', '2015届10电气G5班');
INSERT INTO `bevote` VALUES ('58', '高艺君', 'director', '理事会理事', '0', '0', '0', '深圳市泽壹珠宝有限公司设计总监', '设计学院', '2011届08产品设计G3班');
INSERT INTO `bevote` VALUES ('59', '彭建标', 'director', '理事会理事', '0', '0', '0', '深圳市瑞福丽珠宝首饰有限公司总经理', '珠宝首饰系', '2009届06珠宝G3班');
INSERT INTO `bevote` VALUES ('60', '程少英', 'director', '理事会理事', '0', '0', '0', '深圳市中大博文教育中心总经理、校长', '电子信息技术系', '2012届07应用电子J4.5班');
INSERT INTO `bevote` VALUES ('61', '谢春祥', 'director', '理事会理事', '0', '0', '0', '东莞市欣发贸易有限公司总经理', '风景园林系', '2010届05园林G5班');
INSERT INTO `bevote` VALUES ('62', '赖路明', 'director', '理事会理事', '0', '0', '0', '深圳市深龙汽车服务发展有限公司总经理', '汽车技术系', '2012届07汽电G5班');
INSERT INTO `bevote` VALUES ('63', '蔡木坤', 'director', '理事会理事', '0', '0', '0', '普达镭射总经理', '中德智造学院', '2006届01光电子G5班');
INSERT INTO `bevote` VALUES ('64', '蔡俊儒', 'director', '理事会理事', '0', '0', '0', '深圳欧菲光科技股份有限公司市场部总监', '图文传播系', '2006届01印刷G5班');
INSERT INTO `bevote` VALUES ('65', '李振全', 'president', '理事会会长', '0', '0', '0', '深圳市盈天下广告有限公司董事长', '设计学院', '2005届02卡通G3班');
INSERT INTO `bevote` VALUES ('66', '李岩', 'vpresident', '理事会副会长', '0', '0', '0', '深圳市美瑞行珠宝首饰有限公司总经理', '珠宝首饰系', '2007届02珠宝G5班');
INSERT INTO `bevote` VALUES ('67', '江喜允', 'vpresident', '理事会副会长', '0', '0', '0', '深圳钜匠科技有限公司总经理', '中德智造学院', '2006届01数控G5班');
INSERT INTO `bevote` VALUES ('68', '陈小瀚', 'vpresident', '理事会副会长', '0', '0', '0', '杭州老板电器股份有限公司深圳分公司总经理', '国际商务系', '2009届04营销G5班');
INSERT INTO `bevote` VALUES ('69', '马若文', 'vpresident', '理事会副会长', '0', '0', '0', '深圳市奥莱室内设计有限公司总经理', '设计学院', '2007届04展示工程G3班');
INSERT INTO `bevote` VALUES ('70', '张翼', 'vpresident', '理事会副会长', '0', '0', '0', '深圳前海易贷小额贷款有限公司 副总经理', '电子信息技术系', '2004届01软件G3班');
INSERT INTO `bevote` VALUES ('71', '邹渊', 'vpresident', '理事会副会长', '0', '0', '0', '广东欣大汽车服务有限公司总经理', '汽车技术系', '2011届06汽修G5班');
INSERT INTO `bevote` VALUES ('72', '陆秀', 'secretary', '理事会秘书长', '0', '0', '0', '迈斯会展服务有限公司副总经理', '国际商务系', '2008届03文秘G5班');
INSERT INTO `bevote` VALUES ('73', '龙琪', 'supervisor', '监事会监事长', '0', '0', '0', '深圳互盟数据科技股份有限公司', '国际商务系', '2006届01文秘G5-2班');
INSERT INTO `bevote` VALUES ('74', '郝媛媛', 'supervisors', '监事会监事', '0', '0', '0', '深圳市世房环境建议(集团)有限公司 工程师', '风景园林系', '2005届02园林Z3班');
INSERT INTO `bevote` VALUES ('75', '林润钊', 'supervisors', '监事会监事', '0', '0', '0', '深圳市爱德龙电子科技有限公司副总经理', '图文传播系', '2011届06印刷G5班');

-- ----------------------------
-- Table structure for history
-- ----------------------------
DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `votedid` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of history
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `voteCount` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('39', '丁际铭', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('40', '于虹', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('41', '万杰', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('42', '马若文', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('43', '马维克', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('44', '王雨婷', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('45', '王海宏', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('46', '方越彬', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('47', '甘熠', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('48', '叶巨峰', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('49', '叶仕伟', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('50', '叶创莲', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('51', '付春花', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('52', '危韬俊', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('53', '庄梦湾', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('54', '刘伟', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('55', '刘丹', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('56', '刘文丽', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('57', '刘伟昌', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('58', '刘良智', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('59', '刘盛贵', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('60', '刘博洋', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('61', '江勇增', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('62', '江琼珠', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('63', '江喜允', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('64', '汤杰', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('65', '许敏奋', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('66', '孙久健', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('67', '孙素雪', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('68', '牟思源', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('69', '严亦遵', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('70', '苏山峰', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('71', '李衡', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('72', '李果', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('73', '李岩', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('74', '李江琴', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('75', '李凯思', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('76', '李建宁', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('77', '李柳强', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('78', '李钟禄', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('79', '李剑辉', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('80', '李振全', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('81', '李培楷', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('82', '李敏聪', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('83', '李惠娟', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('84', '李燕霞', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('85', '杨柳青', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('86', '杨洪洪', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('87', '杨捷顺', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('88', '肖娟', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('89', '肖贵元', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('90', '吴昱南', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('91', '邱琳洁', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('92', '何钦梅', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('93', '余观雄', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('94', '余鹏', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('95', '邹渊', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('96', '邹宏景', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('97', '邹佩珊', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('98', '张丹', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('99', '张翼', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('100', '张许平', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('101', '张铭健', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('102', '张惠民', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('103', '陆秀', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('104', '陈阳', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('105', '陈红', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('106', '陈敏', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('107', '陈新', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('108', '陈小瀚', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('109', '陈广兴', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('110', '陈永新', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('111', '陈旭林', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('112', '林子弼', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('113', '林冰冰', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('114', '林金滂', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('115', '林碧紫', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('116', '罗慧', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('117', '郑微', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('118', '郑明旺', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('119', '郑泽峰', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('120', '郑映莲', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('121', '赵洪福', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('122', '柯裕佳', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('123', '钟文康', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('124', '钟复文', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('125', '钟恩育', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('126', '钟海敏', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('127', '钟瑞深', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('128', '祝伟雄', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('129', '袁怡峰', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('130', '袁铁石', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('131', '聂倩', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('132', '徐建', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('133', '高艺君', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('134', '郭玉娟', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('135', '郭彩倩', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('136', '黄天辉', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('137', '黄江枫', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('138', '黄国平', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('139', '黄欣欣', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('140', '黄泽辉', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('141', '黄雪强', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('142', '黄彩儿', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('143', '黄琦昌', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('144', '梁飞龙', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('145', '梁浩鑫', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('146', '梁景梅', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('147', '梁静园', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('148', '彭子和', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('149', '彭建标', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('150', '蒋佳雯', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('151', '程少英', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('152', '温英飞', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('153', '谢奇', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('154', '谢春祥', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('155', '蓝盛光', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('156', '赖仕宇', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('157', '赖路明', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('158', '雷美玲', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('159', '蔡木坤', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('160', '蔡俊杰', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('161', '蔡俊儒', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('162', '廖文烽', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('163', '缪宏辉', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('164', '潘立鹏', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
INSERT INTO `user` VALUES ('165', '魏伟宁', '{\"director\":0,\"president\":0,\"vpresident\":0,\"secretary\":0,\"supervisor\":0,\"supervisors\":0}');
