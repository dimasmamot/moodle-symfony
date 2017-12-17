<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaketSoal
 *
 * @ORM\Table(name="paket_soal")
 * @ORM\Entity
 */
class PaketSoal
{
    /**
     * @var string
     *
     * @ORM\Column(name="nama_paket_soal", type="string", length=255, nullable=false)
     */
    private $namaPaketSoal;

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

