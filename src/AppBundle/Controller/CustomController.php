<?php
/**
 * Created by PhpStorm.
 * User: cedric
 * Date: 27/07/2017
 * Time: 21:36
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CustomController extends Controller
{
    protected function render($view, array $parameters = array(), Response $response = null)
    {
        $departments = $this->getDoctrine()->getRepository('frontEndBundle:Department')->findAll();
        $parameters['departments'] = $departments;
        return parent::render($view, $parameters, $response);
    }

}