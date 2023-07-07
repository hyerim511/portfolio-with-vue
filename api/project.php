<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Project.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/ProjectConverter.class.php");
require_once("./inc/Utilities/DAO/ProjectDAO.class.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,HEAD,OPTIONS,PUT,DELETE ");
header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER["REQUEST_METHOD"];

switch($method) {
    case "GET" :
        ProjectDAO::startDb();
        echo json_encode(
            ProjectConverter::convertToStd(ProjectDAO::getAllProject())); 
    break;
}