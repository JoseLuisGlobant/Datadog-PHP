<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

use SkyBilling\App\Service;

$service = new Service();

echo $service->helloWorld() . ' ' . $service->get('123');
