<?php

namespace App\Controller;

use App\Enum\Gender;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\DBAL\Connection;
use App\Repository\YetiRepository;

final class YetiController extends AbstractController
{
    #[Route('/yeti/{id}', name: 'yeti_detail')]
    public function index($id, YetiRepository $yetiRepository): Response
    {
        $yetiToShow = $yetiRepository->findOneBy(['id' => $id]);


        return $this->render('yeti/index.html.twig', [
            'controller_name' => 'YetiController',
            'yeti' => $yetiToShow
        ]);
    }


    #[Route('/rate/{ratingGender}/{id}/{direction}', name: 'yeti_rate')]
    public function rate(string $ratingGender ,int $id, string $direction, Connection $connection): Response
    {
        // Validace
        if (!in_array($direction, ['positive', 'negative'])) {
            throw $this->createNotFoundException('Neplatný směr hodnocení.');
        }


        // Vlastni insert do DB pomoci DBAL connection
        $connection->insert('yeti_rating', [
            'yeti_id' => $id,
            'rating' => $direction == 'positive' ? true : 0,
            'timestamp' => (new \DateTime())->format('Y-m-d H:i:s'),
        ]);


        // ZIskani dalsiho yetiho. Random je taky algoritmus :D I když jsem podchitil aby se nezobrazil stejný yety + udržoval gender
        $randomYeti = $connection->fetchAssociative('SELECT id FROM yeti WHERE id != ? AND gender = ? ORDER BY RAND() LIMIT 1', [$id,$ratingGender], );

        // Presmerovani dal (tinder "Swajpovani")
        return $this->redirectToRoute('yeti_detail', ['id' => $randomYeti['id']]);
    }
}
