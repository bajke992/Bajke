<?php

namespace Bajke\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BookBundle:Default:index.html.twig', array('name' => $name));
    }

    public function newAction($name){
        return $this->render('BookBundle:Default:index.html.twig', array('name' => $name));
    }
}
