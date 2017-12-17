<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSoal
 *
 * @ORM\Table(name="tbl_soal", indexes={@ORM\Index(name="FK_REFERENCE_19", columns={"ID_PAKET_SOAL"})})
 * @ORM\Entity
 */
class TblSoal
{
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
    public function getIdDetailQuiz()
    {
        return $this->idDetailQuiz;
    }

    /**
     * @param int $idDetailQuiz
     */
    public function setIdDetailQuiz($idDetailQuiz)
    {
        $this->idDetailQuiz = $idDetailQuiz;
    }

    /**
     * @return TblPaketSoal
     */
    public function getIdPaketSoal()
    {
        return $this->idPaketSoal;
    }

    /**
     * @param TblPaketSoal $idPaketSoal
     */
    public function setIdPaketSoal($idPaketSoal)
    {
        $this->idPaketSoal = $idPaketSoal;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="PERTANYAAN", type="text", length=65535, nullable=true)
     */
    private $pertanyaan;

    /**
     * @var string
     *
     * @ORM\Column(name="OPSI_A", type="text", length=65535, nullable=true)
     */
    private $opsiA;

    /**
     * @var string
     *
     * @ORM\Column(name="OPSI_B", type="text", length=65535, nullable=true)
     */
    private $opsiB;

    /**
     * @var string
     *
     * @ORM\Column(name="OPSI_C", type="text", length=65535, nullable=true)
     */
    private $opsiC;

    /**
     * @var string
     *
     * @ORM\Column(name="OPSI_D", type="text", length=65535, nullable=true)
     */
    private $opsiD;

    /**
     * @var string
     *
     * @ORM\Column(name="OPSI_E", type="text", length=65535, nullable=true)
     */
    private $opsiE;

    /**
     * @var string
     *
     * @ORM\Column(name="JAWABAN", type="string", length=2, nullable=true)
     */
    private $jawaban;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DETAIL_QUIZ", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDetailQuiz;

    /**
     * @var \AppBundle\Entity\TblPaketSoal
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblPaketSoal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PAKET_SOAL", referencedColumnName="ID_PAKET_SOAL")
     * })
     */
    private $idPaketSoal;


}

