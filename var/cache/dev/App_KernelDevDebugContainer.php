<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRa14xxd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRa14xxd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRa14xxd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRa14xxd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRa14xxd\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ra14xxd',
    'container.build_id' => '17818f93',
    'container.build_time' => 1713370119,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRa14xxd');
