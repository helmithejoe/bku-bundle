<?php

namespace Xible\Bundle\BkuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatAnggaran
 *
 * @ORM\Table(name="dat_anggaran", indexes={@ORM\Index(name="Kode", columns={"Kode"}), @ORM\Index(name="Unit", columns={"Unit"}), @ORM\Index(name="kd_Keg", columns={"kd_Keg"}), @ORM\Index(name="ket", columns={"ket"}), @ORM\Index(name="jns", columns={"jns"})})
 * @ORM\Entity(repositoryClass="Xible\Bundle\BkuBundle\Entity\DatAnggaranRepository")
 */
class DatAnggaran
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
     * @ORM\Column(name="anggaran", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $anggaran;

    /**
     * @var string
     *
     * @ORM\Column(name="revisi1", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $revisi1;

    /**
     * @var string
     *
     * @ORM\Column(name="revisi2", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $revisi2;

    /**
     * @var string
     *
     * @ORM\Column(name="revisi3", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $revisi3;

    /**
     * @var string
     *
     * @ORM\Column(name="revisi4", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $revisi4;

    /**
     * @var string
     *
     * @ORM\Column(name="revisi5", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $revisi5;

    /**
     * @var string
     *
     * @ORM\Column(name="revisi6", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $revisi6;

    /**
     * @var string
     *
     * @ORM\Column(name="revisi7", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $revisi7;

    /**
     * @var string
     *
     * @ORM\Column(name="awal", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $awal;

    /**
     * @var string
     *
     * @ORM\Column(name="ket", type="string", length=3, nullable=true)
     */
    private $ket;

    /**
     * @var string
     *
     * @ORM\Column(name="jns", type="string", length=1, nullable=true)
     */
    private $jns;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\RefRekening
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\RefRekening")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Kode", referencedColumnName="Kode")
     * })
     */
    private $account;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\RefSatker
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\RefSatker")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Unit", referencedColumnName="id_unit")
     * })
     */
    private $unit;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\RefKegiatan
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\RefKegiatan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="kd_Keg", referencedColumnName="kd_Keg")
     * })
     */
    private $activity;



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
     * Set anggaran
     *
     * @param string $anggaran
     * @return DatAnggaran
     */
    public function setAnggaran($anggaran)
    {
        $this->anggaran = $anggaran;

        return $this;
    }

    /**
     * Get anggaran
     *
     * @return string 
     */
    public function getAnggaran()
    {
        return $this->anggaran;
    }

    /**
     * Set revisi1
     *
     * @param string $revisi1
     * @return DatAnggaran
     */
    public function setRevisi1($revisi1)
    {
        $this->revisi1 = $revisi1;

        return $this;
    }

    /**
     * Get revisi1
     *
     * @return string 
     */
    public function getRevisi1()
    {
        return $this->revisi1;
    }

    /**
     * Set revisi2
     *
     * @param string $revisi2
     * @return DatAnggaran
     */
    public function setRevisi2($revisi2)
    {
        $this->revisi2 = $revisi2;

        return $this;
    }

    /**
     * Get revisi2
     *
     * @return string 
     */
    public function getRevisi2()
    {
        return $this->revisi2;
    }

    /**
     * Set revisi3
     *
     * @param string $revisi3
     * @return DatAnggaran
     */
    public function setRevisi3($revisi3)
    {
        $this->revisi3 = $revisi3;

        return $this;
    }

    /**
     * Get revisi3
     *
     * @return string 
     */
    public function getRevisi3()
    {
        return $this->revisi3;
    }

    /**
     * Set revisi4
     *
     * @param string $revisi4
     * @return DatAnggaran
     */
    public function setRevisi4($revisi4)
    {
        $this->revisi4 = $revisi4;

        return $this;
    }

    /**
     * Get revisi4
     *
     * @return string 
     */
    public function getRevisi4()
    {
        return $this->revisi4;
    }

    /**
     * Set revisi5
     *
     * @param string $revisi5
     * @return DatAnggaran
     */
    public function setRevisi5($revisi5)
    {
        $this->revisi5 = $revisi5;

        return $this;
    }

    /**
     * Get revisi5
     *
     * @return string 
     */
    public function getRevisi5()
    {
        return $this->revisi5;
    }

    /**
     * Set revisi6
     *
     * @param string $revisi6
     * @return DatAnggaran
     */
    public function setRevisi6($revisi6)
    {
        $this->revisi6 = $revisi6;

        return $this;
    }

    /**
     * Get revisi6
     *
     * @return string 
     */
    public function getRevisi6()
    {
        return $this->revisi6;
    }

    /**
     * Set revisi7
     *
     * @param string $revisi7
     * @return DatAnggaran
     */
    public function setRevisi7($revisi7)
    {
        $this->revisi7 = $revisi7;

        return $this;
    }

    /**
     * Get revisi7
     *
     * @return string 
     */
    public function getRevisi7()
    {
        return $this->revisi7;
    }

    /**
     * Set awal
     *
     * @param string $awal
     * @return DatAnggaran
     */
    public function setAwal($awal)
    {
        $this->awal = $awal;

        return $this;
    }

    /**
     * Get awal
     *
     * @return string 
     */
    public function getAwal()
    {
        return $this->awal;
    }

    /**
     * Set ket
     *
     * @param string $ket
     * @return DatAnggaran
     */
    public function setKet($ket)
    {
        $this->ket = $ket;

        return $this;
    }

    /**
     * Get ket
     *
     * @return string 
     */
    public function getKet()
    {
        return $this->ket;
    }

    /**
     * Set jns
     *
     * @param string $jns
     * @return DatAnggaran
     */
    public function setJns($jns)
    {
        $this->jns = $jns;

        return $this;
    }

    /**
     * Get jns
     *
     * @return string 
     */
    public function getJns()
    {
        return $this->jns;
    }

    /**
     * Set account
     *
     * @param \Xible\Bundle\BkuBundle\Entity\RefRekening $account
     * @return DatAnggaran
     */
    public function setAccount(\Xible\Bundle\BkuBundle\Entity\RefRekening $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \Xible\Bundle\BkuBundle\Entity\RefRekening 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set unit
     *
     * @param \Xible\Bundle\BkuBundle\Entity\RefSatker $unit
     * @return DatAnggaran
     */
    public function setUnit(\Xible\Bundle\BkuBundle\Entity\RefSatker $unit = null)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return \Xible\Bundle\BkuBundle\Entity\RefSatker 
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set activity
     *
     * @param \Xible\Bundle\BkuBundle\Entity\RefKegiatan $activity
     * @return DatAnggaran
     */
    public function setActivity(\Xible\Bundle\BkuBundle\Entity\RefKegiatan $activity = null)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return \Xible\Bundle\BkuBundle\Entity\RefKegiatan 
     */
    public function getActivity()
    {
        return $this->activity;
    }
}
