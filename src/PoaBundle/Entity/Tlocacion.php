<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tlocacion
 *
 * @ORM\Table(name="Tlocacion", indexes={@ORM\Index(name="IDX_3FC53D50975B7D83", columns={"idunidad"})})
 * @ORM\Entity
 */
class Tlocacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idlocacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlocacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrelocacion", type="string", length=40, nullable=true)
     */
    private $nombrelocacion;

    /**
     * @var \PoaBundle\Entity\Tunidad
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tunidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idunidad", referencedColumnName="idunidad")
     * })
     */
    private $idunidad;



    /**
     * Get idlocacion
     *
     * @return integer
     */
    public function getIdlocacion()
    {
        return $this->idlocacion;
    }

    /**
     * Set nombrelocacion
     *
     * @param string $nombrelocacion
     *
     * @return Tlocacion
     */
    public function setNombrelocacion($nombrelocacion)
    {
        $this->nombrelocacion = $nombrelocacion;

        return $this;
    }

    /**
     * Get nombrelocacion
     *
     * @return string
     */
    public function getNombrelocacion()
    {
        return $this->nombrelocacion;
    }

    /**
     * Set idunidad
     *
     * @param \PoaBundle\Entity\Tunidad $idunidad
     *
     * @return Tlocacion
     */
    public function setIdunidad(\PoaBundle\Entity\Tunidad $idunidad = null)
    {
        $this->idunidad = $idunidad;

        return $this;
    }

    /**
     * Get idunidad
     *
     * @return \PoaBundle\Entity\Tunidad
     */
    public function getIdunidad()
    {
        return $this->idunidad;
    }

    public function __toString()
    {
        return $this->nombrelocacion ? : '';
       // return $this->area; ? : '';
    }
}
