<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MataKuliah
 *
 * @ORM\Table(name="mata_kuliah")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MataKuliahRepository")
 */
class MataKuliah
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
     * @var string
     *
     * @ORM\Column(name="mata_kuliah", type="string", length=255)
     */
    private $mataKuliah;


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
     * @return MataKuliah
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
     * Set mataKuliah
     *
     * @param string $mataKuliah
     *
     * @return MataKuliah
     */
    public function setMataKuliah($mataKuliah)
    {
        $this->mataKuliah = $mataKuliah;
    
        return $this;
    }

    /**
     * Get mataKuliah
     *
     * @return string
     */
    public function getMataKuliah()
    {
        return $this->mataKuliah;
    }
}

