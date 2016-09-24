<?php

namespace Xible\Bundle\BkuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefRekening
 *
 * @ORM\Table(name="ref_rekening")
 * @ORM\Entity(repositoryClass="Xible\Bundle\BkuBundle\Entity\RefRekeningRepository")
 */
class RefRekening
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Kode", type="string", length=9, nullable=true)
     */
    private $kode;

    /**
     * @var string
     *
     * @ORM\Column(name="Nama", type="string", length=250, nullable=true)
     */
    private $nama;

    /**
     * @var string
     *
     * @ORM\Column(name="saldoawal", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $saldoawal;



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
     * Set kode
     *
     * @param string $kode
     * @return RefRekening
     */
    public function setKode($kode)
    {
        $this->kode = $kode;

        return $this;
    }

    /**
     * Get kode
     *
     * @return string 
     */
    public function getKode()
    {
        return $this->kode;
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return RefRekening
     */
    public function setNama($nama)
    {
        $this->nama = $nama;

        return $this;
    }

    /**
     * Get nama
     *
     * @return string 
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * Set saldoawal
     *
     * @param string $saldoawal
     * @return RefRekening
     */
    public function setSaldoawal($saldoawal)
    {
        $this->saldoawal = $saldoawal;

        return $this;
    }

    /**
     * Get saldoawal
     *
     * @return string 
     */
    public function getSaldoawal()
    {
        return $this->saldoawal;
    }
}
