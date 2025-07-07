<?php
namespace App\Controller;

use App\Entity\Yeti;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Connection;
use App\Form\YetiForm;

final class AddNewYetyController extends AbstractController
{
    /**
     * Routa pro přidání nového Yetyho
     */
    #[Route('/addNewYeti', name: 'app_add_new_yeti')]
    public function index(Request $request, Connection $connection): Response
    {
        $newYeti = new Yeti(); 

        // Tvorba formuláře pomocíform Builderu
        $form = $this->createForm(YetiForm::class, $newYeti);
        $form->handleRequest($request);

        // Obsloužení odeslaneho formuláře
        if ($form->isSubmitted()) {

            $connection->insert('yeti', [
                'name' => $newYeti->getName(),
                'age' => $newYeti->getAge(),
                'gender' => $newYeti->getGender()?->value,
                'weight' => $newYeti->getWeight(),
                'height' => $newYeti->getHeight(),
                'place_of_stay' => $newYeti->getPlaceOfStay(),
                'current_rating' => 0
            ]);

            // Přdejití zobrazení stejného yetyho
            $lastInsertId = $connection->lastInsertId();
            $this->addFlash('success', 'Yeti byl úspěšně přidán!');
            return $this->redirectToRoute('yeti_detail',[
                'id' => $lastInsertId,
            ]);
        }

        //Render
        return $this->render('add_new_yeti/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
