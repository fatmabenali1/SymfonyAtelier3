<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClubController extends AbstractController
{
    private $nom;
    #[Route('/club/get/{nom}', name: 'get_name')]
    public function getName(string $nom): Response
    {
        return $this->render('club/Detail.html.twig', [
            'name' => $nom,
        ]);
    }
        
    
    #[Route('/club', name: 'app_club')]
    public function index(): Response
    {
        return $this->render('club/index.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }
    #[Route('/club/formation', name: 'tableau')]
    public function list()
    {
        $formations = $this->createFormationsList();

        return $this->render('club/list.html.twig', [
            'formations' => $formations,
        ]);
    }

    private function createFormationsList()
    {
        return array(
            array(
                'ref' => 'form147',
                'Titre' => 'Formation Symfony 4',
                'Description' => 'Formation pratique',
                'date_debut' => '12/06/2020',
                'date_fin' => '19/06/2020',
                'nb_participants' => 19
            ),
            array(
                'ref' => 'form177',
                'Titre' => 'Formation SOA',
                'Description' => 'Formation theorique',
                'date_debut' => '03/12/2020',
                'date_fin' => '10/12/2020',
                'nb_participants' => 0
            ),
            array(
                'ref' => 'form178',
                'Titre' => 'Formation Angular',
                'Description' => 'Formation theorique',
                'date_debut' => '10/06/2020',
                'date_fin' => '14/06/2020',
                'nb_participants' => 12
            )
        );
    
      
        }

}
