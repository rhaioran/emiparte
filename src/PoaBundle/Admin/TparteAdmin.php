<?php
// src/PoaBundle/Admin/TparteAdmin

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



class  TparteAdmin  extends AbstractAdmin
{
    
    public function configure()
    {
        //$this->parentAssociationMapping = 'idsubarea';
        //$this->parentAssociationMapping = 'idarea';
        //$this->parentAssociationMapping = 'idtipoparte';
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
            $admin->generateMenuUrl('poa.admin.tparte|poa.admin.ttipoparte.list', array('id' => $id))
            );
        $menu->addChild(
            'Titulo 2',
            $admin->generateMenuUrl('poa.admin.tparte|poa.admin.tarea.list', array('id' => $id))
            );
        $menu->addChild(
            'Titulo 2',
            $admin->generateMenuUrl('poa.admin.tparte|poa.admin.tsubareas.list', array('id' => $id))
            );
    }*/
        
        
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('idsubarea',null,array('label' =>'Lista de Sub Areas','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('idarea',null,array('label' =>'Lista de Areas','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('idtipoparte',null,array('label' =>'Lista de tipos de parte','required' => true, 'placeholder' => 'Seleccione.....' ))
        ->add('fecha','date',array('label' =>'Fecha del parte','required' => false,'widget' => 'single_text' ))
        ->add('fecharegistro','date',array('label' =>'Fecha de Recoleccion del Parte','required' => false,'widget' => 'single_text' ))
        ->add('fechaenvio','date',array('label' =>'Fecha de envio del Parte','required' => false,'widget' => 'single_text' ))
        ->add('estado','text',array('label' =>'Estado del Parte','required' => false))
        ->add('observaciones','text',array('label' =>'Observaciones','required' => false))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
        ->add('idsubarea')
        ->add('idarea')
        ->add('idtipoparte')
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('idsubarea',null,array('label' =>'Lista de Sub Areas'))
        ->add('idarea',null,array('label' =>'Lista de Areas'))
        ->add('idtipoparte',null,array('label' =>'Lista de tipos de parte'))
        ->add('fecha',null,array('label' =>'Fecha del parte'))
        ->add('fecharegistro',null,array('label' =>'Fecha de Recoleccion del Parte'))
        ->add('fechaenvio',null,array('label' =>'Fecha de envio del Parte'))
        ->add('estado',null,array('label' =>'Estado del Parte'))
        ->add('observaciones',null,array('label' =>'Observaciones'))
        
        
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
        ->add('idsubarea')
        ->add('idarea')
        ->add('idtipoparte')
        ->add('fecha')
        ->add('fecharegistro')
        ->add('fechaenvio')
        ->add('estado')
        ->add('observaciones')
       ;
    }
     // Fields to be shown on show Validate
    public function validate(ErrorElement $errorElement, $object)
        {
            $errorElement
            ->with('idsubarea')
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
            ->with('idtipoparte')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('fecha')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 8))
            ->end()
            ->with('fecharegistro')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 8))
            ->end()
            ->with('fechaenvio')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 8))
            ->end()
            ->with('estado')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 2))
            ->end()
            ->with('observaciones')
            //->assertNotBlank()
            //->assertLength(array('min' => 3))
            //->assertRegex(array('pattern' => '/^[a-z]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 250))
            ->end()
            
            ;
        }
    
    
}



  

 


