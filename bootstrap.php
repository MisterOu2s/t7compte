<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__."/Entites");
$isDevMode = false;

$bddparam = json_decode(getenv("VCAP_SERVICES"),true)["mysql"][0]["credentials"];

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host' => $bddparam['host'],
    'port' => $bddparam['port'],
    'user'     => $bddparam['user'],
    'password' => $bddparam['password'],
    'dbname'   => $bddparam['name'],
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);