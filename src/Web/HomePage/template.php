<?php

declare(strict_types=1);

use App\Shared\ApplicationParams;
use Yiisoft\View\WebView;

/**
 * @var WebView $this
 * @var ApplicationParams $applicationParams
 */

$this->setTitle($applicationParams->name);
?>

<div class="text-center">
    <h1>Hello!</h1>

    <p>My name is Jeff, a software developer with 8 years of experience using <strong>Yii1</strong>!</p>
    <p>Since <strong>Yii3</strong> released, I've been exploring the new framework and sharing my experience.</p>
    <p>I look forward to learning together along the way!</p>

    <ul class="inline-block text-left">
        <?php foreach ($myCustomParams->thingsToLearn as $thingToLearn): ?>
        <li><?= $thingToLearn ?></li>
        <?php endforeach; ?>
    </ul>

    <p>
        <a href="https://github.com/yiisoft/docs/tree/master/guide/en" target="_blank" rel="noopener">
            <i>Don't forget to check the guide.</i>
        </a>
    </p>
</div>
