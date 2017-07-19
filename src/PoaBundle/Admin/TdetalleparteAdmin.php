<?php
// src/PoaBundle/Admin/TdetalleparteAdmin

namespace PoaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Validator\Constraints as Assert;

class  TdetalleparteAdmin  extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar

    public function configure()
    {
        $this->parentAssociationMapping = 'idparte';


    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('idparte',null,array('label' =>'Codigo del Detalle del Parte','required' => true, 'placeholder' => 'Seleccione.....' ))
        ->add('idconcepto',null,array('label' =>'Lista de Conceptos','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('numero','integer',array('label' =>'Cantidad','required' => false))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
        ->add('idparte')
        ->add('idconcepto')
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('idparte',null,array('label' =>'Codigo del Detalle del Parte'))
        ->add('idconcepto',null,array('label' =>'Lista de Conceptos'))
        ->add('numero',null,array('label' =>'Cantidad'))
        
        
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
        ->add('idparte')
        ->add('idconcepto')
        ->add('numero')
       ;
    }
}



  

 


