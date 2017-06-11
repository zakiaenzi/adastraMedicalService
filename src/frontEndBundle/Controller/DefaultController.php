<?php

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
        return $this->render('frontEndBundle:Pages:assurances.html.twig', ['title' => 'Assurances']);
    }

    /**
     * @Route("/Droits_et_devoirs", name="ded")
     */
    public function dedAction()
    {
        return $this->render('frontEndBundle:Pages:ded.html.twig', ['title' => 'Droits et Devoirs']);
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
            ->add('message', TextareaType::class, array('label' => 'Que souhaitez vous nous dire', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg',
                'style' => 'height:250px;'
            )))
            ->add('captcha', 'Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType', array(
                'label' => 'Merci de remplir le Captcha',
                'captchaConfig' => 'ExampleCaptcha'
            ))
            ->add('save', SubmitType::class, array('label' => 'Envoyer',
                'attr' => array(
                    'class' => 'btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square',
                )))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            $message = new \Swift_Message('LSMS - Merci de nous avoir contacté');
            $message
                ->setFrom('contact@cedricdalat.fr')
                ->setTo($contact->getEmail())
                ->setBody(
                    $this->renderView(
                        'frontEndBundle:Email:contact.html.twig',
                        array(
                            'name' => $contact->getName(),
                            'title' => 'Merci de nous avoir contacté'
                        )
                    ),
                    'text/html'
                );
            return $this->redirectToRoute('homepage');
        }
        return $this->render('frontEndBundle:Pages:contact.html.twig', array(
            'form' => $form->createView(),
            'title' => 'Nous contacter'
        ));
    }

    /**
     * @Route("/Medecin/{username}", name="medecin")
     */
    public function medecinAction(Request $request, $username)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository("frontEndBundle:Doctor");
        $doctor = $repository->findOneBy(['username' => $username]);
        $title = ucfirst($username);
        return $this->render('frontEndBundle:Pages:medecin.html.twig', [
            'title' => $title,
            'firstname' => $doctor->getFirstname(),
            'lastname' => $doctor->getLastname(),
            'phone' => $doctor->getPhone(),
            'address' => $doctor->getAddress(),
            'specialty' => $doctor->getSpecialisation(),
            'skills' => $doctor->getSkills(),
            'nationality' => $doctor->getNationality(),
        ]);
    }

}
