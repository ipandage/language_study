CREATE TABLE `todo` (
  `id` int(11) NOT NULL auto_increment,
  `task` varchar(20) collate utf8_bin default NULL,
  `status` varchar(20) collate utf8_bin default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin