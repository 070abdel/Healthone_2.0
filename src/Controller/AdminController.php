<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/medicijen/lijst", name="lijstmedicijnen")
     */
    public function showMedicijnenAction()
    {
        return $this->render('medicijnen/show.html.twig');
    }
}