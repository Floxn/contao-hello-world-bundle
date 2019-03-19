<?php

// Add palette to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['helloWorld'] = '{title_legend},name,headline,type;{config_legend}hello_file;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['hello_file'] = array
(
    'label'               => 'File',
    'exclude'             => true,
    'inputType'           => 'fileTree',
	'eval'                => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'clr', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
    'sql'                 => "blob NULL"
);
