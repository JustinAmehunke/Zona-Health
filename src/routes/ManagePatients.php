<?php

use Zona\Bootstrap\Globals as Globs;

require_once __DIR__ . '/../middleware/admin_guard.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$doctor =  Globs::$entityM->find('Doctor', $_POST['doctor']);
	$doctor->setAuthorizationStatus(true);
	Globs::$entityM->persist($doctor);
	Globs::$entityM->flush();
} else {
	$patients = Globs::$entityM->getRepository('Patient')->findAll();
}
