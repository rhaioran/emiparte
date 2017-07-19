<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tmodeloparte
 *
 * @ORM\Table(name="Tmodeloparte")
 * @ORM\Entity
 */
class Tmodeloparte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmodelo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodelo;

    /**
     * @var string
     *
     * @ORM\Column(name="Modelo", type="string", length=25, nullable=true)
     */
    private $modelo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Esgenerirco", type="boolean", nullable=true)
     */
    private $esgenerirco;



    /**
     * Get idmodelo
     *
     * @return integer
     */
    public function getIdmodelo()
    {
        return $this->idmodelo;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return Tmodeloparte
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set esgenerirco
     *
     * @param boolean $esgenerirco
     *
     * @return Tmodeloparte
     */
    public function setEsgenerirco($esgenerirco)
    {
        $this->esgenerirco = $esgenerirco;

        return $this;
    }

    /**
     * Get esgenerirco
     *
     * @return boolean
     */
    public function getEsgenerirco()
    {
        return $this->esgenerirco;
    }

    public function __toString()
    {
        return $this->modelo ? : '';
        //return $this->departamentogeografico ? : '';
    }
}
