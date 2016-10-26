<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Invitations;
use AppBundle\Entity\Users;
use AppBundle\Entity\Articles;
use AppBundle\Entity\Album_couverture;
use AppBundle\Entity\Album_profil;
use AppBundle\Entity\Photos;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;


class ProfileController extends Controller
{
    public function ShowAction(Request $request)
    {


        $fs = new Filesystem();

        $Articles = new Articles();
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        $created_at = new \DateTime("now");
        $AlbumCouverture = new Album_couverture();
        $AlbumPhoto = new Album_profil();
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
            $fileName = md5(uniqid()) . '.' . $profil->guessExtension();
            $profil_path = $directoryPath = $this->container->getParameter('kernel.root_dir') . '/../web/Upload/';
            $file = $profil->move($profil_path, $fileName);
            $data = file_get_contents($file);
            $base64 = 'data:image/' . $extension . ';base64,' . base64_encode($data);

            /**
             * save the data into the Profil Entity
             */

            $product = $this->getDoctrine()
                ->getRepository('AppBundle\Entity\Photos')
                ->findOneByphoto($user_id);
            $product->setProfil($base64);
            $em->flush();

            /**
             * save the data into the Profil Album entity
             */

            $created_at = new \DateTime("now");
            $AlbumPhoto->setUsers($em->getReference('AppBundle\Entity\Users', $user_id));
            $AlbumPhoto->setPhoto($base64);
            $AlbumPhoto->setDate($created_at);
            $AlbumPhoto->setActive(1);
            $em->persist($AlbumPhoto);
            $em->flush();

            /**
             * delete the picture that has been saved previously
             */

            $fs->remove(array($profil_path . $fileName));
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
            $fileName = md5(uniqid()) . '.' . $couverture->guessExtension();
            $profil_path = $directoryPath = $this->container->getParameter('kernel.root_dir') . '/../web/Upload/';
            $file = $couverture->move($profil_path, $fileName);
            $data = file_get_contents($file);
            $base64 = 'data:image/' . $extension . ';base64,' . base64_encode($data);

            /**
             * save the data into the Album Entity
             */

            $product = $this->getDoctrine()
                ->getRepository('AppBundle\Entity\Photos')
                ->findOneByphoto($user_id);
            $product->setCouverture($base64);
            $em->flush();

            /**
             * save the data into the album Photo entity
             */

            $created_at = new \DateTime("now");
            $AlbumCouverture->setUsers($em->getReference('AppBundle\Entity\Users', $user_id));
            $AlbumCouverture->setPhoto($base64);
            $AlbumCouverture->setDate($created_at);
            $AlbumCouverture->setActive(1);
            $em->persist($AlbumCouverture);
            $em->flush();

            /**
             * delete the picture that has been saved previously
             */

            $fs->remove(array($profil_path . $fileName));
        }




        /**
         * create form builder for the Articles
         */

        $defaultData3 = array('message' => 'Type your message here');
        $form3 = $this->createFormBuilder($defaultData3)
            ->add('title', TextareaType::class, array('attr' => array('class' => 'tweet', 'id' => 'message', 'maxlength' => '140'),))
            ->add('content', FileType::class, array('attr' => array('placeholder' => 'content', 'id' => 'image_src_photo'), 'label' => false))
            ->getForm();
        $form3->handleRequest($request);

        /**
         * check if the form is  submit for the album picture and get the data input
         */

        if ($form3->isSubmitted() && $form3->isValid()) {
            $date = date('Y/m/d');
            // dump($date);exit;
            $defaultData3 = $form3->getData();
            $title = $form3["title"]->getData();
            $content = $form3["content"]->getData();
            $test = $content->guessExtension();
            $extension = $content->getClientOriginalExtension();
            $fileName = md5(uniqid()) . '.' . $content->getClientOriginalExtension();
            $mimeType = $content->getClientMimeType();

            $profil_path = $directoryPath = $this->container->getParameter('kernel.root_dir') . '/../web/Upload/';

            $true = $fs->exists($profil_path . $user_id);

            /**
             * if the file is video  so push it inro user folder
             */

            if ($mimeType == "video/mp4") {
                if ($true === false) {
                    $fs->mkdir($profil_path . $user_id, 0700);

                }
                $myfolder = $profil_path . $user_id . '/';
                $content->move($profil_path . $user_id . '/', $fileName);
                $Articles->setUsers($em->getReference('AppBundle\Entity\Users', $user_id));
                $Articles->setContent($fileName);
                $Articles->setType('videos');
                $Articles->setTime(10);

                $Articles->setTitle($title);
                $Articles->setCreatedAt(new \DateTime($date));
                $Articles->setUpdatedAt(new \DateTime($date));
                $Articles->setActive(0);
                $em->persist($Articles);
                $em->flush();


            } /**
             * if the file is image so transform it into base64
             */
            else if ($mimeType == 'image/jpeg' || $mimeType == 'image/png') {

                $file = $content->move($profil_path, $fileName);
                $data = file_get_contents($file);
                $base64 = 'data:image/' . $extension . ';base64,' . base64_encode($data);

                $Articles->setUsers($em->getReference('AppBundle\Entity\Users', $user_id));
                $Articles->setContent($base64);
                $Articles->setType('image');
                $Articles->setTime(10);
                $Articles->setTitle($title);
                $Articles->setCreatedAt(new \DateTime($date));
                $Articles->setUpdatedAt(new \DateTime($date));
                $Articles->setActive(0);
                $em->persist($Articles);
                $em->flush();
                $fs->remove(array($profil_path . $fileName));

            } /**
             * if the file is not image or video so return false
             */

            else {
                return $this->redirect($request->server->get('HTTP_REFERER'));
            }
            return $this->redirect($request->server->get('HTTP_REFERER'));
        }


        /*
         * render view with all info
         */

        return $this->render('Content/profile.html.twig', array('info_user' => $info_user,
            'friend1' => $friend1,
            'form1' => $form1->createView(),
            'form2' => $form2->createView(),
            'friend2' => $friend2,
            'nbr_friends' => $count_friends,
            'invitations' => $invitation,
            'nbr_invitations' => $count_invitation,
            'all_friend1' => $all_friend1,
            'all_friend2' => $all_friend2,
            'form3' => $form3->createView()));
    }

    public function SearchAction($username)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        $tab = [];
        $em = $this->getDoctrine()->getManager();
        /* $alluser = $em->getRepository('AppBundle:Users')->findBy(array('username' => '%'.$username.'%'));*/
        $result = $em->getRepository("AppBundle:Users")->createQueryBuilder('o')
            ->where('o.username LIKE :username')
            ->setParameter('username', '%'.$username.'%')
            ->getQuery()
            ->getArrayResult();

       // dump($result);exit;
        if ($result) {
            $user = $result;
        } else {
            $user = null;
        }
        $response = new JsonResponse();
        $data = $response->setData(array('user' => $user));
        return $data ;

    }
}