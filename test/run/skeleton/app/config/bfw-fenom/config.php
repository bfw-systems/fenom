<?php
/**
 * Config file for module bfw-fenom
 * @author Vermeulen Maxime <bulton.fr@gmail.com>
 * @package bfw-fenom
 * @version 2.0
 */

/**
 * Default Fenom options
 */
$fenomOptions = [
    'auto_reload' => false
];

/**
 * Override $fenomOptions if debug mode is enabled
 */
$fenomOptionsDebug = [
    'auto_reload' => true
];


$debugStatus = \BFW\Application::getInstance()
    ->getConfig()
    ->getValue('debug', 'global.php')
;
if ($debugStatus === true) {
    $fenomOptions = array_merge($fenomOptions, $fenomOptionsDebug);
}

/**
 * Return config
 */
return [
    /**
     * @var string pathTemplate : Directory where is template files from root
     *  project directory.
     * 
     * @suggest: '/src/view/templates'
     */
    'pathTemplate' => VIEW_DIR.'templates',
    
    /**
     * @var string pathCompiled : Directory where is save compiled template
     * files generate by Fenom.
     * Path should be from root project directory.
     * 
     * Fenom default value is /tmp
     * You can disabled compiled template with option "disable_cache".
     * 
     * @suggest: '/src/view/compiled/templates'
     */
    'pathCompiled' => VIEW_DIR.'compiled/templates',
    
    /**
     * @var array fenomOptions : All options passed to Fenom
     */
    'fenomOptions' => $fenomOptions
];
