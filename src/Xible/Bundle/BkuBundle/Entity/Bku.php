<?php

namespace Xible\Bundle\BkuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bku
 *
 * @ORM\Table(name="Bku", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="checkNo", columns={"check_no"}), @ORM\Index(name="journalNo", columns={"check_no"})})
 * @ORM\Entity(repositoryClass="Xible\Bundle\BkuBundle\Entity\BkuRepository")
 */
class Bku
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
     * @var \DateTime
     *
     * @ORM\Column(name="inputDate", type="date", nullable=false)
     */
    private $inputDate;

    /**
     * @var string
     *
     * @ORM\Column(name="journalNo", type="string", nullable=false)
     */
    private $journalNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="journalDate", type="date", nullable=false)
     */
    private $journalDate;

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
     * @ORM\OneToMany(targetEntity="Xible\Bundle\BkuBundle\Entity\Check", mappedBy="bku")
     */
    private $checks;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\Resource
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\Resource", inversedBy="bku")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resource_id", referencedColumnName="id")
     * })
     */
    private $resource;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\RefBkum
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\RefBkum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cash_id", referencedColumnName="id_kas")
     * })
     */
    private $cash;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->checks = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set inputDate
     *
     * @param \DateTime $inputDate
     * @return Bku
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
     * Set journalNo
     *
     * @param string $journalNo
     * @return Bku
     */
    public function setJournalNo($journalNo)
    {
        $this->journalNo = $journalNo;

        return $this;
    }

    /**
     * Get journalNo
     *
     * @return string 
     */
    public function getJournalNo()
    {
        return $this->journalNo;
    }

    /**
     * Set journalDate
     *
     * @param \DateTime $journalDate
     * @return Bku
     */
    public function setJournalDate($journalDate)
    {
        $this->journalDate = $journalDate;

        return $this;
    }

    /**
     * Get journalDate
     *
     * @return \DateTime 
     */
    public function getJournalDate()
    {
        return $this->journalDate;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return Bku
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
     * @return Bku
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
     * @return Bku
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
     * @return Bku
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
     * @return Bku
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
     * @return Bku
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
     * Add checks
     *
     * @param \Xible\Bundle\BkuBundle\Entity\Check $checks
     * @return Bku
     */
    public function addCheck(\Xible\Bundle\BkuBundle\Entity\Check $checks)
    {
        $this->checks[] = $checks;

        return $this;
    }

    /**
     * Remove checks
     *
     * @param \Xible\Bundle\BkuBundle\Entity\Check $checks
     */
    public function removeCheck(\Xible\Bundle\BkuBundle\Entity\Check $checks)
    {
        $this->checks->removeElement($checks);
    }

    /**
     * Get checks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChecks()
    {
        return $this->checks;
    }

    /**
     * Set resource
     *
     * @param \Xible\Bundle\BkuBundle\Entity\Resource $resource
     * @return Bku
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
     * Set cash
     *
     * @param \Xible\Bundle\BkuBundle\Entity\RefBkum $cash
     * @return Bku
     */
    public function setCash(\Xible\Bundle\BkuBundle\Entity\RefBkum $cash = null)
    {
        $this->cash = $cash;

        return $this;
    }

    /**
     * Get cash
     *
     * @return \Xible\Bundle\BkuBundle\Entity\RefBkum 
     */
    public function getCash()
    {
        return $this->cash;
    }
}
