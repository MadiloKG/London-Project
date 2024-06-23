<?php

namespace App\Controller;

use App\Entity\Enseignant;
use App\Form\AddMatiereToEnseignantType;
use App\Form\EnseignantType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class EnseignantController extends AbstractController
{
    #[Route('/enseignants', name: 'enseignant_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $enseignants = $em->getRepository(Enseignant::class)->findAll();

        return $this->render('enseignant/list.html.twig', [
            'enseignants' => $enseignants,
        ]);
    }

    #[Route('/{id}/edit', name: 'enseignant_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Enseignant $enseignant, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $form = $this->createForm(EnseignantType::class, $enseignant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();

            if ($plainPassword) {
                $hashedPassword = $passwordHasher->hashPassword(
                    $enseignant,
                    $plainPassword
                );
                $enseignant->setPassword($hashedPassword);
            }

            $entityManager->flush();

            return $this->redirectToRoute('enseignant_list');
        }

        return $this->render('enseignant/edit.html.twig', [
            'enseignant' => $enseignant,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'enseignant_delete', methods: ['DELETE'])]
    public function delete(Request $request, Enseignant $enseignant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$enseignant->getId(), $request->request->get('_token'))) {
            $entityManager->remove($enseignant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('enseignant_list');
    }

    #[Route('/enseignant/add-matiere', name: 'enseignant_add_matiere', methods: ['GET', 'POST'])]
    public function addMatiere(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AddMatiereToEnseignantType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $enseignant = $data['enseignant'];
            $matieres = $data['matieres'];

            foreach ($matieres as $matiere) {
                $enseignant->addMatiere($matiere);
            }

            $entityManager->persist($enseignant);
            $entityManager->flush();

            return $this->redirectToRoute('enseignant_list');
        }

        return $this->render('enseignant/add_matiere.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
