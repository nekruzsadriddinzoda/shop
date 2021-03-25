<?php

include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";
include_once __DIR__ . "/../Migrations/202102192110_migration_add_rbac.php";

$dbConnector = DBConnector::getInstance();
$migration = new MigrationAddRbac($dbConnector);
$migration->rollback();

die("It is True");
