<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblTag
 *
 * @ORM\Table(name="tbl_tag")
 * @ORM\Entity
 */
class TblTag
{
    /**
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * @param string $tagName
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
    }

    /**
     * @return int
     */
    public function getIdTag()
    {
        return $this->idTag;
    }

    /**
     * @param int $idTag
     */
    public function setIdTag($idTag)
    {
        $this->idTag = $idTag;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="TAG_NAME", type="string", length=200, nullable=true)
     */
    private $tagName;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TAG", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTag;


}

