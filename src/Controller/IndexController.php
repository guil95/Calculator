<?php

namespace Calculator\Controller;
use ApiResponse\Response\ApiResponse;
use Calculator\Facade\ResponseCalculator;

class IndexController{
    public function index()
    {
        ApiResponse::xml([
            'data' => ['dados' => ['arroz' => 'banana']],
            'message' => 'Persist object!'
        ],200);
     //ResponseCalculator::sendJson(null,'Bem vindo a calculadora', JsonResponse::HTTP_OK);
    }
}
