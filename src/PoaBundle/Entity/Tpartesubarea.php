<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tpartesubarea
 *
 * @ORM\Table(name="Tpartesubarea", indexes={@ORM\Index(name="IDX_27E22A57B4851C04", columns={"idtipoparte"}), @ORM\Index(name="IDX_27E22A57D1251D8D", columns={"idsubarea"})})
 * @ORM\Entity
 */
class Tpartesubarea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpartesubarea", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpartesubarea;

    /**
     * @var \PoaBundle\Entity\Ttipoparte
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Ttipoparte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtipoparte", referencedColumnName="idtipoparte")
     * })
     */
    private $idtipoparte;

    /**
     * @var \PoaBundle\Entity\Tsubareas
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tsubareas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsubarea", referencedColumnName="idsubarea")
     * })
     */
    private $idsubarea;



    /**
     * Get idpartesubarea
     *
     * @return integer
     */
    public function getIdpartesubarea()
    {
        return $this->idpartesubarea;
    }

    /**
     * Set idtipoparte
     *
     * @param \PoaBundle\Entity\Ttipoparte $idtipoparte
     *
     * @return Tpartesubarea
     */
    public function setIdtipoparte(\PoaBundle\Entity\Ttipoparte $idtipoparte = null)
    {
        $this->idtipoparte = $idtipoparte;

        return $this;
    }

    /**
     * Get idtipoparte
     *
     * @return \PoaBundle\Entity\Ttipoparte
     */
    public function getIdtipoparte()
    {
        return $this->idtipoparte;
    }

    /**
     * Set idsubarea
     *
     * @param \PoaBundle\Entity\Tsubareas $idsubarea
     *
     * @return Tpartesubarea
     */
    public function setIdsubarea(\PoaBundle\Entity\Tsubareas $idsubarea = null)
    {
        $this->idsubarea = $idsubarea;

        return $this;
    }

    /**
     * Get idsubarea
     *
     * @return \PoaBundle\Entity\Tsubareas
     */
    public function getIdsubarea()
    {
        return $this->idsubarea;
    }

    /*public function __toString()
    {
        //return null;
        //return $this->departamentogeografico ? : '';
    }*/

}
