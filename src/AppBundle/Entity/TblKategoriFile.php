<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblKategoriFile
 *
 * @ORM\Table(name="tbl_kategori_file")
 * @ORM\Entity
 */
class TblKategoriFile
{
    /**
     * @return string
     */
    public function getNamaKategoriFile()
    {
        return $this->namaKategoriFile;
    }

    /**
     * @param string $namaKategoriFile
     */
    public function setNamaKategoriFile($namaKategoriFile)
    {
        $this->namaKategoriFile = $namaKategoriFile;
    }

    /**
     * @return int
     */
    public function getIdKategoriFile()
    {
        return $this->idKategoriFile;
    }

    /**
     * @param int $idKategoriFile
     */
    public function setIdKategoriFile($idKategoriFile)
    {
        $this->idKategoriFile = $idKategoriFile;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="NAMA_KATEGORI_FILE", type="string", length=200, nullable=true)
     */
    private $namaKategoriFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_KATEGORI_FILE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idKategoriFile;


}

