<?php

namespace Xible\Bundle\BkuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Check
 *
 * @ORM\Table(name="Check", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="checkNo", columns={"check_no"})})
 * @ORM\Entity(repositoryClass="Xible\Bundle\BkuBundle\Entity\CheckRepository")
 */
class Check
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
     * @ORM\Column(name="checkNo", type="string", nullable=false)
     */
    private $checkNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inputDate", type="date", nullable=false)
     */
    private $inputDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="checkDate", type="date", nullable=false)
     */
    private $checkDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="receiverName", type="string", nullable=false)
     */
    private $receiverName;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="createdBy", type="string", nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="updatedBy", type="string", nullable=false)
     */
    private $updatedBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Xible\Bundle\BkuBundle\Entity\Item", mappedBy="check")
     */
    private $items;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\Resource
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\Resource", inversedBy="check")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resource_id", referencedColumnName="id")
     * })
     */
    private $resource;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\Bku
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\Bku", inversedBy="checks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bku_id", referencedColumnName="id")
     * })
     */
    private $bku;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\RefKegiatan
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\RefKegiatan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activity_no", referencedColumnName="kd_Keg")
     * })
     */
    private $activity;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\RefSatker
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\RefSatker")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unit_no", referencedColumnName="id_unit")
     * })
     */
    private $unit;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\RefRekanan
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\RefRekanan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_no", referencedColumnName="kode")
     * })
     */
    private $partner;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set checkNo
     *
     * @param string $checkNo
     * @return Check
     */
    public function setCheckNo($checkNo)
    {
        $this->checkNo = $checkNo;

        return $this;
    }

    /**
     * Get checkNo
     *
     * @return string 
     */
    public function getCheckNo()
    {
        return $this->checkNo;
    }

    /**
     * Set inputDate
     *
     * @param \DateTime $inputDate
     * @return Check
     */
    public function setInputDate($inputDate)
    {
        $this->inputDate = $inputDate;

        return $this;
    }

    /**
     * Get inputDate
     *
     * @return \DateTime 
     */
    public function getInputDate()
    {
        return $this->inputDate;
    }

    /**
     * Set checkDate
     *
     * @param \DateTime $checkDate
     * @return Check
     */
    public function setCheckDate($checkDate)
    {
        $this->checkDate = $checkDate;

        return $this;
    }

    /**
     * Get checkDate
     *
     * @return \DateTime 
     */
    public function getCheckDate()
    {
        return $this->checkDate;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Check
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set receiverName
     *
     * @param string $receiverName
     * @return Check
     */
    public function setReceiverName($receiverName)
    {
        $this->receiverName = $receiverName;

        return $this;
    }

    /**
     * Get receiverName
     *
     * @return string 
     */
    public function getReceiverName()
    {
        return $this->receiverName;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return Check
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Check
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Check
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return Check
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Check
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     * @return Check
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Add items
     *
     * @param \Xible\Bundle\BkuBundle\Entity\Item $items
     * @return Check
     */
    public function addItem(\Xible\Bundle\BkuBundle\Entity\Item $items)
    {
        $this->items[] = $items;

        return $this;
    }

    /**
     * Remove items
     *
     * @param \Xible\Bundle\BkuBundle\Entity\Item $items
     */
    public function removeItem(\Xible\Bundle\BkuBundle\Entity\Item $items)
    {
        $this->items->removeElement($items);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set resource
     *
     * @param \Xible\Bundle\BkuBundle\Entity\Resource $resource
     * @return Check
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
     * Set bku
     *
     * @param \Xible\Bundle\BkuBundle\Entity\Bku $bku
     * @return Check
     */
    public function setBku(\Xible\Bundle\BkuBundle\Entity\Bku $bku = null)
    {
        $this->bku = $bku;

        return $this;
    }

    /**
     * Get bku
     *
     * @return \Xible\Bundle\BkuBundle\Entity\Bku 
     */
    public function getBku()
    {
        return $this->bku;
    }

    /**
     * Set activity
     *
     * @param \Xible\Bundle\BkuBundle\Entity\RefKegiatan $activity
     * @return Check
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
     * @return Check
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
     * @return Check
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
