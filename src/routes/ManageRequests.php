<?php

use Zona\Bootstrap\Globals as Globs;

require_once __DIR__ . '/../middleware/doctor_guard.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$request =  Globs::$entityM->find('AppointmentRequest', $_POST['request']);
	$request->setScheduled(true);
	Globs::$entityM->persist($request);


	$appointment = new Appointment();
	$appointment->setDoctor($user);
	$appointment->setPatient($request->getPatient());
	$appointment->setTime(intval($_POST['time']));
	Globs::$entityM->persist($appointment);

	Globs::$entityM->flush();

	header("Location: .");
	die();
} else {
	$requests = Globs::$entityM->getRepository('AppointmentRequest')->findBy(array('scheduled' => false));
}
