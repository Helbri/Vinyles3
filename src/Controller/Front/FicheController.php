<?php
// src/Controller/Front/FicheController.php

namespace App\Controller\Front;

// use App\Entity\ClaEntArtiste;
use App\Entity\ClaEntProduit;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class FicheController extends AbstractController
{
    #[Route('/Fiche/select/{id}')]
    public function select(EntityManagerInterface $entityManager, int $id): Response
    {
        $claEntProduit = $entityManager->getRepository(claEntProduit::class)->find($id);

        $titre_vinyle = $claEntProduit->getPropProduit();
        $prix_vinyle = $claEntProduit->getPropProduitPrice();
        // $nom_artiste = 'C\'est l\'artiste';
        // $nom_genre = 'C\'est le genre';

        return new Response(
            '
                
                <html>
                    <header><title>' . $titre_vinyle . '</title></header>
                    <body>
                        <h1> Titre&nbsp;: ' . $titre_vinyle . '</h1>
                        Prix&nbsp;: ' . $prix_vinyle . '
                    </body>
                </html>'
        );

        // return new Response(
        //     '

        //     <html>
        //         <header><title>' . $titre_vinyle . '</title></header>
        //         <body>
        //             <h1> Titre&nbsp;: ' . $titre_vinyle . '</h1>
        //             <br>Artiste(s)&nbsp;: ' . $nom_artiste . '<br>
        //     Genre(s)&nbsp;: ' . $nom_genre . '.
        //         </body>
        //     </html>'
        // );



    }
}