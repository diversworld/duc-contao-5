<?php

/*
 * This file is part of Check Bundle.
 *
 * (c) Eckhard Becker 2024 <info@diversworld.eu>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/diversworld/contao-check-bundle
 */

use Diversworld\ContaoCheckBundle\Model\DwCheckModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['check_modules']['check_collection'] = array(
    'tables' => array('tl_dw_check')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_dw_check'] = DwCheckModel::class;
