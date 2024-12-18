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

use Diversworld\ContaoCheckBundle\Controller\FrontendModule\CheckListingController;

/**
 * Backend modules
 */
$GLOBALS['TL_LANG']['MOD']['check_modules'] = 'Check Module';
$GLOBALS['TL_LANG']['MOD']['check_collection'] = ['Check', 'Module zum Test'];

/**
 * Frontend modules
 */
$GLOBALS['TL_LANG']['FMD']['check_modules'] = 'Check Frontend';
$GLOBALS['TL_LANG']['FMD'][CheckListingController::TYPE] = ['Check Modul', 'Das ist ein Check Modul'];

