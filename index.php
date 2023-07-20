<?php

require_once 'vendor/autload.php';

use App\Controller\HomeController;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$controller = new HomeController();
$controller->index();