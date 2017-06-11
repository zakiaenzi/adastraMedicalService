<?php
/**
 * Created by PhpStorm.
 * User: cedric
 * Date: 11/06/2017
 * Time: 01:25
 */

namespace frontEndBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('password',PasswordType::class,array(
                'label' => 'Mot de passe actuel'
            ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ChangePasswordFormType';
    }


    public function getBlockPrefix()
    {
        return 'app_user_changepassword';
    }
}