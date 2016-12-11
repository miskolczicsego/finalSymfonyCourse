<?php

namespace VendorName\RegisterBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use VendorName\RegisterBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use VendorName\RegisterBundle\Entity\User;

class RegisterController extends Controller
{
    /**
     * @return Response
     * @Route("/")
     *
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $password = $this->get('security.password_encoder')->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return new Response("Registration success");
        }

        return $this->render('RegisterBundle:Register:index.html.twig', array('form' => $form->createView()));
    }
}