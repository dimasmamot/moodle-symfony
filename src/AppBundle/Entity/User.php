<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nama", type="string", length=255)
     */
    
    private $hakAkses;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_registration", type="date")
     */
    private $dateRegistration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_last_logon", type="date")
     */
    private $dateLastLogon;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nama
     *
     * @param string $nama
     *
     * @return User
     */
    public function setNama($nama)
    {
        $this->nama = $nama;
    
        return $this;
    }

    /**
     * Get nama
     *
     * @return string
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * Set hakAkses
     *
     * @param integer $hakAkses
     *
     * @return User
     */
    public function setHakAkses($hakAkses)
    {
        $this->hakAkses = $hakAkses;
    
        return $this;
    }

    /**
     * Get hakAkses
     *
     * @return integer
     */
    public function getHakAkses()
    {
        return $this->hakAkses;
    }

    /**
     * Set dateRegistration
     *
     * @param \DateTime $dateRegistration
     *
     * @return UserDetail
     */
    public function setDateRegistration($dateRegistration)
    {
        $this->dateRegistration = $dateRegistration;
    
        return $this;
    }

    /**
     * Get dateRegistration
     *
     * @return \DateTime
     */
    public function getDateRegistration()
    {
        return $this->dateRegistration;
    }

    /**
     * Set dateLastLogon
     *
     * @param \DateTime $dateLastLogon
     *
     * @return UserDetail
     */
    public function setDateLastLogon($dateLastLogon)
    {
        $this->dateLastLogon = $dateLastLogon;
    
        return $this;
    }

    /**
     * Get dateLastLogon
     *
     * @return \DateTime
     */
    public function getDateLastLogon()
    {
        return $this->dateLastLogon;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return UserDetail
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return UserDetail
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set userName
     *
     * @param string $username
     *
     * @return UserDetail
     */
    public function setUserName($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return UserDetail
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return UserDetail
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    
}

