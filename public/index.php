<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

// if ($_SERVER['APP_DEBUG']) {
//     umask(0000);

//     Debug::enable();
// }