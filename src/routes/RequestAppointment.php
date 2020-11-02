<?php
require_once __DIR__ . '/../middleware/auth_guard.php';

require_once __DIR__ . '/../utils/request_helpers.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$doctor = $entityManager->find('Doctor', $_POST['doctor']);
	$request = new AppointmentRequest();
	$request->setDoctor($doctor);
	$request->setPatient($user);
	$entityManager->persist($request);
	$entityManager->flush();

	header("Location: ./");
} else {
	$doctors = $entityManager->getRepository("Doctor")->findBy(array("authorizationStatus" => true));
}
