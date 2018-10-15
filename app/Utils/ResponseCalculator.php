<?php

namespace Calculator\Utils;
use Symfony\Component\HttpFoundation\JsonResponse;

class ResponseCalculator{

    public static function sendJson($data, $httpCode)
    {
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode($httpCode);
        $response->setData(compact('data'));
        $response->send();
    }
}
