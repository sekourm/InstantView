<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\Entity\Album_couverture;
use AppBundle\Entity\Album_profil;
use AppBundle\Entity\Photos;
use AppBundle\Entity\Articles;
use AppBundle\Entity\Friends;
use AppBundle\Entity\Invitations;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class InvitationController extends Controller
{
    public function AcceptAction(Request $request, $id){
        $invitation = new Invitations();
        $friends = new Friends();
        $user_id = $this->get('session')->get('user_id');
        $em = $this->getDoctrine()->getManager();
        $AllInvitation = $em->getRepository('AppBundle:Invitations')->findOneBy(array('user_invit_sender' => $id, 'user_invit_recever' => $user_id));
        $AllInvitation->setResponse('accepter');
        $em->flush();
        $int = (int)$id;


        $friends->setUserFriendOne($em->getReference('AppBundle\Entity\Users', $user_id));
        $friends->setUserFriendTwo($em->getReference('AppBundle\Entity\Users', $int));
        $em->persist($friends);
        $em->flush();

        return $this->redirect($request->server->get('HTTP_REFERER'));
    }


    public function RefuseAction(Request $request,$id){
        $invitation = new Invitations();
        $user_id = $this->get('session')->get('user_id');
        $em = $this->getDoctrine()->getManager();
        $AllInvitation = $em->getRepository('AppBundle:Invitations')->findOneBy(array('user_invit_sender' => $id, 'user_invit_recever' => $user_id));

        $AllInvitation->setResponse('refuser');
        $em->flush();
        return $this->redirect($request->server->get('HTTP_REFERER'));
    }

}