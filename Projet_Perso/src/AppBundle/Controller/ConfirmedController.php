<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ConfirmedController extends Controller
{
    public function ConfirmedAction($user_id, $private_key, Request $request)
    {
        /**
         * search user with id and private_key
         */

        $repository = $this->getDoctrine()->getRepository('AppBundle:Users');
        $user = $repository->findBy(array('id' => $user_id, 'private_key' => $private_key));

        /**
         * Verif if the user exist
         */

        $valide = count($user);

        if ($valide >= 1) {
            if ($user[0]->getActive() == 'true') {

                /**
                 * if the user is already active send a message to view if register is done
                 */

                $request->getSession()->getFlashBag()->add('error', 'Compte déjà activé.');

                /**
                 * redirect the user
                 */

                $url = $this->generateUrl('app_login');
                return $this->redirect($url);
            } else {

                /**
                 * if the user is not active update '0' => '1'
                 */

                $em = $this->getDoctrine()->getManager();
                $product = $em->getRepository('AppBundle:users')->find($user_id);
                $product->setActive('1');
                $em->flush();

                /**
                 * send a message to view if register is done
                 */

                $request->getSession()->getFlashBag()->add('success', 'Compte activé avec succées.');

                /**
                 * redirect the user
                 */

                $url = $this->generateUrl('app_login');
                return $this->redirect($url);
            }
        }

        /**
         * if the user doesn't exist send a message to view if register is done
         */

        $request->getSession()->getFlashBag()->add('error', 'Erreur, le compte est innexistant.');

        /**
         * redirect the user
         */

        $url = $this->generateUrl('app_login');
        return $this->redirect($url);

    }
}