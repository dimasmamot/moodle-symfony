<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPaketSoal
 *
 * @ORM\Table(name="tbl_paket_soal")
 * @ORM\Entity
 */
class TblPaketSoal
{
    /**
     * @return string
     */
    public function getNamaPaketSoal()
    {
        return $this->namaPaketSoal;
    }

    /**
     * @param string $namaPaketSoal
     */
    public function setNamaPaketSoal($namaPaketSoal)
    {
        $this->namaPaketSoal = $namaPaketSoal;
    }

    /**
     * @return int
     */
    public function getIdPaketSoal()
    {
        return $this->idPaketSoal;
    }

    /**
     * @param int $idPaketSoal
     */
    public function setIdPaketSoal($idPaketSoal)
    {
        $this->idPaketSoal = $idPaketSoal;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="NAMA_PAKET_SOAL", type="string", length=200, nullable=true)
     */
    private $namaPaketSoal;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PAKET_SOAL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaketSoal;


}

