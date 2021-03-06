<?php

namespace Xible\Bundle\BkuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefBkum
 *
 * @ORM\Table(name="ref_bkum", indexes={@ORM\Index(name="Kode", columns={"id_kas"}), @ORM\Index(name="Nama", columns={"ur_kas"})})
 * @ORM\Entity(repositoryClass="Xible\Bundle\BkuBundle\Entity\RefBkumRepository")
 */
class RefBkum
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_kas", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idKas;

    /**
     * @var string
     *
     * @ORM\Column(name="ur_kas", type="string", length=150, nullable=true)
     */
    private $urKas;



    /**
     * Get idKas
     *
     * @return string 
     */
    public function getIdKas()
    {
        return $this->idKas;
    }

    /**
     * Set urKas
     *
     * @param string $urKas
     * @return RefBkum
     */
    public function setUrKas($urKas)
    {
        $this->urKas = $urKas;

        return $this;
    }

    /**
     * Get urKas
     *
     * @return string 
     */
    public function getUrKas()
    {
        return $this->urKas;
    }
}
