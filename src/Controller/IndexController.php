<?php

namespace Calculator\Controller;
use Calculator\Facade\ResponseCalculator;

class IndexController{
    public function index()
    {
     ResponseCalculator::sendJson(null,'Bem vindo a calculadora', JsonResponse::HTTP_OK);
    }
}
