<?php

declare(strict_types=1);

namespace App\Tests\Web;

use App\Tests\Support\WebTester;

final class AboutMePageCest
{
    public function base(WebTester $I): void
    {
        $elementsPath = "//*[contains(@class,'about-me-item')]";

        $I->wantTo('about me page works.');
        $I->amOnPage('/about-me');
        $I->expectTo('see page about me.');

        $I->seeNumberOfElements("{$elementsPath}", 4);

        for ($i = 1; $i <= 4; $i++) { 
            $elementPath = "({$elementsPath})[{$i}]";

            $I->seeNumberOfElements("{$elementPath}/*", 2);
            $I->seeNumberOfElements("{$elementPath}/img", 1);
            $I->seeNumberOfElements("{$elementPath}/p", 1);
        }
    }

    public function homeButton(WebTester $I): void {
        $I->wantTo('about me page\'s home button works');
        $I->amOnPage('/about-me');
        $I->expectTo('go to the home page from the about me page');
        $I->click('Home');
        $I->seeCurrentUrlEquals('/');
    }
}
