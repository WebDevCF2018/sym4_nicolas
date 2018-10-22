<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use  App\Entity\Rubriques;
use  App\Entity\Lespages;


class PublicController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $rub = $entityManager->getRepository(Rubriques::class)->findAll();
        $page = $entityManager->getRepository(Lespages::class)->findAll();

        return $this->render('public/index.html.twig', [
            'rubriques' => $rub,
            'lespages' =>$page,
        ]);
    }
}
