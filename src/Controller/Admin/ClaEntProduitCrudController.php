<?php

namespace App\Controller\Admin;

use App\Entity\ClaEntProduit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ClaEntProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ClaEntProduit::class;

    }
    // MoneyField::new('price')->setCurrency('EUR'),
    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}