<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trespareaparte
 *
 * @ORM\Table(name="Trespareaparte", indexes={@ORM\Index(name="IDX_F03107F98EE1E4F5", columns={"idpersona"})})
 * @ORM\Entity
 */
class Trespareaparte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idresponsable", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idresponsable;

    /**
     * @var integer
     *
     * @ORM\Column(name="idarea", type="integer", nullable=false)
     */
    private $idarea;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=250, nullable=true)
     */
    private $observacion;

    /**
     * @var \PoaBundle\Entity\Tpersonas
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tpersonas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpersona", referencedColumnName="idpersona")
     * })
     */
    private $idpersona;



    /**
     * Get idresponsable
     *
     * @return integer
     */
    public function getIdresponsable()
    {
        return $this->idresponsable;
    }

    /**
     * Set idarea
     *
     * @param integer $idarea
     *
     * @return Trespareaparte
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
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Trespareaparte
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set idpersona
     *
     * @param \PoaBundle\Entity\Tpersonas $idpersona
     *
     * @return Trespareaparte
     */
    public function setIdpersona(\PoaBundle\Entity\Tpersonas $idpersona = null)
    {
        $this->idpersona = $idpersona;

        return $this;
    }

    /**
     * Get idpersona
     *
     * @return \PoaBundle\Entity\Tpersonas
     */
    public function getIdpersona()
    {
        return $this->idpersona;
    }
    public function __toString()
    {
        return $this->observacion ? : '';
        //return $this->departamentogeografico ? : '';
    }

}
