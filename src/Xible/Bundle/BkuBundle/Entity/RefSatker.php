<?php

namespace Xible\Bundle\BkuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefSatker
 *
 * @ORM\Table(name="ref_satker", indexes={@ORM\Index(name="Unit", columns={"id_unit"})})
 * @ORM\Entity(repositoryClass="Xible\Bundle\BkuBundle\EntityRefSatkerRepository")
 */
class RefSatker
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_unit", type="string", length=9)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="kelompok", type="string", length=100, nullable=true)
     */
    private $kelompok;

    /**
     * @var string
     *
     * @ORM\Column(name="nm_unit", type="string", length=100, nullable=false)
     */
    private $nmUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="nm_kota", type="string", length=20, nullable=true)
     */
    private $nmKota;

    /**
     * @var string
     *
     * @ORM\Column(name="skt", type="string", length=3, nullable=true)
     */
    private $skt;

    /**
     * @var string
     *
     * @ORM\Column(name="alamat", type="string", length=200, nullable=true)
     */
    private $alamat;

    /**
     * @var string
     *
     * @ORM\Column(name="id_ketr", type="string", length=1, nullable=true)
     */
    private $idKetr;

    /**
     * @var string
     *
     * @ORM\Column(name="keterangan", type="string", length=200, nullable=true)
     */
    private $keterangan;

    /**
     * @var string
     *
     * @ORM\Column(name="koderek", type="string", length=11, nullable=true)
     */
    private $koderek;



    /**
     * Get idUnit
     *
     * @return string 
     */
    public function getIdUnit()
    {
        return $this->idUnit;
    }

    /**
     * Set kelompok
     *
     * @param string $kelompok
     * @return RefSatker
     */
    public function setKelompok($kelompok)
    {
        $this->kelompok = $kelompok;

        return $this;
    }

    /**
     * Get kelompok
     *
     * @return string 
     */
    public function getKelompok()
    {
        return $this->kelompok;
    }

    /**
     * Set nmUnit
     *
     * @param string $nmUnit
     * @return RefSatker
     */
    public function setNmUnit($nmUnit)
    {
        $this->nmUnit = $nmUnit;

        return $this;
    }

    /**
     * Get nmUnit
     *
     * @return string 
     */
    public function getNmUnit()
    {
        return $this->nmUnit;
    }

    /**
     * Set nmKota
     *
     * @param string $nmKota
     * @return RefSatker
     */
    public function setNmKota($nmKota)
    {
        $this->nmKota = $nmKota;

        return $this;
    }

    /**
     * Get nmKota
     *
     * @return string 
     */
    public function getNmKota()
    {
        return $this->nmKota;
    }

    /**
     * Set skt
     *
     * @param string $skt
     * @return RefSatker
     */
    public function setSkt($skt)
    {
        $this->skt = $skt;

        return $this;
    }

    /**
     * Get skt
     *
     * @return string 
     */
    public function getSkt()
    {
        return $this->skt;
    }

    /**
     * Set alamat
     *
     * @param string $alamat
     * @return RefSatker
     */
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;

        return $this;
    }

    /**
     * Get alamat
     *
     * @return string 
     */
    public function getAlamat()
    {
        return $this->alamat;
    }

    /**
     * Set idKetr
     *
     * @param string $idKetr
     * @return RefSatker
     */
    public function setIdKetr($idKetr)
    {
        $this->idKetr = $idKetr;

        return $this;
    }

    /**
     * Get idKetr
     *
     * @return string 
     */
    public function getIdKetr()
    {
        return $this->idKetr;
    }

    /**
     * Set keterangan
     *
     * @param string $keterangan
     * @return RefSatker
     */
    public function setKeterangan($keterangan)
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    /**
     * Get keterangan
     *
     * @return string 
     */
    public function getKeterangan()
    {
        return $this->keterangan;
    }

    /**
     * Set koderek
     *
     * @param string $koderek
     * @return RefSatker
     */
    public function setKoderek($koderek)
    {
        $this->koderek = $koderek;

        return $this;
    }

    /**
     * Get koderek
     *
     * @return string 
     */
    public function getKoderek()
    {
        return $this->koderek;
    }
}
