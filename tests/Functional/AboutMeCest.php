<?php

declare(strict_types=1);

namespace App\Tests\Functional;

use App\Tests\Support\FunctionalTester;
use HttpSoft\Message\ServerRequest;

use function PHPUnit\Framework\assertSame;
use function PHPUnit\Framework\assertStringContainsString;

final class AboutMePageCest
{
    public function base(FunctionalTester $tester): void
    {
        $response = $tester->sendRequest(
            new ServerRequest(uri: '/about-me'),
        );

        assertSame(200, $response->getStatusCode());
        assertStringContainsString(
            'About Me',
            $response->getBody()->getContents(),
        );
    }
}
