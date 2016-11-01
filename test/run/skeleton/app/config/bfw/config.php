<?php

$config = require(__DIR__.'/config.php.original');

$config['modules']['template']['name']    = 'bfw-fenom';
$config['modules']['template']['enabled'] = true;

return $config;
