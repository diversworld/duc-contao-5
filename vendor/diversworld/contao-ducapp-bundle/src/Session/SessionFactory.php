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

namespace Diversworld\ContaoDucappBundle\Session;

use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionFactoryInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SessionFactory implements SessionFactoryInterface
{
    public function __construct(
        private readonly SessionFactoryInterface $inner,
        private readonly SessionBagInterface $sessionBag,
    ) {
    }

    public function createSession(): SessionInterface
    {
        $session = $this->inner->createSession();
        $session->registerBag($this->sessionBag);

        return $session;
    }
}
