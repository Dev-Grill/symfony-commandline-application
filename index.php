
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
|-----------------------------------
| Services Namespaces
|-----------------------------------
*/
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

/*
|-----------------------------------
| Services Namespaces
|-----------------------------------
*/
use Emeka\Services\CustomerService;
use Emeka\Database\DatabaseConnection;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
new DatabaseConnection($capsule);
$customerService = new CustomerService;

echo json_encode($customerService->getAll()->toArray());