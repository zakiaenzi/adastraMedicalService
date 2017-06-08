<?php

namespace frontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/123", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('@frontEnd/Base/footer.html.twig', array('title' => 'test'));
    }
}
