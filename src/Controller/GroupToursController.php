<?php

namespace App\Controller;

use App\Repository\GroupToursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GroupToursController extends AbstractController
{
    #[Route('/group_tours', name: 'app_group_tours')]
    public function index(GroupToursRepository $groupToursRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'groupTours' => $groupToursRepository->findAll()
        ]);
    }
}
