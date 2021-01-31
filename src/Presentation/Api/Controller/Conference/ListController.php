<?php

namespace App\Presentation\Api\Controller\Conference;

use App\Core\Domain\Entity\Conference;
use App\Core\Domain\Repository\ConferenceRepositoryInterface;
use App\Presentation\Api\Dto\Conference\ConferenceDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/", name="conference", methods={"GET"})
     */
    public function __invoke(ConferenceRepositoryInterface $conferenceRepository): JsonResponse
    {
        $items = $conferenceRepository->list();

        return new JsonResponse(
            [
                'conferences' => $this->toDtos($items),
            ]
        );
    }

    /**
     * @param Conference[] $items
     *
     * @return ConferenceDto[]
     */
    private function toDtos(array $items): array
    {
        $items = array_map(
            static function (Conference $item) {
                return ConferenceDto::fromConference($item);
            },
            $items
        );

        return $items;
    }
}
