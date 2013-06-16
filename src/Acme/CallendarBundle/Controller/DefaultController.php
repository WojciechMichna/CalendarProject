<?php

namespace Acme\CallendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeCallendarBundle:Default:index.html.twig', array('name' => $name));
    }
}
