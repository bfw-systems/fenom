<?php
/**
 * Actions à effectuer lors de l'initialisation du module par le framework.
 * @author Vermeulen Maxime <bulton.fr@gmail.com>
 * @package bfw-sql
 * @version 1.0
 */
 
require_once(path.'configs/bfw-fenom/config.php');

$BFWKernel->fenom = Fenom::factory($pathTemplate, $pathCompiled, $fenomOptions);
