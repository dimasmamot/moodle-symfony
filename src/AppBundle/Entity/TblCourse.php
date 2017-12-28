<?php

namespace AppBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;

/**
 * TblCourse
 *
 * @ORM\Table(name="tbl_course", indexes={@ORM\Index(name="FK_REFERENCE_22", columns={"ID_USER_PK"}), @ORM\Index(name="FK_REFERENCE_24", columns={"SUBJECT_ID"})})
 * @ORM\Entity
 */
class TblCourse
{
    /**
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param \DateTime $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return string
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * @param string $courseName
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
    }

    /**
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param \DateTime $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @param \DateTime $dateEnd
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * @return string
     */
    public function getCourseDesc()
    {
        return $this->courseDesc;
    }

    /**
     * @param string $courseDesc
     */
    public function setCourseDesc($courseDesc)
    {
        $this->courseDesc = $courseDesc;
    }

    /**
     * @return int
     */
    public function getIdCoursePk()
    {
        return $this->idCoursePk;
    }

    /**
     * @param int $idCoursePk
     */
    public function setIdCoursePk($idCoursePk)
    {
        $this->idCoursePk = $idCoursePk;
    }

    /**
     * @return \Application\Sonata\UserBundle\Entity\User
     */
    public function getIdUserPk()
    {
        return $this->idUserPk;
    }

    /**
     * @param \Application\Sonata\UserBundle\Entity\User $id
     */
    public function setIdUserPk($idUserPk)
    {
        $this->idUserPk = $idUserPk;
    }

    /**
     * @return TblSubjects
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param TblSubjects $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATED", type="date", nullable=true)
     */
    private $dateCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="COURSE_NAME", type="string", length=200, nullable=true)
     */
    private $courseName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_START", type="date", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_END", type="date", nullable=true)
     */
    private $dateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="COURSE_DESC", type="text", length=65535, nullable=true)
     */
    private $courseDesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COURSE_PK", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCoursePk;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_USER_PK", referencedColumnName="id")
     * })
     */
    private $idUserPk;

    /**
     * @var \AppBundle\Entity\TblSubjects
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblSubjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SUBJECT_ID", referencedColumnName="SUBJECT_ID")
     * })
     */
    private $subject;


}

