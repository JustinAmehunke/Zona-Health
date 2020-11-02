<?php



use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity
 * @ORM\Table(name="admins")
 */

class Admin

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
}
