<?php

namespace PoaBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Sonata\AdminBundle\Controller\CRUDController ;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
      
class tArticulosAdminController extends CRUDController
{
    

    public function myPeditAction(Request $request = null)
    {
    print_r($request);
    $this->admin->checkAccess('list'); 
    
    $em = $this->getDoctrine()->getManager();
    // $em = $this->get( 'doctrine.orm.entity_manager' );
    $rsm = new ResultSetMapping();
    $query = $em->createNativeQuery( 'exec pPrueba');
    $result = $query->getResult();
    $em->flush();
    }  

  

    
}
