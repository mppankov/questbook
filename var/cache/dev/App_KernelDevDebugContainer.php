<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYGqb8xK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYGqb8xK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYGqb8xK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYGqb8xK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYGqb8xK\App_KernelDevDebugContainer([
    'container.build_hash' => 'YGqb8xK',
    'container.build_id' => '878cb321',
    'container.build_time' => 1731413606,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYGqb8xK');