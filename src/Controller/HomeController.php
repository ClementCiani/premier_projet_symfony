<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home/{prenom?world}/{age?20}', name: 'home')]
    public function index(string $prenom, int $age): Response
    {
        $pokemons = [
            'pikachu',
            'salameche',
            'florizard'
        ];

        $ninja = [
            'village' => 'konoha',
            'renard' => 'Kurama'
        ];


        return $this->render('home/index.html.twig', [
            'prenom' => $prenom,
            'age' => $age,
            'pokemons' => $pokemons,
            'ninja'  => $ninja
        ]);
    }
}
