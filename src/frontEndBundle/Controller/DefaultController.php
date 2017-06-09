<?php

namespace frontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('frontEndBundle:Pages:homepage.html.twig', ['title' => 'Acceuil']);
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('frontEndBundle:Pages:about.html.twig', ['title' => 'A Propos']);
    }

    /**
     * @Route("/departmentMG", name="departmentmg")
     */
    public function departmentmgAction()
    {
        return $this->render('frontEndBundle:Pages:departmentmg.html.twig', ['title' => 'Medecine Generale']);
    }

    /**
     * @Route("/departmentPsy", name="departmentpsy")
     */
    public function departmentpsyAction()
    {
        return $this->render('frontEndBundle:Pages:departementpsy.html.twig', ['title' => 'Psychologie']);
    }

    /**
     * @Route("/departementProcto", name="departementprocto")
     */
    public function departementproctoAction()
    {
        return $this->render('frontEndBundle:Pages:departementprocto.html.twig', ['title' => 'Proctologie']);
    }

    /**
     * @Route("/departementSophro", name="departementsophro")
     */
    public function departementsophroAction()
    {
        return $this->render('frontEndBundle:Pages:departementsophro.html.twig', ['title' => 'Sophrologie']);
    }

    /**
     * @Route("/departementUrgentiste", name="departementurgentiste")
     */
    public function departementurgentisteAction()
    {
        return $this->render('frontEndBundle:Pages:departementurgentiste.html.twig', ['title' => 'Urgentiste']);
    }
}
