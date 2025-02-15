<?php

// @see https://github.com/composer-unused/composer-unused

declare(strict_types=1);

use ComposerUnused\ComposerUnused\Configuration\Configuration;
use ComposerUnused\ComposerUnused\Configuration\NamedFilter;

return static function (Configuration $config): Configuration {
    // rector dependency for running "online demo"
    $config->addNamedFilter(NamedFilter::fromString('rector/rector'));

    // used for jajodb patching
    $config->addNamedFilter(NamedFilter::fromString('symplify/vendor-patches'));

    // soon to be used in laravel project
    $config->addNamedFilter(NamedFilter::fromString('spatie/laravel-markdown'));
    $config->addNamedFilter(NamedFilter::fromString('tomasvotruba/punchcard'));
    $config->addNamedFilter(NamedFilter::fromString('tomasvotruba/bladestan'));

    return $config;
};
