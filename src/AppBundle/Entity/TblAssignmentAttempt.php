<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAssignmentAttempt
 *
 * @ORM\Table(name="tbl_assignment_attempt", indexes={@ORM\Index(name="FK_REFERENCE_15", columns={"ID_USER_PK"}), @ORM\Index(name="FK_REFERENCE_16", columns={"ID_ASSIGNMENT"}), @ORM\Index(name="FK_REFERENCE_18", columns={"ID_STATUS_ASSIGNMENT"}), @ORM\Index(name="FK_REFERENCE_21", columns={"ID_FILE"})})
 * @ORM\Entity
 */
class TblAssignmentAttempt
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SUBMIT_DATE", type="date", nullable=true)
     */
    private $submitDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="TRY_SUMBIT_COUNT", type="integer", nullable=true)
     */
    private $trySumbitCount;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBMISSION_COMMENT", type="text", length=65535, nullable=true)
     */
    private $submissionComment;

    /**
     * @var integer
     *
     * @ORM\Column(name="GRADE_SUBMISSION", type="integer", nullable=true)
     */
    private $gradeSubmission;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ASSIGNMENT_ATTEMPT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAssignmentAttempt;

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
     * @var \AppBundle\Entity\TblAssignment
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblAssignment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ASSIGNMENT", referencedColumnName="ID_ASSIGNMENT")
     * })
     */
    private $idAssignment;

    /**
     * @var \AppBundle\Entity\TblStatusAssignment
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblStatusAssignment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_STATUS_ASSIGNMENT", referencedColumnName="ID_STATUS_ASSIGNMENT")
     * })
     */
    private $idStatusAssignment;

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
     * @return \DateTime
     */
    public function getSubmitDate()
    {
        return $this->submitDate;
    }

    /**
     * @param \DateTime $submitDate
     */
    public function setSubmitDate($submitDate)
    {
        $this->submitDate = $submitDate;
    }

    /**
     * @return int
     */
    public function getTrySumbitCount()
    {
        return $this->trySumbitCount;
    }

    /**
     * @param int $trySumbitCount
     */
    public function setTrySumbitCount($trySumbitCount)
    {
        $this->trySumbitCount = $trySumbitCount;
    }

    /**
     * @return string
     */
    public function getSubmissionComment()
    {
        return $this->submissionComment;
    }

    /**
     * @param string $submissionComment
     */
    public function setSubmissionComment($submissionComment)
    {
        $this->submissionComment = $submissionComment;
    }

    /**
     * @return int
     */
    public function getGradeSubmission()
    {
        return $this->gradeSubmission;
    }

    /**
     * @param int $gradeSubmission
     */
    public function setGradeSubmission($gradeSubmission)
    {
        $this->gradeSubmission = $gradeSubmission;
    }

    /**
     * @return int
     */
    public function getIdAssignmentAttempt()
    {
        return $this->idAssignmentAttempt;
    }

    /**
     * @param int $idAssignmentAttempt
     */
    public function setIdAssignmentAttempt($idAssignmentAttempt)
    {
        $this->idAssignmentAttempt = $idAssignmentAttempt;
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
     * @return TblAssignment
     */
    public function getIdAssignment()
    {
        return $this->idAssignment;
    }

    /**
     * @param TblAssignment $idAssignment
     */
    public function setIdAssignment($idAssignment)
    {
        $this->idAssignment = $idAssignment;
    }

    /**
     * @return TblStatusAssignment
     */
    public function getIdStatusAssignment()
    {
        return $this->idStatusAssignment;
    }

    /**
     * @param TblStatusAssignment $idStatusAssignment
     */
    public function setIdStatusAssignment($idStatusAssignment)
    {
        $this->idStatusAssignment = $idStatusAssignment;
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


}

