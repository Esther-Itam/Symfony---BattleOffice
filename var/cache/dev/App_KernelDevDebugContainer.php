<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTCgmEx1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTCgmEx1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTCgmEx1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTCgmEx1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTCgmEx1\App_KernelDevDebugContainer([
    'container.build_hash' => 'TCgmEx1',
    'container.build_id' => '95457fae',
    'container.build_time' => 1596207442,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTCgmEx1');
