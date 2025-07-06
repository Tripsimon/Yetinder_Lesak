<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\YetiRepository;

final class YetiController extends AbstractController
{
    #[Route('/yeti/{id}', name: 'yeti_detail')]
    public function index($id,YetiRepository $yetiRepository): Response
    {
        $yetiToShow = $yetiRepository->findOneBy(['id' => $id]);

        return $this->render('yeti/index.html.twig', [
            'controller_name' => 'YetiController',
            'yeti' => $yetiToShow
        ]);
    }
}
