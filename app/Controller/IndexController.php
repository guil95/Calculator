<?php

namespace Calculator\Controller;
use Calculator\Utils\ResponseCalculator;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController{
    public function index()
    {
     ResponseCalculator::sendJson('Bem vindo a calculadora', JsonResponse::HTTP_OK);
    }
}