<?php

use Phalcon\Mvc\Micro;

error_reporting(E_ALL);

try {
    $config = include __DIR__ . '/../config/config.php';
    include __DIR__ . '/../config/services.php';
    include __DIR__ . '/../config/loader.php';
    $app = new Micro($di);
    include __DIR__ . '/../apps/app.php';
    $app->handle();
} catch (Phalcon\Exception $e) {
    echo $e->getMessage();
} catch (PDOException $e) {
    echo $e->getMessage();
}
