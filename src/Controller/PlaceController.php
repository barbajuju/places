<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlaceController extends Controller
{
    /**
     * @Route("/place", name="place")
     */
    public function index()
    {
        return $this->render('place/index.html.twig', [
            'controller_name' => 'PlaceController',
        ]);
    }
}
