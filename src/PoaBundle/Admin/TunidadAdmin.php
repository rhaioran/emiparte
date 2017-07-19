<?php
// src/PoaBundle/Admin/TunidadAdmin

namespace PoaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Validator\Constraints as Assert;

class  TunidadAdmin  extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Unidad', array('class' => 'order col-md-6'))
        ->add('nombreunidad','text',array('label' =>'Nombre de la Unidad','required' => false))
        ->add('iddepartamentogeo',null,array('label' =>'Lista de Departamento Geografico','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
        ->add('iddepartamentogeo')
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('nombreunidad',null,array('label' =>'Nombre de la Unidad'))
        ->add('iddepartamentogeo',null,array('label' =>'Lista de Departamento Geografico'))
        
        
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
        ->add('nombreunidad')
        ->add('iddepartamentogeo')
       ;
    }
}



  

 


