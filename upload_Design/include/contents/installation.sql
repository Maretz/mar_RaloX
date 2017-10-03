CREATE TABLE IF NOT EXISTS `prefix_marralox` (

  `id` int(5) unsigned NOT NULL auto_increment,

  `raloxtheme`  varchar(200) NOT NULL,
  `raloxstyle`  varchar(200) NOT NULL,
  `linkfb`  varchar(200) NOT NULL,
  `linktwitter`  varchar(200) NOT NULL,
  `linkgoogleplus`  varchar(200) NOT NULL,



  PRIMARY KEY  (`id`)
)ENGINE = MYISAM;

INSERT INTO `prefix_marralox` (`id`, `raloxtheme`, `raloxstyle`, `linkfb` ,`linktwitter` ,`linkgoogleplus`) VALUES (1, 'include/designs/mar_RaloX/gamestyle_TCTD.css', 'include/designs/mar_RaloX/color_blue.css', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://plus.google.com/');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (5, 0, 2, 0, 0, 'marralox', 'allianz.php');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (5, 1, 7, 0, 0, 'Startseite', '');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (5, 2, 7, 0, 0, 'Newsbereich', 'news');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (5, 3, 7, 0, 0, 'User Forum', 'forum');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (5, 4, 7, 0, 0, 'Teams', 'teams');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (5, 5, 7, 0, 0, 'Join Us', 'joinus');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (5, 6, 7, 0, 0, 'Contact', 'contact');
INSERT INTO `prefix_menu` (`wo`,`pos`,`was`,`ebene`,`recht`,`name`,`path`) VALUES (5, 7, 7, 0, 0, 'Imprint', 'impressum');


INSERT INTO `prefix_modules` (`url` ,`name` ,`gshow` ,`ashow` ,`fright`) VALUES ('marralox', 'mar_RaloX', '1', '1', '0');