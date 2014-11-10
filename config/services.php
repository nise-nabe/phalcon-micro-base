<?php

use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

$di = new FactoryDefault();

$di->set('view', function() {
    $view = new View();
    return $view;
}, true);

$di->set('dispatcher', function() {
    $dispatcher = new Dispatcher();
    //$dispatcher->setDefaultNamespace('BaseName\Controllers');
    return $dispatcher;
}, true);

//$di->set('db', function() {
//    $db = new DbAdapter([
//        'host'     => '',
//        'username' => '',
//        'password' => '',
//        'dbname'   => '',
//    ]);
//
//    return $db;
//}, true);
