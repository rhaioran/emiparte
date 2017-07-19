<?php
// src/PoaBundle/Admin/TpartepersonaAdmin

namespace PoaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Validator\Constraints as Assert;

class  TpartepersonaAdmin  extends AbstractAdmin
{

    public function configure()
    {
        $this->parentAssociationMapping = 'idparte';
        


    }
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('idparte',null,array('label' =>'Parte','required' => true, 'placeholder' => 'Seleccione.....' ))
        ->add('idconcepto',null,array('label' =>'Concepto','required' => true, 'placeholder' => 'Seleccione.....' ))
        ->add('idpersona',null,array('label' =>'Persona','required' => true, 'placeholder' => 'Seleccione.....' ))
        ->add('obs','text',array('label' =>'Observacion','required' => false))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
        ->add('idparte')
        ->add('idconcepto')
        ->add('idpersona')
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('idparte',null,array('label' =>'Parte'))
        ->add('idconcepto',null,array('label' =>'Concepto'))
        ->add('idpersona',null,array('label' =>'Persona'))
        ->add('obs',null,array('label' =>'Observacion'))
        
        
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
        ->add('idpersona')
        ->add('obs')
       ;
    }
}



  

 


