<?php

$config = $this->getConfig();

$this->fenom = Fenom::factory(
    $config->getValue('pathTemplate'),
    $config->getValue('pathCompiled'),
    $config->getValue('fenomOptions')
);
