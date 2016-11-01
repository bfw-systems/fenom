<?php
/**
 * Actions à effectuer lors de l'initialisation du module par le framework.
 * @author Vermeulen Maxime <bulton.fr@gmail.com>
 * @package bfw-sql
 * @version 1.0
 */
 
require_once($rootPath.'configs/bfw-fenom/config.php');

if($pathTemplate !== '')
{
    $pathTemplate = $rootPath.$pathTemplate;
}

if(is_string($pathCompiled) && $pathCompiled !== '')
{
    $pathCompiled = $rootPath.$pathCompiled;
}
else
{
    //Fenom default value.
    //With option "disable_cache" at true, this directory is already declared to compiled_path.
    $pathCompiled = '/tmp';
}

$BFWKernel->fenom = Fenom::factory($pathTemplate, $pathCompiled, $fenomOptions);
