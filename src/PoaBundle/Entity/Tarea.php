<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea
 *
 * @ORM\Table(name="Tarea", indexes={@ORM\Index(name="IDX_FD617C621F530E11", columns={"idtipoarea"}), @ORM\Index(name="IDX_FD617C623985AEE0", columns={"idlocacion"})})
 * @ORM\Entity
 */
class Tarea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idarea", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarea;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrearea", type="string", length=50, nullable=true)
     */
    private $nombrearea;

    /**
     * @var \PoaBundle\Entity\Ttiposarea
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Ttiposarea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtipoarea", referencedColumnName="idtipoarea")
     * })
     */
    private $idtipoarea;

    /**
     * @var \PoaBundle\Entity\Tlocacion
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tlocacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idlocacion", referencedColumnName="idlocacion")
     * })
     */
    private $idlocacion;



    /**
     * Get idarea
     *
     * @return integer
     */
    public function getIdarea()
    {
        return $this->idarea;
    }

    /**
     * Set nombrearea
     *
     * @param string $nombrearea
     *
     * @return Tarea
     */
    public function setNombrearea($nombrearea)
    {
        $this->nombrearea = $nombrearea;

        return $this;
    }

    /**
     * Get nombrearea
     *
     * @return string
     */
    public function getNombrearea()
    {
        return $this->nombrearea;
    }

    /**
     * Set idtipoarea
     *
     * @param \PoaBundle\Entity\Ttiposarea $idtipoarea
     *
     * @return Tarea
     */
    public function setIdtipoarea(\PoaBundle\Entity\Ttiposarea $idtipoarea = null)
    {
        $this->idtipoarea = $idtipoarea;

        return $this;
    }

    /**
     * Get idtipoarea
     *
     * @return \PoaBundle\Entity\Ttiposarea
     */
    public function getIdtipoarea()
    {
        return $this->idtipoarea;
    }

    /**
     * Set idlocacion
     *
     * @param \PoaBundle\Entity\Tlocacion $idlocacion
     *
     * @return Tarea
     */
    public function setIdlocacion(\PoaBundle\Entity\Tlocacion $idlocacion = null)
    {
        $this->idlocacion = $idlocacion;

        return $this;
    }

    /**
     * Get idlocacion
     *
     * @return \PoaBundle\Entity\Tlocacion
     */
    public function getIdlocacion()
    {
        return $this->idlocacion;
    }

    public function __toString()
    {
        return $this->nombrearea ? : '';
        //return $this->departamentogeografico ? : '';
    }
}
