<?php

declare(strict_types=1);

/*
 * This file is part of DUC App.
 *
 * (c) Eckhard Becker 2024 <info@diversworld.eu>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/diversworld/contao-ducapp-bundle
 */

namespace Diversworld\ContaoDucappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment as Twig;

#[Route('/my_custom', name: MyCustomController::class, defaults: ['_scope' => 'frontend', '_token_check' => true])]
class MyCustomController extends AbstractController
{

    public function __construct(
        private readonly Twig $twig,
    ) {
    }

    public function __invoke(): Response
    {
        $animals = [
            [
                'species' => 'dogs',
                'color' => 'white',
            ],
            [
                'species' => 'birds',
                'color' => 'black',
            ], [
                'species' => 'cats',
                'color' => 'pink',
            ], [
                'species' => 'cows',
                'color' => 'yellow',
            ],
        ];

        return new Response($this->twig->render(
            '@DiversworldContaoDucapp/MyCustom/my_custom.html.twig',
            [
                'animals' => $animals,
            ]
        ));
    }
}
