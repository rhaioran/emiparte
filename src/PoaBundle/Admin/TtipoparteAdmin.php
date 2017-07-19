<?php
// src/PoaBundle/Admin/TtipoparteAdmin

namespace PoaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Validator\Constraints as Assert;

class  TtipoparteAdmin  extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('tipoparte','text',array('label' =>'Tipos de Parte','required' => false))
        ->add('decumplimiento',null,array('label' =>'Cumplimiento','required' => false))
        ->add('hora','date',array('label' =>'Hora para el Parte','required' => false,'widget' => 'single_text' ))
        ->add('idmodelo',null,array('label' =>'Codigo del Modelo','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('horamaxenvio','text',array('label' =>'Hora Maxima de Envio','required' => false))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
        ->add('idmodelo')
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('tipoparte',null,array('label' =>'Tipos de Parte'))
        ->add('decumplimiento',null,array('label' =>'Cumplimiento'))
        ->add('hora',null,array('label' =>'Hora para el Parte'))
        ->add('idmodelo',null,array('label' =>'Codigo del Modelo'))
        ->add('horamaxenvio',null,array('label' =>'Hora Maxima de Envio'))
        
        
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
        ->add('tipoparte')
        ->add('decumplimiento')
        ->add('hora')
        ->add('idmodelo')
        ->add('horamaxenvio')
       ;
    }
}



  

 


