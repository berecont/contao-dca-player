<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

// playeR vorbelegen
$GLOBALS['TL_DCA']['tl_content']['fields']['playerSize']['default'] = [960,540];

// playeR set ratio
$GLOBALS['TL_DCA']['tl_content']['fields']['playerAspect'] = [
    'inputType' => 'select',
    'options' => ['16:9', '9:16', '4:3', '3:4'],
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['player_aspect'],
    'eval' => [
        'includeBlankOption' => true, 
        'nospace'=>true, 
        'tl_class'=>'w50'
    ],
    'sql' => "varchar(8) COLLATE ascii_bin NOT NULL default ''"
];

PaletteManipulator::create()
    ->addField('playerAspect', 'player_legend', PaletteManipulator::POSITION_APPEND)   
    ->applyToPalette('player', 'tl_content')
;
