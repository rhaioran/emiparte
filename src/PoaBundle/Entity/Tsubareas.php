<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tsubareas
 *
 * @ORM\Table(name="Tsubareas", indexes={@ORM\Index(name="IDX_8E96863B45BCCC8", columns={"idarea"})})
 * @ORM\Entity
 */
class Tsubareas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsubarea", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsubarea;

    /**
     * @var string
     *
     * @ORM\Column(name="subarea", type="string", length=50, nullable=true)
     */
    private $subarea;

    /**
     * @var \PoaBundle\Entity\Tarea
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tarea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idarea", referencedColumnName="idarea")
     * })
     */
    private $idarea;

    /**
     * @Assert\Type("AppBundle\Entity\Tarea")
     * 
     */
    public $area;




    /**
     * Get idsubarea
     *
     * @return integer
     */
    public function getIdsubarea()
    {
        return $this->idsubarea;
    }

    /**
     * Set subarea
     *
     * @param string $subarea
     *
     * @return Tsubareas
     */
    public function setSubarea($subarea)
    {
        $this->subarea = $subarea;

        return $this;
    }

    /**
     * Get subarea
     *
     * @return string
     */
    public function getSubarea()
    {
        return $this->subarea;
    }

    /**
     * Set idarea
     *
     * @param \PoaBundle\Entity\Tarea $idarea
     *
     * @return Tsubareas
     */
    public function setIdarea(\PoaBundle\Entity\Tarea $idarea = null)
    {
        $this->idarea = $idarea;

        return $this;
    }

    /**
     * Get idarea
     *
     * @return \PoaBundle\Entity\Tarea
     */
    public function getIdarea()
    {
        return $this->idarea;
    }


    /**
     * Set area
     *
     * @param string $area
     *
     * @return Tarea
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    public function __toString()
    {

        return sprintf('%s de %s', $this->subarea, $this->idarea);
        //return $this->subarea ? : '';
       // return $this->area; ? : '';
    }
}
