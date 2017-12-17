<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAnswer
 *
 * @ORM\Table(name="tbl_answer", indexes={@ORM\Index(name="FK_REFERENCE_30", columns={"ID_QUESTION"})})
 * @ORM\Entity
 */
class TblAnswer
{
    /**
     * @var string
     *
     * @ORM\Column(name="ANSWER", type="text", length=65535, nullable=true)
     */
    private $answer;

    /**
     * @var integer
     *
     * @ORM\Column(name="VOTE", type="integer", nullable=true)
     */
    private $vote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATE_AT", type="date", nullable=true)
     */
    private $createAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ANSWER", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnswer;

    /**
     * @var \AppBundle\Entity\TblQuestion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblQuestion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_QUESTION", referencedColumnName="ID_QUESTION")
     * })
     */
    private $idQuestion;

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    /**
     * @return int
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * @param int $vote
     */
    public function setVote($vote)
    {
        $this->vote = $vote;
    }

    /**
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * @param \DateTime $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;
    }

    /**
     * @return int
     */
    public function getIdAnswer()
    {
        return $this->idAnswer;
    }

    /**
     * @param int $idAnswer
     */
    public function setIdAnswer($idAnswer)
    {
        $this->idAnswer = $idAnswer;
    }

    /**
     * @return TblQuestion
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * @param TblQuestion $idQuestion
     */
    public function setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;
    }


}

