<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";

$db = connectToDatabase($dsn);

$sqlText = <<<EOD
CREATE TABLE IF NOT EXISTS course
(
    "code" TEXT PRIMARY KEY,
    "name" TEXT NOT NULL,
    "points" REAL DEFAULT 7.5,
    "term" INTEGER,
    "kmom" INTEGER,
    "done" DATETIME
);

DELETE FROM course;

INSERT INTO course VALUES('PA1439','htmlphp',7.5,1,'','2018-10-03 11:28:19');
INSERT INTO course VALUES('DV1531','python',7.5,1,NULL,'2018-10-03 11:28:19');
INSERT INTO course VALUES('PA1436','design',7.5,2,NULL,NULL);
INSERT INTO course VALUES('DV1561','javascript1',7.5,2,NULL,NULL);
EOD;

$sqls = explode(";", $sqlText);
foreach ($sqls as $sql) {
    $stmt = $db->prepare($sql);
    $stmt->execute();
}

$url = "select.php";
header("Location: $url");
