<?php

namespace App\Controller;

use App\Entity\Matiere;
use App\Form\MatiereType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MatiereController extends AbstractController
{
    #[Route('/matieres', name: 'matiere_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $matieres = $em->getRepository(Matiere::class)->findAll();

        return $this->render('matiere/list.html.twig', [
            'matieres' => $matieres,
        ]);
    }

    #[Route('/matiere/add', name: 'matiere_add', methods: ['GET', 'POST'])]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $matiere = new Matiere();
        $form = $this->createForm(MatiereType::class, $matiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($matiere);
            $entityManager->flush();

            return $this->redirectToRoute('matiere_list');
        }

        return $this->render('matiere/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/matiere/{id}/edit', name: 'matiere_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Matiere $matiere, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MatiereType::class, $matiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('matiere_list');
        }

        return $this->render('matiere/edit.html.twig', [
            'matiere' => $matiere,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/matiere/{id}', name: 'matiere_delete', methods: ['DELETE'])]
    public function delete(Request $request, Matiere $matiere, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$matiere->getId(), $request->request->get('_token'))) {
            $entityManager->remove($matiere);
            $entityManager->flush();
        }

        return $this->redirectToRoute('matiere_list');
    }
}

