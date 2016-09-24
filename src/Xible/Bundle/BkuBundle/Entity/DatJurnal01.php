<?php

namespace Xible\Bundle\BkuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatJurnal01
 *
 * @ORM\Table(name="dat_jurnal01", indexes={@ORM\Index(name="jns", columns={"Jns"}), @ORM\Index(name="nojurnal", columns={"NoJurnal"}), @ORM\Index(name="tgtrans", columns={"TgTrans"}), @ORM\Index(name="Kode", columns={"Kode"}), @ORM\Index(name="debet", columns={"debet"}), @ORM\Index(name="kredit", columns={"kredit"}), @ORM\Index(name="sts", columns={"sts"}), @ORM\Index(name="nobukti", columns={"nobukti"}), @ORM\Index(name="tgbukti", columns={"tgbukti"}), @ORM\Index(name="kegiatan", columns={"kegiatan"}), @ORM\Index(name="loket", columns={"loket"}), @ORM\Index(name="poli", columns={"poli"}), @ORM\Index(name="pasien", columns={"pasien"}), @ORM\Index(name="rekanan", columns={"rekanan"}), @ORM\Index(name="Referensi", columns={"Referensi"}), @ORM\Index(name="kd_lpb", columns={"kd_lpb"}), @ORM\Index(name="kd_lak", columns={"kd_lak"}), @ORM\Index(name="kd_akt", columns={"kd_akt"})})
 * @ORM\Entity(repositoryClass="Xible\Bundle\BkuBundle\Entity\DatJurnal01Repository")
 */
