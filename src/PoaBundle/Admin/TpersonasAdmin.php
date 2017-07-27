<?php
// src/PoaBundle/Admin/TpersonasAdmin

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



class  TpersonasAdmin  extends AbstractAdmin
{
    
    public function configure()
    {
        //$this->parentAssociationMapping = 'idarea';
        //$this->parentAssociationMapping = 'idsubarea';
        //$this->parentAssociationMapping = 'idtipopersona';
        //$this->parentAssociationMapping = 'idgrado';
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
            $admin->generateMenuUrl('poa.admin.tpersonas|poa.admin.tclgrados.list', array('id' => $id))
            );
        $menu->addChild(
            'Titulo 2',
            $admin->generateMenuUrl('poa.admin.tpersonas|poa.admin.tarea.list', array('id' => $id))
            );
        $menu->addChild(
            'Titulo 2',
            $admin->generateMenuUrl('poa.admin.tpersonas|poa.admin.ttipopersona.list', array('id' => $id))
            );
        $menu->addChild(
            'Titulo 2',
            $admin->generateMenuUrl('poa.admin.tpersonas|poa.admin.tsubareas.list', array('id' => $id))
            );
    }*/
        
        
    // Fields to be shown on create/edit forms
    // Los campos que se muestra al crear el Form/Editar
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper        
        ->with('Titulo', array('class' => 'order col-md-6'))
        ->add('idarea',null,array('label' =>'Lista de Areas','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('idsubarea',null,array('label' =>'Lista de Subareas','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('idtipopersona',null,array('label' =>'Lista de Tipos de Personas','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('idgrado',null,array('label' =>'Lista de Grados','required' => false, 'placeholder' => 'Seleccione.....' ))
        ->add('idestado','integer',array('label' =>'Estado','required' => false))
        ->add('ci','text',array('label' =>'Carnet de Identidad','required' => false))
        ->add('appaterno','text',array('label' =>'Apellido Paterno','required' => false))
        ->add('apmaterno','text',array('label' =>'Apellido Materno','required' => false))
        ->add('nombre','text',array('label' =>'Nombres','required' => false))
        ->add('fecnac','date',array('label' =>'Fecha de Nacimiento','required' => false,'widget' => 'single_text' ))
        ->add('sexo','text',array('label' =>'Sexo','required' => false))
        ->add('escivil',null,array('label' =>'Estado Civil','required' => false))
        ->add('direccion','text',array('label' =>'Direccion','required' => false))
        ->add('telefono','text',array('label' =>'Telefono','required' => false))
        ->add('email','text',array('label' =>'Correo Electronico','required' => false))
        ->add('codalumno','text',array('label' =>'Codigo de Alumno','required' => false))
        ->add('observaciones','text',array('label' =>'Observaciones','required' => false))
        ->end();
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper      
        ->add('idarea')
        ->add('idsubarea')
        ->add('idtipopersona')
        ->add('idgrado')
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('idarea',null,array('label' =>'Lista de Areas'))
        ->add('idsubarea',null,array('label' =>'Lista de Subareas'))
        ->add('idtipopersona',null,array('label' =>'Lista de Tipos de Personas'))
        ->add('idgrado',null,array('label' =>'Lista de Grados'))
        ->add('idestado',null,array('label' =>'Estado'))
        ->add('ci',null,array('label' =>'Carnet de Identidad'))
        ->add('appaterno',null,array('label' =>'Apellido Paterno'))
        ->add('apmaterno',null,array('label' =>'Apellido Materno'))
        ->add('nombre',null,array('label' =>'Nombres'))
        ->add('fecnac',null,array('label' =>'Fecha de Nacimiento'))
        ->add('sexo',null,array('label' =>'Sexo'))
        ->add('escivil',null,array('label' =>'Estado Civil'))
        ->add('direccion',null,array('label' =>'Direccion'))
        ->add('telefono',null,array('label' =>'Telefono'))
        ->add('email',null,array('label' =>'Correo Electronico'))
        ->add('codalumno',null,array('label' =>'Codigo de Alumno'))
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
        ->add('idsubarea')
        ->add('idtipopersona')
        ->add('idgrado')
        ->add('idestado')
        ->add('ci')
        ->add('appaterno')
        ->add('apmaterno')
        ->add('nombre')
        ->add('fecnac')
        ->add('sexo')
        ->add('escivil')
        ->add('direccion')
        ->add('telefono')
        ->add('email')
        ->add('codalumno')
        ->add('observaciones')
       ;
    }
     // Fields to be shown on show Validate
    public function validate(ErrorElement $errorElement, $object)
        {
            $errorElement
            ->with('idarea')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('idsubarea')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('idtipopersona')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('idgrado')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('idestado')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 4))
            ->end()
            ->with('ci')
            ->assertNotBlank()
            ->assertLength(array('min' => 6))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 20))
            ->end()
            ->with('appaterno')
            ->assertNotBlank()
            ->assertLength(array('min' => 3))
            ->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 25))
            ->end()
            ->with('apmaterno')
            ->assertNotBlank()
            ->assertLength(array('min' => 3))
            ->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 25))
            ->end()
            ->with('nombre')
            ->assertNotBlank()
            ->assertLength(array('min' => 3))
            ->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 40))
            ->end()
            ->with('fecnac')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 8))
            ->end()
            ->with('sexo')
            ->assertNotBlank()
            ->assertLength(array('min' => 1))
            ->assertRegex(array('pattern' => '/^[mfMF]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 1))
            ->end()
            ->with('escivil')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            //->assertLength(array('max' => 1))
            ->end()
            ->with('direccion')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            ->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 150))
            ->end()
            ->with('telefono')
            //->assertNotBlank()
            ->assertLength(array('min' => 6))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            ->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 20))
            ->end()
            ->with('email')
            //->assertNotBlank()
            ->assertLength(array('min' => 4))
            ->assertEmail()
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 80))
            ->end()
            ->with('codalumno')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 10))
            ->end()
            ->with('observaciones')
            //->assertNotBlank()
            //->assertLength(array('min' => 1))
            //->assertRegex(array('pattern' => '/^[a-z áéíóúÁÉÍÓÚñÑüÜ]+$/i'))
            //->assertRegex(array('pattern' => '/^[0-9]+$/i'))
            ->assertLength(array('max' => 250))
            ->end()
            
            ;
        }
    
    
}



  

 


