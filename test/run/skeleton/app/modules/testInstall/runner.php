<?php

$tpl = \BFW\Application::getInstance()
    ->getModuleList()
    ->getModuleByName('bfw-fenom')
    ->fenom
;
$tpl->display('test.html');
