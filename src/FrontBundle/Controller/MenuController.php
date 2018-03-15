<?php

namespace FrontBundle\Controller;

use Symfony\Component\HttpKernel\Tests\Controller;

class MenuController extends Controller
{
    /**
     * @Route("/menu/{id}")
     */
    public function indexAction($id)
    {
        $menu = '';
        return $this->render('@Front/Default/menuDetails.html.twig', array('menu' => $menu));
    }
}