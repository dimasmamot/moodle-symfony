<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblQuestion
 *
 * @ORM\Table(name="tbl_question", indexes={@ORM\Index(name="FK_REFERENCE_29", columns={"ID_USER_PK"}), @ORM\Index(name="FK_REFERENCE_31", columns={"ID_TAG"}), @ORM\Index(name="FK_REFERENCE_32", columns={"ID_QUESTION_CATEGORY"})})
 * @ORM\Entity
 */
class TblQuestion
{
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param int $view
     */
    public function setView($view)
    {
        $this->view = $view;
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
     * @return int
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * @param int $idQuestion
     */
    public function setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;
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
     * @return TblTag
     */
    public function getIdTag()
    {
        return $this->idTag;
    }

    /**
     * @param TblTag $idTag
     */
    public function setIdTag($idTag)
    {
        $this->idTag = $idTag;
    }

    /**
     * @return TblQuestionCategory
     */
    public function getIdQuestionCategory()
    {
        return $this->idQuestionCategory;
    }

    /**
     * @param TblQuestionCategory $idQuestionCategory
     */
    public function setIdQuestionCategory($idQuestionCategory)
    {
        $this->idQuestionCategory = $idQuestionCategory;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATE_AT", type="date", nullable=true)
     */
    private $createAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="VIEW", type="integer", nullable=true)
     */
    private $view;

    /**
     * @var integer
     *
     * @ORM\Column(name="VOTE", type="integer", nullable=true)
     */
    private $vote;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_QUESTION", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuestion;

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
     * @var \AppBundle\Entity\TblTag
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblTag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TAG", referencedColumnName="ID_TAG")
     * })
     */
    private $idTag;

    /**
     * @var \AppBundle\Entity\TblQuestionCategory
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblQuestionCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_QUESTION_CATEGORY", referencedColumnName="ID_QUESTION_CATEGORY")
     * })
     */
    private $idQuestionCategory;


}

