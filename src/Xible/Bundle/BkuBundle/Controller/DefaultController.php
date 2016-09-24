<?php

namespace Xible\Bundle\BkuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('XibleBkuBundle:Default:index.html.twig', array('name' => $name));
    }
}
