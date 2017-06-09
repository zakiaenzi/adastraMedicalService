<?php

namespace backEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/123", name="123")
     */
    public function indexAction()
    {
        return $this->render('frontEndBundle:Base:base.html.twig');
    }
}
