<?php
/**
 * Created by PhpStorm.
 * User: Csegő
 * Date: 2016. 12. 11.
 * Time: 20:41
 */

namespace VendorName\HomeBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('vendorname_home_home_index'));
    }
}