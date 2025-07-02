<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AddNewYetyController extends AbstractController
{
    #[Route('/addNewYety', name: 'app_add_new_yety')]
    public function index(): Response
    {
        return $this->render('add_new_yety/index.html.twig', [
            'controller_name' => 'AddNewYetyController',
        ]);
    }
}
