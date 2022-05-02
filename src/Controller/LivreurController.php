<?php

namespace App\Controller;

use App\Entity\Livraison;
use App\Form\LivraisonType;
use App\Repository\LivraisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/livreur")
 */
class LivreurController extends AbstractController
{
    /**
     * @Route("/", name="app_livreur")
     */
    public function index(): Response
    {
        return $this->render('livreur/main.html.twig');
    }
    /**
     * @Route("/show", name="app_livreur_index", methods={"GET"})
     */
    public function showALl(LivraisonRepository $livraisonRepository): Response
    {
        return $this->render('livreur/index.html.twig', [
            'livraisons' => $livraisonRepository->findAll(),
        ]);
    }
    /**
     * @Route("/profil", name="app_livreur_profil")
     */
    public function profil(): Response
    {
        return $this->render('livreur/profil.html.twig', [
            'controller_name' => 'LivreurController',
        ]);
    }
}