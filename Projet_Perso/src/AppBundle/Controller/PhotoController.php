<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\Entity\Articles;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Session\Session;

class PhotoController extends Controller
{
    public function UpdateAction(Request $request)
    {
       $em = $this->getDoctrine()->getManager();

       $session = $request->getSession();
       $check_session = $session->get('user_id');
       if (!$check_session) {
           $url = $this->generateUrl('app_login');
        return $this->redirect($url);
       }


        $photos = new Photos();
        $form = $this->createFormBuilder($photos);


            ->add('profil', FileType::class, array('label' => 'Brochure (PDF file)'))
            ->getForm();
        $form->handleRequest($request);


        //return $this->render('Content/index.html.twig');


    }
}
