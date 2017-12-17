<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAssignment
 *
 * @ORM\Table(name="tbl_assignment", indexes={@ORM\Index(name="FK_REFERENCE_27", columns={"ID_COURSE_PK"})})
 * @ORM\Entity
 */
class TblAssignment
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DUE_DATE", type="date", nullable=true)
     */
    private $dueDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="START_DATE", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="NAMA_ASSIGNMENT", type="string", length=200, nullable=true)
     */
    private $namaAssignment;

    /**
     * @var integer
     *
     * @ORM\Column(name="TRY_SUBMIT_COUNT", type="integer", nullable=true)
     */
    private $trySubmitCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ASSIGNMENT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAssignment;

    /**
     * @var \AppBundle\Entity\TblCourse
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblCourse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_COURSE_PK", referencedColumnName="ID_COURSE_PK")
     * })
     */
    private $idCoursePk;

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param \DateTime $dueDate
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getNamaAssignment()
    {
        return $this->namaAssignment;
    }

    /**
     * @param string $namaAssignment
     */
    public function setNamaAssignment($namaAssignment)
    {
        $this->namaAssignment = $namaAssignment;
    }

    /**
     * @return int
     */
    public function getTrySubmitCount()
    {
        return $this->trySubmitCount;
    }

    /**
     * @param int $trySubmitCount
     */
    public function setTrySubmitCount($trySubmitCount)
    {
        $this->trySubmitCount = $trySubmitCount;
    }

    /**
     * @return int
     */
    public function getIdAssignment()
    {
        return $this->idAssignment;
    }

    /**
     * @param int $idAssignment
     */
    public function setIdAssignment($idAssignment)
    {
        $this->idAssignment = $idAssignment;
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


}

