<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tconceptoparte
 *
 * @ORM\Table(name="Tconceptoparte")
 * @ORM\Entity
 */
class Tconceptoparte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idconcepto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=35, nullable=true)
     */
    private $concepto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="requerido", type="boolean", nullable=true)
     */
    private $requerido;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var boolean
     *
     * @ORM\Column(name="esconcepbase", type="boolean", nullable=true)
     */
    private $esconcepbase;



    /**
     * Get idconcepto
     *
     * @return integer
     */
    public function getIdconcepto()
    {
        return $this->idconcepto;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     *
     * @return Tconceptoparte
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set requerido
     *
     * @param boolean $requerido
     *
     * @return Tconceptoparte
     */
    public function setRequerido($requerido)
    {
        $this->requerido = $requerido;

        return $this;
    }

    /**
     * Get requerido
     *
     * @return boolean
     */
    public function getRequerido()
    {
        return $this->requerido;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return Tconceptoparte
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set esconcepbase
     *
     * @param boolean $esconcepbase
     *
     * @return Tconceptoparte
     */
    public function setEsconcepbase($esconcepbase)
    {
        $this->esconcepbase = $esconcepbase;

        return $this;
    }

    /**
     * Get esconcepbase
     *
     * @return boolean
     */
    public function getEsconcepbase()
    {
        return $this->esconcepbase;
    }

    public function __toString()
    {
        return $this->concepto ? : '';
        //return $this->departamentogeografico ? : '';
    }
}
