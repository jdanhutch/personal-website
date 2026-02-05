<?php

declare(strict_types=1);

use App\Shared\ApplicationParams;
use App\Web\Shared\AboutMe;
use Yiisoft\View\WebView;

/**
 * @var WebView $this
 * @var ApplicationParams $applicationParams
 */

$assetManager->register(AboutMe::class);

$this->setTitle("{$applicationParams->name} - About Me");
?>

<div class="text-center">
    <h1>About Me</h1>

    <div class="about-me-item">
        <img src="assets/images/sunrise.jpg">
        <p>I attended BYU in Provo, UT, surrounded by beautiful mountains and Utah Lake. I was lucky to catch this incredible sunrise!</p>
    </div>

    <div class="about-me-item">
        <img src="assets/images/security_system.jpg">
        <p>My software development journey began during college when I wired together some switches and lights. I put one switch on a door, and four switches on windows. Each of those switches turned on a light when its door or window opened.</p>
    </div>

    <div class="about-me-item">
        <img src="assets/images/slot_cars.jpg">
        <p>When I was a kid, my family discovered slot cars! As an adult, I built this slot car track with my dad.</p>
    </div>

    <div class="about-me-item">
        <img src="assets/images/cat.jpg">
        <p>I like cats!</p>
    </div>
</div>
