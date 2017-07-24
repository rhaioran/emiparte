<?php
// src/PoaBundle/Admin/TtipoparteAdmin

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



class  TtipoparteAdmin  extends AbstractAdmin
{
    
    public function configure()
    {
        //$this->parentAssociationMapping = 'idmodelo';
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
            $admin->generateMenuUrl('poa.admin.ttipoparte|poa.admin.tmodeloparte.list', array('id' => $id))
            );
    }*/
        
        
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('tipoparte','text',array('label' =>'Tipos de Parte','required' => false))
        ->add('decumplimiento',null,array('label' =>'Cumplimiento','required' => false))
        ->add('hora','date',array('label' =>'Hora para el Parte','required' => false,'widget' => 'single_text' ))
        ->add('idmodelo',null,array('label' =>'Codigo del Modelo','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('horamaxenvio','text',array('label' =>'Hora Maxima de Envio','required' => false))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
        ->add('idmodelo')
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('tipoparte',null,array('label' =>'Tipos de Parte'))
        ->add('decumplimiento',null,array('label' =>'Cumplimiento'))
        ->add('hora',null,array('label' =>'Hora para el Parte'))
        ->add('idmodelo',null,array('label' =>'Codigo del Modelo'))
        ->add('horamaxenvio',null,array('label' =>'Hora Maxima de Envio'))
        
        
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
        ->add('tipoparte')
        ->add('decumplimiento')
        ->add('hora')
        ->add('idmodelo')
        ->add('horamaxenvio')
       ;
    }
     // Fields to be shown on show Validate
    public function validate(ErrorElement $errorElement, $object)
        {
            $errorElement
            ->with('tipoparte')
            ->assertNotBlank()
            ->assertLength(array('min' => 3))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertEmail()
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 30))
            ->end()
            ->with('decumplimiento')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertEmail()
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 1))
            ->end()
            ->with('hora')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertEmail()
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 8))
            ->end()
            ->with('idmodelo')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertEmail()
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('horamaxenvio')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertEmail()
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 10))
            ->end()
            
            ;
        }
    
    
}



  

 


