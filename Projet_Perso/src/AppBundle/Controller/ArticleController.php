<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\Entity\Photos;
use AppBundle\Entity\Articles;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Finder\Finder;

class ArticleController extends Controller
{
    public function IndexAction(Request $request)
    {
     $em = $this->getDoctrine()->getManager();

     $session = $request->getSession();
     $check_session = $session->get('user_id');
     if (!$check_session) {
         $url = $this->generateUrl('app_login');
         return $this->redirect($url);
     }

     $photographie = new Photos();
     $form = $this->createFormBuilder($photographie)
     ->add('profil', FileType::class, array('attr' => array('placeholder' => 'profil'), 'label' => false))
     ->add('register', SubmitType::class)
     ->getForm();
     $form->handleRequest($request);

     if ($form->isSubmitted() && $form->isValid()) {
        $lo = $photographie->getProfil();

            $finder = new Finder();
          
            $locate = $finder->files()->in(__DIR__);

            dump($locate);


            /*$photos = $form->getData();
            $profil = $form["profil"]->getData();
            dump($profil);*/



            $path = $directoryPath = $this->container->getParameter('kernel.root_dir') . '/../web/profil/profil.txt';
            $css = file_get_contents($path);
            dump($css);
             exit;
            $extension = $lo->guessExtension();
            $first=  'qsddddddddddddddd';
            $second = 'ddddddddddd';
            $base64 = 'data:image/' . $extension . ';base64,' . base64_encode($lo);

            $em = $this->getDoctrine()->getManager();
            $photographie->setPhoto($em->getReference('AppBundle\Entity\Users', 67));
            $photographie->setProfil($first);
            $photographie->setCouverture($second);
            //$photographie->setUserId(67);
            //$em->persist($photographie);
            //$em->flush();


// $entity1->setEntity2($entity2);


              dump($base64);
              dump($extension);
              dump($lo);
             
          }

          return $this->render('Content/index.html.twig', array('form' => $form->createView()));

      }

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


        /*$user = $em->getRepository('AppBundle:Friends')->findOneBy(array('id' => 1));
        $result = $user->getUserFriendOne()->getUsername();
        dump($result);
        exit;*/

        /*$user = $em->getRepository('AppBundle:Invitations')->findOneBy(array('id' => 1));
        $result = $user->getUserInvitSender()->getUsername();
        dump($result);
        exit;*/



       /* public function AddphotoAction(Request $request){
            $photos = new Photos();
            $requestAll = $request->request->all();
            $file = $requestAll['profil'];
            $riki = $photos->setProfil($file);
          //  var_dump($riki);
           $extension = $file->guessExtension();
            //dump($extension);
            dump($file);

        // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($file);

     //   var_dump($base64);
         dump($requestAll);exit;
         //$file = $requestAll['profil'];
        // $fileName = md5(uniqid()).'.'.$file->guessExtension();
     }*/
 }
