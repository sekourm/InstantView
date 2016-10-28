<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\Entity\Album_couverture;
use AppBundle\Entity\Album_profil;
use AppBundle\Entity\Photos;
use AppBundle\Entity\Comments;
use AppBundle\Entity\Articles;
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

class CommentController extends Controller
{
    public function AddCommentAction(Request $request, $article_id)
    {
        /*
         * get the id of users in session
         */

        $user_id = $this->get('session')->get('user_id');

        /*
         * get post comment of the form
         */

        $params = $this->get('request')->get('comment');

        /*
         * insert in the table comment the content with all info
         */

        $comment = new Comments();
        $em = $this->getDoctrine()->getManager();
        $comment->setContent($params);
        $comment->setActive(1);
        $comment->setUserCommentId($em->getReference('AppBundle\Entity\Users', $user_id));
        $comment->setArticleCommentId($em->getReference('AppBundle\Entity\Articles', $article_id));
        $em->persist($comment);
        $em->flush();

        /*
         * redirect after insert
         */

        return $this->redirect('/home');
    }

    public function FullCommentAction(Request $request, $article_id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AppBundle:Articles')->findBy(array('id' => $article_id));

        /*
         * redirect after insert
         */

        return $this->render('Content/fullarticle.html.twig',array('AllArticles' => $article));
    }
}
