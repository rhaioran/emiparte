<?php
// src/PoaBundle/Admin/TpersonasAdmin

namespace PoaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Validator\Constraints as Assert;

class  TpersonasAdmin  extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('idarea',null,array('label' =>'Lista de Areas','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('idsubarea',null,array('label' =>'Lista de Subareas','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('idtipopersona',null,array('label' =>'Lista de Tipos de Personas','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('idgrado',null,array('label' =>'Lista de Grados','required' => false, 'placeholder' => 'Seleccione.....' ))
       // ->add('idestado','integer',array('label' =>'Estado','required' => false))
        ->add('ci','text',array('label' =>'Carnet de Identidad','required' => false))
        ->add('appaterno','text',array('label' =>'Apellido Paterno','required' => false))
        ->add('apmaterno','text',array('label' =>'Apellido Materno','required' => false))
        ->add('nombre','text',array('label' =>'Nombres','required' => false))
        ->add('fecnac','date',array('label' =>'Fecha de Nacimiento','required' => false,'widget' => 'single_text' ))
        ->add('sexo','text',array('label' =>'Sexo','required' => false))
        ->add('escivil',null,array('label' =>'Estado Civil','required' => false))
        ->add('direccion','text',array('label' =>'Direccion','required' => false))
        ->add('telefono','text',array('label' =>'Telefono','required' => false))
        ->add('email','text',array('label' =>'Correo Electronico','required' => false))
        ->add('codalumno','text',array('label' =>'Codigo de Alumno','required' => false))
        ->add('observaciones','text',array('label' =>'Observaciones','required' => false))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
        ->add('idarea')
        ->add('idsubarea')
        ->add('idtipopersona')
        ->add('idgrado')
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('idarea')
        ->add('idsubarea')
        ->add('idtipopersona')
        ->add('idgrado')
       // ->add('idestado')
        ->add('ci')
        ->add('appaterno')
        ->add('apmaterno')
        ->add('nombre')
        ->add('fecnac')
        ->add('sexo')
        ->add('escivil')
        ->add('direccion')
        ->add('telefono')
        ->add('email')
        ->add('codalumno')
        ->add('observaciones')
        
        
        // add custom action links
            ->add('_action', 'Acciones',
              array('actions' => 
              array('show' => array(),
                    'edit' => array(),)))
        ;
     }
    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
        ->add('idarea')
        ->add('idsubarea')
        ->add('idtipopersona')
        ->add('idgrado')
       // ->add('idestado')
        ->add('ci')
        ->add('appaterno')
        ->add('apmaterno')
        ->add('nombre')
        ->add('fecnac')
        ->add('sexo')
        ->add('escivil')
        ->add('direccion')
        ->add('telefono')
        ->add('email')
        ->add('codalumno')
        ->add('observaciones')
       ;
    }
}



  

 


