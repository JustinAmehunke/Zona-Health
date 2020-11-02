<?php
require_once __DIR__ . '/../../bootstrap.php';
require_once __DIR__ . '/../models/Doctor.php';

require_once __DIR__ . '/../models/User.php';

require_once __DIR__ . '/../utils/request_helpers.php';

$errors = array();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$result = $entityManager->getRepository('User')->findBy(array('email' => $_POST['email']));

	if (count($result) != 0) {
		$errors['email'] = 'Email Exists';
	} else {
		$user = new User();
		$user->setCountry(reclaimPostItem('country'));
		$user->setFirstName(reclaimPostItem('firstName'));
		$user->setLastName(reclaimPostItem('lastName'));
		$user->setPassword(reclaimPostItem('password'));
		$user->setEmail(reclaimPostItem('email'));
		$user->setTitle('nil');

		$entityManager->persist($user);

		$doctor = new Doctor();

		$doctor->setUserInfo($user);

		$entityManager->persist($doctor);

		$entityManager->persist($doctor);
		$entityManager->flush();
		header("Location: " . __SERVER_ROOT__);
		die();
	}
}
