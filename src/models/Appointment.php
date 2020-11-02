<?php


require_once "Doctor.php";
require_once "Patient.php";

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="appointments")
 */
class Appointment

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
	 * @ORM\Column(type="integer")
	 */
	protected $time;



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
	public function getTime()
	{
		return	$this->time;
	}
	public function setTime($time)
	{
		$this->time = $time;
	}
	public function getPrettyTime()
	{
		return	date('G:i', $this->time);
	}
}
