<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUserDetail
 *
 * @ORM\Table(name="tbl_user_detail", indexes={@ORM\Index(name="FK_REFERENCE_26", columns={"ID_USER_PK"})})
 * @ORM\Entity
 */
class TblUserDetail
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_REGISTRATION", type="time", nullable=true)
     */
    private $dateRegistration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_LAST_LOGON", type="time", nullable=true)
     */
    private $dateLastLogon;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRST_NAME", type="string", length=200, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="LAST_NAME", type="string", length=200, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="USERNAME", type="string", length=200, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=200, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=200, nullable=true)
     */
    private $email;

    /**
     * @return \DateTime
     */
    public function getDateRegistration()
    {
        return $this->dateRegistration;
    }

    /**
     * @param \DateTime $dateRegistration
     */
    public function setDateRegistration($dateRegistration)
    {
        $this->dateRegistration = $dateRegistration;
    }

    /**
     * @return \DateTime
     */
    public function getDateLastLogon()
    {
        return $this->dateLastLogon;
    }

    /**
     * @param \DateTime $dateLastLogon
     */
    public function setDateLastLogon($dateLastLogon)
    {
        $this->dateLastLogon = $dateLastLogon;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $fisrtName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getIdUserDetail()
    {
        return $this->idUserDetail;
    }

    /**
     * @param int $idUserDetail
     */
    public function setIdUserDetail($idUserDetail)
    {
        $this->idUserDetail = $idUserDetail;
    }

    /**
     * @return TblUser
     */
    public function getIdRolePk()
    {
        return $this->idRolePk;
    }

    /**
     * @param TblUser $idRolePk
     */
    public function setIdRolePk($idRolePk)
    {
        $this->idRolePk = $idRolePk;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USER_DETAIL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUserDetail;

    /**
     * @var \AppBundle\Entity\TblRole
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblRole")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ROLE_PK", referencedColumnName="ID_ROLE_PK")
     * })
     */
    private $idRolePk;

     
}