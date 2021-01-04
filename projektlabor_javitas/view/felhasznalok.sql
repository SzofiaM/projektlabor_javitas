CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `rank` int(20) NOT NULL DEFAULT '1',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bans` int(20) unsigned NOT NULL DEFAULT '0',
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `regip` varchar(255) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
