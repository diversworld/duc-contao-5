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

namespace Diversworld\ContaoCheckBundle\Model;

use Contao\Model;

class DwCheckModel extends Model
{
    protected static $strTable = 'tl_dw_check';
}
