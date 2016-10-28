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

class PhotoController extends Controller
{
    public function ShowAllAlbumAction(Request $request)
    {
        /*
         * get the id of users in session
         */

        $user_id = $this->get('session')->get('user_id');

        /*
         * Select all info of users with all join info
         */

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:Users')->findOneBy(array('id' => $user_id));

        return $this->render('Content/album.html.twig', array('user' => $user));
    }


    public function ShowAllAlbumActionUserAction(Request $request, $user_id)
    {
        /*
         * Select all info of users with all join info
         */

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:Users')->findOneBy(array('id' => $user_id));

        return $this->render('Content/album.html.twig', array('user' => $user));
    }


}
