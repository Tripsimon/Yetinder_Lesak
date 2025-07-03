<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AddNewYetyController extends AbstractController
{
    #[Route('/addNewYeti', name: 'app_add_new_yeti')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {

        $yeti = new Yeti();

        $form = $this->createForm(YetiType::class, $yeti);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($yeti);
            $em->flush();

            return $this->redirectToRoute('yeti_index');
        }

        return $this->render('add_new_yeti/index.html.twig', [
            'controller_name' => 'AddNewYetyController',
        ]);
    }
}
