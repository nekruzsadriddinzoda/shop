<?php

include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";
include_once __DIR__ . "/../Migrations/202101222030_migration_add_field_category_to_products.php";

$dbConnector = DBConnector::getInstance();
$migration = new MigrationAddFieldCategoryToProducts($dbConnector);
$migration->rollback();

die("It is True");
