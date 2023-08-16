<?php

include_once "connect.php";
include_once "allData.php";

$database = new DatabaseConnection();
$db = $database->getConnection();

$allData = new AllData($db);
$allData->getAllData();