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


    /**
     * @Route("/pages/{id}", name="detail_pages", requirements={"id"="\d+"})
     */

    public function onePage($id){
        $entityManager = $this->getDoctrine()->getManager();
        $rub = $entityManager->getRepository(Rubriques::class)->findAll();
        $page = $entityManager->getRepository(Lespages::class)->find($id);

        return $this->render('public/onePage.html.twig',[
            'rubriques'=>$rub,
            'pages'=>$page,
        ]);
    }


    /**
     * @Route("/rubriques/{id}", name="detail_rubriques"),requirements={"id"="\d+"})
     */

    public function oneRub($id){
        $entityManager = $this->getDoctrine()->getManager();
        $rub = $entityManager->getRepository(Rubriques::class)->findAll();
        $sect = $entityManager->getRepository(Rubriques::class)->find($id);
        $page = $sect->getLespageslespages();

        return $this->render('public/oneRubriques.html.twig',[
           'rubriques'=>$rub,
           'rubrique'=>$sect,
           'lespage'=>$page,
        ]);
    }

}