class DatJurnal01
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
     * @ORM\Column(name="Jns", type="string", length=2, nullable=false)
     */
    private $jns;

    /**
     * @var string
     *
     * @ORM\Column(name="NoJurnal", type="string", length=30, nullable=false)
     */
    private $nojurnal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TgTrans", type="date", nullable=false)
     */
    private $tgtrans;

    /**
     * @var string
     *
     * @ORM\Column(name="debet", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $debet;

    /**
     * @var string
     *
     * @ORM\Column(name="kredit", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $kredit;

    /**
     * @var string
     *
     * @ORM\Column(name="Uraian", type="string", length=250, nullable=true)
     */
    private $uraian;

    /**
     * @var string
     *
     * @ORM\Column(name="sts", type="string", length=1, nullable=true)
     */
    private $sts;

    /**
     * @var string
     *
     * @ORM\Column(name="nobukti", type="string", length=50, nullable=false)
     */
    private $nobukti;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tgbukti", type="date", nullable=false)
     */
    private $tgbukti;

    /**
     * @var string
     *
     * @ORM\Column(name="keterangan", type="string", length=250, nullable=true)
     */
    private $keterangan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tgentri", type="datetime", nullable=true)
     */
    private $tgentri;

    /**
     * @var string
     *
     * @ORM\Column(name="ket", type="string", length=1, nullable=true)
     */
    private $ket;

    /**
     * @var string
     *
     * @ORM\Column(name="Referensi", type="string", length=50, nullable=true)
     */
    private $referensi;

    /**
     * @var string
     *
     * @ORM\Column(name="loket", type="string", length=2, nullable=true)
     */
    private $loket;

    /**
     * @var string
     *
     * @ORM\Column(name="pasien", type="string", length=6, nullable=true)
     */
    private $pasien;

    /**
     * @var string
     *
     * @ORM\Column(name="jTrans", type="string", length=1, nullable=true)
     */
    private $jtrans;

    /**
     * @var string
     *
     * @ORM\Column(name="kd_lpb", type="string", length=3, nullable=true)
     */
    private $kdLpb;

    /**
     * @var string
     *
     * @ORM\Column(name="kd_lak", type="string", length=3, nullable=true)
     */
    private $kdLak;

    /**
     * @var string
     *
     * @ORM\Column(name="kd_akt", type="string", length=4, nullable=true)
     */
    private $kdAkt;

    /**
     * @var string
     *
     * @ORM\Column(name="opr", type="string", length=30, nullable=true)
     */
    private $opr;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\Resource
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\Resource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dana", referencedColumnName="resource_no")
     * })
     */
    private $resource;

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
     * @var \Xible\Bundle\BkuBundle\Entity\RefKegiatan
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\RefKegiatan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="kegiatan", referencedColumnName="kd_Keg")
     * })
     */
    private $activity;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\RefSatker
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\RefSatker")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="poli", referencedColumnName="id_unit")
     * })
     */
    private $unit;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\RefRekanan
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\RefRekanan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rekanan", referencedColumnName="kode")
     * })
     */
    private $partner;



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
     * Set jns
     *
     * @param string $jns
     * @return DatJurnal01
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
     * Set nojurnal
     *
     * @param string $nojurnal
     * @return DatJurnal01
     */
    public function setNojurnal($nojurnal)
    {
        $this->nojurnal = $nojurnal;

        return $this;
    }

    /**
     * Get nojurnal
     *
     * @return string 
     */
    public function getNojurnal()
    {
        return $this->nojurnal;
    }

    /**
     * Set tgtrans
     *
     * @param \DateTime $tgtrans
     * @return DatJurnal01
     */
    public function setTgtrans($tgtrans)
    {
        $this->tgtrans = $tgtrans;

        return $this;
    }

    /**
     * Get tgtrans
     *
     * @return \DateTime 
     */
    public function getTgtrans()
    {
        return $this->tgtrans;
    }

    /**
     * Set debet
     *
     * @param string $debet
     * @return DatJurnal01
     */
    public function setDebet($debet)
    {
        $this->debet = $debet;

        return $this;
    }

    /**
     * Get debet
     *
     * @return string 
     */
    public function getDebet()
    {
        return $this->debet;
    }

    /**
     * Set kredit
     *
     * @param string $kredit
     * @return DatJurnal01
     */
    public function setKredit($kredit)
    {
        $this->kredit = $kredit;

        return $this;
    }

    /**
     * Get kredit
     *
     * @return string 
     */
    public function getKredit()
    {
        return $this->kredit;
    }

    /**
     * Set uraian
     *
     * @param string $uraian
     * @return DatJurnal01
     */
    public function setUraian($uraian)
    {
        $this->uraian = $uraian;

        return $this;
    }

    /**
     * Get uraian
     *
     * @return string 
     */
    public function getUraian()
    {
        return $this->uraian;
    }

    /**
     * Set sts
     *
     * @param string $sts
     * @return DatJurnal01
     */
    public function setSts($sts)
    {
        $this->sts = $sts;

        return $this;
    }

    /**
     * Get sts
     *
     * @return string 
     */
    public function getSts()
    {
        return $this->sts;
    }

    /**
     * Set nobukti
     *
     * @param string $nobukti
     * @return DatJurnal01
     */
    public function setNobukti($nobukti)
    {
        $this->nobukti = $nobukti;

        return $this;
    }

    /**
     * Get nobukti
     *
     * @return string 
     */
    public function getNobukti()
    {
        return $this->nobukti;
    }

    /**
     * Set tgbukti
     *
     * @param \DateTime $tgbukti
     * @return DatJurnal01
     */
    public function setTgbukti($tgbukti)
    {
        $this->tgbukti = $tgbukti;

        return $this;
    }

    /**
     * Get tgbukti
     *
     * @return \DateTime 
     */
    public function getTgbukti()
    {
        return $this->tgbukti;
    }

    /**
     * Set keterangan
     *
     * @param string $keterangan
     * @return DatJurnal01
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
     * Set tgentri
     *
     * @param \DateTime $tgentri
     * @return DatJurnal01
     */
    public function setTgentri($tgentri)
    {
        $this->tgentri = $tgentri;

        return $this;
    }

    /**
     * Get tgentri
     *
     * @return \DateTime 
     */
    public function getTgentri()
    {
        return $this->tgentri;
    }

    /**
     * Set ket
     *
     * @param string $ket
     * @return DatJurnal01
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
     * Set referensi
     *
     * @param string $referensi
     * @return DatJurnal01
     */
    public function setReferensi($referensi)
    {
        $this->referensi = $referensi;

        return $this;
    }

    /**
     * Get referensi
     *
     * @return string 
     */
    public function getReferensi()
    {
        return $this->referensi;
    }

    /**
     * Set loket
     *
     * @param string $loket
     * @return DatJurnal01
     */
    public function setLoket($loket)
    {
        $this->loket = $loket;

        return $this;
    }

    /**
     * Get loket
     *
     * @return string 
     */
    public function getLoket()
    {
        return $this->loket;
    }

    /**
     * Set pasien
     *
     * @param string $pasien
     * @return DatJurnal01
     */
    public function setPasien($pasien)
    {
        $this->pasien = $pasien;

        return $this;
    }

    /**
     * Get pasien
     *
     * @return string 
     */
    public function getPasien()
    {
        return $this->pasien;
    }

    /**
     * Set jtrans
     *
     * @param string $jtrans
     * @return DatJurnal01
     */
    public function setJtrans($jtrans)
    {
        $this->jtrans = $jtrans;

        return $this;
    }

    /**
     * Get jtrans
     *
     * @return string 
     */
    public function getJtrans()
    {
        return $this->jtrans;
    }

    /**
     * Set kdLpb
     *
     * @param string $kdLpb
     * @return DatJurnal01
     */
    public function setKdLpb($kdLpb)
    {
        $this->kdLpb = $kdLpb;

        return $this;
    }

    /**
     * Get kdLpb
     *
     * @return string 
     */
    public function getKdLpb()
    {
        return $this->kdLpb;
    }

    /**
     * Set kdLak
     *
     * @param string $kdLak
     * @return DatJurnal01
     */
    public function setKdLak($kdLak)
    {
        $this->kdLak = $kdLak;

        return $this;
    }

    /**
     * Get kdLak
     *
     * @return string 
     */
    public function getKdLak()
    {
        return $this->kdLak;
    }

    /**
     * Set kdAkt
     *
     * @param string $kdAkt
     * @return DatJurnal01
     */
    public function setKdAkt($kdAkt)
    {
        $this->kdAkt = $kdAkt;

        return $this;
    }

    /**
     * Get kdAkt
     *
     * @return string 
     */
    public function getKdAkt()
    {
        return $this->kdAkt;
    }

    /**
     * Set opr
     *
     * @param string $opr
     * @return DatJurnal01
     */
    public function setOpr($opr)
    {
        $this->opr = $opr;

        return $this;
    }

    /**
     * Get opr
     *
     * @return string 
     */
    public function getOpr()
    {
        return $this->opr;
    }

    /**
     * Set resource
     *
     * @param \Xible\Bundle\BkuBundle\Entity\Resource $resource
     * @return DatJurnal01
     */
    public function setResource(\Xible\Bundle\BkuBundle\Entity\Resource $resource = null)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource
     *
     * @return \Xible\Bundle\BkuBundle\Entity\Resource 
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set account
     *
     * @param \Xible\Bundle\BkuBundle\Entity\RefRekening $account
     * @return DatJurnal01
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
     * Set activity
     *
     * @param \Xible\Bundle\BkuBundle\Entity\RefKegiatan $activity
     * @return DatJurnal01
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

    /**
     * Set unit
     *
     * @param \Xible\Bundle\BkuBundle\Entity\RefSatker $unit
     * @return DatJurnal01
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
     * Set partner
     *
     * @param \Xible\Bundle\BkuBundle\Entity\RefRekanan $partner
     * @return DatJurnal01
     */
    public function setPartner(\Xible\Bundle\BkuBundle\Entity\RefRekanan $partner = null)
    {
        $this->partner = $partner;

        return $this;
    }

    /**
     * Get partner
     *
     * @return \Xible\Bundle\BkuBundle\Entity\RefRekanan 
     */
    public function getPartner()
    {
        return $this->partner;
    }
}
