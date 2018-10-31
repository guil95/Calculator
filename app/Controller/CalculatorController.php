<?php

namespace Calculator\Controller;

use Calculator\Exceptions\AmountNumbersException;
use Calculator\Exceptions\DivisionByZeroException;
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

        try{
            ValidateRequest::isValid('+', $request);
        }catch (AmountNumbersException $e){
            ResponseCalculator::sendJson(
                null,
                $e->getMessage(),
                JsonResponse::HTTP_BAD_REQUEST
            );
            return;
        }

        $numero1 = (float) $request['numero1'];
        $numero2 = (float) $request['numero2'];

        ResponseCalculator::sendJson(OperationExecuteBridge::execute(
            OperationFactory::getOperation('+',$numero1,$numero2)
        ), "Soma realizada com sucesso", JsonResponse::HTTP_OK);
    }

    public function subtraction()
    {
        $request = Request::createFromGlobals();
        $request = $request->request->all();

        try{
            ValidateRequest::isValid('-', $request);
        }catch (AmountNumbersException $e){
            ResponseCalculator::sendJson(
                null,
                $e->getMessage(),
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

        try{
            ValidateRequest::isValid('*', $request);
        }catch (AmountNumbersException $e){
            ResponseCalculator::sendJson(
                null,
                $e->getMessage(),
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

        try{
            ValidateRequest::isValid('/', $request);
        }catch (DivisionByZeroException $e){
            ResponseCalculator::sendJson(
                null,
                $e->getMessage(),
                JsonResponse::HTTP_BAD_REQUEST
            );
            return;
        }catch (AmountNumbersException $e){
            ResponseCalculator::sendJson(
                null,
                $e->getMessage(),
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

        try{
            ValidateRequest::isValid('sqrt', $request);
        }catch (AmountNumbersException $e){
            ResponseCalculator::sendJson(
                null,
                $e->getMessage(),
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