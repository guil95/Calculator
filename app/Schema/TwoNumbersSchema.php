<?php
/**
 * Created by PhpStorm.
 * User: grodrigues
 * Date: 14/01/19
 * Time: 10:57
 */

namespace Calculator\Schema;


class TwoNumbersSchema implements Schema
{
    public static function getSchema(): array
    {
        return [
                "title" => "TwoNumbers",
                "type" => "object",
                "required" => [
                    "number1",
                    "number2"
                ],
                "properties" => [
                    "number1" => [
                        "type" => "number"
                    ],
                    "number2" => [
                        "type" => "number"
                    ]
                ]
            ];
    }
}