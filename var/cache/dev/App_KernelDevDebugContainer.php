<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVu1d71V\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVu1d71V/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVu1d71V.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVu1d71V\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVu1d71V\App_KernelDevDebugContainer([
    'container.build_hash' => 'Vu1d71V',
    'container.build_id' => '98dd2760',
    'container.build_time' => 1713345333,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVu1d71V');
