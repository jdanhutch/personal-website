<?php

declare(strict_types=1);

namespace App\Web\Shared;

use Yiisoft\Assets\AssetBundle;

final class AboutMe extends AssetBundle
{
    public ?string $basePath = '@assets/aboutMe';
    public ?string $baseUrl = '@assetsUrl/aboutMe';
    public ?string $sourcePath = '@assetsSource/aboutMe';

    public array $css = [
        'about-me.css',
    ];
}
