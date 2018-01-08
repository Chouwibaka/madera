<?php

namespace MaderaDevisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaderaDevisBundle:Default:index.html.twig');
    }
}
