<?php

use App\Kernel;

// AwardSpace runs a newer PHP version than this Symfony stack targets.
// Hide deprecation notices in production so they do not break page output.
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);
ini_set('display_errors', '0');

require_once __DIR__ . '/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
