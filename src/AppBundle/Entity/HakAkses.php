<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HakAkses
 *
 * @ORM\Table(name="hak_akses")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HakAksesRepository")
 */
class HakAkses
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
     * @ORM\Column(name="hak_akses", type="string", length=255)
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
     * Set hakAkses
     *
     * @param string $hakAkses
     *
     * @return HakAkses
     */
    public function setHakAkses($hakAkses)
    {
        $this->hakAkses = $hakAkses;
    
        return $this;
    }

    /**
     * Get hakAkses
     *
     * @return string
     */
    public function getHakAkses()
    {
        return $this->hakAkses;
    }
}

