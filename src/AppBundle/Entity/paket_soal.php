<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * paket_soal
 *
 * @ORM\Table(name="paket_soal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\paket_soalRepository")
 */
class paket_soal
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
     * @ORM\Column(name="nama_paket_soal", type="string", length=255)
     */
    private $namaPaketSoal;


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
     * Set namaPaketSoal
     *
     * @param string $namaPaketSoal
     *
     * @return paket_soal
     */
    public function setNamaPaketSoal($namaPaketSoal)
    {
        $this->namaPaketSoal = $namaPaketSoal;
    
        return $this;
    }

    /**
     * Get namaPaketSoal
     *
     * @return string
     */
    public function getNamaPaketSoal()
    {
        return $this->namaPaketSoal;
    }
}

