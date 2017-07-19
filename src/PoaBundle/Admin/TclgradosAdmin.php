<?php
// src/PoaBundle/Admin/TclgradosAdmin

namespace PoaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Validator\Constraints as Assert;

class  TclgradosAdmin  extends AbstractAdmin
{
    
    public function configure()
    {
        $this->parentAssociationMapping = 'idfuerza';


    }
  
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('grado','text',array('label' =>'Grado','required' => true))
        ->add('idfuerza',null,array('label' =>'Fuerza','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('idgerarquia',null,array('label' =>'Gerarquia','required' => false, 'placeholder' => 'Seleccione.....' ))
       // ->add('antiguedad',Byte,array('label' =>'Antiguedad','required' => false))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
        ->add('idfuerza')
        ->add('idgerarquia')
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('grado',null,array('label' =>'Grado'))
        ->add('idfuerza',null,array('label' =>'Fuerza'))
        ->add('idgerarquia',null,array('label' =>'Gerarquia'))
      //  ->add('antiguedad')
        
        
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
        ->add('grado')
        ->add('idfuerza')
        ->add('idgerarquia')
     //   ->add('antiguedad')
       ;
    }
}



  

 


