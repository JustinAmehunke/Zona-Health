<?php

require_once "Appointment.php";
require_once "AppointmentRequest.php";

use Doctrine\ORM\Mapping as ORM;




/**
 * @ORM\Entity
 * @ORM\Table(name="doctors")
 */

class Doctor

{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	protected $id;

	/**
	 * @ORM\OneToOne(targetEntity="User")
	 * @ORM\JoinColumn(name="user_id")
	 */
	protected $userInfo;


	/**
	 * @ORM\Column(type="boolean", nullable=true, options={"default": false})
	 */
	protected $authorizationStatus = false;

	/**
	 * @ORM\OneToMany(targetEntity="Appointment", mappedBy="doctor")
	 */
	protected $appointments;

	/**
	 * @ORM\OneToMany(targetEntity="AppointmentRequest", mappedBy="doctor")
	 */
	protected $appointmentRequests;

	public function __construct()
	{
		$this->appointmentRequests = array();
		$this->appointments = array();
	}

	public function getId()
	{
		return $this->id;
	}

	public function setUserInfo($user)
	{

		$this->userInfo = $user;
	}

	public function getUserInfo()
	{
		return $this->userInfo;
	}

	public function getAuthorizationStatus()
	{
		return $this->authorizationStatus;
	}
	public function setAuthorizationStatus($status)
	{
		$this->authorizationStatus = $status;
	}

	public function getAppointments()
	{
		return $this->appointments;
	}

	public function setAppointments($appointment)
	{
		$this->appointments[] = $appointment;
	}

	public function getAppointmentRequests()
	{
		return $this->appointmentRequests;
	}

	public function setAppointmentRequests($appointmentRequest)
	{
		$this->appointmentRequests[] = $appointmentRequest;
	}

	public function getTodaysAppointments()
	{
		/*	return 	array_filter($this->appointments, function ($elem) {
			if (date('Y-m-d') == date('Y-m-d', $elem->getTime()))
				return true;
			return false;
	}); */

		$result = [];

		foreach ($this->appointments as $appointment) {

			if (date('Y-m-d') ==  date('Y-m-d', $appointment->getTime()))
				$result[] = $appointment;
		}

		return $result;
	}
}
