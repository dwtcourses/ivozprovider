<?php

namespace Ivoz\Kam\Infrastructure\Persistence\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ivoz\Kam\Domain\Model\Dispatcher\DispatcherRepository;
use Ivoz\Kam\Domain\Model\Dispatcher\Dispatcher;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * DispatcherDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DispatcherDoctrineRepository extends ServiceEntityRepository implements DispatcherRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dispatcher::class);
    }
}