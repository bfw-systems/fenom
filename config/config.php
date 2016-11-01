<?php
/**
 * Fichier de configuration du module bfw-fenom
 * @author Vermeulen Maxime <bulton.fr@gmail.com>
 * @package bfw-fenom
 * @version 1.0
 */

//*** Fenom configs ***

/*
 * Dossier où sont les fichiers template pour fenom par rapport à la racine du projet
 * Exemple : 'view/tpl'
 */
$pathTemplate = '';

/**
 * Dossier où seront stocker les fichiers compilé par fenom
 */
$pathCompiled = '';

/**
 * Options doc : https://github.com/fenom-template/fenom/blob/master/docs/en/configuration.md#template-settings
 */
$fenomOptions = array();

if($BFWKernel->getDebug())
{
    $fenomOptions['auto_reload'] = true;
}
//*** Fenom configs *** 
