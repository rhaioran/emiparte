<?php
// src/PoaBundle/Admin/TconceptoparteAdmin

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



class  TconceptoparteAdmin  extends AbstractAdmin
{
    
    public function configure()
    {
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
    }*/
        
        
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('concepto','text',array('label' =>'Concepto del Parte','required' => false))
        ->add('requerido',null,array('label' =>'Es Requerido para el Parte','required' => false))
        ->add('orden','integer',array('label' =>'','required' => false))
        ->add('esconcepbase',null,array('label' =>'','required' => false))
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
        ->addIdentifier('concepto',null,array('label' =>'Concepto del Parte'))
        ->add('requerido',null,array('label' =>'Es Requerido para el Parte'))
        ->add('orden',null,array('label' =>''))
        ->add('esconcepbase',null,array('label' =>''))
        
        
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
        ->add('concepto')
        ->add('requerido')
        ->add('orden')
        ->add('esconcepbase')
       ;
    }
     // Fields to be shown on show Validate
    public function validate(ErrorElement $errorElement, $object)
        {
            $errorElement
            ->with('concepto')
            ->assertNotBlank()
            ->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 35))
            ->end()
            ->with('requerido')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 1))
            ->end()
            ->with('orden')
            ->assertNotBlank()
            ->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            ->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 4))
            ->end()
            ->with('esconcepbase')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 1))
            ->end()
            
            ;
        }
    
    
}



  

 


