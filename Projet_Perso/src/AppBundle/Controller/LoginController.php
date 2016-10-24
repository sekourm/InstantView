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

class LoginController extends Controller
{
    public function LoginAction(Request $request)
    {
        /**
         * route('/') return this view login
         */

        return $this->render('Login/login.html.twig');
    }

    public function Action_LoginAction(Request $request)
    {
        /**
         * get entity for password encode
         */

        $users = new Users();

        /**
         * get all post of view
         */

        $requestAll = $request->request->all();

        /**
         * decode password
         **/

        $factory = $this->get('security.encoder_factory');
        $encoder = $factory->getEncoder($users);
        $nonEncodedPassword = $requestAll['password'];
        $salt = 'lesitelemienlemeilleur';
        $encodedPassword = $encoder->encodePassword($nonEncodedPassword, $salt);

        /**
         * search if the user exist
         */

        $repository = $this->getDoctrine()->getRepository('AppBundle:Users');
        $user = $repository->findBy(array('email' => $requestAll['email'], 'password' => $encodedPassword));

        /**
         * verif if the user exist
         */

        $valide = count($user);

        if ($valide >= 1) {

            /**
             * if the user is valide, start the session and redirect
             */

            if ($user[0]->getActive() == 'true' && $user[0]->getRole() == '0') {
                $session = $request->getSession();
                $session->start();
                $session->set('user_id', $user[0]->getId());
                $url = $this->generateUrl('app_mur');
                return $this->redirect($url);
            }

            /**
             * if the user is not active redirect with message
             */

            else {
                $request->getSession()->getFlashBag()->add("error", "Votre compte n'est pas activé.");
                $url = $this->generateUrl('app_login');
                return $this->redirect($url);
            }
        }

        /**
         * if the user doesn't exist redirect with message
         */

        $request->getSession()->getFlashBag()->add("error", "Verifiez vos identifiants.");
        $url = $this->generateUrl('app_login');
        return $this->redirect($url);
    }


    public function Disconnect_LoginAction(Request $request){

        $session = $request->getSession();
        $session->remove('user_id');
         $url = $this->generateUrl('app_login');
        return $this->redirect($url);
    }
}
