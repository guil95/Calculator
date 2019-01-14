<?php

namespace Calculator\Controller;
use Calculator\Facade\ResponseCalculator;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController{
    public function index()
    {
     ResponseCalculator::sendJson(null,'Bem vindo a calculadora', JsonResponse::HTTP_OK);
    }
}
