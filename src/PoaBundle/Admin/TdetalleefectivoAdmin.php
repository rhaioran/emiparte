<?php
// src/PoaBundle/Admin/TdetalleefectivoAdmin

namespace PoaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;


class  TdetalleefectivoAdmin  extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('idsubarea','integer',array('label' =>'Codigo de Sub Area','required' => false))
        ->add('idtipopersona','integer',array('label' =>'Tipo de Persona','required' => false))
        ->add('idfuerza','integer',array('label' =>'Fuarza que Pertenece','required' => false))
        ->add('Efectivo','integer',array('label' =>'Nro de Efectivo','required' => false))
        ->end();
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('idsubarea',null,array('label' =>'Codigo de Sub Area'))
        ->add('idtipopersona',null,array('label' =>'Tipo de Persona'))
        ->add('idfuerza',null,array('label' =>'Fuarza que Pertenece'))
        ->add('Efectivo',null,array('label' =>'Nro de Efectivo'))
        
        
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
        ->add('idsubarea')
        ->add('idtipopersona')
        ->add('idfuerza')
        ->add('Efectivo')
       ;
    }
}



