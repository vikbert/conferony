<?php

declare(strict_types = 1);

namespace App\Core\Domain\Repository;

use App\Core\Domain\Entity\Conference;

interface ConferenceRepositoryInterface
{
    /**
     * @return Conference[]
     */
    public function list(): array;
}
