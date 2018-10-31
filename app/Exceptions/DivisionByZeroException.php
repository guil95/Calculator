<?php
/**
 * Created by PhpStorm.
 * User: guilherme.rodrigues
 * Date: 31/10/2018
 * Time: 12:41
 */

namespace Calculator\Exceptions;


class DivisionByZeroException extends \Exception
{
    public function  __construct($message = "Division by zero is not valid", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}