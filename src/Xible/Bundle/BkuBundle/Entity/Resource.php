<?php

namespace Xible\Bundle\BkuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table(name="Resource", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="resourceNo", columns={"resource_no"})})
 * @ORM\Entity(repositoryClass="Xible\Bundle\BkuBundle\Entity\ResourceRepository")
 */
class Resource
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
     * @ORM\Column(name="resourceNo", type="string", nullable=false)
     */
    private $resourceNo;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=false)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Xible\Bundle\BkuBundle\Entity\Check", mappedBy="resource")
     */
    private $checks;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Xible\Bundle\BkuBundle\Entity\Bku", mappedBy="resource")
     */
    private $bkus;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->checks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bkus = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set resourceNo
     *
     * @param string $resourceNo
     * @return Resource
     */
    public function setResourceNo($resourceNo)
    {
        $this->resourceNo = $resourceNo;

        return $this;
    }

    /**
     * Get resourceNo
     *
     * @return string 
     */
    public function getResourceNo()
    {
        return $this->resourceNo;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Resource
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
     * Add checks
     *
     * @param \Xible\Bundle\BkuBundle\Entity\Check $checks
     * @return Resource
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
     * Add bkus
     *
     * @param \Xible\Bundle\BkuBundle\Entity\Bku $bkus
     * @return Resource
     */
    public function addBkus(\Xible\Bundle\BkuBundle\Entity\Bku $bkus)
    {
        $this->bkus[] = $bkus;

        return $this;
    }

    /**
     * Remove bkus
     *
     * @param \Xible\Bundle\BkuBundle\Entity\Bku $bkus
     */
    public function removeBkus(\Xible\Bundle\BkuBundle\Entity\Bku $bkus)
    {
        $this->bkus->removeElement($bkus);
    }

    /**
     * Get bkus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBkus()
    {
        return $this->bkus;
    }
}
