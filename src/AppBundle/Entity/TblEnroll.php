<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblEnroll
 *
 * @ORM\Table(name="tbl_enroll", indexes={@ORM\Index(name="FK_REFERENCE_4", columns={"ID_USER_PK"}), @ORM\Index(name="FK_REFERENCE_5", columns={"ID_COURSE_PK"})})
 * @ORM\Entity
 */
class TblEnroll
{
    /**
     * @return \DateTime
     */
    public function getEnrollDate()
    {
        return $this->enrollDate;
    }

    /**
     * @param \DateTime $enrollDate
     */
    public function setEnrollDate($enrollDate)
    {
        $this->enrollDate = $enrollDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getEnrollId()
    {
        return $this->enrollId;
    }

    /**
     * @param int $enrollId
     */
    public function setEnrollId($enrollId)
    {
        $this->enrollId = $enrollId;
    }

    /**
     * @return TblUser
     */
    public function getIdUserPk()
    {
        return $this->idUserPk;
    }

    /**
     * @param TblUser $idUserPk
     */
    public function setIdUserPk($idUserPk)
    {
        $this->idUserPk = $idUserPk;
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
     * @var \DateTime
     *
     * @ORM\Column(name="ENROLL_DATE", type="date", nullable=true)
     */
    private $enrollDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="END_DATE", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=200, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="ENROLL_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $enrollId;

    /**
     * @var \AppBundle\Entity\TblUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_USER_PK", referencedColumnName="ID_USER_PK")
     * })
     */
    private $idUserPk;

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

