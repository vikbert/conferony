<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="conference", methods={"GET"})
     */
    public function __invoke(Request $request): Response
    {
        $name = $request->get('greet');

        return $this->render(
            'conference/index.html.twig',
            [
                'controller_name' => 'ConferenceController',
                'name' => $name ?? 'world',
            ]
        );
    }
}
