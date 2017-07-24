<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tpartepersona
 *
 * @ORM\Table(name="Tpartepersona", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Tpartepersona", columns={"idparte", "idconcepto", "idpersona"})}, indexes={@ORM\Index(name="IDX_7826D32F4B917EB6", columns={"idparte"}), @ORM\Index(name="IDX_7826D32FCE56C0DD", columns={"idconcepto"}), @ORM\Index(name="IDX_7826D32F8EE1E4F5", columns={"idpersona"})})
 * @ORM\Entity
 */
class Tpartepersona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idepartepersona", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idepartepersona;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=50, nullable=true)
     */
    private $obs;

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
     * @var \PoaBundle\Entity\Tpersonas
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tpersonas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpersona", referencedColumnName="idpersona")
     * })
     */
    private $idpersona;



    /**
     * Get idepartepersona
     *
     * @return integer
     */
    public function getIdepartepersona()
    {
        return $this->idepartepersona;
    }

    /**
     * Set obs
     *
     * @param string $obs
     *
     * @return Tpartepersona
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Set idparte
     *
     * @param \PoaBundle\Entity\Tparte $idparte
     *
     * @return Tpartepersona
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
     * @return Tpartepersona
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
     * Set idpersona
     *
     * @param \PoaBundle\Entity\Tpersonas $idpersona
     *
     * @return Tpartepersona
     */
    public function setIdpersona(\PoaBundle\Entity\Tpersonas $idpersona = null)
    {
        $this->idpersona = $idpersona;

        return $this;
    }

    /**
     * Get idpersona
     *
     * @return \PoaBundle\Entity\Tpersonas
     */
    public function getIdpersona()
    {
        return $this->idpersona;
    }

    public function __toString()
    {
        return $this->obs ? : '';
        //return $this->departamentogeografico ? : '';
    }
}
