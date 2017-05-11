<?php

$config = $this->getConfig();

$module->fenom = Fenom::factory(
    $config->getValue('pathTemplate'),
    $config->getValue('pathCompiled'),
    $config->getValue('fenomOptions')
);
