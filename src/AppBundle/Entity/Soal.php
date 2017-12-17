<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soal
 *
 * @ORM\Table(name="soal")
 * @ORM\Entity
 */
class Soal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_paket_soal", type="integer", nullable=false)
     */
    private $idPaketSoal;

    /**
     * @var string
     *
     * @ORM\Column(name="pertanyaan", type="string", length=255, nullable=false)
     */
    private $pertanyaan;

    /**
     * @var string
     *
     * @ORM\Column(name="opsi_a", type="string", length=255, nullable=false)
     */
    private $opsiA;

    /**
     * @var string
     *
     * @ORM\Column(name="opsi_b", type="string", length=255, nullable=false)
     */
    private $opsiB;

    /**
     * @var string
     *
     * @ORM\Column(name="opsi_c", type="string", length=255, nullable=false)
     */
    private $opsiC;

    /**
     * @var string
     *
     * @ORM\Column(name="opsi_d", type="string", length=255, nullable=false)
     */
    private $opsiD;

    /**
     * @var string
     *
     * @ORM\Column(name="opsi_e", type="string", length=255, nullable=false)
     */
    private $opsiE;

    /**
     * @var string
     *
     * @ORM\Column(name="jawaban", type="string", length=255, nullable=false)
     */
    private $jawaban;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @return string
     */
    public function getPertanyaan()
    {
        return $this->pertanyaan;
    }

    /**
     * @param string $pertanyaan
     */
    public function setPertanyaan($pertanyaan)
    {
        $this->pertanyaan = $pertanyaan;
    }

    /**
     * @return string
     */
    public function getOpsiA()
    {
        return $this->opsiA;
    }

    /**
     * @param string $opsiA
     */
    public function setOpsiA($opsiA)
    {
        $this->opsiA = $opsiA;
    }

    /**
     * @return string
     */
    public function getOpsiB()
    {
        return $this->opsiB;
    }

    /**
     * @param string $opsiB
     */
    public function setOpsiB($opsiB)
    {
        $this->opsiB = $opsiB;
    }

    /**
     * @return string
     */
    public function getOpsiC()
    {
        return $this->opsiC;
    }

    /**
     * @param string $opsiC
     */
    public function setOpsiC($opsiC)
    {
        $this->opsiC = $opsiC;
    }

    /**
     * @return string
     */
    public function getOpsiD()
    {
        return $this->opsiD;
    }

    /**
     * @param string $opsiD
     */
    public function setOpsiD($opsiD)
    {
        $this->opsiD = $opsiD;
    }

    /**
     * @return string
     */
    public function getOpsiE()
    {
        return $this->opsiE;
    }

    /**
     * @param string $opsiE
     */
    public function setOpsiE($opsiE)
    {
        $this->opsiE = $opsiE;
    }

    /**
     * @return string
     */
    public function getJawaban()
    {
        return $this->jawaban;
    }

    /**
     * @param string $jawaban
     */
    public function setJawaban($jawaban)
    {
        $this->jawaban = $jawaban;
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

