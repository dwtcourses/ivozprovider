<?php

namespace Ivoz\Provider\Infrastructure\Persistence\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ivoz\Provider\Domain\Model\Destination\DestinationRepository;
use Ivoz\Provider\Domain\Model\Destination\Destination;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * DestinationDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DestinationDoctrineRepository extends ServiceEntityRepository implements DestinationRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Destination::class);
    }
}