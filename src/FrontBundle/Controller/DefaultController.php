<?php

namespace FrontBundle\Controller;

use FrontBundle\Entity\Categorie;
use FrontBundle\FrontBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Request;

use FrontBundle\Entity\Nourriture;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $repas = $this->getDoctrine()->getRepository('FrontBundle:Nourriture')->findAll();

        return $this->render('@Front/Default/index.html.twig', array('listeRepas' => $repas));
    }

    /**
     * @Route("/nourriture", name="ma_nourriture")
     */
    public function listerNourritureAction()
    {
        $categorie = $this->getDoctrine()->getRepository('FrontBundle:Categorie')->findAll();
        return $this->render('@Front/Default/nourriture.html.twig', array('tousCategorie' => $categorie));
    }

    /**
     * @Route("/nourriture/ajouter", name="ajouter_nourriture")
     */
    public function ajouterNourritureAction()
    {
        return $this->render('@Front/Default/ajouterNourriture.html.twig');
    }

    /**
     * @Route("/menu", name="mon_menu")
     */
    public function afficherMenuAction()
    {
        $typeRepas = $this->getDoctrine()->getRepository('FrontBundle:TypeRepas')->findAll();
        return $this->render('@Front/Default/menu.html.twig', array('tousTypeRepas' => $typeRepas));
    }

    /**
     * @Route("/menu/creer", name="creer_menu")
     */
    public function creerMenuAction()
    {
        return $this->render('@Front/Default/creerMenu.html.twig');
    }

}
