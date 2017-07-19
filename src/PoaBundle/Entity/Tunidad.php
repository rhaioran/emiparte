<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tunidad
 *
 * @ORM\Table(name="Tunidad", indexes={@ORM\Index(name="IDX_8D26356AA9102A8", columns={"iddepartamentogeo"})})
 * @ORM\Entity
 */
class Tunidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idunidad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idunidad;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreunidad", type="string", length=35, nullable=true)
     */
    private $nombreunidad;

    /**
     * @var \PoaBundle\Entity\Tdepartamentogeo
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tdepartamentogeo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddepartamentogeo", referencedColumnName="iddepartamentogeo")
     * })
     */
    private $iddepartamentogeo;



    /**
     * Get idunidad
     *
     * @return integer
     */
    public function getIdunidad()
    {
        return $this->idunidad;
    }

    /**
     * Set nombreunidad
     *
     * @param string $nombreunidad
     *
     * @return Tunidad
     */
    public function setNombreunidad($nombreunidad)
    {
        $this->nombreunidad = $nombreunidad;

        return $this;
    }

    /**
     * Get nombreunidad
     *
     * @return string
     */
    public function getNombreunidad()
    {
        return $this->nombreunidad;
    }

    /**
     * Set iddepartamentogeo
     *
     * @param \PoaBundle\Entity\Tdepartamentogeo $iddepartamentogeo
     *
     * @return Tunidad
     */
    public function setIddepartamentogeo(\PoaBundle\Entity\Tdepartamentogeo $iddepartamentogeo = null)
    {
        $this->iddepartamentogeo = $iddepartamentogeo;

        return $this;
    }

    /**
     * Get iddepartamentogeo
     *
     * @return \PoaBundle\Entity\Tdepartamentogeo
     */
    public function getIddepartamentogeo()
    {
        return $this->iddepartamentogeo;
    }

    public function __toString()
    {
        return $this->nombreunidad ? : '';
        return $this->departamentogeografico ? : '';
    }
}
