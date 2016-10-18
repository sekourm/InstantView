<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Session\Session;

class ArticleController extends Controller
{
    public function IndexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $test = $em->getRepository('AppBundle:Users')->findAll();

        echo '<pre>';
        var_dump($test);
        echo '</pre>';

        //return $this->render('Content/index.html.twig');
    }
}
