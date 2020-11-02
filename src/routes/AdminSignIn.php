<?php
require_once __DIR__ . '/../../bootstrap.php';
require_once __DIR__ . '/../models/Admin.php';

require_once __DIR__ . '/../models/User.php';

require_once __DIR__ . '/../utils/request_helpers.php';

$errors = null;



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$query = $entityManager->createQuery("SELECT a FROM Admin a JOIN a.userInfo u WHERE u.email = '{$_POST['email']}'");
	$result = $query->getOneOrNullResult();

	if ($result === null) {
		$errors = 'Email or Password is incorrect';
	} else if (!password_verify($_POST['password'], $result->getUserInfo()->getPassword())) {
		$errors = 'Email or Password is incorrect';
	} else {
		$_SESSION['user'] = $result->getUserInfo()->getEmail();
		$_SESSION['user-type'] = 'Admin';
		header("Location: " . __SERVER_ROOT__);
		die();
	}
}
