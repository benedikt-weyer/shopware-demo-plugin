<?php declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set(\WeyerSE\Command\ExampleCommand::class)
        ->tag('console.command');

    $services->set(\WeyerSE\ScheduledTask\ExampleTask::class)
        ->tag('shopware.scheduled.task');

    $services->set(\WeyerSE\Subscriber\MySubscriber::class)
        ->tag('kernel.event_subscriber');

    $services->set(\WeyerSE\Storefront\Controller\ExampleController::class)
        ->public()
        ->call('setContainer', [service('service_container')]);

    $services->set(\WeyerSE\Core\Content\Example\SalesChannel\ExampleRoute::class)
        ->public()
        ->args([
            service('product.repository'),
        ]);

    $services->set(\WeyerSE\Core\Content\TestEntity\TestEntityDefinition::class)
        ->tag('shopware.entity.definition', ['entity' => 'test_entity']);
};
