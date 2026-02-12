<?php

declare(strict_types=1);

namespace App\Tests\Web;

use App\Tests\Support\WebTester;

final class HomePageCest
{
    public function base(WebTester $I): void
    {
        $I->wantTo('home page works.');
        $I->amOnPage('/');
        $I->expectTo('see page home.');
        $I->see('Hello!');
    }

    public function aboutMeButton(WebTester $I): void {
        $I->wantTo('home page\'s about me button works');
        $I->amOnPage('/');
        $I->expectTo('go to the about me page from the home page');
        $I->click('About Me');
        $I->seeCurrentUrlEquals('/about-me');
    }
}
