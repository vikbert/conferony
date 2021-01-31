<?php

declare(strict_types = 1);

namespace App\Presentation\Api\Dto\Conference;

use App\Core\Domain\Entity\Conference;
use JsonSerializable;

final class ConferenceDto implements JsonSerializable
{
    private string $city;
    private string $year;
    private bool $isInternational;

    private function __construct(string $city, string $year, $isInternational)
    {
        $this->city = $city;
        $this->year = $year;
        $this->isInternational = $isInternational;
    }

    public static function fromConference(Conference $conference): self
    {
        return new self(
            $conference->getCity(),
            $conference->getYear(),
            $conference->isInternational()
        );
    }

    public function jsonSerialize(): array
    {
        return [
            'city' => $this->city,
            'year' => $this->year,
            'isInternational' => $this->isInternational,
        ];
    }
}
