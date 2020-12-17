#!/usr/bin/env php
<?php

use Bref\Context\Context;

define('LARAVEL_START', microtime(true));

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

return function($event, Context $context) {
    logger($event);
};

