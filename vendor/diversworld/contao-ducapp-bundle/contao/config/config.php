<?php

/*
 * This file is part of DUC App.
 *
 * (c) Eckhard Becker 2024 <info@diversworld.eu>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/diversworld/contao-ducapp-bundle
 */

use Diversworld\ContaoDucappBundle\Model\DucTanksModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['duc_modules']['duc_collection'] = array(
    'tables' => array('tl_duc_tanks')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_duc_tanks'] = DucTanksModel::class;
