<?php

use Phalcon\Loader;

define('COMPOSER_DIR', '../vendor/composer');

$loader = new Loader();
$loader
    ->registerNamespaces([
        'BaseName' => __DIR__.'/../apps/',
    ])
    ->registerClasses(
        require(COMPOSER_DIR.'/autoload_classmap.php')
    );
$loader->register();
