<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Entity\ClaEntProduit;
use App\Entity\ClaEntArtiste;
use App\Entity\ClaEntStyle;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
// ne pas enlever use Symfony\Component\HttpFoundation\Response;
use App\Controller\Admin\ProductCrudController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/', name: 'admin')]
    //#[Route('/admin', name: 'admin')]
    /**
     * Summary of index
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(): Response
    {
        // return parent::index(); BIEN PENSER A COMMENTER CETTE LIGNE

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(ProductCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }
    /**
     * Summary of configureDashboard
     * @return \Symfony\Component\HttpFoundation\Dashboard 
     */


    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Vinyles');
    }
    /**
     * Summary of configureItems
     */
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::linkToCrud(
            'Produit',
            'fa fa-tags',
            Product::class
        );
        yield MenuItem::linkToCrud(
            'NClaEntProduit',
            // 'fas fa-list', recherche avec "list"
            'fab fa-product-hunt', //recherche avec "product" dans Font Awesome Gallery
                // 'fas fa-p',
            ClaEntProduit::class
        );
        yield MenuItem::linkToCrud(
            'NClaEntArtiste',
            // 'fas fa-list',
            'fas fa-users', //recherche avec "users" dans F A G
            ClaEntArtiste::class
        );
        yield MenuItem::linkToCrud(
            'NClaEntStyle',
            // 'fas fa-list', 
            'fas fa-music', //recherche avec "music" dans F A G
            ClaEntStyle::class
        );

    }
}