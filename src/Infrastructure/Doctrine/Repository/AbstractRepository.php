<?php

declare(strict_types = 1);

namespace App\Infrastructure\Doctrine\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ObjectRepository;

class AbstractRepository
{
    protected EntityManagerInterface $entityManager;
    protected ObjectRepository $repository;

    public function __construct(EntityManagerInterface $entityManager, string $entityClassName)
    {
        $this->entityManager = $entityManager;
        $this->repository = $entityManager->getRepository($entityClassName);
    }

    public function count(array $criteria): int
    {
        return $this->entityManager->getUnitOfWork()->getEntityPersister($this->repository->getClassName())->count(
            $criteria
        );
    }

    public function createQueryBuilder(string $alias, $indexBy = null): QueryBuilder
    {
        return $this->entityManager->createQueryBuilder()
            ->select($alias)
            ->from($this->repository->getClassName(), $alias, $indexBy);
    }

    protected function getEntityManager(): EntityManagerInterface
    {
        return $this->entityManager;
    }
}
