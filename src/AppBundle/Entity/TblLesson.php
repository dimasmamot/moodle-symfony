<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblLesson
 *
 * @ORM\Table(name="tbl_lesson", indexes={@ORM\Index(name="FK_REFERENCE_20", columns={"ID_FILE"}), @ORM\Index(name="FK_REFERENCE_25", columns={"ID_COURSE_PK"})})
 * @ORM\Entity
 */
class TblLesson
{
    /**
     * @return string
     */
    public function getNamaLesson()
    {
        return $this->namaLesson;
    }

    /**
     * @param string $namaLesson
     */
    public function setNamaLesson($namaLesson)
    {
        $this->namaLesson = $namaLesson;
    }

    /**
     * @return int
     */
    public function getIdLesson()
    {
        return $this->idLesson;
    }

    /**
     * @param int $idLesson
     */
    public function setIdLesson($idLesson)
    {
        $this->idLesson = $idLesson;
    }

    /**
     * @return TblFile
     */
    public function getIdFile()
    {
        return $this->idFile;
    }

    /**
     * @param TblFile $idFile
     */
    public function setIdFile($idFile)
    {
        $this->idFile = $idFile;
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
     * @ORM\Column(name="NAMA_LESSON", type="string", length=200, nullable=true)
     */
    private $namaLesson;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_LESSON", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLesson;

    /**
     * @var \AppBundle\Entity\TblFile
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblFile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_FILE", referencedColumnName="ID_FILE")
     * })
     */
    private $idFile;

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

