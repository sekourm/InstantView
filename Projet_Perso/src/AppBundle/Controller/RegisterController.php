<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\Entity\Photos;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegisterController extends Controller
{
    public function RegisterAction(Request $request)
    {

        /**
         *  create the form
         */

        $users = new Users();
        $photographie = new Photos();
        $form = $this->createFormBuilder($users)
        ->add('username', TextType::class, array('attr' => array('placeholder' => 'Username'), 'label' => false))
        ->add('lastname', TextType::class, array('attr' => array('placeholder' => 'Nom'), 'label' => false))
        ->add('name', TextType::class, array('attr' => array('placeholder' => 'Prenom'), 'label' => false))
        ->add('password', RepeatedType::class, array('type' => 'password', 'first_options' => array('attr' => array('placeholder' => 'Password'), 'label' => false),
            'second_options' => array('label' => false, 'attr' => array('placeholder' => 'Confirmed password')), 'invalid_message' => 'Confirmation de mot de passe incorrect',))
        ->add('email', EmailType::class, array('label' => false, 'attr' => array('placeholder' => 'Email')))
        ->add('register', SubmitType::class)
        ->getForm();
        $form->handleRequest($request);

        /**
         *verify if form is valide and if is submitted
         */

        if ($form->isSubmitted() && $form->isValid()) {

            /**
             * get all data to the form
             */

            $users = $form->getData();
            $password = $form["password"]->getData();
            $name = $form["name"]->getData();
            $lastname = $form["lastname"]->getData();
            $email = $form["email"]->getData();

            /**
             * set data for different date and role;
             */

            $created_at = new \DateTime("now");

            $users->setCreatedAt($created_at);
            $users->setIsConnect(0);
            $users->setLastConnexion($created_at);
            $users->setUpdatedAt($created_at);
            $users->setRole(0);

            /**
             * encode the password for the security
             */

            $encoderFactory = $this->get('security.encoder_factory');
            $encoder = $encoderFactory->getEncoder($users);
            $salt = 'lesitelemienlemeilleur';
            $password = $encoder->encodePassword($password, $salt);

            /**
             * generate a key for the user
             */

            $private_key = md5(microtime() . rand());

            /**
             * insert the user in database with password encode
             */

            $users->setPrivateKey($private_key);
            $users->setSalt($salt);
            $users->setActive('0');
            $users->setPassword($password);
            $em = $this->getDoctrine()->getManager();
            $em->persist($users);
            $em->flush();

            /**
             * insert the profil and couverture into the database
             */
            $id = $users->getId();
            
            $profil_path = $directoryPath = $this->container->getParameter('kernel.root_dir') . '/../web/profil/profil.txt';
            $profil = file_get_contents($profil_path);
            $couverture_path = $directoryPath = $this->container->getParameter('kernel.root_dir') . '/../web/couverture/couverture.txt';
            $couverture = file_get_contents($couverture_path);
            $photographie->setPhoto($em->getReference('AppBundle\Entity\Users', $id));
            $photographie->setProfil($profil);
            $photographie->setCouverture($couverture);
            $em->persist($photographie);
            $em->flush();


            /**
             * find the id of the user
             */

            $repository = $this->getDoctrine()->getRepository('AppBundle:Users');
            $user = $repository->findBy(array('email' => $email));
            $user_id = $user[0]->getId();

            /**
             * Send email to the user for a confirmation email
             */

            $message = \Swift_Message::newInstance()
            ->setSubject("Confirmation d'inscription Instant View")
            ->setFrom('InstantView@confirmation.fr')
            ->setTo($email)
            ->setBody($this->renderView('Emails/registration.html.twig', array('name' => $name, 'lastname' => $lastname, 'user_id' => $user_id, 'private_key' => $private_key)), 'text/html');
            $this->get('mailer')->send($message);

            /**
             * send a message to view if register is done
             */

            $request->getSession()->getFlashBag()->add('success', 'Un mail vient de vous être envoyer.');

            /**
             * redirect the user
             */

            $url = $this->generateUrl('app_login');
            return $this->redirect($url);
        }

        /**
         * redirect if the form is not submitted or if the form is load
         */

        return $this->render('Register/register.html.twig', array('form' => $form->createView()));
    }
}