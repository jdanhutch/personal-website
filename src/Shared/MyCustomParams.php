<?php

declare(strict_types=1);

namespace App\Shared;

final readonly class MyCustomParams
{
    public function __construct(
        public array $thingsToLearn = [],
    ) {}
}
