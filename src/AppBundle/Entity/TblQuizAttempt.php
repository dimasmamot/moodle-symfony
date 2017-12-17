<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblQuizAttempt
 *
 * @ORM\Table(name="tbl_quiz_attempt", indexes={@ORM\Index(name="FK_REFERENCE_13", columns={"ID_USER_PK"}), @ORM\Index(name="FK_REFERENCE_14", columns={"ID_QUIZ"})})
 * @ORM\Entity
 */
class TblQuizAttempt
{
    /**
     * @return \DateTime
     */
    public function getDateTaken()
    {
        return $this->dateTaken;
    }

    /**
     * @param \DateTime $dateTaken
     */
    public function setDateTaken($dateTaken)
    {
        $this->dateTaken = $dateTaken;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return int
     */
    public function getCountAttempt()
    {
        return $this->countAttempt;
    }

    /**
     * @param int $countAttempt
     */
    public function setCountAttempt($countAttempt)
    {
        $this->countAttempt = $countAttempt;
    }

    /**
     * @return int
     */
    public function getIdQuestAttempt()
    {
        return $this->idQuestAttempt;
    }

    /**
     * @param int $idQuestAttempt
     */
    public function setIdQuestAttempt($idQuestAttempt)
    {
        $this->idQuestAttempt = $idQuestAttempt;
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
     * @return TblQuiz
     */
    public function getIdQuiz()
    {
        return $this->idQuiz;
    }

    /**
     * @param TblQuiz $idQuiz
     */
    public function setIdQuiz($idQuiz)
    {
        $this->idQuiz = $idQuiz;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_TAKEN", type="date", nullable=true)
     */
    private $dateTaken;

    /**
     * @var integer
     *
     * @ORM\Column(name="SCORE", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var integer
     *
     * @ORM\Column(name="COUNT_ATTEMPT", type="integer", nullable=true)
     */
    private $countAttempt;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_QUEST_ATTEMPT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuestAttempt;

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
     * @var \AppBundle\Entity\TblQuiz
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblQuiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_QUIZ", referencedColumnName="ID_QUIZ")
     * })
     */
    private $idQuiz;


}

