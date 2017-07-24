<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ttipoparte
 *
 * @ORM\Table(name="Ttipoparte", indexes={@ORM\Index(name="IDX_7FE2EF1B946AC1EA", columns={"idmodelo"})})
 * @ORM\Entity
 */
class Ttipoparte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtipoparte", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipoparte;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoparte", type="string", length=30, nullable=true)
     */
    private $tipoparte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="decumplimiento", type="boolean", nullable=true)
     */
    private $decumplimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="datetime", nullable=true)
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="horamaxenvio", type="string", length=10, nullable=true)
     */
    private $horamaxenvio;

    /**
     * @var \PoaBundle\Entity\Tmodeloparte
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tmodeloparte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmodelo", referencedColumnName="idmodelo")
     * })
     */
    private $idmodelo;



    /**
     * Get idtipoparte
     *
     * @return integer
     */
    public function getIdtipoparte()
    {
        return $this->idtipoparte;
    }

    /**
     * Set tipoparte
     *
     * @param string $tipoparte
     *
     * @return Ttipoparte
     */
    public function setTipoparte($tipoparte)
    {
        $this->tipoparte = $tipoparte;

        return $this;
    }

    /**
     * Get tipoparte
     *
     * @return string
     */
    public function getTipoparte()
    {
        return $this->tipoparte;
    }

    /**
     * Set decumplimiento
     *
     * @param boolean $decumplimiento
     *
     * @return Ttipoparte
     */
    public function setDecumplimiento($decumplimiento)
    {
        $this->decumplimiento = $decumplimiento;

        return $this;
    }

    /**
     * Get decumplimiento
     *
     * @return boolean
     */
    public function getDecumplimiento()
    {
        return $this->decumplimiento;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return Ttipoparte
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set horamaxenvio
     *
     * @param string $horamaxenvio
     *
     * @return Ttipoparte
     */
    public function setHoramaxenvio($horamaxenvio)
    {
        $this->horamaxenvio = $horamaxenvio;

        return $this;
    }

    /**
     * Get horamaxenvio
     *
     * @return string
     */
    public function getHoramaxenvio()
    {
        return $this->horamaxenvio;
    }

    /**
     * Set idmodelo
     *
     * @param \PoaBundle\Entity\Tmodeloparte $idmodelo
     *
     * @return Ttipoparte
     */
    public function setIdmodelo(\PoaBundle\Entity\Tmodeloparte $idmodelo = null)
    {
        $this->idmodelo = $idmodelo;

        return $this;
    }

    /**
     * Get idmodelo
     *
     * @return \PoaBundle\Entity\Tmodeloparte
     */
    public function getIdmodelo()
    {
        return $this->idmodelo;
    }

    public function __toString()
    {
        return $this->tipoparte ? : '';
       // return $this->area; ? : '';
    }
}
