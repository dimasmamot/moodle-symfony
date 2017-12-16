<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modul
 *
 * @ORM\Table(name="modul")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModulRepository")
 */
class Modul
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_dosen", type="integer")
     */
    private $idDosen;

    /**
     * @var int
     *
     * @ORM\Column(name="id_mata_kuliah", type="integer")
     */
    private $idMataKuliah;

    /**
     * @var string
     *
     * @ORM\Column(name="modul", type="string", length=255)
     */
    private $modul;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idDosen
     *
     * @param integer $idDosen
     *
     * @return Modul
     */
    public function setIdDosen($idDosen)
    {
        $this->idDosen = $idDosen;
    
        return $this;
    }

    /**
     * Get idDosen
     *
     * @return integer
     */
    public function getIdDosen()
    {
        return $this->idDosen;
    }

    /**
     * Set idMataKuliah
     *
     * @param integer $idMataKuliah
     *
     * @return Modul
     */
    public function setIdMataKuliah($idMataKuliah)
    {
        $this->idMataKuliah = $idMataKuliah;
    
        return $this;
    }

    /**
     * Get idMataKuliah
     *
     * @return integer
     */
    public function getIdMataKuliah()
    {
        return $this->idMataKuliah;
    }

    /**
     * Set modul
     *
     * @param string $modul
     *
     * @return Modul
     */
    public function setModul($modul)
    {
        $this->modul = $modul;
    
        return $this;
    }

    /**
     * Get modul
     *
     * @return string
     */
    public function getModul()
    {
        return $this->modul;
    }
}

