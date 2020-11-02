<?php


require_once "Doctor.php";
require_once "Patient.php";

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="appointment_requests")
 */
class AppointmentRequest

{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Doctor", cascade={"persist"})
	 */
	protected $doctor;


	/**
	 * @ORM\ManyToOne(targetEntity="Patient", cascade={"persist"})
	 */
	protected $patient;
	/**
	 * @ORM\Column(type="boolean",  options={"default": false})
	 */
	protected $scheduled = false;

	public function getId()
	{
		return $this->id;
	}

	public function setScheduled($val)
	{
		$this->scheduled = $val;
	}

	public function getScheduled()
	{
		return $this->scheduled;
	}

	public function setDoctor($doctor)
	{
		$this->doctor = $doctor;
	}
	public function getDoctor()
	{
		return $this->doctor;
	}

	public function getPatient()
	{
		return $this->patient;
	}
	public function setPatient($patient)
	{
		$this->patient = $patient;
	}
}
