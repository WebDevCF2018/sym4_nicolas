<?php

namespace App\Controller;

use App\Entity\Lespages;
use App\Form\LespagesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/lespages")
 */
class LespagesController extends AbstractController
{
    /**
     * @Route("/", name="lespages_index", methods="GET")
     */
    public function index(): Response
    {
        $lespages = $this->getDoctrine()
            ->getRepository(Lespages::class)
            ->findAll();

        return $this->render('lespages/index.html.twig', ['lespages' => $lespages]);
    }

    /**
     * @Route("/new", name="lespages_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $lespage = new Lespages();
        $form = $this->createForm(LespagesType::class, $lespage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lespage);
            $em->flush();

            return $this->redirectToRoute('lespages_index');
        }

        return $this->render('lespages/new.html.twig', [
            'lespage' => $lespage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idlespages}", name="lespages_show", methods="GET")
     */
    public function show(Lespages $lespage): Response
    {
        return $this->render('lespages/show.html.twig', ['lespage' => $lespage]);
    }

    /**
     * @Route("/{idlespages}/edit", name="lespages_edit", methods="GET|POST")
     */
    public function edit(Request $request, Lespages $lespage): Response
    {
        $form = $this->createForm(LespagesType::class, $lespage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lespages_edit', ['idlespages' => $lespage->getIdlespages()]);
        }

        return $this->render('lespages/edit.html.twig', [
            'lespage' => $lespage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idlespages}", name="lespages_delete", methods="DELETE")
     */
    public function delete(Request $request, Lespages $lespage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lespage->getIdlespages(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lespage);
            $em->flush();
        }

        return $this->redirectToRoute('lespages_index');
    }


    /**
     * @Route("/admin/lespages")
     */


}
