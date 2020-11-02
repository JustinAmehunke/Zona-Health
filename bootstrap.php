<?php

namespace Zona\Bootstrap;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

session_start();
define("__SERVER_ROOT__", __DIR__ . '/');


require_once "vendor/autoload.php";



$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array((__DIR__ . "/src/models")), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);


$conn = array('driver' => 'pdo_mysql', 'user' => 'admin_benson', 'password' => 'animaljam123', 'dbname' => 'zona');



$entityManager = EntityManager::create($conn, $config);

class Globals
{
	public static $entityM = null;
}

Globals::$entityM = $entityManager;
