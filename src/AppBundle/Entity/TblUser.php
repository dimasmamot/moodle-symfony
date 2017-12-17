<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUser
 *
 * @ORM\Table(name="tbl_user", indexes={@ORM\Index(name="FK_REFERENCE_1", columns={"ID_ROLE_PK"})})
 * @ORM\Entity
 */
class TblUser
{
    /**
     * @return int
     */
    public function getIdUserPk()
    {
        return $this->idUserPk;
    }

    /**
     * @param int $idUserPk
     */
    public function setIdUserPk($idUserPk)
    {
        $this->idUserPk = $idUserPk;
    }

    /**
     * @return TblRole
     */
    public function getIdRolePk()
    {
        return $this->idRolePk;
    }

    /**
     * @param TblRole $idRolePk
     */
    public function setIdRolePk($idRolePk)
    {
        $this->idRolePk = $idRolePk;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USER_PK", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUserPk;

    /**
     * @var \AppBundle\Entity\TblRole
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblRole")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ROLE_PK", referencedColumnName="ID_ROLE_PK")
     * })
     */
    private $idRolePk;


}

