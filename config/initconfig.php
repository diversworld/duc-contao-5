<?php

/**
 * Here you can add custom initialization routines that are executed
 * on every back end and front end request.
 */

/** Some extra BE CSS and JS */
if(TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'files/css/_my_be.css';
}