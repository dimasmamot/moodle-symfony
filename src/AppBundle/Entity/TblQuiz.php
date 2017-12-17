<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblQuiz
 *
 * @ORM\Table(name="tbl_quiz", indexes={@ORM\Index(name="FK_REFERENCE_17", columns={"ID_PAKET_SOAL"}), @ORM\Index(name="FK_REFERENCE_28", columns={"ID_COURSE_PK"})})
 * @ORM\Entity
 */
class TblQuiz
{
    /**
     * @return string
     */
    public function getNamaQuiz()
    {
        return $this->namaQuiz;
    }

    /**
     * @param string $namaQuiz
     */
    public function setNamaQuiz($namaQuiz)
    {
        $this->namaQuiz = $namaQuiz;
    }

    /**
     * @return int
     */
    public function getDurasiQuiz()
    {
        return $this->durasiQuiz;
    }

    /**
     * @param int $durasiQuiz
     */
    public function setDurasiQuiz($durasiQuiz)
    {
        $this->durasiQuiz = $durasiQuiz;
    }

    /**
     * @return int
     */
    public function getTryAttempt()
    {
        return $this->tryAttempt;
    }

    /**
     * @param int $tryAttempt
     */
    public function setTryAttempt($tryAttempt)
    {
        $this->tryAttempt = $tryAttempt;
    }

    /**
     * @return int
     */
    public function getIdQuiz()
    {
        return $this->idQuiz;
    }

    /**
     * @param int $idQuiz
     */
    public function setIdQuiz($idQuiz)
    {
        $this->idQuiz = $idQuiz;
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
     * @return TblCourse
     */
    public function getIdCoursePk()
    {
        return $this->idCoursePk;
    }

    /**
     * @param TblCourse $idCoursePk
     */
    public function setIdCoursePk($idCoursePk)
    {
        $this->idCoursePk = $idCoursePk;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="NAMA_QUIZ", type="string", length=200, nullable=true)
     */
    private $namaQuiz;

    /**
     * @var integer
     *
     * @ORM\Column(name="DURASI_QUIZ", type="integer", nullable=true)
     */
    private $durasiQuiz;

    /**
     * @var integer
     *
     * @ORM\Column(name="TRY_ATTEMPT", type="integer", nullable=true)
     */
    private $tryAttempt;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_QUIZ", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuiz;

    /**
     * @var \AppBundle\Entity\TblPaketSoal
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblPaketSoal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PAKET_SOAL", referencedColumnName="ID_PAKET_SOAL")
     * })
     */
    private $idPaketSoal;

    /**
     * @var \AppBundle\Entity\TblCourse
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblCourse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_COURSE_PK", referencedColumnName="ID_COURSE_PK")
     * })
     */
    private $idCoursePk;


}

