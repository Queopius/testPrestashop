<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7xgska4\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7xgska4/appProdProjectContainer.php') {
    touch(__DIR__.'/Container7xgska4.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container7xgska4\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container7xgska4\appProdProjectContainer([
    'container.build_hash' => '7xgska4',
    'container.build_id' => '502938a4',
    'container.build_time' => 1609771562,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7xgska4');
