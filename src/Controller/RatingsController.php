<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\DBAL\Connection;

final class RatingsController extends AbstractController
{
    #[Route('/ratings/{timeSpan}', name: 'app_ratings')]
    public function index(string $timeSpan, Connection $connection): Response
    {
        //Změna chovani podle vyberu casu
        $whereClause = '';
        switch ($timeSpan) {
            case 'month':
                $whereClause = 'WHERE r.timestamp >= DATE_SUB(NOW(), INTERVAL 1 MONTH)';
                break;

            case 'week':
                $whereClause = 'WHERE r.timestamp >= DATE_SUB(NOW(), INTERVAL 1 WEEK)';
                break;

            default:
                $whereClause = '';
                break;
        }

        // priprava SQL zapisu (Heredoc kvuli where)
        $sql = <<<SQL
            SELECT r.id, y.name AS yetiName, r.rating, r.timestamp
            FROM yeti_rating r
            JOIN yeti y ON r.yeti_id = y.id
            $whereClause
            ORDER BY r.timestamp DESC
        SQL;

        $allRatings = $connection->fetchAllAssociative($sql);

        //render
        return $this->render('ratings/index.html.twig', [
            'controller_name' => 'RatingsController',
            'ratings' => $allRatings
        ]);
    }
}
