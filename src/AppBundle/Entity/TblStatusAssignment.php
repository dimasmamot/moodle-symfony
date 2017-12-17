<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblStatusAssignment
 *
 * @ORM\Table(name="tbl_status_assignment")
 * @ORM\Entity
 */
class TblStatusAssignment
{
    /**
     * @return string
     */
    public function getNamaStatusAssignment()
    {
        return $this->namaStatusAssignment;
    }

    /**
     * @param string $namaStatusAssignment
     */
    public function setNamaStatusAssignment($namaStatusAssignment)
    {
        $this->namaStatusAssignment = $namaStatusAssignment;
    }

    /**
     * @return int
     */
    public function getIdStatusAssignment()
    {
        return $this->idStatusAssignment;
    }

    /**
     * @param int $idStatusAssignment
     */
    public function setIdStatusAssignment($idStatusAssignment)
    {
        $this->idStatusAssignment = $idStatusAssignment;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="NAMA_STATUS_ASSIGNMENT", type="string", length=200, nullable=true)
     */
    private $namaStatusAssignment;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_STATUS_ASSIGNMENT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatusAssignment;


}

