<?php

$tpl = \BFW\Application::getInstance()
    ->getModuleList()
    ->getModuleForName('bfw-fenom')
    ->fenom
;
$tpl->display('test.html');
