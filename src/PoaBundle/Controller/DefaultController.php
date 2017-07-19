<?php

namespace PoaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PoaBundle:Default:index.html.twig');
    }


}
