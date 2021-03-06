<?php
// src/PoaBundle/Admin/TpartepersonaAdmin

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



class  TpartepersonaAdmin  extends AbstractAdmin
{
    
    public function configure()
    {
        $this->parentAssociationMapping = 'idparte';
        //$this->parentAssociationMapping = 'idconcepto';
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
            $admin->generateMenuUrl('poa.admin.tpartepersona|poa.admin.tconceptoparte.list', array('id' => $id))
            );
        $menu->addChild(
            'Titulo 2',
            $admin->generateMenuUrl('poa.admin.tpartepersona|poa.admin.tparte.list', array('id' => $id))
            );
        $menu->addChild(
            'Titulo 2',
            $admin->generateMenuUrl('poa.admin.tpartepersona|poa.admin.tpersonas.list', array('id' => $id))
            );
    }*/
        
        
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
     // Fields to be shown on show Validate
    public function validate(ErrorElement $errorElement, $object)
        {
            $errorElement
            ->with('idparte')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('idconcepto')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('idpersona')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('obs')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 50))
            ->end()
            
            ;
        }
    
    
}



  

 


