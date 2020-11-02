<?php

require_once __DIR__ . '/../../bootstrap.php';
require_once __DIR__ . '/../models/Doctor.php';

require_once __DIR__ . '/../models/Patient.php';

require_once __DIR__ . '/../models/Admin.php';

require_once __DIR__ . '/../models/User.php';



$user =  null;

if (isset($_SESSION['user'])) {

	$query = $entityManager->createQuery("SELECT x FROM {$_SESSION['user-type']} x JOIN x.userInfo u WHERE u.email = '{$_SESSION['user']}'");
	$user = $query->getOneOrNullResult();
}
