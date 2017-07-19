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

class  TparteAdmin  extends AbstractAdmin
{
    protected function configureSideMenu(ItemInterface $menu, $action, AdminInterface $childAdmin = null)
    {
        if (!$childAdmin && !in_array($action, array('edit'))) {
            return;
        }
        $admin = $this->isChild() ? $this->getParent() : $this;
        $id = $admin->getRequest()->get('id');
        $menu->addChild(
            'Parte',
            $admin->generateMenuUrl('edit', array('id' => $id))
        ); 
        $menu->addChild(
            'Detalle del Parte',
            $admin->generateMenuUrl('poa.admin.tparte|poa.admin.tdetalleparte.list', array('id' => $id))

        );
        $menu->addChild(
            'Personal del Parte',
            $admin->generateMenuUrl('poa.admin.tparte|poa.admin.tpartepersona.list', array('id' => $id))
        
        );
    }
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {


        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('idarea',null,array('label' =>'Lista de Areas','required' => true, 'placeholder' => 'Seleccione.....' ))
        ->add('idtipoparte',null,array('label' =>'Lista de tipos de parte','required' => true, 'placeholder' => 'Seleccione.....' ))
        ->add('fecha','date',array('label' =>'Fecha del parte','required' => true,'widget' => 'single_text' ))
        ->add('fecharegistro','date',array('label' =>'Fecha de Recoleccion del Parte','required' => false,'widget' => 'single_text' ))
        ->add('fechaenvio','date',array('label' =>'Fecha de envio del Parte','required' => false,'widget' => 'single_text' ))
   //     ->add('estado','text',array('label' =>'Estado del Parte','required' => false))
        ->add('observaciones','text',array('label' =>'Observaciones','required' => false))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
        ->add('idtipoparte')
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('idarea',null,array('label' =>'Lista de Areas'))
        ->add('idtipoparte',null,array('label' =>'Lista de tipos de parte'))
        ->add('fecha',null,array('label' =>'Fecha del parte'))
        ->add('fecharegistro',null,array('label' =>'Fecha de Recoleccion del Parte'))
        ->add('fechaenvio',null,array('label' =>'Fecha de envio del Parte'))
        //->add('estado',null,array('label' =>'Estado del Parte'))
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
        ->add('idarea')
        ->add('idtipoparte')
        ->add('fecha')
        ->add('fecharegistro')
        ->add('fechaenvio')
   //     ->add('estado')
        ->add('observaciones')
       ;
    }
}



  

 


