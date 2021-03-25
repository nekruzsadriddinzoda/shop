<?php

include_once __DIR__ . "/../Fixtures/Fixture01.php";
include_once __DIR__ . "/../Fixtures/Fixture02.php";
include_once __DIR__ . "/../Fixtures/Fixture03.php";
include_once __DIR__ . "/../Fixtures/Fixture04.php";
include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";

$connect = DBConnector::getInstance();

$fixture = new Fixture01($connect);
$fixture->run();

$fixture02 = new Fixture02($connect);
$fixture02->run();

$fixture03 = new Fixture03($connect);
$fixture03->run();

$fixture04 = new Fixture04($connect);
$fixture04->run();

die("It is True!") ;
