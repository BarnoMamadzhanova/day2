<?php

namespace App\Controller;

use App\Repository\ToursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToursController extends AbstractController
{
    #[Route('/tours', name: 'app_tours')]
    public function index(ToursRepository $toursRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'tours' => $toursRepository->findAll()
        ]);
    }

}
