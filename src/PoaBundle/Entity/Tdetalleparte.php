<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tdetalleparte
 *
 * @ORM\Table(name="Tdetalleparte", indexes={@ORM\Index(name="IDX_B0F72E534B917EB6", columns={"idparte"}), @ORM\Index(name="IDX_B0F72E53CE56C0DD", columns={"idconcepto"})})
 * @ORM\Entity
 */
class Tdetalleparte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddetallep", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddetallep;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var \PoaBundle\Entity\Tparte
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tparte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idparte", referencedColumnName="idparte")
     * })
     */
    private $idparte;

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
     * Get iddetallep
     *
     * @return integer
     */
    public function getIddetallep()
    {
        return $this->iddetallep;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Tdetalleparte
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set idparte
     *
     * @param \PoaBundle\Entity\Tparte $idparte
     *
     * @return Tdetalleparte
     */
    public function setIdparte(\PoaBundle\Entity\Tparte $idparte = null)
    {
        $this->idparte = $idparte;

        return $this;
    }

    /**
     * Get idparte
     *
     * @return \PoaBundle\Entity\Tparte
     */
    public function getIdparte()
    {
        return $this->idparte;
    }

    /**
     * Set idconcepto
     *
     * @param \PoaBundle\Entity\Tconceptoparte $idconcepto
     *
     * @return Tdetalleparte
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

    // public function __toString()
   // {
        //return $this->numero ? : '';
        //return $this->departamentogeografico ? : '';
  //  }
}
