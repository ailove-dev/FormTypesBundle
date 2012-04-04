<?php

namespace Ailove\FormTypesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('AiloveFormTypesBundle:Default:index.html.twig', array('name' => $name));
    }
}
