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

class ArticleController extends Controller
{
    public function IndexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // l'utilisateur et tout les articles //
        /*$user = $em->getRepository('AppBundle:Users')->findOneBy(array('id' => 67));
        $result = $user->getArticles()->getValues();
        dump($result);exit;*/

        // l'article avec l'utilisateur //
        /*$user = $em->getRepository('AppBundle:Articles')->findOneBy(array('id' => 1));
        //$result = $user->getUsers()->getUsername();
        dump($user->getContent());
        exit;*/

        /// ONE TO ONE //
        /*$user = $em->getRepository('AppBundle:Users')->findOneBy(array('id' => 67));
        $result = $user->getUserPhoto();
        dump($result);exit;*/

        //return $this->render('Content/index.html.twig', array('result' => $result));

        /*$user = $em->getRepository('AppBundle:Friends')->findOneBy(array('id' => 1));
        $result = $user->getUserFriendOne()->getUsername();
        dump($result);
        exit;*/

        /*$user = $em->getRepository('AppBundle:Invitations')->findOneBy(array('id' => 1));
        $result = $user->getUserInvitSender()->getUsername();
        dump($result);
        exit;*/

    }
}
