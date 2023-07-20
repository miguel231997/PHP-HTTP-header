<?php

require_once 'vendor/autload.php';

use App\Controller\HomeController;

$controller = new HomeController();
$controller->index();