<?php

$config = $module->getConfig();

$module->fenom = Fenom::factory(
    $config->getConfig('pathTemplate'),
    $config->getConfig('pathCompiled'),
    $config->getConfig('fenomOptions')
);
