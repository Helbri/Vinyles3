<?php

namespace App\Controller\Admin;

use App\Entity\ClaEntArtiste;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ClaEntArtisteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ClaEntArtiste::class;
    }

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
