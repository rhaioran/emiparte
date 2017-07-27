<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tclgrados
 *
 * @ORM\Table(name="Tclgrados", indexes={@ORM\Index(name="IDX_AA0BAD248E08F44A", columns={"idfuerza"}), @ORM\Index(name="IDX_AA0BAD24C65BDD9", columns={"idgerarquia"})})
 * @ORM\Entity
 */
class Tclgrados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idgrado", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgrado;

    /**
     * @var string
     *
     * @ORM\Column(name="grado", type="string", length=40, nullable=false)
     */
    private $grado;

    /**
     * @var integer
     *
     * @ORM\Column(name="antiguedad", type="smallint", nullable=true)
     */
    private $antiguedad;

    /**
     * @var \PoaBundle\Entity\Tfuerza
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tfuerza")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idfuerza", referencedColumnName="idfuerza")
     * })
     */
    private $idfuerza;

    /**
     * @var \PoaBundle\Entity\Tgerarquia
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tgerarquia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idgerarquia", referencedColumnName="idgerarquia")
     * })
     */
    private $idgerarquia;

    /**
     * @ORM\OneToMany(targetEntity="Tfuerza", cascade={"persist","remove"}, orphanRemoval=true , mappedBy="idfuerza")
     */   
    protected $gradosf;


    /**
     * @Assert\Type("AppBundle\Entity\Tfuerza")
     * 
     */
    public $fuerza;



    /**
     * Get idgrado
     *
     * @return integer
     */
    public function getIdgrado()
    {
        return $this->idgrado;
    }

    /**
     * Set grado
     *
     * @param string $grado
     *
     * @return Tclgrados
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * Get grado
     *
     * @return string
     */
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * Set antiguedad
     *
     * @param integer $antiguedad
     *
     * @return Tclgrados
     */
    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }

    /**
     * Get antiguedad
     *
     * @return integer
     */
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    /**
     * Set idfuerza
     *
     * @param \PoaBundle\Entity\Tfuerza $idfuerza
     *
     * @return Tclgrados
     */
    public function setIdfuerza(\PoaBundle\Entity\Tfuerza $idfuerza = null)
    {
        $this->idfuerza = $idfuerza;

        return $this;
    }

    /**
     * Get idfuerza
     *
     * @return \PoaBundle\Entity\Tfuerza
     */
    public function getIdfuerza()
    {
        return $this->idfuerza;
    }

    /**
     * Set idgerarquia
     *
     * @param \PoaBundle\Entity\Tgerarquia $idgerarquia
     *
     * @return Tclgrados
     */
    public function setIdgerarquia(\PoaBundle\Entity\Tgerarquia $idgerarquia = null)
    {
        $this->idgerarquia = $idgerarquia;

        return $this;
    }

    /**
     * Get idgerarquia
     *
     * @return \PoaBundle\Entity\Tgerarquia
     */
    public function getIdgerarquia()
    {
        return $this->idgerarquia;
    }




    public function  getgradosf()
    {
        
        return $this->gradosf;
    }
 

    public function  setgradosf()
    {
        
        return $this->gradosf;
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

    /*public function fuerza($this->idfuerza)
    {
        $queryBuilder = $this->getModelManager()
        ->getEntityManager('PoaBundle\Entity\Tfuerza')
        ->createQueryBuilder();
        $queryBuilder->select('cmp.fuerza')
        ->from('PoaBundle\Entity\Tfuerza', 'cmp')
        ->where('cmp.idfuerza'=='idfuerza');
        return $this->queryBuilder;
    }*/
    
    public function __toString()
    {
        return sprintf('%s %s', $this->grado, $this->idfuerza);
        //return $this->grado ? : '';
       // return $this->antiguedad ? : '';
        //return $this->idfuerza ? : '';
    }
}
