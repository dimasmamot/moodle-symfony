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
    private $nama;

    /**
     * @var int
     *
     * @ORM\Column(name="hak_akses", type="integer")
     */
    private $hakAkses;


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
}

