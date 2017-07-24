<?php

namespace PoaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tpersonas
 *
 * @ORM\Table(name="Tpersonas", indexes={@ORM\Index(name="IDX_D017BBCC45BCCC8", columns={"idarea"}), @ORM\Index(name="IDX_D017BBCCD1251D8D", columns={"idsubarea"}), @ORM\Index(name="IDX_D017BBCCFBAED7AF", columns={"idtipopersona"}), @ORM\Index(name="IDX_D017BBCC6F8A2B33", columns={"idgrado"})})
 * @ORM\Entity
 */
class Tpersonas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpersona", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpersona;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestado", type="integer", nullable=true)
     */
    private $idestado;

    /**
     * @var string
     *
     * @ORM\Column(name="ci", type="string", length=20, nullable=true)
     */
    private $ci;

    /**
     * @var string
     *
     * @ORM\Column(name="appaterno", type="string", length=25, nullable=true)
     */
    private $appaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="apmaterno", type="string", length=25, nullable=true)
     */
    private $apmaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=40, nullable=true)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecnac", type="datetime", nullable=true)
     */
    private $fecnac;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="escivil", type="boolean", nullable=true)
     */
    private $escivil;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=150, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="codalumno", type="string", length=10, nullable=true)
     */
    private $codalumno;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=250, nullable=true)
     */
    private $observaciones;

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
     * @var \PoaBundle\Entity\Tsubareas
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tsubareas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsubarea", referencedColumnName="idsubarea")
     * })
     */
    private $idsubarea;

    /**
     * @var \PoaBundle\Entity\Ttipopersona
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Ttipopersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtipopersona", referencedColumnName="idtipopersona")
     * })
     */
    private $idtipopersona;

    /**
     * @var \PoaBundle\Entity\Tclgrados
     *
     * @ORM\ManyToOne(targetEntity="PoaBundle\Entity\Tclgrados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idgrado", referencedColumnName="idgrado")
     * })
     */
    private $idgrado;



    /**
     * Get idpersona
     *
     * @return integer
     */
    public function getIdpersona()
    {
        return $this->idpersona;
    }

    /**
     * Set idestado
     *
     * @param integer $idestado
     *
     * @return Tpersonas
     */
    public function setIdestado($idestado)
    {
        $this->idestado = $idestado;

        return $this;
    }

    /**
     * Get idestado
     *
     * @return integer
     */
    public function getIdestado()
    {
        return $this->idestado;
    }

    /**
     * Set ci
     *
     * @param string $ci
     *
     * @return Tpersonas
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return string
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * Set appaterno
     *
     * @param string $appaterno
     *
     * @return Tpersonas
     */
    public function setAppaterno($appaterno)
    {
        $this->appaterno = $appaterno;

        return $this;
    }

    /**
     * Get appaterno
     *
     * @return string
     */
    public function getAppaterno()
    {
        return $this->appaterno;
    }

    /**
     * Set apmaterno
     *
     * @param string $apmaterno
     *
     * @return Tpersonas
     */
    public function setApmaterno($apmaterno)
    {
        $this->apmaterno = $apmaterno;

        return $this;
    }

    /**
     * Get apmaterno
     *
     * @return string
     */
    public function getApmaterno()
    {
        return $this->apmaterno;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Tpersonas
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fecnac
     *
     * @param \DateTime $fecnac
     *
     * @return Tpersonas
     */
    public function setFecnac($fecnac)
    {
        $this->fecnac = $fecnac;

        return $this;
    }

    /**
     * Get fecnac
     *
     * @return \DateTime
     */
    public function getFecnac()
    {
        return $this->fecnac;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Tpersonas
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set escivil
     *
     * @param boolean $escivil
     *
     * @return Tpersonas
     */
    public function setEscivil($escivil)
    {
        $this->escivil = $escivil;

        return $this;
    }

    /**
     * Get escivil
     *
     * @return boolean
     */
    public function getEscivil()
    {
        return $this->escivil;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Tpersonas
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Tpersonas
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Tpersonas
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set codalumno
     *
     * @param string $codalumno
     *
     * @return Tpersonas
     */
    public function setCodalumno($codalumno)
    {
        $this->codalumno = $codalumno;

        return $this;
    }

    /**
     * Get codalumno
     *
     * @return string
     */
    public function getCodalumno()
    {
        return $this->codalumno;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Tpersonas
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set idarea
     *
     * @param \PoaBundle\Entity\Tarea $idarea
     *
     * @return Tpersonas
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
     * Set idsubarea
     *
     * @param \PoaBundle\Entity\Tsubareas $idsubarea
     *
     * @return Tpersonas
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

    /**
     * Set idtipopersona
     *
     * @param \PoaBundle\Entity\Ttipopersona $idtipopersona
     *
     * @return Tpersonas
     */
    public function setIdtipopersona(\PoaBundle\Entity\Ttipopersona $idtipopersona = null)
    {
        $this->idtipopersona = $idtipopersona;

        return $this;
    }

    /**
     * Get idtipopersona
     *
     * @return \PoaBundle\Entity\Ttipopersona
     */
    public function getIdtipopersona()
    {
        return $this->idtipopersona;
    }

    /**
     * Set idgrado
     *
     * @param \PoaBundle\Entity\Tclgrados $idgrado
     *
     * @return Tpersonas
     */
    public function setIdgrado(\PoaBundle\Entity\Tclgrados $idgrado = null)
    {
        $this->idgrado = $idgrado;

        return $this;
    }

    /**
     * Get idgrado
     *
     * @return \PoaBundle\Entity\Tclgrados
     */
    public function getIdgrado()
    {
        return $this->idgrado;
    }

    public function __toString()
    {
        return $this->appaterno ? : '';
        //return $this->departamentogeografico ? : '';
    }
}
}
