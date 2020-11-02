<?php

use Zona\Bootstrap\Globals as Globs;

require_once __DIR__ . '/../middleware/doctor_guard.php';


$appointments = $user->getTodaysAppointments();
