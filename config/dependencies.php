<?php

$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
    \Doctrine\ORM\EntityManagerInterface::class => function () {
        return (new DeboraMind\Portfolio\Infra\EntityManagerCreator())
            ->getEntityManager();
    }
]);
$container = $builder->build();

return $container;
