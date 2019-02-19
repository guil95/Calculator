<?php

namespace Calculator\Controller;

use ApiResponse\Response\ApiResponse;
use Calculator\Exceptions\AmountNumbersException;
use Calculator\Exceptions\DivisionByZeroException;
use Calculator\Operations\OperationFactory;
use Calculator\Operations\OperationExecute;
use Calculator\Facade\ResponseCalculator;
use Calculator\Validators\ValidateRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController{

    public function addition()
    {
        $request = Request::createFromGlobals();
        $request = json_decode($request->getContent());
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

        $number1 = (float) $request->number1;
        $number2 = (float) $request->number2;


        ApiResponse::json([
            'data' => OperationExecute::execute(
                OperationFactory::getOperation('+',$number1,$number2)
            )
        ], ApiResponse::HTTP_BAD_REQUEST);

//        ResponseCalculator::sendJson(OperationExecute::execute(
//            OperationFactory::getOperation('+',$number1,$number2)
//        ), "Soma realizada com sucesso", JsonResponse::HTTP_OK);
    }

    public function subtraction()
    {
        $request = Request::createFromGlobals();
        $request = $request = json_decode($request->getContent());

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

        $number1 = $request->number1;
        $number2 = $request->number2;

        ResponseCalculator::sendJson(OperationExecute::execute(
            OperationFactory::getOperation('-',$number1,$number2)
        ), "Subtração realizada com sucesso", JsonResponse::HTTP_OK);
    }

    public function multiplication()
    {
        $request = Request::createFromGlobals();
        $request = json_decode($request->getContent());

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

        $number1 = (float) $request->number1;
        $number2 = (float) $request->number2;

        ResponseCalculator::sendJson(OperationExecute::execute(
            OperationFactory::getOperation('*',$number1,$number2)
        ), "Multiplicação realizada com sucesso", JsonResponse::HTTP_OK);
    }

    public function division()
    {
        $request = Request::createFromGlobals();
        $request = json_decode($request->getContent());

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

        $number1 = (float) $request->number1;
        $number2 = (float) $request->number2;

        ResponseCalculator::sendJson(OperationExecute::execute(
            OperationFactory::getOperation('/',$number1,$number2)
        ), "Divisão realizada com sucesso", JsonResponse::HTTP_OK);
    }

    public function sqrt()
    {
        $request = Request::createFromGlobals();
        $request = json_decode($request->getContent());

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

        $number1 = $request->number1;

        ResponseCalculator::sendJson(OperationExecute::execute(
            OperationFactory::getOperation('sqrt',$number1)
        ), "Raiz quadrada realizada com sucesso", JsonResponse::HTTP_OK);
    }
}