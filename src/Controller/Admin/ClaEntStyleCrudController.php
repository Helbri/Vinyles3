<?php

namespace App\Controller\Admin;

use App\Entity\ClaEntStyle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ClaEntStyleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ClaEntStyle::class;
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
