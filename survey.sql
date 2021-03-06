CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `participant` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `leadership1` tinyint(4) DEFAULT NULL,
  `leadership2` tinyint(4) DEFAULT NULL,
  `leadership3` tinyint(4) DEFAULT NULL,
  `leadership4` tinyint(4) DEFAULT NULL,
  `leadership5` tinyint(4) DEFAULT NULL,
  `leadership6` tinyint(4) DEFAULT NULL,
  `customer1` tinyint(4) DEFAULT NULL,
  `customer2` tinyint(4) DEFAULT NULL,
  `customer3` tinyint(4) DEFAULT NULL,
  `customer4` tinyint(4) DEFAULT NULL,
  `customer5` tinyint(4) DEFAULT NULL,
  `people1` tinyint(4) DEFAULT NULL,
  `people2` tinyint(4) DEFAULT NULL,
  `people3` tinyint(4) DEFAULT NULL,
  `people4` tinyint(4) DEFAULT NULL,
  `people5` tinyint(4) DEFAULT NULL,
  `people6` tinyint(4) DEFAULT NULL,
  `process1` tinyint(4) DEFAULT NULL,
  `process2` tinyint(4) DEFAULT NULL,
  `process3` tinyint(4) DEFAULT NULL,
  `process4` tinyint(4) DEFAULT NULL,
  `process5` tinyint(4) DEFAULT NULL,
  `process6` tinyint(4) DEFAULT NULL,
  `setting1` tinyint(4) DEFAULT NULL,
  `setting2` tinyint(4) DEFAULT NULL,
  `setting3` tinyint(4) DEFAULT NULL,
  `setting4` tinyint(4) DEFAULT NULL,
  `technology1` tinyint(4) DEFAULT NULL,
  `technology2` tinyint(4) DEFAULT NULL,
  `technology3` tinyint(4) DEFAULT NULL,
  `technology4` tinyint(4) DEFAULT NULL,
  `recorded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
