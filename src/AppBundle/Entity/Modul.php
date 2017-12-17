<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modul
 *
 * @ORM\Table(name="modul")
 * @ORM\Entity
 */
class Modul
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_dosen", type="integer", nullable=false)
     */
    private $idDosen;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_mata_kuliah", type="integer", nullable=false)
     */
    private $idMataKuliah;

    /**
     * @var string
     *
     * @ORM\Column(name="modul", type="string", length=255, nullable=false)
     */
    private $modul;

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
     * @return int
     */
    public function getIdMataKuliah()
    {
        return $this->idMataKuliah;
    }

    /**
     * @param int $idMataKuliah
     */
    public function setIdMataKuliah($idMataKuliah)
    {
        $this->idMataKuliah = $idMataKuliah;
    }

    /**
     * @return string
     */
    public function getModul()
    {
        return $this->modul;
    }

    /**
     * @param string $modul
     */
    public function setModul($modul)
    {
        $this->modul = $modul;
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

