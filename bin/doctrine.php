<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;
use DeboraMind\Portfolio\Infra\EntityManagerCreator;

$entityManager = (new EntityManagerCreator)->getEntityManager();

ConsoleRunner::run(
    new SingleManagerProvider($entityManager)
);
