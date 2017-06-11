<?php
/**
 * Created by PhpStorm.
 * User: cedric
 * Date: 11/06/2017
 * Time: 21:37
 */

namespace frontEndBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use frontEndBundle\Entity\Contact;
use frontEndBundle\Entity\Doctor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MedecinController extends Controller
{
    /**
     * @Route("/Medecin", name="homepageMedecin")
     */
    public function indexAction()
    {
        return $this->render('frontEndBundle:Base:blankPlage.html.twig', ['title' => 'Acceuil']);
    }
}