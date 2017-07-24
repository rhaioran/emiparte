<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tmodeloparteconp
 *
 * @ORM\Table(name="Tmodeloparteconp", indexes={@ORM\Index(name="IDX_724C5A9CE56C0DD", columns={"idconcepto"}), @ORM\Index(name="IDX_724C5A9946AC1EA", columns={"idmodelo"})})
 * @ORM\Entity
 */
class Tmodeloparteconp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmodeloparteconp", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodeloparteconp;

    /**
     * @var \PoaBundle\Entity\Tconceptoparte
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tconceptoparte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idconcepto", referencedColumnName="idconcepto")
     * })
     */
    private $idconcepto;

    /**
     * @var \PoaBundle\Entity\Tmodeloparte
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tmodeloparte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmodelo", referencedColumnName="idmodelo")
     * })
     */
    private $idmodelo;



    /**
     * Get idmodeloparteconp
     *
     * @return integer
     */
    public function getIdmodeloparteconp()
    {
        return $this->idmodeloparteconp;
    }

    /**
     * Set idconcepto
     *
     * @param \PoaBundle\Entity\Tconceptoparte $idconcepto
     *
     * @return Tmodeloparteconp
     */
    public function setIdconcepto(\PoaBundle\Entity\Tconceptoparte $idconcepto = null)
    {
        $this->idconcepto = $idconcepto;

        return $this;
    }

    /**
     * Get idconcepto
     *
     * @return \PoaBundle\Entity\Tconceptoparte
     */
    public function getIdconcepto()
    {
        return $this->idconcepto;
    }

    /**
     * Set idmodelo
     *
     * @param \PoaBundle\Entity\Tmodeloparte $idmodelo
     *
     * @return Tmodeloparteconp
     */
    public function setIdmodelo(\PoaBundle\Entity\Tmodeloparte $idmodelo = null)
    {
        $this->idmodelo = $idmodelo;

        return $this;
    }

    /**
     * Get idmodelo
     *
     * @return \PoaBundle\Entity\Tmodeloparte
     */
    public function getIdmodelo()
    {
        return $this->idmodelo;
    }

     /*   public function __toString()
    {
        return $this->tipopersona ? : '';
        //return $this->departamentogeografico ? : '';
    }*/
}
