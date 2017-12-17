<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSubjects
 *
 * @ORM\Table(name="tbl_subjects")
 * @ORM\Entity
 */
class TblSubjects
{
    /**
     * @return string
     */
    public function getSubjectName()
    {
        return $this->subjectName;
    }

    /**
     * @param string $subjectName
     */
    public function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;
    }

    /**
     * @return int
     */
    public function getSubjectId()
    {
        return $this->subjectId;
    }

    /**
     * @param int $subjectId
     */
    public function setSubjectId($subjectId)
    {
        $this->subjectId = $subjectId;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="SUBJECT_NAME", type="string", length=200, nullable=true)
     */
    private $subjectName;

    /**
     * @var integer
     *
     * @ORM\Column(name="SUBJECT_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $subjectId;


}

