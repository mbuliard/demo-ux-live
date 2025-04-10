<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/{op}/{input1}/{input2}', name: 'homepage')]
class HomepageController extends AbstractController
{
    public function __invoke(
        string $op = '+',
        int $input1 = 0,
        int $input2 = 0
    ): Response {
        return $this->render('base.html.twig');
    }

}