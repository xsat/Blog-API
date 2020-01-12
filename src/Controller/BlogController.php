<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class BlogController
 */
class BlogController extends AbstractController
{
    /**
     * @return Response
     */
    public function number()
    {
        $number = rand(0, 100);

        return $this->render(
            'index.html.twig',
            [
                'number' => $number,
            ]
        );
    }

    /**
     * @return JsonResponse
     */
    public function rand()
    {
        $number = rand(0, 100);

        return $this->json(
            [
                'number' => $number,
            ]
        );
    }

    /**
     * @return JsonResponse
     */
    public function getNumber(int $number)
    {
        return $this->json(
            [
                'number' => $number,
            ]
        );
    }
}
