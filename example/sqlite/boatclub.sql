BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS `jetty` (
	`position`	INTEGER,
	`boatType`	TEXT,
	`boatEngine`	TEXT,
	`boatLength`	INTEGER,
	`boatWidth`	INTEGER,
	`ownerName`	TEXT,
	PRIMARY KEY(`position`)
);
INSERT INTO `jetty` VALUES (1,'Buster XXL','Yamaha 115hk',635,240,'Adam');
INSERT INTO `jetty` VALUES (2,'Buster M','Yamaha 40hk',460,186,'Berit');
INSERT INTO `jetty` VALUES (3,'Linder 440','Tohatsu 4hk',431,164,'Ceasar');
COMMIT;
