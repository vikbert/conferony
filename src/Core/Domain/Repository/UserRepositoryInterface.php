<?php

declare(strict_types = 1);

namespace App\Core\Domain\Repository;

use App\Core\Domain\Entity\User;

interface UserRepositoryInterface
{
    public function findOneByUsername(string $username): User;
}
