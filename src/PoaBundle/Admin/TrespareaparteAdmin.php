<?php
// src/PoaBundle/Admin/TrespareaparteAdmin

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



class  TrespareaparteAdmin  extends AbstractAdmin
{
    
    public function configure()
    {
        //$this->parentAssociationMapping = 'idpersona';
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
            $admin->generateMenuUrl('poa.admin.trespareaparte|poa.admin.tpersonas.list', array('id' => $id))
            );
    }*/
        
        
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('idpersona',null,array('label' =>'Responable del Parte','required' => true, 'placeholder' => 'Seleccione.....' ))
        ->add('idarea','integer',array('label' =>'Area a la que pertenece','required' => true))
        ->add('observacion','text',array('label' =>'Observaciones','required' => false))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
        ->add('idpersona')
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('idpersona',null,array('label' =>'Responable del Parte'))
        ->add('idarea',null,array('label' =>'Area a la que pertenece'))
        ->add('observacion',null,array('label' =>'Observaciones'))
        
        
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
        ->add('idpersona')
        ->add('idarea')
        ->add('observacion')
       ;
    }
     // Fields to be shown on show Validate
    public function validate(ErrorElement $errorElement, $object)
        {
            $errorElement
            ->with('idpersona')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertEmail()
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('idarea')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertEmail()
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('observacion')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertEmail()
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 250))
            ->end()
            
            ;
        }
    
    
}



  

 


