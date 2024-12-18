<?php

declare(strict_types=1);

/*
 * This file is part of Check Bundle.
 *
 * (c) Eckhard Becker 2024 <info@diversworld.eu>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/diversworld/contao-check-bundle
 */

namespace Diversworld\ContaoCheckBundle;

use Diversworld\ContaoCheckBundle\DependencyInjection\DiversworldContaoCheckExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class DiversworldContaoCheckBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function getContainerExtension(): DiversworldContaoCheckExtension
    {
        return new DiversworldContaoCheckExtension();
    }

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
    }
}
