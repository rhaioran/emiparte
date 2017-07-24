<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tdetalleefectivo
 *
 * @ORM\Table(name="Tdetalleefectivo")
 * @ORM\Entity
 */
class Tdetalleefectivo
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
     * @var integer
     *
     * @ORM\Column(name="idsubarea", type="integer", nullable=true)
     */
    private $idsubarea;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipopersona", type="integer", nullable=true)
     */
    private $idtipopersona;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfuerza", type="integer", nullable=true)
     */
    private $idfuerza;

    /**
     * @var integer
     *
     * @ORM\Column(name="Efectivo", type="integer", nullable=true)
     */
    private $efectivo;



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
     * Set idsubarea
     *
     * @param integer $idsubarea
     *
     * @return Tdetalleefectivo
     */
    public function setIdsubarea($idsubarea)
    {
        $this->idsubarea = $idsubarea;

        return $this;
    }

    /**
     * Get idsubarea
     *
     * @return integer
     */
    public function getIdsubarea()
    {
        return $this->idsubarea;
    }

    /**
     * Set idtipopersona
     *
     * @param integer $idtipopersona
     *
     * @return Tdetalleefectivo
     */
    public function setIdtipopersona($idtipopersona)
    {
        $this->idtipopersona = $idtipopersona;

        return $this;
    }

    /**
     * Get idtipopersona
     *
     * @return integer
     */
    public function getIdtipopersona()
    {
        return $this->idtipopersona;
    }

    /**
     * Set idfuerza
     *
     * @param integer $idfuerza
     *
     * @return Tdetalleefectivo
     */
    public function setIdfuerza($idfuerza)
    {
        $this->idfuerza = $idfuerza;

        return $this;
    }

    /**
     * Get idfuerza
     *
     * @return integer
     */
    public function getIdfuerza()
    {
        return $this->idfuerza;
    }

    /**
     * Set efectivo
     *
     * @param integer $efectivo
     *
     * @return Tdetalleefectivo
     */
    public function setEfectivo($efectivo)
    {
        $this->efectivo = $efectivo;

        return $this;
    }

    /**
     * Get efectivo
     *
     * @return integer
     */
    public function getEfectivo()
    {
        return $this->efectivo;
    }

    // public function __toString()
   // {
        //return $this->numero ? : '';
        //return $this->departamentogeografico ? : '';
  //  }
}
