<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Invitations;
use AppBundle\Entity\Users;
use AppBundle\Entity\Articles;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\PropertyAccess\PropertyAccess;

class ProfileController extends Controller
{
    public function ShowAction(Request $request)
    {
        /*
         * create an array for get all invitation of users
         */

        $invitation = [];

        /*
         * defined accesor for get specific value in query
         */

        $accessor = PropertyAccess::createPropertyAccessor();

        /*
         * get the id of users in session
         */

        $user_id = $this->get('session')->get('user_id');

        /*
         * Select all info of users with all join info
         */

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:Users')->findOneBy(array('id' => $user_id));
        $info_user = $user;
        $all_friend1 = $user->getFriendOne();
        $all_friend2 = $user->getFriendTwo();
        $friend1 = $user->getFriendOne()->slice(0, 3);
        $friend2 = $user->getFriendTwo()->slice(0, 3);
        $count_friends = count($friend1) + count($friend2);

        /*
         * get all invitation "en attente" with accessor
         */

        for ($i = 0; $i < count($user->getRecever()); $i++) {
            if ($accessor->getValue($user->getRecever(), '[' . $i . '].response') == 'attente') {
                array_push($invitation, $accessor->getValue($user->getRecever(), '[' . $i . ']'));
            }
        }

        /*
         * invitation count
         */

        $count_invitation = count($invitation);

        /*
         * render view with all info
         */

        return $this->render('Content/profile.html.twig', array('info_user' => $info_user,
            'friend1' => $friend1,
            'friend2' => $friend2,
            'nbr_friends' => $count_friends,
            'invitations' => $invitation,
            'nbr_invitations' => $count_invitation,
            'all_friend1' => $all_friend1,
            'all_friend2' => $all_friend2));
    }
}