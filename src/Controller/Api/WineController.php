<?php

namespace App\Controller\Api;

use App\Entity\Wine;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class WineController extends AbstractController
{
    /**
     * @Route("/wines", name="wines_list", methods={"GET"})
     */
    public function getWines(Request $request)
    {
        $wines = $this
            ->getDoctrine()
            ->getRepository(Wine::class)
            ->findAll()
        ;

        return new JsonResponse([
            'wines' => $wines,
        ]);
    }

    /**
     * @Route("/wines/{wineId}", requirements={"wineId" = "\d+"}, name="wine", methods={"GET"})
     */
    public function getWine(Wine $wine)
    {
        if (!$wine) {
            throw new NotFoundHttpException();
        }

        return new JsonResponse($wine);
    }
}
