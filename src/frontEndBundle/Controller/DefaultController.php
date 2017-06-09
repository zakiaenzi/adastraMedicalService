<?php

namespace frontEndBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use frontEndBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

    /**
     * @Route("/assurances", name="assurances")
     */
    public function assurancesAction()
    {
        return $this->render('frontEndBundle:Pages:assurances.html.twig', ['title' => 'Urgentiste']);
    }

    /**
     * @Route("/Droits_et_devoirs", name="ded")
     */
    public function dedAction()
    {
        return $this->render('frontEndBundle:Pages:ded.html.twig', ['title' => 'Urgentiste']);
    }

    /**
     * @Route("/Nous_contacter", name="contactus")
     */
    public function contactusAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
            ->add('name', TextType::class, array('label' => 'Votre nom', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg'
            )))
            ->add('email', EmailType::class, array('label' => 'Votre Email', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg'
            )))
            ->add('reason', TextType::class, array('label' => 'Pourquoi nous contactez vous', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg'
            )))
            ->add('message', TextType::class, array('label' => 'Que souhaitez vous nous dire', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg'
            )))
            ->add('save', SubmitType::class, array('label' => 'Envoyer',
                'attr' => array(
                    'class' => 'btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square'
                )))
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $contact = $form->getData();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('frontEndBundle:Pages:contact.html.twig', array(
            'form' => $form->createView(),
            'title' => 'Nous contacter'
        ));
    }
}
