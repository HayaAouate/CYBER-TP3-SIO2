<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class IndexController extends AbstractController{
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    #[Route('/index/user/1', name: 'app_index_user', methods: ['GET'])]
    public function indexUser(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',

        ]);
    }



}
