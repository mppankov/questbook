<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXsRXXxv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXsRXXxv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXsRXXxv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXsRXXxv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXsRXXxv\App_KernelDevDebugContainer([
    'container.build_hash' => 'XsRXXxv',
    'container.build_id' => 'e7504872',
    'container.build_time' => 1731578064,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXsRXXxv');
