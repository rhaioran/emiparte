<?php
// src/PoaBundle/Admin/TparteareaAdmin

namespace PoaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Validator\Constraints as Assert;
use Knp\Menu\ItemInterface;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\CoreBundle\Validator\ErrorElement;



class  TparteareaAdmin  extends AbstractAdmin
{
    
    public function configure()
    {
        //$this->parentAssociationMapping = 'idtipoparte';
        //$this->parentAssociationMapping = 'idarea';
    }
  

  /*  protected function configureSideMenu(ItemInterface $menu, $action, AdminInterface $childAdmin = null)
    {
        if (!$childAdmin && !in_array($action, array('edit'))) {
            return;
        }
        $admin = $this->isChild() ? $this->getParent() : $this;
        $id = $admin->getRequest()->get('id');
        $menu->addChild(
            'Titulo',
            $admin->generateMenuUrl('edit', array('id' => $id))
                     
        ); 
        $menu->addChild(
            'Titulo 2',
            $admin->generateMenuUrl('poa.admin.tpartearea|poa.admin.tarea.list', array('id' => $id))
            );
        $menu->addChild(
            'Titulo 2',
            $admin->generateMenuUrl('poa.admin.tpartearea|poa.admin.ttipoparte.list', array('id' => $id))
            );
    }*/
        
        
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
        ->addIdentifier('idtipoparte',null,array('label' =>'Parte del Area'))
        ->add('idarea',null,array('label' =>'Lista de Areas'))
        ->add('esdiario',null,array('label' =>'Periodicidad'))
        
        
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
     // Fields to be shown on show Validate
    public function validate(ErrorElement $errorElement, $object)
        {
            $errorElement
            ->with('idtipoparte')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('idarea')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('esdiario')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 1))
            ->end()
            
            ;
        }
    
    
}



  

 


