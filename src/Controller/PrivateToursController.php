<?php

namespace App\Controller;

use App\Repository\PrivateToursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrivateToursController extends AbstractController
{
    #[Route('/private_tours', name: 'app_private_tours')]
    public function index(PrivateToursRepository $privateToursRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'privateTours' => $privateToursRepository->findAll()
        ]);
    }
}

