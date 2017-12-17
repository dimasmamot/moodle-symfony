<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblFile
 *
 * @ORM\Table(name="tbl_file", indexes={@ORM\Index(name="FK_REFERENCE_7", columns={"ID_KATEGORI_FILE"}), @ORM\Index(name="FK_REFERENCE_8", columns={"ID_USER_PK"})})
 * @ORM\Entity
 */
class TblFile
{
    /**
     * @return string
     */
    public function getNamaFile()
    {
        return $this->namaFile;
    }

    /**
     * @param string $namaFile
     */
    public function setNamaFile($namaFile)
    {
        $this->namaFile = $namaFile;
    }

    /**
     * @return string
     */
    public function getDeskripsiFile()
    {
        return $this->deskripsiFile;
    }

    /**
     * @param string $deskripsiFile
     */
    public function setDeskripsiFile($deskripsiFile)
    {
        $this->deskripsiFile = $deskripsiFile;
    }

    /**
     * @return string
     */
    public function getPathFile()
    {
        return $this->pathFile;
    }

    /**
     * @param string $pathFile
     */
    public function setPathFile($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    /**
     * @return \DateTime
     */
    public function getDateUpload()
    {
        return $this->dateUpload;
    }

    /**
     * @param \DateTime $dateUpload
     */
    public function setDateUpload($dateUpload)
    {
        $this->dateUpload = $dateUpload;
    }

    /**
     * @return int
     */
    public function getIdFile()
    {
        return $this->idFile;
    }

    /**
     * @param int $idFile
     */
    public function setIdFile($idFile)
    {
        $this->idFile = $idFile;
    }

    /**
     * @return TblKategoriFile
     */
    public function getIdKategoriFile()
    {
        return $this->idKategoriFile;
    }

    /**
     * @param TblKategoriFile $idKategoriFile
     */
    public function setIdKategoriFile($idKategoriFile)
    {
        $this->idKategoriFile = $idKategoriFile;
    }

    /**
     * @return TblUser
     */
    public function getIdUserPk()
    {
        return $this->idUserPk;
    }

    /**
     * @param TblUser $idUserPk
     */
    public function setIdUserPk($idUserPk)
    {
        $this->idUserPk = $idUserPk;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="NAMA_FILE", type="string", length=200, nullable=true)
     */
    private $namaFile;

    /**
     * @var string
     *
     * @ORM\Column(name="DESKRIPSI_FILE", type="string", length=200, nullable=true)
     */
    private $deskripsiFile;

    /**
     * @var string
     *
     * @ORM\Column(name="PATH_FILE", type="text", length=65535, nullable=true)
     */
    private $pathFile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_UPLOAD", type="date", nullable=true)
     */
    private $dateUpload;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FILE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFile;

    /**
     * @var \AppBundle\Entity\TblKategoriFile
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblKategoriFile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_KATEGORI_FILE", referencedColumnName="ID_KATEGORI_FILE")
     * })
     */
    private $idKategoriFile;

    /**
     * @var \AppBundle\Entity\TblUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TblUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_USER_PK", referencedColumnName="ID_USER_PK")
     * })
     */
    private $idUserPk;


}

