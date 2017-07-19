<?php
// src/PoaBundle/Admin/TmodeloparteAdmin

namespace PoaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Validator\Constraints as Assert;

class  TmodeloparteAdmin  extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('modelos', array('class' => 'order col-md-6'))
        ->add('modelo','text',array('label' =>'Tipos de Modelos Modelo','required' => false))
        ->add('esgenerirco',null,array('label' =>'Modelo Generico','required' => false))
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
        ->addIdentifier('modelo',null,array('label' =>'Tipos de Modelos Modelo'))
        ->add('esgenerirco',null,array('label' =>'Modelo Generico'))
        
        
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
        ->add('modelo')
        ->add('esgenerirco')
       ;
    }
}



  

 


