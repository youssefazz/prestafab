<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDgxejsq\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDgxejsq/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerDgxejsq.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerDgxejsq\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerDgxejsq\appProdProjectContainer([
    'container.build_hash' => 'Dgxejsq',
    'container.build_id' => '7b68bb80',
    'container.build_time' => 1626709103,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDgxejsq');
