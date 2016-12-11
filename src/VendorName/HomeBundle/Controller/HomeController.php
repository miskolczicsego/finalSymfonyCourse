<?php

namespace VendorName\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Created by PhpStorm.
 * User: Csegő
 * Date: 2016. 12. 11.
 * Time: 17:55
 */

/**
 * Class HomeController
 *
 * @Route("/")
 */
class HomeController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/home")
     */
    public function indexAction()
    {
        return $this->render('HomeBundle:Home:home.html.twig');
    }

}