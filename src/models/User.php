<?php


use Doctrine\ORM\Mapping as ORM;





/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */


class User
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", unique=true)
	 */
	protected $email;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $firstName;


	/**
	 * @ORM\Column(type="string")
	 */
	protected $lastName;


	/**
	 * @ORM\Column(type="string")
	 */
	protected $title;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $password;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $country;

	public function getCountry()
	{
		return $this->country;
	}
	public function setCountry($country)
	{
		$this->country = $country;
	}
	public function getId()
	{
		return $this->id;
	}
	public function  getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getFirstName()
	{
		return $this->firstName;
	}
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}
	public function getLastName()
	{
		return $this->lastName;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function setTitle($title)
	{
		$this->title = $title;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function setPassword($password)
	{
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
		$this->password = $hashedPassword;
	}

	public function getFullName()
	{
		return $this->firstName . " " . $this->lastName;
	}
}
