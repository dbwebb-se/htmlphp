DROP TABLE IF EXISTS "Jetty_mos";
CREATE TABLE "Jetty_mos" ("jettyPosition" INTEGER PRIMARY KEY  NOT NULL  UNIQUE , "boatType" VARCHAR(20) NOT NULL , "boatEngine" VARCHAR(20) NOT NULL , "boatLength" INTEGER, "boatWidth" INTEGER, "ownerName" VARCHAR(20));
INSERT INTO "Jetty_mos" VALUES(1,'Buster XXL','Yamaha 115hk',635,240,'Adam');
INSERT INTO "Jetty_mos" VALUES(2,'Buster M','Yamaha 40hk',460,186,'Berit');
INSERT INTO "Jetty_mos" VALUES(3,'Linder 440','Tohatsu 4hk',431,164,'Ceasar');
