<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * soal
 *
 * @ORM\Table(name="soal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\soalRepository")
 */
class soal
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
     * @var int
     *
     * @ORM\Column(name="id_paket_soal", type="integer")
     */
    private $idPaketSoal;

    /**
     * @var string
     *
     * @ORM\Column(name="pertanyaan", type="string", length=255)
     */
    private $pertanyaan;

    /**
     * @var string
     *
     * @ORM\Column(name="opsi_a", type="string", length=255)
     */
    private $opsiA;

    /**
     * @var string
     *
     * @ORM\Column(name="opsi_b", type="string", length=255)
     */
    private $opsiB;

    /**
     * @var string
     *
     * @ORM\Column(name="opsi_c", type="string", length=255)
     */
    private $opsiC;

    /**
     * @var string
     *
     * @ORM\Column(name="opsi_d", type="string", length=255)
     */
    private $opsiD;

    /**
     * @var string
     *
     * @ORM\Column(name="opsi_e", type="string", length=255)
     */
    private $opsiE;

    /**
     * @var string
     *
     * @ORM\Column(name="jawaban", type="string", length=255)
     */
    private $jawaban;


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
     * Set idPaketSoal
     *
     * @param integer $idPaketSoal
     *
     * @return soal
     */
    public function setIdPaketSoal($idPaketSoal)
    {
        $this->idPaketSoal = $idPaketSoal;
    
        return $this;
    }

    /**
     * Get idPaketSoal
     *
     * @return integer
     */
    public function getIdPaketSoal()
    {
        return $this->idPaketSoal;
    }

    /**
     * Set pertanyaan
     *
     * @param string $pertanyaan
     *
     * @return soal
     */
    public function setPertanyaan($pertanyaan)
    {
        $this->pertanyaan = $pertanyaan;
    
        return $this;
    }

    /**
     * Get pertanyaan
     *
     * @return string
     */
    public function getPertanyaan()
    {
        return $this->pertanyaan;
    }

    /**
     * Set opsiA
     *
     * @param string $opsiA
     *
     * @return soal
     */
    public function setOpsiA($opsiA)
    {
        $this->opsiA = $opsiA;
    
        return $this;
    }

    /**
     * Get opsiA
     *
     * @return string
     */
    public function getOpsiA()
    {
        return $this->opsiA;
    }

    /**
     * Set opsiB
     *
     * @param string $opsiB
     *
     * @return soal
     */
    public function setOpsiB($opsiB)
    {
        $this->opsiB = $opsiB;
    
        return $this;
    }

    /**
     * Get opsiB
     *
     * @return string
     */
    public function getOpsiB()
    {
        return $this->opsiB;
    }

    /**
     * Set opsiC
     *
     * @param string $opsiC
     *
     * @return soal
     */
    public function setOpsiC($opsiC)
    {
        $this->opsiC = $opsiC;
    
        return $this;
    }

    /**
     * Get opsiC
     *
     * @return string
     */
    public function getOpsiC()
    {
        return $this->opsiC;
    }

    /**
     * Set opsiD
     *
     * @param string $opsiD
     *
     * @return soal
     */
    public function setOpsiD($opsiD)
    {
        $this->opsiD = $opsiD;
    
        return $this;
    }

    /**
     * Get opsiD
     *
     * @return string
     */
    public function getOpsiD()
    {
        return $this->opsiD;
    }

    /**
     * Set opsiE
     *
     * @param string $opsiE
     *
     * @return soal
     */
    public function setOpsiE($opsiE)
    {
        $this->opsiE = $opsiE;
    
        return $this;
    }

    /**
     * Get opsiE
     *
     * @return string
     */
    public function getOpsiE()
    {
        return $this->opsiE;
    }

    /**
     * Set jawaban
     *
     * @param string $jawaban
     *
     * @return soal
     */
    public function setJawaban($jawaban)
    {
        $this->jawaban = $jawaban;
    
        return $this;
    }

    /**
     * Get jawaban
     *
     * @return string
     */
    public function getJawaban()
    {
        return $this->jawaban;
    }
}

