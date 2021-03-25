<?php

include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";
include_once __DIR__ . "/../Migrations/202101200030_migration_add_field_prior_to_categories.php";

$dbConnector = DBConnector::getInstance();
$migration = new MigrationAddFieldPriorToCategory($dbConnector);
$migration->rollback();

die("It is True");
