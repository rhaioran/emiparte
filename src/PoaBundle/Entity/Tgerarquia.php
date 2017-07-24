<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tgerarquia
 *
 * @ORM\Table(name="Tgerarquia")
 * @ORM\Entity
 */
class Tgerarquia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idgerarquia", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgerarquia;

    /**
     * @var string
     *
     * @ORM\Column(name="gerarquia", type="string", length=30, nullable=true)
     */
    private $gerarquia;



    /**
     * Get idgerarquia
     *
     * @return integer
     */
    public function getIdgerarquia()
    {
        return $this->idgerarquia;
    }

    /**
     * Set gerarquia
     *
     * @param string $gerarquia
     *
     * @return Tgerarquia
     */
    public function setGerarquia($gerarquia)
    {
        $this->gerarquia = $gerarquia;

        return $this;
    }

    /**
     * Get gerarquia
     *
     * @return string
     */
    public function getGerarquia()
    {
        return $this->gerarquia;
    }

    public function __toString()
    {
        return $this->gerarquia ? : '';
        //return $this->departamentogeografico ? : '';
    }
}
