<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\YetiForm;

final class AddNewYetyController extends AbstractController
{
    #[Route('/addNewYeti', name: 'app_add_new_yeti')]
    public function index(): Response
    {
        $form = $this->createForm(YetiForm::class);

        return $this->render('add_new_yeti/index.html.twig', [
            'controller_name' => 'AddNewYetyController',
            'form'=> $form->createView(),
        ]);
    }
}
