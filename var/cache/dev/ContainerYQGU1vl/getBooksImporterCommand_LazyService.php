<?php

namespace ContainerYQGU1vl;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBooksImporterCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\Books_Importer_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.App\\Command\\Books_Importer_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:book_importer', ['app:add-books'], 'Update books database.', false, #[\Closure(name: 'App\\Command\\Books_Importer_command')] fn (): \App\Command\Books_Importer_command => ($container->privates['App\\Command\\Books_Importer_command'] ?? $container->load('getBooksImporterCommandService')));
    }
}