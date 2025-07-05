<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\YetiRepository;

class LandingPageController extends AbstractController
{
    #[Route('/')]
    public function index(YetiRepository $yetiRepository): Response
    {

        $yetisInDB = $yetiRepository->findAll();

        return $this->render('landingPage/index.html.twig',[
            'yetis' => $yetisInDB
        ]);

    }
}