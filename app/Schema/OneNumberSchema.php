<?php
/**
 * Created by PhpStorm.
 * User: grodrigues
 * Date: 14/01/19
 * Time: 10:57
 */

namespace Calculator\Schema;


class OneNumberSchema implements Schema
{
    public static function getSchema(): array
    {
        return [
                "title" => "OneNumber",
                "type" => "object",
                "required" => [
                    "number1"
                ],
                "properties" => [
                    "number1" => [
                        "type" => "number"
                    ]
                ]
            ];
    }
}