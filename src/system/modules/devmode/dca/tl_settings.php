<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package   devmode
 * @author    Simon Kusterer
 * @license   LGPL
 * @copyright Simon Kusterer 2013
 */

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace('debugMode', 'debugMode,devMode', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_settings']['fields']['devMode'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['devMode'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50')
);