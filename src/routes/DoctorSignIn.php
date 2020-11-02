<?php
require_once __DIR__ . '/../../bootstrap.php';
require_once __DIR__ . '/../models/Doctor.php';

require_once __DIR__ . '/../models/User.php';

require_once __DIR__ . '/../utils/request_helpers.php';

$errors = null;



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$query = $entityManager->createQuery("SELECT d FROM Doctor d JOIN d.userInfo u WHERE u.email = '{$_POST['email']}'");
	$result = $query->getOneOrNullResult();

	if ($result === null) {
		$errors = 'Email or Password is incorrect';
	} else if (!password_verify($_POST['password'], $result->getUserInfo()->getPassword())) {
		$errors = 'Email or Password is incorrect';
	} else if (is_null($result->getAuthorizationStatus()) || !$result->getAuthorizationStatus()) {
		echo "<h1> Your account hasn't yet been activated";
		die();
	} else {
		$_SESSION['user'] = $result->getUserInfo()->getEmail();
		$_SESSION['user-type'] = 'Doctor';
		header("Location: " . __SERVER_ROOT__);
		die();
	}
}
