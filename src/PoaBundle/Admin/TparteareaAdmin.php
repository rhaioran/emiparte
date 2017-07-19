<?php
// src/PoaBundle/Admin/TparteareaAdmin

namespace PoaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Validator\Constraints as Assert;

class  TparteareaAdmin  extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('idtipoparte',null,array('label' =>'Parte del Area','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('idarea',null,array('label' =>'Lista de Areas','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('esdiario',null,array('label' =>'Periodicidad','required' => false))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
        ->add('idtipoparte')
        ->add('idarea')
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('idtipoparte',null,array('label' =>'Tipo de Parte'))
        ->add('idarea',null,array('label' =>'Lista de Areas'))
        ->add('esdiario',null,array('label' =>'Priodicidad'))
        
        
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
        ->add('idtipoparte')
        ->add('idarea')
        ->add('esdiario')
       ;
    }
}



  

 


