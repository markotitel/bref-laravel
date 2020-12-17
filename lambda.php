#!/usr/bin/env php
<?php

use Bref\Context\Context;
use App\LambdaKernel;

define('LARAVEL_START', microtime(true));

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(LambdaKernel::class);

return function($event, Context $context) use($kernel) {
    $kernel->work($event);
};

