<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblRole
 *
 * @ORM\Table(name="tbl_role")
 * @ORM\Entity
 */
class TblRole
{
    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return int
     */
    public function getIdRolePk()
    {
        return $this->idRolePk;
    }

    /**
     * @param int $idRolePk
     */
    public function setIdRolePk($idRolePk)
    {
        $this->idRolePk = $idRolePk;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="ROLE", type="string", length=100, nullable=true)
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ROLE_PK", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRolePk;


}

