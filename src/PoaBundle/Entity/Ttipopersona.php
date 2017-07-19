<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ttipopersona
 *
 * @ORM\Table(name="Ttipopersona")
 * @ORM\Entity
 */
class Ttipopersona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtipopersona", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipopersona;

    /**
     * @var string
     *
     * @ORM\Column(name="tipopersona", type="string", length=30, nullable=true)
     */
    private $tipopersona;



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
     * Set tipopersona
     *
     * @param string $tipopersona
     *
     * @return Ttipopersona
     */
    public function setTipopersona($tipopersona)
    {
        $this->tipopersona = $tipopersona;

        return $this;
    }

    /**
     * Get tipopersona
     *
     * @return string
     */
    public function getTipopersona()
    {
        return $this->tipopersona;
    }

    public function __toString()
    {
        return $this->tipopersona ? : '';
        //return $this->departamentogeografico ? : '';
    }
}
