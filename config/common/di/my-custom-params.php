<?php

declare(strict_types=1);

use App\Shared\MyCustomParams;

/** @var array $params */

return [
    MyCustomParams::class => [
        '__construct()' => [
            'thingsToLearn' => $params['myCustomParams']['thingsToLearn'],
        ],
    ],
];
