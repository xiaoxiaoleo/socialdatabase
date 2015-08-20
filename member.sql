SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `member`
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL auto_increment COMMENT '会员ID号',
  `member_user` varchar(25) collate utf8_unicode_ci default NULL COMMENT '注册名称',
  `member_password` varchar(32) collate utf8_unicode_ci default NULL COMMENT '注册密码',
  `member_name` varchar(20) collate utf8_unicode_ci default NULL COMMENT '真实姓名',
  `member_sex` varchar(1) collate utf8_unicode_ci default NULL COMMENT '性别',
  `member_qq` varchar(10) collate utf8_unicode_ci default NULL COMMENT 'QQ号',
  `member_phone` varchar(15) collate utf8_unicode_ci default NULL COMMENT '手机号',
  `member_email` varchar(50) collate utf8_unicode_ci default NULL COMMENT 'email',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `member_account` (`member_user`)
) ENGINE=MyISAM AUTO_INCREMENT=1998 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of member
-- ----------------------------
 
 