<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\Entity\Album_couverture;
use AppBundle\Entity\Album_profil;
use AppBundle\Entity\Photos;
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

class ArticleController extends Controller
{
    public function IndexAction(Request $request)
    {
        $fs = new Filesystem();
        $AlbumCouverture = new Album_couverture();
        $AlbumPhoto = new Album_profil();
        $Articles = new Articles();
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
         $created_at = new \DateTime("now");


        /**
         * check is user is connected o redirect the the login page
         */
        

        $check_session = $session->get('user_id');
        if (!$check_session) {
           $url = $this->generateUrl('app_login');
           return $this->redirect($url);
       }


     /**
      * create form builder for edit the profil picture
      */
     

     $defaultData1 = array('message' => 'Type your message here');
     $form1 = $this->createFormBuilder($defaultData1)
     ->add('profil', FileType::class, array('attr' => array('placeholder' => 'profil'), 'label' => false))
     ->getForm();
     $form1->handleRequest($request);


        /**
         * check if the form is  submit for the profil picture and get the data input
         */
        

        if ($form1->isSubmitted() && $form1->isValid()) {
            $defaultData1 = $form1->getData();
            $profil = $form1["profil"]->getData();


            /**
             * check the extension, push the image into a folder to convert into base64, 
             */
            
            
            $extension = $profil->guessExtension();
            $fileName = md5(uniqid()).'.'.$profil->guessExtension();
            $profil_path = $directoryPath = $this->container->getParameter('kernel.root_dir') . '/../web/Upload/';
            $file = $profil->move($profil_path,$fileName);
            $data = file_get_contents($file);
            $base64 = 'data:image/' . $extension . ';base64,' . base64_encode($data);
           
            /**
             * save the data into the Profil Entity
             */
            
            $product = $this->getDoctrine()
            ->getRepository('AppBundle\Entity\Photos')
            ->findOneByphoto($check_session);
           $product->setProfil($base64);
           
            $em->flush();


            /**
             * save the data into the Profil Album entity
             */
            
            
            $created_at = new \DateTime("now");
            $AlbumPhoto->setUsers($em->getReference('AppBundle\Entity\Users', $check_session));
            $AlbumPhoto->setPhoto($base64);
            $AlbumPhoto->setDate($created_at);
            $AlbumPhoto->setActive(1);
            $em->persist($AlbumPhoto);
            $em->flush();


            /**
             * delete the picture that has been saved previously
             */
            
            $fs->remove(array($profil_path.$fileName));
            exit;
        }



            /**
            * create form builder for edit the album picture
            */

        $defaultData2 = array('message' => 'Type your message here');
        $form2 = $this->createFormBuilder($defaultData2)
        ->add('couverture', FileType::class, array('attr' => array('placeholder' => 'couverture'), 'label' => false))
        ->getForm();
        $form2->handleRequest($request);

         /**
         * check if the form is  submit for the album picture and get the data input
         */

        if ($form2->isSubmitted() && $form2->isValid()) {
            $defaultData2 = $form2->getData();
            $couverture = $form2["couverture"]->getData();


            /**
             * check the extension, push the image into a folder to convert into base64, 
             */
            

            $extension = $couverture->guessExtension();
            $fileName = md5(uniqid()).'.'.$couverture->guessExtension();
            $profil_path = $directoryPath = $this->container->getParameter('kernel.root_dir') . '/../web/Upload/';
            $file = $couverture->move($profil_path,$fileName);
            $data = file_get_contents($file);
            $base64 = 'data:image/' . $extension . ';base64,' . base64_encode($data);


            /**
             * save the data into the Album Entity
             */
            

            $product = $this->getDoctrine()
            ->getRepository('AppBundle\Entity\Photos')
            ->findOneByphoto($check_session);
            $product->setCouverture($base64);
            $em->flush();
           


            /**
             * save the data into the album Photo entity
             */

            $created_at = new \DateTime("now");
            $AlbumCouverture->setUsers($em->getReference('AppBundle\Entity\Users', $check_session));
            $AlbumCouverture->setPhoto($base64);
            $AlbumCouverture->setDate($created_at);
            $AlbumCouverture->setActive(1);
            $em->persist($AlbumCouverture);
            $em->flush();



            /**
             * delete the picture that has been saved previously
             */
            

            $fs->remove(array($profil_path.$fileName));

            exit;
            
        }


            /**
            * create form builder for the Articles
            */

         $defaultData3 = array('message' => 'Type your message here');
        $form3 = $this->createFormBuilder($defaultData3)
        ->add('title', TextareaType::class, array('attr' => array('class' => 'tinymce'),))
        ->add('content', FileType::class, array('attr' => array('placeholder' => 'content'), 'label' => false))
        ->getForm();
        $form3->handleRequest($request);



         /**
         * check if the form is  submit for the album picture and get the data input
         */

        if ($form3->isSubmitted() && $form3->isValid()) {
            $defaultData3 = $form3->getData();
            $title = $form3["title"]->getData();
            $content = $form3["content"]->getData();
            $test = $content->guessExtension();
            $extension = $content->getClientOriginalExtension();
            $fileName = md5(uniqid()).'.'.$content->getClientOriginalExtension();
            $mimeType = $content->getClientMimeType();
            $profil_path = $directoryPath = $this->container->getParameter('kernel.root_dir') . '/../web/Upload/';
            $test_id = 67;
            $true = $fs->exists($profil_path.$test_id);

            /**
             * check the extension, push the video or music into a folder to convert, 
             */

             if($mimeType != 'image/jpeg'){
                    if($true === false){
                    $fs->mkdir($profil_path.$test_id, 0700);
                       
                    }
                    $myfolder = $profil_path.$test_id.'/';
                    $content->move($profil_path.$test_id.'/',$fileName);
            $Articles->setUsers($em->getReference('AppBundle\Entity\Users', $test_id));
            $Articles->setContent($fileName);
            $Articles->setType('videos');
             $Articles->setTime($created_at);

            $Articles->setTitle($title);
            $Articles->setCreatedAt($created_at);
            $Articles->setUpdatedAt($created_at);
            $Articles->setActive(0);
            $em->persist($Articles);
            $em->flush();

                     
            
            

             } else{

            $file = $content->move($profil_path,$fileName);
            $data = file_get_contents($file);
            $base64 = 'data:image/' . $extension . ';base64,' . base64_encode($data);
           
            $Articles->setUsers($em->getReference('AppBundle\Entity\Users', $test_id));
            $Articles->setContent($base64);
            $Articles->setType('image');
             $Articles->setTime($created_at);
            $Articles->setTitle($title);
            $Articles->setCreatedAt($created_at);
            $Articles->setUpdatedAt($created_at);
            $Articles->setActive(0);
            $em->persist($Articles);
            $em->flush();
            $fs->remove(array($profil_path.$fileName));

             }
             exit;


            /**
             * check the extension, push the image into a folder to convert into base64, 
             */
            

         /*   $extension = $couverture->guessExtension();
            $fileName = md5(uniqid()).'.'.$couverture->guessExtension();
            $profil_path = $directoryPath = $this->container->getParameter('kernel.root_dir') . '/../web/Upload/';
            $file = $couverture->move($profil_path,$fileName);
            $data = file_get_contents($file);
            $base64 = 'data:image/' . $extension . ';base64,' . base64_encode($data);*/


            /**
             * save the data into the Album Entity
             */
            

          /*  $product = $this->getDoctrine()
            ->getRepository('AppBundle\Entity\Photos')
            ->findOneByphoto(66);
            $product->setCouverture($base64);
            $em->flush();*/
           


            /**
             * save the data into the album Photo entity
             */

          /*  $created_at = new \DateTime("now");
            $AlbumCouverture->setUsers($em->getReference('AppBundle\Entity\Users', 66));
            $AlbumCouverture->setPhoto($base64);
            $AlbumCouverture->setDate($created_at);
            $AlbumCouverture->setActive(1);
            $em->persist($AlbumCouverture);
            $em->flush();*/



            /**
             * delete the picture that has been saved previously
             */
            

            /*$fs->remove(array($profil_path.$fileName));

            exit;*/
            
        }





    return $this->render('Content/index.html.twig', array('form1' => $form1->createView(),'form2' => $form2->createView(),'form3' => $form3->createView()));

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
