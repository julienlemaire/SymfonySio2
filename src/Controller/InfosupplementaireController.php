<?php

namespace App\Controller;

use App\Entity\Infosupplementaire;
use App\Form\InfosupplementaireType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/infosupplementaire")
 */
class InfosupplementaireController extends AbstractController
{
    /**
     * @Route("/", name="infosupplementaire_index", methods="GET")
     */
    public function index(): Response
    {
        $infosupplementaires = $this->getDoctrine()
            ->getRepository(Infosupplementaire::class)
            ->findAll();

        return $this->render('infosupplementaire/index.html.twig', ['infosupplementaires' => $infosupplementaires]);
    }

    /**
     * @Route("/new", name="infosupplementaire_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $infosupplementaire = new Infosupplementaire();
        $form = $this->createForm(InfosupplementaireType::class, $infosupplementaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($infosupplementaire);
            $em->flush();

            return $this->redirectToRoute('infosupplementaire_index');
        }

        return $this->render('infosupplementaire/new.html.twig', [
            'infosupplementaire' => $infosupplementaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="infosupplementaire_show", methods="GET")
     */
    public function show(Infosupplementaire $infosupplementaire): Response
    {
        return $this->render('infosupplementaire/show.html.twig', ['infosupplementaire' => $infosupplementaire]);
    }

    /**
     * @Route("/{id}/edit", name="infosupplementaire_edit", methods="GET|POST")
     */
    public function edit(Request $request, Infosupplementaire $infosupplementaire): Response
    {
        $form = $this->createForm(InfosupplementaireType::class, $infosupplementaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('infosupplementaire_index', ['id' => $infosupplementaire->getId()]);
        }

        return $this->render('infosupplementaire/edit.html.twig', [
            'infosupplementaire' => $infosupplementaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="infosupplementaire_delete", methods="DELETE")
     */
    public function delete(Request $request, Infosupplementaire $infosupplementaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$infosupplementaire->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($infosupplementaire);
            $em->flush();
        }

        return $this->redirectToRoute('infosupplementaire_index');
    }
}
