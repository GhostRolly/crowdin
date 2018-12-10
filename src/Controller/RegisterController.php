<?php

namespace App\Controller;

use App\Entity\CrowdinAuthUser;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        $user = new CrowdinAuthUser();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            // Create user in db
            $user->setPassword($encoder->encodePassword($user, $user->getPassword()));

            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('login');
        }


        return $this->render('register/index.html.twig', [
            'controller_name' => 'RegisterController',
            'register' => 'active',
            'form' => $form->createView()
        ]);
    }
}
