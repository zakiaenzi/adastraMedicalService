<?php
/**
 * Created by PhpStorm.
 * User: cedric
 * Date: 10/06/2017
 * Time: 20:01
 */

namespace frontEndBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array('label' => 'Votre login', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg'
            )))
            ->add('password', PasswordType::class, array('label' => 'Votre mot de passe', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg'
            )))
            ->add('lastname', TextType::class, array('label' => 'Votre nom', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg'
            )))
            ->add('firstname', TextType::class, array('label' => 'Votre prenom', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg'
            )))
            ->add('email', EmailType::class, array('label' => 'Votre Email', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg'
            )))
            ->add('nationality', TextType::class, array('label' => 'Quelle est votre nationalitée', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg'
            )))
            ->add('phone', NumberType::class, array('label' => 'Quelle est votre numéro de téléphone (ig)', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg'
            )))
            ->add('address', TextType::class, array('label' => 'Quelle est votre addresse (ig)', 'attr' => array(
                'class' => 'form-control c-square c-theme input-lg'
            )))
            ->add('specialisation', ChoiceType::class, array(
                'label' => 'Quelle est votre spécialisation (ig)',
                'attr' => array(
                    'class' => 'form-control c-theme',
                ),
                'choices' => array(
                    'Psychologie' => 'Psychologie',
                    'Proctologie' => 'Proctologie',
                    'Sophrologie' => 'Sophrologie',
                    'Thanathopractie' => 'Thanathopractie'
                ),
                'attr' => array(
                    'class' => 'form-control c-square c-theme input-lg'
                )))
            ->add('formation', CKEditorType::class, array(
                'label' => 'Votre formation',
                'config' => array(
                    'uiColor' => '#ffffff',
                )))
            ->add('skills', TextType::class, array('label' => 'Quelles sont vos compétences',
                'attr' => array(
                    'class' => 'form-control c-square c-theme input-lg'
                )))
            ->add('image', FileType::class, array(
                'label' => 'Merci de donner une image',
                'attr' => array(
                    'class' => 'form-control c-square c-theme input-lg'
                )))
            ->add('captcha', 'Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType', array(
                'label' => 'Merci de remplir le Captcha',
                'captchaConfig' => 'ExampleCaptcha'
            ))
            ->add('save', SubmitType::class, array('label' => 'Envoyer',
                'attr' => array(
                    'class' => 'btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square',
                )));
    }


    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }


    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}