<?php

namespace Xible\Bundle\BkuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="Item", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="account", columns={"account_no"})})
 * @ORM\Entity(repositoryClass="Xible\Bundle\BkuBundle\Entity\ItemRepository")
 */
class Item
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
     * @ORM\Column(name="description", type="string", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=16, scale=2, nullable=false)
     */
    private $amount;

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
     * @var \Xible\Bundle\BkuBundle\Entity\Check
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\Check", inversedBy="items")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="check_id", referencedColumnName="id")
     * })
     */
    private $check;

    /**
     * @var \Xible\Bundle\BkuBundle\Entity\RefRekening
     *
     * @ORM\ManyToOne(targetEntity="Xible\Bundle\BkuBundle\Entity\RefRekening")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_no", referencedColumnName="Kode")
     * })
     */
    private $account;



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
     * Set description
     *
     * @param string $description
     * @return Item
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
     * Set amount
     *
     * @param string $amount
     * @return Item
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * Set check
     *
     * @param \Xible\Bundle\BkuBundle\Entity\Check $check
     * @return Item
     */
    public function setCheck(\Xible\Bundle\BkuBundle\Entity\Check $check = null)
    {
        $this->check = $check;

        return $this;
    }

    /**
     * Get check
     *
     * @return \Xible\Bundle\BkuBundle\Entity\Check 
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * Set account
     *
     * @param \Xible\Bundle\BkuBundle\Entity\RefRekening $account
     * @return Item
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
}
