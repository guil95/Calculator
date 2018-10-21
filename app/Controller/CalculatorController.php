<?php

namespace Calculator\Controller;

use Calculator\Operations\OperationFactory;
use Calculator\Operations\OperationExecuteBridge;
use Calculator\Facade\ResponseCalculator;
use Calculator\Validators\ValidateRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController{

    public function addition()
    {
        $request = Request::createFromGlobals();
        $request = $request->request->all();
        if(!ValidateRequest::isValid('+', $request)){
            ResponseCalculator::sendJson(
                null,
                'Verifique os parametros passados',
                JsonResponse::HTTP_BAD_REQUEST
            );
            return;
        }
        $numero1 = $request['numero1'];
        $numero2 = $request['numero2'];

        ResponseCalculator::sendJson(OperationExecuteBridge::execute(
            OperationFactory::getOperation('+',$numero1,$numero2)
        ), "Soma realizada com sucesso", JsonResponse::HTTP_OK);
    }

    public function subtraction()
    {
        $request = Request::createFromGlobals();
        $request = $request->request->all();

        if(!ValidateRequest::isValid('-', $request)){
            ResponseCalculator::sendJson(
                null,
                'Verifique os parametros passados',
                JsonResponse::HTTP_BAD_REQUEST
            );
            return;
        }

        $numero1 = $request['numero1'];
        $numero2 = $request['numero2'];

        ResponseCalculator::sendJson(OperationExecuteBridge::execute(
            OperationFactory::getOperation('-',$numero1,$numero2)
        ), "Subtração realizada com sucesso", JsonResponse::HTTP_OK);
    }

    public function multiplication()
    {
        $request = Request::createFromGlobals();
        $request = $request->request->all();

        if(!ValidateRequest::isValid('*', $request)){
            ResponseCalculator::sendJson(
                null,
                'Verifique os parametros passados',
                JsonResponse::HTTP_BAD_REQUEST
            );
            return;
        }

        $numero1 = $request['numero1'];
        $numero2 = $request['numero2'];

        ResponseCalculator::sendJson(OperationExecuteBridge::execute(
            OperationFactory::getOperation('*',$numero1,$numero2)
        ), "Multiplicação realizada com sucesso", JsonResponse::HTTP_OK);
    }

    public function division()
    {
        $request = Request::createFromGlobals();
        $request = $request->request->all();
        if(!ValidateRequest::isValid('/', $request)){
            ResponseCalculator::sendJson(
                null,
                'Verifique os parametros passados, deve se passar dois números e os dois números devem ser diferentes de 0',
                JsonResponse::HTTP_BAD_REQUEST
            );
            return;
        }

        $numero1 = $request['numero1'];
        $numero2 = $request['numero2'];

        ResponseCalculator::sendJson(OperationExecuteBridge::execute(
            OperationFactory::getOperation('/',$numero1,$numero2)
        ), "Divisão realizada com sucesso", JsonResponse::HTTP_OK);
    }

    public function sqrt()
    {
        $request = Request::createFromGlobals();
        $request = $request->request->all();

        if(!ValidateRequest::isValid('sqrt', $request)){
            ResponseCalculator::sendJson(
                null,
                'Verifique os parametros passados',
                JsonResponse::HTTP_BAD_REQUEST
            );
            return;
        }

        $numero1 = $request['numero1'];

        ResponseCalculator::sendJson(OperationExecuteBridge::execute(
            OperationFactory::getOperation('sqrt',$numero1)
        ), "Raiz quadrada realizada com sucesso", JsonResponse::HTTP_OK);
    }
}