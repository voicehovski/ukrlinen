DROP TABLE IF EXISTS `#__orangeei`;
 
CREATE TABLE `#__orangeei` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`profile` VARCHAR(32) NOT NULL,
	`published` tinyint(4) NOT NULL,
	`action` CHAR(1) NOT NULL,
	`options` BLOB,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
 
INSERT INTO `#__orangeei` (`profile`, `action`) VALUES
('Default import', 'i'),
('Default export', 'e');