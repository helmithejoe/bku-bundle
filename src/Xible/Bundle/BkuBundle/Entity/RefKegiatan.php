<?php

namespace Xible\Bundle\BkuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefKegiatan
 *
 * @ORM\Table(name="ref_kegiatan")
 * @ORM\Entity(repositoryClass="Xible\Bundle\BkuBundle\Entity\RefKegiatanRepository")
 */
class RefKegiatan
{
    /**
     * @var string
     *
     * @ORM\Column(name="kd_Keg", type="string", length=17)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $kdKeg;

    /**
     * @var string
     *
     * @ORM\Column(name="Kegiatan", type="string", length=120, nullable=true)
     */
    private $kegiatan;

    /**
     * @var string
     *
     * @ORM\Column(name="kd_Prog", type="string", length=8, nullable=true)
     */
    private $kdProg;

    /**
     * @var string
     *
     * @ORM\Column(name="Program", type="string", length=120, nullable=true)
     */
    private $program;

    /**
     * @var string
     *
     * @ORM\Column(name="kd_output", type="string", length=12, nullable=true)
     */
    private $kdOutput;

    /**
     * @var string
     *
     * @ORM\Column(name="output", type="string", length=120, nullable=true)
     */
    private $output;



    /**
     * Get kdKeg
     *
     * @return string 
     */
    public function getKdKeg()
    {
        return $this->kdKeg;
    }

    /**
     * Set kegiatan
     *
     * @param string $kegiatan
     * @return RefKegiatan
     */
    public function setKegiatan($kegiatan)
    {
        $this->kegiatan = $kegiatan;

        return $this;
    }

    /**
     * Get kegiatan
     *
     * @return string 
     */
    public function getKegiatan()
    {
        return $this->kegiatan;
    }

    /**
     * Set kdProg
     *
     * @param string $kdProg
     * @return RefKegiatan
     */
    public function setKdProg($kdProg)
    {
        $this->kdProg = $kdProg;

        return $this;
    }

    /**
     * Get kdProg
     *
     * @return string 
     */
    public function getKdProg()
    {
        return $this->kdProg;
    }

    /**
     * Set program
     *
     * @param string $program
     * @return RefKegiatan
     */
    public function setProgram($program)
    {
        $this->program = $program;

        return $this;
    }

    /**
     * Get program
     *
     * @return string 
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Set kdOutput
     *
     * @param string $kdOutput
     * @return RefKegiatan
     */
    public function setKdOutput($kdOutput)
    {
        $this->kdOutput = $kdOutput;

        return $this;
    }

    /**
     * Get kdOutput
     *
     * @return string 
     */
    public function getKdOutput()
    {
        return $this->kdOutput;
    }

    /**
     * Set output
     *
     * @param string $output
     * @return RefKegiatan
     */
    public function setOutput($output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * Get output
     *
     * @return string 
     */
    public function getOutput()
    {
        return $this->output;
    }
}
