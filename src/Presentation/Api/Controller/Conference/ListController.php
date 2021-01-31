<?php

namespace App\Presentation\Api\Controller\Conference;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/", name="conference", methods={"GET"})
     */
    public function __invoke(): JsonResponse
    {
        return new JsonResponse(['conference' => 'tbd: conference list']);
    }
}
