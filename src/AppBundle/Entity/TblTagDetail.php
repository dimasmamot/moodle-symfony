<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblTagDetail
 *
 * @ORM\Table(name="tbl_tag_detail")
 * @ORM\Entity
 */
class TblTagDetail
{
    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
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
     * @var string
     *
     * @ORM\Column(name="TAG", type="string", length=200, nullable=true)
     */
    private $tag;

    /**
     * @var \AppBundle\Entity\TblTag
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\TblTag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TAG", referencedColumnName="ID_TAG")
     * })
     */
    private $idTag;


}

