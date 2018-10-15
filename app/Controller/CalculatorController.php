<?php

namespace Calculator\Controller;

use Calculator\Operations\OperationFactory;
use Calculator\Operations\OperationExecuteBridge;
use Calculator\Utils\ResponseCalculator;
use Symfony\Component\HttpFoundation\JsonResponse;

class CalculatorController{

    public function addition($numero1, $numero2)
    {
        ResponseCalculator::sendJson(OperationExecuteBridge::execute(
            OperationFactory::getOperation('+',$numero1,$numero2)
        ), JsonResponse::HTTP_OK);
    }

    public function subtraction($numero1, $numero2)
    {
        ResponseCalculator::sendJson(OperationExecuteBridge::execute(
            OperationFactory::getOperation('-',$numero1,$numero2)
        ), JsonResponse::HTTP_OK);
    }

    public function multiplication($numero1, $numero2)
    {
        ResponseCalculator::sendJson(OperationExecuteBridge::execute(
            OperationFactory::getOperation('*',$numero1,$numero2)
        ), JsonResponse::HTTP_OK);
    }

    public function division($numero1, $numero2)
    {
        ResponseCalculator::sendJson(OperationExecuteBridge::execute(
            OperationFactory::getOperation('/',$numero1,$numero2)
        ), JsonResponse::HTTP_OK);
    }

    public function sqrt($numero1)
    {
        ResponseCalculator::sendJson(OperationExecuteBridge::execute(
            OperationFactory::getOperation('sqrt',$numero1)
        ), JsonResponse::HTTP_OK);
    }
}