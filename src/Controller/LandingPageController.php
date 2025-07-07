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
        $topYetis = $yetiRepository->createQueryBuilder('yety')
            ->orderBy('yety.currentRating', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        $randomMaleYeti = $yetiRepository->createQueryBuilder('y')
            ->where('y.gender = :gender')
            ->setParameter('gender', 'male')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        $randomFemaleYeti = $yetiRepository->createQueryBuilder('y')
            ->where('y.gender = :gender')
            ->setParameter('gender', 'female')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        return $this->render('landingPage/index.html.twig', [
            'topYetis' => $topYetis,
            'randomMale' => $randomMaleYeti,
            'randomFemale' => $randomFemaleYeti
        ]);

    }
}