<?php
// src/PoaBundle/Admin/TareaAdmin

namespace PoaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Validator\Constraints as Assert;

class  TareaAdmin  extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('idtipoarea',null,array('label' =>'Tipo de Area','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('nombrearea','text',array('label' =>'Nombre de Area','required' => false))
        ->add('idlocacion',null,array('label' =>'Ubicacion','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        
       $datagridMapper  
        
        ->add('idtipoarea')
        ->add('idlocacion')
        
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper

        ->addIdentifier('idtipoarea',null,array('label' =>'Tipo de Area'))
        ->add('nombrearea',null,array('label' =>'Nombre de Area'))
        ->add('idlocacion',null,array('label' =>'Ubicacion'))
        
        
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

        ->add('idtipoarea')
        ->add('nombrearea')
        ->add('idlocacion')
       ;
    }
}



  

 


