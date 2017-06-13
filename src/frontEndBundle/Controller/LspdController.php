<?php
/**
 * Created by PhpStorm.
 * User: cedric
 * Date: 13/06/2017
 * Time: 20:32
 */

namespace frontEndBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use frontEndBundle\Entity\Contact;
use frontEndBundle\Entity\Doctor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class LspdController extends Controller
{
    /**
     * @Route("/Lspd", name="homepageLspd")
     * @Security("has_role('ROLE_LSPD')")
     */
    public function indexAction()
    {
        return $this->render('frontEndBundle:Base:blankPlage.html.twig', ['title' => 'Acceuil']);
    }
}