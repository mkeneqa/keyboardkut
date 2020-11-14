<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends AbstractController
{
    public function index()
    {
        $response = new JsonResponse();
        return $response->setData(['data' => 'hey homIEndex']);
    }
}