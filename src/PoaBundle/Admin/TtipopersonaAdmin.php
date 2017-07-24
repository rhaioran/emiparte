<?php
// src/PoaBundle/Admin/TtipopersonaAdmin

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



class  TtipopersonaAdmin  extends AbstractAdmin
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
        ->add('tipopersona','text',array('label' =>'Tipo de Persona','required' => false))
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
        ->addIdentifier('tipopersona',null,array('label' =>'Tipo de Persona'))
        
        
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
        ->add('tipopersona')
       ;
    }
     // Fields to be shown on show Validate
    public function validate(ErrorElement $errorElement, $object)
        {
            $errorElement
            ->with('tipopersona')
            ->assertNotBlank()
            ->assertLength(array('min' => 4))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertEmail()
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 30))
            ->end()
            
            ;
        }
    
    
}



  

 


