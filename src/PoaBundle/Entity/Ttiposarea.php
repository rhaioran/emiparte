<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ttiposarea
 *
 * @ORM\Table(name="Ttiposarea")
 * @ORM\Entity
 */
class Ttiposarea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtipoarea", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipoarea;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoarea", type="string", length=40, nullable=true)
     */
    private $tipoarea;



    /**
     * Get idtipoarea
     *
     * @return integer
     */
    public function getIdtipoarea()
    {
        return $this->idtipoarea;
    }

    /**
     * Set tipoarea
     *
     * @param string $tipoarea
     *
     * @return Ttiposarea
     */
    public function setTipoarea($tipoarea)
    {
        $this->tipoarea = $tipoarea;

        return $this;
    }

    /**
     * Get tipoarea
     *
     * @return string
     */
    public function getTipoarea()
    {
        return $this->tipoarea;
    }

    public function __toString()
    {
        return $this->tipoarea ? : '';
        //return $this->iduniacdemica;
    }
}
