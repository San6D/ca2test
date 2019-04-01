<?php namespace App\Tests;
use App\Tests\AcceptanceTester;

class HomePageCest
{
    public function homePageContent(AcceptanceTester $I) {
        $I->amOnPage('/');
        $I->see('home page'); }

    public function homePageLinkToAbout(AcceptanceTester $I) {
        $I->amOnPage('/');
        $I->click('page 2');
        $I->seeInCurrentUrl('/page2');
        $I->see('page2');
    }
}
