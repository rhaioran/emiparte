<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tfuerza
 *
 * @ORM\Table(name="Tfuerza")
 * @ORM\Entity
 */
class Tfuerza
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfuerza", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfuerza;

    /**
     * @var string
     *
     * @ORM\Column(name="Fuerza", type="string", length=20, nullable=true)
     */
    private $fuerza;



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
     * Set fuerza
     *
     * @param string $fuerza
     *
     * @return Tfuerza
     */
    public function setFuerza($fuerza)
    {
        $this->fuerza = $fuerza;

        return $this;
    }

    /**
     * Get fuerza
     *
     * @return string
     */
    public function getFuerza()
    {
        return $this->fuerza;
    }

    public function __toString()
    {
        return $this->fuerza ? : '';
    //    return $this->departamentogeografico ? : '';
    }
}
