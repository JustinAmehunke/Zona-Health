<?php

require_once __DIR__ . '/./auth_guard.php';


if (!($user instanceof Doctor)) {
	die();
}
