<?php


require_once "./models/User.php";
require_once "./models/Patient.php";
require_once '../bootstrap.php';

$user =  new User();


$user->setCountry('Nigeria');
$user->setEmail("damilola@he.com");
$user->setFirstName("Damilol");
$user->setLastName("Randolph");
$user->setTitle('Mr');
$user->setPassword('hey1234');

$patient = new Patient();
$entityManager->persist($user);
$patient->setUserInfo($user);

$entityManager->persist($patient);
$entityManager->flush();
