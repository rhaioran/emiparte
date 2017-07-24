<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tpartearea
 *
 * @ORM\Table(name="Tpartearea", indexes={@ORM\Index(name="IDX_F3D1B928B4851C04", columns={"idtipoparte"}), @ORM\Index(name="IDX_F3D1B92845BCCC8", columns={"idarea"})})
 * @ORM\Entity
 */
class Tpartearea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpartearea", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpartearea;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esdiario", type="boolean", nullable=true)
     */
    private $esdiario;

    /**
     * @var \PoaBundle\Entity\Ttipoparte
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Ttipoparte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtipoparte", referencedColumnName="idtipoparte")
     * })
     */
    private $idtipoparte;

    /**
     * @var \PoaBundle\Entity\Tarea
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tarea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idarea", referencedColumnName="idarea")
     * })
     */
    private $idarea;



    /**
     * Get idpartearea
     *
     * @return integer
     */
    public function getIdpartearea()
    {
        return $this->idpartearea;
    }

    /**
     * Set esdiario
     *
     * @param boolean $esdiario
     *
     * @return Tpartearea
     */
    public function setEsdiario($esdiario)
    {
        $this->esdiario = $esdiario;

        return $this;
    }

    /**
     * Get esdiario
     *
     * @return boolean
     */
    public function getEsdiario()
    {
        return $this->esdiario;
    }

    /**
     * Set idtipoparte
     *
     * @param \PoaBundle\Entity\Ttipoparte $idtipoparte
     *
     * @return Tpartearea
     */
    public function setIdtipoparte(\PoaBundle\Entity\Ttipoparte $idtipoparte = null)
    {
        $this->idtipoparte = $idtipoparte;

        return $this;
    }

    /**
     * Get idtipoparte
     *
     * @return \PoaBundle\Entity\Ttipoparte
     */
    public function getIdtipoparte()
    {
        return $this->idtipoparte;
    }

    /**
     * Set idarea
     *
     * @param \PoaBundle\Entity\Tarea $idarea
     *
     * @return Tpartearea
     */
    public function setIdarea(\PoaBundle\Entity\Tarea $idarea = null)
    {
        $this->idarea = $idarea;

        return $this;
    }

    /**
     * Get idarea
     *
     * @return \PoaBundle\Entity\Tarea
     */
    public function getIdarea()
    {
        return $this->idarea;
    }

    /*public function __toString()
    {
        //return $this->esdiario ? : '';
        //return $this->departamentogeografico ? : '';
    }*/
}
}
