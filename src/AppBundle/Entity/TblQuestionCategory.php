<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblQuestionCategory
 *
 * @ORM\Table(name="tbl_question_category")
 * @ORM\Entity
 */
class TblQuestionCategory
{
    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    /**
     * @return int
     */
    public function getIdQuestionCategory()
    {
        return $this->idQuestionCategory;
    }

    /**
     * @param int $idQuestionCategory
     */
    public function setIdQuestionCategory($idQuestionCategory)
    {
        $this->idQuestionCategory = $idQuestionCategory;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORY_NAME", type="string", length=200, nullable=true)
     */
    private $categoryName;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_QUESTION_CATEGORY", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuestionCategory;


}

