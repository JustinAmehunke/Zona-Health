<?php


require_once "Appointment.php";

require_once "AppointmentRequest.php";

use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity
 * @ORM\Table(name="patients")
 */

class Patient

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
	 * @ORM\OneToMany(targetEntity="Appointment", mappedBy="patient")
	 */
	protected $appointments;

	/**
	 * @ORM\OneToMany(targetEntity="AppointmentRequest", mappedBy="patient")
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
}
