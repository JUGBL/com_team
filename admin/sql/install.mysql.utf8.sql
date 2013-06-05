
DROP TABLE IF EXISTS `#__sports_teams_games`;

CREATE TABLE `#__sports_teams_games` (
  `id` int(11) NOT NULL auto_increment,
  `opponent_team` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `score` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `#__sports_teams`;

CREATE TABLE `#__sports_teams` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `sport` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__sports_teams` (`name`, `score`, `sport`) VALUES
  ('AC Milan', '0', 'soccer'),
  ('Inter', '0', 'soccer'),
  ('Valencia', '0', 'soccer'),
  ('Barcelona', '0', 'soccer'),
  ('New York Knicks', '0', 'basketball'),
  ('Memphis Grizzlies', '0', 'basketball'),
  ('Chicago Bulls', '0', 'basketball'),
  ('Indiana Pacers', '0', 'basketball');


DROP TABLE IF EXISTS `#__sports_teams_players`;

CREATE TABLE `#__sports_teams_players` (
  `id` int(11) NOT NULL auto_increment,
  `team_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `biography` text NOT NULL,
  `profile_image` varchar(255),
  `position` varchar(255) NOT NULL,
  `season_played_games` int(5) NOT NULL,
  `total_played_games` int(10) NOT NULL,
  `score` int(25) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__sports_teams_players` (`team_id`, `name`, `birth_date`, `biography`, `position`, `season_played_games`, `total_played_games`, `score` ) VALUES
	('1', 'Alex B', '1988-10-10', 'Dobar igrac!', 'center', '3', '10', '230'),
  ('2', 'Aco A', '1988-10-10', 'Ne bas dobar!', 'center', '3', '10', '250');










DROP TABLE IF EXISTS `#__helloworld`;

CREATE TABLE `#__helloworld` (
  `id` int(11) NOT NULL auto_increment,
  `greeting` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__helloworld` (`greeting`) VALUES
('Hello World!'),
('Good bye World!');