<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HakAkses
 *
 * @ORM\Table(name="hak_akses")
 * @ORM\Entity
 */
class HakAkses
{
    /**
     * @var string
     *
     * @ORM\Column(name="hak_akses", type="string", length=255, nullable=false)
     */
    private $hakAkses;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return string
     */
    public function getHakAkses()
    {
        return $this->hakAkses;
    }

    /**
     * @param string $hakAkses
     */
    public function setHakAkses($hakAkses)
    {
        $this->hakAkses = $hakAkses;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}

