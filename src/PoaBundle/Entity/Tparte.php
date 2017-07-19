<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tparte
 *
 * @ORM\Table(name="Tparte", indexes={@ORM\Index(name="IDX_7D6B0EF0B4851C04", columns={"idtipoparte"})})
 * @ORM\Entity
 */
class Tparte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idparte", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparte;

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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecharegistro", type="datetime", nullable=false)
     */
    private $fecharegistro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaenvio", type="datetime", nullable=false)
     */
    private $fechaenvio;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=2, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=250, nullable=true)
     */
    private $observaciones;

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
     * Get idparte
     *
     * @return integer
     */
    public function getIdparte()
    {
        return $this->idparte;
    }

    /**
     * Set idarea
     *
     * @param integer $idarea
     *
     * @return Tparte
     */
    public function setIdarea($idarea)
    {
        $this->idarea = $idarea;

        return $this;
    }

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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Tparte
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fecharegistro
     *
     * @param \DateTime $fecharegistro
     *
     * @return Tparte
     */
    public function setFecharegistro($fecharegistro)
    {
        $this->fecharegistro = $fecharegistro;

        return $this;
    }

    /**
     * Get fecharegistro
     *
     * @return \DateTime
     */
    public function getFecharegistro()
    {
        return $this->fecharegistro;
    }

    /**
     * Set fechaenvio
     *
     * @param \DateTime $fechaenvio
     *
     * @return Tparte
     */
    public function setFechaenvio($fechaenvio)
    {
        $this->fechaenvio = $fechaenvio;

        return $this;
    }

    /**
     * Get fechaenvio
     *
     * @return \DateTime
     */
    public function getFechaenvio()
    {
        return $this->fechaenvio;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Tparte
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Tparte
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set idtipoparte
     *
     * @param \PoaBundle\Entity\Ttipoparte $idtipoparte
     *
     * @return Tparte
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
    public function __toString()
    {
        return $this->observaciones ? : '';
        //return $this->departamentogeografico ? : '';
    }
}
