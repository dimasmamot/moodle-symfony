<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MataKuliah
 *
 * @ORM\Table(name="mata_kuliah")
 * @ORM\Entity
 */
class MataKuliah
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_dosen", type="integer", nullable=false)
     */
    private $idDosen;

    /**
     * @var string
     *
     * @ORM\Column(name="mata_kuliah", type="string", length=255, nullable=false)
     */
    private $mataKuliah;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return int
     */
    public function getIdDosen()
    {
        return $this->idDosen;
    }

    /**
     * @param int $idDosen
     */
    public function setIdDosen($idDosen)
    {
        $this->idDosen = $idDosen;
    }

    /**
     * @return string
     */
    public function getMataKuliah()
    {
        return $this->mataKuliah;
    }

    /**
     * @param string $mataKuliah
     */
    public function setMataKuliah($mataKuliah)
    {
        $this->mataKuliah = $mataKuliah;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}

