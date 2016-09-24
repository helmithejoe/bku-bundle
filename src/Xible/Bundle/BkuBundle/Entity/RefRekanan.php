<?php

namespace Xible\Bundle\BkuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefRekanan
 *
 * @ORM\Table(name="ref_rekanan")
 * @ORM\Entity(repositoryClass="Xible\Bundle\BkuBundle\Entity\RefRekananRepository")
 */
class RefRekanan
{
    /**
     * @var string
     *
     * @ORM\Column(name="kode", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $kode;

    /**
     * @var string
     *
     * @ORM\Column(name="nama", type="string", length=100, nullable=true)
     */
    private $nama;

    /**
     * @var string
     *
     * @ORM\Column(name="NPWP", type="string", length=40, nullable=true)
     */
    private $npwp;

    /**
     * @var string
     *
     * @ORM\Column(name="Alamat", type="string", length=150, nullable=true)
     */
    private $alamat;



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
     * @return RefRekanan
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
     * Set npwp
     *
     * @param string $npwp
     * @return RefRekanan
     */
    public function setNpwp($npwp)
    {
        $this->npwp = $npwp;

        return $this;
    }

    /**
     * Get npwp
     *
     * @return string 
     */
    public function getNpwp()
    {
        return $this->npwp;
    }

    /**
     * Set alamat
     *
     * @param string $alamat
     * @return RefRekanan
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
}
