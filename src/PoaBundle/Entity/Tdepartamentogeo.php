<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tdepartamentogeo
 *
 * @ORM\Table(name="Tdepartamentogeo")
 * @ORM\Entity
 */
class Tdepartamentogeo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddepartamentogeo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddepartamentogeo;

    /**
     * @var string
     *
     * @ORM\Column(name="departamentogeografico", type="string", length=15, nullable=true)
     */
    private $departamentogeografico;

    /**
     * @var integer
     *
     * @ORM\Column(name="identidad", type="integer", nullable=true)
     */
    private $identidad;



    /**
     * Get iddepartamentogeo
     *
     * @return integer
     */
    public function getIddepartamentogeo()
    {
        return $this->iddepartamentogeo;
    }

    /**
     * Set departamentogeografico
     *
     * @param string $departamentogeografico
     *
     * @return Tdepartamentogeo
     */
    public function setDepartamentogeografico($departamentogeografico)
    {
        $this->departamentogeografico = $departamentogeografico;

        return $this;
    }

    /**
     * Get departamentogeografico
     *
     * @return string
     */
    public function getDepartamentogeografico()
    {
        return $this->departamentogeografico;
    }

    /**
     * Set identidad
     *
     * @param integer $identidad
     *
     * @return Tdepartamentogeo
     */
    public function setIdentidad($identidad)
    {
        $this->identidad = $identidad;

        return $this;
    }

    /**
     * Get identidad
     *
     * @return integer
     */
    public function getIdentidad()
    {
        return $this->identidad;
    }

    public function __toString()
    {
        return $this->departamentogeografico ? : '';
        //return $this->identidad;
    }
}
