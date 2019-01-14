<?php

namespace Calculator\Facade;
use Symfony\Component\HttpFoundation\JsonResponse;

class ResponseCalculator{

    public static function sendJson(?float $data, ?string $message, int $httpCode)
    {
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode($httpCode);
        $response->setData(compact('message','data'));
        $response->send();
    }
}
